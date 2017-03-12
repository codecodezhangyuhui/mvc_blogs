<?php
/* Smarty version 3.1.30, created on 2017-03-09 11:37:09
  from "E:\wamp\www\mvc\template\admin\controlClassIfy.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c13055838ea8_82807287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5a503860d9d38a5e8e42b50caa5bf1cac836d84' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\template\\admin\\controlClassIfy.html',
      1 => 1488814205,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c13055838ea8_82807287 (Smarty_Internal_Template $_smarty_tpl) {
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
/admin/manageUser.css" />
	<body style="background-color:rgba(0,0,0,0); padding: 20px 20px;">
		<table class="table table-bordered" id="center">
			<tr>
				<th id="center">cid</th>
				<th id="center">分类名</th>
				<th id="center">pid</th>
				<th id="center">操作</th>
			</tr>
			<tbody>
				<?php echo $_smarty_tpl->tpl_vars['cname']->value;?>

			</tbody>
		</table>
	</body>
</html>
<?php }
}
