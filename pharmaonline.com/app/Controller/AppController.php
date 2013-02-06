<!-- 
   File: app/Controller/AppController.php
-->



<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {


public $helpers = array('Html', 'Js', 'Form', 'Session');

public $components = array(
    'Session',
    'RequestHandler',
    'DebugKit.Toolbar',
    'Auth' => array(
        'loginAction' => array(
            'controller' => 'users',
            'action' => 'login'
        ),
        'loginRedirect' => array(
            'controller' => 'users',
            'action' => 'index',
        ),
        'logoutRedirect' => array(
            'controller' => 'pages',
            'action' => 'display',
        ),
         'authorize' => array('Controller'),
    )
);

public function isAuthorized($user) {
    // Admin can access every action
    if (isset($user['User_Role']) && $user['User_Role'] === 'admin') {
        return true;
    }

    // Default deny
    return false;
}

 public function beforeFilter(){
        //request parameters
    if (isset($this->request->params['page'])) {
             $this->request->params['named']['page'] = $this->request->params['page'];
        }

     $this->Auth->userModel = 'User';
     $this->Auth->fields = array(
         'username' => 'email',
         'password' => 'password',
     );


}

//change layout for user and admin
    public function beforeRender() {
        $this->_configureErrorLayout();
        
    }
 
    public function _configureErrorLayout() {
       
            if ($this->_isAdminMode()) {
                $this->layout = 'admin_default';
            } else {
                $this->layout = 'default';
            }
        
    }
 
    public function _isAdminMode() {
        $adminRoute = Configure::read('Routing.prefixes');
        if (isset($this->params['prefix']) && in_array($this->params['prefix'], $adminRoute)) {
            return true;
        }
        return false;
    }


}
