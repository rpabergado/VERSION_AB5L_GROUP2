<?php
App::uses('AppController', 'Controller');
/**
 * Drugs Controller
 *
 * @property Drug $Drug
 * @property AuthComponent $Auth
 */
class DrugsController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('Javascript');

/**
 * Components
 *
 * @var array
 */
	public $components = array('Auth');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Drug->recursive = 0;
		$this->set('drugs', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Drug->id = $id;
		if (!$this->Drug->exists()) {
			throw new NotFoundException(__('Invalid drug'));
		}
		$this->set('drug', $this->Drug->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Drug->create();
			if ($this->Drug->save($this->request->data)) {
				$this->Session->setFlash(__('The drug has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The drug could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Drug->id = $id;
		if (!$this->Drug->exists()) {
			throw new NotFoundException(__('Invalid drug'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Drug->save($this->request->data)) {
				$this->Session->setFlash(__('The drug has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The drug could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Drug->read(null, $id);
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
		$this->Drug->id = $id;
		if (!$this->Drug->exists()) {
			throw new NotFoundException(__('Invalid drug'));
		}
		if ($this->Drug->delete()) {
			$this->Session->setFlash(__('Drug deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Drug was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Drug->recursive = 0;
		$this->set('drugs', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Drug->id = $id;
		if (!$this->Drug->exists()) {
			throw new NotFoundException(__('Invalid drug'));
		}
		$this->set('drug', $this->Drug->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Drug->create();
			if ($this->Drug->save($this->request->data)) {
				$this->Session->setFlash(__('The drug has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The drug could not be saved. Please, try again.'));
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
		$this->Drug->id = $id;
		if (!$this->Drug->exists()) {
			throw new NotFoundException(__('Invalid drug'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Drug->save($this->request->data)) {
				$this->Session->setFlash(__('The drug has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The drug could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Drug->read(null, $id);
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
		$this->Drug->id = $id;
		if (!$this->Drug->exists()) {
			throw new NotFoundException(__('Invalid drug'));
		}
		if ($this->Drug->delete()) {
			$this->Session->setFlash(__('Drug deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Drug was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
