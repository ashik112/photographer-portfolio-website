<?php
	session_start();
	if(isset($_SESSION['id'])&&isset($_SESSION['USER'])){
		header('location: add_shop.php');
	}else{		
		if($_SERVER['REQUEST_METHOD']=="POST"){
			include_once 'controller/class.database.php';
			$error =	'<div class="alert alert-danger fade in"> 					
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
							<b>Username or Password does not match</b>
						</div>';
			$username = $_POST['username'];
			$password = $_POST['password'];
			if($username==NULL || $password==NULL){ 		
				$error_login = $error;
			}else{
				$password    = sha1($password);
				$matchcols   = array("admin_name", "password");
				$matchvalues = array($username, $password);
				$info = $connection->matchForLogin("id, admin_name, role",'admin',$matchcols,$matchvalues);
				if($info){
					$_SESSION['id'] = $info['id'];
					$_SESSION['USER'] = $info['admin_name'];	
					$_SESSION['role'] = $info['role'];	
					header('location: home.php');			
				}else{
					$error_login = $error;
				}
			}
		}	
	}
?>	
<!DOCTYPE html>
<html lang="en">
<head>	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>ADMIN PANEL</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="MD. ARIFUR RAHMAN">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	<style>
		body{ background: url(img/bg-login.jpg) !important; }
	    .remodal-bg.with-red-theme.remodal-is-opening,
	    .remodal-bg.with-red-theme.remodal-is-opened {
	      filter: none;
	    }

	    .remodal-overlay.with-red-theme {
	      background-color: #f44336;
	    }

	    .remodal.with-red-theme {
	      background: #fff;
	    }
    </style>
			
</head>

<body>
		<div class="container-fluid-full">
		<div class="row-fluid">
					
			<div class="row-fluid">
				<div class="login-box">
					<div class="icons">
						<a href="index.php"><i class="halflings-icon home"></i></a>
						<a href="#"><i class="halflings-icon cog"></i></a>
					</div>
					<h1 class="text-center text-success">ADMIN LOGIN</h1> <br />
					<h2>Login to your account</h2> <br /> 
					<br /> 
				  	<?php
				  	if(isset($error_login)){
						echo $error_login;
					}
					?>				
					<form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
						<fieldset>
							
							<div class="input-prepend" title="name">
								<span class="add-on"><i class="halflings-icon user"></i></span>
								<input class="input-large span10" name="username" id="username" type="text" placeholder="type username"/>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="password" id="password" type="password" placeholder="type password"/>
							</div>
							<div class="clearfix"></div>
							
							<label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>

							<div class="button-login">	
								<input class="btn btn-primary" type="submit" value="Login" />
							</div>
							<div class="clearfix"></div>
					</form>
					<hr>
					
				</div><!--/span-->
			</div><!--/row-->
			

	</div><!--/.fluid-container-->
	
		</div><!--/fluid-row-->
	
	<!-- start: JavaScript-->
				<script src="js/jquery-1.9.1.min.js"></script>
		<script src="js/jquery-migrate-1.0.0.min.js"></script>

		<script src="js/jquery-ui-1.10.0.custom.min.js"></script>

		<script src="js/jquery.ui.touch-punch.js"></script>

		<script src="js/modernizr.js"></script>

		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.uniform.min.js"></script>
		<script src="js/jquery.cleditor.min.js"></script>
		<script src="js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
