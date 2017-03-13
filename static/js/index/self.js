$(function(){
	uid=$(".wenzhang").attr("uid");
	//发表的文章
	
	var NR=$(".NR");
	$(".wenzhang").click(function(){
		NR.html("");
		$.ajax({
			url:"index.php?m=index&f=user&a=wenzhang",
			data:{uid:uid},
			dataType:"json",
			success:function(e){
				var li="";
				for(var i in e){
					$("<li class='mui-table-view-cell mui-media'><a href='index.php?m=index&f=index&a=show&id="+e[i]["sid"]+"'><div class='mui-media-body'><span class='stitle'>"+e[i]["stitle"]+"</span> <p class='mui-ellipsis scon'>"+e[i]["scon"]+"</p></div> </a></li>").appendTo(NR);
				}
			}
		})
	})
	
	//文章审核情况
	$(".shenhe").click(function(){
		NR.html("");
		$.ajax({
			url:"index.php?m=index&f=user&a=shenhe",
			data:{uid:uid},
			dataType:"json",
			success:function(e){
				var li="";
				var status="";
				for(var i in e){
					if(e[i]["status"]==0){
						status="未审核";
					}else if(e[i]["status"]==1){
						status="审核中";
					}else if(e[i]["status"]==2){
						status="审核未通过";
					}else if(e[i]["status"]==3){
						status="审核通过";
					}
					$("<li class='mui-table-view-cell mui-media'><a href='javascript:;'><div class='mui-media-body'><span class='stitle'>"+e[i]["stitle"]+"</span><span style='font-size:16px;color:blue'>("+status+")</span> <p class='mui-ellipsis scon'>"+e[i]["scon"]+"</p></div> </a></li>").appendTo(NR);
				}
			}
				
		})
	})
	//收藏的文章
	$(".shoucang").click(function(){
		NR.html("");
		$.ajax({
			url:"index.php?m=index&f=user&a=shoucang",
			data:{uid:uid},
			dataType:"json",
			success:function(e){
				var li="";
				for(var i=0;i<e.length;i++){
					for(var j in e[i]){
						$("<li class='mui-table-view-cell mui-media'><a href='index.php?m=index&f=index&a=show&id="+e[i][j]["sid"]+"'><div class='mui-media-body'><span class='stitle'>"+e[i][j]["stitle"]+"</span> <p class='mui-ellipsis scon'>"+e[i][j]["scon"]+"</p></div> </a></li>").appendTo(NR);
					}
					
				}
				
			}
		})
	})
	//别人的文章
	uid1=$(".otherwenzhang").attr("uid");
	$(".otherwenzhang").click(function(){
		NR.html("");
		$.ajax({
			url:"index.php?m=index&f=user&a=wenzhang",
			data:{uid:uid1},
			dataType:"json",
			success:function(e){
				var li="";
				for(var i in e){
					$("<li class='mui-table-view-cell mui-media'><a href='index.php?m=index&f=index&a=show&id="+e[i]["sid"]+"'><div class='mui-media-body'><span class='stitle'>"+e[i]["stitle"]+"</span> <p class='mui-ellipsis scon'>"+e[i]["scon"]+"</p></div> </a></li>").appendTo(NR);
				}
			}
		})
	})
	//关注
	$(".guanzhu").click(function(){
		NR.html("");
		$.ajax({
			url:"index.php?m=index&f=user&a=guanzhu",
			data:{uid:uid},
			dataType:"json",
			success:function(e){
				for(var i=0;i<e.length;i++){
					for(var j in e[i]){
						if(e[i][j]["bname"]){
							username=e[i][j]["bname"];
						}else{
							username=e[i][j]["uname"];
						}
						if(e[i][j]["photo"]){
							photo=e[i][j]["photo"];
						}else{
							photo="static/images/bjt.jpg";
						}
						$("<li class='mui-table-view-cell mui-media'><div class='row user'><div class='photo'><img src='"+photo+"' /></div><div class='col-sm-2 photoes username'><a href='index.php?m=index&f=index&a=you&id="+e[i][j]['uid']+"'>"+username+"</a></div> </div></li>").appendTo(NR);
					}
				}
				
			}
		})
	})
	//粉丝
	$(".fensi").click(function(){
		NR.html("");
		$.ajax({
			url:"index.php?m=index&f=user&a=fensi",
			data:{uid:uid},
			dataType:"json",
			success:function(e){
				for(var i=0;i<e.length;i++){
					for(var j in e[i]){
						if(e[i][j]["bname"]){
							username=e[i][j]["bname"];
						}else{
							username=e[i][j]["uname"];
						}
						if(e[i][j]["photo"]){
							photo=e[i][j]["photo"];
						}else{
							photo="static/images/bjt.jpg";
						}
						$("<li class='mui-table-view-cell mui-media'><div class='row user'><div class='photo'><img src='"+photo+"' /></div><div class='col-sm-2 photoes username'><a href='index.php?m=index&f=index&a=you&id="+e[i][j]['uid']+"'>"+username+"</a></div> </div></li>").appendTo(NR);
					}
				}
				
			}
		})
	})              
                   
	
                
                    
                 		
                    
                    
                     	
                    
                    
                
	       
	
})

