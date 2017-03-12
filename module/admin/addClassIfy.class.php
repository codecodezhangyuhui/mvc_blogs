<?php
	class addClassIfy extends main{
		function addClassIfy(){
	        parent::__construct();
	        $this->checkLogin();
	      	$this->db=new db("category");
   	 	}
   	 	function addClassIfyInfo(){
	    	$pid=P("pid");
	    	$cname=P("cname");
	    	$result=$this->db->insert("pid=$pid;cname='$cname'");
	    	if($result>0){
	    		$this->jump("index.php?m=admin&f=category&a=addClassIfy","添加成功");
	    	}else{
	    		$this->jump("index.php?m=admin&f=category&a=addClassIfy","添加失败");
	    	}
   		}
   		function controlClassIfy(){
   			$db=new mysqli("localhost","root","","mvc");
	    	$db->query("set names utf8");
	    	$tree=new zyh();
			$tree->table("0","·",$db,"category");
			$this->smarty->assign("cname",$tree->str);
			$this->smarty->display("admin/controlClassIfy.html");
    	}
    	function delClassIfy(){
    		$cid=G("id");
    		$result=$this->db->where("cid=".$cid)->delete();
    		if($result>0){
    			$this->jump("index.php?m=admin&f=addClassIfy&a=controlClassIfy","删除成功");
    		}else{
    			$this->jump("index.php?m=admin&f=addClassIfy&a=controlClassIfy","删除失败");
    		}
    	}
    	function editClassIfy(){
    		$cid=G("id");
    		$result=$this->db->where("cid=".$cid)->select();
    		foreach($result as $v){
    			$this->smarty->assign("cname",$v["cname"]);
    			$db=new mysqli("localhost","root","","mvc");
		    	$db->query("set names utf8");
		    	$tree=new zyh();
				$tree->tree("0","·",$db,"category",$v["pid"]);
				$this->smarty->assign("cclass",$tree->str);
    		}
    		$this->smarty->assign("cid",$cid);
			$this->smarty->display("admin/editClassIfy.html");
    	}
    	function editClassIfyInfo(){
    		$cid=P("cid");
    		$cname=P("cname");
    		$pid=P("pid");
			$result=$this->db->where("cid=".$cid)->update("cname='$cname',pid='$pid'");
    		if($result>0){
    			$this->jump("index.php?m=admin&f=addClassIfy&a=controlClassIfy","修改成功");
    		}else{
    			$this->jump("index.php?m=admin&f=addClassIfy&a=controlClassIfy","修改失败");
    		}
    	}
    	
	}
?>