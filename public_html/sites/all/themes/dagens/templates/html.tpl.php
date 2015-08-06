<?php print $doctype; ?>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf->version . $rdf->namespaces; ?>>
<head<?php print $rdf->profile; ?>>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>  
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

  <?php if(drupal_is_front_page()) { ?>
      <!-- BEGIN - RTA Script -->
      <script type='text/javascript'>
          var crtg_nid = '4205';
          var crtg_cookiename = 'crtg_rta';
          var crtg_varname = 'crtg_content';

          function crtg_getCookie(c_name) {
              var i, x, y, ARRCookies = document.cookie.split(";");
              for (i = 0; i < ARRCookies.length; i++) {
                  x = ARRCookies[i].substr(0, ARRCookies[i].indexOf("="));
                  y = ARRCookies[i].substr(ARRCookies[i].indexOf("=") + 1);
                  x = x.replace(/^\s+|\s+$/g, "");
                  if (x == c_name) {
                      return unescape(y);
                  }
              }
              return '';
          }
          var crtg_content = crtg_getCookie(crtg_cookiename);
          var crtg_rnd = Math.floor(Math.random() * 99999999999);
          (function () {
              var crtg_url = location.protocol + '//rtax.criteo.com/delivery/rta/rta.js?netId=' + escape(crtg_nid);
              crtg_url += '&cookieName=' + escape(crtg_cookiename);
              crtg_url += '&rnd=' + crtg_rnd;
              crtg_url += '&varName=' + escape(crtg_varname);
              var crtg_script = document.createElement('script');
              crtg_script.type = 'text/javascript';
              crtg_script.src = crtg_url;
              crtg_script.async = true;
              if (document.getElementsByTagName("head").length > 0) document.getElementsByTagName("head")[0].appendChild(crtg_script);
              else if (document.getElementsByTagName("body").length > 0) document.getElementsByTagName("body")[0].appendChild(crtg_script);
          })();
      </script>
      <!-- END - RTA Script -->
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
              googletag.defineSlot('/49662453/DagensDK_930x180_1', [[728, 90], [930, 180]], 'div-DagensDK_930x180_1').addService(googletag.pubads());
              googletag.defineSlot('/49662453/DagensDK_930x180_2', [[728, 90], [930, 180]], 'div-gpt-ad-1418125366865-1').addService(googletag.pubads());
              googletag.defineSlot('/49662453/DagensDK_930x180_3', [[728, 90], [930, 180]], 'div-gpt-ad-1418125366865-2').addService(googletag.pubads());
              googletag.defineOutOfPageSlot('/49662453/DagensDK_InterstitialsOnFrontPage', 'div-DagensDK_InterstitialsOnFrontPage').addService(googletag.pubads());
              // BEGIN DFP RTA label splitter
              var crtg_split = crtg_content.split(';');
              for (var i=1;i<crtg_split.length;i++) {
                  googletag.pubads().setTargeting("" + (crtg_split[i-1].split('='))[0] + "", "" + (crtg_split[i-1].split('='))[1] + "");
              }
              // END DFP RTA label splitter
              googletag.pubads().enableSingleRequest();
              googletag.pubads().collapseEmptyDivs();
              googletag.enableServices();
          });
      </script>
      <!-- END DFP header scripts on desktop frontpage -->
  <?php } else { ?>
    <!-- BEGIN DFP header scripts on desktop article pages -->
      <!-- BEGIN - RTA Script -->
      <script type='text/javascript'>
          var crtg_nid = '4205';
          var crtg_cookiename = 'crtg_rta';
          var crtg_varname = 'crtg_content';

          function crtg_getCookie(c_name) {
              var i, x, y, ARRCookies = document.cookie.split(";");
              for (i = 0; i < ARRCookies.length; i++) {
                  x = ARRCookies[i].substr(0, ARRCookies[i].indexOf("="));
                  y = ARRCookies[i].substr(ARRCookies[i].indexOf("=") + 1);
                  x = x.replace(/^\s+|\s+$/g, "");
                  if (x == c_name) {
                      return unescape(y);
                  }
              }
              return '';
          }
          var crtg_content = crtg_getCookie(crtg_cookiename);
          var crtg_rnd = Math.floor(Math.random() * 99999999999);
          (function () {
              var crtg_url = location.protocol + '//rtax.criteo.com/delivery/rta/rta.js?netId=' + escape(crtg_nid);
              crtg_url += '&cookieName=' + escape(crtg_cookiename);
              crtg_url += '&rnd=' + crtg_rnd;
              crtg_url += '&varName=' + escape(crtg_varname);
              var crtg_script = document.createElement('script');
              crtg_script.type = 'text/javascript';
              crtg_script.src = crtg_url;
              crtg_script.async = true;
              if (document.getElementsByTagName("head").length > 0) document.getElementsByTagName("head")[0].appendChild(crtg_script);
              else if (document.getElementsByTagName("body").length > 0) document.getElementsByTagName("body")[0].appendChild(crtg_script);
          })();
      </script>
      <!-- END - RTA Script -->
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
              googletag.defineSlot('/49662453/DagensDK_930x180_1', [[728, 90], [930, 180]], 'div-DagensDK_930x180_1').addService(googletag.pubads());
              googletag.defineSlot('/49662453/DagensDK_930x180_2', [[728, 90], [930, 180]], 'div-gpt-ad-1418125366865-1').addService(googletag.pubads());
              googletag.defineSlot('/49662453/DagensDK_930x180_3', [[728, 90], [930, 180]], 'div-gpt-ad-1418125366865-2').addService(googletag.pubads());
              googletag.defineOutOfPageSlot('/49662453/DagensDK_InterstitialsOnArticlePages', 'div-DagensDK_InterstitialsOnArticlePages').addService(googletag.pubads());
              // BEGIN DFP RTA label splitter
              var crtg_split = crtg_content.split(';');
              for (var i=1;i<crtg_split.length;i++) {
                  googletag.pubads().setTargeting("" + (crtg_split[i-1].split('='))[0] + "", "" + (crtg_split[i-1].split('='))[1] + "");
              }
              // END DFP RTA label splitter
              googletag.defineSlot('/49662453/TestDagensDK_Thumbnails_Article_1', [[600, 200], [600, 450], [600, 338]], 'div-TestDagensDK_Thumbnails_Article_1').addService(googletag.pubads());
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
     var keywords = 'sex';
     if(adServingLoad == undefined) var adServingLoad = '';
     document.write('<scr'+'ipt type="text/javascript" src="http://dinsalgsvagt.adservinginternational.com/floating.php?adspaceid='+adspaceid+'&adServingLoad='+adServingLoad+'&keywords='+keywords+'&rnd='+Math.random()+'"></scr'+'ipt>');
</script>

</body>
</html>
