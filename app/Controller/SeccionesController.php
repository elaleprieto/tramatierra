<?php
App::uses('AppController', 'Controller');
/**
 * Secciones Controller
 *
 * @property Seccion $Seccion
 */
class SeccionesController extends AppController {
	public function beforeFilter() {
        parent::beforeFilter();
        $this -> Auth -> allow('*');
    }
	

	/**
	 * index method
	 *
	 * @return void
	 */
	public function index() {
		$this -> Seccion -> recursive = 0;
		$this -> set('secciones', $this -> paginate());
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		$this -> Seccion -> id = $id;
		if (!$this -> Seccion -> exists()) {
			throw new NotFoundException(__('Invalid seccion'));
		}
		$this->layout = 'seccion';
		$this -> set('seccion', $this -> Seccion -> read(null, $id));
		// $this -> set('fotos', $this -> Seccion -> Multimedia -> find('list'));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add() {
		if ($this -> request -> is('post')) {
			$this -> Seccion -> create();
			if ($this -> Seccion -> save($this -> request -> data)) {
				$this -> Session -> setFlash(__('The seccion has been saved'));
				$this -> redirect(array('action' => 'index'));
			} else {
				$this -> Session -> setFlash(__('The seccion could not be saved. Please, try again.'));
			}
		}
		$multimedia = $this -> Seccion -> Multimedia -> find('list');
		$this -> set(compact('multimedia'));
	}

	/**
	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function edit($id = null) {
		$this -> Seccion -> id = $id;
		if (!$this -> Seccion -> exists()) {
			throw new NotFoundException(__('Invalid seccion'));
		}
		if ($this -> request -> is('post') || $this -> request -> is('put')) {
			if ($this -> Seccion -> save($this -> request -> data)) {
				$this -> Session -> setFlash(__('The seccion has been saved'));
				$this -> redirect(array('action' => 'index'));
			} else {
				$this -> Session -> setFlash(__('The seccion could not be saved. Please, try again.'));
			}
		} else {
			$this -> request -> data = $this -> Seccion -> read(null, $id);
		}
		$multimedia = $this -> Seccion -> Multimedia -> find('list');
		$this -> set(compact('multimedia'));
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
		if (!$this -> request -> is('post')) {
			throw new MethodNotAllowedException();
		}
		$this -> Seccion -> id = $id;
		if (!$this -> Seccion -> exists()) {
			throw new NotFoundException(__('Invalid seccion'));
		}
		if ($this -> Seccion -> delete()) {
			$this -> Session -> setFlash(__('Seccion deleted'));
			$this -> redirect(array('action' => 'index'));
		}
		$this -> Session -> setFlash(__('Seccion was not deleted'));
		$this -> redirect(array('action' => 'index'));
	}

}
