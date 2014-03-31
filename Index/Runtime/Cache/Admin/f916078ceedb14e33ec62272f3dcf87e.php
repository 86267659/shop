<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en" class="no-js">

    <head>
        <script>
            var public = "__PUBLIC__";
            function show(obj){
                obj.src = "<?php echo U('verify',array('rand','"+Math.random()+"'));?>";
            }
        </script>
        <meta charset="utf-8">
        <title>捷哥浅谈PHP--商城后台登陆</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        <link rel="stylesheet" href="__PUBLIC__/Admin/css/reset.css">
        <link rel="stylesheet" href="__PUBLIC__/Admin/css/supersized.css">
        <link rel="stylesheet" href="__PUBLIC__/Admin/css/style.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>

    <body>

        <div class="page-container">
            <h1>《捷哥浅谈PHP》商城后台</h1>
            <form action="<?php echo U('dologin','');?>" method="post" style="text-align:left;">
                <input type="text" name="username" class="username" placeholder="请输入用户名">
                <input type="password" name="password" class="password" placeholder="请输入密码">
                <input type="text" name="vcode" class="username" placeholder="请输入验证码" style="width:150px;"><img src="<?php echo U('verify','');?>" style="margin-left:10px;margin-bottom:-15px;" onclick="show(this)" />
                <button type="submit">登陆</button>
                <div class="error" style="text-align:center"><span>+</span></div>
            </form>
            <!--<div class="connect">
                <p>Or connect with:</p>
                <p>
                    <a class="facebook" href=""></a>
                    <a class="twitter" href=""></a>
                </p>
            </div>-->
        </div>

        <!-- Javascript -->
        <script src="__PUBLIC__/Admin/js/jquery-1.8.2.min.js"></script>
        <script src="__PUBLIC__/Admin/js/supersized.3.2.7.min.js"></script>
        <script src="__PUBLIC__/Admin/js/supersized-init.js"></script>
        <script src="__PUBLIC__/Admin/js/scripts.js"></script>

    </body>

</html>