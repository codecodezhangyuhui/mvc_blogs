<?php
	class artShows extends main{
		function __construct(){
			parent::__construct();
			$this->db=new db("shows");
		}
		function addShows(){
  			$db=new mysqli("localhost","root","","mvc");
	    	$db->query("set names utf8");
	    	$tree=new zyh();
			$tree->tree("0","·",$db,"category");
			$this->smarty->assign("tree",$tree->str);
  			$this->smarty->display("admin/write.html");
		}
		function add(){
			$db=new mysqli("localhost","root","","mvc");
			$db->query("set names utf8");
			$cid=P("cid");
			$stitle=P("stitle");
			$scon=P("scon");
			$sql="insert into shows (stitle,scon,cid,uid,status) values ('$stitle','$scon',$cid,0,3)";
			$db->query($sql);
			
			if($db->affected_rows>0){
				$this->jump("index.php?m=admin&f=artShows&a=addShows","提交成功");
			}else{
				$this->jump("index.php?m=admin&f=artShows&a=addShows","提交失败");
			}
		}
		
		function shows(){
			$r=$this->db->select();
			$obj=new pages(count($r),5);
			$this->smarty->assign("pages",$obj->out());
			$result=$this->db->select("select * from (shows inner join user on shows.uid=user.uid) inner join category on shows.cid=category.cid ".$obj->limit);
			
			$this->smarty->assign("result",$result);
			$this->smarty->display("admin/controlShows.html");
		}
		
		function delShows(){
			$sid=G("id");
			$result=$this->db->where("sid=".$sid)->delete();
			if($result>0){
				$this->jump("index.php?m=admin&f=artShows&a=shows","删除成功");
			}else{
				$this->jump("index.php?m=admin&f=artShows&a=shows","删除失败");
			}
		}
		function lookShows(){
			$sid=G("id");
			$result=$this->db->where("sid=".$sid)->select();
			$this->smarty->assign("result",$result);
			$this->smarty->display("admin/lookShows.html");
		}
		function status(){
			$status=P("status");
			$sid=P("sid");
			$result=$this->db->where("sid=".$sid)->update("status='$status'");
			if($result>0){
				$this->jump("index.php?m=admin&f=artShows&a=shows","提交成功");
			}else{
				$this->jump("index.php?m=admin&f=artShows&a=shows","提交失败");
			}
		}
	}
?>