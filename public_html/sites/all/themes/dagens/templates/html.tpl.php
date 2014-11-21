<?php print $doctype; ?>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf->version . $rdf->namespaces; ?>>
<head<?php print $rdf->profile; ?>>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>  
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<script type='text/javascript'>
var googletag = googletag || {};
googletag.cmd = googletag.cmd || [];
(function() {
var gads = document.createElement('script');
gads.async = true;
gads.type = 'text/javascript';
var useSSL = 'https:' == document.location.protocol;
gads.src = (useSSL ? 'https:' : 'http:') + 
'//www.googletagservices.com/tag/js/gpt.js';
var node = document.getElementsByTagName('script')[0];
node.parentNode.insertBefore(gads, node);
})();
</script>

<script type='text/javascript'>
googletag.cmd.push(function() {
googletag.defineSlot('/49662453/artikelbanner_midt_dagens.dk', [300, 250], 'div-gpt-ad-1383227711488-0').addService(googletag.pubads());
googletag.pubads().enableSingleRequest();
googletag.enableServices();
});
googletag.cmd.push(function() {
googletag.defineSlot('/49662453/DagensDK_930x180_Bottom', [[728, 90], [930, 180]], 'div-gpt-ad-1416234658363-0').addService(googletag.pubads());
googletag.pubads().enableSingleRequest();
googletag.enableServices();
});
</script>

</head>
<body<?php print $attributes;?>>
<!-- CODE -->
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>

<!-- adServing 7.1.1c  + Floating banner -->
<script type="text/javascript">
     var adspaceid = '41';
     var keywords = 'sex';
     if(adServingLoad == undefined) var adServingLoad = '';
     document.write('<scr'+'ipt type="text/javascript" src="http://dinsalgsvagt.adservinginternational.com/floating.php?adspaceid='+adspaceid+'&adServingLoad='+adServingLoad+'&keywords='+keywords+'&rnd='+Math.random()+'"></scr'+'ipt>');
</script>



</body>
</html>
