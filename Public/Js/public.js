window.onload = function() {
  var show = document.getElementById("time");
  setInterval(function() {
   var time = new Date();
   // 程序计时的月从0开始取值后+1
   var m = time.getMonth() + 1;
   var t = time.getFullYear() + "-" + m + "-"
     + time.getDate() + " " + time.getHours() + ":"
     + time.getMinutes() + ":" + time.getSeconds()+showweek();
   show.innerHTML = t;

    function showweek()
                         {
                             var now = new Date();
                             if (now.getDay() == 0) return(" 星期日");
                             if (now.getDay() == 1) return(" 星期一");
                             if (now.getDay() == 2) return(" 星期二");
                             if (now.getDay() == 3) return(" 星期三");
                             if (now.getDay() == 4) return (" 星期四");
                             if (now.getDay() == 5) return (" 星期五");
                             if (now.getDay() == 6) return (" 星期六");
                         }
   }, 1000);

var winWidth = 0;
function findDimensions() // 函数：获取尺寸
{
// 获取窗口宽度
if (window.innerWidth)
winWidth = window.innerWidth;
else if ((document.body) && (document.body.clientWidth))

winWidth = document.body.clientWidth;

// 通过深入 Document 内部对 body 进行检测，获取窗口大小

if (document.documentElement && document.documentElement.clientHeight && document.documentElement.clientWidth)
{
winWidth = document.documentElement.clientWidth;
}

if(winWidth<=600){
  $('#time').hide();
  if(winWidth<422){
  $("#nav").css('height','93px');
  }
  else if(winWidth>=422){
    $("#nav").css('height','43px');
}
}
else{
  $('#time').show();  
  if(winWidth>=422){
    $("#nav").css('height','43px');
  }
}
}

findDimensions();  // 调用函数，获取数值
window.onresize=findDimensions;

 };

