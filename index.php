<?php
// 入口文件
	define("MVC","yes");
//	var_dump($_SERVER); //打印服务器信息

	define("ROOT_URL",__DIR__);//根目录路径
//	echo ROOT_URL."<p>";
	define("LIBS_URL",ROOT_URL."/libs");//libs的路径
//	echo LIBS_URL."<p>";
	define("TPL_INDEX_URL",ROOT_URL."/template/index");//前台模板路径
//	echo TPL_INDEX_URL."<p>";
	define("TPL_ADMIN_URL",ROOT_URL."/template/admin");//后台模板路径
//	echo TPL_ADMIN_URL."<p>";
	define("HTTP_URL","http://".$_SERVER["SERVER_NAME"].substr($_SERVER["SCRIPT_NAME"],0,strrpos($_SERVER["SCRIPT_NAME"],"/")));//文件根目录的地址
//	echo HTTP_URL;
	define("FILE_URL",$_SERVER["SCRIPT_NAME"]);//入口文件路径
//	echo FILE_URL."<p>";
	define("CSS_PATH",HTTP_URL."/static/css");//css文件路径
	define("JS_PATH",HTTP_URL."/static/js");//js文件路径
	define("IMG_PATH",HTTP_URL."/static/images");//图片文件路径
	define("FONT_PATH",HTTP_URL."/libs/font");
	define("EDIT_PATH",HTTP_URL."/static/edit");
//	echo IMG_PATH."<p>";
	include LIBS_URL."/db.class.php";//引入SQL语句函数
	include LIBS_URL."/session.class.php";
	require "code.class.php";
	require LIBS_URL."/pages.class.php";
	require LIBS_URL."/indexMain.class.php";
	require LIBS_URL."/functions.php";
	include LIBS_URL."/main.class.php";//引入主函数
	include LIBS_URL."/route.class.php";//路由
	require LIBS_URL."/smarty/Smarty.class.php";//引入smarty
	$route=new route();
	$route->init();
	
?>