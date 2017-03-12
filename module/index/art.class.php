<?php
	class art extends indexMain{
		function art(){
	        parent::__construct();
	        $this->checkLogin();
         	$this->db=new db("shows");
    	}
		function add(){
			$db=new mysqli("localhost","root","","mvc");
			$db->query("set names utf8");
			$cid=P("cid");
			$stitle=P("stitle");
			$scon=P("scon");
			$uid=$this->session->get("uid");
			$sql="insert into shows (stitle,scon,cid,uid) values ('$stitle','$scon',$cid,$uid)";
			$db->query($sql);
			
			if($db->affected_rows>0){
				$this->jump("index.php?m=index&f=index&a=write","提交成功");
			}else{
				$this->jump("index.php?m=index&f=index&a=write","提交失败");
			}
		}
		function self(){
			
		}
	}
?>