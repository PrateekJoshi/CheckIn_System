  $("#leave_btn").click(function(e) {
                $("#event").text('Apply for leave');
                $('#display_menu1').css({"display":"none"});
                $('#display_menu2').css({"display":"block"});


            });

       $("#leave_status_btn").click(function(e) {
                $("#event").text('Leave application status');
                $('#display_menu1').css({"display":"block"});
                $('#display_menu2').css({"display":"none"});

            });