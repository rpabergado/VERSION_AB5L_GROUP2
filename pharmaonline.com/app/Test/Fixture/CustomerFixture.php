<?php
/**
 * CustomerFixture
 *
 */
class CustomerFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'customer';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'Customer_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary', 'comment' => 'should be unique primary key'),
		'Customer_FName' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Customer_LName' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Customer_MName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Customer_Address' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Customer_Cnumber' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Customer_Eaddress' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Customer_Password' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Customer_Points' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 10),
		'indexes' => array(
			'PRIMARY' => array('column' => 'Customer_ID', 'unique' => 1),
			'Customer_Eaddress' => array('column' => 'Customer_Eaddress', 'unique' => 1)
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
			'Customer_ID' => 1,
			'Customer_FName' => 'Lorem ipsum dolor sit amet',
			'Customer_LName' => 'Lorem ipsum dolor sit amet',
			'Customer_MName' => '',
			'Customer_Address' => 'Lorem ipsum dolor sit amet',
			'Customer_Cnumber' => 'Lorem ipsum dolor ',
			'Customer_Eaddress' => 'Lorem ipsum dolor sit amet',
			'Customer_Password' => 'Lorem ipsum dolor sit amet',
			'Customer_Points' => 1
		),
	);

}
