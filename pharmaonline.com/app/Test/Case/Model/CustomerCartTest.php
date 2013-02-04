<?php
App::uses('CustomerCart', 'Model');

/**
 * CustomerCart Test Case
 *
 */
class CustomerCartTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.customer_cart',
		'app.testimonial',
		'app.transaction',
		'app.cart_item'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CustomerCart = ClassRegistry::init('CustomerCart');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CustomerCart);

		parent::tearDown();
	}

}
