<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
<title>珠海旅游</title>
<link href="/ZhuHai/Public/Css/index.css" rel="stylesheet">
<link href="/ZhuHai/Public/Css/bootstrap.min.css" rel="stylesheet"/>
<link href="/ZhuHai/Public/Css/public.css" rel="stylesheet"/>
<script src="/ZhuHai/Public/Js/jquery.min.js"></script>
<script  src="/ZhuHai/Public/Js/jquery.bgiframe.js"></script>
<script src="/ZhuHai/Public/Js/bootstrap.min.js"></script>

</head>

<body>
<!--导航-->
<nav >
<div id="nav" class="container">
<div class="row clearfix">
	<div class="col-md-4 column">
	<span id="time"></span>
	</div>
	<div class="col-md-2 column">
	<span id="time"></span>
	</div>
	<div class="col-md-6 column">
	<ul class="nav nav-pills" id="nav-show">
			<li><a href = "/ZhuHai">首页<span class="badge">12</span></a></li>
			<li><a href = "#">简介</a></li>
			<li><a href = "#">消息<span class="badge">3</span></a></li>
			<li><a href = "./index.php/Home/Index/map.html">Map</a></li>
			<li><a href = "/ZhuHai/index.php/Admin/Login/index">登录</a></li>	
	</ul>
	</div>
</div>
</nav><br><br><br>

<!--</div>-->
<!-- 显示浏览器窗口的实际尺寸 -->
<!-- <form action="#" method="get" name="form1" id="form1">
浏览器窗口 的 实际宽度 : <input type="text" name="availWidth" size="4"/><br />
</form>  -->


<section class="container" style="text-align:center" id="top">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="carousel slide" id="carousel-477883">
				<ol class="carousel-indicators">
					<li class="active" data-slide-to="0" data-target="#carousel-477883">
					</li>
					<li data-slide-to="1" data-target="#carousel-477883">
					</li>
					<li data-slide-to="2" data-target="#carousel-477883">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img alt="" src="/ZhuHai/Public/Images/top1.jpg" />
						<div class="carousel-caption">
							<h3>
								马尔代夫
							</h3>
							<h4>
								如果你一生中有很多次出国旅游的机会，那你一定要来马尔代夫.如果你一生中只有一次出国旅游的机会，那你更要来马尔代夫。
							</h4>					
						</div>
					</div>
					<div class="item">
						<img alt="" src="/ZhuHai/Public/Images/default1.jpg" />
						<div class="carousel-caption">
							<h4>
								Second Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
					<div class="item">
						<img alt="" src="/ZhuHai/Public/Images/default2.jpg" />
						<div class="carousel-caption">
							<h4>
								Third Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
				</div> 
				<a class="left carousel-control" href="#carousel-477883" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span></a> 
				<a class="right carousel-control" href="#carousel-477883" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" ></span></a>
			</div>
		</div>
            </div><br>

<div id=select >
<div class="container">
            <div class="row clearfix">
		<div class="col-md-1 column">
		     
                        </div>
		<div class="col-md-2 column">
		     <div id="select-address" >
           <label for="name">目的地</label>
           <input type="text" class="form-control" placeholder="请输入你的目的地" id="address" name="address">
        </div>
		</div>
		<div class="col-md-2 column">
		    <div id="select-time1" >
           <label for="name">到达时间</label>
           <input type="date" class="form-control" placeholder="请输入时间" id="time1" name="time1">
         </div>
		</div>
		<div class="col-md-2 column">
                              <div id="select-time2" >
           <label for="name" >离开时间</label>
           <input type="date" class="form-control" placeholder="请输入时间" id="time2" name="time2">
         </div>
		</div>
		<div class="col-md-2 column">
		    <div id="select-num" >
           <label for="name">人数</label>
           <input type="text" class="form-control" placeholder="请输入人数" id="num" name="num">
            </div>
		</div>
		<div class="col-md-2 column">
		    <div id="select-button" class="pull-right">
		    <button type="button" class="btn btn-info btn-lg " >搜索</button>
		    </div>
		</div>
		<div class="col-md-1 column">		 
		</div>
	</div>
