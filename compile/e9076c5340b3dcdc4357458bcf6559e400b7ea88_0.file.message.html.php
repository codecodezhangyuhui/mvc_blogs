<?php
/* Smarty version 3.1.30, created on 2017-03-12 15:38:43
  from "E:\wamp\www\mvc\template\admin\message.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c55d73816161_53724988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9076c5340b3dcdc4357458bcf6559e400b7ea88' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\template\\admin\\message.html',
      1 => 1488612598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c55d73816161_53724988 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/admin/message.css" />
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/admin/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/admin/message.js"><?php echo '</script'; ?>
>
<body>
	<div class="box">	
		<div class="tishi">
			提示信息
		</div>
		<div class="ss">
			<b><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</b><br>
			<span>3</span>秒后跳转<br>
			如果未能跳转，请<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">点击</a>
		</div>
	</div>
</body>
</html>

<?php }
}
