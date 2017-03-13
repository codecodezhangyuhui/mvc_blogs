<?php
/* Smarty version 3.1.30, created on 2017-03-13 13:29:09
  from "E:\wamp\www\mvc\template\index\self.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c690958215f0_22321806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22c147dff486e0300c429ba2baa72222ed43a071' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\template\\index\\self.html',
      1 => 1489408147,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
  ),
),false)) {
function content_58c690958215f0_22321806 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/mui.min.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/self.css">
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/admin/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index/self.js"><?php echo '</script'; ?>
>
<style>
	.mui-media{
		max-height: 110px;
	}
	span{
		cursor: pointer!important;
	}
</style>
<div class="container main">
    <div class="row">
        <div class="col-sm-8 main-left mainLeft" style="border-right: 0;margin-left:140px;">
            <!--头像部分-->
            <div class="container-fluid">
                <div class="row touxiang">
                    <div class="photo">
                    	<?php if ($_smarty_tpl->tpl_vars['self']->value == "yes") {?>
                    		<?php if ($_smarty_tpl->tpl_vars['result3']->value['photo']) {?>
                        	<img src="<?php echo $_smarty_tpl->tpl_vars['result3']->value['photo'];?>
" alt="" /><!--头像-->
                        	<?php } else { ?>
                        	<img src="<?php echo IMG_PATH;?>
/bjt.jpg" alt="" />
                        	<?php }?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['self']->value == "no") {?>
                        	<?php if ($_smarty_tpl->tpl_vars['photo']->value) {?>
                        	<img src="<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
" alt="" />
                        	<?php } else { ?>
                        	<img src="<?php echo IMG_PATH;?>
/bjt.jpg" alt="" />
                       		<?php }?>
                        <?php }?>
                    </div>
                	<div class="col-sm-2  username">
                		<?php if ($_smarty_tpl->tpl_vars['self']->value == "yes") {?>
                			<?php if ($_smarty_tpl->tpl_vars['result3']->value['bname']) {?>
	                    	<span><?php echo $_smarty_tpl->tpl_vars['result3']->value['bname'];?>
 </span>
	                    	<?php } else { ?>
	                    	<span><?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
</span>
	                    	<?php }?>
	                    <?php } elseif ($_smarty_tpl->tpl_vars['self']->value == "no") {?>
	                    	<span><?php echo $_smarty_tpl->tpl_vars['unames']->value;?>
</span>
	                    <?php }?>
	                </div>
                    <div class="col-sm-2 photoes">
                    	<?php if ($_smarty_tpl->tpl_vars['self']->value == "yes") {?>
		                    <span class="guanzhu">已关注 ></span><span><?php echo count($_smarty_tpl->tpl_vars['result7']->value)-1;?>
</span>
                        <?php } elseif ($_smarty_tpl->tpl_vars['self']->value == "no") {?>
	                        <span>对方关注 ></span><span><?php echo count($_smarty_tpl->tpl_vars['result8']->value)-1;?>
</span>
                        <?php }?>
                    </div>
                    <div class="col-sm-2 photoes">
                    	<?php if ($_smarty_tpl->tpl_vars['self']->value == "yes") {?>
                        <span class="fensi">粉丝 ></span><span><?php echo count($_smarty_tpl->tpl_vars['result9']->value);?>
</span>
                        <?php } elseif ($_smarty_tpl->tpl_vars['self']->value == "no") {?>
                        <span>对方粉丝 ></span><span><?php echo count($_smarty_tpl->tpl_vars['result9']->value);?>
</span>
                        <?php }?>
                        
                    </div>
                    <div class="col-sm-2 photoes">
                    	<?php if ($_smarty_tpl->tpl_vars['self']->value == "yes") {?>
	                    	
                    	<span class="wenzhang" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">文章 ></span><span><?php echo count($_smarty_tpl->tpl_vars['result']->value);?>
</span>
                        <?php } elseif ($_smarty_tpl->tpl_vars['self']->value == "no") {?>
                       
                        <span class="otherwenzhang" uid="<?php echo $_smarty_tpl->tpl_vars['result5']->value[0]['uid'];?>
">对方文章 ></span><span><?php echo count($_smarty_tpl->tpl_vars['result5']->value);?>
</span>
                        <?php }?>
                    </div>
                    <div class="col-sm-2 photoes">
                    	<?php if ($_smarty_tpl->tpl_vars['self']->value == "yes") {?>
                       	<a href="">留言 ></a> <span><?php echo count($_smarty_tpl->tpl_vars['result11']->value);?>
</span>
                        <?php } elseif ($_smarty_tpl->tpl_vars['self']->value == "no") {?>
                       
                        <?php }?>
                    </div>
                    
                   
                   
                </div>
            </div>
  			<!--菜单部分-->
            <div class="container-fluid menu">
                <div class="row">
                    <div class="col-sm-4">
                    	<?php if ($_smarty_tpl->tpl_vars['self']->value == "yes") {?>
                        <span class="wenzhang" uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">已发表的文章</span>
                        <span><?php echo count($_smarty_tpl->tpl_vars['result']->value);?>
</span>
                        <?php } elseif ($_smarty_tpl->tpl_vars['self']->value == "no") {?>
                       
                        <?php }?>
                    </div>
                     <div class="col-sm-4">
                    	<?php if ($_smarty_tpl->tpl_vars['self']->value == "yes") {?>
                    	<?php $_smarty_tpl->_assignInScope('n', 0);
?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result4']->value, 'c');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
?>
                        <?php $_smarty_tpl->_assignInScope('n', $_smarty_tpl->tpl_vars['n']->value+1);
?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        <span class="shoucang">我的收藏</span>
                        <span><?php echo $_smarty_tpl->tpl_vars['n']->value;?>
</span>
                        <?php } elseif ($_smarty_tpl->tpl_vars['self']->value == "no") {?>
                       
                        <?php }?>
                      	
                    </div>
                    <div class="col-sm-4">
                    	<?php if ($_smarty_tpl->tpl_vars['self']->value == "yes") {?>
                    	<span class="shenhe">文章审核情况</span>	
                    	<span><?php echo count($_smarty_tpl->tpl_vars['result10']->value);?>
</span>
                        <?php } elseif ($_smarty_tpl->tpl_vars['self']->value == "no") {?>
                       
                        <?php }?>
                    </div>
                    <div class="col-sm-4 geren">
                    	<?php if ($_smarty_tpl->tpl_vars['self']->value == "yes") {?>
                       	<a href="index.php?m=index&f=user&a=personal&id=<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">编辑个人资料</a>
                        <?php } elseif ($_smarty_tpl->tpl_vars['self']->value == "no") {?>
                       	
                        <?php }?>
                    </div>
                </div>
            </div>



            <div class="line"></div>


            <!--具体的内容-->

            <ul class="mui-table-view NR" style="background: rgba(0,0,0,0);">
            	<?php if ($_smarty_tpl->tpl_vars['self']->value == "yes") {?>
            	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            	<li class="mui-table-view-cell mui-media">
                    <a href="index.php?m=index&f=index&a=show&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
">
                        <div class="mui-media-body">
                        	<span class="stitle"><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</span>
                            <p class="mui-ellipsis scon"><?php echo $_smarty_tpl->tpl_vars['v']->value["scon"];?>
</p>
                        </div>
                    </a>
                </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['self']->value == "no") {?>
            	<?php }?>
            </ul>
            		
	
			
        </div>
       
    </div>
</div>
	</body>
</html>
<?php }
}
