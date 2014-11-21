<?php

drush_log('Starting up..','ok');

//$nids = db_query("select entity_id from feeds_item where id='ritzau_newsml_feeds_import' limit 0,10")->fetchCol();
//$count=1;
//foreach (taxonomy_get_tree(3) as $term) {
//  taxonomy_term_delete($term->tid);
//  if ($count++ % 10 == 0)
//    drush_log('Processing tid: '.$term->tid. ' ('.$count. ' of ' . $total.')','ok');
//}
//
//
$query = new EntityFieldQuery();
$result = $query->entityCondition('entity_type', 'node')
  ->propertyCondition('type', 'article')
//  ->fieldCondition('field_tags','tid' ,151,'!=')
// ->range(0,1000)
  ->execute();
//
$nids = $result['node'];
//$total = count($result['node']);
//error_log("Var: \$total = " . print_r($total, 1));

$total = count($nids);
$count =1;
$lang = 'und';
$bugged = array();
foreach ($nids as $nid => $obj) {
  $node = node_load($nid);
  $tid = $node->field_tags[$lang][0]['tid'];
  $tid_new = translate_tid($tid);
  if ($tid_new !== FALSE) {
//    drush_log('Node: '.$nid.' tid: '.$tid.' => '.$tid_new,'ok');
    $node->field_tags[$lang] = array(array('tid' => $tid_new));
    node_save($node);
  } else {
//    drush_log('Node: '.$nid.' tid: '.$tid.' bugged.','error');
    $term = taxonomy_term_load($tid);
//    error_log("Var: \$term = " . print_r($term, 1));
    $bugged[$tid.':'.$term->name.':'.$term->vocabulary_machine_name]++;
  }
  if ($count++ % 10 == 0)
    drush_log('Processing nid: '.$node->nid. ' ('.$count. ' of ' . $total.')','ok');
}
error_log("Var: \$bugged = " . print_r($bugged, 1));
drush_log('Updates done.','ok');


function translate_tid($tid) {
  $tids_inv = drupal_static(__FUNCTION__,array());
    if (empty($tids_inv)) {
    $tids = array(
      904 => array(952, 807, 906, 950, 1589, 905, 911, 965, 960, 978, 909, 910, 963, 962, 943, 951, 921, 920, 928, 912, 1935, 939, 936, 902, 900, 933, 932, 934, 767, 718, 555, 276, 434, 223, 476, 298, 249, 547, 285, 402, 688, 404, 403, 233, 151, 157, 158, 159, 160, 161, 162, 163, 152, 164, 165, 166),
      927 => array(919),
      153 => array(167, 168, 169, 170, 171, 154, 172, 173, 1146, 989, 178),
      958 => array(953, 955, 907, 942, 392, 201, 216),
      2092 => array(954, 957, 956, 946, 947, 908, 964, 923, 922, 924, 929, 913, 914, 915, 916, 898, 875, 899, 937, 941, 940, 903, 935, 301, 200, 552),
      2094 => array(948, 961, 926, 918, 931, 535),
      234 => array(930),
      938 => array(897, 945),
      2096 => array(925),
      155 => array(174, 175, 176, 177, 944, 966, 901),
    );
    $tids_inv = array();
    foreach ($tids as $tid_new => $arr) {
      foreach ($arr as $tid_old) {
        $tids_inv[$tid_old] = $tid_new;
      }
    }
  }
  return isset($tids_inv[$tid])?$tids_inv[$tid]:isset($tids[$tid])?$tid:FALSE;
}
