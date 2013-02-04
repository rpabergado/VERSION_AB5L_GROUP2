<?php
App::uses('SummarySale', 'Model');

/**
 * SummarySale Test Case
 *
 */
class SummarySaleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.summary_sale',
		'app.administrator',
		'app.testimonial',
		'app.customer_cart',
		'app.transaction',
		'app.summary_sales',
		'app.used_in',
		'app.cart_item',
		'app.drug',
		'app.category',
		'app.coupon',
		'app.avails',
		'app.avail',
		'app.summary_sales'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SummarySale = ClassRegistry::init('SummarySale');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SummarySale);

		parent::tearDown();
	}

}
