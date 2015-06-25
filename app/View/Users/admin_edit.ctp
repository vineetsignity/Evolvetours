<?php
	// ADD BREADCRUMBS HERE
	$this->Html->addCrumb('<span class="glyphicon glyphicon-home"></span>',  '/', array(
		'class'=>'crumb-active',
		'escape' => FALSE
	)) ;
	$this->Html->addCrumb('List Users',  array(
		'admin'=>true,
		'controller'=>'users',
		'action'=>'index'
	), array(
		'class'=>'crumb-active'
	)) ;
	$this->Html->addCrumb('Edit User',  '', array('class' => 'crumb-trail')) ;
?>
<div id="content">
	<div class="row">
		<div class="col-md-8">
			<div class="panel">
				<div class="panel-heading">
					<span class="panel-title">Edit User</span>
				</div>
				<div class="panel-body">
					<?php echo $this->Form->create('User', array('class'=>'form-horizontal', 'role'=>'form'));
						echo $this->Form->input('id');
					?>
						<div class="form-group">
							<?php 								
								echo $this->HTML->tag('label', 'Username', array(
											'class' => 'col-lg-2'
										));
								echo $this->Form->input('username', array(
									'label'=>false,
									'div'=>array(
										'class'=>'col-lg-10'
									),
									'class'=>'form-control',
									'required'=>true, 
									'placeholder'=>'Enter Username'
								));
							?>
						</div>
						<div class="form-group">
							<?php 								
								echo $this->HTML->tag('label', 'User Role', array(
											'class' => 'col-lg-2'
										));
								echo $this->Form->input('role_id', array(
									'label'=>false,
									'div'=>array(
										'class'=>'col-lg-10'
									),
									'required'=>true, 
									'class'=>'form-control',
									'placeholder'=>'Choose User Role'
								));
							?>
						</div>
						<div class="form-group">
							<?php 
								echo $this->HTML->tag('div', ' ', array(
											'class' => 'col-lg-2'
										));
								echo $this->Form->submit('Submit', array(
									'label'=>false,
									'div'=>array(
										'class'=>'col-lg-2'
									),
									'class'=>'btn btn-rounded btn-success btn-block',
								));
							?>
						</div>
					<?php echo $this->Form->end(); ?>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<aside class="tray tray-left pn va-t" data-tray-height="match" style="height:auto!important;">
				<div class="p10">
                        <h4 class="ph10 mt10 mb5"> Quick Area </h4>
                        <ul class="nav nav-messages p5" role="menu">
							
								<li><?php echo $this->Form->postLink(__('<span class="fa fa-remove pr5"></span> Delete User'), array('action' => 'delete', $this->Form->value('User.id')), array(
								'class'=>'fw600 p10 animated animated-short fadeInDown',
								'escape'=>false,
								), __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?>
								
								<li><?php echo $this->Html->link('<span class="fa fa-user pr5"></span> List Users', 
								array('action' => 'index'),
								array(
								'class'=>'fw600 p10 animated animated-short fadeInDown',
								'escape'=>false,
								)); ?></li>
                        </ul>
				</div>
			</aside>
		</div>
	</div>
</div>
<?php 
	echo $this->Html->css(array(
		''.Configure::read('BaseURL').'files/theme/assets/js/utility/highlight/styles/googlecode.css',
		''.Configure::read('BaseURL').'files/theme/vendor/plugins/tagmanager/tagmanager.css',
	), array('inline' => false));
	
	echo $this->Html->script(array(
		''.Configure::read('BaseURL').'files/theme/vendor/plugins/jquerymask/jquery.maskedinput.min.js',
		''.Configure::read('BaseURL').'files/theme/vendor/plugins/tagmanager/tagmanager.js',
	), array('block' => 'footerBlock'));


?>