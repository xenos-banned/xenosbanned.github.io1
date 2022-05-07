	
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Xenoshvh | Register </title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Top notch cheating company." name="description" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Icons css -->
        <link href="assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/dripicons/webfont/webfont.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <!-- build:css -->
        <link href="assets/css/app.css" rel="stylesheet" type="text/css" />
        <!-- endbuild -->

    </head>

    <body class="bg-account-pages">

        <!-- Register -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <div class="wrapper-page">
                            <div class="account-pages">
                                <div class="account-box">

                                    <div class="account-content">

                                    


                                        <form class="form-horizontal" action="register.php" method="POST">
                                            <div class="form-group mb-3">
                                                <label for="username" class="font-weight-medium">Username</label>
                                                <input class="form-control" type="text" required="" name="username"  maxlength="16" required="" placeholder="Enter your desired username">
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="password" class="font-weight-medium">Password</label>
                                                <input class="form-control" type="password" required="" name="password" placeholder="Enter your desired password">
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="password" class="font-weight-medium">Confirm Password</label>
                                                <input class="form-control" type="password" required="" name="confirm_password" placeholder="Confirm your desired password">
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="password" class="font-weight-medium">Invitation</label>
                                                <input class="form-control" type="text" required="" name="invite" autocomplete="off" placeholder="Your invitation code">
                                            </div>

                                            <input type="hidden" name="csrf" value="368b965e633b96cf8e7fdf7dd242c588b8dcbb81648697a79f816dfb5fac6605"/>

                                            <div class="form-group">
                                                <button class="btn btn-block btn-danger waves-effect waves-light" type="submit">Register</button>
                                            </div>
                                        </form> <!-- end form -->

                                        <div class="row mt-3">
                                            <div class="col-12 text-center">
                                                <p class="text-muted">Already have an account? <a href="login.php"><b>Sign In</b></a></p>
                                            </div>
                                        </div>

                                    </div> <!-- end account-content -->

                                </div> <!-- end account-box -->
                            </div>
                            <!-- end account-page-->
                        </div>
                        <!-- end wrapper-page -->

                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- END HOME -->    


        <!-- jQuery  -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
