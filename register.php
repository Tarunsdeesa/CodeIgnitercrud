<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Muhamad Nauval Azhar">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="This is a login page template based on Bootstrap 5">
	<title>Bootstrap 5 Login Page</title>
    <link rel="stylesheet" href="http://localhost/codelgniter2/assets/css/all.css">
 </head>

<body>
	<form method="POST" action="http://localhost/codelgniter2/index.php/Register/insert" >
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5">
						<img src="http://localhost/codelgniter2/assets/image/logo.jpg" alt="logo" width="100">
					</div>
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Register</h1>
							<form method="POST" class="needs-validation" novalidate="" autocomplete="off">
                                <div class="mb-3">
									<label class="mb-2 text-muted" for="email">Full Name</label>
									<input id="name" type="text" class="form-control" value="" required autofocus name="Full_Name">
									
								</div>
								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" value="" required autofocus name="E-Mail_Address">
									
								</div>

								<div class="mb-3">
								
                                    <label class="mb-2 text-muted" for="password">Passsword</label>
									<input id="password" type="password" class="form-control" required name="Passsword">
								  
								</div>

                                <div class="mb-3">
								
                                    <label class="mb-2 text-muted" for="password">Confirm Passsword</label>
									<input id="password" type="password" class="form-control"  required name="Confirm_Passsword">
								  
								</div>

								<div class="d-flex align-items-center">
								
									<button type="submit" name="submit" class="btn btn-primary" value="submit" >
										Register
									</button>
								</div>
							</form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Have an account ? <a href="http://localhost/codelgniter2/index.php/welcome/date/login.php" class="text-dark"> Login</a>
							</div>
						</div>
					</div>
					<div class="text-center mt-5 text-muted">
						Copyright &copy; 2017-2021 &mdash; Your Company 
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/login.js"></script>
	</form>
</body>
</html>