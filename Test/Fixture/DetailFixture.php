<?php
/**
 * DetailFixture
 *
 */
class DetailFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
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

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '531f1066-2864-4b29-b294-1c814400960e',
			'first_name' => 'Lorem ipsum dolor sit amet',
			'last_name' => 'Lorem ipsum dolor sit amet',
			'birthdate' => '2014-03-11',
			'cellphone' => 'Lorem ipsum dolor ',
			'telephone' => 'Lorem ipsum dolor ',
			'country' => 'Lorem ipsum dolor sit amet',
			'state' => 'Lorem ipsum dolor sit amet',
			'city' => 'Lorem ipsum dolor sit amet',
			'street' => 'Lorem ipsum dolor sit amet',
			'number' => 'Lorem ipsum dolor ',
			'zipcode' => 'Lorem ip',
			'created' => '2014-03-11 13:32:22',
			'modified' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'user_id' => 'Lorem ipsum dolor sit amet'
		),
	);

}
