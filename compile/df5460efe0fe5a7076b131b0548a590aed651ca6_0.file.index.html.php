<?php
/* Smarty version 3.1.30, created on 2017-03-13 13:52:23
  from "E:\wamp\www\mvc\template\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c69607b72851_46077841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df5460efe0fe5a7076b131b0548a590aed651ca6' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\template\\index\\index.html',
      1 => 1489409538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
  ),
),false)) {
function content_58c69607b72851_46077841 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/mui.min.css">
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/admin/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/mui.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index/index.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/mui.min.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/index.css" />
<style>
	.clearmoren span,.clearmoren p,.clearmoren a{
		font-size:14px!important;
		color:#000!important;
		background-color:rgba(0,0,0,0)!important ;
		cursor: pointer;
	}
</style>
<!--<div class="mui-slider banner">
    <div class="mui-slider-group mui-slider-loop imgSize">
	  
	    <div class="mui-slider-item mui-slider-item-duplicate imgSize"><a href="#"><img src="<?php echo IMG_PATH;?>
/banner1.jpeg" alt="" /></a></div>
	    <div class="mui-slider-item imgSize"><a href="#"><img src="<?php echo IMG_PATH;?>
/banner2.jpeg" alt="" /></a></div>
	    <div class="mui-slider-item imgSize"><a href="#"><img src="<?php echo IMG_PATH;?>
/banner3.jpeg" alt="" /></a></div>
	    <div class="mui-slider-item imgSize"><a href="#"><img src="<?php echo IMG_PATH;?>
/banner4.jpeg" alt="" /></a></div>
	    <div class="mui-slider-item imgSize"><a href="#"><img src="<?php echo IMG_PATH;?>
/banner5.jpeg" alt="" /></a></div>
	  
	    <div class="mui-slider-item mui-slider-item-duplicate imgSize"><a href="#"><img src="<?php echo IMG_PATH;?>
/banner1.jpeg" alt="" /></a></div>
    </div>
</div>-->
<!--文章动态-->
<div class="container main">
    <div class="row">
        <div class="col-sm-8 main-left neirong">
           
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <div class="usercon">
            	 <!--头像部分-->
	            <div class="container-fluid">
	                <div class="row user">
	                    <div class="photo">
	                    	<?php if ($_smarty_tpl->tpl_vars['v']->value['photo']) {?>
	                 		<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['photo'];?>
" alt="" />
	                 		<?php } else { ?>
	                 		<img src="<?php echo IMG_PATH;?>
/bjt.jpg" alt="" />
	                 		<?php }?>
	                    </div>
	                    <div class="col-sm-2 photoes username">
	                    	<?php if ($_smarty_tpl->tpl_vars['v']->value["bname"]) {?>
	                        <a href="index.php?m=index&f=index&a=you&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["bname"];?>
</a>
	                        <?php } else { ?>
	                        <a href="index.php?m=index&f=index&a=you&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["uname"];?>
</a>
	                        <?php }?>
	                    </div>
	                    <div class="col-sm-2 photoes times">
	                       <span><?php echo $_smarty_tpl->tpl_vars['v']->value["stime"];?>
</span>
	                    </div>
	                </div>
	            </div>
	            <!--具体的内容-->
	            <ul class="mui-table-view clearmoren mui-table-view-cell" style="max-height: 116px;">
	                <li class="mui-table-view-cell mui-media">
	                    <a href="index.php?m=index&f=index&a=show&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
">
	                        <div class="mui-media-body">
	                       		<span class="stitle"><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</span>
	                            <p class="mui-ellipsis scon" ><?php echo $_smarty_tpl->tpl_vars['v']->value["scon"];?>
</p>
	                        </div>
	                    </a>
	                </li>
	            </ul>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
        
        
        
        <div class="col-sm-4 main-right">
            <div class="list-group">
                <a href="#" class="list-group-item active">
                    浏览排行榜
                </a>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['liulan']->value, 'x');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['x']->value) {
?>
                <a href="index.php?m=index&f=index&a=show&id=<?php echo $_smarty_tpl->tpl_vars['x']->value['sid'];?>
" class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['x']->value["stitle"];?>
  (浏览量：<?php echo $_smarty_tpl->tpl_vars['x']->value["hits"];?>
)</a>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
        </div>
    </div>
</div>




	</body>
</html>
<?php }
}
