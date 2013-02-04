<?php
/**
 * SummarySaleFixture
 *
 */
class SummarySaleFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'Summary_Sales_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'Summary_Sales_Month' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 15, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Summary_Sales_Year' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 4, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Summary_Sales_Total' => array('type' => 'float', 'null' => false, 'default' => null),
		'Admin_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4),
		'indexes' => array(
			'PRIMARY' => array('column' => 'Summary_Sales_ID', 'unique' => 1)
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
			'Summary_Sales_ID' => 1,
			'Summary_Sales_Month' => 'Lorem ipsum d',
			'Summary_Sales_Year' => 'Lo',
			'Summary_Sales_Total' => 1,
			'Admin_ID' => 1
		),
	);

}
