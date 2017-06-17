<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>信息概论</title>
<link href="/ZhuHai/Public/Css/bootstrap.min.css" rel="stylesheet"/>
<script src="/ZhuHai/Public/Js/jquery.min.js"></script>
<script src="/ZhuHai/Public/Js/bootstrap.min.js"></script>
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
		<li ><a href="index.html">旅游信息</a></li>
		<li><a href="info.html">个人信息修改</a></li>
		<li ><a href="../Login/index">退出登录导航</a></li>	
		</ul>
	<div class="row clearfix">
		<div class="col-md-2 column">
			<ul class="nav nav-stacked nav-tabs">
				<li><a href="info.html">编辑个人信息</a></li>
				<li><a href="b2.html">照片与个性签名</a></li>
				<li ><a href="b3.html">设置</a></li>
			</ul></div>
                
		<div class="col-md-10 column" >
		<div id="info">
<br>
<p >个人信息修改</p>
<hr width="70%" align="left">
<div style="width:530px;position:relative;left:56%;top:20px;margin-left:-215px;">
 <form action="<?php echo U('add2');?>" method="post" >
	名称:<input type="text" name="city1" ><br>
	城市:<select  name="city2" >   
	<option value="珠海" class="maincity">珠海</option>
             <option value="北京" class="maincity">北京</option>
             <option value="上海" class="maincity">上海</option>
             <option value="成都" class="maincity">成都</option>
             <option value="其他" id="othercity">其他</option>
             </select>
             <input type="text" name="city3" id="othertext">
             <br>
             简介:<br><input type="text" name="city4"><br><br> 

             <input type="submit" value="提交" style="margin-left:80px;float: left;">
             <button type="button" id="form-close">
             <a href="#"   style="float: left;">关闭</a> 
             </button> 
            </form>
            </div>
 </div>
		</div>
	</div>
			
	</div>
	</div>
</div>

</body>
</html>