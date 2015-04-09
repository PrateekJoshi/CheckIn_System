$("#leave_status_btn").click(function(e) {
    $("#event").text('Leave Application Status');
        var_table= '<div class="table-responsive" id="apply_status">'+
                        '<table class="table table-striped">'+
                            '<thead>'+
                                '<tr>'+
                                    '<th>S.No</th>'+
                                    '<th>Notification</th>'+
                                    '<th>Status</th>'+            
                                '</tr>'+
                            '</thead>'+
                            '<tbody>'+                
                                '<tr>'+
                                    '<td>1,002</td>'+
                                    '<td>'+'amet'+'</td>'+
                                    '<td>'+'consectetur'+'</td>'+                
                                '</tr>'+                    
                            '</tbody>'+
                        '</table>'+
                    '</div>';
$("#notf_display").html(var_table);
});