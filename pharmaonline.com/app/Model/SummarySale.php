<?php
App::uses('AppModel', 'Model');
/**
 * SummarySale Model
 *
 */
class SummarySale extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'Summary_Sales_ID';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'Summary_Sales_ID';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'Summary_Sales_Month' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'Summary_Sales_Year' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'Summary_Sales_Total' => array(
			'money' => array(
				'rule' => array('money'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
