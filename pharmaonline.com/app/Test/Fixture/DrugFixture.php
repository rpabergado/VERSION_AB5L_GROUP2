<?php
/**
 * DrugFixture
 *
 */
class DrugFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'drug';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'Item_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary', 'comment' => 'should be unique primary key'),
		'Drug_BrandName' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Drug_GenericName' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Item_Price' => array('type' => 'float', 'null' => false, 'default' => null),
		'Item_Quantity' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 15),
		'Item_Availability' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'Drug_Distributor' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Drug_DForm' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Drug_Description' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1000, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Drug_SideEffects' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1000, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Admin_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'Category_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3),
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
			'Drug_BrandName' => 'Lorem ipsum dolor ',
			'Drug_GenericName' => 'Lorem ipsum dolor ',
			'Item_Price' => 1,
			'Item_Quantity' => 1,
			'Item_Availability' => 1,
			'Drug_Distributor' => 'Lorem ipsum dolor ',
			'Drug_DForm' => 'Lorem ipsum dolor ',
			'Drug_Description' => 'Lorem ipsum dolor sit amet',
			'Drug_SideEffects' => 'Lorem ipsum dolor sit amet',
			'Admin_ID' => 1,
			'Category_ID' => 1
		),
	);

}
