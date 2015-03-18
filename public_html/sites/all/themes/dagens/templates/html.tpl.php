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
        googletag.defineSlot('/49662453/DagensDK_160x600_L', [160, 600], 'div-DagensDK_160x600_L').addService(googletag.pubads());
        googletag.defineSlot('/49662453/DagensDK_160x600_R', [160, 600], 'div-DagensDK_160x600_R').addService(googletag.pubads());
        googletag.defineSlot('/49662453/DagensDk_300x250_1', [300, 250], 'div-DagensDk_300x250_1').addService(googletag.pubads());
        googletag.defineSlot('/49662453/DagensDK_300x250_2', [300, 250], 'div-DagensDK_300x250_2').addService(googletag.pubads());
        googletag.defineSlot('/49662453/DagensDK_930x180_1', [[728, 90], [930, 180]], 'div-gpt-ad-1418125366865-0').addService(googletag.pubads());
        googletag.defineSlot('/49662453/DagensDK_930x180_2', [[728, 90], [930, 180]], 'div-gpt-ad-1418125366865-1').addService(googletag.pubads());
        googletag.defineSlot('/49662453/DagensDK_930x180_3', [[728, 90], [930, 180]], 'div-gpt-ad-1418125366865-2').addService(googletag.pubads());
        //FMA// googletag.defineSlot('/49662453/DagensDK_930x600_Floating', [930, 600], 'div-DagensDK_930x600_Floating').addService(googletag.pubads());
        //FMA// googletag.defineSlot('/49662453/DagensDK_960x600_Floating', [960, 600], 'div-DagensDK_960x600_Floating').addService(googletag.pubads());
        //FMA// googletag.defineSlot('/49662453/DagensDK_Wallpaper', [960, 600], 'div-DagensDK_Wallpaper').addService(googletag.pubads());
        googletag.pubads().enableSingleRequest();
        googletag.enableServices();
      });
    </script>
    <!-- END DFP header scripts on desktop frontpage -->
  <?php } else { ?>
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
        googletag.defineSlot('/49662453/DagensDK_160x600_L', [160, 600], 'div-DagensDK_160x600_L').addService(googletag.pubads());
        googletag.defineSlot('/49662453/DagensDK_160x600_R', [160, 600], 'div-DagensDK_160x600_R').addService(googletag.pubads());
        googletag.defineSlot('/49662453/DagensDk_250x250_Article_1', [250, 250], 'div-DagensDk_250x250_Article_1').addService(googletag.pubads());
        googletag.defineSlot('/49662453/DagensDk_250x250_Article_2', [250, 250], 'div-DagensDk_250x250_Article_2').addService(googletag.pubads());
        googletag.defineSlot('/49662453/DagensDk_250x250_Article_3', [250, 250], 'div-DagensDk_250x250_Article_3').addService(googletag.pubads());
        googletag.defineSlot('/49662453/DagensDk_300x250_1', [300, 250], 'div-DagensDk_300x250_1').addService(googletag.pubads());
        googletag.defineSlot('/49662453/DagensDK_300x250_2', [300, 250], 'div-DagensDK_300x250_2').addService(googletag.pubads());
        googletag.defineSlot('/49662453/DagensDK_930x180_1', [[728, 90], [930, 180]], 'div-gpt-ad-1418125366865-0').addService(googletag.pubads());
        googletag.defineSlot('/49662453/DagensDK_930x180_2', [[728, 90], [930, 180]], 'div-gpt-ad-1418125366865-1').addService(googletag.pubads());
        googletag.defineSlot('/49662453/DagensDK_930x180_3', [[728, 90], [930, 180]], 'div-gpt-ad-1418125366865-2').addService(googletag.pubads());
        //FMA// googletag.defineSlot('/49662453/DagensDK_930x600_Floating', [930, 600], 'div-DagensDK_930x600_Floating').addService(googletag.pubads());
        //FMA// googletag.defineSlot('/49662453/DagensDK_960x600_Floating', [960, 600], 'div-DagensDK_960x600_Floating').addService(googletag.pubads());
        //FMA// googletag.defineSlot('/49662453/DagensDK_Wallpaper', [960, 600], 'div-DagensDK_Wallpaper').addService(googletag.pubads());
        googletag.pubads().enableSingleRequest();
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

<!-- adServing 7.1.1c  + Floating banner -->
<script type="text/javascript">
     var adspaceid = '41';
     var keywords = 'sex';
     if(adServingLoad == undefined) var adServingLoad = '';
     document.write('<scr'+'ipt type="text/javascript" src="http://dinsalgsvagt.adservinginternational.com/floating.php?adspaceid='+adspaceid+'&adServingLoad='+adServingLoad+'&keywords='+keywords+'&rnd='+Math.random()+'"></scr'+'ipt>');
</script>



</body>
</html>
