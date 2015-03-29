
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Check-In|Login</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />    
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <style type="text/css">
#message {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
}
#inner-message {
    margin: 0 auto;
}
    </style>

</head>
<body>
    <div class="container">
        <div class="row text-center pad-top ">
           
        </div>
         <div class="row  pad-top">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>   Student Login </strong>  
                            </div>
                            <div class="panel-body">
                                <!--<form role="form" method="POST" action="main/login_validation">-->
                                <?php echo form_open('main/login_validation'); ?>
                                <?php echo validation_errors(); ?>
<br/>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"  ></i></span>
                                            <input type="text" name="login_roll_no" class="form-control" placeholder="Roll Number" required/>
                                        </div>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" name="login_password" class="form-control" placeholder="Password" required/>
                                        </div>
                                       <div style="text-align:center;">  
                                     <input type="submit" class="btn btn-success"  name="register_button" value="Login" />
                                   </div>
                                   
                                     <?php echo form_close(); ?>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>
    

    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/plugins/bootstrap.js"></script>
   
</body>
</html>
