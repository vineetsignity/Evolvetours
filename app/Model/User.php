<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Role $Role
 */
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'username';
	public $actsAs = array('Acl' => array('type' => 'requester', 'enabled' => false));
	
	public function parentNode() {
        if (!$this->id && empty($this->request->data)) {
            return null;
        }
        if (isset($this->request->data['User']['role_id'])) {
            $groupId = $this->request->data['User']['role_id'];
        } else {
            $groupId = $this->field('role_id');
        }
        if (!$groupId) {
            return null;
        }
        return array('Role' => array('id' => $groupId));
    }
	
	public function bindNode($user) {
		$role = array('model' => 'Role', 'foreign_key' => $user['User']['role_id']);
		return $role;
	}

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'id' => array(
			'blank' => array(
				'rule' => array('blank'),
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
		'Role' => array(
			'className' => 'Role',
			'foreignKey' => 'role_id',
			'conditions' => '',
			'fields' => 'Role.id, Role.title',
			'order' => ''
		)
	);
	
	public function beforeSave($options = array()) {
		if (isset($this->data[$this->alias]['password']) && !empty($this->data[$this->alias]['password'])) {
			$passwordHasher = new BlowfishPasswordHasher();
			$this->data[$this->alias]['password'] = $passwordHasher->hash(
				$this->data[$this->alias]['password']
			);
		}
    return true;
}

}
