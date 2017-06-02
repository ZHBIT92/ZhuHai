<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset="utf-8"/>
<title>登录</title>
<link href="/ZhuHai/Public/Css/login.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/ZhuHai/Public/Js/middle.js"></script>

</head>
<body>

 <div id="login" class="login"> 
<form action="<?php echo U('login');?>" method="post"  name="login" >
             <span style="font-size:26px;">用户登录</span>
             <dd>
                 <dl>用户名: 
                 <input type="text" name="username"> 
                 </dl>
                 <dl>密 码 : 
                <input type="password" name="password" id="password"> 
                </dl>
            </dd>
            <input type="submit" value="登录" onClick="pass()"> 
            <input type="button" value="重置" onclick="reset()"> 
</form> 
</div>

</body>
</html>