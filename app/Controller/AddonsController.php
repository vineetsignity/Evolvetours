<?php
App::uses('AppController', 'Controller');
/**
 * Addons Controller
 *
 * @property Addon $Addon
 * @property PaginatorComponent $Paginator
 * @property nComponent $n
 * @property SessionComponent $Session
 */
class AddonsController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('Form');

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->layout =  "theme";
		$this->Addon->recursive = 0;
		$this->set('addons', $this->Paginator->paginate());
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
		if (!$this->Addon->exists($id)) {
			throw new NotFoundException(__('Invalid addon'));
		}
		$options = array('conditions' => array('Addon.' . $this->Addon->primaryKey => $id));
		$this->set('addon', $this->Addon->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		$this->layout =  "theme";
		if ($this->request->is('post')) {
			$this->Addon->create();
			if(isset($this->request->data['Addon']['image']['name']) && !empty($this->request->data['Addon']['image']['name'])){
				$image = $this->uploadFiles('guides', array($this->request->data['Addon']['image']));	
				$this->request->data['Addon']['image'] = $image['urls'][0];
			}else{
			unset($this->request->data['Addon']['image']);
			}
			if ($this->Addon->save($this->request->data)) {
				$this->Session->setFlash(__('The addon has been saved.') , 'default', array(
					'class'=>'alert alert-success'
				));
				return $this->redirect(array('action' => 'index', 'admin'=>true));
			} else {
				$this->Session->setFlash(__('The addon could not be saved. Please, try again.'), 'default', array(
					'class'=>'alert alert-warning'
				));
			}
		}
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
		if (!$this->Addon->exists($id)) {
			throw new NotFoundException(__('Invalid addon'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if(isset($this->request->data['Addon']['image']['name']) && !empty($this->request->data['Addon']['image']['name'])){
				$image = $this->uploadFiles('guides', array($this->request->data['Addon']['image']));	
				$this->request->data['Addon']['image'] = $image['urls'][0];
			}else{
			unset($this->request->data['Addon']['image']);
			}
			if ($this->Addon->save($this->request->data)) {
				$this->Session->setFlash(__('The addon has been saved.'), 'default', array(
					'class'=>'alert alert-success'
				));
				return $this->redirect(array('action' => 'index', 'admin'=>true));
			} else {
				$this->Session->setFlash(__('The addon could not be saved. Please, try again.'), 'default', array(
					'class'=>'alert alert-warning'
				));
			}
		} else {
			$options = array('conditions' => array('Addon.' . $this->Addon->primaryKey => $id));
			$this->request->data = $this->Addon->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Addon->id = $id;
		if (!$this->Addon->exists()) {
			throw new NotFoundException(__('Invalid addon'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Addon->delete()) {
			$this->Session->setFlash(__('The addon has been deleted.'), 'default', array(
					'class'=>'alert alert-success'
				));
		} else {
			$this->Session->setFlash(__('The addon could not be deleted. Please, try again.'), 'default', array(
					'class'=>'alert alert-warning'
				));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
