<?php
App::uses('AppModel', 'Model');
/**
 * Tanque Model
 *
 */
class Tanque extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'idTanque' => array(
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
}
