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
                $("#search_result").hide();
              
           }) ;
           
           //search hospital by name
           $("#search_txt").keypress(
            function(e){
                if(e.keyCode===13){
                    var hospital_name=$("#search_txt").val();
                   $("#view_content").hide();
                    $.ajax({
                        method:"post",
                        url:"../controll/hospital/search_hospital.php",
                        data:{hospital_name:hospital_name}
                    })
                            .done(function(data){
                                $("#search_result").html(data);
                                
                    });
                   
        }
            }
            );
           
           //govt college and hospital link
           $("#govt_college_hospital_link").click(function(){
           $("#view_content").hide();
          var type=$("#govt_college_hospital_link").text();
          $.ajax({
              method:"post",
              url:"../controll/hospital/view_hospital.php",
              data:{type:type}
             
          })
                  .done(function(data){
                 $("#side_bar_link_viewer").html(data);     
          });
          }) ;
          //govt hospital link
          $("#govt_hospital_link").click(function(){
           $("#view_content").hide();
          var type=$("#govt_hospital_link").text();
          $.ajax({
              method:"post",
              url:"../controll/hospital/view_hospital.php",
              data:{type:type}
             
          })
                  .done(function(data){
                 $("#side_bar_link_viewer").html(data);     
          });
          }) ;
          //private hospital link
          $("#private_hospital_link").click(function(){
           $("#view_content").hide();
          var type=$("#private_hospital_link").text();
          $.ajax({
              method:"post",
              url:"../controll/hospital/view_hospital.php",
              data:{type:type}
             
          })
                  .done(function(data){
                 $("#side_bar_link_viewer").html(data);     
          });
          }) ;
          //eye hospital link
          $("#eye_hospital_link").click(function(){
           $("#view_content").hide();
          var type=$("#eye_hospital_link").text();
          $.ajax({
              method:"post",
              url:"../controll/hospital/view_hospital.php",
              data:{type:type}
             
          })
                  .done(function(data){
                 $("#side_bar_link_viewer").html(data);     
          });
          }) ;
          //maternal center link
          $("#maternal_hospital_link").click(function(){
           $("#view_content").hide();
          var type=$("#maternal_hospital_link").text();
          $.ajax({
              method:"post",
              url:"../controll/hospital/view_hospital.php",
              data:{type:type}
             
          })
                  .done(function(data){
                 $("#side_bar_link_viewer").html(data);     
          });
          }) ;
          //clink link
          $("#clinic_link").click(function(){
           $("#view_content").hide();
          var type=$("#clinic_link").text();
          $.ajax({
              method:"post",
              url:"../controll/hospital/view_hospital.php",
              data:{type:type}
             
          })
                  .done(function(data){
                 $("#side_bar_link_viewer").html(data);     
          });
          }) ;
          
        });
        


