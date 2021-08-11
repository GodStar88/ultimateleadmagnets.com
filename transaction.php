<?php

/*

Name: revpost 

Description: Records the transactions from cartmanager.

Developed by Ricardo Nunez

Version: 2.0

*/



// error_reporting(E_ALL);

// ini_set("display_errors", true);

//  header("Content-Type: text/plain");

 

 

$db_host = "104.236.32.219";

$db_user = "client";

$db_pass = "1q2w#E\$R";

$db_name = "webinarcapture";

$db_table = "cartmanager_sales";





$db_conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);



if (mysqli_connect_errno()) {

	echo "Failed to connect to MySQL: " . mysqli_connect_error();

}



define( 'SERVERSECRET', '56D6FD6F8DQF87DQ8' ); 



# verify the URL that came from the cart 

$hashCmp = sha1 ($_REQUEST['ItemNo'] . SERVERSECRET . $_REQUEST['ItemSilentPostVerification']); 



if ($hashCmp == $_REQUEST['hash']) {

  	print "Content-Type:text/plain\n\nhash verified - ".$_REQUEST['ItemSilentPostVerification']."\n"; 

 



	$date = date("y-m-d");

	$time = date("G:i:s");



	$ItemNo = mysqli_real_escape_string( $db_conn,  $_REQUEST['ItemNo'] );

	$ItemQuantity = mysqli_real_escape_string( $db_conn,  $_REQUEST['ItemQuantity'] );

	$UnitPrice = mysqli_real_escape_string( $db_conn,  $_REQUEST['UnitPrice'] );

	$OrderNumber = mysqli_real_escape_string( $db_conn,  $_REQUEST['OrderNumber'] );

	$OrderShipping = mysqli_real_escape_string( $db_conn,  $_REQUEST['OrderShipping'] );

	$OrderTax = mysqli_real_escape_string( $db_conn,  $_REQUEST['OrderTax'] );

	$OrderGiftCertificates = mysqli_real_escape_string( $db_conn,  $_REQUEST['OrderGiftCertificates'] );

	$OrderCoupons = mysqli_real_escape_string( $db_conn,  $_REQUEST['OrderCoupons'] );

	$OrderCOD = mysqli_real_escape_string( $db_conn,  $_REQUEST['OrderCOD'] );

	$OrderRushOrder = mysqli_real_escape_string( $db_conn,  $_REQUEST['OrderRushOrder'] );

	$OrderTotal = mysqli_real_escape_string( $db_conn,  $_REQUEST['OrderTotal'] );

	$Name = mysqli_real_escape_string( $db_conn,  $_REQUEST['Name'] );

	$Phone = mysqli_real_escape_string( $db_conn,  $_REQUEST['Phone'] );

	$EMail = mysqli_real_escape_string( $db_conn,  $_REQUEST['EMail'] );

	$PayMethod = mysqli_real_escape_string( $db_conn,  $_REQUEST['PayMethod'] );

	$CustomerID = mysqli_real_escape_string( $db_conn,  $_REQUEST['CustomerID'] );

	$GatewayID = mysqli_real_escape_string( $db_conn,  $_REQUEST['GatewayID'] );

	$OrderStatus = mysqli_real_escape_string( $db_conn,  $_REQUEST['OrderStatus'] );

	$ShipMethod = mysqli_real_escape_string( $db_conn,  $_REQUEST['ShipMethod'] );

	$ShipName = mysqli_real_escape_string( $db_conn,  $_REQUEST['ShipName'] );

	$ShipAddr1 = mysqli_real_escape_string( $db_conn,  $_REQUEST['ShipAddr1'] );

	$ShipAddr2 = mysqli_real_escape_string( $db_conn,  $_REQUEST['ShipAddr2'] );

	$ShipCity = mysqli_real_escape_string( $db_conn,  $_REQUEST['ShipCity'] );

	$ShipState = mysqli_real_escape_string( $db_conn,  $_REQUEST['ShipState'] );

	$ShipZip = mysqli_real_escape_string( $db_conn,  $_REQUEST['ShipZip'] );

	$ShipCountry = mysqli_real_escape_string( $db_conn,  $_REQUEST['ShipCountry'] );



	$q = "INSERT INTO ".$db_table." (

	date, time,

		ItemNo, ItemQuantity, UnitPrice, OrderNumber, OrderShipping, OrderTax, OrderGiftCertificates, OrderCoupons,

		OrderCOD, OrderRushOrder, OrderTotal, Name, EMail, Phone, PayMethod, CustomerID, GatewayID, OrderStatus,

		ShipMethod, ShipName, ShipAddr1, ShipAddr2, ShipCity, ShipState, ShipZip, ShipCountry

	) VALUES (

	'".$date."', '".$time."', 

	'".$ItemNo."', '".$ItemQuantity."', '".$UnitPrice."', '".$OrderNumber."', '".$OrderShipping."' , '".$OrderTax."' , '".$OrderGiftCertificates."' , '".$OrderCoupons."' 

	, '".$OrderCOD."', '".$OrderRushOrder."', '".$OrderTotal."', '".$Name."', '".$EMail."', '".$Phone."', '".$PayMethod."', '".$CustomerID."' 

	, '".$GatewayID."', '".$OrderStatus."', '".$ShipMethod."', '".$ShipName."', '".$ShipAddr1."', '".$ShipAddr2."', '".$ShipCity."', '".$ShipState."', '".$ShipZip."', '".$ShipCountry."'

	)";

	


	if ( !mysqli_query ( $db_conn, $q ) ) {

		echo("Error: " . mysqli_error($db_conn));

	}

 



} else { 

	print "Could not verify hash"; 

}  