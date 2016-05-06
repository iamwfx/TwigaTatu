<?php require_once 'config.php'; ?>
<?php 
	if(!empty($_POST)){
		try {
			$user_obj = new Cl_User();
			$data = $user_obj->forgetPassword( $_POST );
			if($data)$success = "A PassWord has been sent to your email.Use this in your subsequent logins";
		} catch (Exception $e) {
			$error = $e->getMessage();
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TwigaTatu Password Reset</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../dist/css/bootstrap.css"/>
<link rel="stylesheet" href="../dist/css/rzslider.css"/>
<link rel="stylesheet" href="../dist/css/style.css" type="text/css" />
<script src="../dist/js/angular.js"></script>
<script src="../dist/js/ui-bootstrap-tpls.js"></script>
<script src="../dist/js/rzslider.js"></script>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <link rel="icon" href="images/logo_giraffe.png">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<div class="container">
		<?php require_once 'templates/ads.php';?>
		<div class="login-form">
			<img src="images/logo.png" alt="logo" style="width:90%;height:auto;" hspace="15"></img>
			<div class="form-header">
				<b>PassWord Reset</b>
				<!-- <i class="fa fa-user"></i> -->
			</div>
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="forgetpassword-form" method="post"  class="form-register" role="form">
				<div>
					<input id="email" name="email" type="email" class="form-control" placeholder="Email address">  
					<span class="help-block"></span>
				</div>
				<button class="btn btn-block bt-login" type="submit">Reset Password</button>
			</form>
			<div class="form-footer">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<i class="fa fa-check"></i>
						<a href="index.php"><font color="#333"> Log In </font></a>
					
					</div>
					
					<div class="col-xs-6 col-sm-6 col-md-6">
						<i class="fa fa-check"></i>
						<a href="register.php"><font color="#333"> Sign Up </font></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /container -->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/forgetpassword.js"></script>
  </body>
</html>