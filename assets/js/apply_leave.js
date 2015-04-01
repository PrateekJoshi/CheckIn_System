$("#leave_btn").click(function(e) {
    $("#event").text('Apply for Leave');
        var_form =  '<div class="row" id="notf_display">'+
                        '<div class="col-md-3">'+'</div>'+
                        '<div class="col-md-6">'+
                            '<form class="form-horizontal" action="login.php" method="post">'+
                                '<div class="form-group">'+
                                    '<label for="inputEmail3" class="col-sm-5 control-label">'+'Select Warden'+'</label>'+
                                    '<div class="col-sm-7">'+
                                        '<select class="form-control" id="sel1" name="leave_warden">'+
                                            '<option value="it">'+'Mr.Pradeep Garg'+'</option>'+
                                            '<option value="cse">'+'Dr.Neelkanth'+'</option>'+
                                        '</select>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="form-group">'+
                                    '<label for="inputPassword3" class="col-sm-5 control-label">'+'Name'+'</label>'+
                                    '<div class="col-sm-7">'+
                                        '<input type="text" class="form-control" id="inputPassword3">'+
                                    '</div>'+
                                '</div>'+
                                '<div class="form-group">'+
                                    '<label for="inputPassword3" class="col-sm-5 control-label">'+'Roll No.'+'</label>'+
                                    '<div class="col-sm-7">'+
                                        '<input type="password" class="form-control" id="inputPassword3">'+
                                    '</div>'+
                                '</div>'+
                                '<div class="form-group">'+
                                    '<label for="inputPassword3" class="col-sm-5 control-label">'+'Branch'+'</label>'+
                                    '<div class="col-sm-7">'+
                                        '<input type="password" class="form-control" id="inputPassword3">'+
                                    '</div>'+
                                '</div>'+
                                '<div class="form-group">'+
                                    '<label for="inputPassword3" class="col-sm-5 control-label">'+'Hostel No.'+'</label>'+
                                    '<div class="col-sm-7">'+
                                        '<input type="password" class="form-control" id="inputPassword3">'+
                                    '</div>'+
                                '</div>'+
                                '<div class="form-group">'+
                                    '<label for="inputPassword3" class="col-sm-5 control-label">'+'Leave from'+'</label>'+
                                    '<div class="col-sm-3">'+
                                        '<input type="password" class="form-control" id="inputPassword3">'+
                                    '</div>'+
                                    '<center>'+'<label for="inputPassword3" class="col-sm-1 control-label">'+'to'+'</label>'+'</center>'+
                                    '<div class="col-sm-3">'+
                                        '<input type="password" class="form-control" id="inputPassword3">'+
                                    '</div>'+
                                '</div>'+
                                '<div class = "form-group">'+
                                    '<label for = "reg-resume_headline" class = "col-md-5 control-label">Address while on leave</label>'+
                                    '<div class = "col-md-7">'+
                                        '<textarea class="form-control" rows="3" style = "border-radius: 0px;" name="reg_headline"></textarea>'+   
                                    '</div>'+
                                '</div>'+
                                '<div class="form-group">'+
                                    '<label for="inputPassword3" class="col-sm-5 control-label">'+'Telephone No.'+'</label>'+
                                    '<div class="col-sm-7">'+
                                        '<input type="password" class="form-control" id="inputPassword3">'+
                                    '</div>'+
                                '</div>'+
                                '<div class="form-group">'+
                                    '<div class="col-sm-6">'+'</div>'+
                                    '<div class="col-sm-6">'+
                                        '<input type="submit" class="btn btn-info" name="btn_register" value="Send Application">'+
                                    '</div>'+
                                '</div>'+
                            '</form>'+
                        '</div>'+
                        '<div class="col-md-3">'+'</div>'+
                    '</div>';               
$("#notf_display").html(var_form);
});

$("#leave_status_btn").click(function(e) {
    $("#event").text('Leave Application Status');
        var_table= '<div class="table-responsive" id="notf_display">'+
                                             '<table class="table table-striped">'+
                                           '<thead>'+
                                                '<tr>'+
                                                   '<th>S.No</th>'+
                                                    '<th>Going To</th>'+
                                                    '<th>From Date</th>'+
                                                    '<th>To Date </th>'+
                                                    '<th>Message</th>'+
                                                    '<th>Seen</th>'+
                                                    '<th>Status</th>'+
                                                
                                                '</tr>'+
                                            '</thead>'+
                                            '<tbody>'+
                                               '<?php
                                               $count=0;
                                               foreach($leave_req as $row){
                                                $count=$count+1;
                                                echo'+ '\'<tr>\''+'.'+
                                                    '\'<td>\''+'.'+'$count'+'.'+'\'</td>\''+'.'+
                                                    '\'<td>\''+'.'+'$count'+'.'+'\'</td>\''+'.'+
                                                    '\'<td>\''+'.'+'$count'+'.'+'\'</td>\''+'.'+
                                                    '\'<td>\''+'.'+'$count'+'.'+'\'</td>\''+'.'+
                                                    '\'<td>\''+'.'+'$count'+'.'+'\'</td>\''+'.'+
                                                    '\'<td>\''+'.'+'$count'+'.'+'\'</td>\''+'.'+
                                                    '\'<td>\''+'.'+'$count'+'.'+'\'</td>\''+'.'+
                                                    '</tr>'+';'+

                                               '}'+  


                                               '?>'+
                                                
                                                  
                                            '</tbody>'+
                                         '</table>'+
                                         '</div>';
$("#notf_display").html(var_table);
});