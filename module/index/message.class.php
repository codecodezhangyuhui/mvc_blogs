<?php
	class message extends indexMain{
	    function __construct(){
	        parent::__construct();
	        $this->db=new db("message");
	    }
	    function liuyan(){
	    	$this->session->set("near",$_GET["near"]);
	        if($this->session->get("uid")){
	            $uid1=$this->session->get("uid");
	            $uid2=$_GET["uid2"];
	            $sid=$_GET["sid"];
	            $mcon=$_GET["mcon"];
	            $db=new mysqli("localhost","root","","mvc");
	            $db->query("set names utf8");
	            $sql="insert into message(uid1,uid2,sid,mcon) values ('$uid1','$uid2','$sid','$mcon')";
	            $db->query($sql);
	            if($db->affected_rows>0){
	                $arr["mid"]=$db->insert_id;
	                $arr["uid"]=$this->session->get("uid");
	                $arr["message"]="ok";
	                $result=$this->db->where("mid=".$db->insert_id)->select();
	                $arr["mtime"]=$result[0]["mtime"];
	                $user=$this->db->select("select * from user where uid=".$this->session->get("uid"));
	                if($user[0]["bname"]){
	                	$names=$user[0]["bname"];
	                }else{
	                	$names=$user[0]["uname"];
	                }
	                $arr["uname"]=$names;
	                $arr["photo"]=$user[0]["photo"];
	                echo json_encode($arr);
	            }
	        }else{
	            $arr["message"]="no";
	            echo json_encode($arr);
	        }
		}
		  /*回复的数据的处理*/
	    function reply(){
	        $this->session->set("near",$_GET["near"]);
	        if($this->session->get("uid")){
	            $sid=$_GET["sid"];
	         	$uid1=$this->session->get("uid");
	        	$uid2=$_GET["uid2"];
	            $pid=$_GET["pid"];
	            $mcon=$_GET["mcon"];
	            
	            $db=new mysqli("localhost","root","","mvc");
	            $db->query("set names utf8");
	            $sql="insert into message(sid,uid1,uid2,mcon,pid) values ('$sid','$uid1','$uid2','$mcon','$pid')";
	            $db->query($sql);
	            
	            if($db->affected_rows>0){
//	                $arr["uid"]=$this->session->get("uid");
//	                $arr["message"]="ok";


					$arr["mid"]=$db->insert_id;
	                $arr["uid"]=$this->session->get("uid");
	                $arr["message"]="ok";
	                $result=$this->db->where("mid=".$db->insert_id)->select();
	                $arr["mtime"]=$result[0]["mtime"];
	                $user=$this->db->select("select * from user where uid=".$this->session->get("uid"));
	                if($user[0]["bname"]){
	                	$names=$user[0]["bname"];
	                }else{
	                	$names=$user[0]["uname"];
	                }
	                $arr["uname"]=$names;
	                $arr["photo"]=$user[0]["photo"];
	                echo json_encode($arr);
	            }
	        }else{
	            $arr["message"]="no";
	            echo json_encode($arr);
	        }
	    }
	    
	    /*操作点击量*/
	    function hit (){
	       $sid=$_GET["sid"];
	       if($this->db->update("update shows set hits=hits+1 where sid=$sid")){
	           echo "ok";
	       }else{
	           echo "no";
	       }
	    }
	    
	    
	    
	    
	    
	    
	    
	}
?>