</div>
        
           <div id="selectItem" class="selectItemhidden"> 
	           <div id="selectItemCount" class="selectItemcont"> 
		<div id="selectSub"> 
			<input type="checkbox" name="cr01"  id="cr01" value="北京" class="selectItemhidden"/><label for="cr01">北京</label>
			<input type="checkbox" name="cr02"  id="cr02" value="上海" class="selectItemhidden"/><label for="cr02">上海</label>
			<input type="checkbox" name="cr03"  id="cr03" value="成都" class="selectItemhidden"/><label for="cr03">成都</label>
			<input type="checkbox" name="cr04"  id="cr04" value="珠海" class="selectItemhidden"/><label for="cr04">珠海</label>
		</div> 
	            </div> 
           </div> 
</div>
</section><br><br>

<article class="container">
      <header>
            <h1>热门目的地</h1>
　　</header>
      <section class="pic-show">
            <ul id="myTab" class="nav nav-tabs">
            <li  class="active"><a href="#zh" data-toggle="tab">珠海</a></li>	
	<li><a href="#bj"  data-toggle="tab"> 北京</a></li>
	<li><a href="#sh" data-toggle="tab">上海</a></li>
	<li><a href="#cd" data-toggle="tab">成都</a></li>
	<li><a href="#">更多</a></li>
            </ul>

            <div id="myTabContent" class="tab-content">
            <br>
	<div class="tab-pane fade in active" id="zh">
	         <div class="row">	    
	            <div class="col-md-4 column">
	            <a href="./index.php/Home/Index/zh1.html">
	            <img class="img-circle" src="/ZhuHai/Public/Images/zh1.jpg" width="300" height="260" >
	            <br><br>
	            <p>珠海渔女</p>
	            <p>有多少人喜欢</p></a></div>	

		<div class="col-md-4 column">
		<a href="./index.php/Home/Index/zh2.html">
		<img class="img-circle" src="/ZhuHai/Public/Images/zh2.jpg" width="300" height="260" >
		<br><br>
		<p>长隆海洋王国</p></a></div>
		
		<div class="col-md-4 column">
		<a href="./index.php/Home/Index/zh3.html">
		<img class="img-circle" src="/ZhuHai/Public/Images/zh3.jpg" width="300" height="260" >
		<br><br>
		<p>圆明新园</p></a></div>
	         </div>
	</div>
	<div class="tab-pane fade" id="bj">
		<div class="row">	    
	            <div class="col-md-4 column">
	            <a href="./index.php/Home/Index/zh1.html">
	            <img class="img-circle" src="/ZhuHai/Public/Images/bj1.jpg" width="300" height="260" >
	            <br><br>
	            <p>故宫</p>
	            <p>有多少人喜欢</p></a></div>	

		<div class="col-md-4 column">
		<a href="./index.php/Home/Index/zh2.html">
		<img class="img-circle" src="/ZhuHai/Public/Images/bj2.jpg" width="300" height="260" >
		<br><br>
		<p>王府井</p></a></div>
		
		<div class="col-md-4 column">
		<a href="./index.php/Home/Index/zh3.html">
		<img class="img-circle" src="/ZhuHai/Public/Images/bj3.jpg" width="300" height="260" >
		<br><br>
		<p>颐和园</p></a></div>
	         </div>
            </div>
	<div class="tab-pane fade" id="sh">
		<div class="row">	    
	            <div class="col-md-4 column">
	            <a href="./index.php/Home/Index/zh1.html">
	            <img class="img-circle" src="/ZhuHai/Public/Images/sh1.jpg" width="300" height="260" >
	            <br><br>
	            <p>上海中心大厦</p>
	            <p>有多少人喜欢</p></a></div>	

		<div class="col-md-4 column">
		<a href="./index.php/Home/Index/zh2.html">
		<img class="img-circle" src="/ZhuHai/Public/Images/sh2.jpg" width="300" height="260" >
		<br><br>
		<p>上海迪士尼乐园</p></a></div>
		
		<div class="col-md-4 column">
		<a href="./index.php/Home/Index/zh3.html">
		<img class="img-circle" src="/ZhuHai/Public/Images/sh3.jpg" width="300" height="260" >
		<br><br>
		<p>上海奉贤海湾旅游区</p></a></div>
	         </div>
	</div>
	<div class="tab-pane fade" id="cd">
		<div class="row">	    
	            <div class="col-md-4 column">
	            <a href="./index.php/Home/Index/zh1.html">
	            <img class="img-circle" src="/ZhuHai/Public/Images/cd1.jpg" width="300" height="260" >
	            <br><br>
	            <p>宽窄巷子</p>
	            <p>有多少人喜欢</p></a></div>	

		<div class="col-md-4 column">
		<a href="./index.php/Home/Index/zh2.html">
		<img class="img-circle" src="/ZhuHai/Public/Images/cd2.jpg" width="300" height="260" >
		<br><br>
		<p>锦里</p></a></div>
		
		<div class="col-md-4 column">
		<a href="./index.php/Home/Index/zh3.html">
		<img class="img-circle" src="/ZhuHai/Public/Images/cd3.jpg" width="300" height="260" >
		<br><br>
		<p>都江堰</p></a></div>
	         </div>
	</div>
	
            </div>
      </section>
