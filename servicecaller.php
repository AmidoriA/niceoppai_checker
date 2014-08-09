<?php
$service = $_REQUEST['service'];
unset($_REQUEST['service']);

require_once('services/' . $service . '.php');
?>