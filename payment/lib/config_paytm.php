<?php
/*
- Use PAYTM_ENVIRONMENT as 'PROD' if you wanted to do transaction in production environment else 'TEST' for doing transaction in testing environment.
- Change the value of PAYTM_MERCHANT_KEY constant with details received from Paytm.
- Change the value of PAYTM_MERCHANT_MID constant with details received from Paytm.
- Change the value of PAYTM_MERCHANT_WEBSITE constant with details received from Paytm.
- Above details will be different for testing and production environment.
*/

//define('PAYTM_ENVIRONMENT', 'TEST'); // PROD
define('PAYTM_ENVIRONMENT', 'PROD'); 
//define('PAYTM_MERCHANT_KEY', 'GGmMYgzRcb7_FX&M'); //Change this constant's value with Merchant key received from Paytm.
define('PAYTM_MERCHANT_KEY', 'cFGHcI2OmlaK44fU'); 
//define('PAYTM_MERCHANT_MID', 'VVWXUz15467369219240'); //Change this constant's value with MID (Merchant ID) received from Paytm.
define('PAYTM_MERCHANT_MID', 'zaplYl34079897155205');

//define('PAYTM_MERCHANT_WEBSITE', 'WEBSTAGING'); //Change this constant's value with Website name received from Paytm.
define('PAYTM_MERCHANT_WEBSITE', 'DEFAULT');

//$PAYTM_STATUS_QUERY_NEW_URL='https://securegw-stage.paytm.in/merchant-status/getTxnStatus';
//$PAYTM_TXN_URL='https://securegw-stage.paytm.in/theia/processTransaction';
if (PAYTM_ENVIRONMENT == 'PROD') {
	$PAYTM_STATUS_QUERY_NEW_URL='https://securegw.paytm.in/merchant-status/getTxnStatus';
	$PAYTM_TXN_URL='https://securegw.paytm.in/theia/processTransaction';
	//$PAYTM_STATUS_QUERY_NEW_URL='https://securegw.paytm.in/order/process';
	//$PAYTM_TXN_URL='https://securegw.paytm.in/order/status';
}

define('PAYTM_REFUND_URL', '');
define('PAYTM_STATUS_QUERY_URL', $PAYTM_STATUS_QUERY_NEW_URL);
define('PAYTM_STATUS_QUERY_NEW_URL', $PAYTM_STATUS_QUERY_NEW_URL);
define('PAYTM_TXN_URL', $PAYTM_TXN_URL);
?>
