<?php
require_once('config.inc.php');
if(isset($_REQUEST['View'])) {
	$view = $_REQUEST['View'];
}

if(isset($view)) {
	require_once("View/{$view}View.php");
}
?>