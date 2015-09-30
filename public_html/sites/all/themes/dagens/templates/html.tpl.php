<?php print $doctype; ?>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf->version . $rdf->namespaces; ?>>
<head<?php print $rdf->profile; ?>>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>  
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

  <?php if(drupal_is_front_page()) { ?>
      <!-- BEGIN DFP header scripts on desktop frontpage -->
      <script type='text/javascript'>
          var googletag = googletag || {};
          googletag.cmd = googletag.cmd || [];
          (function () {
              /*jslint browser:true */
              /*jslint eqeq: true*/
              var gads, useSSL, node;
              gads = document.createElement('script');
              gads.async = true;
              gads.type = 'text/javascript';
              useSSL = 'https:' == document.location.protocol;
              gads.src = (useSSL ? 'https:' : 'http:') + '//www.googletagservices.com/tag/js/gpt.js';
              node = document.getElementsByTagName('script')[0];
              node.parentNode.insertBefore(gads, node);
          })();
      </script>

      <script type='text/javascript'>
          googletag.cmd.push(function () {
              googletag.defineSlot('/49662453/TestDagensDK_160x600_L', [160, 600], 'div-DagensDK_160x600_L').addService(googletag.pubads());
              googletag.defineSlot('/49662453/TestDagensDK_160x600_R', [160, 600], 'div-DagensDK_160x600_R').addService(googletag.pubads());
              googletag.defineSlot('/49662453/TestDagensDK_300x250_1', [300, 250], 'div-DagensDk_300x250_1').addService(googletag.pubads());
              googletag.defineSlot('/49662453/TestDagensDK_300x250_2', [300, 250], 'div-DagensDK_300x250_2').addService(googletag.pubads());
              googletag.defineSlot('/49662453/TestDagensDK_930x180_1', [[728, 90], [930, 180]], 'div-DagensDK_930x180_1').addService(googletag.pubads());
              googletag.defineSlot('/49662453/TestDagensDK_930x180_2', [[728, 90], [930, 180]], 'div-gpt-ad-1418125366865-1').addService(googletag.pubads());
              googletag.defineSlot('/49662453/TestDagensDK_930x180_3', [[728, 90], [930, 180]], 'div-gpt-ad-1418125366865-2').addService(googletag.pubads());
              googletag.defineOutOfPageSlot('/49662453/TestDagensDK_InterstitialsOnFrontPage', 'div-DagensDK_InterstitialsOnFrontPage').addService(googletag.pubads());
              googletag.pubads().enableSingleRequest();
              googletag.pubads().collapseEmptyDivs();
              googletag.enableServices();
          });
      </script>
      <!-- END DFP header scripts on desktop frontpage -->
  <?php } else { ?>
    <!-- BEGIN DFP header scripts on desktop article pages -->
      <!-- BEGIN DFP header scripts on desktop article pages -->
      <script type='text/javascript'>
          var googletag = googletag || {};
          googletag.cmd = googletag.cmd || [];
          (function () {
              /*jslint browser:true */
              /*jslint eqeq: true*/
              var gads, useSSL, node;
              gads = document.createElement('script');
              gads.async = true;
              gads.type = 'text/javascript';
              useSSL = 'https:' == document.location.protocol;
              gads.src = (useSSL ? 'https:' : 'http:') + '//www.googletagservices.com/tag/js/gpt.js';
              node = document.getElementsByTagName('script')[0];
              node.parentNode.insertBefore(gads, node);
          })();
      </script>

      <script type='text/javascript'>
          googletag.cmd.push(function () {
              googletag.defineSlot('/49662453/TestDagensDK_160x600_L', [160, 600], 'div-DagensDK_160x600_L').addService(googletag.pubads());
              googletag.defineSlot('/49662453/TestDagensDK_160x600_R', [160, 600], 'div-DagensDK_160x600_R').addService(googletag.pubads());
              googletag.defineSlot('/49662453/TestDagensDK_250x250_Article_1', [250, 250], 'div-DagensDk_250x250_Article_1').addService(googletag.pubads());
              googletag.defineSlot('/49662453/TestDagensDK_250x250_Article_2', [250, 250], 'div-DagensDk_250x250_Article_2').addService(googletag.pubads());
              googletag.defineSlot('/49662453/TestDagensDK_250x250_Article_3', [250, 250], 'div-DagensDk_250x250_Article_3').addService(googletag.pubads());
              googletag.defineSlot('/49662453/TestDagensDK_300x250_1', [300, 250], 'div-DagensDk_300x250_1').addService(googletag.pubads());
              googletag.defineSlot('/49662453/TestDagensDK_300x250_2', [300, 250], 'div-DagensDK_300x250_2').addService(googletag.pubads());
              googletag.defineSlot('/49662453/TestDagensDK_930x180_1', [[728, 90], [930, 180]], 'div-DagensDK_930x180_1').addService(googletag.pubads());
              googletag.defineSlot('/49662453/TestDagensDK_930x180_2', [[728, 90], [930, 180]], 'div-gpt-ad-1418125366865-1').addService(googletag.pubads());
              googletag.defineSlot('/49662453/TestDagensDK_930x180_3', [[728, 90], [930, 180]], 'div-gpt-ad-1418125366865-2').addService(googletag.pubads());
              googletag.defineOutOfPageSlot('/49662453/DagensDK_InterstitialsOnArticlePages', 'div-DagensDK_InterstitialsOnArticlePages').addService(googletag.pubads());
              googletag.defineSlot('/49662453/TestDagensDK_Thumbnails_Article_1', [[600, 200], [600, 450], [600, 338]], 'div-DagensDK_Thumbnails_Article_1').addService(googletag.pubads());
              googletag.pubads().enableSingleRequest();
              googletag.pubads().collapseEmptyDivs();
              googletag.enableServices();
          });
      </script>
      <!-- END DFP header scripts on desktop article pages -->
  <?php } ?>

</head>
<body<?php print $attributes;?>>
<!-- CODE -->
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>

<?php if(drupal_is_front_page()): ?>
<!-- BEGIN DagensDK_InterstitialsOnFrontPage -->
<div id='div-DagensDK_InterstitialsOnFrontPage'>
    <script type='text/javascript'>
        googletag.cmd.push(function() { googletag.display('div-DagensDK_InterstitialsOnFrontPage'); });
    </script>
</div>
<!-- END DagensDK_InterstitialsOnFrontPage -->
<?php else: ?>
<!-- BEGIN DagensDK_InterstitialsOnArticlePages -->
<div id='div-DagensDK_InterstitialsOnArticlePages'>
    <script type='text/javascript'>
        googletag.cmd.push(function() { googletag.display('div-DagensDK_InterstitialsOnArticlePages'); });
    </script>
</div>
<!-- END DagensDK_InterstitialsOnArticlePages -->
<?php endif ?>

<!-- adServing 7.1.1c  + Floating banner -->
<script type="text/javascript">
    var adspaceid = '41';
    var keywords = 'test';
    if(adServingLoad == undefined) var adServingLoad = '';
    document.write('<scr'+'ipt type="text/javascript" src="http://dinsalgsvagt.adservinginternational.com/floating.php?adspaceid='+adspaceid+'&adServingLoad='+adServingLoad+'&keywords='+keywords+'&rnd='+Math.random()+'"></scr'+'ipt>');
</script>

</body>
</html>
