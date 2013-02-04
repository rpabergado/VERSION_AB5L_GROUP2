<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 */
class User extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'user';
	var $name = 'User';
	public $useDbConfig = 'default';
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'User_ID';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'User_ID';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'User_FName' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please provide your first name.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'lettersOnly' => array(
				'rule'    => '/^[a-z ]+$/i ',
        		'message' => 'Invalid input. Only letters are allowed.'

			)
		),
		'User_LName' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please provide your last name.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'lettersOnly' => array(
				'rule'    => '/^[a-z ]+$/i ',
        		'message' => 'Invalid input. Only letters are allowed.'

			)
		),
		'User_MName' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please provide your middle name.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'lettersOnly' => array(
				'rule'    => '/^[a-z ]+$/i ',
        		'message' => 'Invalid input. Only letters are allowed.'

			)
		),
		'User_Address' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please provide your address.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		
		),
		'User_Eaddress' => array(
			'email' => array(
				'rule' => array('email'),
				'message' => 'Email address is invalid.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please provide your email.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'isUnique' => array(
				'rule' => 'isUnique',
				'message' => 'Email address has already been taken.'
			)
		),
		'User_Password' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please provide your password.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'minlength' => array(
				'rule' => array('minlength', 4),
				'message' => 'Password is too short.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'passCompare' => array(
            	'rule' => array('passCompare'),
            	'message' => 'The passwords do not match',
          	)
		),
	);

	public function passCompare() {

        return ($this->data['User']['User_Password'] === $this->data['User']['User_CPassword']);        
    }
    
    public function beforeSave() {

    	if(!($this->data['User']['User_Role'] == "pharmaonlinepassword")){

    		$this->data['User']['User_Role'] = 'user';
    	}
    	else{

    		$this->data['User']['User_Role'] = 'admin';
    	}

        $this->data['User']['User_Password'] = AuthComponent::password($this->data['User']['User_Password']);
        return true;
    }

	public function login($User_Eaddress, $User_Password) {
        return $this->find('first', array(
            'conditions' => array(
                'OR' => array(
                    'User.User_Eaddress' => $User_Eaddress,
                ),
                'User.User_Password' => $User_Password
            ),
            'recursive' => -1
        ));
    }

}
