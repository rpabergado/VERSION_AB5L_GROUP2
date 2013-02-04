<?php
/**
 * CouponFixture
 *
 */
class CouponFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'coupon';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'Item_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary', 'comment' => 'should be unique primary key'),
		'Coupon_Name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Coupon_Code' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Item_Price' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 6),
		'Item_Quantity' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'Item_Availability' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'Coupon_Discount' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3),
		'Admin_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4),
		'indexes' => array(
			'PRIMARY' => array('column' => 'Item_ID', 'unique' => 1)
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
			'Item_ID' => 1,
			'Coupon_Name' => 'Lorem ipsum dolor ',
			'Coupon_Code' => 'Lorem ipsum dolor ',
			'Item_Price' => 1,
			'Item_Quantity' => 1,
			'Item_Availability' => 1,
			'Coupon_Discount' => 1,
			'Admin_ID' => 1
		),
	);

}
