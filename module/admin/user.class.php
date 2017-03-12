<?php
	class user extends main{
		function user(){
	        parent::__construct();
	        $this->checkLogin();
	        $this->db=new db("user");
    	}
		function add(){
			$uname=P("uname");
	        $upass=P("upass");
	        $result=$this->db->insert("uname='$uname';upass='$upass'");
	        if($result>0){
	        	$this->jump("index.php?m=admin&f=category&a=addUser","添加成功");
	        }else{
	        	$this->jump("index.php?m=admin&f=category&a=addUser","添加失败");
	        }
		}
		function edit(){
			$uid= P("uid");
			$uname=P("uname");
			$upass=md5(P("upass"));
			$result=$this->db->where("uid=".$uid)->update("uname='$uname',upass='$upass'");
			if($result>0){
				$this->jump("index.php?m=admin&f=category&a=manageUser","修改成功");
			}else{
				$this->jump("index.php?m=admin&f=category&a=manageUser","修改失败");
			}
			
		}
	}
?>