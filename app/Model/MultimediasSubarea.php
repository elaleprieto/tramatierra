<?php
App::uses('AppModel', 'Model');
/**
 * MultimediasSubarea Model
 *
 * @property Multimedia $Multimedia
 * @property Subareas $Subareas
 */
class MultimediasSubarea extends AppModel {

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
		'subareas_id' => array(
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
		'Subareas' => array(
			'className' => 'Subareas',
			'foreignKey' => 'subareas_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
