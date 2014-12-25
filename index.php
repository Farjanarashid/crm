<?php
session_start();
if(isset($_SESSION['error_msg'])){
 $data=$_SESSION['error_msg'];
}else{
 $data="";
}
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Customer Relationship Management</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Styles -->
  <link href='assets/css/chosen.css' rel='stylesheet' tyle="text/css">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,600,300' rel='stylesheet' type='text/css'> 
  <style type="text/css">
    body { padding-top: 102px; }
  </style>
  <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">  
  <!-- JavaScript/jQuery, Pre-DOM -->
  <script src="assets/js/jquery.min.js"></script> 
  <!--custom-->
  <link href="assets/css/login.css" rel="stylesheet">
  <script src="assets/js/custom/jquery.validate.js"></script>
  <link href='assets/css/custom/screen.css' rel='stylesheet' tyle="text/css">
  <!-- HTML5, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <link rel="shortcut icon" href="assets/img/favicon.ico" >
</head>

<body>

     <div class="container">  
       <form class="form-signin "  id="login_form" action="login_submit.php" method="POST">
        <div class="top-bar">
          <h3><b>Customer Relationship Management</b></h3>
        </div>
        <div class="well no-padding"   id="form_wrapper">
		      <div class="control-group">													  
				<div class="controls">
					<h2><b>Login Panel</b></h2>
				</div>
			</div>
		  <div class="control-group">			
				<div class="controls">
					<select class="login_option span6 "  name="roll" data-placeholder="Choose a Category" tabindex="1">						
						<option value="admin">admin</option>
						<option value="technical">technical</option>						
					</select>
				</div>
			</div>
          <div class="control-group">
            <label class="control-label" for="inputName"><i class="icon-user"></i></label>
            <div class="controls">
              <input name="username" type="text" id="inputName"class="login_input" placeholder="Username">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="inputUsername"><i class="icon-key"></i></label>
            <div class="controls">
              <input name="password" type="password" id="inputUsername"class="login_input" placeholder="Password">
            </div>
          </div>
			<div class="control-group">
			<div class="padding">
			  <button class="btn btn-primary" id="login_submit" type="submit">Sign in</button>
		   </div>
		   </div>
		<div class="error" id="login_error">
		   <?php echo $data;?>
		</div>
        </div>
      </form>
	  <script>
		$().ready(function() {
			// validate signup form 
			$(".form-signin").validate({
				rules: {
					roll: "required",
					username: "required",
					password: "required",		
				},
				messages: {
					username: "Please enter Your username",
					password: "Please enter Your password",								
				}
			});
		});
           </script>
    </div> 
</body>
</html>