<?php
App::uses('AppController', 'Controller');
/**
 * Multimedia Controller
 *
 * @property Multimedia $Multimedia
 */
class MultimediaController extends AppController {
    public function beforeFilter() {
        parent::beforeFilter();
        $this -> Auth -> allow('contactar','add', 'index','view','listar', 'listarTodos', 
        						'view_video', 'view_foto', 'view_publicacion', 'view_audio');
    }

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
	public function view($id = null, $seccion = null) {
		$this -> Multimedia -> id = $id;
		if (!$this -> Multimedia -> exists()) {
			throw new NotFoundException(__('Invalid multimedia'));
		}
		$this -> set('multimedia', $this -> Multimedia -> read(null, $id));
		
		$this->layout = 'seccion';
		$this -> set('seccion', $this -> Multimedia->Seccion -> read(null, $seccion));
		
		//Para saber que tipo de reproductor tiene que desplegar
		//$this -> set('categoria', $this -> Multimedia -> multimedia_categoria_id);
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

	/**
	 * agregar method
	 *
	 * @throws
	 * @throws 
	 * @param 
	 * @return 
	 */
	public function agregar() {
		$this->layout = 'admin';
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
				// $this -> redirect(array('action' => 'index'));
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
	 * listar method
	 * Listado de todos los multimedios de una categoría determinada.
	 * @throws
	 * @throws 
	 * @param 
	 * @return
	 */ 
	public function listar($id=null, $seccion=null){
		$this -> Multimedia -> recursive = 0;
		$this -> set('multimedia', $this -> paginate());
		
		$this -> set('multimedia', $this->Multimedia->find('all', array(
        							'conditions' => array('Multimedia.multimedia_categoria_id =' => $id))));
	}
	
	/**
	 * listarTodos method
	 * Listado de todos los multimedios de una categoría y sección determinada.
	 * @throws
	 * @throws 
	 * @param 
	 * @return
	 */
	public function listarTodos($id=null){
		$this -> Multimedia -> recursive = 0;
		$this -> set('multimedia', $this -> paginate());
		
		//Todos los multimedia
		$this -> set('multimedia', $this->Multimedia->find('all', array(
        							'conditions' => array('Multimedia.multimedia_categoria_id =' => $id))));

		//tratamiento de los reproductores
		if($id == 1){
			//FOTOS
						
		} else if($id==2){
			//VIDEOS
			
		} else if($id == 3){
			//AUDIOS
			
		} else if($id ==4){
			//PUBLICACIONES

		}
	}
	
	
	public function view_video($id = null, $seccion = null) {
		$this -> Multimedia -> id = $id;
		if (!$this -> Multimedia -> exists()) {
			throw new NotFoundException(__('Invalid multimedia'));
		}
		$this -> set('multimedia', $this -> Multimedia -> read(null, $id));
		
		$this->layout = 'seccion_multimedia';
		$this -> set('seccion', $this -> Multimedia->Seccion -> read(null, $seccion));
		
		//Para saber que tipo de reproductor tiene que desplegar
		//$this -> set('categoria', $this -> Multimedia -> multimedia_categoria_id);
	}
	
	public function view_audio($id = null, $seccion = null) {
		$this -> Multimedia -> id = $id;
		if (!$this -> Multimedia -> exists()) {
			throw new NotFoundException(__('Invalid multimedia'));
		}
		$this -> set('multimedia', $this -> Multimedia -> read(null, $id));
		
		$this->layout = 'seccion_multimedia';
		$this -> set('seccion', $this -> Multimedia->Seccion -> read(null, $seccion));
		
		//Para saber que tipo de reproductor tiene que desplegar
		//$this -> set('categoria', $this -> Multimedia -> multimedia_categoria_id);
	}
	
	public function view_publicacion($id = null, $seccion = null) {
		$this -> Multimedia -> id = $id;
		if (!$this -> Multimedia -> exists()) {
			throw new NotFoundException(__('Invalid multimedia'));
		}
		$this -> set('multimedia', $this -> Multimedia -> read(null, $id));
		
		$this->layout = 'seccion_multimedia';
		$this -> set('seccion', $this -> Multimedia->Seccion -> read(null, $seccion));
		

		
		//Para saber que tipo de reproductor tiene que desplegar
		//$this -> set('categoria', $this -> Multimedia -> multimedia_categoria_id);
	}
}
