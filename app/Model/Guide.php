<?php
App::uses('AppModel', 'Model');
/**
 * Guide Model
 *
 * @property User $User
 */
class Guide extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'guide';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'first_name';

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

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'fields' => array(
				'User.id',
				'User.username'
				),
		),
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
		)
	);
	
	public $hasMany = array(
		'Document' => array(
			'className' => 'Document',
			'foreignKey' => 'primary_id',
			'fields' => array(
					'Document.id',
					'Document.name',
					'Document.path'
				),
			'conditions'=>'Document.model="Guide" and Document.deleted="0"',
			'dependent' => true
		),
	);
}
