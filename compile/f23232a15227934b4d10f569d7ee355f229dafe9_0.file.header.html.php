<?php
/* Smarty version 3.1.30, created on 2017-03-12 15:37:43
  from "E:\wamp\www\mvc\template\index\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c55d37e1d777_12066619',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f23232a15227934b4d10f569d7ee355f229dafe9' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\template\\index\\header.html',
      1 => 1489313984,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c55d37e1d777_12066619 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/index.css" />
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/mui.min.css">
	<body>
		<div class="header">
			<span>个人博客</span>
			<a href="index.php" class="shouye">首页</a>
			<ul class="right">
				<?php if ($_smarty_tpl->tpl_vars['uname']->value) {?>
					<?php if ($_smarty_tpl->tpl_vars['result3']->value['bname']) {?>
				<li>
					<?php if ($_smarty_tpl->tpl_vars['result3']->value['photo']) {?>
					<img src="<?php echo $_smarty_tpl->tpl_vars['result3']->value['photo'];?>
" alt="" />
					<?php } else { ?>
					<img src="<?php echo IMG_PATH;?>
/bjt.jpg" alt="" />
					<?php }?>
					<?php echo $_smarty_tpl->tpl_vars['result3']->value['bname'];?>
</li>
				<li><a href="index.php?m=index&f=index&a=logout" class="btn btn-danger button">退出登录</a></li>
				<li><a href="index.php?m=index&f=index&a=self">个人中心</a></li>
					<?php } else { ?>
				<li>
					<?php if ($_smarty_tpl->tpl_vars['result3']->value['photo']) {?>
					<img src="<?php echo $_smarty_tpl->tpl_vars['result3']->value['photo'];?>
" alt="" />
					<?php } else { ?>
					<img src="<?php echo IMG_PATH;?>
/bjt.jpg" alt="" />
					<?php }?>
					<?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
</li>
				<li><a href="index.php?m=index&f=index&a=logout" class="btn btn-danger button">退出登录</a></li>
				<li><a href="index.php?m=index&f=index&a=self">个人中心</a></li>
					<?php }?>
				<?php } else { ?>
				<li><a href="index.php?m=index&f=index&a=login">登录</a></li>
				<li><a href="index.php?m=index&f=index&a=reg">注册</a></li>
				<?php }?>
				<li><a href="index.php?m=index&f=index&a=write">写文章</a></li>
			</ul>
		</div>
<?php }
}
