$(function(){
	//设置遮罩的宽高
    $(".mask").css("height",$(window).height());
    $(".replyBtn").each(function(index){
    	$(this).click(function(){
        	$(".submit2").eq(index).slideToggle(100);
    	})
    })

//取消回复
	$(".quxiaohuifu").click(function(){
		$(this).parents(".submit").find("textarea").val("");
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
    //留言
    $(".messageBtn").click(function(){

        $.ajax({
            url:"index.php?m=index&f=message&a=liuyan",
            data:{
                near:location.href,
                uid2:$(".author-name").attr("uid2"),
                sid:$(".author-name").attr("sid"),
                mcon:$(".mcon").val()
            },
            dataType:"json",
            success:function(e){
           
                if(e.message=="ok"){
                    //数据库插入成功以后要做的事情
                    //1. 创建 liuyanbox
                    var liuyanbox=$("<div class='liuyanbox'></div>").appendTo(".message");
                    //2.  克隆 留言的html结构
                    var liuyan =$(".liuyan:eq(0)").clone(true);
                    liuyanbox.append(liuyan);

                    //3. 要改掉留言里面的内容
                    liuyan.find(".name").html(e["uname"]);
                    liuyan.find(".time").html(e["mtime"]);
                    liuyan.find(".liuyancon").html($(".mcon").val());
					liuyan.find(".phone img").attr("src",e["photo"]);

                    //4. 创建输入框
                   var submit2=$(".submit2:eq(0)").clone(true);
                    liuyanbox.append(submit2);

                    //5. 留言清空

                    $(".mcon").val("");

                    //6. 修改总条数

                    var num=$(".message").find("h3 span").html();

                    num=num==""?0:num;
                    $(".message").find("h3").html("共有"+(num*1+1)+"条留言");


                    //7.  更改回复按钮上的数据

                    $(".replyBtn1").attr("pid",e.mid).attr("uid2",e.uid);
                    $(".notice").css("display","block").html("操作成功");
                    setTimeout(function(){
                        $(".notice").css("display","none");

                    },2000)
                }else if(e.message=="no"){
                    $(".mask").css("display","block");
                    $(".notice-login").css("display","block");
                }
            }
        })
    })
    
    //用来记录回复相关的信息
    var data={};
    $(".replyBtn").click(function(){
       data.sid=$(".author-name").attr("sid");
       data.uid2=$(this).attr("uid2");
       data.pid=$(this).attr("pid");
    })
    // 最终回复按钮
    $(".replyBtn3").click(function(){
        var that=$(this);
        var mcon=that.parent().find("textarea").val();
        $.ajax({
            url:"index.php?m=index&f=message&a=reply",
            data:{
                near:location.href,
                sid:data.sid,
                uid2:data.uid2,
                pid:data.pid,
                mcon:mcon
            },
            dataType:"json",
            success:function(e){
            	console.log(e)
                if(e.message=="no"){
                    $(".mask").css("display","block");
                    $(".notice-login").css("display","block")
                }else if(e.message=="ok"){
					
                    //1. clone replylist结构

                    var replylist=$(".replylist:eq(0)").clone(true);
                    //2.修改replylist里面的内容
					replylist.find(".replycon .name").html(e["uname"]);
                    replylist.find(".replycon .time").html(e["mtime"]);
					replylist.find(".replycon .phone img").attr("src",e["photo"]);
                    replylist.find(".replyinfo").html(mcon);
                  //3 修改按钮上面的值

                    replylist.find(".replyBtn2").attr("uid2",e.uid);

                    replylist.find(".replyBtn2").attr("pid",replylist.parents(".message").find(".replyBtn1").attr("pid"));
					$(".notice").css("display","block").html("操作成功");
					replylist.appendTo(".reply");
                    setTimeout(function(){
                        $(".notice").css("display","none");

                    },2000)
                }
            }

        })
    })
    
    /* 点击量 */
    $.ajax({
        url:"index.php?m=index&f=message&a=hit",
        data:{
            sid:$(".author-name").attr("sid")
        },
        success:function(e){
            if(e=="ok"){
               $(".hitnum").html($(".hitnum").html()*1+1);
            }
        }
    })
    
})
