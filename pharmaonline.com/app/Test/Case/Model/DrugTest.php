<?php
App::uses('Drug', 'Model');

/**
 * Drug Test Case
 *
 */
class DrugTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.drug',
		'app.administrator',
		'app.testimonial',
		'app.coupon',
		'app.summary_sales',
		'app.category',
		'app.cart_item'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Drug = ClassRegistry::init('Drug');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Drug);

		parent::tearDown();
	}

}
