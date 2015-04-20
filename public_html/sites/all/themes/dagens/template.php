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


/**
 * Function used in node template, sends body throug preg_replace. Lets us insert html after first
 * paragraph in the article.
 */
function dagens_insert_ad_on_article($matches)
{
    static $count = 0;
    $ret = $matches[1];
    if (++$count == 3) {
        $ret .= <<<EOL
<!-- adServing 7.1.1c www.dagens.dk + Adform OS (inread) 1x1 -->
<script type="text/javascript">
var adspaceid = '713';
var keywords = '';
if(adServingLoad == undefined) var adServingLoad = '';
document.write('<scr'+'ipt type="text/javascript" src="http://dinsalgsvagt.adservinginternational.com/js.php?adspaceid='+adspaceid+'&adServingLoad='+adServingLoad+'&keywords='+keywords+'&click="></scr'+'ipt>');
</script>
<noscript>
<iframe src="http://dinsalgsvagt.adservinginternational.com/iframe.php?adspaceid=713&keywords=&click=" frameborder="0" marginheight="0" marginwidth="0" width="1" height="1" scrolling="no" style="width:1px; height:1px; margin:0px;"></iframe>
</noscript>
EOL;
    }
    return $ret;
}