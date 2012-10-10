<?php
App::uses('AppModel', 'Model');
/**
 * AreasMultimedia Model
 *
 * @property Area $Area
 * @property Multimedia $Multimedia
 */
class AreasMultimedia extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'areas_multimedias';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'area_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'multimedia_id' => array(
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
		'Area' => array(
			'className' => 'Area',
			'foreignKey' => 'area_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Multimedia' => array(
			'className' => 'Multimedia',
			'foreignKey' => 'multimedia_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
