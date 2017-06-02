<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>文章列表</title>
<link href="/ZhuHai/Public/Css/bootstrap.min.css" rel="stylesheet"/>
<script src="/ZhuHai/Public/Js/jquery.min.js"></script>
<script src="/ZhuHai/Public/Js/bootstrap.min.js"></script>
<link href="/ZhuHai/Public/Css/public.css" rel="stylesheet"/>
</head>

<body>
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
			<li><a href="index.html">热门目的地</a></li>
				<li><a href="b2.html">文章列表</a></li>
				<li ><a href="b3.html">用户信息管理</a></li>
		</ul></div>
                
	<div class="col-md-10 column">
	            <br>
		<form action="/ZhuHai/admin.php/Admin/Index/b2" method="get" >
		<div>
		名称:<input type="text" name="name" value="<?php echo ($name); ?>">  

		<input type="submit" value="查询"> 
		</div>    	
		</form><br/>
                        
                        <table class="table"  border="1" cellpadding="0">
                        <thead>
                        <tr>
		<th>名称</th>
                        <th width="80px">城市</th>
                        <th>简介</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($tour)): foreach($tour as $key=>$v): ?><tr class="warming">
			<td><?php echo ($v["name"]); ?></td>
                                    <td><?php echo ($v["city"]); ?></td>
                                    <td><?php echo ($v["text"]); ?></td>
                                    </tr><?php endforeach; endif; ?></tbody>
                        </table>
                        <div><?php echo ($page); ?></div>
	</div>


			</div>
		</div>
	</div>
</div>
</body>
</html>