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

    <h2>会员管理</h2>          
<table id="rounded-corner">
    <thead>
    	<tr>
        	<th></th>
            <th>UID</th>
            <th>用户名</th>
            <th>注册时间</th>
            <th>注册IP</th>
            <th>登录时间</th>
            <th>登录IP</th>
            <th>是否管理员</th>
            <th>编辑</th>
            <th>删除</th>
        </tr>
    </thead>
        <tfoot>
    	<tr>
        	<td colspan="12">分页</td>
        </tr>
    </tfoot>
    <tbody>
        <?php if(is_array($users)): foreach($users as $k=>$user): if($k%2 == 1): ?><tr class="odd">
            <?php else: ?>
               <tr class="even"><?php endif; ?>
        	<td><input type="checkbox" name="" /></td>
            <td><?php echo ($user["id"]); ?></td>
            <td><?php echo ($user["username"]); ?></td>
            <td><?php echo (date("Y-m-d",$user["rtime"])); ?></td>
            <td><?php echo (long2ip($user["rip"])); ?></td>
            <td><?php echo (date("Y-m-d",$user["logintime"])); ?></td>
            <td><?php echo (long2ip($user["loginip"])); ?></td>
            <td><font color='red'><?php echo ($user["ismanager"]); ?></forn></td>
            <td><a href="#"><img src="__PUBLIC__/Admin/images/edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="#"><img src="__PUBLIC__/Admin/images/trash.gif" alt="" title="" border="0" /></a></td>
        </tr><?php endforeach; endif; ?>
    </tbody>
</table>

	<div class="form_sub_buttons">
	<a href="#" class="button green">Edit selected</a>
    <a href="#" class="button red">Delete selected</a>
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
            <li><a href="">添加商品分类</a></li>
            <li><a href="">商品品牌管理</a></li>
            <li><a href="">添加商品品牌</a></li>
        </ul> 
        
    <h2>User Settings</h2>
    
        <ul>
            <li><a href="#">Edit user</a></li>
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