<?php
/**
 * TestimonialFixture
 *
 */
class TestimonialFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'testimonial';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'Testimonial_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'Testimonial_Author' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Testimonial_DPosting' => array('type' => 'date', 'null' => false, 'default' => null),
		'Testimonial_Body' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1000, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'User_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'indexes' => array(
			'PRIMARY' => array('column' => 'Testimonial_ID', 'unique' => 1)
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
			'Testimonial_ID' => 1,
			'Testimonial_Author' => 'Lorem ipsum dolor sit amet',
			'Testimonial_DPosting' => '2013-02-05',
			'Testimonial_Body' => 'Lorem ipsum dolor sit amet',
			'User_ID' => 1
		),
	);

}
