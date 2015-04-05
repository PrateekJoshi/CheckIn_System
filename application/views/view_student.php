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
                                <a href="<?php echo 'student/logout' ;?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a> 
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
                    <li><a href="#" data-parent="#sidebar">See assignments<i class="fa fa-book fa-fw sub_icon"></i></a></li>
                    <li id="leave_status_btn"><a href="#" data-parent="#sidebar">Leave application status<i class="fa fa-file-text fa-fw sub_icon"></i></a></li>
                    <li id="#"><a href="#demo3" data-toggle="collapse" data-parent="#sidebar">Application Form<i class="fa fa-file-text fa-fw sub_icon"></i></a></li>      
                        <div class="collapse" id="demo3">
                            <li id="leave_btn"><a href="#" >For leave</a></li>
                            <li><a href="#" >For hostel change</a></li>
                            <li><a href="#" >Complaint</a></li>
                            <li><a href="#" >Other</a></li>
                        </div>            
                    <li><a href="#" data-parent="#sidebar">Send Message<i class="fa fa-envelope fa-fw sub_icon"></i></a></li>                
                    <li><a href="#" data-parent="#sidebar">History<i class="fa fa-history fa-fw sub_icon"></i></a></li>
                    <li><a href="#" data-parent="#sidebar">Announcements<i class="fa fa-sign-out fa-fw sub_icon"></i></a></li>
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
                            </div>
                        </div>                                              
                    </div>
                </div>
            </div>
        </div>
      
        
        <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
         <script src="<?php echo base_url('assets/js/menu_change.js'); ?>"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script type="text/javascript">
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("active");
            });
        </script>
        
    </body>
</html>