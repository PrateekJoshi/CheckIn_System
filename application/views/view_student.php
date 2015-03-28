<?php ?> 
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Panel</title>

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



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                <a class="navbar-brand" href="index.php">Admin Panel</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    
                    
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
               
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
                        <li><a href="../../logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                                    <div class="huge">Student Name</div>
                                    <div>Welcome</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>


                <div class="col-lg-3 col-md-6">
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
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">total ques</div>
                                    <div>Total Questions</div>
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
                                    <div>Date</div>
                                </div>
                            </div>

                        </div>
                        
                    </div>
                </div>
<div class="form-group" id="area" style="display:none">
  <label for="comment">Add Question:</label>
  <form method="POST" action="index.php">
  <textarea  class="form-control input-medium" rows="2" name="question" placeholder="Enter your Question" required></textarea><br>
  Time: <input type="radio" name="radio1" value="25">25 sec &nbsp;&nbsp;&nbsp;
<input type="radio" name="radio1" value="35">35 sec  &nbsp;&nbsp;&nbsp;
<input type="radio" name="radio1" value="45">45 sec &nbsp;&nbsp;&nbsp;
<input type="radio" name="radio1" value="60">60 sec &nbsp;&nbsp;&nbsp;
<br><br>
  <textarea class="form-control input-small"  rows="1" name="opt1" placeholder="Option 1" required></textarea><br>
  <textarea class="form-control input-small"  rows="1" name="opt2" placeholder="Option 2" required></textarea><br>
   <textarea class="form-control input-small"  rows="1" name="opt3" placeholder="Option 3" ></textarea><br>
    <textarea class="form-control input-small"  rows="1" name="opt4" placeholder="Option 4" ></textarea><br><br>
    Answer (option): <input type="radio" name="radio3" value="1">1&nbsp;&nbsp;&nbsp;
<input type="radio" name="radio3" value="2">2 &nbsp;&nbsp;&nbsp;
<input type="radio" name="radio3" value="3">3&nbsp;&nbsp;&nbsp;
<input type="radio" name="radio3" value="4">4 &nbsp;&nbsp;&nbsp;
<br><br>


      <textarea class="form-control input-small"  rows="1" name="cat" placeholder="Category" required></textarea><br>
         Points: <input type="radio" name="radio2" value="15">15&nbsp;&nbsp;&nbsp;
<input type="radio" name="radio2" value="35">25  &nbsp;&nbsp;&nbsp;
<input type="radio" name="radio2" value="35">35  &nbsp;&nbsp;&nbsp;
<input type="radio" name="radio2" value="40">45  &nbsp;&nbsp;&nbsp;
<br><br>
  <input type="submit" class="btn btn-success" name="add_ques" style="text-align:center" value="Add Question" />
  </form>
</div>
            </div>
           
        </div>
        <!-- /#page-wrapper -->
        <!--ajax tst-->
<form method="POST" action="index.php" style="display:none; margin-top:0px;"  id="area2">
  <input type="text"  class="form-control input-medium" name="user_delete" placeholder="User Name" required></textarea><br>
  <input type="submit" class="btn btn-success" name="add_ques" style="text-align:center" value="Delete User" />
  </form>
        <!--end test-->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="assets/bower_components/raphael/raphael-min.js"></script>
    <script src="assets/bower_components/morrisjs/morris.min.js"></script>
    <script src="assets/js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="assets/dist/js/sb-admin-2.js"></script>
    <!--Text area show-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

</body>

</html>





<!--End-->