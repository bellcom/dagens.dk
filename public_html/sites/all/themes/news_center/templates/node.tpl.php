<?php
/**
 * @file
 * Zen theme's implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct url of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type, i.e., "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   - view-mode-[mode]: The view mode, e.g. 'full', 'teaser'...
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 *   The following applies only to viewers who are registered users:
 *   - node-by-viewer: Node is authored by the user currently viewing the page.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type, i.e. story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode, e.g. 'full', 'teaser'...
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content. Currently broken; see http://drupal.org/node/823380
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined, e.g. $node->body becomes $body. When needing to access
 * a field's raw values, developers/themers are strongly encouraged to use these
 * variables. Otherwise they will have to explicitly specify the desired field
 * language, e.g. $node->body['en'], thus overriding any language negotiation
 * rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see zen_preprocess_node()
 * @see template_process()
 */
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

   <?php if (!$page && $title): ?>
    <div class="teaser-date" >
	  <div class="side">
		<div class="dayD"><?php print t(date("D",$created)); ?></div>
		<div class="day"><?php print date("d",$created); ?></div>
		<div class="month"><?php print t(date("M",$created)); ?></div>
	  </div> 
	  <div class="node-side">
  <?php endif; ?>
  
  <?php print render($title_prefix); ?>
  <?php if (!$page && $title): ?>   
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php if ($unpublished): ?>
    <div class="unpublished"><?php print t('Unpublished'); ?></div>
  <?php endif; ?>

  <?php if ($display_submitted): ?>
    <div class="submitted">
      <?php print $submitted; ?>
    </div>
  <?php endif; ?>
  <div class="clear-fix">
<?php if  (isset($content['field_multi'])):  ?>
<?php hide($content['field_multi']);?>
<?php endif; ?>
</div>

  <div class="content"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      hide($content['field_keywords']);
      hide($content['field_tags']);
      hide($content['body']);
      hide($content['field_slugline']);

      // Insert a like button under the image
      print render($content);
      $block = module_invoke('fb_social','block_view', 'dagens_fb_like_only'); ?>
      <div class="social-plugins">
      <?php print $block['content']; ?>
        <div class="google-plusone">
	  <div class="g-plusone" data-size="tall"></div>
        </div>
      </div>
    <?php
      print render($content['field_slugline']);
      $content['body'][0]['#markup'] = preg_replace_callback('#(<p>.*?</p>)#', 'news_center_insert_ad_on_article', $content['body'][0]['#markup'] );
      print render($content['body']);
      if(!empty($node->field_multi)){
        print '<div class="article-images-link"><a href="/billeder/'.$node->nid.'"><strong>Kilk her for at se alle billederne i fuld størrelse »</strong></a></div>';
      }
    ?>

      <!-- adServing 7.1.1c www.dagens.dk + Dagens.dk 1x1 (mobil) -->
      <script type="text/javascript">
        var adspaceid = '715';
        var keywords = '';
        if(adServingLoad == undefined) var adServingLoad = '';
        document.write('<scr'+'ipt type="text/javascript" src="http://dinsalgsvagt.adservinginternational.com/js.php?adspaceid='+adspaceid+'&adServingLoad='+adServingLoad+'&keywords='+keywords+'&click="></scr'+'ipt>');
      </script>

      <noscript>
        <iframe src="http://dinsalgsvagt.adservinginternational.com/iframe.php?adspaceid=715&keywords=&click=" frameborder="0" marginheight="0" marginwidth="0" width="1" height="1" scrolling="no" style="width:1px; height:1px; margin:0px;"></iframe>
      </noscript>
  </div>

  <?php if ($page): ?> 


    <script type="text/javascript">
    // <![CDATA[

                function CheckMultiple197(frm, name) {
                    for (var i=0; i < frm.length; i++)
                    {
                        fldObj = frm.elements[i];
                        fldId = fldObj.id;
                        if (fldId) {
                            var fieldnamecheck=fldObj.id.indexOf(name);
                            if (fieldnamecheck != -1) {
                                if (fldObj.checked) {
                                    return true;
                                }
                            }
                        }
                    }
                    return false;
                }
            function CheckForm197(f) {
                var email_re = /[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/i;
                if (!email_re.test(f.email.value)) {
                    alert("Please enter your email address.");
                    f.email.focus();
                    return false;
                }

                    return true;
                }

    // ]]>
    </script>
    <form class="newsletter-subscribe" method="post" action="http://client2.mailmailmail.net/form.php?form=197" id="frmSS197" onsubmit="return CheckForm197(this);">
        <h2>Kunne du lide denne artikel?</h2>
        <p>Tilmed dig nyhedsbrevet og modtag de gode historier hver dag i din indbakke gratis.</p>
        <input type="text" name="email" placeholder="Din email"/>
        <input type="hidden" name="format" value="h" />
        <input type="submit" class="submit" value="Ja tak" />
    </form>



    <div class="social-plugins">
    <?php print $block['content']; ?>
      <div class="google-plusone">
        <div class="g-plusone" data-size="tall"></div>
      </div>
    </div>

	  <script type="text/javascript">
	    window.___gcfg = {lang: 'da'};

	    (function() {
	      var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
	      po.src = 'https://apis.google.com/js/plusone.js';
	      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	    })();
	  </script>
    <?php print render($content['field_keywords']);  ?><br />

    <?php print render($content['comments']); ?>

  <?php endif; ?>
  
  <?php if (!$page && $title): ?>   
	  </div>   
	</div>    
  <?php endif; ?>

</div><!-- /.node -->
