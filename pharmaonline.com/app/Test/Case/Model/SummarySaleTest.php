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
		'app.summary_sale'
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
