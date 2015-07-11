<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="./assets/default/img/favicon.ico">

    <title>Guard Panel | CheckIn & CheckOut</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/default/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/default/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/dashboard.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/sidebar.css'); ?>">

    <style type="text/css"> 
        #category-11, #category-12, #category-21, #category-22, #category-23, #category-24, #category-25, #category-31, #category-32, #category-33, #category-4, #category-5{
            display: none;
        }
    </style>
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
            <a class="navbar-brand" href="#">&nbsp;<i class="fa fa-user fa-fw"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Student Panel&nbsp;</a>
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
                        echo $user_data->guard_name;
                        ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-header"></li>
                        <li>
                            <a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo 'student/logout' ;?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a> 
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
            	<li><a href="#dropdown" data-parent="#sidebar" data-toggle="collapse">Message<i class="fa fa-file-text fa-fw sub_icon"></i></a></li>      
                <div class="collapse" id="dropdown">
                    <li><a href="#" id="option-11">Inbox</a></li>
                    <li><a href="#" id="option-12">Sent</a></li>
                </div>   
                <li><a href="#dropdown" data-parent="#sidebar" data-toggle="collapse">Search By<i class="fa fa-file-text fa-fw sub_icon"></i></a></li>      
                <div class="collapse" id="dropdown">
                    <li><a href="#" id="option-21">Enrollment No.</a></li>
                    <li><a href="#" id="option-22">Name</a></li>
                    <li><a href="#" id="option-23">Date</a></li>
                    <li><a href="#" id="option-24">Year</a></li>
                    <li><a href="#" id="option-25">View all</a></li>
                </div> 
                <li><a href="#dropdown" data-parent="#sidebar" data-toggle="collapse">View List<i class="fa fa-file-text fa-fw sub_icon"></i></a></li>      
                <div class="collapse" id="dropdown">
                    <li><a href="#" id="option-31">Today</a></li>
                    <li><a href="#" id="option-32">Last Week</a></li>                
                    <li><a href="#" id="option-33">View all</a></li>
                </div> 
                <li><a href="#" id="option-4" data-parent="#sidebar">List of students out<i class="fa fa-book fa-fw sub_icon"></i></a></li>
                <li><a href="#" id="option-5" data-parent="#sidebar">Defaulter Students<i class="fa fa-file-text fa-fw sub_icon"></i></a></li>
            </div>
        </div>

        <div id="page-content-wrapper">
            <div class="row" style="margin-left: 0px; margin-right: 0px;">                                                   
                <div class="col-md-1"></div>                  
                <div class="col-md-10">
                    <div id="category-0">
                        <h1 class="page-header">Dashboard</h1>
                        <div class="row"> 
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
                                                    echo '<br>'.'<font size="5">'.$user_data->guard_name.'</font>';
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
                        </div>
                    </div>


                    <div id="category-11">
                    	<div class="col-md-12">
                    	<center>
                    		<form class="form-horizontal" action="<?php echo base_url('index.php/guard/find_student_roll'); ?>" method="post">
                                <div class="form-group">
                                    <div class="col-sm-7">
                                     	<div class="form-group input-group">
                                        	<span class="input-group-addon"><i class="fa fa-child"></i></span>
                                        	<input type="text" name="get_roll_no" class="form-control" placeholder="Student Roll No" required/>
                                    	</div>
                                    	<div style="text-align:center;">
                                    		<input type="submit" class="btn btn-success"  name="login_guard_btn" value="Find" />
                                   		</div>
                                    </div>
                                 </div>    
                            </form>
                    	</center>
                    	</div>    

						<div class="table-responsive" id="apply_status">
						<table class="table table-striped">
						<thead>
						<tr>
						<th>S.No</th>
						<th>From Roll No</th>
						<th>Student Name</th>
						<th>From </th>
						<th>To </th>
						<th>Hostel No </th>
						<th>Going To</th>
						<th>Status </th>


						</tr>
						</thead>
						<tbody>
						<?php
						if(isset($get_student_roll_no)){
						$count=0;
						foreach($get_student_roll_no as $row){
						$count=$count+1;
						echo '<tr>'.
						'<td>'.$count.'</td>'.
						'<td>'.$row->leave_from_roll_no.'</td>'.
						'<td>'.$row->leave_from_date.'</td>'.
						'<td>'.$row->leave_till_date.'</td>'.
						'<td>'.$row->leave_hostel_no.'</td>'.
						'<td>'.$row->leave_going_to.'</td>'.
						'<td>'.$row->leave_status.'</td>'.
						'</tr>';
						}  
						}
						?>

						</tbody>
						</table>
						</div>                     
                    </div>

                    <div id="category-12">

                    	<div class="col-md-12">
                    	<center>
                    		<form class="form-horizontal" action="<?php echo base_url('index.php/guard/find_student_name'); ?>" method="post">
                                <div class="form-group">
                                    <div class="col-sm-7">
                                     	<div class="form-group input-group">
                                        	<span class="input-group-addon"><i class="fa fa-child"></i></span>
                                        	<input type="text" name="get_roll_no" class="form-control" placeholder="Student Roll No" required/>
                                    	</div>
                                    	<div style="text-align:center;">
                                    		<input type="submit" class="btn btn-success"  name="login_guard_btn" value="Find" />
                                   		</div>
                                    </div>
                                 </div>    
                            </form>
                    	</center>
                    	</div>    

						<div class="table-responsive" id="apply_status">
						<table class="table table-striped">
						<thead>
						<tr>
						<th>S.No</th>
						<th>From Roll No</th>
						<th>Student Name</th>
						<th>From </th>
						<th>To </th>
						<th>Hostel No </th>
						<th>Going To</th>
						<th>Status </th>


						</tr>
						</thead>
						<tbody>
						<?php
						if(isset($get_student_name)){
						$count=0;
						foreach($get_student_name as $row){
						$count=$count+1;
						echo '<tr>'.
						'<td>'.$count.'</td>'.
						'<td>'.$row->leave_from_roll_no.'</td>'.
						'<td>'.$row->leave_student_name.'</td>'.
						'<td>'.$row->leave_from_date.'</td>'.
						'<td>'.$row->leave_till_date.'</td>'.
						'<td>'.$row->leave_hostel_no.'</td>'.
						'<td>'.$row->leave_going_to.'</td>'.
						'<td>'.$row->leave_status.'</td>'.
						'</tr>';
						}  
						}
						?>

						</tbody>
						</table>
						</div> 	                    
                    </div>

                    <div id="category-21">

                    </div>

                    <div id="category-22">

                    </div>

                    <div id="category-23">

                    </div>

                    <div id="category-24">

                    </div>  

                    <div id="category-25">

                    </div>

                    <div id="category-31">

                    </div>

                    <div id="category-32">

                    </div>

                    <div id="category-33">

                    </div>

                    <div id="category-4">

                    </div>

                    <div id="category-5">

                    </div>                          
                </div>
                <div class="col-md-1"></div>               
            </div>
        </div>

        <script src="<?php echo base_url('assets/default/js/jquery.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/default/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/sidebar.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/guard.js'); ?>"></script>    
    </body>
</html>