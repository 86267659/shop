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
        <li class="active"><a href="#tab1">商品管理</a></li>
    </ul>
    <form action="<?php echo U('Product/doAdd','');?>" method="post" enctype="multipart/form-data">
    <div id="tab1" class="tabcontent">
        <h3>添加商品</h3>
        
        <div class="form">

            <div class="form_row">
            <label>商品顺序:</label>
            <input type="text" class="form_input" name="productorder" value="0" />
            </div>
            
            <div class="form_row">
            <label>商品分类:</label>
            <?php echo getOptions($cates,'cid',0);?>
            </div>

            <div class="form_row">
            <label>商品品牌:</label>
            <?php echo getOptions($brands,'bid',0);?>
            </div>

            <div class="form_row">
            <label>商品名称:</label>
            <input type="text" class="form_input" name="name" />
            </div>

            <div class="form_row">
            <label>商品价格:</label>
            <input type="text" class="form_input" name="price" />
            </div>

            <div class="form_row">
            <label>会员价格:</label>
            <input type="text" class="form_input" name="memberprice" />
            </div>

            <div class="form_row">
            <label>促销价格:</label>
            <input type="text" class="form_input" name="saleprice" />
            </div>

            <div class="form_row">
            <label>促销开始时间:</label>
            <input type="text" class="form_input" name="salestart" />
            </div>

            <div class="form_row">
            <label>促销结束时间:</label>
            <input type="text" class="form_input" name="salestart" />
            </div>

            <div class="form_row">
            <label>促销个数:</label>
            <input type="text" class="form_input" name="salecount" />
            </div>

            <div class="form_row">
            <label>促销剩余个数:</label>
            <input type="text" class="form_input" name="salesurplus" />
            </div>

            <div class="form_row">
            <label>是否热卖:</label>
            <?php echo getOptions(array(1=>'是',2=>'不是'),'ishot',2);?>
            </div>

            <div class="form_row">
            <label>是否推荐:</label>
            <?php echo getOptions(array(1=>'是',2=>'不是'),'isrecommend',2);?>
            </div>

            <div class="form_row">
            <label>是否打折:</label>
            <?php echo getOptions(array(1=>'是',2=>'不是'),'isdiscount',2);?>
            </div>

            <div class="form_row">
            <label>折扣:</label>
            <input type="text" class="form_input" name="discount" />
            </div>

            <div class="form_row">
            <label>简介:</label>
            <textarea class="form_textarea" name="summary" ></textarea>
            </div>

            <div class="form_row">
            <label>详情:</label>
            <textarea class="form_textarea" name="detail" ></textarea>
            </div>

            <div class="form_row">
            <label>商品封面:</label>
            <input type="file" class="form_input" name="face" style="border:0;bakvground:none;" />
            </div>

            <div class="form_row pic">
            <label>商品图片:</label>
            <input type="file" class="form_input" name="pic[]" style="border:0;bakvground:none;" />
            </div>

            <a class="form_row" href="javascript:void(0);" onclick="add()">点击添加一张</a>
            
            <div class="form_row">
            <input type="submit" class="form_submit" value="添加" />
            </div> 
            <div class="clear"></div>
        </div>
    </div>
    </form>


    <script>
        function add(){
            var obj = $(".pic").eq(0).clone();
            $(".pic").last().after(obj);
        }
    </script>

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