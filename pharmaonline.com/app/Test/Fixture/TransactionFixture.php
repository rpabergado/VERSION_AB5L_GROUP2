<?php
/**
 * TransactionFixture
 *
 */
class TransactionFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'transaction';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'Transaction_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 15, 'key' => 'primary'),
		'Transaction_Saddress' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Transaction_PayType' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Transaction_Total' => array('type' => 'float', 'null' => false, 'default' => null),
		'Transaction_Date' => array('type' => 'date', 'null' => false, 'default' => null),
		'Customer_NameOnCard' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 15),
		'Card_Number' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 16, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Issuing_Bank' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'CVV2_Number' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 4, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Card_Type' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Transaction_Dpercentage' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 3),
		'Customer_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'Summary_Sales_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'indexes' => array(
			'PRIMARY' => array('column' => 'Transaction_ID', 'unique' => 1)
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
			'Transaction_ID' => 1,
			'Transaction_Saddress' => 'Lorem ipsum dolor sit amet',
			'Transaction_PayType' => 'Lorem ipsum dolor ',
			'Transaction_Total' => 1,
			'Transaction_Date' => '2013-01-31',
			'Customer_NameOnCard' => 1,
			'Card_Number' => 'Lorem ipsum do',
			'Issuing_Bank' => 'Lorem ipsum dolor sit amet',
			'CVV2_Number' => 'Lo',
			'Card_Type' => 'Lorem ipsum dolor sit amet',
			'Transaction_Dpercentage' => 1,
			'Customer_ID' => 1,
			'Summary_Sales_ID' => 1
		),
	);

}
