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

        <ul id="tabsmenu" class="tabsmenu" style="padding:0;">
        <li class="active"><a href="#tab2">当前系统环境</a></li>
        <li><a href="#tab3">数据统计</a></li>
        <li><a href="#tab4">订单统计</a></li>
    </ul>
    
    <div id="tab2" class="tabcontent">
        <table class="env">
            <tr>
                <td>服务器操作系统:</td>
                <td><?php echo ($_ENV['OS']); ?></td>
            </tr>
            <tr>
                <td>PHP 版本</td>
                <td><?php echo (PHP_VERSION); ?><td>
            </tr>
            <tr>
                <td>GD 版本</td>
                <td><?php echo ($gdVersion); ?></td>
            </tr>
            <tr>
                <td>编码:</td>
                <td><?php echo mb_detect_encoding(file_get_contents(__FILE__));?></td>
            </tr>
            <tr>
                <td>Web 服务器:</td>
                <td><?php echo ($_SERVER['SERVER_SOFTWARE']); ?></td>
            </tr>
            <tr>
                <td>MySQL 版本:</td>
                <td><?php echo mysql_get_server_info();?></td>
            </tr>
            <tr>
                <td>时区设置:</td>
                <td><?php echo date_default_timezone_get();?></td>
            </tr>
            <tr>
                <td>文件上传的最大大小:</td>
                <td><?php echo ini_get('upload_max_filesize');?></td>
            </tr>
        </table>
    </div>

    <div id="tab3" class="tabcontent">
        <h3>Tab three title</h3>
        <p>
    Lorem ipsum <a href="#">dolor sit amet</a>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. <br /><br />Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
        </p>
    </div> 
    
    <div id="tab4" class="tabcontent">
        <h3>Tab four title</h3>
        <p>
    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, ad <br /><br />Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
        </p>
    </div> 
     
    

    
        <div class="toogle_wrap">
            <div class="trigger"><a href="#">Toggle with text</a></div>

            <div class="toggle_container">
			<p>
        Lorem ipsum <a href="#">dolor sit amet</a>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum <a href="#">dolor sit amet</a>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
			</p>
            </div>
        </div>
      


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
            <li><a href="">添加商品品牌</a></li>
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