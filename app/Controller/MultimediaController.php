<?php
App::uses('AppController', 'Controller');
/**
 * Multimedia Controller
 *
 * @property Multimedia $Multimedia
 */
class MultimediaController extends AppController {

	/**
	 * index method
	 *
	 * @return void
	 */
	public function index() {
		$this -> Multimedia -> recursive = 0;
		$this -> set('multimedia', $this -> paginate());
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		$this -> Multimedia -> id = $id;
		if (!$this -> Multimedia -> exists()) {
			throw new NotFoundException(__('Invalid multimedia'));
		}
		$this -> set('multimedia', $this -> Multimedia -> read(null, $id));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add() {
		if ($this -> request -> is('post')) {
			$this -> Multimedia -> create();
			if ($this -> Multimedia -> save($this -> request -> data)) {
				$this -> Session -> setFlash(__('The multimedia has been saved'));
				$this -> redirect(array('action' => 'index'));
			} else {
				$this -> Session -> setFlash(__('The multimedia could not be saved. Please, try again.'));
			}
		}
		$multimediaCategorias = $this -> Multimedia -> MultimediaCategoria -> find('list');
		$areas = $this -> Multimedia -> Area -> find('list');
		$secciones = $this -> Multimedia -> Seccion -> find('list');
		$subareas = $this -> Multimedia -> Subarea -> find('list');
		$this -> set(compact('multimediaCategorias', 'areas', 'secciones', 'subareas'));
	}

	/**
	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function edit($id = null) {
		$this -> Multimedia -> id = $id;
		if (!$this -> Multimedia -> exists()) {
			throw new NotFoundException(__('Invalid multimedia'));
		}
		if ($this -> request -> is('post') || $this -> request -> is('put')) {
			if ($this -> Multimedia -> save($this -> request -> data)) {
				$this -> Session -> setFlash(__('The multimedia has been saved'));
				$this -> redirect(array('action' => 'index'));
			} else {
				$this -> Session -> setFlash(__('The multimedia could not be saved. Please, try again.'));
			}
		} else {
			$this -> request -> data = $this -> Multimedia -> read(null, $id);
		}
		$multimediaCategorias = $this -> Multimedia -> MultimediaCategoria -> find('list');
		$areas = $this -> Multimedia -> Area -> find('list');
		$secciones = $this -> Multimedia -> Seccion -> find('list');
		$subareas = $this -> Multimedia -> Subarea -> find('list');
		$this -> set(compact('multimediaCategorias', 'areas', 'secciones', 'subareas'));
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
		$this -> Multimedia -> id = $id;
		if (!$this -> Multimedia -> exists()) {
			throw new NotFoundException(__('Invalid multimedia'));
		}
		if ($this -> Multimedia -> delete()) {
			$this -> Session -> setFlash(__('Multimedia deleted'));
			$this -> redirect(array('action' => 'index'));
		}
		$this -> Session -> setFlash(__('Multimedia was not deleted'));
		$this -> redirect(array('action' => 'index'));
	}

	public function agregar() {
		if ($this -> request -> is('post')) {
			$this -> Multimedia -> create();
			$this -> Multimedia -> set($this -> request -> data);

			# Se verifica y se setea el archivo multimedia
			if (isset($this -> data['Multimedia']['archivo']['name']) && ($this -> data['Multimedia']['archivo']['name'] != '')) {
				$nombreArchivo = $this -> data['Multimedia']['archivo']['name'];
				$uploadDir = WWW_ROOT . '/mm/';
				$uploadFile = $uploadDir . $nombreArchivo;

				if (!move_uploaded_file($this -> data['Multimedia']['archivo']['tmp_name'], $uploadFile)) {
					$this -> Session -> setFlash(__('The multimedia could not be saved. Please, verify the file.'));
					return $this -> redirect(array('action' => 'cargar', $this -> request -> data));
				}
				$this -> Multimedia -> set('archivo', $nombreArchivo);
			} else {
				$this -> Multimedia -> set('archivo', '');
			}

			if ($this -> Multimedia -> save()) {
				$this -> Session -> setFlash(__('The multimedia has been saved'));
				$this -> redirect(array('action' => 'index'));
			} else {
				$this -> Session -> setFlash(__('The multimedia could not be saved. Please, try again.'));
			}
		}
		$multimediaCategorias = $this -> Multimedia -> MultimediaCategoria -> find('list');
		$areas = $this -> Multimedia -> Area -> find('list');
		$secciones = $this -> Multimedia -> Seccion -> find('list');
		$subareas = $this -> Multimedia -> Subarea -> find('list');
		$this -> set(compact('multimediaCategorias', 'areas', 'secciones', 'subareas'));
	}
}
