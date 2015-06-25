<?php
	// ADD BREADCRUMBS HERE
	$this->Html->addCrumb('<span class="glyphicon glyphicon-home"></span>',  '/', array(
		'class'=>'crumb-active',
		'escape' => FALSE
	)) ;
	$this->Html->addCrumb('List Guide',  array(
		'admin'=>true,
		'controller'=>'guides',
		'action'=>'index'
	), array(
		'class'=>'crumb-active'
	)) ;
	$this->Html->addCrumb('Add New Guide',  '', array('class' => 'crumb-trail')) ;
?>
<div id="content">
	<div class="row">
		<div class="col-md-9">
			<div class="panel">
				<div class="panel-heading">
					<span class="panel-title">Add New Guide</span>
				</div>
				<div class="panel-body">
					<?php echo $this->Form->create('Guide', array('class'=>'form-horizontal dropzone dropzone-sm', 'role'=>'form', 'enctype'=>'multipart/form-data')); ?>
						<div class="form-group">
							<?php 								
								echo $this->HTML->tag('label', 'Select Username', array(
											'class' => 'col-lg-3'
										));
								echo $this->Form->input('user_id', array(
									'label'=>false,
									'div'=>array(
										'class'=>'col-lg-9'
									),
									'class'=>'form-control',
									'required'=>true, 
								));
							?>
						</div>					
						<div class="form-group">							
							<?php 								
								echo $this->HTML->tag('label', 'First Name', array(
											'class' => 'col-lg-3'
										));
								echo '<div class="col-lg-9">';
								echo $this->Form->input('first_name', array(
									'label'=>false,
									'div'=>false,
									'required'=>true, 
									'class'=>'form-control',
									'placeholder'=>'Enter First Name'
								));
							?>							 
							<?php echo '</div>'; ?>
						</div>
						<div class="form-group">							
							<?php 								
								echo $this->HTML->tag('label', 'Last Name', array(
											'class' => 'col-lg-3'
										));
								echo $this->Form->input('last_name', array(
									'label'=>false,
									'div'=>array(
										'class'=>'col-lg-9'
									),
									'required'=>true, 
									'class'=>'form-control',
									'placeholder'=>'Enter Last Name'
								));
							?>
						</div>
							<div class="form-group">							
							<?php 								
								echo $this->HTML->tag('label', 'Email', array(
									'class' => 'col-lg-3'
								));
							?>
							<?php echo $this->Form->input('email', array(
								'label'=>false,
								'div'=>array(
									'class'=>'col-lg-9'
								),
								'required'=>true, 
								'class'=>'form-control',
							)); ?>
						</div>
						<div class="form-group">							
							<?php 								
								echo $this->HTML->tag('label', 'Gender', array(
											'class' => 'col-lg-3'
										));
							?>
								<div class="input-group">
									<div class="radio-custom radio-primary mb5">
										<?php echo $this->Form->input('', array(
											'type'=>'radio',
											'name'=>'data[Guide][gender]',
											'hiddenField'=>false,
											'options'=>array(
												'Male'=>'Male',
												'Female'=>'Female'
											),
											'default'=>'Male',
											'div'=>false,
											'legend'=>false
										)); ?>
									</div>								
								</div>
						</div>
						<div class="form-group">							
							<?php 								
							echo $this->HTML->tag('label', 'Profile Pic', array(
								'class' => 'col-lg-3'
							));
							?><div class="col-lg-9">	
								<?php echo $this->Form->file('profile_image', array(
									'label'=>false,
									'div'=>false,
									'required'=>true, 
									'class'=>'',
								)); ?></div>	
						</div>
						<div class="form-group">							
							<?php 								
								echo $this->HTML->tag('label', 'Add File', array(
									'class' => 'col-lg-3'
								));
							?>
							<div class="col-lg-9">	
								<?php echo $this->Form->file('doc', array(
									'label'=>false,
									'div'=>false,
									'required'=>false, 
									'class'=>'',
								)); ?>
							</div>	
						</div>						
						<div class="form-group">							
							<?php 								
								echo $this->HTML->tag('label', 'Date OF Birth', array(
									'class' => 'col-lg-3'
								));
							?>
							<div class="input-group date">
							<span class="input-group-addon cursor"><i class="fa fa-calendar"></i></span>
							<?php echo $this->Form->input('dob', array(
								'type'=>'text',
								'label'=>false,
								'div'=>false,
								'required'=>true, 
								'class'=>'form-control datetimepicker1',
							)); ?>
							</div>
						</div>					
						<div class="form-group">							
							<?php 								
							echo $this->HTML->tag('label', 'Country', array(
								'class' => 'col-lg-3'
							));
							?>
							<?php echo $this->Form->input('country', array(
								'label'=>'Schools',
								'label'=>false,
								'div'=>array(
									'class'=>'col-lg-9'
								),
								'required'=>true, 
								'class'=>'form-control',
							)); ?>
						</div>	
						<div class="form-group">							
							<?php 								
							echo $this->HTML->tag('label', 'state', array(
								'class' => 'col-lg-3'
							));
							?>
							<?php echo $this->Form->input('state', array(
								'label'=>false,
								'div'=>array(
									'class'=>'col-lg-9'
								),
								'required'=>true, 
								'class'=>'form-control',
							)); ?>
						</div>
						<div class="form-group">							
							<?php 								
							echo $this->HTML->tag('label', 'city', array(
								'class' => 'col-lg-3'
							));
							?>
							<?php echo $this->Form->input('city', array(
								'label'=>false,
								'div'=>array(
									'class'=>'col-lg-9'
								),
								'required'=>true, 
								'class'=>'form-control',
							)); ?>
						</div>
						<div class="form-group">							
							<?php 								
							echo $this->HTML->tag('label', 'postal_code', array(
								'class' => 'col-lg-3'
							));
							?>
							<?php echo $this->Form->input('postal_code', array(
								'label'=>false,
								'div'=>array(
									'class'=>'col-lg-9'
								),
								'required'=>true, 
								'class'=>'form-control',
							)); ?>
						</div>
								<div class="form-group">							
								<?php 								
								echo $this->HTML->tag('label', 'Revoke Access', array(
									'class' => 'col-lg-3'
								));
								?>
									<div class="input-group">
											<div class="checkbox-custom checkbox-success mb5">
												<?php echo $this->Form->input('status', 
												array(
													'type'=>'checkbox', 'hiddenField'=>false,
													'label'=>array('text'=>'Block'),
													'div'=>false,
													'required'=>false,
												)); ?>
											</div>
										</div>
								</div>								
						<!---------------->
						<div class="form-group">
							<?php 
								echo $this->HTML->tag('div', ' ', array(
											'class' => 'col-lg-3'
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
		<div class="col-md-3">
			<aside class="tray tray-left pn va-t" data-tray-height="match" style="height:auto!important;">
				<div class="p10">
                        <h4 class="ph10 mt10 mb5"> Quick Area </h4>
                        <ul class="nav nav-messages p5" role="menu">
							<li><?php echo $this->Html->link('<span class="fa fa-user pr5"></span> List Guides', 
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
		''.Configure::read('BaseURL').'files/theme/vendor/plugins/datepicker/css/bootstrap-datetimepicker.css',
	), array('inline' => false));
	
	echo $this->Html->script(array(
		'http://cdnjs.cloudflare.com/ajax/libs/globalize/0.1.1/globalize.min.js',
		'http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.3/moment.js',
		''.Configure::read('BaseURL').'files/theme/vendor/plugins/datepicker/js/bootstrap-datetimepicker.js',
		''.Configure::read('BaseURL').'files/theme/vendor/plugins/jquerymask/jquery.maskedinput.min.js',
		''.Configure::read('BaseURL').'files/theme/vendor/plugins/tagmanager/tagmanager.js',
	), array('block' => 'footerBlock'));
?><?php $this->start('scriptBottom'); ?>
	<script>
		 jQuery(document).ready(function() {
			jQuery('#GuideDob').datetimepicker({
				format: 'YYYY-MM-DD',
				pickDate: true,
				pickTime: false,
				showToday:true,
            });	

			 //CKEDITOR.replace( 'TeacherBio' );
		 });

	</script>
<?php $this->end(); // datatables Js Block ?>