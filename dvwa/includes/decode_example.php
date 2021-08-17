<?php

/*
This function can be called to decode GET, POST and REQUEST variables
before they are used by any of the vulnerable functions.

See README.decode.md for more information.
*/

function decode_inputs() {
	$newrequest = array();
	foreach ($_REQUEST as $key => $value) {
		$newrequest[$key] = base64_decode ($value);
	}

	$_REQUEST = $newrequest;
	$newpost = array();
	foreach ($_POST as $key => $value) {
		$newpost[$key] = base64_decode ($value);
	}

	$_POST = $newpost;
	$newget = array();
	foreach ($_GET as $key => $value) {
		$newget[$key] = base64_decode ($value);
	}

	$_GET = $newget;
}

?>
