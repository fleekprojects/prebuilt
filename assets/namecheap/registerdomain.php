<?php
require_once "namecheap.php";
$nc_api = array( 'api_user' => 'fleekncapi',
		'api_key' => '7d246acf7f194480af532353997b943a',
		'api_ip' => 'detect'
);
$sandbox = 'true'; // use the Namecheap sandbox to test
$nc = new Namecheap( $nc_api, $sandbox );
$domain = $_POST['domain'];
$result = $nc->domainsCheck($domain);
if (!empty($result)){
	echo json_encode($result);
}else{
	echo "notavailable";
}
?>