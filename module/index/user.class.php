<?php
	class user extends indexMain{
		function __construct(){
	        parent::__construct();
	        $this->checkLogin();
	        $this->db=new db("user");
    	}
    	function validateUsername(){
    		$uname=P("uname");
    		$result=$this->db->select();
    		foreach($result as $v){
    			if($v["uname"]==$uname){
    				echo 'false';
    				exit;
    			}
    		}
    		echo 'true';
    	}
		function regUser(){
			$uname=P("uname");
	        $upass=md5(P("upass"));
	        $result=$this->db->insert("uname='$uname';upass='$upass'");
	        if($result>0){
	        	$this->jump("index.php?m=index&f=index&a=login","注册成功");
	        }else{
	        	$this->jump("index.php?m=index&f=index&a=login","注册失败");
	        }
		}
		//进入个人编辑页
		function personal(){
			$uid=$this->session->get("uid");
			$db1=new db("user");
			$result3=$db1->where("uid=".$uid)->select();
			$this->smarty->assign("result3",$result3[0]);
			$this->smarty->assign("uid",$this->session->get("uid"));
			$result=$this->db->where("uid=".$this->session->get("uid"))->select();
			if(count($result)){
				$this->smarty->assign("result",$result[0]);
			}
	  		$this->smarty->assign("uname",$this->session->get("uname"));
			$this->smarty->display("index/personal.html");
		}
		//处理用户提交的编辑信息
		function bianji(){
			$bname=P("bname");
			$sex=P("sex");
			$contact=P("contact");
			$email=P("email");
			$introduce=P("introduce");
			$uid=$this->session->get("uid");
			$photo=P("imgurl");
			if($photo==""){
				$result=$this->db->where("uid=".$uid)->update("bname='$bname',sex='$sex',contact='$contact',email='$email',introduce='$introduce'");
			}else{
				$result=$this->db->where("uid=".$uid)->update("photo='$photo',bname='$bname',sex='$sex',contact='$contact',email='$email',introduce='$introduce'");
			}
			if($result>0){
				$this->jump("index.php?m=index&f=index&a=self","保存成功");
			}else{
				$this->jump("index.php?m=index&f=index&a=self","保存失败");
			}
		}
		//图片上传
		function upload(){
			date_default_timezone_set("Asia/Shanghai");
			$time=time();
			$showtime=date("Y-m-d");
			if(is_uploaded_file($_FILES["file"]["tmp_name"])){
				$name=$_FILES["file"]["name"];
				if(!file_exists("upload/".$showtime)){
					$wenjian=mkdir("upload/".$showtime,0777,true);
				}
				$url="upload/".$showtime."/".$time.$name;
				move_uploaded_file($_FILES["file"]["tmp_name"],$url);
				echo HTTP_URL."/upload/".$showtime."/".$time.$name;
			}
		}
		//发表的文章 
		function wenzhang(){
			$uid=G("uid");
			$db=new db("shows");
			$result=$db->where("uid=".$uid." and status=3")->select();
			echo json_encode($result);
		}
		//文章审核情况
		function shenhe(){
			$uid=G("uid");
			$db=new db("shows");
			$result=$db->where("uid=".$uid." and status!=3")->select();
			echo json_encode($result);
		}
		//收藏的内容
		function shoucang(){
			$uid=G("uid");
			$db=new db("love");
			$result=$db->where("uid=".$uid)->select();
			
			$db1=new db("shows");
			foreach($result as $v){
				$result1[]=$db1->where("sid=".$v["sid"])->select();
			}
			echo json_encode($result1);
		}
		//关注
		function guanzhu(){
			$uid=G("uid");
			$db=new db("guanzhu");
			$result=$db->where("uid1=".$uid)->select();
			$db1=new db("user");
			foreach($result as $v){
				$result1[]=$db1->where("uid=".$v["uid2"])->select();
			}
			echo json_encode($result1);
		}
		//粉丝
		function fensi(){
			$uid=G("uid");
			$db=new db("guanzhu");
			$result=$db->where("uid2=".$uid)->select();
			$db1=new db("user");
			foreach($result as $v){
				$result1[]=$db1->where("uid=".$v["uid1"])->select();
			}
			echo json_encode($result1);
		}
		//点赞
		function dianzan(){
			$sid=G("sid");
			if($this->session->get("uid")){
				$uid=$this->session->get("uid");
				$result=$this->db->select("select * from dianzan where uid='$uid' and sid='$sid'");
				if(count($result)<1){
					$db1=new db("dianzan");
					$result1=$db1->insert("uid='$uid';sid='$sid'");
					if($result1>0){
						if($this->db->update("update shows set good=good+1 where sid=".$sid)){
							echo "yes";
						}
					}
				}else{
					echo "dianguo";
				}
			}else{
				echo "no";
			}
		}
	}
?>