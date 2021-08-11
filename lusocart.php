<?php



/* config */



define( 'SERVERSECRET', '56D6FD6F8DQF87DQ8' ); 

define( 'ITEMSILENTPOSTVERIFICATION', '5200764c2c454' ); 

define( '_POSTURL', 'http://ultimateleadmagnets.com/transaction.php?hash=' ); 

define( '_REDIRECTURL', 'http://ultimateleadmagnets.com//register.php' ); 

define( '_CODE', 'WC'); 

define( '_PRODUCTNAME', 'freemailer' ); 





function lusoGetCode($price, $period) {



    switch($period) {

        case 3:  $periodcode = 'Quarterly%3D-1%3DProduct';  $periodname= 'Quarterly';  break;

        case 12: $periodcode = 'Yearly%3D-1%3DProduct';     $periodname= 'Yearly'; break;

        default: $periodcode = 'Monthly%3D-1%3DProduct';    $periodname= 'Monthly';

    }



    $code = strtoupper(_CODE.$periodname);

    $hash = sha1 ( $code . SERVERSECRET . ITEMSILENTPOSTVERIFICATION); 

    $posturl = _POSTURL. rawurlencode($hash);

    $url = 'https://www.cartmanager.net/cgi-bin/cart.cgi?AddItem'.$code.'=gizmo98|'._PRODUCTNAME.' '.$periodname.'|'.$price.'|1|'.$code.'||||||'.$posturl.'||'._REDIRECTURL.'|'.$periodcode;

    return $url;

}