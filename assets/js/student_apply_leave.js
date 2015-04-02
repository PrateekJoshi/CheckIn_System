$("#leave_btn").click(function(e) {
    $("#event").text('Apply for Leave');
        var_form =  '<div class="row">'+
                        '<div class="col-md-3">'+'</div>'+
                        '<div class="col-md-6">'+
                            '<form class="form-horizontal" action="student/apply_leave_validation" method="post">'+
                                '<div class="form-group">'+
                                    '<label for="inputEmail3" class="col-sm-5 control-label">'+'Select Warden:'+'</label>'+
                                    '<div class="col-sm-7">'+
                                        '<select class="form-control" id="sel1" name="leave_warden_code">'+
                                            '<option value="99100">'+'Mr.Pradeep Garg'+'</option>'+
                                            '<option value="99101">'+'Dr.Neelkanth'+'</option>'+
                                        '</select>'+
                                    '</div>'+
                                '</div>'+
                                 '<div class="form-group">'+
                                    '<label for="inputPassword3" class="col-sm-5 control-label">'+'Going to:'+'</label>'+
                                    '<div class="col-sm-7">'+
                                        '<input type="text" class="form-control" name="leave_going_to">'+
                                    '</div>'+
                                '</div>'+
                                 '<div class="form-group">'+
                                    '<label for="inputPassword3" class="col-sm-5 control-label">'+'From:'+'</label>'+
                                    '<div class="col-sm-7">'+
                                        '<input type="date" class="form-control" name="leave_from_date">'+
                                    '</div>'+
                                '</div>'+
                                '<div class="form-group">'+
                                    '<label for="inputPassword3" class="col-sm-5 control-label">'+'To:'+'</label>'+
                                    '<div class="col-sm-7">'+
                                        '<input type="date" class="form-control" name="leave_till_date">'+
                                    '</div>'+
                                '</div>'+
                                '<div class="form-group">'+
                                    '<label for="inputPassword3" class="col-sm-5 control-label">'+'Hostel No.'+'</label>'+
                                    '<div class="col-sm-7">'+
                                        '<input type="text" class="form-control" name="leave_hostel_no">'+
                                    '</div>'+
                                '</div>'+
                                '<div class = "form-group">'+
                                    '<label for = "reg-resume_headline" class = "col-md-5 control-label">Message:</label>'+
                                    '<div class = "col-md-7">'+
                                        '<textarea class="form-control" rows="3" style = "border-radius: 0px;" name="leave_other_info"></textarea>'+   
                                    '</div>'+
                                '</div>'+
        
                                '<div class="form-group">'+
                                    '<div class="col-sm-6">'+'</div>'+
                                    '<div class="col-sm-6">'+
                                        '<input type="submit" class="btn btn-info" name="btn_leave_submit" value="Send Application">'+
                                    '</div>'+
                                '</div>'+
                            '</form>'+
                        '</div>'+
                        '<div class="col-md-3">'+'</div>'+
                    '</div>';    
                                  
$("#notf_display").html(var_form);

});

