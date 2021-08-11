<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Ultimateleadmagnets</title>
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/plugins/toast-master/css/jquery.toast.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">
        <div class="login-register" style="background-image:url(assets/images/background/login-register.jpg);">
            <div class="login-box card">
                <div class="card-body">
                    <div class="form-horizontal form-material" id="loginform">
                        <h3 class="box-title m-b-20">Reset your password</h3>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" placeholder="Email" id="sign_name"> </div>
                        </div>
                        <div class="form-group text-center">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" id="sign_up">
                                    <i class="fa fa-spinner fa-spin" style="margin-right: 8px;" id="load"></i>Reset Password</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/waves.js"></script>
    <script src="js/sidebarmenu.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
    <script src="assets/plugins/toast-master/js/jquery.toast.js"></script>

    <script>
        $(document).ready(function() {

            $('#load').hide();
            $('#sign_up').click(function() {

                name = $('#sign_name').val();
                password = Math.floor((Math.random() * 1000000) + 100000);
                console.log(password);
                if (name == "" || password == "") {
                    $.toast({
                        heading: 'Welcome to ultimateleadmagnets',
                        text: 'Please input your email',
                        position: 'top-center',
                        loaderBg: '#ff6849',
                        icon: 'error',
                        hideAfter: 3000,
                        stack: 6
                    });
                    return;
                }
                $('#load').fadeIn();
                $('#sign_up').prop('disabled', true);
                $.post("php/forgot.php", {
                        name: name,
                        password: password
                    },
                    function(data, status) {
                        $('#load').hide();
                        $('#sign_up').prop('disabled', false);
                        $.toast({
                            heading: 'Welcome to ultimateleadmagnets',
                            text: 'We just sent the new password',
                            position: 'top-center',
                            loaderBg: '#ff6849',
                            icon: 'success',
                            hideAfter: 3000,
                            stack: 6
                        });
                        window.location.href = 'login.php';
                    });

            });

        });
    </script>
    <script src="popup/jquery.min.js"></script>
    <script src="popup/jquery.toast.js"></script>
    <script src="popup/login-message.js"></script>F
</body>


<!-- Mirrored from themedesigner.in/demo/admin-press/horizontal/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Oct 2017 09:07:12 GMT -->

</html> 