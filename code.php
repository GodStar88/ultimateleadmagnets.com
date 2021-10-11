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
    <link rel="stylesheet" href="assets/plugins/dropify/dist/css/dropify.min.css">
</head>

<body class="fix-header fix-sidebar card-no-border logo-center">

    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
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
                            <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark"
                                href="javascript:void(0)">
                                <i class="mdi mdi-menu"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item hidden-sm-down search-box">
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                            <a class="has-arrow waves-effect waves-dark" href="code" aria-expanded="false">
                                <i class="mdi mdi-gauge"></i>
                                <span class="hide-menu">Code</span>
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
                    <h3 class="text-themecolor">Code</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Code</li>
                    </ol>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card card-inverse card-success">
                            <div class="card-body">
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        <div class="carousel-item flex-column carousel-item-next carousel-item-left">
                                            <i class="fa fa-globe fa-2x text-white"></i>
                                            <p class="text-white">Bestfreebusinesstools.com</p>
                                            <h5 class="text-white font-light">
                                                https://bestfreebusinesstools.com/referral?ref=<?php echo $login_user; ?></span>
                                            </h5>
                                            <div class="text-white m-t-20">
                                                <i>Please use Bestfreebusinesstools.com</i>
                                            </div>
                                        </div>
                                        <div class="carousel-item flex-column">
                                            <i class="fa fa-globe fa-2x text-white"></i>
                                            <p class="text-white">Bestfreebusinesstools.com</p>
                                            <h5 class="text-white font-light">
                                                https://bestfreebusinesstools.com/referral?ref=<?php echo $login_user; ?></span>
                                            </h5>
                                            <div class="text-white m-t-20">
                                                <i>Please use Bestfreebusinesstools.com</i>
                                            </div>
                                        </div>
                                        <div class="carousel-item flex-column active carousel-item-left">
                                            <i class="fa fa-globe fa-2x text-white"></i>
                                            <p class="text-white">Bestfreebusinesstools.com</p>
                                            <h5 class="text-white font-light">
                                                https://bestfreebusinesstools.com/referral?ref=<?php echo $login_user; ?></span>
                                            </h5>
                                            <div class="text-white m-t-20">
                                                <i>Please use Bestfreebusinesstools.com</i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card card-inverse card-danger">
                            <div class="card-body">
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        <div class="carousel-item flex-column carousel-item-next carousel-item-left">
                                            <i class="fa fa-globe fa-2x text-white"></i>
                                            <p class="text-white">socialproofpower.com</p>
                                            <h5 class="text-white font-light">
                                                https://socialproofpower.com/referral?ref=<?php echo $login_user; ?></span>
                                            </h5>
                                            <div class="text-white m-t-20">
                                                <i>Please use socialproofpower.com</i>
                                            </div>
                                        </div>
                                        <div class="carousel-item flex-column">
                                            <i class="fa fa-globe fa-2x text-white"></i>
                                            <p class="text-white">socialproofpower.com</p>
                                            <h5 class="text-white font-light">
                                                https://socialproofpower.com/referral?ref=<?php echo $login_user; ?></span>
                                            </h5>
                                            <div class="text-white m-t-20">
                                                <i>Please use socialproofpower.com</i>
                                            </div>
                                        </div>
                                        <div class="carousel-item flex-column active carousel-item-left">
                                            <i class="fa fa-globe fa-2x text-white"></i>
                                            <p class="text-white">socialproofpower.com</p>
                                            <h5 class="text-white font-light">
                                                https://socialproofpower.com/referral?ref=<?php echo $login_user; ?></span>
                                            </h5>
                                            <div class="text-white m-t-20">
                                                <i>Please use socialproofpower.com</i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-inverse card-success">
                            <div class="card-body">
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        <div class="carousel-item flex-column carousel-item-next carousel-item-left">
                                            <i class="fa fa-globe fa-2x text-white"></i>
                                            <p class="text-white">Secretsofthegurus.com</p>
                                            <h5 class="text-white font-light">
                                                https://secretsofthegurus.com/referral?ref=<?php echo $login_user; ?></span>
                                            </h5>
                                            <div class="text-white m-t-20">
                                                <i>Please use Secretsofthegurus.com</i>
                                            </div>
                                        </div>
                                        <div class="carousel-item flex-column">
                                            <i class="fa fa-globe fa-2x text-white"></i>
                                            <p class="text-white">Secretsofthegurus.com</p>
                                            <h5 class="text-white font-light">
                                                https://secretsofthegurus.com/referral?ref=<?php echo $login_user; ?></span>
                                            </h5>
                                            <div class="text-white m-t-20">
                                                <i>Please use Secretsofthegurus.com</i>
                                            </div>
                                        </div>
                                        <div class="carousel-item flex-column active carousel-item-left">
                                            <i class="fa fa-globe fa-2x text-white"></i>
                                            <p class="text-white">Secretsofthegurus.com</p>
                                            <h5 class="text-white font-light">
                                                https://secretsofthegurus.com/referral?ref=<?php echo $login_user; ?></span>
                                            </h5>
                                            <div class="text-white m-t-20">
                                                <i>Please use Secretsofthegurus.com</i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="row">
                    <div class="col-md-12">
                        <div class="tab-pane" id="friend" role="tabpanel">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">List of Bestfreebusinesstools.com Friends</h4>
                                    <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                    <div class="table-responsive m-t-40">
                                        <table id="bestfreebusinesstools_table"
                                            class="display table table-hover table-striped table-bordered"
                                            cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>First</th>
                                                    <th>Last</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                </tr>
                                            </thead>
                                            <tbody id="content">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
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
        <script src="php/code/code.js"></script>
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
        <script src="assets/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
        <script src="assets/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
        <script src="assets/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
        <script src="assets/plugins/dropify/dist/js/dropify.min.js"></script>

</body>

</html>