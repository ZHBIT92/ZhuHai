<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/ZhuHai/Public/Css/bootstrap.min.css" rel="stylesheet"/>
<script src="/ZhuHai/Public/Js/jquery.min.js"></script>
<script src="/ZhuHai/Public/Js/bootstrap.min.js"></script>
<link href="/ZhuHai/Public/Css/public.css" rel="stylesheet"/>

<title>文章列表</title>
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
				<li><a href="index.html">热门目的地</a></li>
				<li><a href="b2.html">文章列表</a></li>
				<li ><a href="b3.html">用户信息管理</a></li>
			</ul></div>
                
		<div class="col-md-10 column">
					<table class="table">
						<thead>
							<tr>
								<th>
									编号
								</th>
								<th>
									产品
								</th>
								<th>
									交付时间
								</th>
								<th>
									状态
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									1
								</td>
								<td>
									TB - Monthly
								</td>
								<td>
									01/04/2012
								</td>
								<td>
									Default
								</td>
							</tr>
						</tbody>
					</table> <button type="button" class="btn btn-default">按钮</button>
				</div>
			</div>			
		</div>
	</div>
</div>
</body>
</html>