<?php
App::uses('AppController', 'Controller');
/**
 * MultimediasSubareas Controller
 *
 * @property MultimediasSubarea $MultimediasSubarea
 */
class MultimediasSubareasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->MultimediasSubarea->recursive = 0;
		$this->set('multimediasSubareas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->MultimediasSubarea->id = $id;
		if (!$this->MultimediasSubarea->exists()) {
			throw new NotFoundException(__('Invalid multimedias subarea'));
		}
		$this->set('multimediasSubarea', $this->MultimediasSubarea->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MultimediasSubarea->create();
			if ($this->MultimediasSubarea->save($this->request->data)) {
				$this->Session->setFlash(__('The multimedias subarea has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The multimedias subarea could not be saved. Please, try again.'));
			}
		}
		$multimedia = $this->MultimediasSubarea->Multimedia->find('list');
		$subareas = $this->MultimediasSubarea->Subarea->find('list');
		$this->set(compact('multimedia', 'subareas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->MultimediasSubarea->id = $id;
		if (!$this->MultimediasSubarea->exists()) {
			throw new NotFoundException(__('Invalid multimedias subarea'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MultimediasSubarea->save($this->request->data)) {
				$this->Session->setFlash(__('The multimedias subarea has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The multimedias subarea could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->MultimediasSubarea->read(null, $id);
		}
		$multimedia = $this->MultimediasSubarea->Multimedia->find('list');
		$subareas = $this->MultimediasSubarea->Subarea->find('list');
		$this->set(compact('multimedia', 'subareas'));
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
		$this->MultimediasSubarea->id = $id;
		if (!$this->MultimediasSubarea->exists()) {
			throw new NotFoundException(__('Invalid multimedias subarea'));
		}
		if ($this->MultimediasSubarea->delete()) {
			$this->Session->setFlash(__('Multimedias subarea deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Multimedias subarea was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
