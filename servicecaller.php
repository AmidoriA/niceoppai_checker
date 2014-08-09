<?php
$service = $_REQUEST['service'];
$return_view = $_REQUEST['return_view'];
unset($_REQUEST['service']);

require_once('services/' . $service . '.php');

header("Location: index.php?View={$return_view}");
?>