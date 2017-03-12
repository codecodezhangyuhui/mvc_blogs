<?php
/* Smarty version 3.1.30, created on 2017-03-09 03:42:07
  from "E:\wamp\www\mvc\template\admin\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c0c0ff604e06_20494659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdb1301050aa8406ec3ca531266a85fb322a64f9' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\template\\admin\\index.html',
      1 => 1488935170,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c0c0ff604e06_20494659 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
/admin/index.css"/>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/admin/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/admin/index.js"><?php echo '</script'; ?>
>
	<body style="background-image:url(<?php echo IMG_PATH;?>
/bjtt.jpg);background-size:100% 100%;">
		<div class="header">
			<h1><?php echo $_smarty_tpl->tpl_vars['aname']->value;?>
欢迎登录博客管理系统</h1>
			<a href="index.php?m=admin&f=index&a=logout">退出</a>
		</div>
		<div class="main">
			<div class="left">
				<ul class="menu">
					<li class="opt">用户管理
						<ul class="son">
							<li><a href="index.php?m=admin&f=category&a=addUser" target="right">添加用户</a></li>
							<li><a href="index.php?m=admin&f=category&a=manageUser" target="right">管理用户</a></li>
						</ul>
					</li>
				</ul>
				<ul class="menu">
					<li class="opt">分类管理
						<ul class="son">
							<li><a href="index.php?m=admin&f=category&a=addClassIfy" target="right">添加分类</a></li>
							<li><a href="index.php?m=admin&f=addClassIfy&a=controlClassIfy" target="right">管理分类</a></li>
						</ul>
					</li>
				</ul>
				<ul class="menu">
					<li class="opt">内容管理
						<ul class="son">
							<li><a href="index.php?m=admin&f=artShows&a=addShows" target="right">添加内容</a></li>
							<li><a href="index.php?m=admin&f=artShows&a=shows" target="right">管理内容</a></li>
						</ul>
					</li>
				</ul>
				<ul class="menu">
					<li class="opt">推荐位管理
						<ul class="son">
							<li><a href="TJTJW.php" target="right">添加推荐位</a></li>
							<li><a href="GLTJW.php" target="right">管理推荐位</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="right">
				<iframe src="" frameborder="0" name="right"></iframe>
			</div>
		</div>
	</body>
</html>
<?php }
}
