<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<style type="text/css">
        body, html {width: 100%;height: 100%;overflow: hidden;margin:0;font-family:"微软雅黑";}
        #allmap{height:400px;width:100%;}
        #r-result{width:100%;}
    </style>
<link href="/ZhuHai/Public/Css/public.css" rel="stylesheet"/>
<link href="/ZhuHai/Public/Css/bootstrap.min.css" rel="stylesheet"/>
<link href="/ZhuHai/Public/Css/index.css" rel="stylesheet">
<script src="/ZhuHai/Public/Js/jquery.min.js"></script>
<script  src="/ZhuHai/Public/Js/jquery.bgiframe.js"></script>
<script src="/ZhuHai/Public/Js/bootstrap.min.js"></script>

<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=UF8x8E8D09adXmGpjWvMMBkxIUMT5iKo"></script>
<script type="text/javascript" src="http://developer.baidu.com/map/jsdemo/demo/convertor.js"></script>

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
</nav><br><br>
<div id="allmap"></div>
<div id="r-result"></div>
<script src="/ZhuHai/Public/Js/public.js"></script>
</body>
</html> 
<script type="text/javascript">
    // 百度地图API功能
    var map = new BMap.Map("allmap");
    map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
             map.enableScrollWheelZoom();//启用地图滚轮放大缩小
             map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
             map.enableKeyboard();//启用键盘上下左右键移动地图
    var point = new BMap.Point(113.551454,22.368121);
    map.centerAndZoom(point,15);
 var local = new BMap.LocalSearch(map, {
        renderOptions: {map: map, panel: "r-result"}
    });
    local.search("景点");
    var geolocation = new BMap.Geolocation();
    geolocation.getCurrentPosition(function(r){
        if(this.getStatus() == BMAP_STATUS_SUCCESS){
            var mk = new BMap.Marker(r.point);
            map.addOverlay(mk);
            map.panTo(r.point);
            alert('您的位置：'+r.point.lng+','+r.point.lat);
        }
        else {
            alert('failed'+this.getStatus());
        }        
    },{enableHighAccuracy: true})  

   
</script>