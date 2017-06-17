<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>信息概论</title>
<link href="/ZhuHai/Public/Css/bootstrap.min.css" rel="stylesheet"/>
<link href="/ZhuHai/Public/Css/show.css" rel="stylesheet"/>
<link href="/ZhuHai/Public/Css/public.css" rel="stylesheet"/>
</head>

<body>
<nav>
            <a href="/ZhuHai"><img id="home" src="/ZhuHai/Public/Images/位图蜗牛.png" width="50" height="50"></a>
</nav>
<div class="container">
	<div class="row clearfix">
	<div class="col-md-12 column">		
	<ul class="nav nav-tabs">
		<li ><a href="../Index/index">旅游信息</a></li>
		<li><a href="info.html">个人信息修改</a></li>
		<li ><a href="../Login/index">退出登录导航</a></li>	
		</ul>
	<div class="row clearfix">
		<div class="col-md-2 column">
			<ul class="nav nav-stacked nav-tabs">
				<li><a href="info.html">编辑个人信息</a></li>
				<li ><a href=#>设置</a></li>
			</ul></div>
                
		<div class="col-md-10 column" >
				
<div id="info">
<br>
<p >个人信息修改</p>
<hr width="70%" align="left">
<?php if(!empty($data)): ?><img class="img-circle" src="/ZhuHai/Public/Images/User/<?php echo ($data["user_image"]); ?>" width="200" height="160" style="float: left;" /><?php endif; ?>
<div style="width:530px;position:relative;left:46%;top:0px;margin-left:-215px;float: left;">
 <form action="<?php echo U('info');?>" method="post" >
	用户名:<input type="text" name="uname" value="<?php echo ($data["username"]); ?>"><br>
             <br>
             密 码:<input type="text" name="pwd" value="<?php echo ($data["password"]); ?>" ><br><br>
             <input type="submit" value="修改" style="margin-left:80px;float: left;">
             <input type="button" value="重置" onclick="reset()"> 
            </form>
            </div>
 </div>

 <div id="form">
                        <div style="width:400px;position:relative;left:56%;top:20px;margin-left:-215px;"><br>
             <p >修改图片</p>
            <hr width="70%" align="left">
            <form action="/ZhuHai/index.php/Admin/Info/upload" method="post" enctype="multipart/form-data" >
                        <input type="file" name="photo" id="photo" />
                        <input type="submit" value="提交" >
            </form>
            <br><br>
            <a href="#"  id="form-close">点击关闭</a>
            </div></div>

	</div>
	</div>		
	</div>
	</div>
</div>
<script src="/ZhuHai/Public/Js/jquery.min.js"></script>
<script src="/ZhuHai/Public/Js/bootstrap.min.js"></script>
<script src="/ZhuHai/Public/Js/show.js"></script>
</body>
</html>