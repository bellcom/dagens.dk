<?php print $doctype; ?>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf->version . $rdf->namespaces; ?>>
<head<?php print $rdf->profile; ?>>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>  
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

  <?php if(drupal_is_front_page()) { ?>
    <!-- BEGIN DFP header scripts on test desktop frontpage -->
    <script type='text/javascript'>
      var pm_pub_id = 119281; // PubMatic Publisher ID.
      var pm_dm_enabled = true; // For DM implementation.
      var pm_timeout = 500; // optional timeout for PubMatic call.
      (function () {
        var pmads = document.createElement('script');
        pmads.async = true;
        pmads.type = 'text/javascript';
        pmads.src = '//ads.pubmatic.com/AdServer/js/dm_gpt_generic.js';
        var node = document.getElementsByTagName('script')[0];
        node.parentNode.insertBefore(pmads, node);
      })();
    </script>
    <script type='text/javascript'>
      var googletag = googletag || {};
      googletag.cmd = googletag.cmd || [];
      setTimeout(function(){
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
      }, 50);
    </script>

    <script type='text/javascript'>
      googletag.cmd.push(function () {
        var skyscraperDisplayAndAdSizeMap, bannerDisplayAndAdSizeMap;
        // 160x600 on desktop (>=1300x600), collapse on tablet and smaller devices devices (<1300x600)
        skyscraperDisplayAndAdSizeMap = googletag.sizeMapping().addSize([0, 0], []).addSize([1300, 600], [160, 600]).build();
        // 930x180 or 728x90 on desktop (>=930x200), 728x90 on tablet and smaller devices devices
        boardDisplayAndAdSizeMap = googletag.sizeMapping().addSize([0, 0], [728, 90]).addSize([930, 200], [[930, 180], [728, 90]]).build();
        googletag.defineSlot('/49662453/TestDagensDK_930x180_1', [[728, 90], [930, 180]], 'div-DagensDK_930x180_1').defineSizeMapping(boardDisplayAndAdSizeMap).addService(googletag.pubads());
        googletag.defineSlot('/49662453/TestDagensDK_160x600_L', [160, 600], 'div-DagensDK_160x600_L').defineSizeMapping(skyscraperDisplayAndAdSizeMap).addService(googletag.pubads());
        googletag.defineSlot('/49662453/TestDagensDK_160x600_R', [160, 600], 'div-DagensDK_160x600_R').defineSizeMapping(skyscraperDisplayAndAdSizeMap).addService(googletag.pubads());
        googletag.defineSlot('/49662453/TestDagensDk_300x250_1', [300, 250], 'div-DagensDk_300x250_1').addService(googletag.pubads());
        googletag.defineSlot('/49662453/TestDagensDK_300x250_2', [300, 250], 'div-DagensDK_300x250_2').addService(googletag.pubads());
        googletag.defineSlot('/49662453/TestDagensDK_930x180_2', [[728, 90], [930, 180]], 'div-gpt-ad-1418125366865-1').defineSizeMapping(boardDisplayAndAdSizeMap).addService(googletag.pubads());
        googletag.defineSlot('/49662453/TestDagensDK_930x180_3', [[728, 90], [930, 180]], 'div-gpt-ad-1418125366865-2').defineSizeMapping(boardDisplayAndAdSizeMap).addService(googletag.pubads());
        googletag.defineOutOfPageSlot('/49662453/TestDagensDK_InterstitialsOnFrontPage', 'div-DagensDK_InterstitialsOnFrontPage').addService(googletag.pubads());
        googletag.pubads().enableSingleRequest();
        googletag.pubads().collapseEmptyDivs();
        googletag.enableServices();
      });
    </script>
    <!-- END DFP header scripts on test desktop frontpage -->
  <?php } else { ?>
    <!-- BEGIN DFP header scripts on test desktop article pages -->
    <script type='text/javascript'>
      var pm_pub_id = 119281; // PubMatic Publisher ID.
      var pm_dm_enabled = true; // For DM implementation.
      var pm_timeout = 500; // optional timeout for PubMatic call.
      (function () {
        var pmads = document.createElement('script');
        pmads.async = true;
        pmads.type = 'text/javascript';
        pmads.src = '//ads.pubmatic.com/AdServer/js/dm_gpt_generic.js';
        var node = document.getElementsByTagName('script')[0];
        node.parentNode.insertBefore(pmads, node);
      })();
    </script>
    <script type='text/javascript'>
      var googletag = googletag || {};
      googletag.cmd = googletag.cmd || [];
      setTimeout(function(){
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
      }, 50);
    </script>

    <script type='text/javascript'>
      googletag.cmd.push(function () {
        var skyscraperDisplayAndAdSizeMap, bannerDisplayAndAdSizeMap;
        // 160x600 on desktop (>=1300x600), collapse on tablet and smaller devices devices (<1300x600)
        skyscraperDisplayAndAdSizeMap = googletag.sizeMapping().addSize([0, 0], []).addSize([1300, 600], [160, 600]).build();
        // 930x180 or 728x90 on desktop (>=930x200), 728x90 on tablet and smaller devices devices
        boardDisplayAndAdSizeMap = googletag.sizeMapping().addSize([0, 0], [728, 90]).addSize([930, 200], [[930, 180], [728, 90]]).build();
        googletag.defineSlot('/49662453/TestDagensDK_930x180_1', [[728, 90], [930, 180]], 'div-DagensDK_930x180_1').defineSizeMapping(boardDisplayAndAdSizeMap).addService(googletag.pubads());
        googletag.defineSlot('/49662453/TestDagensDK_160x600_L', [160, 600], 'div-DagensDK_160x600_L').defineSizeMapping(skyscraperDisplayAndAdSizeMap).addService(googletag.pubads());
        googletag.defineSlot('/49662453/TestDagensDK_160x600_R', [160, 600], 'div-DagensDK_160x600_R').defineSizeMapping(skyscraperDisplayAndAdSizeMap).addService(googletag.pubads());
        googletag.defineSlot('/49662453/TestDagensDk_250x250_Article_1', [250, 250], 'div-DagensDk_250x250_Article_1').addService(googletag.pubads());
        googletag.defineSlot('/49662453/TestDagensDk_300x250_1', [300, 250], 'div-DagensDk_300x250_1').addService(googletag.pubads());
        googletag.defineSlot('/49662453/TestDagensDK_300x250_Desktop_Article_1', [[300, 250], [448, 252]], 'div-DagensDK_300x250_Desktop_Article_1').addService(googletag.pubads());
        googletag.defineSlot('/49662453/TestDagensDK_300x250_Desktop_Article_2', [[300, 250], [448, 252]], 'div-DagensDK_300x250_Desktop_Article_2').addService(googletag.pubads());
        googletag.defineSlot('/49662453/TestDagensDK_300x250_2', [300, 250], 'div-DagensDK_300x250_2').addService(googletag.pubads());
        googletag.defineSlot('/49662453/TestDagensDK_930x180_2', [[728, 90], [930, 180]], 'div-gpt-ad-1418125366865-1').defineSizeMapping(boardDisplayAndAdSizeMap).addService(googletag.pubads());
        googletag.defineSlot('/49662453/TestDagensDK_930x180_3', [[728, 90], [930, 180]], 'div-gpt-ad-1418125366865-2').defineSizeMapping(boardDisplayAndAdSizeMap).addService(googletag.pubads());
        googletag.defineOutOfPageSlot('/49662453/TestDagensDK_InterstitialsOnArticlePages', 'div-DagensDK_InterstitialsOnArticlePages').addService(googletag.pubads());
        googletag.pubads().enableSingleRequest();
        googletag.pubads().collapseEmptyDivs();
        googletag.enableServices();
      });
    </script>
    <!-- END DFP header scripts on test desktop article pages -->
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
