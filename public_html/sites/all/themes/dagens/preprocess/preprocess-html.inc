<?php 

function dagens_alpha_preprocess_html(&$vars) {
  // Setup IE meta tag to force IE rendering mode
	$bannerdims = array(
    '#type' => 'text/javascript',
    '#tag' => 'script',
    '#attributes' => array(
      'src' =>  'http://eas5.emediate.eu/EAS_tag.1.0.js',
    ),
    '#weight' => '99999',
  );
  
  // Add header meta tag for IE to head
  drupal_add_html_head($bannerdims);

}


?>