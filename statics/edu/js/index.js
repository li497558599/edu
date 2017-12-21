
$(function(){
$(".psl9-d-ula li:eq(0)").addClass("lia");
$(".psl9-d-ula li:eq(1)").addClass("lib");
$(".psl9-d-ula li:eq(2)").addClass("lic");
$(".psl9-d-ula li:eq(3)").addClass("lid");
$(".psl9-d-ula li:eq(4)").addClass("lie");
$(".psl9-d-ula li:eq(5)").addClass("lif");

$(".head-dla").hover(function(){
	if($(this).find("dd").is(":hidden")){
		$(this).find("dd").slideDown(0);
		}else{
		$(this).find("dd").slideUp(0);	
		}						
	})	   

$('.sl9-dul li').not("li:last").bind('mouseenter', function () {
	$(this).addClass('on').siblings().removeClass('on');
	$(".sl9-da-dta").find('.sl9-tbox').eq($(this).index()).show().siblings().hide();
});	
   
$('.psl9-d-ulb li').bind('mouseenter', function () {
	$(this).addClass('on').siblings().removeClass('on');
	$(".psl9-da").find('.psl9-tbox').eq($(this).index()).show().siblings().hide();
});
$('.psl9-dc-dda span').not("li:last").bind('mouseenter', function () {
	$(this).addClass('on').siblings().removeClass('on');
	$(".psl9-dc-dta").find('.psl9-dc-diva').eq($(this).index()).show().siblings().hide();
});	 
		   
$(".close").click(function(){
	$(".fbox").hide(0);							
	})	
		   
$(".fboxam span").click(function(){
	$(".fboxa").hide(0);							
	})		   


$(".fbox-dld").click(function(){
   var sc=$(window).scrollTop();
   $('body,html').animate({scrollTop:0},300);
 })
$(".pfbox-c").click(function(){
   var sc=$(window).scrollTop();
   $('body,html').animate({scrollTop:0},300);
 })
		   
$(".slw-phd-d a").click(function(){
	$(this).toggleClass("on");							
	})

$(".fbox dl").hover(function(){
   $(this).find("dd").fadeIn(300);
 },function(){
   $(this).find("dd").fadeOut(300);
 })	

$('.mflash-b').vTicker({ 
		speed: 500,
		pause: 2000,
		animation: 'fade',
		mousePause: false,
		showItems: 3
});

});


//  var mySwiper = new Swiper('.swiper-container',{
  //   pagination: '.pagination',
  //   loop:true,
	// autoplay:3000,
   //  grabCursor: true,
   //  paginationClickable: true
//   })
 
 
 var mySwiper2 = new Swiper('.swiper-container2',{
    pagination: '.pagination2',
    loop:true,
    grabCursor: true,
    paginationClickable: true
  })
  $('.arrow-l').on('click', function(){
    mySwiper2.swipePrev();
  })
  $('.arrow-r').on('click', function(){
    mySwiper2.swipeNext();
  })
  
 var mySwiper4 = new Swiper('.swiper-container4',{
    pagination: '.pagination4',
    paginationClickable: true,
    slidesPerView: 'auto'
  })

 var mySwiper5 = new Swiper('.swiper-container5',{
    pagination: '.pagination5',
    loop:true,
	autoplay:2000,
	slidesPerView: 5,
    paginationClickable: true
  })
 