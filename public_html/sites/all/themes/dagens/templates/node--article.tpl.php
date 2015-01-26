<article<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if (!$page && $title): ?>
  <header>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
  </header>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  <?php if ($display_submitted): ?>
  <footer class="submitted artMt">
 <?php print render($content['field_tags']); ?>

|

  Skrevet af <?php print strip_tags($name); ?> den <?php print $date; ?>

  </footer>
    <div class="artlDtlBnr ac">
 <?php echo views_embed_view('billeder_fra_artikel', $display_id = 'block_1') ?>

	<!-- Begin - DagensDK_250x250_Article_1 -->
	<div class="adItm" id='div-DagensDk_250x250_Article_1' style='width:250px; height:250px;'>
		<script type='text/javascript'>
			googletag.cmd.push(function() { googletag.display('div-DagensDk_250x250_Article_1'); });
		</script>
	</div>
	<!-- End - DagensDK_250x250_Article_1 -->

    </div>
  <?php endif; ?>
  <aside class="conSide socSide">
  <div class="socials">
    <?php if (!empty($content['links'])): ?>
      <nav class="links node-links clearfix"><?php print render($content['links']); ?>
        <div class="google-plusone">
          <div class="g-plusone" data-size="tall"></div>
        </div>
        <script type="text/javascript">
          window.___gcfg = {lang: 'da'};
          (function() {
            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
            po.src = 'https://apis.google.com/js/plusone.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
          })();
        </script>
      </nav>
    <?php endif; ?>
 </div>

<?php echo views_embed_view('relaterede_artikler', $display_id = 'block_1') ?>
 <div id="article-tags">
  <?php if(isset($content['field_keywords'])): ?>

  <strong class="h3">Tags:</strong>
 <?php print render($content['field_keywords']);
  endif;?>

</div>


  </aside>
<h2> <?php print strip_tags(render($content['field_slugline'])); ?></h2>
  <div<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['field_image']);
      hide($content['field_facebook_link_']);
      hide($content['comments']);
      hide($content['field_multi']);
      hide($content['links']);
      hide($content['fb_comments']);
      hide($content['sharethis']);
      hide($content['field_indhold2']);
      print render($content);
    ?>
    <?php echo views_embed_view('billeder_fra_artikel', $display_id = 'block') ?>

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

  </div>
  <div class="google-ads-article-bottom">


	<!-- Begin - DagensDK_250x250_Article_2 -->
	<div class="ad-left ad" id='div-DagensDk_250x250_Article_2' style='width:250px; height:250px;'>
		<script type='text/javascript'>
			googletag.cmd.push(function() { googletag.display('div-DagensDk_250x250_Article_2'); });
		</script>
	</div>
	<!-- End - DagensDK_250x250_Article_2 -->


	<!-- Begin - DagensDk_250x250_Article_3 -->
	<div class="ad-right ad" id='div-DagensDk_250x250_Article_3' style='width:250px; height:250px;'>
		<script type='text/javascript'>
			googletag.cmd.push(function() { googletag.display('div-DagensDk_250x250_Article_3'); });
		</script>
	</div>
	<!-- End - DagensDk_250x250_Article_3 -->

  </div>
  <div class="clearfix">


   <?php print render($content['fb_comments']); ?>
  </div>
</article>
