<?php
App::uses('AppController', 'Controller');
/**
 * SummarySales Controller
 *
 * @property SummarySale $SummarySale
 */
class SummarySalesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SummarySale->recursive = 0;
		$this->set('summarySales', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->SummarySale->id = $id;
		if (!$this->SummarySale->exists()) {
			throw new NotFoundException(__('Invalid summary sale'));
		}
		$this->set('summarySale', $this->SummarySale->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SummarySale->create();
			if ($this->SummarySale->save($this->request->data)) {
				$this->Session->setFlash(__('The summary sale has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The summary sale could not be saved. Please, try again.'));
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
		$this->SummarySale->id = $id;
		if (!$this->SummarySale->exists()) {
			throw new NotFoundException(__('Invalid summary sale'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SummarySale->save($this->request->data)) {
				$this->Session->setFlash(__('The summary sale has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The summary sale could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->SummarySale->read(null, $id);
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
		$this->SummarySale->id = $id;
		if (!$this->SummarySale->exists()) {
			throw new NotFoundException(__('Invalid summary sale'));
		}
		if ($this->SummarySale->delete()) {
			$this->Session->setFlash(__('Summary sale deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Summary sale was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->SummarySale->recursive = 0;
		$this->set('summarySales', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->SummarySale->id = $id;
		if (!$this->SummarySale->exists()) {
			throw new NotFoundException(__('Invalid summary sale'));
		}
		$this->set('summarySale', $this->SummarySale->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->SummarySale->create();
			if ($this->SummarySale->save($this->request->data)) {
				$this->Session->setFlash(__('The summary sale has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The summary sale could not be saved. Please, try again.'));
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
		$this->SummarySale->id = $id;
		if (!$this->SummarySale->exists()) {
			throw new NotFoundException(__('Invalid summary sale'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SummarySale->save($this->request->data)) {
				$this->Session->setFlash(__('The summary sale has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The summary sale could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->SummarySale->read(null, $id);
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
		$this->SummarySale->id = $id;
		if (!$this->SummarySale->exists()) {
			throw new NotFoundException(__('Invalid summary sale'));
		}
		if ($this->SummarySale->delete()) {
			$this->Session->setFlash(__('Summary sale deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Summary sale was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
