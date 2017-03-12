<?php
/* Smarty version 3.1.30, created on 2017-03-09 11:37:12
  from "E:\wamp\www\mvc\template\admin\editClassIfy.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c13058a86ef5_81816413',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '621c44f51f1e9da3c0470fb4559053e0ae3fd1a1' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\template\\admin\\editClassIfy.html',
      1 => 1488815364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c13058a86ef5_81816413 (Smarty_Internal_Template $_smarty_tpl) {
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
/admin/addClassIfy.css" />
	<body style="background-color: rgba(0, 0, 0, 0);">
		<div>
			<form action="index.php?m=admin&f=addClassIfy&a=editClassIfyInfo" method="post">
				上级分类：<select name="pid" class="form-control">
							<option value="0">一级分类</option>
							<?php echo $_smarty_tpl->tpl_vars['cclass']->value;?>

						</select>
						</p>
				分类名称：<input type="text" name="cname" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
"/></p>
				<input type="hidden" name="cid" value="<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
"/>
				<input type="submit" class="btn btn-default"/>
			</form>
		</div>
		
	</body>
</html>
<?php }
}
