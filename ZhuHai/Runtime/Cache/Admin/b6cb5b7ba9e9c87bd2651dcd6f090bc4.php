<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset="utf-8"/>
<title>登录</title>
<link href="/ZhuHai/Public/Css/login.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/ZhuHai/Public/Js/middle.js"></script>
<script type="text/javascript" src="/ZhuHai/Public/Js/login.js"></script>
<script type="text/javascript" src="/ZhuHai/Public/Js/jquery-validate.js"></script>
</head>
<body>

<div id="home" style="float: right;">
            <a href="/ZhuHai"> 首页 </a>
</div>

 <div id="login" class="login"> 
<form action="<?php echo U('login');?>" method="post"  name="login"  >
             <span style="font-size:26px;">用户登录</span>
             <dd>
                 <dl>用户名: 
                 <input type="text" name="account" > 
                 </dl>
                 <dl>密 码 : 
                <input type="password" name="pwd" > 
                </dl>
            </dd>
            <input type="submit" value="登录" > 
            <input type="button" value="重置" onclick="reset()"> 
            <a href='<?php echo U("register");?>' >立即注册</a>
</form> 
</div>

</body>
</html>