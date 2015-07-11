
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
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dist/css/sb-admin-2.css'); ?>">
        <title>Student Panel | CheckIn & CheckOut</title>

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
                <a class="navbar-brand" href="#">&nbsp;<i class="fa fa-user fa-fw"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Students Panel&nbsp;</a>
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user fa-fw"></i>&nbsp;&nbsp;&nbsp; <?php
                                         $user_data = $this->session->userdata('0');
                                         echo $user_data->student_name;
                                         ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                        <!-- name of the user here.... -->
                        <ul class="dropdown-menu">
                            <li class="dropdown-header"></li>
                            <li>
                                <a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="<?php echo base_url('index.php/student/logout') ;?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a> 
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
                    <li id="#"><a href="#demo4" data-toggle="collapse" data-parent="#sidebar">Application Status<i class="fa fa-file-text fa-fw sub_icon"></i></a></li>      
                        <div class="collapse" id="demo4">
                            <li id="status_leave_btn"><a href="#" >Leave</a></li>
                            <li id="status_hostel_btn"><a href="#" >Hostel Change</a></li>
                        </div> 
                    <li id="#"><a href="#demo3" data-toggle="collapse" data-parent="#sidebar">Application Form<i class="fa fa-file-text fa-fw sub_icon"></i></a></li>      
                        <div class="collapse" id="demo3">
                            <li id="leave_btn"><a href="#" >For leave</a></li>
                            <li id="hostel_change_btn"><a href="#" >For hostel change</a></li>
                        </div>            
                   <li id="#"><a href="#demo5" data-toggle="collapse" data-parent="#sidebar">Messages<i class="fa fa-file-text fa-fw sub_icon"></i></a></li>      
                        <div class="collapse" id="demo5">
                            <li id="send_msg_btn"><a href="#" >Send Message</a></li>
                            <li id="received_msg_btn"><a href="#">Received message</a></li>
                            <li id="sent_msg_btn"><a href="#">Sent messages</a></li>
                        </div>                
                    <li id="assm_btn"><a href="#" data-parent="#sidebar">Assignments<i class="fa fa-history fa-fw sub_icon"></i></a></li>
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
                                                        <?php 
                                                         //$user_data = $this->session->userdata('0');
                                                         echo '<img src="'.base_url('assets/uploads/profile_pics/'.$this->session->userdata('roll_no').'.jpg').'" height="80" width="90">';
                                                        ?>
                                                    </div>
                                                    <div class="col-xs-9 text-right">
                                                        <div class="huge"></div>
                                                        <div>Welcome  <?php
                                         $user_data = $this->session->userdata('0');
                                         echo '<br>'.'<font size="5">'.$user_data->student_name.'</font>';
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

                                    <h3 class="sub-header"><div id="event">Notifcations</div></h3>
                                    <div id="display_menu1" style="display:block">
                                        <div class="table-responsive" id="apply_status">
                                             <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                   <th>S.No</th>
                                                    <th>Going To</th>
                                                    <th>From Date</th>
                                                    <th>To Date </th>
                                                    <th>Message</th>
                                                    <th>Seen</th>
                                                    <th>Status</th>
                                                
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <?php
                                               $count=0;
                                               foreach($leave_req as $row){
                                                $count=$count+1;
                                                echo '<tr>'.
                                                    '<td>'.$count.'</td>'.
                                                    '<td>'.$row->leave_going_to.'</td>'.
                                                    '<td>'.$row->leave_from_date.'</td>'.
                                                    '<td>'.$row->leave_till_date.'</td>'.
                                                    '<td>'.$row->leave_other_info.'</td>'.
                                                    '<td>'.$row->leave_seen.'</td>'.
                                                    '<td>'.$row->leave_status.'</td>'.
                                                    '</tr>';
                                               }  
                                               ?>
                                                
                                                  
                                            </tbody>
                                        </table>
                                        </div>
                                    </div>                                    
                                </div>                             
                                <!--testing jquery-->
                                       '<div class="row1" id="display_menu2" style="display:none">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <form class="form-horizontal" action="student/apply_leave_validation" method="post">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-5 control-label">Select Warden</label>
                                    <div class="col-sm-7">
                                        <select class="form-control" id="sel1" name="leave_warden_code">
                                            <option value="99100">Mr.Pradeep Garg</option>
                                            <option value="99101">Dr.Neelkanth</option>
                                        </select>
                                    </div>
                                </div>
                                 <div class="form-group" >
                                    <label for="inputPassword3" class="col-sm-5 control-label">Going to</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="leave_going_to">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-5 control-label">From:</label>
                                    <div class="col-sm-7">
                                        <input type="date" class="form-control" name="leave_from_date">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-5 control-label">To:</label>
                                    <div class="col-sm-7">
                                        <input type="date" class="form-control" name="leave_till_date">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-5 control-label">Hostel No.:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="leave_hostel_no">
                                    </div>
                                </div>
                                <div class = "form-group">
                                    <label for = "reg-resume_headline" class = "col-md-5 control-label">Message:</label>
                                    <div class = "col-md-7">
                                        <textarea class="form-control" rows="3" style = "border-radius: 0px;" name="leave_other_info"></textarea>
                                    </div>
                                </div>
        
                                <div class="form-group">
                                    <div class="col-sm-6"></div>
                                    <div class="col-sm-6">
                                        <input type="submit" class="btn btn-info" name="btn_leave_submit" value="Send Application">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-3"></div>
                    </div>;  

                                <!--end testing-->

                                 <!--Form for hostel change-->
                                       '<div class="row1" id="display_menu3" style="display:none">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <form class="form-horizontal" action="student/apply_hostel_validation" method="post">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-5 control-label">Select Warden</label>
                                    <div class="col-sm-7">
                                        <select class="form-control" id="sel1" name="warden_code">
                                            <option value="99100">Mr.Pradeep Garg</option>
                                            <option value="99101">Dr.Neelkanth</option>
                                        </select>
                                    </div>
                                </div>
                                 <div class="form-group" >
                                    <label for="inputPassword3" class="col-sm-5 control-label">Applying for hostel:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="to_hostel">
                                    </div>
                                </div>
                                 
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-5 control-label">Current hostel:</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="from_hostel">
                                    </div>
                                </div>
                                <div class = "form-group">
                                    <label for = "reg-resume_headline" class = "col-md-5 control-label">Message:</label>
                                    <div class = "col-md-7">
                                        <textarea class="form-control" rows="3" style = "border-radius: 0px;"  name="message"></textarea>
                                    </div>
                                </div>
        
                                <div class="form-group">
                                    <div class="col-sm-6"></div>
                                    <div class="col-sm-6">
                                        <input type="submit" class="btn btn-info" name="btn_hostel_submit" value="Send Application">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-3"> </div>

                    </div>


                                <!--end testing-->
                                <!--hostel change status-->
                                   <div id="display_menu4" style="display:none;margin-left:30px;">
                                        <div class="table-responsive" id="apply_status">
                                             <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                   <th>S.No</th>
                                                   <th>Current Hostel</th>
                                                    <th>To Hostel</th>
                                                    <th>Message</th>
                                                    <th>Date Submitted</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <?php
                                               $count=0;
                                               foreach($hostel_req as $row){
                                                $date_submit = strtotime($row->date_submit);
                                                $count=$count+1;
                                                echo '<tr>'.
                                                    '<td>'.$count.'</td>'.
                                                    '<td>'.$row->from_hostel.'</td>'.
                                                    '<td>'.$row->to_hostel.'</td>'.
                                                    '<td>'.$row->message.'</td>'.
                                                    '<td>'.date('d/m/Y', $date_submit).'</td>'.
                                                    '<td>'.$row->status.'</td>'.
                                                    '</tr>';
                                               }  
                                               ?>
                                                
                                                  
                                            </tbody>
                                        </table>
                                        </div>
                                    </div>                                    
                                </div>            

                                <!--end hostel change status-->

                                
                                 <!--Send Message Form-->
                                       '<div class="row1" id="display_menu5" style="display:none">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <form class="form-horizontal" action="student/send_message" method="post">
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


                                <!--end testing-->

                                <!--message received table-->
                                   <div id="display_menu6" style="display:none;">
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
                                   <div id="display_menu7" style="display:none;margin-left:30px;">
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

                                <!--end message received table-->


                                <!--assignment recieved table-->
                                   <div id="display_menu8" style="display:none;">
                                        <div class="table-responsive" id="apply_status">
                                             <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                   <th>S.No</th>
                                                   <th>From Faculty</th>
                                                   <th>Remark</th>
                                                   <th>Date Submitted</th>
                                                   <th>Last Date</th>
                                                   <th>Assignment</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <?php
                                               $count=0;
                                               foreach($assm_req as $row){
                                                $date1= strtotime($row->date_submit);
                                                $date2= strtotime($row->last_date);
                                                $count=$count+1;
                                                echo '<tr>'.
                                                    '<td>'.$count.'</td>'.
                                                    '<td>'.$row->from_warden.'</td>'.
                                                    '<td>'.$row->remark.'</td>'.
                                                    '<td>'.date('d/m/Y', $date1).'</td>'.
                                                    '<td>'.date('d/m/Y', $date2).'</td>'.
                                                    '<td>'.'<a href=\''. base_url('/assets/uploads/assignments').'/'.$row->file_name.'\''.'target="_blank">'.'Download'.'</a>'.'</td>'.
                                                    '</tr>';
                                               }  
                                               ?>
                                                
                                                  
                                            </tbody>
                                        </table>
                                        </div>
                                    </div>                                    
                                </div>            

                                <!--end message received table-->

                                
                            </div>
                        </div>                                              
                    </div>
                </div>
            </div>
        </div>
      
        
        <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
         <script src="<?php echo base_url('assets/js/menu_student.js'); ?>"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script type="text/javascript">
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("active");
            });
        </script>
        
    </body>
</html>

<?php
if(isset($msg_notf)){
    echo $msg_notf;
}
?>
