<?php print $doctype; ?>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf->version . $rdf->namespaces; ?>>
<head<?php print $rdf->profile; ?>>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

  <?php if(drupal_is_front_page()) { ?>      <!-- BEGIN DFP header scripts -->
    <!-- SITE DEFINITION -->
    <script type='text/javascript'>
      var is_dagens_mobile, is_dagens_frontpage, dagens_category;
      is_dagens_mobile = false;
      is_dagens_frontpage = true;
      if (window.location.hostname === "test.dagens.dk") {
        dagens_category = "Test";
      } else {
        dagens_category = ""; // Live
      }
    </script>
    <script type='text/javascript'>
      var pm_pub_id = 119281; // PubMatic Publisher ID.
      var pm_dm_enabled = true; // For DM implementation.
      var pm_timeout = 500; // optional timeout for PubMatic call.
      (function () {
        var pmads, node;
        pmads = document.createElement('script');
        pmads.async = true;
        pmads.type = 'text/javascript';
        pmads.src = '//ads.pubmatic.com/AdServer/js/dm_gpt_generic.js';
        node = document.getElementsByTagName('script')[0];
        node.parentNode.insertBefore(pmads, node);
      })();
    </script>
    <script type='text/javascript'>
      var googletag = googletag || {};
      googletag.cmd = googletag.cmd || [];
      setTimeout(function () {
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
    <script src="//sak.userreport.com/mediagroup/launcher.js"></script>
    <script type='text/javascript'>
      googletag.cmd.push(function () {
        var do_skyscrapers_fit, boardDisplayAndAdSizeMap, skyscraperDisplayAndAdSizeMap, mobileATFDisplayAndAdSizeMap, mobileBTFDisplayAndAdSizeMap, mobileInTextDisplayAndAdSizeMap;
        do_skyscrapers_fit = window.screen.availWidth > 1300 || window.screen.availHeight > 1300 || window.innerWidth > 1300 || window.innerHeight > 1300;
        // 930x180 or 728x90 on desktop (>=930x200), 728x90 on tablet and smaller devices devices
        boardDisplayAndAdSizeMap = googletag.sizeMapping().addSize([0, 0], [728, 90]).addSize([930, 200], [930, 180]).build();
        mobileATFDisplayAndAdSizeMap = googletag.sizeMapping().addSize([0, 0], [[320, 320], [336, 280]]).build(); //outer max
        mobileBTFDisplayAndAdSizeMap = googletag.sizeMapping().addSize([0, 0], [[320, 320], [300, 600], [336, 280]]).build(); //outer max
        mobileInTextDisplayAndAdSizeMap = googletag.sizeMapping().addSize([0, 0], [[320, 320], [336, 280]]).build(); //outer max
        if (is_dagens_mobile) {
          if (!is_dagens_frontpage) {
            googletag.defineSlot('/49662453/' + dagens_category + 'DagensDK_Mobile_300x50_Article_1', [[300, 50], [300, 80], [300, 100], [300, 250], [320, 50], [320, 80], [320, 100], [320, 320], [336, 280]], 'div-DagensDK_Mobile_300x50_Article_1').defineSizeMapping(mobileATFDisplayAndAdSizeMap).addService(googletag.pubads());
            googletag.defineSlot('/49662453/' + dagens_category + 'DagensDK_Mobile_300x50_Article_2', [[300, 50], [300, 80], [300, 100], [300, 250], [320, 50], [320, 80], [320, 100], [320, 320], [336, 280]], 'div-DagensDK_Mobile_300x50_Article_2').defineSizeMapping(mobileInTextDisplayAndAdSizeMap).addService(googletag.pubads());
            googletag.defineSlot('/49662453/' + dagens_category + 'DagensDK_Mobile_Article_3', [[300, 50], [300, 80], [300, 100], [300, 250], [320, 50], [320, 80], [320, 100], [320, 320], [336, 280]], 'div-DagensDK_Mobile_Article_3').defineSizeMapping(mobileInTextDisplayAndAdSizeMap).addService(googletag.pubads());
            googletag.defineSlot('/49662453/' + dagens_category + 'DagensDK_Mobile_Article_4', [[300, 50], [300, 80], [300, 100], [300, 250], [320, 50], [320, 80], [320, 100], [320, 320], [336, 280]], 'div-DagensDK_Mobile_Article_4').defineSizeMapping(mobileInTextDisplayAndAdSizeMap).addService(googletag.pubads());
            googletag.defineSlot('/49662453/' + dagens_category + 'DagensDK_Mobile_300x50_1', [[300, 50], [300, 80], [300, 100], [300, 250], [300, 600], [320, 50], [320, 80], [320, 100], [320, 320], [336, 280]], 'div-DagensDK_Mobile_300x50_1').defineSizeMapping(mobileBTFDisplayAndAdSizeMap).addService(googletag.pubads());
          } else {
            googletag.defineSlot('/49662453/' + dagens_category + 'DagensDK_Mobile_300x50_1', [[300, 50], [300, 80], [300, 100], [300, 250], [300, 600], [320, 50], [320, 80], [320, 100], [320, 320], [336, 280]], 'div-DagensDK_Mobile_300x50_1').defineSizeMapping(mobileATFDisplayAndAdSizeMap).addService(googletag.pubads());
          }
          googletag.defineSlot('/49662453/' + dagens_category + 'DagensDK_Mobile_300x50_2', [[300, 50], [300, 80], [300, 100], [300, 250], [300, 600], [320, 50], [320, 80], [320, 100], [320, 320], [336, 280]], 'div-DagensDK_Mobile_300x50_2').defineSizeMapping(mobileBTFDisplayAndAdSizeMap).addService(googletag.pubads());
          googletag.defineSlot('/49662453/' + dagens_category + 'DagensDK_Mobile_300x50_3', [[300, 50], [300, 80], [300, 100], [300, 250], [300, 600], [320, 50], [320, 80], [320, 100], [320, 320], [336, 280]], 'div-DagensDK_Mobile_300x50_3').defineSizeMapping(mobileBTFDisplayAndAdSizeMap).addService(googletag.pubads());
        } else {
          if (!is_dagens_frontpage) {
            googletag.defineSlot('/49662453/' + dagens_category + 'DagensDk_250x250_Article_1', [250, 250], 'div-DagensDk_250x250_Article_1').addService(googletag.pubads());
            googletag.defineOutOfPageSlot('/49662453/' + dagens_category + 'DagensDK_300x250_Desktop_Article_1', 'div-DagensDK_300x250_Desktop_Article_1').addService(googletag.pubads());
            googletag.defineSlot('/49662453/' + dagens_category + 'DagensDK_300x250_Desktop_Article_2', [[300, 250], [448, 252]], 'div-DagensDK_300x250_Desktop_Article_2').addService(googletag.pubads());
          }
          googletag.defineSlot('/49662453/' + dagens_category + 'DagensDK_930x180_1', [[728, 90], [930, 180]], 'div-DagensDK_930x180_1').defineSizeMapping(boardDisplayAndAdSizeMap).addService(googletag.pubads());
          if (do_skyscrapers_fit) { // no sizemap needed to detect if they fit
            googletag.defineSlot('/49662453/' + dagens_category + 'DagensDK_160x600_L', [160, 600], 'div-DagensDK_160x600_L').addService(googletag.pubads());
            googletag.defineSlot('/49662453/' + dagens_category + 'DagensDK_160x600_R', [160, 600], 'div-DagensDK_160x600_R').addService(googletag.pubads());
          } else {
            skyscraperDisplayAndAdSizeMap = googletag.sizeMapping().addSize([0, 0], []).addSize([1300, 600], [160, 600]).build();
            googletag.defineSlot('/49662453/' + dagens_category + 'DagensDK_160x600_L', [160, 600], 'div-DagensDK_160x600_L').defineSizeMapping(skyscraperDisplayAndAdSizeMap).addService(googletag.pubads());
            googletag.defineSlot('/49662453/' + dagens_category + 'DagensDK_160x600_R', [160, 600], 'div-DagensDK_160x600_R').defineSizeMapping(skyscraperDisplayAndAdSizeMap).addService(googletag.pubads());
          }
          googletag.defineSlot('/49662453/' + dagens_category + 'DagensDk_300x250_1', [300, 250], 'div-DagensDk_300x250_1').addService(googletag.pubads());
          googletag.defineSlot('/49662453/' + dagens_category + 'DagensDK_300x250_2', [300, 250], 'div-DagensDK_300x250_2').addService(googletag.pubads());
          googletag.defineSlot('/49662453/' + dagens_category + 'DagensDK_930x180_2', [[728, 90], [930, 180]], 'div-gpt-ad-1418125366865-1').defineSizeMapping(boardDisplayAndAdSizeMap).addService(googletag.pubads());
          googletag.defineSlot('/49662453/' + dagens_category + 'DagensDK_930x180_3', [[728, 90], [930, 180]], 'div-gpt-ad-1418125366865-2').defineSizeMapping(boardDisplayAndAdSizeMap).addService(googletag.pubads());
        }
        if (is_dagens_frontpage) {
          googletag.defineOutOfPageSlot('/49662453/' + dagens_category + 'DagensDK_InterstitialsOnFrontPage', 'div-DagensDK_InterstitialsOnFrontPage').addService(googletag.pubads());
        } else {
          googletag.defineOutOfPageSlot('/49662453/' + dagens_category + 'DagensDK_InterstitialsOnArticlePages', 'div-DagensDK_InterstitialsOnArticlePages').addService(googletag.pubads());
        }
        googletag.pubads().enableSingleRequest();
        googletag.pubads().collapseEmptyDivs();
        googletag.enableServices();
      });
    </script>
    <!-- END DFP header scripts -->
  <?php } else { ?>
    <!-- BEGIN DFP header scripts -->
    <!-- SITE DEFINITION -->
    <script type='text/javascript'>
      var is_dagens_mobile, is_dagens_frontpage, dagens_category;
      is_dagens_mobile = false;
      is_dagens_frontpage = false;
      if (window.location.hostname === "test.dagens.dk") {
        dagens_category = "Test";
      } else {
        dagens_category = ""; // Live
      }
    </script>
    <script type='text/javascript'>
      var pm_pub_id = 119281; // PubMatic Publisher ID.
      var pm_dm_enabled = true; // For DM implementation.
      var pm_timeout = 500; // optional timeout for PubMatic call.
      (function () {
        var pmads, node;
        pmads = document.createElement('script');
        pmads.async = true;
        pmads.type = 'text/javascript';
        pmads.src = '//ads.pubmatic.com/AdServer/js/dm_gpt_generic.js';
        node = document.getElementsByTagName('script')[0];
        node.parentNode.insertBefore(pmads, node);
      })();
    </script>
    <script type='text/javascript'>
      var googletag = googletag || {};
      googletag.cmd = googletag.cmd || [];
      setTimeout(function () {
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
    <script src="//sak.userreport.com/mediagroup/launcher.js"></script>
    <script type='text/javascript'>
      googletag.cmd.push(function () {
        var do_skyscrapers_fit, boardDisplayAndAdSizeMap, skyscraperDisplayAndAdSizeMap, mobileATFDisplayAndAdSizeMap, mobileBTFDisplayAndAdSizeMap, mobileInTextDisplayAndAdSizeMap;
        do_skyscrapers_fit = window.screen.availWidth > 1300 || window.screen.availHeight > 1300 || window.innerWidth > 1300 || window.innerHeight > 1300;
        // 930x180 or 728x90 on desktop (>=930x200), 728x90 on tablet and smaller devices devices
        boardDisplayAndAdSizeMap = googletag.sizeMapping().addSize([0, 0], [728, 90]).addSize([930, 200], [930, 180]).build();
        mobileATFDisplayAndAdSizeMap = googletag.sizeMapping().addSize([0, 0], [[320, 320], [336, 280]]).build(); //outer max
        mobileBTFDisplayAndAdSizeMap = googletag.sizeMapping().addSize([0, 0], [[320, 320], [300, 600], [336, 280]]).build(); //outer max
        mobileInTextDisplayAndAdSizeMap = googletag.sizeMapping().addSize([0, 0], [[320, 320], [336, 280]]).build(); //outer max
        if (is_dagens_mobile) {
          if (!is_dagens_frontpage) {
            googletag.defineSlot('/49662453/' + dagens_category + 'DagensDK_Mobile_300x50_Article_1', [[300, 50], [300, 80], [300, 100], [300, 250], [320, 50], [320, 80], [320, 100], [320, 320], [336, 280]], 'div-DagensDK_Mobile_300x50_Article_1').defineSizeMapping(mobileATFDisplayAndAdSizeMap).addService(googletag.pubads());
            googletag.defineSlot('/49662453/' + dagens_category + 'DagensDK_Mobile_300x50_Article_2', [[300, 50], [300, 80], [300, 100], [300, 250], [320, 50], [320, 80], [320, 100], [320, 320], [336, 280]], 'div-DagensDK_Mobile_300x50_Article_2').defineSizeMapping(mobileInTextDisplayAndAdSizeMap).addService(googletag.pubads());
            googletag.defineSlot('/49662453/' + dagens_category + 'DagensDK_Mobile_Article_3', [[300, 50], [300, 80], [300, 100], [300, 250], [320, 50], [320, 80], [320, 100], [320, 320], [336, 280]], 'div-DagensDK_Mobile_Article_3').defineSizeMapping(mobileInTextDisplayAndAdSizeMap).addService(googletag.pubads());
            googletag.defineSlot('/49662453/' + dagens_category + 'DagensDK_Mobile_Article_4', [[300, 50], [300, 80], [300, 100], [300, 250], [320, 50], [320, 80], [320, 100], [320, 320], [336, 280]], 'div-DagensDK_Mobile_Article_4').defineSizeMapping(mobileInTextDisplayAndAdSizeMap).addService(googletag.pubads());
            googletag.defineSlot('/49662453/' + dagens_category + 'DagensDK_Mobile_300x50_1', [[300, 50], [300, 80], [300, 100], [300, 250], [300, 600], [320, 50], [320, 80], [320, 100], [320, 320], [336, 280]], 'div-DagensDK_Mobile_300x50_1').defineSizeMapping(mobileBTFDisplayAndAdSizeMap).addService(googletag.pubads());
          } else {
            googletag.defineSlot('/49662453/' + dagens_category + 'DagensDK_Mobile_300x50_1', [[300, 50], [300, 80], [300, 100], [300, 250], [300, 600], [320, 50], [320, 80], [320, 100], [320, 320], [336, 280]], 'div-DagensDK_Mobile_300x50_1').defineSizeMapping(mobileATFDisplayAndAdSizeMap).addService(googletag.pubads());
          }
          googletag.defineSlot('/49662453/' + dagens_category + 'DagensDK_Mobile_300x50_2', [[300, 50], [300, 80], [300, 100], [300, 250], [300, 600], [320, 50], [320, 80], [320, 100], [320, 320], [336, 280]], 'div-DagensDK_Mobile_300x50_2').defineSizeMapping(mobileBTFDisplayAndAdSizeMap).addService(googletag.pubads());
          googletag.defineSlot('/49662453/' + dagens_category + 'DagensDK_Mobile_300x50_3', [[300, 50], [300, 80], [300, 100], [300, 250], [300, 600], [320, 50], [320, 80], [320, 100], [320, 320], [336, 280]], 'div-DagensDK_Mobile_300x50_3').defineSizeMapping(mobileBTFDisplayAndAdSizeMap).addService(googletag.pubads());
        } else {
          if (!is_dagens_frontpage) {
            googletag.defineSlot('/49662453/' + dagens_category + 'DagensDk_250x250_Article_1', [250, 250], 'div-DagensDk_250x250_Article_1').addService(googletag.pubads());
            googletag.defineOutOfPageSlot('/49662453/' + dagens_category + 'DagensDK_300x250_Desktop_Article_1', 'div-DagensDK_300x250_Desktop_Article_1').addService(googletag.pubads());
            googletag.defineSlot('/49662453/' + dagens_category + 'DagensDK_300x250_Desktop_Article_2', [[300, 250], [448, 252]], 'div-DagensDK_300x250_Desktop_Article_2').addService(googletag.pubads());
          }
          googletag.defineSlot('/49662453/' + dagens_category + 'DagensDK_930x180_1', [[728, 90], [930, 180]], 'div-DagensDK_930x180_1').defineSizeMapping(boardDisplayAndAdSizeMap).addService(googletag.pubads());
          if (do_skyscrapers_fit) { // no sizemap needed to detect if they fit
            googletag.defineSlot('/49662453/' + dagens_category + 'DagensDK_160x600_L', [160, 600], 'div-DagensDK_160x600_L').addService(googletag.pubads());
            googletag.defineSlot('/49662453/' + dagens_category + 'DagensDK_160x600_R', [160, 600], 'div-DagensDK_160x600_R').addService(googletag.pubads());
          } else {
            skyscraperDisplayAndAdSizeMap = googletag.sizeMapping().addSize([0, 0], []).addSize([1300, 600], [160, 600]).build();
            googletag.defineSlot('/49662453/' + dagens_category + 'DagensDK_160x600_L', [160, 600], 'div-DagensDK_160x600_L').defineSizeMapping(skyscraperDisplayAndAdSizeMap).addService(googletag.pubads());
            googletag.defineSlot('/49662453/' + dagens_category + 'DagensDK_160x600_R', [160, 600], 'div-DagensDK_160x600_R').defineSizeMapping(skyscraperDisplayAndAdSizeMap).addService(googletag.pubads());
          }
          googletag.defineSlot('/49662453/' + dagens_category + 'DagensDk_300x250_1', [300, 250], 'div-DagensDk_300x250_1').addService(googletag.pubads());
          googletag.defineSlot('/49662453/' + dagens_category + 'DagensDK_300x250_2', [300, 250], 'div-DagensDK_300x250_2').addService(googletag.pubads());
          googletag.defineSlot('/49662453/' + dagens_category + 'DagensDK_930x180_2', [[728, 90], [930, 180]], 'div-gpt-ad-1418125366865-1').defineSizeMapping(boardDisplayAndAdSizeMap).addService(googletag.pubads());
          googletag.defineSlot('/49662453/' + dagens_category + 'DagensDK_930x180_3', [[728, 90], [930, 180]], 'div-gpt-ad-1418125366865-2').defineSizeMapping(boardDisplayAndAdSizeMap).addService(googletag.pubads());
        }
        if (is_dagens_frontpage) {
          googletag.defineOutOfPageSlot('/49662453/' + dagens_category + 'DagensDK_InterstitialsOnFrontPage', 'div-DagensDK_InterstitialsOnFrontPage').addService(googletag.pubads());
        } else {
          googletag.defineOutOfPageSlot('/49662453/' + dagens_category + 'DagensDK_InterstitialsOnArticlePages', 'div-DagensDK_InterstitialsOnArticlePages').addService(googletag.pubads());
        }
        googletag.pubads().enableSingleRequest();
        googletag.pubads().collapseEmptyDivs();
        googletag.enableServices();
      });
    </script>
    <!-- END DFP header scripts -->
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

<!-- BEGIN USERREPORT SCRIPT -->
<script type="text/javascript">
    var _urq = _urq || [];
    _urq.push(['initSite', '2ef45aea-94e5-4227-946b-b246ca756387']);
    (function() {
        var ur = document.createElement('script'); ur.type = 'text/javascript'; ur.async = true;
        ur.src = ('https:' == document.location.protocol ? 'https://cdn.userreport.com/userreport.js' : 'http://cdn.userreport.com/userreport.js');
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ur, s);
    })();
    (new Image()).src = 'https://visitanalytics.userreport.com/hit.gif?t=MGD0a6c7fda?rnd=' + Math.random();
</script>
<!-- END USERREPORT SCRIPT -->

</body>
</html>
