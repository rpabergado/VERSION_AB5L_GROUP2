<?php
App::uses('CartItem', 'Model');

/**
 * CartItem Test Case
 *
 */
class CartItemTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cart_item',
		'app.drug',
		'app.administrator',
		'app.testimonial',
		'app.coupon',
		'app.used_in',
		'app.avails',
		'app.avail',
		'app.summary_sales',
		'app.category',
		'app.customer_cart',
		'app.transaction'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CartItem = ClassRegistry::init('CartItem');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CartItem);

		parent::tearDown();
	}

}
