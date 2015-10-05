<?php
/**
 * UserFixture
 *
 */
class UserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'first_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250),
		'last_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250),
		'address' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 1073741824),
		'username' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100),
		'password' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100),
		'group_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100),
		'modified_by' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100),
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
			'id' => '',
			'first_name' => 'Lorem ipsum dolor sit amet',
			'last_name' => 'Lorem ipsum dolor sit amet',
			'address' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'username' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'group_id' => 1,
			'created' => '2015-10-03 22:45:25',
			'modified' => '2015-10-03 22:45:25',
			'created_by' => 'Lorem ipsum dolor sit amet',
			'modified_by' => 'Lorem ipsum dolor sit amet'
		),
	);

}
