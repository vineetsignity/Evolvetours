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
class TripAddon extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'assign_qty' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Trip Addon Quantity cant be blank',
				'allowEmpty' => false,
				'required' => true,
				'last' => false, // Stop validation after this rule
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
		'Trip' => array(
			'alias' => 'Trip',
			'className' => 'Trip',
			'foreignKey' => 'trip_id',
			'conditions' => '',
			'fields' => 'Trip.id, Trip.title',
			'order' => ''
		),
		'Addon' => array(
			'alias' => 'Addon',
			'className' => 'Addon',
			'foreignKey' => 'addon_id',
			'conditions' => '',
			'fields' => 'Addon.id, Addon.title',
			'order' => ''
		)
	);
}
