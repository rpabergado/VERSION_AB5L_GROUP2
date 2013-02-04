<?php
App::uses('Transaction', 'Model');

/**
 * Transaction Test Case
 *
 */
class TransactionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.transaction',
		'app.customer_cart',
		'app.testimonial',
		'app.cart_item',
		'app.drug',
		'app.administrator',
		'app.coupon',
		'app.used_in',
		'app.avails',
		'app.avail',
		'app.summary_sales',
		'app.category',
		'app.summary_sales'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Transaction = ClassRegistry::init('Transaction');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Transaction);

		parent::tearDown();
	}

}
