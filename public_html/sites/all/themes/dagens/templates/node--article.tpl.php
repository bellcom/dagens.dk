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
    <div class="adItm"><!-- adServing 7.1.1c www.dagens.dk + 250x250 -->
      <script type="text/javascript">
      var adspaceid = '187';
      var keywords = 'sex';
      var searchwords = ''; //insert searchwords seperated by semicolon
      if(adServingLoad == undefined) var adServingLoad = '';
      document.write('<scr'+'ipt type="text/javascript" src="http://dinsalgsvagt.adservinginternational.com/js.php?adspaceid='+adspaceid+'&adServingLoad='+adServingLoad+'&keywords='+keywords+'&sw='+searchwords+'&rnd='+Math.random()+'"></scr'+'ipt>');
      </script>
      <noscript>
      <iframe src="http://dinsalgsvagt.adservinginternational.com/iframe.php?adspaceid=187&keywords=" frameborder="0" marginheight="0" marginwidth="0" width="250" height="250" scrolling="no" style="width:250px; height:250px; margin:0px;"></iframe>
      </noscript>
      </div>
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
    <div class="ad-left ad">
      <!-- adServing 7.1.1c www.dagens.dk + 250x250 Nr2 -->
      <script type="text/javascript">
        var adspaceid = '225';
        var keywords = 'sex';
        var searchwords = ''; //insert searchwords seperated by semicolon
        if(adServingLoad == undefined) var adServingLoad = '';
        document.write('<scr'+'ipt type="text/javascript" src="http://dinsalgsvagt.adservinginternational.com/js.php?adspaceid='+adspaceid+'&adServingLoad='+adServingLoad+'&keywords='+keywords+'&sw='+searchwords+'&rnd='+Math.random()+'"></scr'+'ipt>');
      </script>
      <noscript>
        <iframe src="http://dinsalgsvagt.adservinginternational.com/iframe.php?adspaceid=225&keywords=" frameborder="0" marginheight="0" marginwidth="0" width="250" height="250" scrolling="no" style="width:250px; height:250px; margin:0px;"></iframe>
      </noscript>
    </div>
    <div class="ad-right ad">

      <!-- adServing 7.1.1c www.dagens.dk + 250x250 Nr3 -->
      <script type="text/javascript">
      var adspaceid = '226';
      var keywords = 'sex';
      var searchwords = ''; //insert searchwords seperated by semicolon
      if(adServingLoad == undefined) var adServingLoad = '';
      document.write('<scr'+'ipt type="text/javascript" src="http://dinsalgsvagt.adservinginternational.com/js.php?adspaceid='+adspaceid+'&adServingLoad='+adServingLoad+'&keywords='+keywords+'&sw='+searchwords+'&rnd='+Math.random()+'"></scr'+'ipt>');
      </script>
      <noscript>
      <iframe src="http://dinsalgsvagt.adservinginternational.com/iframe.php?adspaceid=226&keywords=" frameborder="0" marginheight="0" marginwidth="0" width="250" height="250" scrolling="no" style="width:250px; height:250px; margin:0px;"></iframe>
      </noscript>
    </div>
  </div>
  <div class="clearfix">


   <?php print render($content['fb_comments']); ?>
  </div>
</article>
