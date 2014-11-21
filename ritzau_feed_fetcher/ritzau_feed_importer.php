<?php
$uid = 272;
$type = 'article';
$category = 10483;

$realpath = '/var/www/dagens.dk/ritzau_feed_fetcher/feeds/feed.xml';

if(!is_file($realpath)){
  die("\nFile not found: ". $realpath . "\n\n");
}

$string = file_get_contents($realpath);


$xml = new SimpleXMLElement($string);
$result = $xml->xpath('//RBNews');

while(list( , $obj) = each($result)) {
  $node = NULL;
  $query = db_query('SELECT * FROM  `node_revision` WHERE  `log` LIKE  :newsid', array(':newsid' => '%'.reset($obj->NewsID).'%'))->fetchAll();

  // If the query is empty, the article is not yet created. 
  // We create a node object for the new article.
  if(empty($query)){
    $node = new stdClass();
    $node->type = $type;

    node_object_prepare($node);

    $node->uid = $uid;
    $node->language = LANGUAGE_NONE;
    $node->title = reset($obj->headline);
    $node->field_tags[LANGUAGE_NONE][0]['tid'] = $category;

    // Get images from the feed
    if(!empty($obj->MultimedieList)){
      $medianetpath = $obj->MultimedieList->Multimedie->MedienetPath;
      $mediafile = $obj->MultimedieList->Multimedie->Files->MedieFile[3];

      $image = system_retrieve_file('http://picture.ritzau.dk/' . $medianetpath . $mediafile->filename, NULL, TRUE, FILE_EXISTS_RENAME);
      if(is_object($image)){
        $node->field_image[LANGUAGE_NONE][0]['fid'] = $image->fid;
        $node->field_image[LANGUAGE_NONE][0]['uri'] = $image->uri;
      }
    }
  }

  // If the feeds says the article is a replacement for a
  // earlier edition, we query for the previous article,
  // and load the node object
  if(!empty($obj->Replaces)){
    $replaces = reset($obj->Replaces);
    if(is_numeric(key($replaces))){
      $replaces = end($replaces);
    }
    $replace_query = db_query('SELECT * FROM  `node_revision` WHERE  `log` LIKE  :newsid', array(':newsid' => '%'.$replaces->NewsID.'%'))->fetchAll();

    if(!empty($replace_query)){
      $node = node_load($replace_query[0]->nid);
      if(strpos($node->log, $obj->NewsID)){
        // Dont update the node, if it is allready updated
        $node = NULL;
        continue;
      }
      echo "Update article \n";
    }

    $replaces = NULL;
    $replace_query = NULL;
  }

  // Add data to the node
  if(is_object($node)){
    $node->changed = time();
    $node->log .= reset($obj->NewsID) . '.';

    $node->field_slugline[LANGUAGE_NONE][0]['value'] = strip_tags(reset($obj->subtitle));
    $node->body[LANGUAGE_NONE][0]['value'] = strip_tags(reset($obj->content), '<p>');
    $node->body[LANGUAGE_NONE][0]['format'] = 'full_html';

    node_save($node);
    echo "Article created " . $node->title . "\n";
  }
  else {
    echo "Article already created \n";
  }
}

unlink($realpath);
