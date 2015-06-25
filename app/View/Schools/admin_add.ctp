<?php
	// ADD BREADCRUMBS HERE
	$this->Html->addCrumb('<span class="glyphicon glyphicon-home"></span>',  '/', array(
		'class'=>'crumb-active',
		'escape' => FALSE
	)) ;
	$this->Html->addCrumb('List School',  array(
		'admin'=>true,
		'controller'=>'guides',
		'action'=>'index'
	), array(
		'class'=>'crumb-active'
	)) ;
	$this->Html->addCrumb('Add New School',  '', array('class' => 'crumb-trail')) ;
?>
<div id="content">
	<div class="row">
		<div class="col-md-9">
			<div class="panel">
				<div class="panel-heading">
					<span class="panel-title">Add New School</span>
				</div>
				<div class="panel-body">
					<?php echo $this->Form->create('School', array('class'=>'form-horizontal dropzone dropzone-sm', 'role'=>'form', 'enctype'=>'multipart/form-data')); ?>
						<div class="form-group">
							<?php 								
								echo $this->HTML->tag('label', 'School Name', array(
											'class' => 'col-lg-3'
										));
								echo $this->Form->input('school_name', array(
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
							echo $this->HTML->tag('label', 'Zip', array(
								'class' => 'col-lg-3'
							));
							?>
							<?php echo $this->Form->input('zip', array(
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
								echo $this->HTML->tag('label', 'Address', array(
											'class' => 'col-lg-3'
										));
								echo '<div class="col-lg-9">';
								echo $this->Form->input('address', array(
									'label'=>false,
									'div'=>false,
									'required'=>true, 
									'class'=>'form-control',
									'placeholder'=>'Enter Address'
								));
							?>							 
							<?php echo '</div>'; ?>
						</div>
						<div class="form-group">							
						<?php 								
						echo $this->HTML->tag('label', 'Active / Deactive School', array(
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
							<li><?php echo $this->Html->link('<span class="fa fa-user pr5"></span> List Schools', 
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