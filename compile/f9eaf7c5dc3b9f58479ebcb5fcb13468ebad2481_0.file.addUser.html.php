<?php
/* Smarty version 3.1.30, created on 2017-03-12 16:10:03
  from "E:\wamp\www\mvc\template\admin\addUser.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c564cb0e9ed1_72720418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9eaf7c5dc3b9f58479ebcb5fcb13468ebad2481' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\template\\admin\\addUser.html',
      1 => 1488770916,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c564cb0e9ed1_72720418 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.css" />
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/addUser.css" />
	<body style="background-color: rgba(0, 0, 0, 0);">
		<div>
			<form action="index.php?m=admin&f=user&a=add" method="post">
				用户名：<input type="text" name="uname" class="form-control"/></p>
				密　码：<input type="password" name="upass" class="form-control"/></p>
				<input type="submit" value="添加用户"  class="btn btn-default"/>
			</form>
		</div>
		
	</body>
</html>
<?php }
}
