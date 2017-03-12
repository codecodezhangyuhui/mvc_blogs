<?php
/* Smarty version 3.1.30, created on 2017-03-09 03:42:09
  from "E:\wamp\www\mvc\template\admin\controlShows.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c0c101e620c0_89757710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd78fcc78892a8f216c4b13a2b5e50d2a0ee60626' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\template\\admin\\controlShows.html',
      1 => 1488881508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c0c101e620c0_89757710 (Smarty_Internal_Template $_smarty_tpl) {
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
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/admin/controlShows.css" />
	<body style="background-color:rgba(0,0,0,0); padding: 20px 20px;">
		<table class="table table-bordered" id="center">
			<tr>
				<th id="center">sid</th>
				<th id="center">标题</th>
				<th id="center">所属分类</th>
				<th id="center">作者</th>
				<th id="center">点击数</th>
				<th id="center">点赞数</th>
				<th id="center">发布时间</th>
				<th id="center">状态</th>
				<th id="center">操作</th>
			</tr>
			<tbody>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value["sid"];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value["uname"];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value["hits"];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value["good"];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value["stime"];?>
</td>
					<td><?php if ($_smarty_tpl->tpl_vars['v']->value["status"] == 0) {?>
						未审核
						<?php } elseif ($_smarty_tpl->tpl_vars['v']->value["status"] == 1) {?>
						审核中
						<?php } elseif ($_smarty_tpl->tpl_vars['v']->value["status"] == 2) {?>
						审核未通过
						<?php } elseif ($_smarty_tpl->tpl_vars['v']->value["status"] == 3) {?>
						审核通过
						<?php }?>
					</td>
					<td>
						<a href="index.php?m=admin&f=artShows&a=delShows&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
">删除</a>
						<a href="index.php?m=admin&f=artShows&a=lookShows&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
">查看</a>
					</td>
				</tr>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</tbody>
		</table>
		<div class="pages" style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</div>
		
	</body>
</html>
<?php }
}
