
<?php
	// ADD BREADCRUMBS HERE
	$this->Html->addCrumb('<span class="glyphicon glyphicon-home"></span>',  '/', array(
		'class'=>'crumb-active',
		'escape' => FALSE
	)) ;
	$this->Html->addCrumb('List Teachers',  array(
		'admin'=>true,
		'controller'=>'teachers',
		'action'=>'index'
	), array(
		'class'=>'crumb-active'
	)) ;
	$this->Html->addCrumb('Edit Teacher',  '', array('class' => 'crumb-trail')) ;
?>
<div id="content">
	<div class="row">
		<div class="col-md-9">
			<div class="panel">
				<div class="panel-heading">
					<span class="panel-title">Edit Teacher</span>
				</div>
				<div class="panel-body">
					<?php echo $this->Form->create('Teacher', 
							array('class'=>'form-horizontal dropzone dropzone-sm', 'role'=>'form', 'enctype'=>'multipart/form-data')); 
					echo $this->Form->input('id');
					?>
						<div class="form-group">
							<?php 								
								echo $this->HTML->tag('label', 'Username', array(
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
							echo $this->HTML->tag('label', 'Teacher Profile Pic', array(
								'class' => 'col-lg-3'
							));
							?><div class="col-lg-9">	
								<?php echo $this->Form->file('image', array(
									'label'=>false,
									'div'=>false,
									'required'=>true, 
									'class'=>'',
								)); ?></div>	
						</div>
						<div class="form-group">							
							<?php 								
							echo $this->HTML->tag('label', 'Document', array(
								'class' => 'col-lg-3'
							));
							?><div class="col-lg-9">	
								<?php echo $this->Form->file('doc', array(
									'label'=>false,
									'div'=>false,
									'required'=>true, 
									'class'=>'',
								)); ?></div>	
						</div>						
						<div class="form-group">							
							<?php 								
							echo $this->HTML->tag('label', 'School', array(
								'class' => 'col-lg-3'
							));
							?>
							<?php echo $this->Form->input('school_id', array(
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
							echo $this->HTML->tag('label', 'Bio', array(
								'class' => 'col-lg-3'
							));
							?>
							<?php echo $this->Form->input('bio', array(
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
													'label'=>false,
													'div'=>false,
													'required'=>true,
													'value'=>'$'
												)); ?>
												<label for="TeacherStatus">Block Teacher</label>
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
							<li><?php echo $this->Html->link('<span class="fa fa-user pr5"></span> List Teachers', 
								array('action' => 'index'),
								array(
								'class'=>'fw600 p10 animated animated-short fadeInDown',
								'escape'=>false,
								)); ?></li>
							<li><?php echo $this->Form->postLink(__('<span class="fa fa-remove pr5"></span> Delete'), array('action' => 'delete', $this->Form->value('Teacher.id')), array(
								'class'=>'fw600 p10 animated animated-short fadeInDown',
								'escape'=>false,
								), __('Are you sure you want to delete # %s?', $this->Form->value('Teacher.id'))); ?></li>
                        </ul>
				</div>
			</aside>
		</div>
	</div>
</div>
<?php 
echo $this->Html->css(array(
	''.Configure::read('BaseURL').'files/theme/assets/js/utility/highlight/styles/googlecode.css',
), array('inline' => false));

echo $this->Html->script(array(
	'//cdn.ckeditor.com/4.4.7/standard/ckeditor.js',
	''.Configure::read('BaseURL').'files/theme/vendor/plugins/jquerymask/jquery.maskedinput.min.js',
	''.Configure::read('BaseURL').'files/theme/vendor/plugins/tagmanager/tagmanager.js',
), array('block' => 'footerBlock'));
?><?php $this->start('scriptBottom'); ?>
	<script>
		 jQuery(document).ready(function() {
			 CKEDITOR.replace( 'TeacherBio' );
		 });

	</script>
<?php $this->end(); // datatables Js Block ?>