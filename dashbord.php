
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Navbar Dropdown Login and Signup Form with Social Buttons</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="assets/css/style1.css">
<!-- <script src="header.js"></script> -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a href="#" class="navbar-brand">Brand<b>Name</b></a>  		
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
		<span class="navbar-toggler-icon"></span>
	</button>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
		<div class="navbar-nav">
			<a href="#" class="nav-item nav-link">Home</a>
			<a href="#" class="nav-item nav-link">About</a>			
			<div class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle">Services</a>
				<div class="dropdown-menu">					
					<a href="#" class="dropdown-item">Web Design</a>
					<a href="#" class="dropdown-item">Web Development</a>
					<a href="#" class="dropdown-item">Graphic Design</a>
					<a href="#" class="dropdown-item">Digital Marketing</a>
                </div>
            </div>
			<a href="#" class="nav-item nav-link active">Pricing</a>
			<a href="#" class="nav-item nav-link">Blog</a>
			<a href="#" class="nav-item nav-link">Contact</a>
		</div>
		<form class="navbar-form form-inline">
			<div class="input-group search-box">								
				<input type="text" id="search" class="form-control" placeholder="Search here...">
				<div class="input-group-append">
					<span class="input-group-text">
						<i class="material-icons">&#xE8B6;</i>
					</span>
				</div>
			</div>
		</form>
		<div class="navbar-nav ml-auto action-buttons">
			<div class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle mr-4">Login</a>
                <div class="dropdown-menu action-form">
					<form action="login.php" method="POST">
						<p class="hint-text">Sign in with your social media account</p>
						<div class="form-group social-btn clearfix">
							<a href="#" class="btn btn-secondary facebook-btn float-left"><i class="fa fa-facebook"></i> Facebook</a>
							<a href="#" class="btn btn-secondary twitter-btn float-right"><i class="fa fa-twitter"></i> Twitter</a>
						</div>
						<div class="or-seperator"><b>or</b></div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Username" required="required" name="name">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Password" required="required" name="password">
						</div>
						<input type="submit" class="btn btn-primary btn-block" value="login" name="login">
						<div class="text-center mt-2">
							<a href="#">Forgot Your password?</a>
						</div>
					</form>
                </div>
			</div>
			<div class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle sign-up-btn">Sign up</a>
                <div class="dropdown-menu action-form">
					<form method="POST" action="http://localhost/codelgniter2/index.php/login/insert">
						<p class="hint-text">Fill in this form to create your account!</p>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Username" required="required" name="name">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Password" required="required" name="password">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Confirm Password" required="required" name="cpassword">
						</div>
						<div class="form-group">
							<label class="form-check-label">
								<input type="checkbox" required="required"> I accept the <a href="#">Terms &amp; Conditions</a></label>
						</div>
						<input type="submit" class="btn btn-primary btn-block" value="Sign up" name="submit">
					</form>
				</div>
			</div>
        </div>
	</div>
</nav>


