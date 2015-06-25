<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property AclComponent $Acl
 * @property AuthComponent $Auth
 * @property SessionComponent $Session
 */
class UsersController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('Js');
	
	public $uses = array(
				'User',
				'Role'
			);

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','Session');
	
/**
 * beforeFilter method
 *
 * @return void
 */	
	public function beforeFilter(){
		parent::beforeFilter();
		
		// Allow only the view and index actions.
		$this->Auth->allow(
			'logout',
			'login'
		);

	}

	
/**
 * Login method
 *
 * @return void
 */	
	public function login(){
		$this->layout	= 'login';
		if ($this->request->is('post')) {
			// Important: Use login() without arguments! See warning below.
			if ($this->Auth->login()) {
				$this->Session->setFlash('You have Successfully Login',
					'default',
					array('class'=>'alert alert-success text-center'),
				'auth');
				return $this->redirect($this->Auth->redirectUrl());
				// Prior to 2.3 use
				// `return $this->redirect($this->Auth->redirect());`
			}
			$this->Session->setFlash(
				__('Username or password is incorrect'),
					'default',
					array('class'=>'alert alert-warning text-center error'),
					'auth'
			);
		}		
	}
	
/**
* logout method
*
* @return void
*/		
	public function logout() {
		$this->Session->setFlash('You have Successfully Logout',
		'default',
			array('class'=>'alert alert-success text-center'),
		'auth');
		return $this->redirect($this->Auth->logout());
	}
	
/**
* add method
*
* @return void
*/	

	public function initDB() {
		// USER DASHBAORD FUNCTIONS
		$this->layout =  "theme";
		
		$this->render('dashbaord');
	}
	
/****************************** ADMIN AUTHENTICATED FUNCTIONS *******************************/	
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->layout =  "theme";
		$Users = $this->User->find('all');
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->layout =  "theme";
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		$this->layout =  "theme";
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'), 'default', array(
					'class'=>'alert alert-success'
				));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'), 'default', array(
					'class'=>'alert alert-warning'
				));
			}
		}
		$roles = $this->User->Role->find('list');
		$this->set(compact('roles'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->layout =  "theme";
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			//pr($this->request->data);
			if ($this->User->updateAll(array(
				'username'=>$this->request->data['User']['username'],
				'role_id'=>$this->request->data['User']['role_id']
			),array(
				'User.id'=>$this->request->data['User']['id']
			))) {
				$this->Session->setFlash(__('The user has been saved.'), 'default', array(
					'class'=>'alert alert-success'
				));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'), 'default', array(
					'class'=>'alert alert-warning'
				));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$roles = $this->User->Role->find('list');
		$this->set(compact('roles'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'), 'default', array(
					'class'=>'alert alert-success'
				));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'), 'default', array(
					'class'=>'alert alert-warning'
				));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
