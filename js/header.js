
$(document).ready(function() {
       
       
       $("#menu_icon").click(function(){
          $("#menu_bar").slideToggle(); 
       });
       $("#login_bt").click(function(){
          $("#login_box").toggle("slow"); 
       });
       $("#close_login").click(function(){
          $("#login_box").hide("slow"); 
       });
       $("#user_icon").click(function(){
          $("#user_box").toggle("slow"); 
       });
    });


