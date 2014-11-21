jQuery(document).ready(function($){
  var pageid = 0;
  jQuery("a.gallerylink").each(function() {
      var _href = jQuery(this).attr("href"); 
          jQuery(this).attr("href", _href + '?page=' + pageid);
            pageid++;
  });
});
