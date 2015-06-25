<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
/**
 * Guides Controller
 *
 * @property Guide $Guide
 * @property PaginatorComponent $Paginator
 */
class GuidesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	
	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('test');
	}
	
	public function test(){
		$this->layout =  "theme";
	}
	
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->layout =  "theme";
		$this->Guide->recursive = 0;
		$this->set('guides', $this->Paginator->paginate());
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
		if (!$this->Guide->exists($id)) {
			throw new NotFoundException(__('Invalid guide'));
		}
		$options = array('conditions' => array('Guide.' . $this->Guide->primaryKey => $id));
		$guide = $this->Guide->find('first', $options);
		$this->set('guide', $guide);
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		$this->layout =  "theme";
		if ($this->request->is('post')) {
			$this->Guide->create();
			$profile_image = $this->request->data['Guide']['profile_image'];
			unset($this->request->data['Guide']['profile_image']);
			$doc = $this->request->data['Guide']['doc'];
			unset($this->request->data['Guide']['doc']);
			if(isset($profile_image['name']) && !empty($profile_image['name'])){
				$image = $this->uploadFiles('guides', array($profile_image));
				$this->request->data['Guide']['profile_image'] = $image['urls'][0];
			}
			if ($this->Guide->save($this->request->data)) {
				$this->Session->setFlash(__('The guide has been saved.'), 'default', array(
					'class'=>'alert alert-success'
				));			
			// UPLOAD DOCS
			if(isset($doc['name']) && !empty($doc['name'])){
				$this->loadModel('Document');
				$docs = $this->uploadDocument('documents', array($doc), $this->Guide->id, 'Guide');
				if(isset($docs['urls'][0]) && !empty($docs['urls'][0])){
				$this->request->data['Document']['path'] = $docs['urls'][0];
				$this->request->data['Document']['name'] = $doc['name'];				
				$this->request->data['Document']['model'] = 'Guide';				
				$this->request->data['Document']['primary_id'] = $this->Guide->id;
				if ($this->Document->save($this->request->data['Document']))
				$this->Session->setFlash(__('The guide has been saved with documents'), 'default', array(
					'class'=>'alert alert-success'
				));
				}else{
					$this->Session->setFlash(__('Doc is not valid'), 'default', array(
						'class'=>'alert alert-warning'
					));				
				}
			}
			return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The guide could not be saved. Please, try again.'), 'default', array(
					'class'=>'alert alert-warning'
				));
			}
		}
		$users = $this->Guide->User->find('list', array(
			'conditions'=>'role_id="3"'
		));
		$countries = $this->Guide->Country->find('list', array(
			'conditions'=>'location_type=0 and parent_id=0 and is_visible=0'
		));
		$states = $this->Guide->State->find('list', array(
			'conditions'=>'location_type=1 and parent_id=224 and is_visible=0'
		));
		$cities = $this->Guide->City->find('list', array(
			'conditions'=>'location_type=2 and parent_id=1565 and is_visible=0'
		));
		$this->set(compact('users', 'countries', 'states', 'cities'));
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
		if (!$this->Guide->exists($id)) {
			throw new NotFoundException(__('Invalid guide'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$doc = $this->request->data['Guide']['doc'];
			unset($this->request->data['Guide']['doc']);
			if(isset($this->request->data['Guide']['profile_image']['name']) && !empty($this->request->data['Guide']['profile_image']['name'])){
				$image = $this->uploadFiles('guides', array($this->request->data['Guide']['profile_image']));	
				$this->request->data['Guide']['profile_image'] = $image['urls'][0];
			}else{
				unset($this->request->data['Guide']['profile_image']);
			}
			if ($this->Guide->save($this->request->data)) {
				// UPLOAD DOCS
				if(isset($doc['name']) && !empty($doc['name'])){
					$this->loadModel('Document');
					$docs = $this->uploadDocument('documents', array($doc), $this->Guide->id, 'Guide');
					if(isset($docs['urls'][0]) && !empty($docs['urls'][0])){
					$this->request->data['Document']['path'] = $docs['urls'][0];
					$this->request->data['Document']['name'] = $doc['name'];				
					$this->request->data['Document']['model'] = 'Guide';				
					$this->request->data['Document']['primary_id'] = $this->Guide->id;

					if ($this->Document->save($this->request->data['Document']))
						$this->Session->setFlash(__('The guide has been saved with documents'), 'default', array(
							'class'=>'alert alert-success'
						));
					}else{
						$this->Session->setFlash(__('The guide has been saved but Doc has not valid extention'), 'default', array(
							'class'=>'alert alert-warning'
						));				
					}
				}
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The guide could not be saved. Please, try again.'), 'default', array(
					'class'=>'alert alert-warning'
				));
			}
		} else {
			$options = array('conditions' => array('Guide.' . $this->Guide->primaryKey => $id));
			$this->request->data = $this->Guide->find('first', $options);
		}
		$users = $this->Guide->User->find('list');
		$countries = $this->Guide->Country->find('list', array(
		'conditions'=>'location_type=0 and parent_id=0 and is_visible=0'
		));
		$states = $this->Guide->State->find('list', array(
		'conditions'=>'location_type=1 and parent_id=224 and is_visible=0'
		));
		$cities = $this->Guide->City->find('list', array(
		'conditions'=>'location_type=2 and parent_id=1565 and is_visible=0'
		));
		$this->set(compact('users','countries','states','cities'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Guide->id = $id;
		if (!$this->Guide->exists()) {
			throw new NotFoundException(__('Invalid guide'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Guide->delete()) {
			$this->Session->setFlash(__('The guide has been deleted.'), 'default', array(
					'class'=>'alert alert-success'
				));
		} else {
			$this->Session->setFlash(__('The guide could not be deleted. Please, try again.'), 'default', array(
					'class'=>'alert alert-warning'
				));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
		public function admin_sendMessage(){
		if ($this->request->is(array('post'))) {
			$attachments = array();
			$doc = $this->request->data['Guide']['doc'];
			// UPLOAD DOCS & ATTACH IMAGE
			if(isset($doc['name']) && !empty($doc['name'])){
				$this->loadModel('Document');
				$docs = $this->uploadDocument('documents', array($doc), rand() , 'Attachments');
				if(isset($docs['urls'][0]) && !empty($docs['urls'][0])){
					$attachments =  array(
						''.$doc['name'].'' => array(
							'file' => ''.WWW_ROOT.'/'.$docs['urls'][0].'',
							'mimetype' => 'image/png',
							'contentId' => rand()
						)
					);
				}
			}
			$guide =  $this->Guide->find('first', array(
				'fields'=>'Guide.email',
				'conditions'=>'Guide.id='.$this->request->data['Guide']['id'].''
			));
			$Email = new CakeEmail('gmail');
			$Email->from(array('info@evolvetours.com' => 'Evolve Tours'))
			->to(''.$guide['Guide']['email'].'')
			->subject('Message From Evolve Tours')
			->emailFormat('html')
			->attachments($attachments)
			->send(''.$this->request->data['Guide']['message'].'');
				$this->Session->setFlash(__('Message has been sent successfully'), 'default', array(
					'class'=>'alert alert-success'
				));
		}else{
				$this->Session->setFlash(__('You are not allowed!'), 'default', array(
					'class'=>'alert alert-warning'
				));
		}
		return $this->redirect($this->referer());
	}
	
	/************/
}


