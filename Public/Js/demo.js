$(function(){

	$("dl").hide();
	
	$("li.mainmenu").hover(function(){
		$(this).find("dl").stop(true,true);
		$(this).find("dl").slideDown();
	},function(){
		$(this).find("dl").stop(true,true);
		$(this).find("dl").slideUp();
	});
	
})