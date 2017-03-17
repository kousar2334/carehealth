 $(document).ready(function(){
           $("#menu_icon_d").click(function(){
               $("#side_bar").toggle("slow");
           }) ;
           //Dotor operation
           $("#doctor_dash").click(function(){
               $(".doctor_operation").toggle("slow");
           }) ;
           $("#doctor_insert").click(function(){
               $("#insert_doctor_information").toggle();
           }) ;
           $("#close").click(function(){
               $("#insert_doctor_information").toggle();
           }) ;
           //Hospital Operation
           $("#hospital_dash").click(function(){
               $(".hospital_operation").toggle("slow");
           }) ;
           $("#hospital_insert").click(function(){
               $("#insert_hospital_information").toggle();
           }) ;
           $("#close_hospital").click(function(){
               $("#insert_hospital_information").hide();
           }) ;
           $("#pharmacy_dash").click(function(){
               $(".pharmacy_operation").toggle("slow");
           }) ;
           $("#blood_dash").click(function(){
               $(".blood_operation").toggle("slow");
           }) ;
           $("#ambulance_dash").click(function(){
               $(".ambulance_operation").toggle("slow");
           }) ;
           $("#page_upper").click(function(){
                $("html, body").animate({ scrollTop: 0 }, "fast");
  
           }) ;
        });
        

