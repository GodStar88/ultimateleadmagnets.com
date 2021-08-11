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
    <link rel="stylesheet" href="assets/plugins/html5-editor/bootstrap-wysihtml5.css" />
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
                    <a class="navbar-brand" href="index">
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
                                        <a href="php/logout">
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
                            <a class="has-arrow waves-effect waves-dark" href="file" aria-expanded="false">
                                <i class="mdi mdi-gauge"></i>
                                <span class="hide-menu">File</span>
                            </a>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="software" aria-expanded="false">
                                <i class="mdi mdi-gauge"></i>
                                <span class="hide-menu">Software Training</span>
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
                    <h3 class="text-themecolor">Dashboard</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-5 col-xlg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30">
                                    <img src="assets/images/avatar.png" class="img-circle" width="150" />
                                    <h4 class="card-title m-t-10">
                                        <?php echo $login_user; ?>
                                    </h4>
                                    <div class="row text-center justify-content-md-center">
                                        <?php echo $login_member; ?> account
                                    </div>
                                </center>
                            </div>
                            <div>
                                <hr>
                            </div>
                            <div class="card-body">

                                <small class="text-muted">Email address </small>
                                <h6>
                                    <?php echo $login_email; ?>
                                </h6>
                                <small class="text-muted">First Name </small>
                                <h6>
                                    <?php echo $login_first; ?>
                                </h6>
                                <small class="text-muted">Last Name </small>
                                <h6>
                                    <?php echo $login_last; ?>
                                </h6>
                                <small class="text-muted">Linkedin Group Name </small>
                                <h6>
                                    <?php echo $login_linkedin; ?>
                                </h6>
                                <small class="text-muted">Facebook Group Name </small>
                                <h6>
                                    <?php echo $login_facebook; ?>
                                </h6>
                                <small class="text-muted">Quora Space Name </small>
                                <h6>
                                    <?php echo $login_quora; ?>
                                </h6>
                                <small class="text-muted">Bio </small>
                                <h6>
                                    <?php echo $login_message; ?>
                                </h6>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-7 col-xlg-8 col-md-6">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <!-- <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Forums</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Post</a> </li> -->
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Settings</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane" id="home" role="tabpanel">
                                    <div class="card-body">
                                        <?php if ($login_forums == "Yes") : ?>
                                            <div class="profiletimeline posttimeline">

                                            </div>
                                        <?php endif ?>
                                    </div>
                                </div>
                                <!--second tab-->
                                <div class="tab-pane" id="profile" role="tabpanel">
                                    <div class="card-body">
                                        <?php if ($login_forums == "Yes") : ?>
                                            <input class="form-control" id="subject" placeholder="Subject">
                                            <div class="form-group m-t-10">
                                                <textarea class="textarea_editor form-control" rows="15" placeholder="Enter text ..." id="message"></textarea>
                                            </div>
                                            <button type="button" class="btn waves-effect waves-light  btn-info" id="send">
                                                <i class="fa fa-spinner fa-spin" style="margin-right: 8px;" id="load"></i>Post</button>
                                        <?php endif ?>
                                    </div>
                                </div>
                                <div class="tab-pane active" id="settings" role="tabpanel">
                                    <div class="card-body">
                                        <div class="form-horizontal form-material">
                                            <div class="form-group">
                                                <label class="col-md-12">Username</label>
                                                <div class="col-md-12">
                                                    <input type="text" value="<?php echo $login_user; ?>" class="form-control form-control-line" id="update_user" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">First Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" value="<?php echo $login_first; ?>" class="form-control form-control-line" id="update_first">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-12">Last Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" value="<?php echo $login_last; ?>" placeholder="Johnathan Doe" class="form-control form-control-line" id="update_last">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="email" value="<?php echo $login_email; ?>" class="form-control form-control-line" name="example-email" id="update_email" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Password</label>
                                                <div class="col-md-12">
                                                    <input type="password" value="<?php echo $login_password; ?>" class="form-control form-control-line" id="update_password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Linkedin Group Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" value="<?php echo $login_linkedin; ?>" class="form-control form-control-line" id="update_linkedin">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Facebook Group Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" value="<?php echo $login_facebook; ?>" class="form-control form-control-line" id="update_facebook">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Quora Space Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" value="<?php echo $login_quora; ?>" class="form-control form-control-line" id="update_quora">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Bio</label>
                                                <div class="col-md-12">
                                                    <textarea rows="3" class="form-control form-control-line" id="update_bio"><?php echo $login_message; ?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success" id="update"><i class="fa fa-spinner fa-spin" style="margin-right: 8px;" id="load_update"></i>Update Profile</button>
                                                    <?php if ($login_member == "Free") : ?>
                                                        <button type="button" class="btn waves-effect waves-light btn-info" onclick="location.href='member.php';">Upgrade to Premium</button>
                                                    <?php endif ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- sample modal content -->
            <div id="responsive-modal_user" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog" style="max-width: 30%">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">User Information</h4>
                        </div>
                        <div class="modal-body">
                            <div class="card">
                                <div class="card-body">
                                    <center class="m-t-30">
                                        <img src="assets/images/avatar.png" class="img-circle" width="150" />
                                        <h4 class="card-title m-t-10">
                                            <span id="user_user"></span>
                                        </h4>
                                        <div class="row text-center justify-content-md-center">
                                            <span id="user_member"></span> account
                                        </div>
                                    </center>
                                </div>
                                <div>
                                    <hr>
                                </div>
                                <div class="card-body">
                                    <small class="text-muted">Linkedin Group Name </small>
                                    <h6>
                                        <span id="user_linkedin"></span>
                                    </h6>
                                    <small class="text-muted">Facebook Group Name </small>
                                    <h6>
                                        <span id="user_facebook"></span>
                                    </h6>
                                    <small class="text-muted">Quora Space Name </small>
                                    <h6>
                                        <span id="user_quora"></span>
                                    </h6>
                                    <small class="text-muted">Bio </small>
                                    <h6>
                                        <span id="user_message"></span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- sample modal content -->
            <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog" style="max-width: 50%">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Comments</h4>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="card-body">
                                    <div class="profiletimeline commenttimeline">

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12" style="margin-left: 50px; margin-right: 30px; margin-bottom: -20px;">
                                        <textarea class="form-control" type="text" required="" placeholder="comment" name="name" id="comment" required></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <div class="form-group" style="margin-right: 30px">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-danger waves-effect waves-light" id='reply'><i class="fa fa-spinner fa-spin" style="margin-right: 8px;" id="load_comment"></i>Comment</button>
                            </div>
                        </div>
                    </div>
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
            <script src="assets/plugins/html5-editor/wysihtml5-0.3.0.js"></script>
            <script src="assets/plugins/html5-editor/bootstrap-wysihtml5.js"></script>
            <script src="assets/plugins/dropzone-master/dist/dropzone.js"></script>
            <script>
                $(document).ready(function() {

                    $('.textarea_editor').wysihtml5();

                });
            </script>
</body>

</html>