<?php

require('../commons.php');

if(!isset($_REQUEST['user'])) {
	http_response_code(400);
	echo "No user set";
	die();
}

$userId = $_REQUEST['user'];

$call = authenticationlessCurlCall("GET", "api/users/".$userId."/libraryView");

http_response_code($call[HTTP_STATUS]);

print($call[RESPONSE]);
?>
