<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>捷哥浅谈PHP--后台管理系统</title>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Admin/css/style1.css" />
<link href='http://fonts.googleapis.com/css?family=Belgrano' rel='stylesheet' type='text/css'>
<!-- jQuery file -->
<script src="__PUBLIC__/Admin/js/jquery.min.js"></script>
<script src="__PUBLIC__/Admin/js/jquery.tabify.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
var $ = jQuery.noConflict();
$(function() {
$('#tabsmenu').tabify();
$(".toggle_container").hide(); 
$(".trigger").click(function(){
	$(this).toggleClass("active").next().slideToggle("slow");
	return false;
});
});
</script>
</head>
<body>
<div id="panelwrap">
  	
	<div class="header">
    <div class="title"><a href="#">《捷哥浅谈PHP》商城后台管理系统</a></div>
    
    <div class="header_right">欢迎您回来 <?php echo (session('username')); ?>, <a href="#" class="settings">设置</a> <a href="<?php echo U('Admin/Index/logout','');?>" class="logout">退出</a> </div>
    
    <div class="menu">
    <ul>
    <li><a href="#" class="selected">主页</a></li>
    <li><a href="#">网站配置</a></li>
    <li><a href="#">会员管理</a></li>
    <li><a href="#">分类管理</a></li>
    <li><a href="#">商品管理</a></li>
    <li><a href="#">回收站管理</a></li>
    <li><a href="#">订单管理</a></li>
    </ul>
    </div>
    
    </div>
    
    <div class="submenu">
    <ul>
    <li><a href="#" class="selected">网站配置</a></li>
    <li><a href="#">添加会员</a></li>
    <li><a href="#">添加分类</a></li>
    </ul>
    </div>          
                    
    <div class="center_content">  
 
    <div id="right_wrap">
    <div id="right_content">             

    <ul id="tabsmenu" class="tabsmenu">
        <li class="active"><a href="#tab1">分类管理</a></li>
    </ul>
    <form action="<?php echo U('Category/doAdd','');?>" method="post">
    <div id="tab1" class="tabcontent">
        <h3>添加分类</h3>
        
        <div class="form">
            
            <div class="form_row">
            <label>上级分类:</label>
            <?php echo getOptions($options,'pid',0);?>
            </div>

            <div class="form_row">
            <label>分类名称:</label>
            <input type="text" class="form_input" name="name" />
            </div>
            
            <div class="form_row">
            <input type="submit" class="form_submit" value="添加" />
            </div> 
            <div class="clear"></div>
        </div>
    </div>
    </form>


         </div>
     </div><!-- end of right content-->
                     
                    
    <div class="sidebar" id="sidebar">
    <h2>会员管理</h2>
    
        <ul>
            <li><a href="<?php echo U('User/userList');?>" class="selected">会员列表</a></li>
            <li><a href="<?php echo U('User/userAdd');?>">添加会员</a></li>
            <li><a href="#">修改密码</a></li>
            <li><a href="#">设置管理员</a></li>
        </ul>
        
    <h2>商品类别管理</h2>
    
        <ul>
            <li><a href="">商品分类管理</a></li>
            <li><a href="<?php echo U('Category/add');?>">添加商品分类</a></li>
            <li><a href="">商品品牌管理</a></li>
            <li><a href="<?php echo U('Brand/add');?>">添加商品品牌</a></li>
        </ul> 
        
    <h2>商品管理</h2>
    
        <ul>
            <li><a href="<?php echo U('Product/add','','');?>">添加商品</a></li>
            <li><a href="#">Add users</a></li>
            <li><a href="#">Manage users</a></li>
            <li><a href="#">Help</a></li>
        </ul>   
         
    <h2>Text Section</h2> 
    <div class="sidebar_section_text">
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    </div>         
    
    </div>             
    
    
    <div class="clear"></div>
    </div> <!--end of center_content-->
    
    <div class="footer">Powered By 《捷哥浅谈PHP》.</div>

</div>

        
</body>
</html>