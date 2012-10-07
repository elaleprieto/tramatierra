<?php
App::uses('AppController', 'Controller');
/**
 * Subareas Controller
 *
 * @property Subarea $Subarea
 */
class SubareasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Subarea->recursive = 0;
		$this->set('subareas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Subarea->id = $id;
		if (!$this->Subarea->exists()) {
			throw new NotFoundException(__('Invalid subarea'));
		}
		$this->set('subarea', $this->Subarea->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Subarea->create();
			if ($this->Subarea->save($this->request->data)) {
				$this->Session->setFlash(__('The subarea has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subarea could not be saved. Please, try again.'));
			}
		}
		$areas = $this->Subarea->Area->find('list');
		$this->set(compact('areas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Subarea->id = $id;
		if (!$this->Subarea->exists()) {
			throw new NotFoundException(__('Invalid subarea'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Subarea->save($this->request->data)) {
				$this->Session->setFlash(__('The subarea has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subarea could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Subarea->read(null, $id);
		}
		$areas = $this->Subarea->Area->find('list');
		$this->set(compact('areas'));
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
		$this->Subarea->id = $id;
		if (!$this->Subarea->exists()) {
			throw new NotFoundException(__('Invalid subarea'));
		}
		if ($this->Subarea->delete()) {
			$this->Session->setFlash(__('Subarea deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Subarea was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
