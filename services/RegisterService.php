<?php
require_once('model/User.php');
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$email = $_REQUEST['email'];
$promo_code = $_REQUEST['promo_code'];

$user = new User($username, $password, $email, $promo_code);
$id = $user->save();
return json_encode(array('result' => $id));
?>