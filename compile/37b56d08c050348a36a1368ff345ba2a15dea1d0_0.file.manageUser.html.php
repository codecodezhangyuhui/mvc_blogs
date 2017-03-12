<?php
/* Smarty version 3.1.30, created on 2017-03-09 03:43:09
  from "E:\wamp\www\mvc\template\admin\manageUser.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c0c13d4906c3_74111224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37b56d08c050348a36a1368ff345ba2a15dea1d0' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\template\\admin\\manageUser.html',
      1 => 1488797738,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c0c13d4906c3_74111224 (Smarty_Internal_Template $_smarty_tpl) {
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
				<th id="center">uid</th>
				<th id="center">用户名</th>
				<th id="center">操作</th>
			</tr>
			<tbody>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value["uid"];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value["uname"];?>
</td>
					<td>
						<a href="index.php?m=admin&f=category&a=delUser&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
">删除</a>
						<a href="index.php?m=admin&f=category&a=editUser&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
">编辑</a>
					</td>
				</tr>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</tbody>
		</table>
	</body>
</html>
<?php }
}
