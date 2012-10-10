<?php
App::uses('AppModel', 'Model');
/**
 * Multimedia Model
 *
 * @property MultimediaCategoria $MultimediaCategoria
 * @property Area $Area
 * @property Seccion $Seccion
 * @property Subarea $Subarea
 */
class Multimedia extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'multimedias';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'title' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'multimedia_categoria_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'MultimediaCategoria' => array(
			'className' => 'MultimediaCategoria',
			'foreignKey' => 'multimedia_categoria_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Area' => array(
			'className' => 'Area',
			'joinTable' => 'areas_multimedias',
			'foreignKey' => 'multimedia_id',
			'associationForeignKey' => 'area_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Seccion' => array(
			'className' => 'Seccion',
			'joinTable' => 'multimedias_secciones',
			'foreignKey' => 'multimedia_id',
			'associationForeignKey' => 'seccion_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Subarea' => array(
			'className' => 'Subarea',
			'joinTable' => 'multimedias_subareas',
			'foreignKey' => 'multimedia_id',
			'associationForeignKey' => 'subarea_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
