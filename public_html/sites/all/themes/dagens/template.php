<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */
 
 /**
* preprocess hook to add variables to the node.tpl.php
*/

/*
 * Implements template_preprocess_node().
 */
function dagens_preprocess_node(&$variables) {
    $variables['randomStringForAd'] = _dagens_random_name(30);
}

function _dagens_random_name($length = 8) {
    $values = array_merge(range(65, 90), range(97, 122), range(48, 57));
    $max = count($values) - 1;
    $str = chr(mt_rand(97, 122));
    for ($i = 1; $i < $length; $i++) {
        $str .= chr($values [mt_rand(0, $max)]);
    }
    return $str;
}


/**
 * Function used in node template, sends body throug preg_replace. Lets us insert html after first
 * paragraph in the article.
 */
function dagens_insert_ad_on_article($matches)
{
    static $count = 1;
    $ret = $matches[1];

    if ($count == 3) {
        $ret .= <<<EOL
<!-- adServing 7.1.1c www.dagens.dk + Adform OS (inread) 1x1 -->
<div style="width:455px">
<script type="text/javascript">
var adspaceid = '713';
var keywords = '';
if(adServingLoad == undefined) var adServingLoad = '';
document.write('<scr'+'ipt type="text/javascript" src="http://dinsalgsvagt.adservinginternational.com/js.php?adspaceid='+adspaceid+'&adServingLoad='+adServingLoad+'&keywords='+keywords+'&click="></scr'+'ipt>');
</script>
<noscript>
<iframe src="http://dinsalgsvagt.adservinginternational.com/iframe.php?adspaceid=713&keywords=&click=" frameborder="0" marginheight="0" marginwidth="0" width="1" height="1" scrolling="no" style="width:1px; height:1px; margin:0px;"></iframe>
</noscript>
</div>
<!-- BEGIN DagensDK_300x250_Desktop_Article_1 -->
<div id='div-DagensDK_300x250_Desktop_Article_1' style='height:250px; width:300px;'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-DagensDK_300x250_Desktop_Article_1'); });
</script>
</div>
<!-- END DagensDK_300x250_Desktop_Article_1 -->
EOL;
    }

    if($count == 10) {
        $ret .= <<<EOL
<!-- BEGIN DagensDK_300x250_Desktop_Article_2 -->
<div id='div-DagensDK_300x250_Desktop_Article_2' style='height:250px; width:300px;'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-DagensDK_300x250_Desktop_Article_2'); });
</script>
</div>
<!-- END DagensDK_300x250_Desktop_Article_2 -->
EOL;
    }

    $count++;

    return $ret;
}