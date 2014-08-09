<?php
require_once('config.inc.php');

class User {

	private $_username = '';
	private $_password = '';
	private $_email = '';
	private $_promo_code = '';

/**
 * construct
 * 
 * @access public
 * @param string $username
 * @param string $password
 * @param string $email
 * @param string $promo_code
 */
	public function __construct($username, $password, $email, $promo_code) {
		$this->_username = $username;
		$this->_password = $password;
		$this->_email = $email;
		$this->_promo_code = $promo_code;
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
		mysql_select_db($db_config['name']) or die(mysql_error());

		$encrypted_password = $this->encrypt_password($this->_password);
		$query = "INSERT INTO users (username, password, email, promo_code) VALUES('{$this->_username}', '{$encrypted_password}', '{$this->_email}', '{$this->_promo_code}')";
		mysql_query($query) or die(mysql_error());

		return 'success';
	}
}
?>