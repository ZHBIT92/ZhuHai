<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
<title>珠海旅游</title>
<link href="/ZhuHai/Public/Css/index.css" rel="stylesheet">
<script src="http://libs.baidu.com/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="jquery.bgiframe.js"></script>
<link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
<script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script>
 
jQuery.fn.selectCity = function(targetId) {
	var _seft = this;
	var targetId = $(targetId);

	this.click(function(){
		var A_top = $(this).offset().top + $(this).outerHeight(true);  //  1
		var A_left =  $(this).offset().left;
		targetId.bgiframe();
		targetId.show().css({"position":"absolute","top":A_top+"px" ,"left":A_left+"px"});
	});

	targetId.find("#selectItemClose").click(function(){
		targetId.hide();
	});

	targetId.find("#selectSub :checkbox").click(function(){		
		targetId.find(":checkbox").attr("checked",false);
		$(this).attr("checked",true);	
		_seft.val( $(this).val() );
		targetId.hide();
	});

	$(document).click(function(event){
		if(event.target.id!=_seft.selector.substring(1)){
			targetId.hide();	
		}
	});

	targetId.click(function(e){
		e.stopPropagation(); //  2
	});
    return this;
}
 
$(function(){
	//test1:
	$("#address").selectCity("#selectItem");
});
 </script>
</head>

<body>

<!--导航-->
<nav>
            <img class="img-circle" src="/ZhuHai/Public/Images/位图蜗牛.png" width="50" height="50" >
	<ul class="nav nav-pills pull-right">
			<li><a href = "#">首页<span class="badge">12</span></a></li>
			<li><a href = "#">简介</a></li>
			<li><a href = "#">消息<span class="badge">3</span></a></li>
			<li><a href = "#">Map</a></li>
			<li><a href = "./admin.php/Admin/Login/index">登录</a></li>	
	</ul>
</nav>
<!--</div>-->

<section class="container" style="text-align:center">
	
<div  class="jumbotron">
        <h1 style="color: #FF5A5F">Love 爱旅行</h1>
        <h1 style="color: #484848 ">旅行中，像当地人一样生活</h1>
</div>

<div id=select>
     <div id=select-one>
        <div id="select-address" class="pull-left">
           <label for="name">目的地</label>
           <input type="text" class="form-control" placeholder="请输入你的目的地" id="address" name="address">
        </div>

        <div id="select-time1" class="pull-left">
           <label for="name">到达时间</label>
           <input type="date" class="form-control" placeholder="请输入时间" id="time1" name="time1">
         </div>

         <div id="select-time2" class="pull-left">
           <label for="name" >离开时间</label>
           <input type="date" class="form-control" placeholder="请输入时间" id="time2" name="time2">
         </div>

           <div id="select-num" class="pull-left">
           <div class="input-group">
           <label for="name">人数</label>
           <input type="text" class="form-control" placeholder="请输入你的目的地" id="num" name="num">
           <span class="input-group-btn"> 
           <button type="button" class="btn btn-info btn-lg " >搜索</button>
            </span>
          </div></div>

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
</div>
</section>

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
	            <a href="javascript:onclick=show('zh1')">
	            <img class="img-circle" src="/ZhuHai/Public/Images/zh1.jpg" width="300" height="260" >
	            <br><br>
	            <p>珠海渔女</p>
	            <p>有多少人喜欢</p></a></div>	

		<div class="col-md-4 column">
		<a href="javascript:onclick=show('zh2')">
		<img class="img-circle" src="/ZhuHai/Public/Images/zh2.jpg" width="300" height="260" >
		<br><br>
		<p>长隆海洋王国</p></a></div>
		
		<div class="col-md-4 column">
		<a href="javascript:onclick=show('zh3')">
		<img class="img-circle" src="/ZhuHai/Public/Images/zh3.jpg" width="300" height="260" >
		<br><br>
		<p>圆明新园</p></a></div>
	         </div>
	</div>
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
	         </div>
	</div>
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
	         </div>
	</div>
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
	            <img class="img-circle" src="/ZhuHai/Public/Images/位图蜗牛.png" width="150" height="250" >
	            <p>图片1加文字（整个div作为点击链接）</p></div>
		<div class="col-md-3 column">
		<img class="img-circle" src="/ZhuHai/Public/Images/位图蜗牛.png" width="150" height="250" >
		<p>图片2加文字（整个div作为点击链接）</p></div>
		<div class="col-md-3 column">
		<img class="img-circle" src="/ZhuHai/Public/Images/位图蜗牛.png" width="150" height="250" >
		<p>图片3加文字（整个div作为点击链接）</p></div>
		<div class="col-md-3 column">
	            <img class="img-circle" src="/ZhuHai/Public/Images/位图蜗牛.png" width="150" height="250" >
	            <p>图片4加文字（整个div作为点击链接）</p></div>
	</div>
</section>
</article>

<div class="container">
            <header>
                 <h1>出发吧</h1>
　　     </header>
<section class="pic-show">
	<div class="row clearfix">
		<div class="col-md-3 column">
		<img class="img-circle" src="/ZhuHai/Public/Images/位图蜗牛.png" width="250" height="250" >
	            <p>图片1加文字（整个div作为点击链接）</p>
		</div>
		<div class="col-md-3 column">
		<img class="img-circle" src="/ZhuHai/Public/Images/位图蜗牛.png" width="250" height="250" >
	            <p>图片1加文字（整个div作为点击链接）</p>
		</div>
		<div class="col-md-3 column">
		<img class="img-circle" src="/ZhuHai/Public/Images/位图蜗牛.png" width="250" height="250" >
	            <p>图片1加文字（整个div作为点击链接）</p>
		</div>
		<div class="col-md-3 column">
		<img class="img-circle" src="/ZhuHai/Public/Images/位图蜗牛.png" width="250" height="250" >
	            <p>图片1加文字（整个div作为点击链接）</p>
		</div>
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
</body>
</html>