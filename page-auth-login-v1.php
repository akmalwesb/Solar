<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="AIZAD">
    <title>Log In</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/bordered-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/page-auth.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static bg-full-screen-image menu-collapsed" data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="bg-image" style="background : no-repeat center center; background-image: url('assets/images/bckgrnd1.png'); background-size : cover;">
        <div class="app-content content ">
            <div class="content-overlay"></div>
            <div class="header-navbar-shadow"></div>
            <div class="content-wrapper">
                <div class="content-header row">
                </div>
                <div class="content-body">
                    <div class="auth-wrapper auth-v1 px-2">
                        <div class="auth-inner py-2">
                            <!-- Login v1 -->
                            <div class="card mb-0">
                                <div class="card-body">
                                    <a href="javascript:void(0);" class="brand-logo">
                                        <!--<h2 class="brand-text text-primary ml-1">FIDS</h2>-->
                                        <img class="brand-text ml-1" src="assets/images/we.png" width="280" height="">
                                    </a>

                                    <center><h4 class="card-title mb-1">Weststar IoT System</h4></center>

                                    <!-- <h4 class="card-title mb-1">Welcome! 👋</h4>
                                    <p class="card-text mb-2">Please log in to your account and start the adventure</p> -->

                                    <form name="form1" class="page-auth-login-v1-form mt-2" action="page-auth-login-v1.php" method="POST">
                                        <div class="form-group">
                                            <label for="login-email" class="form-label">Username</label>
                                            <input type="text" class="form-control" id="login-email" name="Id" placeholder="" aria-describedby="login-email" required="" autocomplete="off" tabindex="1" autofocus />
                                        </div>

                                        <div class="form-group">
                                            <div class="d-flex justify-content-between">
                                                <label for="login-password">Password</label>
                                                <a href="page-auth-forgot-password-v1.html">
                                                    <small>Forgot Password?</small>
                                                </a>
                                            </div>
                                            <div class="input-group input-group-merge form-password-toggle">
                                                <input type="password" class="form-control form-control-merge" id="login-password" name="password" tabindex="2" placeholder="" aria-describedby="login-password" autocomplete="off" required="" />
                                                <div class="input-group-append">
                                                    <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="remember-me" tabindex="3" />
                                                <label class="custom-control-label" for="remember-me"> Remember Me </label>
                                            </div>
                                        </div>
                                        <div class="m-login__form-action">
                                            <button onclick="document.location='#'" type="submit" name="Login" class="btn btn-primary btn-block" tabindex="4">Log In</button>
                                        </div>
                                        
                                    </form>

                                    <!-- <p class="text-center mt-2">
                                        <span>New on our platform?</span>
                                        <a href="page-auth-register-v1.html">
                                            <span>Create an account</span>
                                        </a>
                                    </p> -->

                                    <div class="divider">
                                        <div class="divider-text"></div>
                                    </div>

                                    <div class="auth-footer-btn d-flex justify-content-center">
                                        <p class="text-center">
                                        <span>COPYRIGHT © 2023, Weststar Engineering Sdn Bhd</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /Login v1 -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/page-page-auth-login-v1.js"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
<!-- END: Body-->

</html>
