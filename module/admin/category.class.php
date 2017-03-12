<?php
class category extends main{

    function category(){
        parent::__construct();
        $this->checkLogin();
      	$this->db=new db("user");
    }
	function addUser(){
        $this->smarty->display("admin/addUser.html");
	}
	function manageUser(){
		$result=$this->db->where("uid!=0")->select();
		$this->smarty->assign("result",$result);
		$this->smarty->display("admin/manageUser.html");
	}
    function delUser(){
		$uid=G("id");
		$result=$this->db->delete("uid=".$uid);
		if($result>0){
			$this->jump("index.php?m=admin&f=category&a=manageUser","删除成功");
		}else{
			$this->jump("index.php?m=admin&f=category&a=manageUser","删除失败");
		}
    }
    function editUser(){
    	$uid=G("id");
    	$result=$this->db->where("uid=".$uid)->select();
    	foreach($result as $v){
    		$this->smarty->assign("uname",$v["uname"]);
    		$this->smarty->assign("upass",$v["upass"]);
    	}
    	$this->smarty->assign("uid",$uid);
    	$this->smarty->display("admin/editUser.html");
    }
    function addClassIfy(){
    	$db=new mysqli("localhost","root","","mvc");
    	$db->query("set names utf8");
    	$tree=new zyh();
		$tree->tree("0","·",$db,"category");
		$this->smarty->assign("cname",$tree->str);
		$this->smarty->display("admin/addClassIfy.html");
    }
}
?>