<?php
/* Smarty version 3.1.30, created on 2017-03-12 16:06:51
  from "E:\wamp\www\mvc\template\index\personal.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c5640b61d094_73737673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e406951ce49bce667b416949c4d4379a3284c756' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\template\\index\\personal.html',
      1 => 1489304027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
  ),
),false)) {
function content_58c5640b61d094_73737673 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/mui.min.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/personal.css" />
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index/upload.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index/personal.js"><?php echo '</script'; ?>
>
<form action="index.php?m=index&f=user&a=bianji" id="form" method="post">
	<div class="container main">
	    <div class="row">
	        <div class="col-sm-8 main-left">
		       	<span>姓名</span><input type="text" name="bname" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['bname'];?>
"/>
			       	<div class="radio">
			       		<span>性别　</span>
						<label>
						    <input type="radio" name="sex" id="optionsRadios1" value="1" <?php if ($_smarty_tpl->tpl_vars['result']->value['sex'] == "1") {?>checked<?php }?>>
						  	男
						</label>
					</div>
					<div class="radio sex">
						<label>
						    <input type="radio" name="sex" id="optionsRadios1" value="2"  <?php if ($_smarty_tpl->tpl_vars['result']->value['sex'] == "2") {?>checked<?php }?>>
						  	女
						</label>
					</div>
					<div class="radio sex">
						<label>
						    <input type="radio" name="sex" id="optionsRadios1" value="0" <?php if ($_smarty_tpl->tpl_vars['result']->value['sex'] == "2") {?>checked<?php }?>>
						  	保密
						</label>
					</div>
				<span>联系方式</span><input type="text" name="contact" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['contact'];?>
"/>
				<span>邮箱</span><input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['email'];?>
"/>
				<span>个人简介</span><textarea name="introduce" rows="" cols=""><?php echo $_smarty_tpl->tpl_vars['result']->value['introduce'];?>
</textarea>
				<input type="submit" value="保存" id="btn"/>
	        </div>
	        <div class="col-sm-4 main-right">
	            <div class="list-group"">
					<a href="javascript:;" class="file">上传头像
						<input type="file" name="file" class="files">
					</a>
					<div class="imgs">
						<img src="<?php echo $_smarty_tpl->tpl_vars['result']->value['photo'];?>
" alt="" class="img"/>
						<div class="jindu">
							<div class="progress"></div>
						</div>	
					</div>
	           </div>
	        </div>
	    </div>
	</div>
	<input type="hidden" name="imgurl" id="imgurl"/>
</form>
	</body>
</html>
<?php }
}
