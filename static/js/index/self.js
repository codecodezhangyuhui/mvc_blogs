$(function(){
	uid=$(".wenzhang").attr("uid");
	$(".wenzhang").click(function(){
		$(this).prop("onclick",null).off("click");//只能点击一次
		$.ajax({
			url:"index.php?m=index&f=user&a=ajax",
			data:{uid:uid},
			dataType:"json",
			success:function(e){
				var li="";
				var NR=$(".NR");
				for(var i in e){
					$("<li class='mui-table-view-cell mui-media'><a href='javascript:;'><div class='mui-media-body'><span class='stitle'>"+e[i]["stitle"]+"</span> <p class='mui-ellipsis scon'>"+e[i]["scon"]+"</p></div> </a></li>").appendTo(NR);
				}
			}
		})
//			console.log(flag);
	})
})