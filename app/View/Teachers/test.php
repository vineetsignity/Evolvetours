<?php
	// ADD BREADCRUMBS HERE
	$this->Html->addCrumb('<span class="glyphicon glyphicon-home"></span>',  '/', array(
		'class'=>'crumb-active',
		'escape' => FALSE
	)) ;
	$this->Html->addCrumb('List Addons',  array(
		'admin'=>true,
		'controller'=>'addons',
		'action'=>'index'
	), array(
		'class'=>'crumb-active'
	)) ;
	$this->Html->addCrumb('Add New Addon',  '', array('class' => 'crumb-trail')) ;
?>
<div id="content">
	<div class="row">
		<div class="col-md-9">
			<div class="panel">
				<div class="panel-heading">
					<span class="panel-title">Add New Addon</span>
				</div>
				<div class="panel-body">
					<?php echo $this->Form->create('Addon', array('class'=>'form-horizontal', 'role'=>'form', 'enctype'=>'multipart/form-data')); ?>
						<div class="form-group">
							<?php 								
								echo $this->HTML->tag('label', 'Title', array(
											'class' => 'col-lg-3'
										));
								echo $this->Form->input('title', array(
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
								echo $this->HTML->tag('label', 'Description', array(
											'class' => 'col-lg-3'
										));
								echo '<div class="col-lg-9">';
								echo $this->Form->input('description', array(
									'label'=>false,
									'div'=>false,
									'required'=>true, 
									'class'=>'form-control',
									'placeholder'=>'Enter Description'
								));
							?>							 
							<?php echo '</div>'; ?>
						</div>
						<div class="form-group">							
							<?php 								
								echo $this->HTML->tag('label', 'Short Description', array(
											'class' => 'col-lg-3'
										));
								echo '<div class="col-lg-9">';
								echo $this->Form->input('short_description', array(
									'type'=>'textarea',
									'label'=>false,
									'div'=>false,
									'required'=>true, 
									'class'=>'form-control',
									'placeholder'=>'Enter Short Description'
								));
							?>							 
							<?php echo '</div>'; ?>
						</div>
						<div class="form-group">							
							<?php 								
								echo $this->HTML->tag('label', 'Price', array(
											'class' => 'col-lg-3'
										));
								echo $this->Form->input('price', array(
									'label'=>false,
									'div'=>array(
										'class'=>'col-lg-9'
									),
									'required'=>true, 
									'class'=>'form-control',
									'placeholder'=>'Enter Price'
								));
							?>
						</div>
						<div class="form-group">							
							<?php 								
							echo $this->HTML->tag('label', 'Image', array(
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
							echo $this->HTML->tag('label', 'Quantity', array(
								'class' => 'col-lg-3'
							));
							?>
							<?php echo $this->Form->input('quantity', array(
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
										<label for="TeacherStatus">Block</label>
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
							<li><?php echo $this->Html->link('<span class="fa fa-user pr5"></span> List Addons', 
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