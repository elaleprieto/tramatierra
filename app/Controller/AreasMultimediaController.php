<?php
App::uses('AppController', 'Controller');
/**
 * AreasMultimedia Controller
 *
 * @property AreasMultimedia $AreasMultimedia
 */
class AreasMultimediaController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->AreasMultimedia->recursive = 0;
		$this->set('areasMultimedia', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->AreasMultimedia->id = $id;
		if (!$this->AreasMultimedia->exists()) {
			throw new NotFoundException(__('Invalid areas multimedia'));
		}
		$this->set('areasMultimedia', $this->AreasMultimedia->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AreasMultimedia->create();
			if ($this->AreasMultimedia->save($this->request->data)) {
				$this->Session->setFlash(__('The areas multimedia has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The areas multimedia could not be saved. Please, try again.'));
			}
		}
		$areas = $this->AreasMultimedia->Area->find('list');
		$multimedia = $this->AreasMultimedia->Multimedia->find('list');
		$this->set(compact('areas', 'multimedia'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->AreasMultimedia->id = $id;
		if (!$this->AreasMultimedia->exists()) {
			throw new NotFoundException(__('Invalid areas multimedia'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AreasMultimedia->save($this->request->data)) {
				$this->Session->setFlash(__('The areas multimedia has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The areas multimedia could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->AreasMultimedia->read(null, $id);
		}
		$areas = $this->AreasMultimedia->Area->find('list');
		$multimedia = $this->AreasMultimedia->Multimedia->find('list');
		$this->set(compact('areas', 'multimedia'));
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
		$this->AreasMultimedia->id = $id;
		if (!$this->AreasMultimedia->exists()) {
			throw new NotFoundException(__('Invalid areas multimedia'));
		}
		if ($this->AreasMultimedia->delete()) {
			$this->Session->setFlash(__('Areas multimedia deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Areas multimedia was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
