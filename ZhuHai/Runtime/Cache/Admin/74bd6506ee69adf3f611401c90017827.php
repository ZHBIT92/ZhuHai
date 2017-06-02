<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>信息概论</title>

<link href="/ZhuHai/Public/Css/bootstrap.min.css" rel="stylesheet"/>
<link href="/ZhuHai/Public/Css/picshow.css" rel="stylesheet"/>
<link href="/ZhuHai/Public/Css/public.css" rel="stylesheet"/>

</head>

<body>
<div id="bg"></div>
<div class="container">
	<div class="row clearfix">
	<div class="col-md-12 column">		
	<ul class="nav nav-tabs">
		<li ><a href="#">旅游信息</a></li>
		<li><a href="#">个人信息修改</a></li>
		<li ><a href="../Login/login">退出登录导航</a></li>	
		</ul>

	<div class="row clearfix">
		<div class="col-md-2 column">
			<ul class="nav nav-stacked nav-tabs">
				<li><a href="#">热门目的地</a></li>
				<li><a href="b2.html">文章列表</a></li>
				<li ><a href="b3.html">用户信息管理</a></li>
			</ul></div>
                
		<div class="col-md-10 column">
		<section class="pic-show">
			<ul id="myTab" class="nav nav-tabs">
                                    <li><a href="#zh" data-toggle="tab">珠海</a></li>	
	                        <li><a href="#bj"  data-toggle="tab"> 北京</a></li>
	                        <li><a href="#sh" data-toggle="tab">上海</a></li>
	                        <li><a href="#cd" data-toggle="tab">成都</a></li>
	                        <li><a href="#">添加</a></li>
	                        </ul>
                         <div style="text-align:center;color:red;margin:40px 0">提示：点击图片上传</div>

                        <div id="myTabContent" class="tab-content"><br>

	            <div class="tab-pane fade in active" id="zh">
	                        <div class="row">
                                    <div class="col-md-4 column">
                                            <?php if(!empty($data)): ?><img class="img-circle" src="/ZhuHai/Public/Images/<?php echo ($data["image"]); ?>" width="200" height="160" /><?php endif; ?>                                        
                                    <br><br>
	                        <p>珠海渔女</p>
	                        <button type="button">修改</button></div>	

                                    <div class="col-md-4 column">
	                                <img class="img-circle" src="/ZhuHai/Public/Images/zh2.jpg" width="200" height="160" >	                       
	                        <br><br>
	                        <p>长隆海洋王国</p>
	                        <button type="button">修改</button></div>
		
	                        <div class="col-md-4 column">	     
	                               <img class="img-circle" src="/ZhuHai/Public/Images/zh3.jpg" width="200" height="160" >	                        
	                        <br><br>
	                        <p>圆明新园</p>
	                        <button type="button">修改</button></div>
	            </div></div>

	            <div class="tab-pane fade" id="sh">
	            	<div class="row">
	                        <div class="col-md-4 column">
	                        <img class="img-circle" src="/ZhuHai/Public/Images/位图蜗牛.png" width="350" height="250" >
	                        <p>图片1加文字（整个div作为点击链接）</p></div>
	            	<div class="col-md-4 column">
	            	<img class="img-circle" src="/ZhuHai/Public/Images/位图蜗牛.png" width="350" height="250" >
		            <p>图片2加文字（整个div作为点击链接）</p></div>
		            <div class="col-md-4 column">
	            	<img class="img-circle" src="/ZhuHai/Public/Images/位图蜗牛.png" width="350" height="250" >
	            	<p>图片3加文字（整个div作为点击链接）</p></div>
	            </div></div>

	            <div class="tab-pane fade" id="cd">
			<div class="row">
	       	            <div class="col-md-4 column">
	      	            <img class="img-circle" src="/ZhuHai/Public/Images/位图蜗牛.png" width="350" height="250" >
	      	            <p>图片1加文字（整个div作为点击链接）</p></div>
			<div class="col-md-4 column">
			<img class="img-circle" src="/ZhuHai/Public/Images/位图蜗牛.png" width="350" height="250" >
			<p>图片2加文字（整个div作为点击链接）</p></div>
			<div class="col-md-4 column">
			<img class="img-circle" src="/ZhuHai/Public/Images/位图蜗牛.png" width="350" height="250" >
			<p>图片3加文字（整个div作为点击链接）</p></div>
	      	</div></div>

	            <div class="tab-pane fade" id="bj">
			<div class="row">
	         		<div class="col-md-4 column">
	          		<img class="img-circle" src="/ZhuHai/Public/Images/位图蜗牛.png" width="350" height="250" >
	            	<p>图片1加文字（整个div作为点击链接）</p></div>
			<div class="col-md-4 column">
			<img class="img-circle" src="/ZhuHai/Public/Images/位图蜗牛.png" width="350" height="250" >
			<p>图片2加文字（整个div作为点击链接）</p></div>
			<div class="col-md-4 column">
			<img class="img-circle" src="/ZhuHai/Public/Images/位图蜗牛.png" width="350" height="250" >
			<p>图片3加文字（整个div作为点击链接）</p></div>
	         	</div></div>		     	
                        </div>

                        </section>
		</div>
	</div>
	</div>

            <div id="form">
          
            <form action="/ZhuHai/admin.php/Admin/Index/upload" method="post" enctype="multipart/form-data" >
                        <input type="file" name="photo" id="photo" />
                        <input type="submit" value="提交" >
            </form>
            <br><br>
            <a href="#"  id="form-close">点击关闭</a>
            </div>
            
            </div>
</div>


<script src="/ZhuHai/Public/Js/jquery.min.js"></script>
<script src="/ZhuHai/Public/Js/bootstrap.min.js"></script>
<script src="/ZhuHai/Public/Js/picshow.js"></script>

</body>
</html>