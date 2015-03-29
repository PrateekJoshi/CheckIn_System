
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Student Panel</title>

    <!-- Bootstrap Core CSS -->
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">

    <!-- MetisMenu CSS -->
   
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bower_components/metisMenu/dist/metisMenu.min.css'); ?>">

    <!-- Timeline CSS -->

      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dist/css/timeline.css'); ?>">

    <!-- Custom CSS -->
  
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dist/css/sb-admin-2.css'); ?>">

    <!-- Morris Charts CSS -->
   
     <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bower_components/morrisjs/morris.css'); ?>">

    <!-- Custom Fonts -->
   
     <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bower_components/morrisjs/morris.css'); ?>">

      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">

  <style type="text/css">
#message {
    position: fixed;
    top: 40px;
    left: 0;
    width: 100%;
}
#inner-message {
    margin: 1 auto;
}
    </style>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Students Panel</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">

                <li class="dropdown">
                    
                    
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->

                

               
               <!--Notifications dropdown-->
               <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> Requests
                                    <span class="pull-right text-muted small">See Requests</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i>Message
                                    <span class="pull-right text-muted small">View Messages</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> See Assignments
                                    <span class="pull-right text-muted small">View</span>
                                </div>
                            </a>
                        </li>
                       <!-- <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>-->

                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                     <!--end Notifications dropdown-->
                    <!-- /.dropdown-alerts -->
                </li>


                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="index.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo 'student/logout' ;?>"><i class="fa fa-sign-out fa-fw"></i>Logout</a>  <!--to call logout func in student controller-->
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search User">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#" id="popup"><i class="fa fa-bar-chart-o fa-fw"></i>Add Question</a>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#" id="opt"><i class="fa fa-table fa-fw"></i>Top Achievers</a>
                        </li>
                        <li>
                            <a href="#" id="popup_delete"><i class="fa fa-trash fa-fw"></i>Delete a User</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user-md fa-fw"></i>Create a Admin</a>
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">


<div class="col-lg-3 col-md-6">
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
                                         echo '<br>'.'<font size="5">'.$user_data->name.'</font>';
                                         ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>

               <!--   <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-group fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Total users</div>
                                    <div>Total Users</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
                <div class="col-lg-5 col-md-6">
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
                <div class="col-lg-3 col-md-6">
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
  
    <!-- /#wrapper -->

    <!-- jQuery -->
      <script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js'); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
     <script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
     <script src="<?php echo base_url('assets/bower_components/metisMenu/dist/metisMenu.min.js'); ?>"></script>


    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url('assets/bower_components/raphael/raphael-min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/bower_components/morrisjs/morris.min.js'); ?>"></script>
     <script src="<?php echo base_url('assets/js/morris-data.js'); ?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('assets/dist/js/sb-admin-2.js'); ?>"></script>
    <!--Text area show-->


</body>

</html>





<!--End-->