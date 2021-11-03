<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Ultimateleadmagnets</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/plugins/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <link href="assets/plugins/morrisjs/morris.css" rel="stylesheet">

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
            <div class="login-box card" style="margin-top:0px; width:600px">
                <div class="card-body">
                    <div class="form-horizontal form-material" id="loginform">
                        <h3 class="box-title m-b-20">Sign Up</h3>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input class="form-control" type="text" required="" placeholder="First Name" name="name" id="sign_first" required>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" type="text" required="" placeholder="Last Name" name="email" id="sign_last" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input class="form-control" type="text" required="" placeholder="Username" name="name" id="sign_name" required>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" type="email" required="" placeholder="Email" name="email" id="sign_email" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input class="form-control" type="password" required="" placeholder="Password" name="password" id="sign_password" required>
                            </div>
                            <div class="col-md-6">
                                <?php
                                   if (strpos($_SERVER['REQUEST_URI'], "secretsofthegurus") === true){
                                        echo('<input class="form-control" type="text" required="" placeholder="Ultimateleadmagnets Code" name="code" id="sign_code" required> ');
                                    }
                                ?>
                            </div>
                        </div>

                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" id="sign_up">
                                    <i class="fa fa-spinner fa-spin" style="margin-right: 8px;" id="load"></i>Sign Up</button>
                            </div>
                        </div>

                        <div class="form-group m-b-0">
                            <div class="col-sm-12 text-center">
                                <p>Already have an account?
                                    <a href="login.php" class="text-info m-l-5">
                                        <b>Sign In</b>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/waves.js"></script>
    <script src="js/sidebarmenu.js"></script>
    <script src="assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/custom.min.js"></script>
    
    <script src="assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
    <script src="assets/plugins/toast-master/js/jquery.toast.js"></script>

    <script>
        $(document).ready(function () {
            $('#load').hide();
            $('#sign_up').click(function () {
                first = $('#sign_first').val();
                last = $('#sign_last').val();
                name = $('#sign_name').val();
                email = $('#sign_email').val();
                password = $('#sign_password').val();

                if (name == "" || email == "" || password == "" || first == "" || last == "") {

                    $.toast({
                        heading: 'Welcome to ultimateleadmagnets',
                        text: 'Please enter All information',
                        position: 'top-center',
                        loaderBg: '#ff6849',
                        icon: 'error',
                        hideAfter: 3000,
                        stack: 6
                    });
                    return;
                }
                $('#load').fadeIn();
                $.post("php/register.php", {
                        first: first,
                        last: last,
                        name: name,
                        email: email,
                        password: password
                    },
                    function (data, status) {
                        $('#load').hide();
                        console.log(data);
                        if (data.indexOf("verification") >=0) {
                            $.toast({
                                heading: 'Welcome to ultimateleadmagnets',
                                text: 'Thanks so much for joining ultimateleadmagnets! To finish signing up, you just need to comfirm that we got your email right',
                                position: 'top-center',
                                loaderBg: '#ff6849',
                                icon: 'success',
                                hideAfter: 30000,
                                stack: 6
                            });

                            var token = data.split(".")[1];
                            console.log(token);

                            $.post("php/smtp/sucessmessage.php", {
                                    To: email,
                                    token: token
                                },
                                function (data, status) {
                                    console.log(data);
                                });
                            return;
                        } else {
                            $.toast({
                                heading: 'Welcome to ultimateleadmagnets',
                                text: data,
                                position: 'top-center',
                                loaderBg: '#ff6849',
                                icon: 'success',
                                hideAfter: 3000,
                                stack: 6
                            });
                            return;
                        }
                    });
            });
        });
    </script>
</body>

</html>