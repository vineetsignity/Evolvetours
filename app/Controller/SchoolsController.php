<?php
App::uses('AppController', 'Controller');
/**
 * Schools Controller
 *
 * @property School $School
 * @property PaginatorComponent $Paginator
 */
class SchoolsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->layout =  "theme";
		$this->School->recursive = 0;
		$this->set('schools', $this->Paginator->paginate());
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
		if (!$this->School->exists($id)) {
			throw new NotFoundException(__('Invalid school'));
		}
		$options = array('conditions' => array('School.' . $this->School->primaryKey => $id));
		$this->set('school', $this->School->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		$this->layout =  "theme";
		if ($this->request->is('post')) {
			$this->School->create();
			if ($this->School->save($this->request->data)) {
				$this->Session->setFlash(__('The school has been saved.'), 'default', array(
					'class'=>'alert alert-success'
				));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The school could not be saved. Please, try again.'), 'default', array(
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
		if (!$this->School->exists($id)) {
			throw new NotFoundException(__('Invalid school'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->School->save($this->request->data)) {
				$this->Session->setFlash(__('The school has been saved.'), 'default', array(
					'class'=>'alert alert-success'
				));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The school could not be saved. Please, try again.'), 'default', array(
					'class'=>'alert alert-warning'
				));
			}
		} else {
			$options = array('conditions' => array('School.' . $this->School->primaryKey => $id));
			$this->request->data = $this->School->find('first', $options);
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
		$this->School->id = $id;
		if (!$this->School->exists()) {
			throw new NotFoundException(__('Invalid school'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->School->delete()) {
			$this->Session->setFlash(__('The school has been deleted.'));
		} else {
			$this->Session->setFlash(__('The school could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
