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
    <title>Client Builder</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="assets/plugins/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <style>
        th {
            text-align: center;
        }
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border logo-center">
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
    <div id="main-wrapper">

        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">

                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Home</a>
                        </li>
                        <li class="breadcrumb-item active">SendGrid</li>
                    </ol>
                </div>
            </div>
            <div style="padding:0px 50px 0px 50px">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">SendGrid</h4>

                        <div class="row">
                            <div class="col-md-5 text-center">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-5" style="padding-top: 6px">Email Address</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" id="send_email" placeholder="Email Address" value="gizmo98@concentric.net">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-5" style="padding-top: 6px">API Name</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" id="send_name" placeholder="API Name" value="sendknowledge">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-5" style="padding-top: 6px">API Key</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" id="send_key" placeholder="API Key" value="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">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label text-right col-md-5" style="padding-top: 6px">TEST</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" id="send_test" placeholder="Email Address">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label text-right col-md-5" style="padding-top: 6px"></label>
                                    <div class="col-md-7">
                                        <button type="button" class="btn waves-effect waves-light btn-block btn-info" id="btn_send">Test</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7 text-center">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email_subject" placeholder="Subject" style="margin-bottom: 20px">
                                    <textarea class="form-control" id="email_message" placeholder="Hello %FIRST NAME%, %LAST NAME%" cols="30" rows="7" ></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div style="padding:0px 50px 0px 50px">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Send Email</h4>

                        <div class="row" style="margin-top: 20px;">
                            <div class="col-md-2">
                                <button type="button" class="btn waves-effect waves-light btn-block btn-info btn_send" id="send">SEND</button>
                            </div>
                            <div class="col-md-10">
                                <div id="inputs" class="clearfix">
                                    <input type="file" id="files" name="files[]" multiple />
                                </div>
                                <hr />
                                <div style="height:523px; overflow-y: scroll">
                                    <table id="contents" class="table table-hover table-striped">
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- This is data table -->
    <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="assets/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="assets/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="assets/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="assets/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="assets/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="assets/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="assets/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- Chart JS -->
    <script src="php/email/js/email.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
    <script src="js/jquery.csv.js"></script>
</body>


<!-- Mirrored from themedesigner.in/demo/admin-press/horizontal/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Oct 2017 09:04:56 GMT -->

</html>