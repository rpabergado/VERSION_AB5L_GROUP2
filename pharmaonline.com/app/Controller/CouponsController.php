<?php
App::uses('AppController', 'Controller');
/**
 * Coupons Controller
 *
 * @property Coupon $Coupon
 */
class CouponsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Coupon->recursive = 0;
		$this->set('coupons', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Coupon->id = $id;
		if (!$this->Coupon->exists()) {
			throw new NotFoundException(__('Invalid coupon'));
		}
		$this->set('coupon', $this->Coupon->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Coupon->create();
			if ($this->Coupon->save($this->request->data)) {
				$this->Session->setFlash(__('The coupon has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The coupon could not be saved. Please, try again.'));
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
		$this->Coupon->id = $id;
		if (!$this->Coupon->exists()) {
			throw new NotFoundException(__('Invalid coupon'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Coupon->save($this->request->data)) {
				$this->Session->setFlash(__('The coupon has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The coupon could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Coupon->read(null, $id);
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
		$this->Coupon->id = $id;
		if (!$this->Coupon->exists()) {
			throw new NotFoundException(__('Invalid coupon'));
		}
		if ($this->Coupon->delete()) {
			$this->Session->setFlash(__('Coupon deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Coupon was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Coupon->recursive = 0;
		$this->set('coupons', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Coupon->id = $id;
		if (!$this->Coupon->exists()) {
			throw new NotFoundException(__('Invalid coupon'));
		}
		$this->set('coupon', $this->Coupon->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Coupon->create();
			if ($this->Coupon->save($this->request->data)) {
				$this->Session->setFlash(__('The coupon has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The coupon could not be saved. Please, try again.'));
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
		$this->Coupon->id = $id;
		if (!$this->Coupon->exists()) {
			throw new NotFoundException(__('Invalid coupon'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Coupon->save($this->request->data)) {
				$this->Session->setFlash(__('The coupon has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The coupon could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Coupon->read(null, $id);
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
		$this->Coupon->id = $id;
		if (!$this->Coupon->exists()) {
			throw new NotFoundException(__('Invalid coupon'));
		}
		if ($this->Coupon->delete()) {
			$this->Session->setFlash(__('Coupon deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Coupon was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
