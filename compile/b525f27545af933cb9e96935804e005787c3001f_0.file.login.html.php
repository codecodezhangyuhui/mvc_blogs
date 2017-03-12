<?php
/* Smarty version 3.1.30, created on 2017-03-10 05:02:32
  from "E:\wamp\www\mvc\template\index\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c22558bdfe83_87636026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b525f27545af933cb9e96935804e005787c3001f' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\template\\index\\login.html',
      1 => 1489118550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c22558bdfe83_87636026 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>博客登录页</title>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
/index/default.css">
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
/index/styles.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/login.css" />

</head>
<body style="background:url(<?php echo IMG_PATH;?>
/loginBj.jpg) no-repeat;">
<div class="panel-lite">
  <div class="thumbur">
  </div>
  <h4>用户登录</h4>
  <form action="index.php?m=index&f=index&a=check" method="post">
	  <div class="form-group">
		<input required="required" class="form-control" name="uname"/>
		<label class="form-label">用户名    </label>
	  </div>
	  <div class="form-group">
		<input type="password" required="required" class="form-control" name="upass"/>
		<label class="form-label">密　码</label>
	  </div>
	  <div class="form-group">
	  	<input type="text" name="code" autocomplete="off" class="form-control" id="yanzhen" required="required" />
	  	<label class="form-label">验证码</label></p>
	  	<img src="<?php echo HTTP_URL;?>
/index.php?m=admin&f=index&a=code" id="img" alt="" onclick="this.src='<?php echo HTTP_URL;?>
/index.php?m=admin&f=index&a=code&'+Math.random()"/>
	  </div>
		<input type="submit" value="登录" id="submit" class="btn btn-default"/>
		<a href="index.php?m=index&f=index&a=reg" class="btn btn-default" style="margin-top:0">注册</a>
	  <a href="index.php" style="color:red">取消登陆</a>
   </form>
</div>

<div style="text-align:center;clear:both;">
	<?php echo '<script'; ?>
 src="/gg_bd_ad_720x90.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/follow.js" type="text/javascript"><?php echo '</script'; ?>
>
</div>
</body>
</html>
<?php }
}
