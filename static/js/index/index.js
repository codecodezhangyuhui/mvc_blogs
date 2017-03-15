$(function(){
	
	$(".dianzan").click(function(){
		var spanval=$(this).find("span").html();
		var that=this;
		$.ajax({
			url:"index.php?m=index&f=user&a=dianzan",
			data:{
				sid:$(this).attr("sid")
			},
			success:function(e){
				
				if(e=="no"){
					//弹出框，提示用户进行登录
                    $(".mask").css("display","blcok");
                    $(".notice-login").css("display","block");
				}else if(e=="dianguo"){
					 $(".notice").css("display","block").html("不可重复点赞").css({fontSize:"14px"});
                        $(".mask").css("display","block");
					setTimeout(function(){
						$(".notice").css("display","none").html("不可重复点赞").css({fontSize:"14px"});
	                    $(".mask").css("display","none");
                    },1000)
				}else if(e=="yes"){
					var newval=parseInt(spanval)+1;
					$(that).find("span").html(newval);
					 $(".notice").css("display","block").html("点赞成功");
                        $(".mask").css("display","block");
                    setTimeout(function(){
                        $(".notice").css("display","none").html("点赞成功");
                        $(".mask").css("display","none");
                    },500)
				}
			}
		});
	})
	
	$(".quxiao").click(function(){
		$(".notice-login").css("display","none");
		$(".mask").css("display","none");
	})
	
})
