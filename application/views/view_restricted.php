<!DOCTYPE html>
<html>
<head>
	<title> Restricted Page</title>
	 <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
</head>
<body>
<div style="text-align:center;">
	<h1>You are not logged in !</h1><br>
	<input type="submit" class="btn btn-info" value="Back to Login" onclick="document.location.href='<?php echo base_url();?>'"/>
</div>
</body>
</html>