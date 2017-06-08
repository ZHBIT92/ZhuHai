$(function () {

          $("img.img-circle").click(function(){
                $("#form").show();
                $('#bg').show();             
          });
          $("#form-close").click(function(){
                $("#form").hide();
                $('#bg').hide();
          });
});