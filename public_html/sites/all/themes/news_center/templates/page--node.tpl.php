<?php
/**
 * @file
 * Zen theme's implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/garland.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $secondary_menu_heading: The title of the menu used by the secondary links.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * - $page['top_advertisement']: Special advertisement area for Wide images.
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['slideshow']: Items for the slideshow content region.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content0']: Additional content Area 0.
 * - $page['content1']: Additional content Area 1.
 * - $page['content2']: Additional content Area 2.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['top_area']: Items for the Top Area region. 
 * - $page['footer']: Items for the footer region.
 * - $page['footer_first_column']: Items for the footer first column region.
 * - $page['footer_second_column']: Items for the footer second column region.
 * - $page['footer_third_column']: Items for the footer third column region.
 * - $page['footer_fourth_column']: Items for the footer fourth column region.
 * - $page['footer_closure']: Footer closure region. Sweet for legal info.
 * - $page['bottom']: Items to appear at the bottom of the page below the footer.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see zen_preprocess_page()
 * @see template_process()
 */
?>


<div id="page-wrapper" class="container" ><div id="page">
		<?php print render($page['top_advertisement']); ?>  
	
  <div id="header"><div class="section clearfix">

    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
	  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="mobile-logo"><img src="<?php print $base_path; ?><?php print $directory; ?>/logo_mobile.png" alt="<?php print t('Home'); ?>" /></a>
    <?php endif; ?>

    <?php if ($site_name || $site_slogan): ?>
      <div id="name-and-slogan">
        <?php if ($site_name): ?>
          <?php if ($title): ?>
            <div id="site-name"><strong>
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
            </strong></div>
          <?php else: /* Use h1 when the content title is empty */ ?>
            <h1 id="site-name">
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
            </h1>
          <?php endif; ?>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <div id="site-slogan"><?php print $site_slogan; ?></div>
        <?php endif; ?>
      </div><!-- /#name-and-slogan -->
    <?php endif; ?>
	
    <?php print render($page['header']); ?>
    <?php print render($page['navigation']); ?>

  </div></div><!-- /.section, /#header -->

  <div id="main-wrapper"><div id="main" class="clearfix<?php if ($main_menu || $page['navigation']) { print ' with-navigation'; } ?>">

    <div id="content" class="column"><div class="section">
      <?php print render($page['highlighted']); ?>
      <?php print $breadcrumb; ?>
	  	  
      <a id="main-content"></a>


        <!-- BEGIN DagensDK_Mobile_300x50_Article_1 -->
        <div id='div-DagensDK_Mobile_300x50_Article_1'>
            <script type='text/javascript'>
                googletag.cmd.push(function() { googletag.display('div-DagensDK_Mobile_300x50_Article_1'); });
            </script>
        </div>
        <!-- END DagensDK_Mobile_300x50_Article_1 -->

      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="title" id="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if ($tabs = render($tabs)): ?>
        <div class="tabs"><?php print $tabs; ?></div>
      <?php endif; ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
	  
	  <?php print render($page['content1']); ?>
	  <?php print render($page['content2']); ?>
      <?php print render($page['content']); ?>
      <?php print render($page['content0']); ?>
      <?php print $feed_icons; ?>
    </div></div><!-- /.section, /#content -->   

  </div></div><!-- /#main, /#main-wrapper -->
  
  <div id="footer">
  
    <?php print render($page['footer']); ?>
  
    <?php print render($page['footer_first_column']); ?>
	
	<?php print render($page['footer_second_column']); ?>
	
	<?php print render($page['footer_third_column']); ?>
	
	<?php print render($page['footer_fourth_column']); ?>
	
	<div class="clear"></div>
	
	<?php print render($page['footer_closure']); ?>
	
  </div>

</div></div><!-- /#page, /#page-wrapper -->

<?php print render($page['bottom']); ?>
