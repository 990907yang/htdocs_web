$(document).ready(function(){
	
	$("#fullpage").fullpage({
		sectionsColor: [ '#ddd', '#f5c032', '#185687', '#2ba8a8', '#2C3E50'],
		anchors: ['about', 'overview', 'features', 'case', 'contact'],
		menu: '#menu',
		scrollingSpeed: 800
	});
	
	if($("#section0").hasClass("active")){
		$(".controls ul li").eq(0).css("background","#f5c032");
	}else if($("#section1").hasClass("active")){
		$(".controls ul li").eq(1).css("background","#f5c032");
	}else{
		$(".controls ul li").eq(2).css("background","#f5c032");
	}
		
	$(".controls ul li").click(function(){
		$(this).css('background','#f5c032');
		$(this).siblings().css('background','#ddd');
	});
	window.onload = function(){
		$('.slide_wrap h2').css({"opacity":1,"margin-bottom":"0"});
	}
});