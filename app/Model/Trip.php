<?php
App::uses('AppModel', 'Model');
/**
 * Trip Model
 *
 * @property Country $Country
 * @property State $State
 * @property City $City
 * @property School $School
 * @property Teacher $Teacher
 */
class Trip extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'title' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		)
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Country' => array(
			'alias' => 'Country',
			'className' => 'Location',
			'foreignKey' => 'country_id',
			'conditions' => '',
			'fields' => 'Country.id, Country.name',
			'order' => ''
		),
		'State' => array(
			'alias' => 'State',
			'className' => 'Location',
			'foreignKey' => 'state_id',
			'conditions' => '',
			'fields' => 'State.id, State.name',
			'order' => ''
		),
		'City' => array(
			'alias' => 'City',
			'className' => 'Location',
			'foreignKey' => 'city_id',
			'fields' => 'City.id, City.name',
			'order' => ''
		),
		'School' => array(
			'className' => 'School',
			'foreignKey' => 'school_id',
			'conditions' => '',
			'fields' => 'School.id, School.school_name',
			'order' => ''
		),
		'Teacher' => array(
			'className' => 'Teacher',
			'foreignKey' => 'teacher_id',
			'conditions' => '',
			'fields' => 'Teacher.id, Teacher.first_name, Teacher.last_name',
			'order' => ''
		)
	);
}
