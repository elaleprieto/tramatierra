<?php
App::uses('AppController', 'Controller');
/**
 * EventosSecciones Controller
 *
 * @property EventosSeccion $EventosSeccion
 */
class EventosSeccionesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EventosSeccion->recursive = 0;
		$this->set('eventosSecciones', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->EventosSeccion->id = $id;
		if (!$this->EventosSeccion->exists()) {
			throw new NotFoundException(__('Invalid eventos seccion'));
		}
		$this->set('eventosSeccion', $this->EventosSeccion->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EventosSeccion->create();
			if ($this->EventosSeccion->save($this->request->data)) {
				$this->Session->setFlash(__('The eventos seccion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The eventos seccion could not be saved. Please, try again.'));
			}
		}
		$eventos = $this->EventosSeccion->Evento->find('list');
		$secciones = $this->EventosSeccion->Seccion->find('list');
		$this->set(compact('eventos', 'secciones'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->EventosSeccion->id = $id;
		if (!$this->EventosSeccion->exists()) {
			throw new NotFoundException(__('Invalid eventos seccion'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EventosSeccion->save($this->request->data)) {
				$this->Session->setFlash(__('The eventos seccion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The eventos seccion could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->EventosSeccion->read(null, $id);
		}
		$eventos = $this->EventosSeccion->Evento->find('list');
		$secciones = $this->EventosSeccion->Seccion->find('list');
		$this->set(compact('eventos', 'secciones'));
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
		$this->EventosSeccion->id = $id;
		if (!$this->EventosSeccion->exists()) {
			throw new NotFoundException(__('Invalid eventos seccion'));
		}
		if ($this->EventosSeccion->delete()) {
			$this->Session->setFlash(__('Eventos seccion deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Eventos seccion was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
