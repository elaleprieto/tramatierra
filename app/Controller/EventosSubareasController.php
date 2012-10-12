<?php
App::uses('AppController', 'Controller');
/**
 * EventosSubareas Controller
 *
 * @property EventosSubarea $EventosSubarea
 */
class EventosSubareasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EventosSubarea->recursive = 0;
		$this->set('eventosSubareas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->EventosSubarea->id = $id;
		if (!$this->EventosSubarea->exists()) {
			throw new NotFoundException(__('Invalid eventos subarea'));
		}
		$this->set('eventosSubarea', $this->EventosSubarea->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EventosSubarea->create();
			if ($this->EventosSubarea->save($this->request->data)) {
				$this->Session->setFlash(__('The eventos subarea has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The eventos subarea could not be saved. Please, try again.'));
			}
		}
		$eventos = $this->EventosSubarea->Evento->find('list');
		$subareas = $this->EventosSubarea->Subarea->find('list');
		$this->set(compact('eventos', 'subareas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->EventosSubarea->id = $id;
		if (!$this->EventosSubarea->exists()) {
			throw new NotFoundException(__('Invalid eventos subarea'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EventosSubarea->save($this->request->data)) {
				$this->Session->setFlash(__('The eventos subarea has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The eventos subarea could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->EventosSubarea->read(null, $id);
		}
		$eventos = $this->EventosSubarea->Evento->find('list');
		$subareas = $this->EventosSubarea->Subarea->find('list');
		$this->set(compact('eventos', 'subareas'));
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
		$this->EventosSubarea->id = $id;
		if (!$this->EventosSubarea->exists()) {
			throw new NotFoundException(__('Invalid eventos subarea'));
		}
		if ($this->EventosSubarea->delete()) {
			$this->Session->setFlash(__('Eventos subarea deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Eventos subarea was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
