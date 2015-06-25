<?php
App::uses('AppController', 'Controller');
/**
 * Trips Controller
 *
 * @property Trip $Trip
 * @property PaginatorComponent $Paginator
 */
class TripsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function admin_index() {
		$this->layout =  "theme";
		$this->Trip->recursive = 0;
		$trips =  $this->Paginator->paginate();
		//pr($trips);
		//exit;
		$this->set('trips',$trips );
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->layout =  "theme";
		if (!$this->Trip->exists($id)) {
			throw new NotFoundException(__('Invalid trip'));
		}
		$options = array('conditions' => array('Trip.' . $this->Trip->primaryKey => $id));
		$this->set('trip', $this->Trip->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		$this->layout =  "theme";
		if ($this->request->is('post')) {
			$this->Trip->create();

			if(isset($this->request->data['Trip']['payment_methods']) && !empty($this->request->data['Trip']['payment_methods'])){
				$payment_methods = implode(',', $this->request->data['Trip']['payment_methods']);
				$this->request->data['Trip']['payment_methods'] = $payment_methods;
			}
			if(isset($this->request->data['Trip']['card_accepted']) && !empty($this->request->data['Trip']['card_accepted'])){
				$card_accepted = implode(',', $this->request->data['Trip']['card_accepted']);
				$this->request->data['Trip']['card_accepted'] = $card_accepted;
			}			
			if(isset($this->request->data['Trip']['payment_type']) && !empty($this->request->data['Trip']['payment_type'])){
				$payment_type = implode(',', $this->request->data['Trip']['payment_type']);
				$this->request->data['Trip']['payment_type'] = $payment_type;	
			}

			if(isset($this->request->data['Trip']['image']['name']) && 
				!empty($this->request->data['Trip']['image']['name'])){
				$image = $this->uploadFiles('trips', array($this->request->data['Trip']['image']));
				$this->request->data['Trip']['image'] = $image['urls'][0];
			}else{
				unset($this->request->data['Trip']['image']);
			}
			
			
			$msz = '';
			if ($this->Trip->save($this->request->data)) {
			
				// CHECK IF TRIP ADDONS ARE SELECTED
					if(isset($this->request->data['TripAddon'][0]['addon']) && !empty($this->request->data['TripAddon'][0]['addon'])){
						$this->loadModel('TripAddon');
						$addons  =  $this->request->data['TripAddon'];
						foreach($addons as $addon){
							$this->request->data['TripAddon']['id'] = NULL;
							$this->request->data['TripAddon']['trip_id'] = $this->Trip->id;
							$this->request->data['TripAddon']['addon_id'] = $addon['addon'];
							$this->request->data['TripAddon']['assign_qty'] = $addon['qty'];
							if($this->TripAddon->save($this->request->data['TripAddon'])==true){
								$msz = 'and Addon saved';
							}
						}
					}
				$this->Session->setFlash(__('The trip has been saved ' .$msz), 'default', array(
					'class'=>'alert alert-success'
				));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The trip could not be saved. Please, try again.'),'default', array(
					'class'=>'alert alert-warning'
				));
			}
		}
		$countries = $this->Trip->Country->find('list', array(
			'conditions'=>'location_type=0 and parent_id=0 and is_visible=0'
		));
		$states = $this->Trip->State->find('list', array(
			'conditions'=>'location_type=1 and parent_id=224 and is_visible=0'
		));
		$cities = $this->Trip->City->find('list', array(
			'conditions'=>'location_type=2 and parent_id=1565 and is_visible=0'
		));
		$schools = $this->Trip->School->find('list');
		$teachers = $this->Trip->Teacher->find('list');
		$this->loadModel('Addon');
		$Addons = $this->Addon->find('list',array(
			'conditions'=>'Addon.status=1',
			'fields'=>'Addon.id, Addon.title',
			'contain' => false
		));
		$this->set(compact('countries', 'states', 'cities', 'schools', 'teachers', 'Addons'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->layout =  "theme";
		if (!$this->Trip->exists($id)) {
			throw new NotFoundException(__('Invalid trip'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if(isset($this->request->data['Trip']['payment_methods']) && !empty($this->request->data['Trip']['payment_methods'])){
				$payment_methods = implode(',', $this->request->data['Trip']['payment_methods']);
				$this->request->data['Trip']['payment_methods'] = $payment_methods;
			}
			if(isset($this->request->data['Trip']['card_accepted']) && !empty($this->request->data['Trip']['card_accepted'])){
				$card_accepted = implode(',', $this->request->data['Trip']['card_accepted']);
				$this->request->data['Trip']['card_accepted'] = $card_accepted;
			}			
			if(isset($this->request->data['Trip']['payment_type']) && !empty($this->request->data['Trip']['payment_type'])){
				$payment_type = implode(',', $this->request->data['Trip']['payment_type']);
				$this->request->data['Trip']['payment_type'] = $payment_type;	
			}
			
			if(isset($this->request->data['Trip']['image']['name']) && 
				!empty($this->request->data['Trip']['image']['name'])){
				$image = $this->uploadFiles('trips', array($this->request->data['Trip']['image']));
				$this->request->data['Trip']['image'] = $image['urls'][0];
			}else{
				unset($this->request->data['Trip']['image']);
			}
			if ($this->Trip->save($this->request->data)) {

				// CHECK IF TRIP ADDONS ARE SELECTED
				if(isset($this->request->data['TripAddon'][0]['qty']) && !empty($this->request->data['TripAddon'][0]['qty'])){
					$this->loadModel('TripAddon');
					$addons  =  $this->request->data['TripAddon'];
					foreach($addons as $addon){
						$this->request->data['TripAddon']['id'] = (isset($addon['id']) && !empty($addon['id']))?$addon['id']:NULL;
						$this->request->data['TripAddon']['trip_id'] = $this->Trip->id;
						$this->request->data['TripAddon']['addon_id'] = $addon['addon'];
						$this->request->data['TripAddon']['assign_qty'] = $addon['qty'];
						$this->TripAddon->save($this->request->data['TripAddon']);
					}
				}
				$this->Session->setFlash(__('The trip has been saved.'), 'default', array(
					'class'=>'alert alert-success'
				));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The trip could not be saved. Please, try again.'), 'default', array(
					'class'=>'alert alert-warning'
				));
			}
		} else {
			$options = array('conditions' => array('Trip.' . $this->Trip->primaryKey => $id));
			$this->request->data = $this->Trip->find('first', $options);
			 $this->request->data['Trip']['payment_methods'] = explode(',', $this->request->data['Trip']['payment_methods']);
			 $this->request->data['Trip']['card_accepted'] = explode(',',  $this->request->data['Trip']['card_accepted']);
			 $this->request->data['Trip']['payment_type'] = explode(',',  $this->request->data['Trip']['payment_type']);
			 $this->loadModel('TripAddon');
			 $this->request->data['TripAddon'] =  $this->TripAddon->find('all', array(
				'conditions'=>'TripAddon.trip_id='.$id.' and TripAddon.status="1"',
				'fields'=>'TripAddon.id, TripAddon.assign_qty, Addon.title, Addon.id',
				'contain'=>'Addon'
			 ));
		}
		$countries = $this->Trip->Country->find('list', array(
			'conditions'=>'location_type=0 and parent_id=0 and is_visible=0'
		));
		$states = $this->Trip->State->find('list', array(
			'conditions'=>'location_type=1 and parent_id=224 and is_visible=0'
		));
		$cities = $this->Trip->City->find('list', array(
			'conditions'=>'location_type=2 and parent_id=1565 and is_visible=0'
		));
		$schools = $this->Trip->School->find('list');
		$teachers = $this->Trip->Teacher->find('list');
		$this->loadModel('Addon');
		$Addons = $this->Addon->find('list',array(
			'conditions'=>'Addon.status=1',
			'fields'=>'Addon.id, Addon.title',
			'contain' => false
		));
		$this->set(compact('countries', 'states', 'cities', 'schools', 'teachers', 'Addons'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Trip->id = $id;
		if (!$this->Trip->exists()) {
			throw new NotFoundException(__('Invalid trip'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Trip->delete()) {
			$this->Session->setFlash(__('The trip has been deleted.'), 'default', array(
					'class'=>'alert alert-success'
				));
		} else {
			$this->Session->setFlash(__('The trip could not be deleted. Please, try again.'), 'default', array(
					'class'=>'alert alert-warning'
				));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
