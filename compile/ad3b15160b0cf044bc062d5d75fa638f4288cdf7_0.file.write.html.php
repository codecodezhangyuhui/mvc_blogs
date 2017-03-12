<?php
/* Smarty version 3.1.30, created on 2017-03-09 11:38:35
  from "E:\wamp\www\mvc\template\admin\write.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c130ab34aff7_86520671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad3b15160b0cf044bc062d5d75fa638f4288cdf7' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\template\\admin\\write.html',
      1 => 1488936055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c130ab34aff7_86520671 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/write.css" />
    <?php echo '<script'; ?>
 src="<?php echo EDIT_PATH;?>
/ueditor.config.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo EDIT_PATH;?>
/ueditor.all.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo EDIT_PATH;?>
/lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
>
</head>
<body style="background: rgba(0,0,0,0);">
	<div class="foot">
		<form action="index.php?m=admin&f=artShows&a=add" method="post">
		    <div class="form-group">
		        <label for="cid">选择分类</label>
		        <select class="form-control" name="cid" id="cid">
		            <option value="0">一级分类</option>
		          <?php echo $_smarty_tpl->tpl_vars['tree']->value;?>

		        </select>
		    </div>
		    <div class="form-group">
		        <label for="stitle">文章标题</label>
		        <input type="text" class="form-control" id="stitle" name="stitle" placeholder="标题">
		    </div>
		
		    <div class="form-group">
		        <label for="scon">文章内容</label>
		        <?php echo '<script'; ?>
 id="editor" type="text/plain" style="width:1024px;height:500px;" name="scon"><?php echo '</script'; ?>
>
		    </div>
		    <button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
	<?php echo '<script'; ?>
>
	    var ue = UE.getEditor('editor');
	<?php echo '</script'; ?>
>
</body>
</html><?php }
}
