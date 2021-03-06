<?php
include 'php/session.php';
?>
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
    <link href="assets/plugins/morrisjs/morris.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
</head>

<body class="fix-header fix-sidebar card-no-border logo-center">

    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>

    <div id="main-wrapper">

        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">

                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <h3 class="logo">ultimateleadmagnets</h3>
                    </a>
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <li class="nav-item">
                            <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)">
                                <i class="mdi mdi-menu"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item hidden-sm-down search-box">
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="assets/images/avatar.png" alt="user" class="profile-pic" />
                            </a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img">
                                                <img src="assets/images/avatar.png" alt="user">
                                            </div>
                                            <div class="u-text">
                                                <h4>
                                                    <?php echo $login_user; ?>
                                                </h4>
                                                <p class="text-muted">
                                                    <?php echo $login_email; ?>
                                                </p>
                                                <p class="text-muted">
                                                    <?php echo $login_member; ?> account
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="php/logout.php">
                                            <i class="fa fa-power-off"></i> Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="left-sidebar">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">PERSONAL</li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="dashboard" aria-expanded="false">
                                <i class="mdi mdi-gauge"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="forums" aria-expanded="false">
                                <i class="mdi mdi-gauge"></i>
                                <span class="hide-menu">Forums</span>
                            </a>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="training" aria-expanded="false">
                                <i class="mdi mdi-gauge"></i>
                                <span class="hide-menu">Training</span>
                            </a>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="softwareaccess" aria-expanded="false">
                                <i class="mdi mdi-gauge"></i>
                                <span class="hide-menu">Software Access</span>
                            </a>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="software" aria-expanded="false">
                                <i class="mdi mdi-gauge"></i>
                                <span class="hide-menu">Software Training</span>
                            </a>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="romanticsuccess.php" aria-expanded="false">
                                <i class="mdi mdi-gauge"></i>
                                <span class="hide-menu">Romanticsuccess</span>
                            </a>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="support" aria-expanded="false">
                                <i class="mdi mdi-gauge"></i>
                                <span class="hide-menu">Support</span>
                            </a>
                        </li>
                        <?php if ($login_user == "gizmo2000" || $login_user == "godstar") : ?>
                            <li>
                                <a class="has-arrow waves-effect waves-dark" href="manager" aria-expanded="false">
                                    <i class="mdi mdi-table"></i>
                                    <span class="hide-menu">Manager</span>
                                </a>
                            </li>
                        <?php endif ?>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Training</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Training</li>
                    </ol>
                </div>
            </div>

            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title" id="0">1. New Linkedin Method Introduction</h4>
                        <video width="560" height="315" controls>
                            <source src="video/New Linkedin Method Introduction.mp4" type="video/mp4">
                        </video>
                    </div>

                    <div class="col-md-6">
                        <h4 class="card-title" id="0">2. Creating your Linkedin Group</h4>
                        <video width="560" height="315" controls>
                            <source src="video/Creating your Linkedin Group.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title" id="0">3. Target Sources</h4>
                        <video width="560" height="315" controls>
                            <source src="video/Target Sources.mp4" type="video/mp4">
                        </video>
                    </div>

                    <div class="col-md-6">
                        <h4 class="card-title" id="0">4. Messaging</h4>
                        <video width="560" height="315" controls>
                            <source src="video/Messaging.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title" id="0">5. Bonus Video - Done for you Service</h4>
                        <video width="560" height="315" controls>
                            <source src="video/Bonus Video - Done for you Service.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
                <script src="assets/plugins/jquery/jquery.min.js"></script>
                <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
                <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
                <script src="js/jquery.slimscroll.js"></script>
                <script src="js/waves.js"></script>
                <script src="js/sidebarmenu.js"></script>
                <script src="assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
                <script src="js/custom.min.js"></script>
                <script src="assets/plugins/sparkline/jquery.sparkline.min.js"></script>
                <script src="assets/plugins/raphael/raphael-min.js"></script>
                <script src="assets/plugins/morrisjs/morris.min.js"></script>
                <script src="js/dashboard1.js"></script>
                <script src="assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
                <script src="php/dashboard/dashboard.js"></script>
                <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
                <script src="assets/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
                <script src="assets/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
                <script src="assets/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
                <script src="assets/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
</body>

</html>