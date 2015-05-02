<?php 
class usersSchema extends CakeSchema {

	public $name = 'users';

	public function before($event = array()) {
		return true;
	}

	public function after($event = array()) {
	}

	public $details = array(
		'id' => array('type' => 'string', 'null' => false, 'length' => 36, 'key' => 'primary'),
		'first_name' => array('type' => 'string', 'null' => true, 'length' => 50),
		'last_name' => array('type' => 'string', 'null' => true, 'length' => 50),
		'birthdate' => array('type' => 'date', 'null' => true),
		'cellphone' => array('type' => 'string', 'null' => true, 'length' => 20),
		'telephone' => array('type' => 'string', 'null' => true, 'length' => 20),
		'country' => array('type' => 'string', 'null' => true, 'length' => 50),
		'state' => array('type' => 'string', 'null' => true, 'length' => 50),
		'city' => array('type' => 'string', 'null' => true, 'length' => 50),
		'street' => array('type' => 'string', 'null' => true, 'length' => 100),
		'number' => array('type' => 'string', 'null' => true, 'length' => 20),
		'zipcode' => array('type' => 'string', 'null' => true, 'length' => 10),
		'created' => array('type' => 'datetime', 'null' => true),
		'modified' => array('type' => 'text', 'null' => true),
		'user_id' => array('type' => 'string', 'null' => false, 'length' => 36),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id')
		),
		'tableParameters' => array()
	);

	public $users = array(
		'id' => array('type' => 'string', 'null' => false, 'length' => 36, 'key' => 'primary'),
		'username' => array('type' => 'string', 'null' => false),
		'slug' => array('type' => 'string', 'null' => false),
		'password' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 128),
		'password_token' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 128),
		'email' => array('type' => 'string', 'null' => true, 'default' => null),
		'email_verified' => array('type' => 'boolean', 'null' => true, 'default' => false),
		'email_token' => array('type' => 'string', 'null' => true, 'default' => null),
		'email_token_expires' => array('type' => 'datetime', 'null' => true),
		'tos' => array('type' => 'boolean', 'null' => true, 'default' => false),
		'active' => array('type' => 'boolean', 'null' => true, 'default' => false),
		'last_login' => array('type' => 'datetime', 'null' => true),
		'last_action' => array('type' => 'datetime', 'null' => true),
		'is_admin' => array('type' => 'boolean', 'null' => true, 'default' => false),
		'role' => array('type' => 'string', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true),
		'modified' => array('type' => 'datetime', 'null' => true),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id'),
			'by_email' => array('unique' => false, 'column' => 'email'),
			'by_username' => array('unique' => false, 'column' => 'username')
		),
		'tableParameters' => array()
	);

}
