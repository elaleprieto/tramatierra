<?php
App::uses('AppController', 'Controller');
/**
 * MultimediaCategorias Controller
 *
 * @property MultimediaCategoria $MultimediaCategoria
 */
class MultimediaCategoriasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->MultimediaCategoria->recursive = 0;
		$this->set('multimediaCategorias', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->MultimediaCategoria->id = $id;
		if (!$this->MultimediaCategoria->exists()) {
			throw new NotFoundException(__('Invalid multimedia categoria'));
		}
		$this->set('multimediaCategoria', $this->MultimediaCategoria->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MultimediaCategoria->create();
			if ($this->MultimediaCategoria->save($this->request->data)) {
				$this->Session->setFlash(__('The multimedia categoria has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The multimedia categoria could not be saved. Please, try again.'));
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
		$this->MultimediaCategoria->id = $id;
		if (!$this->MultimediaCategoria->exists()) {
			throw new NotFoundException(__('Invalid multimedia categoria'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MultimediaCategoria->save($this->request->data)) {
				$this->Session->setFlash(__('The multimedia categoria has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The multimedia categoria could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->MultimediaCategoria->read(null, $id);
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
		$this->MultimediaCategoria->id = $id;
		if (!$this->MultimediaCategoria->exists()) {
			throw new NotFoundException(__('Invalid multimedia categoria'));
		}
		if ($this->MultimediaCategoria->delete()) {
			$this->Session->setFlash(__('Multimedia categoria deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Multimedia categoria was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
