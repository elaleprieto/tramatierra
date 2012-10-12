<?php
App::uses('AppController', 'Controller');
/**
 * AreasEventos Controller
 *
 * @property AreasEvento $AreasEvento
 */
class AreasEventosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->AreasEvento->recursive = 0;
		$this->set('areasEventos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->AreasEvento->id = $id;
		if (!$this->AreasEvento->exists()) {
			throw new NotFoundException(__('Invalid areas evento'));
		}
		$this->set('areasEvento', $this->AreasEvento->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AreasEvento->create();
			if ($this->AreasEvento->save($this->request->data)) {
				$this->Session->setFlash(__('The areas evento has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The areas evento could not be saved. Please, try again.'));
			}
		}
		$areas = $this->AreasEvento->Area->find('list');
		$eventos = $this->AreasEvento->Evento->find('list');
		$this->set(compact('areas', 'eventos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->AreasEvento->id = $id;
		if (!$this->AreasEvento->exists()) {
			throw new NotFoundException(__('Invalid areas evento'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AreasEvento->save($this->request->data)) {
				$this->Session->setFlash(__('The areas evento has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The areas evento could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->AreasEvento->read(null, $id);
		}
		$areas = $this->AreasEvento->Area->find('list');
		$eventos = $this->AreasEvento->Evento->find('list');
		$this->set(compact('areas', 'eventos'));
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
		$this->AreasEvento->id = $id;
		if (!$this->AreasEvento->exists()) {
			throw new NotFoundException(__('Invalid areas evento'));
		}
		if ($this->AreasEvento->delete()) {
			$this->Session->setFlash(__('Areas evento deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Areas evento was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
