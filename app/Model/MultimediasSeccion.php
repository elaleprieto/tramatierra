<?php
App::uses('AppModel', 'Model');
/**
 * MultimediasSeccion Model
 *
 * @property Multimedia $Multimedia
 * @property Seccion $Seccion
 */
class MultimediasSeccion extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
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
		'seccion_id' => array(
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
		'Multimedia' => array(
			'className' => 'Multimedia',
			'foreignKey' => 'multimedia_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Seccion' => array(
			'className' => 'Seccion',
			'foreignKey' => 'seccion_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
