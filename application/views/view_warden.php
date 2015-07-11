<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="./favicon.ico">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dist/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dist/css/font-awesome.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dist/css/dashboard.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dist/css/sidebar.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">

        <title>Warden Panel | CheckIn & CheckOut</title>
    </head>

    <body>


        <!-- Navbar here -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">&nbsp;<i class="fa fa-user fa-fw"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Warden Panel&nbsp;</a>
            </div>

            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">  
                    <li class="active dropdown icon-bar-vertical">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-envelope fa-fw"></i>&nbsp;&nbsp;<span class="badge">42</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>John Smith</strong>
                                        <div>Lorem ipsum dolor sit amet, consectetur...</div>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>John Smith</strong>
                                        <div>Lorem ipsum dolor sit amet, consectetur...</div>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>John Smith</strong>
                                        <div>Lorem ipsum dolor sit amet, consectetur...</div>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>Read All Messages</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="active dropdown icon-bar-vertical">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell fa-fw"></i>&nbsp;&nbsp;<span class="badge">42</span>  
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-comment fa-fw"></i> New Comment
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> Message Sent
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-tasks fa-fw"></i> New Task
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="active dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user fa-fw"></i>&nbsp;&nbsp;&nbsp;<?php
                                         $user_data = $this->session->userdata('0');
                                         echo $user_data->warden_name;

                                         ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                        <!-- name of the user here.... -->
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">Admin</li>
                            <li>
                                <a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="<?php echo base_url().'index.php/warden/logout' ;?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a> 
                                <!--to call logout func in student controller-->
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="wrapper">
            <div id="sidebar-wrapper">
                <div id="sidebar_menu" class="sidebar-nav">
                    <li class="sidebar-brand"><a id="menu-toggle" href="#">Menu<i class="fa fa-bars fa-fw" id="main_icon"></i></a></li>
                </div>
                <div class="sidebar-nav" id="sidebar">     
                    <li><a href="#" data-parent="#sidebar">See Requests<i class="fa fa-sign-out fa-fw sub_icon"></i></a></li>
                    <li id="#"><a href="#demo3" data-toggle="collapse" data-parent="#sidebar">Pending Requests<i class="fa fa-file-text fa-fw sub_icon"></i></a></li>      
                        <div class="collapse" id="demo3">
                            <li id="leave_btn"><a href="#">For leave</a></li>
                            <li id="hostel_btn"><a href="#">For hostel change</a></li>
                            <li><a href="">Other</a></li>
                        </div>        
                     <li id="#"><a href="#demo4" data-toggle="collapse" data-parent="#sidebar">Messages<i class="fa fa-file-text fa-fw sub_icon"></i></a></li>      
                        <div class="collapse" id="demo4">
                            <li id="send_msg_btn"><a href="#">Send Message</a></li>
                            <li id="received_msg_btn"><a href="#">Received Messages</a></li>
                            <li id="sent_msg_btn"><a href="#">Sent Messages</a></li>
                        </div>      
                        <li id="#"><a href="#demo5" data-toggle="collapse" data-parent="#sidebar">Assignments<i class="fa fa-file-text fa-fw sub_icon"></i></a></li>      
                        <div class="collapse" id="demo5">
                            <li id="send_assm"><a href="#">Send Assignment</a></li>
                            <li id="sent_assm"><a href="#">Sent Assignments</a></li>
                        </div>             
                </div>
            </div>
          
            <div id="page-content-wrapper">
                <div class="page-content inset">
                    <div class="row">                                                   
                        <div class="col-md-12" style="background-color:#fff;margin-bottom:0px; margin-top: -10px;">
                            <div class="row"> 
                                <div class="col-md-1"></div>                  
                                <div class="col-md-10">
                                    <h1 class="page-header">Dashboard</h1>
                                    <div class="col-md-4">
                                        <div class="panel panel-red">
                                            <div class="panel-heading">
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <i class="fa fa-user fa-5x"></i>
                                                    </div>
                                                    <div class="col-xs-9 text-right">
                                                        <div class="huge"></div>
                                                        <div>Welcome  <?php
                                         $user_data = $this->session->userdata('0');
                                         echo '<br>'.'<font size="5">'.$user_data->warden_name.'</font>';

                                         ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="panel panel-green">
                                            <div class="panel-heading">
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <i class="fa fa-tasks fa-5x"></i>
                                                    </div>
                                                    <div class="col-xs-9 text-right">
                                                        <div class="huge">0</div>
                                                        <div>Request Pending</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="panel panel-yellow">
                                            <div class="panel-heading">
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <i class="fa fa-calendar fa-4x"></i>
                                                    </div>
                                                    <div class="col-xs-9 text-right">
                                                        <div class="huge">Date</div>
                                                        <div><?php echo '<font size="4">'.date('Y-m-d').'</font>';?></div>
                                                    </div>
                                                </div>
                                            </div>                        
                                        </div>
                                    </div>

                                    <h3 class="sub-header"><div id="event">Leave applications</div></h3>
                                    <div id="display_menu1" style="display:block;">
                                        <div class="table-responsive" id="apply_status">
                                            <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                   <th>S.No</th>
                                                    <th>From Roll No</th>
                                                    <th>Student Name</th>
                                                    <th>Going To</th>
                                                    <th>From </th>
                                                    <th>To </th>
                                                    <th>Hostel No </th>
                                                    <th>Other Info </th>
                                                    <th>Status </th>
                                                    <th>Change Status</th>
                                                
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <?php
                                               $count=0;
                                               foreach($app_leave as $row){
                                         
                                                $count=$count+1;
                                                $from_date = strtotime($row->leave_from_date);
                                                $till_date=strtotime($row->leave_till_date);
                                                echo '<tr>'.
                                                    '<td>'.$count.'</td>'.
                                                    '<td>'.$row->leave_from_roll_no.'</td>'.
                                                    '<td>'.$row->leave_student_name.'</td>'.
                                                    '<td>'.$row->leave_going_to.'</td>'.
                                                    '<td>'.date('d/m/Y', $from_date).'</td>'.
                                                    '<td>'.date('d/m/Y', $till_date).'</td>'.
                                                    '<td>'.$row->leave_hostel_no.'</td>'.
                                                    '<td>'.$row->leave_other_info.'</td>'.
                                                    '<td>'.$row->leave_status.'</td>'.
                                                    '<td>'
                                                    .'<form action="approve_leave" method="post">'.
                                                    '<input type="hidden" name="approve_leave_id" value='.'\''.$row->leave_id.'\''.'>'.
                                                    '<input type="submit" name="approve_leave_status" class="btn btn-info btn-circle" value="Approve">'.
                                                    '<input type="submit" name="approve_leave_status" class="btn btn-danger btn-circle" value="&nbsp;&nbsp;Reject&nbsp;&nbsp;">'.
                                                     '</form>'.
                                                     '</td>'.'</tr>';
                                               }  
                                               ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    </div>
                                </div>                             
                                <!--Form for hostel change-->
                                       '<div class="row1" id="display_menu2" style="display:none">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                                    <div id="notf_display">
                                        <div class="table-responsive" id="apply_status">
                                            <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                   <th>S.No</th>
                                                    <th>From Roll No</th>
                                                    <th>Student Name</th>
                                                    <th>From Hostel</th>
                                                    <th>To Hostel </th>                                           
                                                    <th>Message</th>
                                                    <th>Status </th>
                                                    <th>Change Status</th>
                                                
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <?php
                                               $count=0;
                                               foreach($app_hostel as $row){

                                                $count=$count+1;
                                              
                                                echo '<tr>'.
                                                    '<td>'.$count.'</td>'.
                                                    '<td>'.$row->roll_no.'</td>'.
                                                    '<td>'.$row->student_name.'</td>'.
                                                    '<td>'.$row->from_hostel.'</td>'.
                                                    '<td>'.$row->to_hostel.'</td>'.
                                                    '<td>'.$row->message.'</td>'.
                                                    '<td>'.$row->status.'</td>'.
                                                    '<td>'
                                                    .'<form action="approve_hostel_change" method="post">'.
                                                    '<input type="hidden" name="approve_hostel_id" value='.'\''.$row->id.'\''.'>'.
                                                    '<input type="submit" name="approve_hostel_status" class="btn btn-info btn-circle" value="Approve">'.
                                                    '<input type="submit" name="approve_hostel_status" class="btn btn-danger btn-circle" value="&nbsp;&nbsp;Reject&nbsp;&nbsp;">'.
                                                     '</form>'.
                                                     '</td>'.'</tr>';
                                               }  
                                               ?>
                                            </tbody>
                                        </table>
                                    </div>
                        </div>
                      
                    </div>

                                <!--end testing-->
                            
                            </div>
                            <!--Send Message Form-->
                                       '<div class="row1" id="display_menu4" style="display:none">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <form class="form-horizontal" action="send_message" method="post">
                                 <div class="form-group" >

                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="to_roll_no" placeholder="Student roll no / warden code" required>
                                    </div>
                                </div>
                                 <div class = "form-group">
                                    <div class = "col-md-7">
                                        <textarea class="form-control" rows="3" style = "border-radius: 0px;" name="message" placeholder="message" required></textarea>
                                    </div>
                                </div>
        
                                <div class="form-group" style="float:left;">
                                    <div class="col-sm-6"></div>
                                    <div class="col-sm-6" >
                                        <input type="submit" class="btn btn-info" name="btn_message_submit" value="Send Message">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-3"> </div>

                    </div>


                                <!--end message form-->
                                <!--message received table-->
                                   <div id="display_menu5" style="display:none;margin-left:30px;">
                                        <div class="table-responsive" id="apply_status">
                                             <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                   <th>S.No</th>
                                                   <th>From Roll No</th>
                                                   <th>Name</th>
                                                   <th>Message</th>
                                                   <th>Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <?php
                                               $count=0;
                                               foreach($message_req as $row){
                                                $date= strtotime($row->date);
                                                $count=$count+1;
                                                echo '<tr>'.
                                                    '<td>'.$count.'</td>'.
                                                    '<td>'.$row->from_roll_no.'</td>'.
                                                    '<td>'.$row->from_name.'</td>'.
                                                    '<td>'.$row->message.'</td>'.
                                                    '<td>'.date('d/m/Y', $date).'</td>'.
                                                    '</tr>';
                                               }  
                                               ?>
                                                
                                                  
                                            </tbody>
                                        </table>
                                        </div>
                                    </div>                                    
                                </div>            

                                <!--end message received table-->

                                 <!--message sent  table-->
                                   <div id="display_menu6" style="display:none;margin-left:30px;">
                                        <div class="table-responsive" id="apply_status">
                                             <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                   <th>S.No</th>
                                                   <th>To Roll No</th>
                                                   <th>Message</th>
                                                   <th>Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <?php
                                               $count=0;
                                               foreach($message_sent_req as $row){
                                                $date= strtotime($row->date);
                                                $count=$count+1;
                                                echo '<tr>'.
                                                    '<td>'.$count.'</td>'.
                                                    '<td>'.$row->to_roll_no.'</td>'.
                                                    '<td>'.$row->message.'</td>'.
                                                    '<td>'.date('d/m/Y', $date).'</td>'.
                                                    '</tr>';
                                               }  
                                               ?>
                                                
                                                  
                                            </tbody>
                                        </table>
                                        </div>
                                    </div>                                    
                                </div>            

                                <!--end message sent table-->

                                <!--Form for assignment upload-->
                                       '<div class="row1" id="display_menu7" style="display:none;">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <form class="form-horizontal" action="upload_assignment" method="post" enctype="multipart/form-data">
                                 <div class="form-group" >
                                    <label for="inputPassword3" class="col-sm-5 control-label">From Roll No:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="from_roll_no">
                                    </div>
                                </div>
                                 
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-5 control-label">To Roll No:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="to_roll_no">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-5 control-label">Last date To Submit:</label>
                                    <div class="col-sm-7">
                                        <input type="date" class="form-control" name="last_date">
                                    </div>
                                </div>
                                <div class = "form-group">
                                    <label for = "reg-resume_headline" class = "col-md-5 control-label">Remark:</label>
                                    <div class = "col-md-7">
                                        <textarea class="form-control" rows="3" style = "border-radius: 0px;"  name="remark"></textarea>
                                    </div>
                                </div>
                                 <div class = "form-group">
                                    <label for = "reg-resume_headline" class = "col-md-5 control-label">Upload File:</label>
                                    <div class = "col-md-7">
                                       <input type="file" class="form-control" name="upload_file">
                                    </div>
                                </div>
        
                                <div class="form-group">
                                    <div class="col-sm-6"></div>
                                    <div class="col-sm-6">
                                        <input type="submit" class="btn btn-info" name="btn_hostel_submit" value="Send Assignment">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-3"> </div>

                    </div>


                                <!--end testing-->

                                <!--assignment sent  table-->
                                   <div id="display_menu8" style="display:none;margin-left:30px;">
                                        <div class="table-responsive" id="apply_status">
                                             <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                   <th>S.No</th>
                                                   <th>To Roll Nos.</th>
                                                   <th>Remark</th>
                                                   <th>Date Submitted</th>
                                                   <th>Last Date</th>
                                                   <th>Assignmnet</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <?php
                                               $count=0;
                                               foreach($file_req as $row){
                                                $date1= strtotime($row->date_submit);
                                                $date2= strtotime($row->last_date);
                                                $count=$count+1;
                                                echo '<tr>'.
                                                    '<td>'.$count.'</td>'.
                                                    '<td>';
                                                     foreach ($roll_req[$count] as $key) {
                                                     	echo $key->to_roll_no.' , ';
                                                     }
                                                  
                                                echo '</td>'.
                                                    '<td>'.$row->remark.'</td>'.
                                                    '<td>'.date('d/m/Y', $date1).'</td>'.
                                                    '<td>'.date('d/m/Y', $date2).'</td>'.
  '<td>'.'<a href=\''. base_url('/assets/uploads/assignments').'/'.$row->file_name.'\''.'target="_blank">'.'View'.'</a>'.'</td>'.
                                                    '</tr>';
                                               }  
                                               ?>
                                                
                                                  
                                            </tbody>
                                        </table>
                                        </div>
                                    </div>                                    
                                </div>            

                                <!--end message sent table-->


                        </div>                                              
                    </div>
                </div>
            </div>
        </div>
         
        <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script type="text/javascript">
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("active");
            });
        </script>
        <script src="<?php echo base_url('assets/js/menu_warden.js'); ?>"></script>   
    </body>
</html>

<!--see updated table after changing status-->
<?php
if(isset($type)){
if($type=='hostel'){
echo '<script>'.
'$(document).ready(function(){
$('.'\'#hostel_btn\')'.'.trigger('.'\'click\')'.';'.
'});'.
'</script>';
}
if($type=='leave'){
echo '<script>'.
'$(document).ready(function(){
$('.'\'#leave_btn\')'.'.trigger('.'\'click\')'.';'.
'});'.
'</script>';
}
}
?>

<!--end-->