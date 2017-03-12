<?php
/* Smarty version 3.1.30, created on 2017-03-10 02:40:12
  from "E:\wamp\www\mvc\template\index\show.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c203fcd43b67_32376978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4c2597d9b19220d5dadde7f3fead416ae37068d' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\template\\index\\show.html',
      1 => 1489109999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
    'file:index/notice.html' => 1,
  ),
),false)) {
function content_58c203fcd43b67_32376978 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/mui.min.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/show.css">
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/admin/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index/show.js"><?php echo '</script'; ?>
>
    <div class="container">
        <h1 class="text-center">
			<?php echo $_smarty_tpl->tpl_vars['result']->value["stitle"];?>

          <br>
            <span class="author">作者:
		        <span class="name author-name" uid2="<?php echo $_smarty_tpl->tpl_vars['result']->value['uid'];?>
" sid="<?php echo $_smarty_tpl->tpl_vars['result']->value['sid'];?>
">
					<?php echo $_smarty_tpl->tpl_vars['result']->value["uname"];?>

		        </span>
            </span>
            <span class="time">时间:
	            <span class="date">
	                <?php echo $_smarty_tpl->tpl_vars['result']->value["stime"];?>

	            </span>
            </span>
        </h1>
        
        <div class="line"></div>
        
        <div class="con">
     	<?php echo $_smarty_tpl->tpl_vars['result']->value["scon"];?>

        </div>
    
		<div class="line"></div>
        <div class="pay">
        	
		   
		 
		    <?php if ($_smarty_tpl->tpl_vars['guanzhu']->value == "me") {?>
		     
		    <?php } elseif ($_smarty_tpl->tpl_vars['guanzhu']->value == "true") {?>
		    <a href="javascript:;" class="btn btn-success guanzhu" style="display: none">关注</a>
      		<a href="javascript:;" class="btn btn-success quxiaoguanzhu">取消关注</a>
		  	<?php } elseif ($_smarty_tpl->tpl_vars['guanzhu']->value == "false") {?>
		  	<a href="javascript:;" class="btn btn-success guanzhu" >关注</a>
      		<a href="javascript:;" class="btn btn-success quxiaoguanzhu" style="display: none">取消关注</a>
      		<?php } elseif ($_smarty_tpl->tpl_vars['guanzhu']->value == "nosession") {?>
      		<a href="javascript:;" class="btn btn-success guanzhu" >关注</a>
      		<a href="javascript:;" class="btn btn-success quxiaoguanzhu" style="display: none">取消关注</a>
		    <?php }?>

		    
      		<?php if ($_smarty_tpl->tpl_vars['love']->value == "me") {?>
		     
		    <?php } elseif ($_smarty_tpl->tpl_vars['love']->value == "false") {?>
        	<a href="javascript:;" class="btn btn-success loveBtn">收藏</a>
        	<a href="javascript:;" class="btn btn-success loveCancel" style="display:none">取消收藏</a>
        	<?php } elseif ($_smarty_tpl->tpl_vars['love']->value == "true") {?>
        	<a href="javascript:;" class="btn btn-success loveBtn" style="display:none">收藏</a>
        	<a href="javascript:;" class="btn btn-success loveCancel">取消收藏</a>
        	<?php } elseif ($_smarty_tpl->tpl_vars['love']->value == "nosession") {?>
        	<a href="javascript:;" class="btn btn-success loveBtn">收藏</a>
        	<a href="javascript:;" class="btn btn-success loveCancel" style="display:none">取消收藏</a>
        	<?php }?>
        </div>
        

        <div class="submit submit1 leave">
	        <textarea  class="form-control" rows="3"></textarea>
	        <a href="javascript:;" class="btn btn-primary">留言</a>
	        <a href="javascript:;" class="btn btn-danger">取消</a>
        </div>

        <div class="message">
            <h3>共有<span>5</span>条留言</h3>
            <div class="line2"></div> 
            <div class="liuyanbox">
                <div class="liuyan">
                <div class="userinfo">
                    <div class="phone">
					头像
                    </div>
                    <div class="info">
	                    <div class="name1">xxxxx</div>
	                    <div class="time">2000-20-20</div>
                    </div>
                </div>
                <div class="liuyancon">
                    <p>sakjd</p>
                    <p>sakjd</p>
                    <p>sakjd</p>
                    <p>sakjd</p>
                </div>
                <a href="javascript:;" class="btn btn-default replyBtn replyBtn1">回复1</a>
            </div>
            <div class="submit submit2">
                <textarea  class="form-control" rows="3"></textarea><br>
                <a href="javascript:;" class="btn btn-primary">回复</a>
                <a href="javascript:;" class="btn btn-danger">取消</a>
            </div>
            
            <div class="reply">
                <div class="replylist">
                    <div class="replycon">
                    	<div class="phone">
							头像
                    	</div>
                       <div class="xinxi">
                    		<span class="name1">xxxx:</span>
                       	 	<div class="time time1">2000-22-22</div>
                    	</div>
                        <div class="replyinfo">
		                    gsdgdfsd
		                    fhdfhdfhdf
		                    ddbgdgsgs
                        </div>
                    </div>
	                <div class="replystate">
	                    
	                    <a href="javascript:;" class="btn btn-default replyBtn replyBtn2">回复2</a>
	                </div>
            	</div>
          	</div>

            <div class="submit submit2">
                <textarea  class="form-control" rows="3"></textarea><br>
                <a href="javascript:;" class="btn btn-primary">回复</a>
                <a href="javascript:;" class="btn btn-danger">取消</a>
            </div>
            
              
            <!---->
            <div class="line2"></div> 
			<div class="liuyanbox">
                <div class="liuyan">
                <div class="userinfo">
                    <div class="phone">
					头像
                    </div>
                    <div class="info">
	                    <div class="name">xxxx</div>
	                    <div class="time">2000-20-20</div>
                    </div>
                </div>
                <div class="liuyancon">
                    <p>sakjd</p>
                    <p>sakjd</p>
                    <p>sakjd</p>
                    <p>sakjd</p>
                </div>
                <a href="javascript:;" class="btn btn-default replyBtn replyBtn1">回复1</a>
            </div>
             <div class="submit submit2">
                <textarea  class="form-control" rows="3"></textarea><br>
                <a href="javascript:;" class="btn btn-primary ">回复</a>
                <a href="javascript:;" class="btn btn-danger">取消</a>
            </div>
            
            <div class="reply">
                <div class="replylist">
                    <div class="replycon">
                    	<div class="phone">
							头像
                    	</div>
                    	<div class="xinxi">
                    		<span class="name1">xxxx:</span>
                       	 	<div class="time time1">2000-22-22</div>
                    	</div>
                        
                        <div class="replyinfo">
		                    gsdgdfsd
		                    fhdfhdfhdf
		                    ddbgdgsgs
                        </div>
                    </div>
	                <div class="replystate">
	                    
	                    <a href="javascript:;" class="btn btn-default replyBtn replyBtn2">回复2</a>
	                </div>
            	</div>
          	</div>

              <div class="submit submit2">

                  <textarea  class="form-control" rows="3"></textarea><br>
                  <a href="javascript:;" class="btn btn-primary">回复</a>
                  <a href="javascript:;" class="btn btn-danger">取消</a>
              </div>              
              
              
              
              
              
              
              
          </div>
          
        
          
          
          
          
          

      </div>

  </div>

   <div class="mask">

   </div>
   <?php $_smarty_tpl->_subTemplateRender("file:index/notice.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

   <div class="notice">操作成功</div>
	</body>
</html>
<?php }
}
