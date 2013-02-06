<?php
App::uses('AppModel', 'Model');
/**
 * Testimonial Model
 *
 */
class Testimonial extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'testimonial';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'Testimonial_ID';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'Testimonial_ID';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'Testimonial_Author' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'Testimonial_DPosting' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'Testimonial_Body' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
