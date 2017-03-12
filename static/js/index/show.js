$(function(){
	//设置遮罩的宽高
    $(".mask").css("height",$(window).height());
    $(".replyBtn").each(function(index){
    	$(this).click(function(){
        	$(".submit2").eq(index).slideToggle(100);
    	})
    })
//关注
    $(".guanzhu").click(function(){
        $.ajax({
            url:"index.php?m=index&f=guanzhu&a=addguanzhu",
            data:{
                near:location.href,
                uid2:$(".author-name").attr("uid2")
            },
            success:function(e){
                if(e=="no"){
                	//弹出框，提示用户进行登录
                    $(".mask").css("display","block");
                    $(".notice-login").css("display","block");
                }else if(e=="yes"){
                    $(".guanzhu").css("display","none");
                    $(".quxiaoguanzhu").css("display","inline-block");
                    $(".notice").css("display","block");
                    $(".mask").css("display","block")
                    setTimeout(function(){
                        $(".notice").css("display","none");
                        $(".mask").css("display","none");
                    },1500)
                }
            }
        })
    })
    //取消登录
    $(".quxiao").click(function(){
    	$(".mask").css("display","none");
    	$(".notice-login").css("display","none");
    })
    
//取消关注
    $(".quxiaoguanzhu").click(function(){
        $.ajax({
            url:"index.php?m=index&f=guanzhu&a=quxiaoguanzhu",
            data:{
                uid2:$(".author-name").attr("uid2")
            },
            success:function(e){
                if(e=="ok"){
                    $(".quxiaoguanzhu").css("display","none");
                    $(".guanzhu").css("display","inline-block");
                    $(".notice").css("display","block");
                    $(".mask").css("display","block");
                    setTimeout(function(){
                        $(".notice").css("display","none");
                        $(".mask").css("display","none");
                    },1500)
                }else{
                    $(".notice").css("display","block").html("操作失败");
                    $(".mask").css("display","block");
                    setTimeout(function(){
                        $(".notice").css("display","none").html("操作成功");
                        $(".mask").css("display","none");
                    },1500)
                }
            }
        })
    })
    //收藏
    $(".loveBtn").click(function(){
        $.ajax({
            url:"index.php?m=index&f=guanzhu&a=shoucang",
            data:{
                near:location.href,
                sid:$(".author-name").attr("sid")
            },
            success:function(e){
                if(e=="no"){
                    $(".mask").css("display","block");
                    $(".notice-login").css("display","block");
                }else if(e=="yes"){
                    $(".loveBtn").css("display","none");
                    $(".loveCancel").css("display","inline-block");
                    $(".notice").css("display","block");
                    $(".mask").css("display","block")
                    setTimeout(function(){
                        $(".notice").css("display","none")
                        $(".mask").css("display","none")

                    },2000)
                }
            }

        })
    })
	//取消收藏
     $(".loveCancel").click(function(){
        $.ajax({
            url:"index.php?m=index&f=guanzhu&a=loveCancel",
            data:{
                sid:$(".author-name").attr("sid")
            },
            success:function(e){
                if(e=="ok"){
                    $(".loveCancel").css("display","none");
                    $(".loveBtn").css("display","inline-block");
                    $(".notice").css("display","block");
                    $(".mask").css("display","block");
                    setTimeout(function(){
                        $(".notice").css("display","none");
                        $(".mask").css("display","none");
                    },1500)
                }else{
                    $(".notice").css("display","block").html("操作失败");
                    $(".mask").css("display","block");
                    setTimeout(function(){
                        $(".notice").css("display","none").html("操作成功");
                        $(".mask").css("display","none");

                    },1500)
                }
            }
        })
    })
    
    
    
    
    
    
    
})
