<?php
/**
 * @file
 * dagens.panels_default.inc
 */

/**
 * Implements hook_default_panels_mini().
 */
function dagens_default_panels_mini() {
  $export = array();

  $mini = new stdClass();
  $mini->disabled = FALSE; /* Edit this to true to make a default mini disabled initially */
  $mini->api_version = 1;
  $mini->name = 'banner_bred_bund';
  $mini->category = 'Dagens';
  $mini->admin_title = 'Banner - Bred bund';
  $mini->admin_description = '';
  $mini->requiredcontexts = array();
  $mini->contexts = array();
  $mini->relationships = array();
  $display = new panels_display();
  $display->layout = 'flexible';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'center' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-1';
    $pane->panel = 'center';
    $pane->type = 'custom';
    $pane->subtype = 'custom';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'admin_title' => 'Banner - Bred bund',
      'title' => '<none>',
      'body' => '<!-- Begin - DagensDK_930x180_2 -->
<div id=\'div-gpt-ad-1418125366865-1\'>
    <script type=\'text/javascript\'>
        googletag.cmd.push(function() { googletag.display(\'div-gpt-ad-1418125366865-1\'); });
    </script>
</div>
<!-- End - DagensDK_930x180_2 -->',
      'format' => 'banner',
      'substitute' => TRUE,
    );
    $pane->cache = array(
      'method' => 'simple',
      'settings' => array(
        'lifetime' => '3600',
        'granularity' => 'none',
      ),
    );
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $display->content['new-1'] = $pane;
    $display->panels['center'][0] = 'new-1';
  $display->hide_title = PANELS_TITLE_NONE;
  $display->title_pane = 'new-1';
  $mini->display = $display;
  $export['banner_bred_bund'] = $mini;

  $mini = new stdClass();
  $mini->disabled = FALSE; /* Edit this to true to make a default mini disabled initially */
  $mini->api_version = 1;
  $mini->name = 'banner_header';
  $mini->category = 'Dagens';
  $mini->admin_title = 'Banner - header';
  $mini->admin_description = '';
  $mini->requiredcontexts = array();
  $mini->contexts = array();
  $mini->relationships = array();
  $display = new panels_display();
  $display->layout = 'flexible';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'center' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-2';
    $pane->panel = 'center';
    $pane->type = 'custom';
    $pane->subtype = 'custom';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'admin_title' => 'Banner header',
      'title' => '<none>',
      'body' => '<!-- adServing 7.1.1c  + Topbanner 930x180 -->
<script type="text/javascript">
     var adspaceid = \'6\';
     var keywords = \'sex\';
     var searchwords = \'\'; //insert searchwords seperated by Semicolon
     if(adServingLoad == undefined) var adServingLoad = \'\';
     document.write(\'<scr\'+\'ipt type="text/javascript" src="http://dinsalgsvagt.adservinginternational.com/js.php?adspaceid=\'+adspaceid+\'&adServingLoad=\'+adServingLoad+\'&keywords=\'+keywords+\'&sw=\'+searchwords+\'&rnd=\'+Math.random()+\'"></scr\'+\'ipt>\');
</script>
<noscript>
     <iframe src="http://dinsalgsvagt.adservinginternational.com/iframe.php?adspaceid=6&keywords=" frameborder="0" marginheight="0" marginwidth="0" width="930" height="180" scrolling="no" style="width:930px; height:180px; margin:0px;"></iframe>
</noscript>

<!-- (C)2000-2013 Gemius SA - gemiusAudience / dagens.dk / Main Page -->
<script type="text/javascript">
<!--//--><![CDATA[//><!--
var pp_gemius_identifier = \'ctWVJE_p7Qs7bVOkLQl_UseBfX.wnOLcxRkuDlJJivL.87\';
(function(d,t) {var ex; try {var gt=d.createElement(t),s=d.getElementsByTagName(t)[0],l=\'http\'+((location.protocol==\'https:\')?\'s\':\'\');
gt.async=\'true\'; gt.src=l+\'://gadk.hit.gemius.pl/xlgemius.js\'; s.parentNode.insertBefore(gt,s);} catch (ex) {}}(document,\'script\'));
//--><!]]>
</script>

<!-- adServing 7.1.1c  + Floating banner -->
<script type="text/javascript">
     var adspaceid = \'41\';
     var keywords = \'sex\';
     if(adServingLoad == undefined) var adServingLoad = \'\';
     document.write(\'<scr\'+\'ipt type="text/javascript" src="http://dinsalgsvagt.adservinginternational.com/floating.php?adspaceid=\'+adspaceid+\'&adServingLoad=\'+adServingLoad+\'&keywords=\'+keywords+\'&rnd=\'+Math.random()+\'"></scr\'+\'ipt>\');
</script>

<!-- adServing 7.1.1c www.dagens.dk + Wallpaper -->
<script type="text/javascript">
var adspaceid = \'202\';
var keywords = \'sex\';
if(adServingLoad == undefined) var adServingLoad = \'\';
document.write(\'<scr\'+\'ipt type="text/javascript" src="http://dinsalgsvagt.adservinginternational.com/wallpaper.php?adspaceid=\'+adspaceid+\'&adServingLoad=\'+adServingLoad+\'&keywords=\'+keywords+\'&rnd=\'+Math.random()+\'"></scr\'+\'ipt>\');
</script>',
      'format' => 'banner',
      'substitute' => TRUE,
    );
    $pane->cache = array(
      'method' => 'simple',
      'settings' => array(
        'lifetime' => '3600',
        'granularity' => 'none',
      ),
    );
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $display->content['new-2'] = $pane;
    $display->panels['center'][0] = 'new-2';
  $display->hide_title = PANELS_TITLE_NONE;
  $display->title_pane = 'new-2';
  $mini->display = $display;
  $export['banner_header'] = $mini;

  $mini = new stdClass();
  $mini->disabled = FALSE; /* Edit this to true to make a default mini disabled initially */
  $mini->api_version = 1;
  $mini->name = 'banner_sidepanel_1';
  $mini->category = 'Dagens';
  $mini->admin_title = 'Banner - Sidepanel 1';
  $mini->admin_description = '';
  $mini->requiredcontexts = array();
  $mini->contexts = array();
  $mini->relationships = array();
  $display = new panels_display();
  $display->layout = 'flexible';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'center' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-3';
    $pane->panel = 'center';
    $pane->type = 'custom';
    $pane->subtype = 'custom';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'admin_title' => 'Banner - Sidepanel 1',
      'title' => '<none>',
      'body' => '<!-- adServing 7.1.1c  + Artikel 1 300x250 -->
<script type="text/javascript">
     var adspaceid = \'4\';
     var keywords = \'sex\';
     var searchwords = \'\'; //insert searchwords seperated by Semicolon
     if(adServingLoad == undefined) var adServingLoad = \'\';
     document.write(\'<scr\'+\'ipt type="text/javascript" src="http://dinsalgsvagt.adservinginternational.com/js.php?adspaceid=\'+adspaceid+\'&adServingLoad=\'+adServingLoad+\'&keywords=\'+keywords+\'&sw=\'+searchwords+\'&rnd=\'+Math.random()+\'"></scr\'+\'ipt>\');
</script>
<noscript>
     <iframe src="http://dinsalgsvagt.adservinginternational.com/iframe.php?adspaceid=4&keywords=" frameborder="0" marginheight="0" marginwidth="0" width="320" height="250" scrolling="no" style="width:320px; height:250px; margin:0px;"></iframe>
</noscript>

<!-- adServing 7.1.1c  + Floating banner -->
<script type="text/javascript">
     var adspaceid = \'41\';
     var keywords = \'sex\';
     if(adServingLoad == undefined) var adServingLoad = \'\';
     document.write(\'<scr\'+\'ipt type="text/javascript" src="http://dinsalgsvagt.adservinginternational.com/floating.php?adspaceid=\'+adspaceid+\'&adServingLoad=\'+adServingLoad+\'&keywords=\'+keywords+\'&rnd=\'+Math.random()+\'"></scr\'+\'ipt>\');
</script>',
      'format' => 'banner',
      'substitute' => TRUE,
    );
    $pane->cache = array(
      'method' => 'simple',
      'settings' => array(
        'lifetime' => '3600',
        'granularity' => 'none',
      ),
    );
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $display->content['new-3'] = $pane;
    $display->panels['center'][0] = 'new-3';
  $display->hide_title = PANELS_TITLE_NONE;
  $display->title_pane = 'new-3';
  $mini->display = $display;
  $export['banner_sidepanel_1'] = $mini;

  $mini = new stdClass();
  $mini->disabled = FALSE; /* Edit this to true to make a default mini disabled initially */
  $mini->api_version = 1;
  $mini->name = 'banner_sidepanel_2';
  $mini->category = 'Dagens';
  $mini->admin_title = 'Banner - Sidepanel 2';
  $mini->admin_description = '';
  $mini->requiredcontexts = array();
  $mini->contexts = array();
  $mini->relationships = array();
  $display = new panels_display();
  $display->layout = 'flexible';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'center' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-4';
    $pane->panel = 'center';
    $pane->type = 'custom';
    $pane->subtype = 'custom';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'admin_title' => 'Banner - Sidepanel 1',
      'title' => '<none>',
      'body' => '<!-- adServing 7.1.1c  + Artikel 2 300x250 -->
<script type="text/javascript">
     var adspaceid = \'5\';
     var keywords = \'sex\';
     var searchwords = \'\'; //insert searchwords seperated by Semicolon
     if(adServingLoad == undefined) var adServingLoad = \'\';
     document.write(\'<scr\'+\'ipt type="text/javascript" src="http://dinsalgsvagt.adservinginternational.com/js.php?adspaceid=\'+adspaceid+\'&adServingLoad=\'+adServingLoad+\'&keywords=\'+keywords+\'&sw=\'+searchwords+\'&rnd=\'+Math.random()+\'"></scr\'+\'ipt>\');
</script>
<noscript>
     <iframe src="http://dinsalgsvagt.adservinginternational.com/iframe.php?adspaceid=5&keywords=" frameborder="0" marginheight="0" marginwidth="0" width="320" height="250" scrolling="no" style="width:320px; height:250px; margin:0px;"></iframe>
</noscript>',
      'format' => 'banner',
      'substitute' => TRUE,
    );
    $pane->cache = array(
      'method' => 'simple',
      'settings' => array(
        'lifetime' => '3600',
        'granularity' => 'none',
      ),
    );
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $display->content['new-4'] = $pane;
    $display->panels['center'][0] = 'new-4';
  $display->hide_title = PANELS_TITLE_NONE;
  $display->title_pane = 'new-4';
  $mini->display = $display;
  $export['banner_sidepanel_2'] = $mini;

  $mini = new stdClass();
  $mini->disabled = FALSE; /* Edit this to true to make a default mini disabled initially */
  $mini->api_version = 1;
  $mini->name = 'banner_video';
  $mini->category = 'Dagens';
  $mini->admin_title = 'Banner - Video';
  $mini->admin_description = '';
  $mini->requiredcontexts = array();
  $mini->contexts = array();
  $mini->relationships = array();
  $display = new panels_display();
  $display->layout = 'onecol';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'center' => NULL,
      'middle' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '<none>';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-5';
    $pane->panel = 'middle';
    $pane->type = 'custom';
    $pane->subtype = 'custom';
    $pane->shown = TRUE;
    $pane->access = array(
      'logic' => 'or',
      'plugins' => array(
        0 => array(
          'name' => 'theme',
          'settings' => array(
            'theme' => 'dagens',
          ),
          'not' => FALSE,
        ),
      ),
    );
    $pane->configuration = array(
      'admin_title' => 'Video Banner',
      'title' => '<none>',
      'body' => '<script language="JavaScript 1.1" type="text/javascript">
var gmtp = "http", gmturl = gmtp + "://dk.gmads.net/r", gmttzd = (new Date).getTimezoneOffset(), gmth = location.host, gmthp = location.pathname;document.write("<script src=\'" + gmturl + "?width=480&amp;height=280&amp;gmtr=[timestamp]&amp;gmtp=" + gmtp + "&amp;gmtsubsite=Dagens.dk]&amp;gmtctrl=13&amp;gmttu=24838&amp;gmtt=js&amp;gmti=gm&amp;gmtsrc=gmdk&amp;gmtv=4&amp;gmtcl=5&amp;gmth=" + gmth + "&amp;gmthp=" + gmthp +"&amp;gmttzd=" + gmttzd + "\' type=\'text/javascript\'><\\/script>");</script>
<noscript>
<iframe src="http://dk.gmads.net/r?width=480&height=280&gmtr=[timestamp]&gmtp=http&gmtsubsite=Dagens.dk]&gmtctrl=13&gmttu=24838&gmtt=if&gmti=gm&gmtcl=5&gmtsrc=gmdk&gmtv=4&gmth=host&gmthp=refererpath" style="overflow: hidden;" scrolling="no" framespacing="0" frameborder="0" width="480" height="280"></iframe>
</noscript>',
      'format' => 'banner',
      'substitute' => TRUE,
    );
    $pane->cache = array(
      'method' => '0',
      'settings' => array(),
    );
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $display->content['new-5'] = $pane;
    $display->panels['middle'][0] = 'new-5';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = 'new-5';
  $mini->display = $display;
  $export['banner_video'] = $mini;

  $mini = new stdClass();
  $mini->disabled = FALSE; /* Edit this to true to make a default mini disabled initially */
  $mini->api_version = 1;
  $mini->name = 'footer_1';
  $mini->category = 'Dagens';
  $mini->admin_title = 'Footer 1';
  $mini->admin_description = '';
  $mini->requiredcontexts = array();
  $mini->contexts = array();
  $mini->relationships = array();
  $display = new panels_display();
  $display->layout = 'flexible';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'center' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-6';
    $pane->panel = 'center';
    $pane->type = 'custom';
    $pane->subtype = 'custom';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'admin_title' => 'Redaktionen',
      'title' => 'Redaktion',
      'body' => '<p>Ansvarshavende chefredakt&oslash;r:<br />
	<a href="mailto:kasper@dagens.dk">Kasper Christensen</a></p>
<p>Jourhavende<br />
	<a href="mailto:ss@dagens.dk">Sol Stoffregen</a><br />
	<a href="mailto:ror@dagens.dk">Ronja Ryde</a><br />
	<a href="mailto:na@dagens.dk">Ninna Andreasen</a><br />
	<a href="mailto:kp@dagens.dk">Kirstine Petersen</a><br />
	<a href="mailto:jesper@dagens.dk">Jesper Larsen</a></p>
<div class="contact">
	Kontakt dagens.dk:<br />
	<a href="mailto:redaktion@dagens.dk" title="redaktion@dagens.dk">redaktion@dagens.dk</a><br />
	eller via <a href="/contact">formularen</a></div>
<div class="contact">
	&nbsp;</div>
<div class="contact">
	<a href="http://www.dagens.dk/redaktion">Dagens.dk redaktion</a></div>
',
      'format' => 'full_html',
      'substitute' => TRUE,
    );
    $pane->cache = array(
      'method' => 'simple',
      'settings' => array(
        'lifetime' => '3600',
        'granularity' => 'none',
      ),
    );
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $display->content['new-6'] = $pane;
    $display->panels['center'][0] = 'new-6';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = 'new-6';
  $mini->display = $display;
  $export['footer_1'] = $mini;

  $mini = new stdClass();
  $mini->disabled = FALSE; /* Edit this to true to make a default mini disabled initially */
  $mini->api_version = 1;
  $mini->name = 'footer_2';
  $mini->category = '';
  $mini->admin_title = 'Footer 2';
  $mini->admin_description = '';
  $mini->requiredcontexts = array();
  $mini->contexts = array();
  $mini->relationships = array();
  $display = new panels_display();
  $display->layout = 'flexible';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'center' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '<none>';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-7';
    $pane->panel = 'center';
    $pane->type = 'custom';
    $pane->subtype = 'custom';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'admin_title' => 'Copyright Block',
      'title' => 'Nyhedsbrev',
      'body' => '<p>Tilmeld dig nyhedsbrev fra Dagens.dk, og f&aring; det daglige overblik over nyheder, sport og underholdning fra Danmark og resten af verden.</p>
<p><a href="http://www.dagens.dk/nyhedsbrev">Tilmeld dig her</a><br />
	&nbsp;</p>
',
      'format' => 'full_html',
      'substitute' => TRUE,
    );
    $pane->cache = array(
      'method' => 'simple',
      'settings' => array(
        'lifetime' => '3600',
        'granularity' => 'none',
      ),
    );
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $display->content['new-7'] = $pane;
    $display->panels['center'][0] = 'new-7';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = 'new-7';
  $mini->display = $display;
  $export['footer_2'] = $mini;

  $mini = new stdClass();
  $mini->disabled = FALSE; /* Edit this to true to make a default mini disabled initially */
  $mini->api_version = 1;
  $mini->name = 'footer_3';
  $mini->category = 'Dagens';
  $mini->admin_title = 'Footer 3';
  $mini->admin_description = '';
  $mini->requiredcontexts = array();
  $mini->contexts = array();
  $mini->relationships = array();
  $display = new panels_display();
  $display->layout = 'flexible';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'center' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '<none>';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-8';
    $pane->panel = 'center';
    $pane->type = 'custom';
    $pane->subtype = 'custom';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'admin_title' => 'Annoncering Dagens.dk',
      'title' => 'Annoncering',
      'body' => '<p>Dagens.dk&nbsp;tilbyder et stort udvalg af muligheder for annoncering. Klik her for at downloade vores <a href="http://www.dagens.dk/Medieinformation_Dagensdk_2014.pdf">Online Media Kit (PDF-fil)</a>&nbsp;eller kontakt salg p&aring; tlf:&nbsp;7220 6663</p>
<h2>
	<span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><strong>Privatpolitik</strong></span></span></h2>
<p><a href="http://www.dagens.dk/privatpolitik-cookies-dagens.pdf">Privatpolitik og Cookies</a></p>
',
      'format' => 'full_html',
      'substitute' => TRUE,
    );
    $pane->cache = array(
      'method' => 'simple',
      'settings' => array(
        'lifetime' => '3600',
        'granularity' => 'none',
      ),
    );
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $display->content['new-8'] = $pane;
    $display->panels['center'][0] = 'new-8';
  $display->hide_title = PANELS_TITLE_NONE;
  $display->title_pane = 'new-8';
  $mini->display = $display;
  $export['footer_3'] = $mini;

  $mini = new stdClass();
  $mini->disabled = FALSE; /* Edit this to true to make a default mini disabled initially */
  $mini->api_version = 1;
  $mini->name = 'footer_4';
  $mini->category = '';
  $mini->admin_title = 'Footer 4';
  $mini->admin_description = '';
  $mini->requiredcontexts = array();
  $mini->contexts = array();
  $mini->relationships = array();
  $display = new panels_display();
  $display->layout = 'flexible';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'center' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-9';
    $pane->panel = 'center';
    $pane->type = 'custom';
    $pane->subtype = 'custom';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'admin_title' => 'Følg dagens.dk',
      'title' => 'Følg Dagens.dk',
      'body' => '<ul>
	<li>
		<a class="ftrIfb" href="http://www.facebook.com/pages/Dagensdk/164384990281090"><i>&nbsp;</i>Facebook</a></li>
	<li>
		<a class="ftrItw" href="https://twitter.com/dagensdk"><i>&nbsp;</i>Twitter</a></li>
	<li>
		<a class="ftrIrs" href="/feed/"><i>&nbsp;</i>RSS</a></li>
</ul>
',
      'format' => 'full_html',
      'substitute' => TRUE,
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $display->content['new-9'] = $pane;
    $display->panels['center'][0] = 'new-9';
  $display->hide_title = PANELS_TITLE_NONE;
  $display->title_pane = 'new-9';
  $mini->display = $display;
  $export['footer_4'] = $mini;

  $mini = new stdClass();
  $mini->disabled = FALSE; /* Edit this to true to make a default mini disabled initially */
  $mini->api_version = 1;
  $mini->name = 'top_social_ikoner';
  $mini->category = '';
  $mini->admin_title = 'top social ikoner';
  $mini->admin_description = '';
  $mini->requiredcontexts = array();
  $mini->contexts = array();
  $mini->relationships = array();
  $display = new panels_display();
  $display->layout = 'flexible';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'center' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-10';
    $pane->panel = 'center';
    $pane->type = 'custom';
    $pane->subtype = 'custom';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'admin_title' => 'Top sociale ikoner',
      'title' => '<none>',
      'body' => '<div class="socBx">
<a href="http://www.facebook.com/dagens.dk" class="socFb" title="Facebook"></a>
<a href="https://twitter.com/dagensdk" class="socTw" title="Twitter"></a>
<a href="/feed" class="socRs" title="RSS"></a>
</div>',
      'format' => 'banner',
      'substitute' => TRUE,
    );
    $pane->cache = array(
      'method' => 'simple',
      'settings' => array(
        'lifetime' => '3600',
        'granularity' => 'none',
      ),
    );
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $display->content['new-10'] = $pane;
    $display->panels['center'][0] = 'new-10';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = 'new-10';
  $mini->display = $display;
  $export['top_social_ikoner'] = $mini;

  return $export;
}
