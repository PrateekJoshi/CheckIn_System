
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


<title>Guard Panel | CheckIn & CheckOut</title>
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
        <a class="active navbar-brand icon-bar-vertical" href="#">&nbsp;<i class="fa fa-user fa-fw"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Guard Panel&nbsp;</a>
    </div>

    <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">  
            <li class="active dropdown icon-bar-vertical">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-envelope fa-fw"></i><span class="badge">42</span>
                    <!-- <i class="fa fa-caret-down"></i> -->
                </a>
                <ul class="dropdown-menu dropdown-messages">
                    <li>
                        <a href="#">
                            <div>
                                <strong>John Smith</strong>
                                <span class="pull-right text-muted">
                                    <em>Yesterday</em>
                                </span>
                            </div>
                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <strong>John Smith</strong>
                                <span class="pull-right text-muted">
                                    <em>Yesterday</em>
                                </span>
                            </div>
                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <strong>John Smith</strong>
                                <span class="pull-right text-muted">
                                    <em>Yesterday</em>
                                </span>
                            </div>
                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
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
                    <i class="fa fa-bell fa-fw"></i><span class="badge">42</span>  
                    <!-- <i class="fa fa-caret-down"></i> -->
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
                                 echo $user_data->guard_name;

                                 ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                <!-- name of the user here.... -->
                <ul class="dropdown-menu">
                    <li class="dropdown-header">Guard</li>
                    <li>
                        <a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="<?php echo base_url().'index.php/guard/logout' ;?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a> 
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
            <li id="leave_btn"><a href="#demo3" data-toggle="collapse" data-parent="#sidebar">Pending Requests<i class="fa fa-file-text fa-fw sub_icon"></i></a></li>      
                <div class="collapse" id="demo3">
                    <li><a id="leave_btn" href="<?php echo base_url('index.php/guard/see_requests') ;?>">For leave</a></li>
                    <li><a href="#" >For hostel change</a></li>
                    <li><a href="#" >Complaint</a></li>
                    <li><a href="#" >Other</a></li>
                </div>        
            <li id="leave_btn"><a href="#" data-toggle="collapse" data-parent="#sidebar">History<i class="fa fa-file-text fa-fw sub_icon"></i></a></li>      
            <li><a href="#" data-parent="#sidebar">Send Message<i class="fa fa-envelope fa-fw sub_icon"></i></a></li>                
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
                            <div class="col-md-3">
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
                                                    echo '<br>'.'<font size="5">'.$user_data->guard_name.'</font>';?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
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

                            <div class="col-md-3">
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
                            <div id="notf_display">
                            <div class="col-md-6">
                                <form class="form-horizontal" action="<?php echo base_url('index.php/guard/find_student_roll'); ?>" method="post">
                                <div class="form-group">
                                <div class="col-sm-7">
                                 <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-child"  ></i></span>
                                    <input type="text" name="get_roll_no" class="form-control" placeholder="Student Roll No" required/>
                                </div>
                                <div style="text-align:center;">
                                <input type="submit" class="btn btn-success"  name="login_guard_btn" value="Find" />
                               </div>

                                </div>
                                </div>    
                                </form>
                            </div>

                            <div class="table-responsive col-md-12" id="apply_status">
                                    <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Select</th>
                                            <th>S.No</th>
                                            <th>From Roll No</th>
                                            <th>Student Name</th>
                                            <th>From </th>
                                            <th>To </th>
                                            <th>Hostel No </th>
                                            <th>Going To</th>
                                            <th>Status </th>
                                            <th>IN/OUT</th>
                                          
                                           
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                        
                                       if(isset($get_student_roll_no)){
                                       $roll_no=$this->input->post('get_roll_no');
                                       echo '<img src='.'\'';
                                       echo base_url('assets/uploads/profile_pics/'.$roll_no.'.jpg');
                                       echo '\''.'height="120" width="180"'.'>';
                                       $count=0;
                                       echo '<form action="students_out" method="post">';
                                       foreach($get_student_roll_no as $row){
                                        $count=$count+1;
                                             echo '<tr>'.
                                            '<td>'.'<input type="checkbox" name="check_list_out[]" value='.$row->leave_id.'>'.'</td>'.
                                            '<td>'.$count.'</td>'.
                                            '<td>'.$row->leave_from_roll_no.'</td>'.
                                            '<td>'.$row->leave_student_name.'</td>'.
                                            '<td>'.$row->leave_from_date.'</td>'.
                                            '<td>'.$row->leave_till_date.'</td>'.
                                            '<td>'.$row->leave_hostel_no.'</td>'.
                                             '<td>'.$row->leave_going_to.'</td>'.
                                            '<td>'.$row->leave_status.'</td>'.
                                            '<td>'.$is_student_outside;
                                            '</td>'.
                                             '</tr>';
                                       }  

                                   }


                                       ?>
                                       
                                    </tbody>
                                </table>
                            </div>
                                 <?php   echo '<input type="submit" name="approve_leave_status" class="btn btn-success btn-circle" value="IN">';?>
                                  <?php   echo '<input type="submit" name="approve_leave_status" class="btn btn-danger btn-circle" value="OUT">';
                                   echo '</form>';
                                  ?>
                            </div>
                        </div>                             
                    
                        
                            </div>

                    </div>
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
<script src="<?php echo base_url('assets/js/apply_leave.js'); ?>"></script>   
</body>
</html>

