<?php
	class guanzhu extends indexMain{
	    function __construct(){
	        parent::__construct();
	        $this->db=new db("guanzhu");
	        $this->db1=new db("love");
	        
	    }
	    //关注
	    function addguanzhu(){
	    	$this->session->set("near",$_GET["near"]);
	    	if($this->session->get("uid")){
	    		$uid1=$this->session->get("uid");
	            $uid2=G("uid2");
	            $result=$this->db->insert("uid1=$uid1;uid2=$uid2");
	            if($result>0){
	                echo "yes";
	            }
	    	}else{
	    		echo "no";
	    	}
	    }
	    //取消关注
	    function quxiaoguanzhu(){
	    	$uid1=$this->session->get("uid");
	    	$uid2=G("uid2");
	    	$result=$this->db->where("uid1={$uid1} and uid2={$uid2}")->delete();
	    	if($result>0){
	    		echo "ok";
	    	}else{
	    		echo "no";
	    	}
	    	
	    }
	    //收藏
	    function shoucang(){
			$this->session->set("near",$_GET["near"]);
	    	if($this->session->get("uid")){
	    		$uid=$this->session->get("uid");
	    		$sid=G("sid");
	            $result=$this->db1->insert("uid=$uid;sid=$sid");
	            if($result>0){
	                echo "yes";
	            }else{
	            	echo "no";
	            }
	    	}else{
	    		echo "no";
	    	}
	    }
	    //取消收藏
	    function loveCancel(){
	    	$uid=$this->session->get("uid");
	    	$sid=G("sid");
	    	$result=$this->db1->where("uid={$uid} and sid={$sid}")->delete();
	    	if($result>0){
	    		echo "ok";
	    	}else{
	    		echo "no";
	    	}
	    }
	    
	    
	    
	}
?>