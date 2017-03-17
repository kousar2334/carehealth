$(document).ready(function(){
           $("#menu_icon_d").click(function(){
               $("#side_bar").slideToggle("slow");
           }) ;
           //search page link
           $("#search_icon").click(function(){
               $("#search_page").show("slow");
           }) ;
           //close search page
           $("#close_search_page").click(function(){
               $("#search_page").hide("slow");
                $("#view_content").show();
              
           }) ;
           
           //search doctor by name
           $("#search_txt").keypress(
            function(e){
                if(e.keyCode===13){
                    var doctor_name=$("#search_txt").val();
                   $("#view_content").hide();
                    $.ajax({
                        method:"post",
                        url:"../controll/doctor/search_doctor.php",
                        data:{doctor_name:doctor_name}
                    })
                            .done(function(data){
                                $("#search_result").html(data);
                                
                    });
                   
        }
            }
            );
          //cardiac link
          $("#cardiac_link").click(function(){
           $("#view_content").hide();
          var name=$("#cardiac_link").text();
          $.ajax({
              method:"post",
              url:"../controll/doctor/view_doctor.php",
              data:{specialist:name}
             
          })
                  .done(function(data){
                 $("#side_bar_link_viewer").html(data);     
          });
          }) ;
          //cancer link
          $("#cancer_link").click(function(){
           $("#view_content").hide();
          var name=$("#cancer_link").text();
          $.ajax({
              method:"post",
              url:"../controll/doctor/view_doctor.php",
              data:{specialist:name}
             
          })
                  .done(function(data){
                 $("#side_bar_link_viewer").html(data);     
          });
          }) ;
          //medicine link
          $("#medicine_link").click(function(){
           $("#view_content").hide();
          var name=$("#medicine_link").text();
          $.ajax({
              method:"post",
              url:"../controll/doctor/view_doctor.php",
              data:{specialist:name}
             
          })
                  .done(function(data){
                 $("#side_bar_link_viewer").html(data);     
          });
          }) ;
          //nurology link
          $("#nurology_link").click(function(){
           $("#view_content").hide();
          var name=$("#nurology_link").text();
          $.ajax({
              method:"post",
              url:"../controll/doctor/view_doctor.php",
              data:{specialist:name}
             
          })
                  .done(function(data){
                 $("#side_bar_link_viewer").html(data);     
          });
          }) ;
          //skin and sex link
          $("#skin_link").click(function(){
           $("#view_content").hide();
          var name=$("#sklin_link").text();
          $.ajax({
              method:"post",
              url:"../controll/doctor/view_doctor.php",
              data:{specialist:name}
             
          })
                  .done(function(data){
                 $("#side_bar_link_viewer").html(data);     
          });
          }) ;
          //neck link
          $("#neck_link").click(function(){
           $("#view_content").hide();
          var name=$("#neck_link").text();
          $.ajax({
              method:"post",
              url:"../controll/doctor/view_doctor.php",
              data:{specialist:name}
             
          })
                  .done(function(data){
                 $("#side_bar_link_viewer").html(data);     
          });
          }) ;
          //eye link
          $("#eye_link").click(function(){
           $("#view_content").hide();
          var name=$("#eye_link").text();
          $.ajax({
              method:"post",
              url:"../controll/doctor/view_doctor.php",
              data:{specialist:name}
             
          })
                  .done(function(data){
                 $("#side_bar_link_viewer").html(data);     
          });
          }) ;
          //child link
          $("#child_link").click(function(){
           $("#view_content").hide();
          var name=$("#child_link").text();
          $.ajax({
              method:"post",
              url:"../controll/doctor/view_doctor.php",
              data:{specialist:name}
             
          })
                  .done(function(data){
                 $("#side_bar_link_viewer").html(data);     
          });
          }) ;
          //dentist link
          $("#dentist_link").click(function(){
           $("#view_content").hide();
          var name=$("#dentist_link").text();
          $.ajax({
              method:"post",
              url:"../controll/doctor/view_doctor.php",
              data:{specialist:name}
             
          })
                  .done(function(data){
                 $("#side_bar_link_viewer").html(data);     
          });
          }) ;
        });
        

