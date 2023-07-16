<!-- editform.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Muhamad Nauval Azhar">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="This is a login page template based on Bootstrap 5">
    <title>Bootstrap 5 Edit Form</title>
    <link rel="stylesheet" href="http://localhost/codelgniter2/assets/css/all.css">
 </head>

<body>
    <form method="POST" action="http://localhost/codelgniter2/index.php/Register/update/<?php echo $user->id; ?>">
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                    <div class="text-center my-5">
                        <img src="http://localhost/codelgniter2/assets/image/logo.jpg" alt="logo" width="100">
                    </div>
                    <div class="card shadow-lg">
                        <div class="card-body p-5">
                            <h1 class="fs-4 card-title fw-bold mb-4">Edit Profile</h1>
                            <form method="POST" class="needs-validation" novalidate="" autocomplete="off">
                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="email">Full Name</label>
                                    <input id="name" type="text" class="form-control" value="<?php echo $user->Full_Name; ?>" required autofocus name="Full_Name">
                                    
                                </div>
                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="email">E-Mail Address</label>
                                    <input id="email" type="email" class="form-control" value="<?php echo $user->Email; ?>" required autofocus name="E-Mail_Address">
                                    
                                </div>

                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="password">Password</label>
                                    <input id="password" type="password" class="form-control"  value="<?php echo $user->Passsword; ?>" required name="Password">
                                  
                                </div> 

                                <!-- <div class="mb-3">
                                    <label class="mb-2 text-muted" for="password">Confirm Password</label>
                                    <input id="confirm_password" type="password" class="form-control" value="<?php echo $user->Confirm_Passsword; ?>" required name="Confirm_Password">
                                  
                                </div> -->

                                <div class="d-flex align-items-center">
                                    <button type="submit" name="submit" class="btn btn-primary" value="submit">
                                        Update
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer py-3 border-0">
                            <div class="text-center">
                                <a href="http://localhost/codelgniter2/index.php/welcome/display/" class="text-dark"> Back to Display</a>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-5 text-muted">
                        &copy; Your Company
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/login.js"></script>
    </form>
</body>
</html>
