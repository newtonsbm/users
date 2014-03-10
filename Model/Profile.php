<?php
/*
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('AppModel', 'Model');

/**
 * Users Plugin Profile Model
 *
 * @package User
 * @subpackage User.Model
 */
class Profile extends AppModel{

/**
 * Name
 *
 * @var string
 */
	public $name = 'Profile';

	public $belongsTo = 'User';

}