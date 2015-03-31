 $("#leave_btn").click(function(e) {
        $("#event").text('Apply for Leave');
        var_form='<form action="student/apply_leave_validation" method="post">'+
                                
        + '<label>'+'Select Warden:'+'</label>'+
 '<select class="form-control" id="sel1" name="leave_warden" required>'+
    '<option value="99100">Mr.Pradeep Garg</option>'+
    '<option value="99101">Dr.Neelkanth</option>'+
  '</select>'+'<br>'+'<label>'+'<input type="text" class="form-control" name="leave_going_to" placeholder="Going to" required>'+'<br>'+
 '<label>'+'From date:'+'</label>'+'<input type="date" name="leave_going_date" class="form-control" required>'+'<br>'+
 '<label>'+'To date:'+'</label>'+'<input type="date" name="leave_going_till_date" class="form-control" required>'+'<br>'+
'<textarea  name="leave_other_info" class="form-control" rows="8"  placeholder="Any other info" required>'+'</textarea>'+'<br>'+
    '<input type="submit" class="btn btn-info" name="" value="Apply">'+
'</form>';
                $("#notf_display").html(var_form);
                 });


 $("#leave_status_btn").click(function(e) {
        $("#event").text('Application Status');
               var_table= '<div class="table-responsive" id="apply_status">'+
                                        '<table class="table table-striped">'+
                                            '<thead>'+
                                                '<tr>'+
                                                   ' <th>S.No</th>'+
                                                    '<th>Notification</th>'+
                                                   '<th>Status</th>'+
                                                
                                                '</tr>'+
                                            '</thead>'+
                                            '<tbody>'+
                                                
                                                   '<tr>'+
                                                    '<td>1,002</td>'+
                                                  ' <td>'+'amet'+'</td>'+
                                                  '<td>'+'consectetur'+'</td>'+
                                                   
                                                '</tr>'+
                                                  
                                            '</tbody>'+
                                        '</table>'+
                                    '</div>';
 
               $("#notf_display").html(var_table);
                 });