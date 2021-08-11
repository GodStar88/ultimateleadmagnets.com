<?php
// error_reporting(E_ALL);

include 'luso_functions.php';

if ( $_REQUEST['ItemSilentPostVerification'] == "5200764c2c454" ) {
 
    $EMail = $_REQUEST['EMail'];
    $OrderNumber = $_REQUEST['OrderNumber'];
    $ItemNo = $_REQUEST['ItemNo'];
    luso_record_sales( $EMail, $OrderNumber, $ItemNo );
 
}