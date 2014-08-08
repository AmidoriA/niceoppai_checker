<?php
require_once('config.inc.php');

class User {

/**
 * Encrypt password 
 *
 * @access public
 * @param  string password
 * @return string encrypted password
 */
	public function encrypt_password($password) {
		global $secret;
		$password = $password . $secret;
		return md5($password);
	}
}
?>