$(document).ready(function(){
           $("#menu_icon_d").click(function(){
               $("#side_bar").slideToggle();
           }) ;
           $("#blood_donation_link").click(function(){
               $("#blood_donation_form").toggle();
               $("#side_bar").hide();
               $("#blood_donar_list").hide();
           }) ;
           $(".close").click(function(){
               $("#blood_donation_form").hide();
               $("#side_bar").show();
               $("#blood_donar_list").show();
           }) ;
           //search page link
           $("#search_icon").click(function(){
               $("#search_page").show("slow");
           }) ;
           //close search page
           $("#close_search_page").click(function(){
               $("#search_page").hide("slow");
                $("#blood_donar_list").show();
                 $("#search_result").hide();
              
           }) ;
           
           //search blood by location
           $("#search_txt").keypress(
            function(e){
                if(e.keyCode===13){
                    var address=$("#search_txt").val();
                    $("#search_txt").val('');
                    $("#search_txt").focus();
                    var blood_group=$("#blood_group").val();
                   $("#blood_donar_list").hide();
                    $.ajax({
                        method:"post",
                        url:"../controll/blood_bank/search_blood.php",
                        data:{blood_group:blood_group,address:address}
                    })
                            .done(function(data){
                                $("#search_result").html(data);
                                
                    });
                   
        }
            }
            );
        });
        