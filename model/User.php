<?php
require_once('config.inc.php');

class User {

	private $_username = '';
	private $_password = '';
	private $_email = '';

/**
 * construct
 * 
 * @access public
 * @param string $username
 * @param string $password
 * @param string $password
 */
	public function __construct($username, $password, $email) {
		$this->_username = $username;
		$this->_password = $password;
		$this->_email = $email;
	}

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

	public function save() {
		global $db_config;
		mysql_connect($db_config['host'], $db_config['username'], $db_config['password']) or die(mysql_error());
		mysql_select_db($db_config['name']);
	}
}
?>