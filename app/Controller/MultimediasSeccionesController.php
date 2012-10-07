<?php
App::uses('AppController', 'Controller');
/**
 * MultimediasSecciones Controller
 *
 * @property MultimediasSeccion $MultimediasSeccion
 */
class MultimediasSeccionesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->MultimediasSeccion->recursive = 0;
		$this->set('multimediasSecciones', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->MultimediasSeccion->id = $id;
		if (!$this->MultimediasSeccion->exists()) {
			throw new NotFoundException(__('Invalid multimedias seccion'));
		}
		$this->set('multimediasSeccion', $this->MultimediasSeccion->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MultimediasSeccion->create();
			if ($this->MultimediasSeccion->save($this->request->data)) {
				$this->Session->setFlash(__('The multimedias seccion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The multimedias seccion could not be saved. Please, try again.'));
			}
		}
		$multimedia = $this->MultimediasSeccion->Multimedia->find('list');
		$secciones = $this->MultimediasSeccion->Seccion->find('list');
		$this->set(compact('multimedia', 'secciones'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->MultimediasSeccion->id = $id;
		if (!$this->MultimediasSeccion->exists()) {
			throw new NotFoundException(__('Invalid multimedias seccion'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MultimediasSeccion->save($this->request->data)) {
				$this->Session->setFlash(__('The multimedias seccion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The multimedias seccion could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->MultimediasSeccion->read(null, $id);
		}
		$multimedia = $this->MultimediasSeccion->Multimedia->find('list');
		$secciones = $this->MultimediasSeccion->Seccion->find('list');
		$this->set(compact('multimedia', 'secciones'));
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
		$this->MultimediasSeccion->id = $id;
		if (!$this->MultimediasSeccion->exists()) {
			throw new NotFoundException(__('Invalid multimedias seccion'));
		}
		if ($this->MultimediasSeccion->delete()) {
			$this->Session->setFlash(__('Multimedias seccion deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Multimedias seccion was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
