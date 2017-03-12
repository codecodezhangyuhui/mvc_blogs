<?php
	class login extends indexMain {
     	function __construct(){
         parent::__construct();
         $this->db=new db("user");
     	}
     	
     	function init(){
     		if($this->session->get("welcome")){
     			header("location:index.php");
     		}else{
     			$this->smarty->display("index/login.html");
     		}
     	}
   }
?>