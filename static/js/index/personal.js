window.onload=function(){
	var obj=new upload("index.php?&m=index&f=user&a=upload",".files",".progress",".img");
	var btn=document.querySelector("#btn");
	var imgurl=document.querySelector("#imgurl");
	var img=document.querySelector(".img");
	obj.loadStart=function(){
		btn.setAttribute("disabled","disabled");
	}
	obj.up(function(q){
		if(q){
			imgurl.value=q;
			btn.removeAttribute("disabled");
		}
	});
	
	if(imgurl.value==""){
		imgurl.value=img.getAttribute("src");
	}
	
	
}