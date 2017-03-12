$(function(){
	$("#form").validate({
		rules:{
			uname:{
				required:true,
				minlength:7,
				remote:{
					type:"post",
					url:"index.php?m=index&f=user&a=validateUsername",
					data:{"uname":function(){
						return $("#uname").val();
					}},
					dataType:"json"
				}
			},
			upass:{
				required:true,
				minlength:7
			},
			upass1:{
				required: true,
				minlength: 5,
				equalTo: "#upass"
			}
		},
		messages:{
			uname:{
				required:"用户名必填",
				minlength:"用户名不能少于7位",
				remote:"用户名已存在"
			},
			upass:{
				required:"密码必填",
				minlength:"密码不能少于7位"
			},
			upass1:{
				required:"必须再次输入密码",
				minlength: "不能少于7位",
				equalTo: "两次密码输入不一致"
			}
		}
	})
	
	
})
