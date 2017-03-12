<?php
  class indexMain{
      function __construct(){
          $this->smarty=new Smarty();
          $this->smarty->setCompileDir("compile");
          $this->smarty->setTemplateDir("template");
          $this->session=new session();
      }
      function checkLogin(){
          $session=$this->session;
          if(!($session->get("ulogin")&&MVC=="yes")){
//            $this->jump("index.php?m=index&f=index&a=login","请登录");
              return false;
              exit;
          }else{
              return true;
          }
      }
      function jump($url,$message){
          $this->smarty->assign("url",$url);
          $this->smarty->assign("message",$message);
          $this->smarty->display("admin/message.html");
      }
  }
?>