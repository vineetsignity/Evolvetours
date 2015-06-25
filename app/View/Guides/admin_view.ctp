<?php
	// ADD BREADCRUMBS HERE
	$this->Html->addCrumb('<span class="glyphicon glyphicon-home"></span>',  '/', array(
		'class'=>'crumb-active',
		'escape' => FALSE
	)) ;
	$this->Html->addCrumb('List Guides',  array(
		'admin'=>true,
		'controller'=>'guides',
		'action'=>'index'
	), array(
		'class'=>'crumb-active'
	)) ;
	$this->Html->addCrumb('View Guide',  '', array('class' => 'crumb-trail')) ;
?>
<div id="content">
	<div class="row">
		<div class="col-md-9">
			<div class="panel">
				<div class="panel-heading">
					<span class="panel-title"><?php echo __('View Guide Detail'); ?></span>
					<?php
						echo '<div class="col-xs-3 pull-right">									
								<button class="btn btn-sm btn-info btn-block mt5 sendMessage" data-effect="mfp-with-fade"><i class="fa fa-envelope  mr5"></i>Send Message</button>
							 </div>';
					?>
				<!-- Admin Form Popup -->
                <div id="modal-form-guide-message" class=" popup-basic admin-form mfp-with-fade mfp-hide">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <span class="panel-title"><i class="fa fa-rocket"></i>Send Message</span>
                        </div>
                        <!-- end .panel-heading section -->
						<div class="panel-body">
							<?php 
							echo $this->Form->create('Guide', 
								array(
									'class'=>'form-horizontal',
									'role'=>'form',
									'action'=>'sendMessage',
									'enctype'=>'multipart/form-data'
								)
							);
							echo $this->Form->input('id', array(
								'type'=>'hidden',
								'value'=>''.$guide['Guide']['id'].''
							));
							?>
								<div class="form-group">
									<?php 								
										echo $this->HTML->tag('label', 'To', array(
													'class' => 'col-lg-3'
												));
										echo $this->Form->input('to', array(
											'disabled'=>'disabled',
											'label'=>false,
											'div'=>array(
												'class'=>'col-lg-9'
											),
											'class'=>'form-control',
											'required'=>false,
											'value'=>''.$guide['Guide']['first_name'].' '.$guide['Guide']['last_name'].'',
											'placeholder'=>'Guide'
										));
									?>
								</div>					
								<div class="form-group">							
									<?php 								
										echo $this->HTML->tag('label', 'Message', array(
													'class' => 'col-lg-3'
												));
										echo $this->Form->input('message', array(
											'label'=>false,
											'type'=>'textarea',
											'div'=>array(
												'class'=>'col-lg-9'
											),
											'required'=>true, 
											'class'=>'form-control',
											'placeholder'=>'Enter Message'
										));
									?>
								</div>
								<div class="form-group">
									<?php 								
										echo $this->HTML->tag('label', 'Attach Doc', array(
													'class' => 'col-lg-3'
												));
										echo $this->Form->input('doc', array(
											'type'=>'file',
											'label'=>false,
											'div'=>array(
												'class'=>'col-lg-9'
											),
											'required'=>false, 
											'class'=>'',
										));
									?>
								</div>
								<div class="form-group">
									<?php 
										echo $this->HTML->tag('div', ' ', array(
													'class' => 'col-lg-3'
												));
										echo $this->Form->submit('Submit', array(
											'label'=>false,
											'div'=>array(
												'class'=>'col-lg-4'
											),
											'class'=>'btn btn-rounded btn-info btn-block',
										));
									?>
								</div>
							<?php echo $this->Form->end(); ?>							
						</div>
                    </div>
                    <!-- end: .panel -->
                </div>
                <!-- end: .admin-form -->
				</div>
					<div class="panel-body">
						<div class="row">
								<div class="col-md-2">
								<?php echo $this->Html->image('../'.$guide['Guide']['profile_image'], array(
									'class'=>'img-responsive',
									'height'=>'200px',
									'width'=>'200px'
								)) ?>
							</div>
								<div class="col-md-10">
								<h4>
									<?php echo h($guide['Guide']['first_name']) .' '.h($guide['Guide']['last_name']); ?>
								</h4>
								<p>
									Packed with all the CSS3 animations you crave. Packed with all the CSS3 animations you crave.Packed with all the CSS3 animations you crave.Packed with all the CSS3 animations you crave.Packed with all the CSS3 animations you crave.
								</p>
								<div class="row">
									<div class="col-md-3">
										<label class="fs12 fw700" ><?php echo __('Country'); ?></label>-
										<?php echo h($guide['Country']['name']); ?>
									</div>
									<div class="col-md-3">
										<label class="fs12 fw700" ><?php echo __('State'); ?></label>-
										<?php echo h($guide['State']['name']); ?>
									</div>
									<div class="col-md-3">
										<label class="fs12 fw700" ><?php echo __('City'); ?></label>-
										<?php echo h($guide['City']['name']); ?>
									</div>
									<div class="col-md-3">
										<label class="fs12 fw700" ><?php echo __('Postal Code'); ?></label>-
										<?php echo h($guide['Guide']['postal_code']); ?>
									</div>
								</div>								
							</div>
							
						</div>
						<div class="row mt10">
							<div class="col-md-12">
								<div class="panel panel-dark">
								<div class="panel-heading text-center">
									<span class="panel-title">General Information</span>
								</div>
								<div class="panel-body">
									<table class="table table-striped" >
									<tr>
									<td class="fs12 fw700" ><?php echo __('Username'); ?></td>
									<td valign="top"  class="va-m fw600 text-muted" >
										<?php echo $this->Html->link($guide['User']['username'], array('controller' => 'users', 'action' => 'view', $guide['User']['id'])); ?>
										&nbsp;
									</td></tr>
									<td class="fs12 fw700" ><?php echo __('Gender'); ?></td>
									<td valign="top"  class="va-m fw600 text-muted" >
										<?php echo h($guide['Guide']['gender']); ?>
										&nbsp;
									</td></tr>
									
									<tr>
										<td class="fs12 fw700" ><?php echo __('Documents'); ?></td>
										<td valign="top"  class="va-m fw600 text-muted" >
											<?php
												//pr($guide);
												if(isset($guide['Document']) && !empty($guide['Document'])){
													
														foreach($guide['Document'] as $Document){
															echo '<div class="row well">';
															echo '<div class="col-md-4">'.$Document['name'].'</div>';
															echo '<div class="col-md-8">';
																echo '<div class="col-xs-5">									
																		<a download href="'.Configure::read('BaseURL').$Document['path'].'" class="btn active btn-danger btn-block" type="button">
																			<i class="fa fa-download  mr5"></i>Download
																		</a>
																	</div>';
															echo '</div>';
															echo '</div>';
														}
												}else{
													echo 'No Document';
												}
											?>			
											&nbsp;
										</td>
									</tr>
									
									
									<tr>
									<td class="fs12 fw700" ><?php echo __('Dob'); ?></td>
									<td valign="top"  class="va-m fw600 text-muted" >
										<?php echo h($guide['Guide']['dob']); ?>
										&nbsp;
									</td></tr>
									<tr>
									<td class="fs12 fw700" ><?php echo __('Email'); ?></td>
									<td valign="top"  class="va-m fw600 text-muted" >
										<?php echo h($guide['Guide']['email']); ?>
										&nbsp;
									</td></tr><tr>
									<td class="fs12 fw700" ><?php echo __('Created'); ?></td>
									<td valign="top"  class="va-m fw600 text-muted" >
										<?php echo h($guide['Guide']['created']); ?>
										&nbsp;
									</td></tr>
									</table>
								</div>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<aside class="tray tray-left pn va-t" data-tray-height="match" style="height:auto!important;">
				<div class="p10">
                        <h4 class="ph10 mt10 mb5"> Quick Area </h4>
                        <ul class="nav nav-messages p5" role="menu">
							<li><?php echo $this->Html->link(__('Edit Guide'), array('action' => 'edit', $guide['Guide']['id'])); ?> </li>
							<li><?php echo $this->Form->postLink(__('Delete Guide'), array('action' => 'delete', $guide['Guide']['id']), array(), __('Are you sure you want to delete # %s?', $guide['Guide']['id'])); ?> </li>
							<li><?php echo $this->Html->link(__('List Guides'), array('action' => 'index')); ?> </li>
							<li><?php echo $this->Html->link(__('New Guide'), array('action' => 'add')); ?> </li>
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
		''.Configure::read('BaseURL').'files/theme/vendor/plugins/magnific/magnific-popup.css',
		''.Configure::read('BaseURL').'files/theme/assets/admin-tools/admin-plugins/admin-modal/adminmodal.css',
	), array('inline' => false));
	
	echo $this->Html->script(array(
		''.Configure::read('BaseURL').'files/theme/vendor/plugins/jquerymask/jquery.maskedinput.min.js',
		''.Configure::read('BaseURL').'files/theme/vendor/plugins/magnific/jquery.magnific-popup.js',
	), array('block' => 'footerBlock'));
	
	
?>
<?php $this->start('scriptBottom'); ?>
    <script type="text/javascript">
		 jQuery(document).ready(function() {
				// Inline Admin-Form example 
				$('.sendMessage').click(function(){
					$.magnificPopup.open({
						removalDelay: 500, //delay removal by X to allow out-animation,
						items: {
							src: '#modal-form-guide-message'
						},
						// overflowY: 'hidden', // 
						midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
					});			
				
				});
		 });
    </script>
<?php $this->end(); // datatables Js Block ?>

