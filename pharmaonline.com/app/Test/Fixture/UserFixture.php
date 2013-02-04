<?php
/**
 * UserFixture
 *
 */
class UserFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'user';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'User_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary', 'comment' => 'should be unique primary key'),
		'User_FName' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'User_LName' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'User_MName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'User_Address' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'User_Eaddress' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'User_Password' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'User_Role' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'User_Points' => array('type' => 'integer', 'null' => true, 'default' => '0', 'length' => 10),
		'indexes' => array(
			'PRIMARY' => array('column' => 'User_ID', 'unique' => 1),
			'Customer_Eaddress' => array('column' => 'User_Eaddress', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'User_ID' => 1,
			'User_FName' => 'Lorem ipsum dolor sit amet',
			'User_LName' => 'Lorem ipsum dolor sit amet',
			'User_MName' => 'Lorem ipsum dolor sit amet',
			'User_Address' => 'Lorem ipsum dolor sit amet',
			'User_Eaddress' => 'Lorem ipsum dolor sit amet',
			'User_Password' => 'Lorem ipsum dolor sit amet',
			'User_Role' => 'Lorem ip',
			'User_Points' => 1
		),
	);

}
