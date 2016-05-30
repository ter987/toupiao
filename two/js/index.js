$(function(){
	$(".canyu").click(function(){
		$(".ale_div,.zeceng").show();
	});
	$(".close_btn,.ale_div .btn1").click(function(){
		$(".ale_div,.zeceng").hide();
	});
	$(".guanzhu").click(function(){
		$(".ewm_div,.zeceng").show();
	});
	$(".close_btn,.ale_div .btn1").click(function(){
		$(".ewm_div,.zeceng").hide();
	});
	
	$("body").append('<div id="show_share_div" style="display:none;position:fixed;top:0px;left:0px;z-index:100;width:100%;min-height:1000px;height:'+$(document.body).outerHeight(true)+'px;overflow:hidden;background:url(./images/icon_001.png) 99% 0px no-repeat;background-size:100%;"><img src="./images/icon_fx.png" style="z-index:101;width:100%;padding:0px 5%;"></div></div>');
	$("#sign_in").bind("click",function(){
		$("#show_share_div").show();
	});
	$("#show_share_div").bind("click",function(){
		$(this).hide();
	});
	
})