// JavaScript Document
(function($){
			$(window).load(function(){
				$("#content_1,#content_2").mCustomScrollbar({
					scrollButtons:{
						enable:true
					}
				});
				$('#notifyDropDown,#cart').css('display','none')
			});
		})(jQuery);
$(document).ready(function(){
	
	/*category menu js*/
		$('.menuIcon').click(function(){
			$('.categoryMenu').toggle()
			$(this).toggleClass('open')
		});
	/*end menu js*/
	
	
	$('.head .right li').click(function(){
		
		$('.head .right li').each(function () {
		
		if ($(this).children("aside").is(":visible")) {

		//	alert('hi')
	$(this).children("aside").toggle()
	
	}
	});
	
		
$(this).children("aside").toggle();


		//$('.head .right li').each(function(){
			//if ($(this).siblings('ul').is(":visible")) {

			//$(this).children('aside').hide()
			//}
		//});
	//	$(this).children('aside').show()
	});
/*toggle seo content*/
$('.seoToggle').click(function(){
	$('.seoMoreContent').slideToggle()
	$(this).toggleClass('minimizeText')
});
/*end toggle seo*/
});

 $(document).ready(function(){
    $('.hotsellerSlider').bxSlider({
        minSlides: 1,
        maxSlides: 5,
        slideWidth: 280,
        auto: false,
        slideMargin: 5,
		autoHover:true,
		pager:false,
		controls:true,
		moveSlides:1
		//onSlideAfter: function (currentSlideNumber, totalSlideQty, currentSlideHtmlObject) {
          //  console.log(currentSlideHtmlObject);
          //  $('.active-slide').removeClass('active-slide');
          //  $('.hotsellerSlider > li').eq(currentSlideHtmlObject + 1).addClass('active-slide')
       // },
      //  onSliderLoad: function () {
           // $('.hotsellerSlider > li').eq(1).addClass('active-slide')
     //   },
		   });
    });
 $(document).ready(function(){
    $('.personalisedSlider,.lastviewdSlider').bxSlider({
        minSlides: 1,
        maxSlides: 5,
        slideWidth: 280,
        auto: false,
        slideMargin: 5,
		autoHover:true,
		pager:false,
		controls:true,
		moveSlides:1
		
	//	onSliderLoad: function() {
   // $(".hotsellerSlider li:not([class='bx-clone'])").eq(0).addClass('current');
 // },
 // onSlideBefore: function() {
  //  $(".hotsellerSlider li").removeClass('current');
  //  current = slider.getCurrentSlide();
   // $(".hotsellerSlider li:not([class='bx-clone'])").eq(current).addClass('current');
  //}
    });
    });
	 $(document).ready(function(){
    $('.homeSlider').bxSlider({      
        auto: true,
      	autoHover:true,
		pager:true,
		controls:true,
		 pagerCustom: '.bx-pager'
    });
$(".bx-prev").mouseover(function(){
 $('.bx-pager .leftThumb').show();

});
$(".bx-prev").mouseout(function(){
 $('.bx-pager .leftThumb').hide();
});


$(".bx-next").mouseover(function(){
 $('.bx-pager .rightThumb').show();
});
$(".bx-next").mouseout(function(){
 $('.bx-pager .rightThumb').hide();
});
	
	
	$('.categoryMenu li').mouseover(function(){
		$('.categoryMenu li').each(function(){
			$(this).removeClass('activeCategoryMenu')
		});
	});
	
	$('.categoryMenu li').mouseout(function(){
		$('.categoryMenu li').each(function(){
			$('.categoryMenu li:first').addClass('activeCategoryMenu')
		});
	});
	
    });	
	
	
	/*fixed header script*/
var stickyOffset = $('.head').offset().top+1;
$(window).scroll(function(){
  var sticky = $('.head'),
      scroll = $(window).scrollTop();
  if (scroll >= stickyOffset) sticky.addClass('sticky');
  else sticky.removeClass('sticky');
});
	/*end fixed header script*/
	
	