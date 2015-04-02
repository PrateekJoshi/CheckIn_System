$("#leave_status_btn").click(function(e) {
    $("#event").text('Leave Application Status');
        var_table= '<div class="table-responsive">'+
                                             '<table class="table table-striped">'+
                                           '<thead>'+
                                                '<tr>'+
                                                   '<th>'.'SNo'.'</th>'+
                                                    '<th>'.'Going To'.'</th>'+
                                                    '<th>'.'From Date'.'</th>'+
                                                    '<th>'.'To Date '.'</th>'+
                                                    '<th>'.'Message'.'</th>'+
                                                    '<th>'.'Seen'.'</th>'+
                                                    '<th>'.'Status'.'</th>'+
                                                
                                                '</tr>'+
                                            '</thead>'+
                                            '<tbody>'+
                                               '<?php
                                               $count=0;
                                               foreach($leave_req as $row){
                                                $count=$count+1;
                                                echo'+ '\'<tr>\''+'.'+
                                                    '\'<td>\''+'.'+'$count'+'.'+'\'</td>\''+'.'+
                                                    '\'<td>\''+'.'+'$row->leave_going_to'+'.'+'\'</td>\''+'.'+
                                                    '\'<td>\''+'.'+'$row->leave_from_date'+'.'+'\'</td>\''+'.'+
                                                    '\'<td>\''+'.'+'$row->leave_till_date'+'.'+'\'</td>\''+'.'+
                                                    '\'<td>\''+'.'+'$row->leave_other_info'+'.'+'\'</td>\''+'.'+
                                                    '\'<td>\''+'.'+'$row->leave_status'+'.'+'\'</td>\''+'.'+
                                                    '\'<td>\''+'.'+'$row->leave_seen'+'.'+'\'</td>\''+'.'+
                                                    '</tr>'+';'+

                                               '}'+  


                                               '?>'+
                                                
                                                  
                                            '</tbody>'+
                                         '</table>'+
                                         '</div>';                                       
$("#notf_display").html(var_table);
});