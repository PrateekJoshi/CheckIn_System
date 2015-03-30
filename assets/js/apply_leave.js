 $("#leave_btn").click(function(e) {
        $("#event").text('Apply for Leave');
        var_form='<form action="login.php" method="post" class="form-horizontal">'
        + '<label>'+'Select Warden:'+'</label>'+
 '<select class="form-control" id="sel1" name="leave_warden">'+
    '<option value="it">Mr.Pradeep Garg</option>'+
    '<option value="cse">Dr.Neelkanth</option>'+
  '</select>'+'<br>'+'<label>'+'<input type="text" class="form-control" placeholder="Going to">'+'<br>'+
 '<label>'+'From date:'+'</label>'+'<input type="date" class="form-control" placeholder="From ">'+'<br>'+
 '<label>'+'To date:'+'</label>'+'<input type="date" class="form-control" placeholder="to">'+'<br>'+
'<textarea name="message" id="message" required="required" name="message" class="form-control" rows="8"  placeholder="Any other info">'+'</textarea>'+'<br>'+
    '<input type="submit" class="btn btn-info" name="btn_register" value="Apply">'+
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