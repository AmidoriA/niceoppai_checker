<?php
require_once('model/User.php');

$user = new User('AmidoriA', '6u3z494tzz3z', 'tan@o2sx.com', 'tanfoofoo');
$id = $user->save();
echo $id;
?>