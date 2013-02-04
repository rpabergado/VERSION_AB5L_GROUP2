<?php
/**
 * CartItemFixture
 *
 */
class CartItemFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'cart_item';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'Cart_Item_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'Cart_Item_Name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Cart_Item_Price' => array('type' => 'float', 'null' => false, 'default' => null),
		'Cart_Item_Quantity' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 15),
		'Cart_Item_Subtotal' => array('type' => 'float', 'null' => false, 'default' => null),
		'Item_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'Customer_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'indexes' => array(
			'PRIMARY' => array('column' => 'Cart_Item_ID', 'unique' => 1)
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
			'Cart_Item_ID' => 1,
			'Cart_Item_Name' => 'Lorem ipsum dolor sit amet',
			'Cart_Item_Price' => 1,
			'Cart_Item_Quantity' => 1,
			'Cart_Item_Subtotal' => 1,
			'Item_ID' => 1,
			'Customer_ID' => 1
		),
	);

}
