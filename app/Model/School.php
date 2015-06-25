<?php
App::uses('AppModel', 'Model');
/**
 * School Model
 *
 */
class School extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'school_name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
