<?php
	class index extends indexMain{
		function init(){
          	if($this->session->get("ulogin")=="yes"){
              	$this->session->set("welcome","yes");
          	}
			$this->db=new db("shows");
			$result=$this->db->select("select * from shows,user where shows.uid=user.uid and status=3 order by shows.stime desc");
			$this->smarty->assign("result",$result);
			if($this->session->get("uid")){
				$uid=$this->session->get("uid");
				$db1=new db("user");
				$result3=$db1->where("uid=".$uid)->select();
				$this->smarty->assign("result3",$result3[0]);
			}
			//点击量
			$liulan=$this->db->select("select * from shows where status=3 order by hits desc limit 0,5");
			$this->smarty->assign("liulan",$liulan);
			//点赞
			$dianzan=$this->db->where("status=3")->select();
			$this->smarty->assign("dianzan",$dianzan);
			
			$this->smarty->assign("uname",$this->session->get("uname"));
			$this->smarty->display("index/index.html");
		}
		function reg(){
			$this->smarty->display("index/reg.html");
		}
	 	function login(){
     		$this->smarty->display("index/login.html");
	  	}
	  	function write(){
	  		if($this->session->get("uname")){
	  			$db=new mysqli("localhost","root","","mvc");
		    	$db->query("set names utf8");
		    	$tree=new zyh();
				$tree->tree("0","·",$db,"category");
				$this->smarty->assign("tree",$tree->str);
	  			$this->smarty->assign("uname",$this->session->get("uname"));
	  			$this->smarty->display("index/write.html");
	  		}else{
	  			$this->jump("index.php?m=index&f=index&a=login","请登录");
	  		}
	  	}
	  	//自己登陆 进入个人主页
	  	function self(){
			$uid=$this->session->get("uid");
			$db1=new db("user");
			$result3=$db1->where("uid=".$uid)->select();
			$this->smarty->assign("result3",$result3[0]);
			//发表文章数
			$db=new db("shows");
			$result[]=array();
			$result=$db->where("uid=".$uid." and status=3")->select();
			$this->smarty->assign("result",$result);
			//收藏文章数
			$db4=new db("love");
			$result4[]=array();
			$result4=$db4->where("uid=".$uid)->select();
			$this->smarty->assign("result4",$result4);
			//文章审核情况
			$result10=$db->where("uid=".$uid." and status!=3")->select();
			$this->smarty->assign("result10",$result10);
			
			//关注人数
			$db6=new db("guanzhu");
			$result6=$db6->where("uid1=".$uid)->select();
			$result7[]=array();
			foreach($result6 as $v){
				$result7[]=$db1->where("uid=".$v["uid2"])->select();
			}
			$this->smarty->assign("result7",$result7);
			//粉丝人数
			$result9=$db6->where("uid2=".$uid)->select();
			$this->smarty->assign("result9",$result9);
			//留言数
			$result11=$db->select("select * from message where uid2=".$uid);
			$this->smarty->assign("result11",$result11);
			
			
	  		$this->smarty->assign("uid",$this->session->get("uid"));
	  		$this->smarty->assign("uname",$this->session->get("uname"));
	  		$this->smarty->assign("self","yes");
	  		$this->smarty->display("index/self.html");
	  	}
	  	//登录状态或未登录 看别人的个人主页
	  	function you(){
	  		$db=new db("user");
	  		if($uid=$this->session->get("uid")){
	  			$result3=$db->where("uid=".$uid)->select();
				$this->smarty->assign("result3",$result3[0]);
	  		}
			$uid2=G("id");
	  		//发表文章数
			$db5=new db("shows");
			$result5=$db5->where("uid=".$uid2)->select();
			$this->smarty->assign("result5",$result5);
	  		//关注人数
	  		$result8[]=array();
			$db6=new db("guanzhu");
			$result6=$db6->where("uid1=".$uid2)->select();
			foreach($result6 as $v){
				$result8[]=$db->where("uid=".$v["uid2"])->select();
			}
			$this->smarty->assign("result8",$result8);
			//粉丝人数
			$result9=$db6->where("uid2=".$uid2)->select();
			$this->smarty->assign("result9",$result9);
			
			
	  		$result=$db->where("uid=".$uid2)->select();
	  		$this->smarty->assign("uname",$this->session->get("uname"));
	  		if($result[0]["bname"]){
	  			$this->smarty->assign("unames",$result[0]["bname"]);
	  		}else{
	  			$this->smarty->assign("unames",$result[0]["uname"]);
	  		}
	  		$this->smarty->assign("photo",$result[0]["photo"]);
	  		$this->smarty->assign("self","no");
	  		$this->smarty->display("index/self.html");
	  	}
	  
	  	
	  	//进入文章详情页
	  	function show(){
	  		if($this->session->get("uid")){
				$uid=$this->session->get("uid");
				$db1=new db("user");
				$result3=$db1->where("uid=".$uid)->select();
				$this->smarty->assign("result3",$result3[0]);
			}
	  		$sid=G("id");
	  		$db=new db("shows");
	  		$result=$db->select("select * from shows,user where shows.uid=user.uid and sid=".$sid);
	  		if($this->session->get("uid")){//判断是否登录
	  			//关注的判断
	  			$db1=new db("guanzhu");
		  		$result1=$db1->where("uid1=".$this->session->get("uid"))->select();//查当前用户关注了哪些人
		  		if($result[0]["uid"]==$this->session->get("uid")){//文章的作者==当前登录的用户
		  			$this->smarty->assign("guanzhu","me");
			  	}else{
			  		if(count($result1)){//判断数组里是否有值
			  			foreach($result1 as $v1){//循环数组
				  			if($v1["uid2"]==$result[0]["uid"]){//被关注的人==文章的作者，说明关注过这个人
				  				$this->smarty->assign("guanzhu","true");
				  				break;
				  			}else{
				  				$this->smarty->assign("guanzhu","false");
				  			}
		  				}	 
				  	}else{
				  		$this->smarty->assign("guanzhu","false");
				  	}
			  	}
			  	//收藏的判断
			  	$db2=new db("love");
			  	$result2=$db2->where("uid=".$this->session->get("uid"))->select();
			  	if($result[0]["uid"]==$this->session->get("uid")){
		  			$this->smarty->assign("love","me");
			  	}else{
			  		if(count($result2)){
			  			foreach($result2 as $v2){
			  				if($v2["sid"]==$result[0]["sid"]){
				  				$this->smarty->assign("love","true");
				  				break;
				  			}else{
				  				$this->smarty->assign("love","false");
				  			}
			  			}
			  		}else{
			  			$this->smarty->assign("love","false");
			  		}
			  	}	
	  		}else{
	  			$this->smarty->assign("guanzhu","nosession");
	  			$this->smarty->assign("love","nosession");
	  		}
	  		//留言
	  		$db3=new db("message");
	  		$son[]=array();
	  		$result4=$db3->select("select * from message,user where message.uid1=user.uid and sid=".$sid);
	  		foreach($result4 as $v){
	  			if($db3->where("pid=".$v["mid"])->select()){
	  				$son[]=$db3->select("select * from message,user where message.uid1=user.uid and pid={$v['mid']}");
	  			}
	  		}
	  		$mm[]=array();
	  		foreach($son as $c){
	  			foreach($c as $x){
	  				$mm[]=$x;
	  			}
	  		}
	  		$this->smarty->assign("son",$mm);
	  		
	  		
	  		
	  		$this->smarty->assign("result4",$result4);
	  		$this->smarty->assign("result",$result[0]);
	  		$this->smarty->assign("uname",$this->session->get("uname"));
	  		$this->smarty->display("index/show.html");
	  	}
		function code(){
			$code=new code();
			$code->output();
			$session=new session();
			$session->set("code",$code->resultLetter);
		}
		function check(){
			$code=@strtolower($_POST["code"]);
	        $session=$this->session;
	        if($code!==$session->get("code")){
	            $this->jump("index.php?m=index&f=index&a=login","验证码错误");
	            exit;
	        }
	        $uname=P("uname");
	        if($uname=="admin"){
	        	$this->jump("index.php?m=index&a=login","登陆失败");
	        	exit;
	        }
	        $upass=md5(P("upass"));
	        $db=new db("user");
	        $result=$db->select();
	        foreach ($result as $v){
	            if($v["uname"]==$uname){
	                if($v["upass"]==$upass){
	                    $session->set("ulogin","yes");
	                    $session->set("uname",$uname);
	                    $session->set("uid",$v["uid"]);
	                    $url=$this->session->get("near")?$this->session->get("near"):"index.php";
	                    $this->jump($url,"登陆成功");
	                    exit;
	                }
	            }
	        }
	        $this->jump("index.php?m=index&a=login","登陆失败");
		}
		function logout(){
	      	$this->session->clear("ulogin");
	      	$this->session->clear("uname");
	      	$this->session->clear("uid");
	      	$this->session->clear("welcome");
	      	$this->jump("index.php?m=index&f=index&a=login","退出成功");
	    }
	}
?>
