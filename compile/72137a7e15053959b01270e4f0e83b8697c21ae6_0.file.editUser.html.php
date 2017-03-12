<?php
/* Smarty version 3.1.30, created on 2017-03-10 06:43:31
  from "E:\wamp\www\mvc\template\admin\editUser.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c23d03e68c48_19699124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72137a7e15053959b01270e4f0e83b8697c21ae6' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\template\\admin\\editUser.html',
      1 => 1488799620,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c23d03e68c48_19699124 (Smarty_Internal_Template $_smarty_tpl) {
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
			<form action="index.php?m=admin&f=user&a=edit" method="post">
				用户id：<input type="text" disabled="disabled" name="uid" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
"/></p>
				用户名：<input type="text" name="uname" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
"/></p>
				密　码：<input type="password" name="upass" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['upass']->value;?>
"/></p>
				<input type="hidden" name="uid" value="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" />
				<input type="submit" value="修改用户"  class="btn btn-default"/>
			</form>
		</div>
		
	</body>
</html><?php }
}
