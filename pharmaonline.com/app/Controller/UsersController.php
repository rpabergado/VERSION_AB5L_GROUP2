<!-- 
   File: app/Controller/UsersController.php
-->



<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {

var $name = 'Users';

public function beforeFilter() {
	parent::beforeFilter();
 	$this->Auth->allow('signup','signup_success','login');  //action(s) allowed when not logged in
 	$this->Auth->authError = '
		<div class="alert alert-error fade in">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
 		<strong>Unable to perform operation. Please login to continue.</strong>
 		</div>';
 	$this->Auth->loginError ='
				<div class="alert alert-error fade in">
            		<button type="button" class="close" data-dismiss="alert">&times;</button>
 					<strong>Email address or password is invalid. Please try again.</strong>
 				</div>';
 			
 }
//authorization, limit users from accessing prohibited pages
 public function isAuthorized($user) {
 	if(in_array($this->action, array('signup','signup_success','login','logout'))){

 		return true;
 	}

    if (in_array($this->action, array('index', 'viewcart'))) {
        if($user['User_Role'] == 'admin'){
			$this->Session->setFlash('<div class="alert alert-error fade in">
            				<button type="button" class="close" data-dismiss="alert">&times;</button>
 							<strong><i class="icon-ban-circle"></i> Access Prohibited.</strong>
 							</div>');
    		$this->redirect('/admin');
    		return false;
        }
        else{

        	return true;
        }
    }

    if (in_array($this->action, array('admin_userlist', 'admin_index'))) {
        if ($user['User_Role'] == 'admin') {
            return true;
        }
        else{
		$this->Session->setFlash('<div class="alert alert-error fade in">
            				<button type="button" class="close" data-dismiss="alert">&times;</button>
 							<strong><i class="icon-ban-circle"></i> Access Prohibited.</strong>
 							</div>');
    	$this->redirect('/user');

        }
    }

    return parent::isAuthorized($user);
}

/*access methods */
public function login(){
	$this->set('title_for_layout','Login Page');
	if($this->request->is('post')) {
			//if user request is POST
            $user = $this->User->login(
                $this->request->data['User']['User_Eaddress'],
                AuthComponent::password($this->request->data['User']['User_Password'])
            );
            
            if(!empty($user)) {
                $this->Auth->login($user['User']);
                
                // update current User_ID
                $this->User->User_ID = $user['User']['User_ID'];
                
                if($user['User']['User_Role'] == 'admin'){
                	$this->Session->setFlash('<div class="alert alert-sucess fade in">
            				<button type="button" class="close" data-dismiss="alert">&times;</button>
 							<strong>Logged in as Administrator.</strong> <br />
 							<strong>Welcome '.$user['User']['User_FName'].'!</strong>
 							</div>');
                	return $this->redirect(array('controller' => 'users', 'action' => 'index', 'admin' => true));
                }
                else{
                	$this->Session->setFlash('<div class="alert alert-sucess fade in">
            				<button type="button" class="close" data-dismiss="alert">&times;</button>
 							<strong>Logged in as User.</strong> <br />
 							<strong>Welcome '.$user['User']['User_FName'].'!</strong>
 							</div>');
               		 return $this->redirect($this->Auth->redirect());
               	}
                
            } 
            else {
                $this->Session->setFlash($this->Auth->loginError, $this->Auth->flashElement, array(), 'auth');
            }
        }
        
        //check if already logged in
        if($this->Auth->user()) {
            $this->Session->setFlash('You are already logged in.');
            $this->redirect($this->Auth->redirect());
        }
    
  }


public function logout() {
	$this->set('title_for_layout','Logout');
    $this->redirect($this->Auth->logout());
}

/**
 * index method  -- USER DASHBOARD --
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	public function viewcart(){
		$this->set('title_for_layout', 'Cart');
	}

/**
 * add method
 *
 * @return void
 */
	public function signup() {
		$this->set('title_for_layout', 'Registration');
		if ($this->request->is('post')) {
			
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				
				if($this->request->data["User"]["User_Role"] != 'pharmaonlinepassword'){
				$flashMessage = '
				<div class="alert alert-success fade in">
            		<button type="button" class="close" data-dismiss="alert">&times;</button>
 					<strong>Registered as User.</strong>
 				</div>';
 				}
 				else{
				$flashMessage = '
				<div class="alert alert-success fade in">
            		<button type="button" class="close" data-dismiss="alert">&times;</button>
 					<strong>Registered as Administrator.</strong>
 				</div>';

 				}
				$this->Session->setFlash(__($flashMessage));
				$this->redirect('/signup_success');
				
			} else {
				$flashMessage = '
				<div class="alert alert-error fade in">
            		<button type="button" class="close" data-dismiss="alert">&times;</button>
 					<strong>There are still invalid/empty fields.</strong>
 				</div>';
				$this->Session->setFlash(__($flashMessage));
			}
		}
		
	}

	public function signup_success(){

		$this->set('title_for_layout', 'Sign Up Successful');
	}



/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method  -- ADMINISTRATOR DASHBOARD --
 *
 * @return void
 */

	//users only query



	public function admin_index() {
		$this->layout = 'admin_default' ;
		$this->set('title_for_layout','Administrator');

	}

	/* admin_userlist method */


	public function admin_userlist($page=1){
	//	$this->layout = 'admin_default';
		$this->set('title_for_layout','User Lists');
		$this->User->recursive = -1;
		$this->paginate = array(
		'conditions' => array('User.User_Role' => 'user'),
        'limit' => 2,
        'page' => $page,
        'order' => array(
            'User.User_ID' => 'asc'
        )
     );
		$this->set('users', $this->paginate());
	}
/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
		}
	}

/**
 * admin_delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
