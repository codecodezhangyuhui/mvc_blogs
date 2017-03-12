$(function(){
	//用户名
	var reg=/^\w{5,10}$/;
	$("input[name='username']").keyup(function(){
		var val=$(this).val();
		if(!reg.test(val)){
			$("span").eq(0).html("格式错误").css("color","red");
			$("input[name='btn']").attr("disabled","disabled");
		}else{
			$.ajax({
				type:"post",
				url:"selectUser.php",
				data:{username:val},
				success:function(q){
					if(q=="yes"){
						$("span").eq(0).html("用户名可用").css("color","green");
						$("input[name='username']").attr("ok","ok");
						if($("input[name='password']").attr("ok")=="ok"){
							$("input[name='btn']").removeAttr("disabled");
						}
					}else if(q=="no"){
						$("span").eq(0).html("用户名已存在").css("color","red");
						$("input[name='username']").removeAttr("ok");
						$("input[name='btn']").attr("disabled","disabled");
					}
				}
			})
		}
	})
	//密码
	$("input[name='password']").keyup(function(){
		var val=$(this).val();
		if(!reg.test(val)){
			$("span").eq(1).html("格式错误").css("color","red");
			$("input[name='password']").removeAttr("ok");
			$("input[name='btn']").attr("disabled","disabled");
		}else{
			$("span").eq(1).html("格式正确").css("color","green");
			$("input[name='password']").attr("ok","ok")
			if($("input[name='username']").attr("ok")=="ok"){
				$("input[name='btn']").removeAttr("disabled");
			}
		}
	})
})