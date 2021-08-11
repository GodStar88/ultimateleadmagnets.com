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
                    <a class="navbar-brand" href="index.php">
                        <h3 class="logo">ultimateleadmagnets</h3>
                    </a>
                </div>
                <div class="navbar-collapse">
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
                    <h3 class="text-themecolor">Manager</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Manager</li>
                    </ol>
                </div>
            </div>
            <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Send Email to all users</h4>
                                    <input class="form-control" id="subject" placeholder="Subject">
                                    <div class="form-group m-t-10">
                                        <textarea class="textarea_editor form-control" rows="15" placeholder="Enter text ..." id="message"></textarea>
                                    </div>
                                    <button type="button" class="btn waves-effect waves-light  btn-info" id="send">
                                        <i class="fa fa-spinner fa-spin" style="margin-right: 8px;" id="load2"></i>Send</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">List of Users</h4>
                            <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                            <button type="button" style="float:right" class="btn waves-effect waves-light btn-info m-t-10" data-toggle='modal' data-target='#responsive-modal'>Add New Member</button>
                            <div class="table-responsive m-t-40">
                                <table id="example23" class="display table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>First</th>
                                            <th>Last</th>
                                            <th>UserName</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Member</th>
                                            <!-- <th>Forums</th> -->
                                            <th>Delete</th>
                                            <th>Edit</th>
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

            <!-- sample modal content -->
            <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Change or Add Account Profile</h4>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <input class="form-control" type="text" required="" placeholder="First" name="name" id="sign_first" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <input class="form-control" type="text" required="" placeholder="Last" name="name" id="sign_last" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <input class="form-control" type="text" required="" placeholder="Name" name="name" id="sign_name" required>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-xs-12">
                                        <input class="form-control" type="email" required="" placeholder="Email" name="email" id="sign_email" required>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-xs-12">
                                        <input class="form-control" type="text" required="" placeholder="Password" name="password" id="sign_password" required>
                                    </div>
                                </div>
                                <div class="form-group text-center m-t-20">
                                    <div class="col-xs-12">
                                        <select class="form-control" id="sign_member">
                                            <option value="Free">Free</option>
                                            <option value="Premium">Premium</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group text-center m-t-20">
                                    <div class="col-xs-12">
                                        <select class="form-control" id="sign_forums">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger waves-effect waves-light" id='savechange'>
                                <i class="fa fa-spinner fa-spin" style="margin-right: 8px;" id="load"></i>Save changes</button>
                            <button type="button" class="btn btn-danger waves-effect waves-light" id='addnew'>
                                <i class="fa fa-spinner fa-spin" style="margin-right: 8px;" id="load1"></i>Add</button>
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
        <script src="php/manager/manager.js"></script>
</body>

</html>