</article>

<article class="container">
       <header>
            <h1>旅游好去处</h1>
　　</header>
<section class="pic-show">
            <div class="row">
	            <div class="col-md-3 column">
	            <a href="./index.php/Home/Index/zh2.html">
		<img class="img-circle" src="/ZhuHai/Public/Images/zh2.jpg" width="240" height="230" >
		<br><br>
		<p>长隆海洋王国</p></a></div>
		<div class="col-md-3 column">
		<a href="./index.php/Home/Index/zh2.html">
		<img class="img-circle" src="/ZhuHai/Public/Images/zh2.jpg" width="240" height="230" >
		<br><br>
		<p>长隆海洋王国</p></a></div>
		<div class="col-md-3 column">
		<a href="./index.php/Home/Index/zh2.html">
		<img class="img-circle" src="/ZhuHai/Public/Images/zh2.jpg" width="240" height="230" >
		<br><br>
		<p>长隆海洋王国</p></a></div>
		<div class="col-md-3 column">
	            <a href="./index.php/Home/Index/zh2.html">
		<img class="img-circle" src="/ZhuHai/Public/Images/zh2.jpg" width="240" height="230" >
		<br><br>
		<p>长隆海洋王国</p></a></div>
	</div>
</section>
</article>

<div class="container">
            <header>
                 <h1>义工旅行</h1>
　　     </header>
<section class="pic-show">
	<div class="row clearfix">
		<div class="col-md-3 column">
	            <a href="http://www.zxg365.com/travel_job/detail_1933.html">
		<img  src="/ZhuHai/Public/Images/yg1.jpg" width="240" height="230" >
		<br><br>
		<p>大理洱海达岸海景客栈</p></a></div>
		<div class="col-md-3 column">
		<a href="http://www.zxg365.com/travel_job/detail_1901.html">
		<img  src="/ZhuHai/Public/Images/yg2.jpg" width="240" height="230" >
		<br><br>
		<p>成都蒸汽旅舍</p></a></div>
		<div class="col-md-3 column">
		<a href="http://www.zxg365.com/travel_job/detail_1958.html">
		<img  src="/ZhuHai/Public/Images/yg3.jpg" width="240" height="230" >
		<br><br>
		<p>厦门84HOW青年旅舍</p></a></div>
		<div class="col-md-3 column">	
	            <a href="http://www.zxg365.com/travel_job/detail_1746.html">
		<img  src="/ZhuHai/Public/Images/yg4.jpg" width="240" height="230" >
		<br><br>
		<p>香格里拉花儿国际青年旅舍</p></a></div>
	</div>
</section>
</div>

<footer class="container">
	<div id= "suggest" class="contact" style="text-align:center" >
		<h2>CONTACT ME</h2>
		<p>您有什么更好的建议，请与我们联系</p>
		<div id="commit">
		<form >
		         <div class="input-group">		        
			<input type = "text" class="form-control" placeholder = "请输入姓名" required = "required"/>
		          </div>

		          <div class="input-group">
			<input type = "text" class="form-control" placeholder = "E-mail" required = "required"/>
		          </div>
			
		          <div class="input-group">
			<textarea placeholder = "Message"></textarea>
		          </div>
			
			<button type="submit" class="btn btn-warning">提交</button>
		</form>
		</div>
	</div>
	<br><br>
</footer>
<script src="/ZhuHai/Public/Js/public.js"></script>
</body>
</html>