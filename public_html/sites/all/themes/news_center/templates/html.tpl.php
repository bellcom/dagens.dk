<?php
/**
 * @file
 * Zen theme's implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation. $language->dir
 *   contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $jump_link_target: The HTML ID of the element that the "Jump to Navigation"
 *   link should jump to. Defaults to "main-menu".
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It should be placed within the <body> tag. When selecting through CSS
 *   it's recommended that you use the body tag, e.g., "body.front". It can be
 *   manipulated through the variable $classes_array from preprocess functions.
 *   The default values can contain one or more of the following:
 *   - front: Page is the home page.
 *   - not-front: Page is not the home page.
 *   - logged-in: The current viewer is logged in.
 *   - not-logged-in: The current viewer is not logged in.
 *   - node-type-[node type]: When viewing a single node, the type of that node.
 *     For example, if the node is a Blog entry, this would be "node-type-blog".
 *     Note that the machine name of the content type will often be in a short
 *     form of the human readable label.
 *   The following only apply with the default sidebar_first and sidebar_second
 *   block regions:
 *     - two-sidebars: When both sidebars have content.
 *     - no-sidebars: When no sidebar content exists.
 *     - one-sidebar and sidebar-first or sidebar-second: A combination of the
 *       two classes when only one of the two sidebars have content.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see zen_preprocess_html()
 * @see template_process()
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>

<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3.0, minimum-scale=1, user-scalable=yes" />
    
  <?php print $styles; ?>
  <?php print $scripts; ?>	
  	<link rel="apple-touch-icon" href="/sites/all/iphone.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="/sites/all/ipad.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="/sites/all/iphone4.png" />

    <?php if(drupal_is_front_page()) { ?>
      <!-- BEGIN DFP header scripts on mobile frontpage -->
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
          googletag.defineSlot('/49662453/DagensDK_Mobile_300x50_1', [[300, 50], [300, 100], [300, 250], [320, 50], [320, 100], [320, 320], [336, 280]], 'div-DagensDK_Mobile_300x50_1').addService(googletag.pubads());
          googletag.defineSlot('/49662453/DagensDK_Mobile_300x50_2', [[300, 50], [300, 100], [300, 250], [300, 600], [320, 50], [320, 100], [320, 320], [336, 280]], 'div-DagensDK_Mobile_300x50_2').addService(googletag.pubads());
          googletag.defineSlot('/49662453/DagensDK_Mobile_300x50_3', [[300, 50], [300, 100], [300, 250], [300, 600], [320, 50], [320, 100], [320, 320], [336, 280]], 'div-DagensDK_Mobile_300x50_3').addService(googletag.pubads());
          googletag.pubads().enableSingleRequest();
          googletag.enableServices();
        });
      </script>
      <!-- END DFP header scripts on mobile frontpage -->
    <?php } else { ?>
      <!-- BEGIN DFP header scripts on mobile article pages -->
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
          googletag.defineSlot('/49662453/DagensDK_Mobile_300x50_Article_1', [[300, 50], [300, 100], [300, 250], [320, 50], [320, 100], [320, 320], [336, 280]], 'div-DagensDK_Mobile_300x50_Article_1').addService(googletag.pubads());
          googletag.defineSlot('/49662453/DagensDK_Mobile_300x50_Article_2', [[300, 50], [300, 100], [300, 250], [320, 50], [320, 100], [320, 320], [336, 280]], 'div-DagensDK_Mobile_300x50_Article_2').addService(googletag.pubads());
          googletag.defineSlot('/49662453/DagensDK_Mobile_Article_3', [[300, 50], [300, 100], [300, 250], [320, 50], [320, 100], [320, 320], [336, 280]], 'div-DagensDK_Mobile_Article_3').addService(googletag.pubads());
          googletag.defineSlot('/49662453/DagensDK_Mobile_Article_4', [[300, 50], [300, 100], [300, 250], [320, 50], [320, 100], [320, 320], [336, 280]], 'div-DagensDK_Mobile_Article_4').addService(googletag.pubads());
          googletag.defineSlot('/49662453/DagensDK_Mobile_300x50_1', [[300, 50], [300, 100], [300, 250], [300, 600], [320, 50], [320, 100], [320, 320], [336, 280]], 'div-DagensDK_Mobile_300x50_1').addService(googletag.pubads());
          googletag.defineSlot('/49662453/DagensDK_Mobile_300x50_2', [[300, 50], [300, 100], [300, 250], [300, 600], [320, 50], [320, 100], [320, 320], [336, 280]], 'div-DagensDK_Mobile_300x50_2').addService(googletag.pubads());
          googletag.defineSlot('/49662453/DagensDK_Mobile_300x50_3', [[300, 50], [300, 100], [300, 250], [300, 600], [320, 50], [320, 100], [320, 320], [336, 280]], 'div-DagensDK_Mobile_300x50_3').addService(googletag.pubads());
          googletag.pubads().enableSingleRequest();
          googletag.enableServices();
        });
      </script>
      <!-- END DFP header scripts on mobile article pages -->
    <?php } ?>

</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#<?php print $jump_link_target; ?>" class="element-invisible element-focusable"><?php print t('Jump to Navigation'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>

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
