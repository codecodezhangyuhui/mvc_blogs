<?php
/* Smarty version 3.1.30, created on 2017-03-09 03:47:59
  from "E:\wamp\www\mvc\template\admin\lookShows.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c0c25faef5f1_74492215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6e57b831086058056af770dfa163978fe051df3' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\template\\admin\\lookShows.html',
      1 => 1488966249,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c0c25faef5f1_74492215 (Smarty_Internal_Template $_smarty_tpl) {
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
/admin/lookShows.css" />

	<body>
		<div class="stitle">
			<span><?php echo $_smarty_tpl->tpl_vars['result']->value[0]["stitle"];?>
</span>
			<a href="index.php?m=admin&f=artShows&a=shows">返回</a>
		</div>
		<div class="scon">
			<p><?php echo $_smarty_tpl->tpl_vars['result']->value[0]["scon"];?>
</p>
		</div>
		<div class="status">
			<form action="index.php?m=admin&f=artShows&a=status" method="post">
				<div class="radio">
					<label>
					    <input type="radio" name="status" id="optionsRadios1" value="0" <?php if ($_smarty_tpl->tpl_vars['result']->value[0]["status"] == 0) {?>checked<?php }?>>
					    未审核
					</label>
				</div>
				<div class="radio">
					<label>
					    <input type="radio" name="status" id="optionsRadios2" value="1" <?php if ($_smarty_tpl->tpl_vars['result']->value[0]["status"] == 1) {?>checked<?php }?>>
					    审核中
					</label>
				</div>
				<div class="radio">
					<label>
					    <input type="radio" name="status" id="optionsRadios2" value="2"  <?php if ($_smarty_tpl->tpl_vars['result']->value[0]["status"] == 2) {?>checked<?php }?>>
					    未通过
					</label>
				</div>
				<div class="radio">
					<label>
					    <input type="radio" name="status" id="optionsRadios2" value="3"  <?php if ($_smarty_tpl->tpl_vars['result']->value[0]["status"] == 3) {?>checked<?php }?>>
					    通过审核
					</label>
				</div>
				<input type="hidden" name="sid" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['sid'];?>
"/>
				<input type="submit" value="提交状态"  class="btn btn-default"/>
			</form>
		</div>
	
	</body>
</html>
<?php }
}
