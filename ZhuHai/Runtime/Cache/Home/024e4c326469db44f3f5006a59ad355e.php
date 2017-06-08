<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<style type="text/css">
#map{
height: 540px; //设置高度，不然会显示不出来
}
</style>
<link href="/ZhuHai/Public/Css/public.css" rel="stylesheet"/>
<link href="/ZhuHai/Public/Css/bootstrap.min.css" rel="stylesheet"/>
<link href="/ZhuHai/Public/Css/index.css" rel="stylesheet">
<script src="/ZhuHai/Public/Js/jquery.min.js"></script>
<script  src="/ZhuHai/Public/Js/jquery.bgiframe.js"></script>
<script src="/ZhuHai/Public/Js/bootstrap.min.js"></script>

<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=UgokK7E8TTK44FOFTqXUNoM9eNm4Nu23"></script>
<script type="text/javascript" src="http://developer.baidu.com/map/jsdemo/demo/convertor.js"></script>
<script>
$(function(){
navigator.geolocation.getCurrentPosition(translatePoint); //定位
});
function translatePoint(position){
var currentLat = position.coords.latitude;
var currentLon = position.coords.longitude;
var gpsPoint = new BMap.Point(currentLon, currentLat);
BMap.Convertor.translate(gpsPoint, 0, initMap); //转换坐标
}
function initMap(point){
//初始化地图
map = new BMap.Map("map");  //map为放地图的 div 的 id 
map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
map.enableScrollWheelZoom();//启用地图滚轮放大缩小
map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
map.enableKeyboard();//启用键盘上下左右键移动地图
map.addControl(new BMap.NavigationControl());
map.addControl(new BMap.ScaleControl());
map.addControl(new BMap.OverviewMapControl());
map.centerAndZoom(point, 15);  //point为坐标点，15为地图缩放级别，最大级别是 18 
map.addOverlay(new BMap.Marker(point))

var local = new BMap.LocalSearch(map,   
              { renderOptions:{map: map}});      
local.searchInBounds("景点", map.getBounds());
}

</script>
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
            <li><a href = "./admin.php/Admin/Login/index">登录</a></li>   
    </ul>
    </div>
</div>
</nav><br><br><br>
<div id="map"></div>
<script src="/ZhuHai/Public/Js/public.js"></script>
</body>
</html>