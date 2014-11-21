<?php

/**
* Implements hook_feeds_processor_targets_alter().
*
* @see FeedsNodeProcessor::getMappingTargets().
*/
function file_feeds_processor_targets_alter(&$targets, $entity_type, $bundle_name) {
    foreach (field_info_instances($entity_type, $bundle_name) as $name => $instance) {
        $info = field_info_field($name);

        if (in_array($info['type'], array('file', 'image'))) {
            $targets[$name . ":uri"] = array(
                'name' => check_plain($instance['label']) . ': Uri',
                'callback' => 'file_feeds_set_target',
                'description' => t('The @label field of the node.', array('@label' => $instance['label'])),
            );
            if ($info['type'] == 'image') {
                $targets[$name . ":alt"] = array(
                    'name' => $instance['label'] . ': Alt',
                    'callback' => 'file_feeds_set_target',
                    'description' => t('The alt tag the @label field.', array('@label' => $instance['label'])),
                    'real_target' => $name,
                );
                $targets[$name . ":title"] = array(
                    'name' => $instance['label'] . ': Title',
                    'callback' => 'file_feeds_set_target',
                    'description' => t('The title for the @label field.', array('@label' => $instance['label'])),
                    'real_target' => $name,
                );
            }
        }
    }
}

function file_feeds_set_target($source, $entity, $target, $value) {
    if (empty($value)) {
        return;
    }
    module_load_include('inc', 'file');

    // Make sure $value is an array of objects of type FeedsEnclosure.
    if (!is_array($value)) {
        $value = array($value);
    }
    foreach ($value as $k => $v) {
        if (!($v instanceof FeedsEnclosure)) {
            if (is_string($v)) {
                $value[$k] = new FeedsEnclosure($v, 'application/octet-stream');
            } else {
                unset($value[$k]);
            }
        }
    }
    if (empty($value)) {
        return;
    }

    // Determine file destination.
    // @todo This needs review and debugging.
    list($field_name, $sub_field) = explode(':', $target);
    list($entity_id, $vid, $bundle_name) = entity_extract_ids($entity->feeds_item->entity_type, $entity);
    $instance_info = field_info_instance($entity->feeds_item->entity_type, $field_name, $bundle_name);
    $info = field_info_field($field_name);
    $data = array();
    if (!empty($entity->uid)) {
        $data[$entity->feeds_item->entity_type] = $entity;
    }
    $destination = file_field_widget_uri($info, $instance_info, $data);

    // Populate entity.
    $i = 0;
    $field = isset($entity->$field_name) ? $entity->$field_name : array();
    foreach ($value as $v) {
        switch ($sub_field) {
            case 'alt':
            case 'title':
                $field[LANGUAGE_NONE][$i][$sub_field] = $v;
                break;
            case 'uri':
                if ($file = $v->getFile($destination)) {
                    $file = (array) $file;
                    if (isset($field[LANGUAGE_NONE][$i])) {
                        $file = array_merge($file, $field[LANGUAGE_NONE][$i]);
                    }
                    $field[LANGUAGE_NONE][$i] = $file;
                    $field[LANGUAGE_NONE][$i]['display'] = 1; // @todo: Figure out how to properly populate this field.
                }
                break;
        }
        if ($info['cardinality'] == 1) {
            break;
        }
        $i++;
    }
    $entity->{$field_name} = $field;
}
?>

