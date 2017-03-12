$(document).ready(function(){
		$(".opt").click(function(){
			$(this).find(".son").toggle();
		})
		$(".son>li>a").click(function(e){
			e.stopPropagation();
		})
})