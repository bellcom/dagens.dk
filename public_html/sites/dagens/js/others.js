$(document).ready(function(){

	$('img[align="left"]').addClass('left');
	$('img[align="right"]').addClass('right');
	
	$('a[target="_blank"]').addClass('blank');
	$('a.blank').attr('target', '_blank');
	
	$('.fancy').fancybox({
		openEffect	: 'elastic',
		closeEffect	: 'elastic',
		nextEffect	: 'fade',
		prevEffect	: 'fade',
		loop		: false,
		helpers : {
			title : {
				type : 'inside'
			}
		}
	});
	
	valideForm("form.vldF");
	
	$("input, textarea").focus(function(){ $(this).addClass('write'); if (this.value==this.title){ this.value=''; } });
	$("input, textarea").blur(function(){ $(this).removeClass('write'); if (this.value!=this.title){ $(this).addClass('write'); } if (this.value==''){ this.value=this.title; $(this).removeClass('write'); } });
	
	//$("input").each(function(){
	//	if (this.value!=this.title){ $(this).addClass('write'); }
	//}); 

	//------------------------------------------------------------------------
	// FORMS validate checkbox
	//------------------------------------------------------------------------
	$('form').submit(function() {
		$(this).find('input').each(function(){
			if(!$(this).hasClass('error') && $(this).val()==$(this).attr('title')){
				$(this).val('');
			}
		});
		
		var switcher = 0;
		$(this).find('input.reqChck').each(function() {
			if($(this).is(':checked')) {
				$(this).parent('li').children('label').removeClass('errorCheck');
			} else {
				$(this).parent('li').children('label').addClass('errorCheck');
				switcher = 1;
			}
		});
		if(switcher==1) {
			return false;
		}
	});
	
	// scroll top
	$(window).scroll(function(){
		if($(window).scrollTop()>50){
			$('.jsScrlUp').stop(true, true).fadeIn();
		} else {
			$('.jsScrlUp').stop(true, true).fadeOut();
		}
	});
	if($(window).scrollTop()>50){
		$('.jsScrlUp').stop(true, true).fadeIn();
	} else {
		$('.jsScrlUp').stop(true, true).fadeOut();
	}
	$('.jsScrlUp').click(function(){
		$('html,body').animate({scrollTop: $('html').offset().top}, 1000);	
		return false;
	});
	
	// tabs
	$('.tabCon .tab').css('display','none');
	$('.tabNav a').click(function(){
		$this = $(this);
		
		$(this).addClass('cur').siblings().removeClass('cur');
		
		$(this).parents('.tabs').children('.tabCon').children('.tab').each(function(){
			if(('#' + $(this).attr('id')) == $this.attr('href')){
				$(this).addClass('opn').siblings().removeClass('opn');
			}
		});
		
		return false;
	});
	
	// accordion
	$('.accord .acrdCnt').css('display','none');
	$('.accord .acrdTb').click(function(){
		if($(this).hasClass('opn')){
			$(this).parent('div').children('.acrdCnt').slideUp();
			$(this).parent('div').removeClass('opn');
			$(this).removeClass('opn');
		} else {
			$(this).parent('div').children('.acrdCnt').css('width', $(this).parents('.accord').width() - 40 + 'px');
			$(this).parent('div').children('.acrdCnt').slideDown();
			$(this).parent('div').addClass('opn');
			$(this).addClass('opn');
		}
		return false;
	});
	
	if(typeof document.body.style.maxHeight === "undefined") {
		$('body').addClass('ieBody');
		$('body').append('<div class="warning"><p><strong>Din browser er forældet. </strong>Installer <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home">den nyeste version</a></p></div>');
	}
});

function valideForm(handler) {
	jQuery.validator.addMethod("defaultVal", function(value, element) {
		return value != element.defaultValue;
	}, "");
	
	jQuery.validator.messages.required = "";
	$(handler).validate({
		onkeyup: false
	});
}