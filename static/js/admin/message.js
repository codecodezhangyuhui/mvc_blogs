$(document).ready(function(){
	var span=document.getElementsByTagName("span")[0];
	var sum=3;
	var url=$("a").attr("href");
	var t=setInterval(function(){
		sum--;
		if(sum==0){
			clearInterval(t);
			location.href=url;
		}else{
			span.innerText=sum;
		}
	},1000)
	
	var text=$("b").get(0).innerText;
	if(text.match("失败")||text.match("错误")){
		$("b").css({color:"red"});
	}
	
	
})