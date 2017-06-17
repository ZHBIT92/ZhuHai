$(function () {
          $("img.img-circle").click(function(){
                $("#form").show();
                $('#bg').show();     
                var imgid=$(this).attr("id");
          });
          $("#add").click(function(){
                $("#form").show();
                $('#bg').show();             
                $('#hide').hide();
          });

          $("#othercity").click(function(){
                $("#othertext").show();
          });
          $(".maincity").click(function(){
                $("#othertext").hide();
          });
          
          $("#form-close").click(function(){
                $("#form").hide();
                $('#bg').hide();
                $('#hide').show();
          });
});