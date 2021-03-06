<?php
	// ADD BREADCRUMBS HERE
	$this->Html->addCrumb('<span class="glyphicon glyphicon-home"></span>',  '/', array(
		'class'=>'crumb-active',
		'escape' => FALSE
	)) ;
	$this->Html->addCrumb('List Trip',  array(
		'admin'=>true,
		'controller'=>'trip',
		'action'=>'index'
	), array(
		'class'=>'crumb-active'
	)) ;
	$this->Html->addCrumb('Edit Trip',  '', array('class' => 'crumb-trail')) ;
?>
<div id="content">
	<div class="row">
		<div class="col-md-9">
			<div class="panel">
				<div class="panel-heading">
					<span class="panel-title">Edit Trip</span>
				</div>
				<div class="panel-body">
					<?php echo $this->Form->create('Trip', array('class'=>'form-horizontal dropzone dropzone-sm', 'role'=>'form', 'enctype'=>'multipart/form-data')); echo $this->Form->input('id');
					?><div class="tab-block mb25">
                            <ul class="nav nav-tabs tabs-border nav-justified">
                                <li class="active">
                                    <a href="#tab14" data-toggle="tab">General Information</a>
                                </li>
                                <li>
                                    <a href="#tab15" data-toggle="tab"><i class="fa text-purple pr5"></i>
										Purchase Item
									</a>
                                </li>
                                 <li>
                                    <a href="#tab16" data-toggle="tab"><i class="fa text-purple pr5"></i>
										Payment Method
									</a>
                                </li>
                            </ul>
							<div class="tab-content">
							<div id="tab14" class="tab-pane active">
								<div class="panel panel-dark">
									<div class="panel-heading">
										<span class="panel-title">Trip Information</span>
									</div>
									<div class="panel-body">
										<div class="form-group">
							<?php 								
								echo $this->HTML->tag('label', 'Title', array(
											'class' => 'col-lg-2'
										));
								echo $this->Form->input('title', array(
									'label'=>false,
									'div'=>array(
										'class'=>'col-lg-10'
									),
									'class'=>'form-control',
									'required'=>true, 
									'placeholder'=>'Enter Title'
								));
							?>
						</div>					
										<div class="form-group">							
							<?php 								
								echo $this->HTML->tag('label', 'Unique Code', array(
											'class' => 'col-lg-2'
										));
								echo $this->Form->input('unique_code', array(
									'label'=>false,
									'div'=>array(
										'class'=>'col-lg-10'
									),
									'required'=>true, 
									'class'=>'form-control',
									'placeholder'=>'Enter Unique Code'
								));
							?>
						</div>
										<div class="form-group">							
							<?php 								
								echo $this->HTML->tag('label', 'Description', array(
											'class' => 'col-lg-2'
										));
								echo $this->Form->input('description', array(
									'label'=>false,
									'div'=>array(
										'class'=>'col-lg-10'
									),
									'required'=>true, 
									'class'=>'form-control',
									'placeholder'=>'Enter Description'
								));
							?>
						</div>
										<div class="form-group">							
							<?php 								
							echo $this->HTML->tag('label', 'image', array(
								'class' => 'col-lg-2'
							));
							?><div class="col-lg-10">	
							<?php echo $this->Html->image('../'.$this->request->data['Trip']['image'], array(
								'class'=>'img-responsive',
								'height'=>'100px',
								'width'=>'100px'
							)) ?><br/>
								<?php echo $this->Form->file('image', array(
									'label'=>false,
									'div'=>false,
									'required'=>false, 
									'class'=>'',
								)); ?></div>
						</div>	
										<div class="form-group">							
							<?php 								
							echo $this->HTML->tag('label', 'Country', array(
								'class' => 'col-lg-2'
							));
							?>
							<?php echo $this->Form->input('country_id', array(
								'type'=>'select', 'label'=>'Country', 'options'=>$countries, 'default'=>224,
								'label'=>false,
								'div'=>array(
									'class'=>'col-lg-10'
								),
								'required'=>true, 
								'class'=>'form-control',
							)); ?>
						</div>	
										<div class="form-group">							
							<?php 								
							echo $this->HTML->tag('label', 'State', array(
								'class' => 'col-lg-2'
							));
							?>
							<?php echo $this->Form->input('state_id', array(
								'type'=>'select', 'label'=>'State',
								'label'=>false,
								'div'=>array(
									'class'=>'col-lg-10'
								),
								'required'=>true, 
								'class'=>'form-control',
							)); ?>
						</div>	<div class="form-group">							
							<?php 								
							echo $this->HTML->tag('label', 'City', array(
								'class' => 'col-lg-2'
							));
							?>
							<?php echo $this->Form->input('city_id', array(
								'type'=>'select', 'label'=>'City',
								'label'=>false,
								'div'=>array(
									'class'=>'col-lg-10'
								),
								'required'=>true, 
								'class'=>'form-control',
							)); ?>
						</div>	<div class="form-group">							
							<?php 								
							echo $this->HTML->tag('label', 'From Date', array(
								'class' => 'col-lg-2'
							));
							?>
							<?php echo $this->Form->input('from_date', array(
								'type'=>'text',
								'label'=>false,
								'div'=>array(
									'class'=>'col-lg-10'
								),
								'required'=>true, 
								'class'=>'form-control datetimepicker1',
							)); ?>
						</div>	<div class="form-group">							
							<?php 								
							echo $this->HTML->tag('label', 'To Date', array(
								'class' => 'col-lg-2'
							));
							?>
							<?php echo $this->Form->input('to_date', array(
								'type'=>'text',
								'label'=>false,
								'div'=>array(
									'class'=>'col-lg-10'
								),
								'required'=>true, 
								'class'=>'form-control datetimepicker1',
							)); ?>
						</div>		
										<div class="form-group">							
											<?php 								
											echo $this->HTML->tag('label', 'Schools', array(
												'class' => 'col-lg-2'
											));
											?>
											<?php echo $this->Form->input('school_id', array(
												
												'label'=>false,
												'div'=>array(
													'class'=>'col-lg-10'
												),
												'required'=>true, 
												'class'=>'form-control',
											)); ?>
										</div>		
										<div class="form-group">							
										<?php 								
										echo $this->HTML->tag('label', 'teacher', array(
											'class' => 'col-lg-2'
										));
										?>
										<?php echo $this->Form->input('teacher_id', array(
											
											'label'=>false,
											'div'=>array(
												'class'=>'col-lg-10'
											),
											'required'=>true, 
											'class'=>'form-control',
										)); ?>
									</div>
									</div>
								</div>
								<!-- Test -->
									<div class="panel panel-dark">
										<div class="panel-heading">
										<span class="panel-title">Accommdation</span>
									</div>
										<div class="panel-body">
										<div class="form-group">							
									<?php 								
									echo $this->HTML->tag('label', 'Hotel', array(
										'class' => 'col-lg-2'
									));
									?>
									<?php echo $this->Form->input('hotel', array(
										
										'label'=>false,
										'div'=>array(
											'class'=>'col-lg-10'
										),
										'required'=>true, 
										'class'=>'form-control',
									)); ?>
								</div>
										<div class="form-group">							
									<?php 								
									echo $this->HTML->tag('label', 'No of Rooms', array(
										'class' => 'col-lg-2'
									));
									?>
									<?php echo $this->Form->input('no_of_rooms', array(
										
										'label'=>false,
										'div'=>array(
											'class'=>'col-lg-10'
										),
										'required'=>true, 
										'class'=>'form-control',
									)); ?>
								</div>
									</div>
									</div>
								<div class="form-group">
									<?php 
										echo $this->HTML->tag('div', ' ', array(
													'class' => 'col-lg-2'
												));
										echo '<div class="col-lg-2">'.$this->Form->button('Countinue', array(
											'type'=>'button',
											'label'=>false,
											'id'=>'tab15pro',
											'div'=>false,
											'class'=>'btn btn-rounded btn-info btn-block',
										)).'</div>';
									?>
								</div>							
								
							</div>
								<div id="tab15" class="tab-pane">
									<div class="panel panel-warning">
										<div class="panel-heading">
											<span class="panel-title">Addons For Trip</span>
											<div class="widget-menu pull-right">
												<div class="btn-group">
													<button class="btn btn-xs btn-danger addonExtraButton" type="button">
														<span class="glyphicons glyphicons-more_items mr5 "></span>Add More
													</button>
												</div>
											</div>
										</div>
										<div class="panel-body addonExtraBody" counter="<?php echo count($Addons); ?>">
										<?php 
											if(isset($this->request->data['TripAddon']) && !empty($this->request->data['TripAddon'])){
												foreach($this->request->data['TripAddon'] as $key=>$TripAddon){
											?>
												<div class="form-group <?php if($key==0){ echo 'addonExtra'; }else{ echo'addonNormal';} ?>">							
														<?php 								
															echo $this->HTML->tag('label', 'Addon '.($key+1).'.', array(
																'class' => 'col-lg-2'
															));
														?>
														<div class="col-lg-6">
															<?php 
																echo $this->Form->input('TripAddonaddonid',array(
																	'type'=>'hidden',
																	'name'=>'data[TripAddon]['.$key.'][id]',
																	'value'=>$TripAddon['TripAddon']['id']
																));
																echo $this->Form->input('TripAddonaddons', array(
																'name'=>'data[TripAddon]['.$key.'][addon]',
																'type'=>'select',
																'options'=>$Addons,
																'empty'=>false,
																'label'=>false,
																'div'=>false,
																'required'=>false,
																'value'=>''.$TripAddon['TripAddon']['id'].'',
																'class'=>'form-control',
															)); ?>										
														</div>
														<div class="col-lg-4">
															<?php echo $this->Form->input('TripAddonaddonsqty', array(
																'name'=>'data[TripAddon]['.$key.'][qty]',
																'type'=>'text',
																'label'=>false,
																'div'=>false,
																'value'=>$TripAddon['TripAddon']['assign_qty'],
																'required'=>false,
																'placeholder'=>'Quantity',
																'class'=>'form-control',
															)); ?>
														</div>
													</div>
										<?php }
											}else{
											?>
											<div class="form-group addonExtra">							
												<?php 								
													echo $this->HTML->tag('label', 'Addon 1.', array(
														'class' => 'col-lg-2'
													));
												?>
												<div class="col-lg-6">
													<?php echo $this->Form->input('TripAddonaddons', array(
														'name'=>'data[TripAddon][0][addon]',
														'type'=>'select',
														'options'=>$Addons,
														'empty'=>'Leave Blank',
														'label'=>false,
														'div'=>false,
														'required'=>false,
														'class'=>'form-control',
													)); ?>										
												</div>
												<div class="col-lg-4">
													<?php echo $this->Form->input('TripAddonaddonsqty', array(
														'name'=>'data[TripAddon][0][qty]',
														'type'=>'text',
														'label'=>false,
														'div'=>false,
														'required'=>false,
														'placeholder'=>'Quantity',
														'class'=>'form-control',
													)); ?>
												</div>
											</div>
											<?php
											}
										?>							
										</div>
								</div>
									<div class="form-group">
										<?php 
											echo $this->HTML->tag('div', ' ', array(
														'class' => 'col-lg-2'
													));
											echo '<div class="col-lg-2">'.$this->Form->button('Countinue', array(
												'type'=>'button',
												'label'=>false,
												'id'=>'tab16pro',
												'div'=>false,
												'class'=>'btn btn-rounded btn-info btn-block',
											)).'</div>';
										?>
									</div>
								</div>
								<div id="tab16" class="tab-pane">	
									<div class="form-group">							
									<?php 								
										echo $this->HTML->tag('label', 'Trip Amount', array(
											'class' => 'col-lg-2'
										));
									?>
										<div class="input-group">
											<?php echo $this->Form->input('trip_price_amount', array(
												'type'=>'text',
												'label'=>false,
												'div'=>false,
												'required'=>true, 
												'class'=>'form-control',
											)); ?>
											<span class="input-group-addon">
												<i class="fa fa-usd"></i>
											</span>
										</div>
									</div>		
								<div class="form-group">							
								<?php 								
								echo $this->HTML->tag('label', 'Choose Currency', array(
									'class' => 'col-lg-2'
								));
								?>
									<div class="input-group">
											<div class="checkbox-custom checkbox-success mb5">
												<?php echo $this->Form->input('trip_price_currency', 
												array(
													'type'=>'checkbox', 'hiddenField'=>false,
													'label'=>false,
													'div'=>false,
													'required'=>true,
													'value'=>'$'
												)); ?>
												<label for="TripTripPriceCurrency">$</label>
											</div>
										</div>
								</div>
								<div class="form-group">							
									<?php 								
										echo $this->HTML->tag('label', 'Payment Methods', array(
											'class' => 'col-lg-2'
										));
									?>
									<div class="input-group">
											<div class="checkbox-custom checkbox-success mb5">
												<?php echo $this->Form->input('payment_methods', 
												array(
													'type'=>'checkbox', 'hiddenField'=>false,
													'label'=>false,
													'name'=>'data[Trip][payment_methods][0]',
													'div'=>false,
													'checked'=>(in_array('Credit Card', $this->request->data['Trip']['payment_methods']))?'checked':false,
													'value'=>'Credit Card',
													'id'=>'CreditCard'
												)); ?>
												<label for="CreditCard">Credit Card</label>
											</div>
											<div class="checkbox-custom checkbox-system mb5">
												<?php echo $this->Form->input('payment_methods', 
												array(
													'type'=>'checkbox', 'hiddenField'=>false,
													'label'=>false,
													'name'=>'data[Trip][payment_methods][]',
													'div'=>false,
													'checked'=>(in_array('Debit Card', $this->request->data['Trip']['payment_methods']))?'checked':false,
													'value'=>'Debit Card',
													'id'=>'DebitCard'
												)); ?>
												<label for="DebitCard">Debit Card</label>
											</div>												<div class="checkbox-custom checkbox-system mb5">
												<?php echo $this->Form->input('payment_methods', 
												array(
													'type'=>'checkbox', 'hiddenField'=>false,
													'label'=>false,
													'name'=>'data[Trip][payment_methods][]',
													'div'=>false,
													'checked'=>(in_array('Internet Banking', $this->request->data['Trip']['payment_methods']))?'checked':false,
													'value'=>'Internet Banking',
													'id'=>'InternetBanking'
												)); ?>
												<label for="InternetBanking">Internet Banking</label>
											</div>										
										</div>
								</div>
								<div class="form-group">							
									<?php 								
										echo $this->HTML->tag('label', 'Card Accepted', array(
											'class' => 'col-lg-2'
										));
									?>
									<div class="input-group">
											<div class="checkbox-custom checkbox-success mb5">
												<?php echo $this->Form->input('card_accepted', 
												array(
													'type'=>'checkbox', 'hiddenField'=>false,
													'label'=>false,
													'name'=>'data[Trip][card_accepted][]',
													'div'=>false,
													'checked'=>(in_array('Master Card', $this->request->data['Trip']['card_accepted']))?'checked':false,
													'value'=>'Master Card',
													'id'=>'MasterCard'
												)); ?>
												<label for="MasterCard">Master Card</label>
											</div>
											<div class="checkbox-custom checkbox-system mb5">
												<?php echo $this->Form->input('card_accepted', 
												array(
													'type'=>'checkbox',
													'hiddenField'=>false,
													'label'=>false,
													'name'=>'data[Trip][card_accepted][]',
													'div'=>false,
													'value'=>'Visa',
													'checked'=>(in_array('Visa', $this->request->data['Trip']['card_accepted']))?'checked':false,
													'id'=>'Visa'
												)); ?>
												<label for="Visa">Visa</label>
											</div>									
										</div>
								</div>
								<div class="form-group">							
									<?php 								
										echo $this->HTML->tag('label', 'Payment Types', array(
											'class' => 'col-lg-2'
										));
									?>
									<div class="input-group">
											<div class="checkbox-custom checkbox-success mb5">
												<?php echo $this->Form->input('payment_type', 
												array(
													'type'=>'checkbox', 'hiddenField'=>false,
													'label'=>false,
													'name'=>'data[Trip][payment_type][]',
													'div'=>false,
													'value'=>'Fix',
													'checked'=>(in_array('Fix', $this->request->data['Trip']['payment_type']))?'checked':false,
													'id'=>'Fix'
												)); ?>
												<label for="Fix">Fix</label>
											</div>
											<div class="checkbox-custom checkbox-system mb5">
												<?php echo $this->Form->input('payment_type', 
												array(
													'type'=>'checkbox',
													'hiddenField'=>false,
													'label'=>false,
													'name'=>'data[Trip][payment_type][]',
													'div'=>false,
													'value'=>'Recuring',
													'checked'=>(in_array('Recuring', $this->request->data['Trip']['payment_type']))?'checked':false,
													'id'=>'Recuring'
												)); ?>
												<label for="Recuring">Recuring</label>
											</div>									
										</div>
								</div>
								<div class="form-group">							
							<?php 								
								echo $this->HTML->tag('label', 'Tax Variation Amount', array(
											'class' => 'col-lg-2'
										));
								echo $this->Form->input('tax_variation_amount', array(
									'label'=>false,
									'div'=>array(
										'class'=>'col-lg-10'
									),
									'class'=>'form-control',
									'placeholder'=>'Enter Tax Variation Amount'
								));
							?>
						</div>
						<div class="form-group">							
									<?php 								
										echo $this->HTML->tag('label', 'Tax Variation', array(
											'class' => 'col-lg-2'
										));
									?>
									<div class="input-group">
											<div class="radio-custom radio-primary mb5">
												<input type="radio" <?php if( $this->request->data['Trip']['tax_variation']=='Fixed')
			{ 
				echo 'checked="checked"'; 
		}
	?>
						value="Fixed" id="tax_variationFixed0" name="data[Trip][tax_variation]">
												<label for="tax_variationFixed0">Fixed</label>
											</div>
											<div class="radio-custom radio-primary mb5">
												<input type="radio" 
	<?php if( $this->request->data['Trip']['tax_variation']=='Percentage')
			{ 
				echo 'checked="checked"'; 
		}
	?> value="Percentage" id="TripTaxPercentage" name="data[Trip][tax_variation]">
												<label for="TripTaxPercentage">Percentage</label>
											</div>									
										</div>
								</div>
						<!---------------->
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
					</div>
					</div>
					<?php echo $this->Form->end(); ?>
				</div>
			</div>
		</div>
		</div>
		<div class="col-md-3">
			<aside class="tray tray-left pn va-t" data-tray-height="match" style="height:auto!important;">
				<div class="p10">
                        <h4 class="ph10 mt10 mb5"> Quick Area </h4>
                        <ul class="nav nav-messages p5" role="menu">
								<li><?php echo $this->Form->postLink(__('<span class="fa fa-remove pr5"></span> Delete Trip'), array('action' => 'delete', $this->Form->value('Trip.id')), array(
								'class'=>'fw600 p10 animated animated-short fadeInDown',
								'escape'=>false,
								), __('Are you sure you want to delete # %s?', $this->Form->value('Trip.id'))); ?>
							<li><?php echo $this->Html->link('<span class="fa fa-user pr5"></span> List Trips', 
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
		'//cdn.ckeditor.com/4.4.7/standard/ckeditor.js',
		'http://cdnjs.cloudflare.com/ajax/libs/globalize/0.1.1/globalize.min.js',
		'http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.3/moment.js',
		''.Configure::read('BaseURL').'files/theme/vendor/plugins/datepicker/js/bootstrap-datetimepicker.js',
		''.Configure::read('BaseURL').'files/theme/vendor/plugins/jquerymask/jquery.maskedinput.min.js',
		''.Configure::read('BaseURL').'files/theme/vendor/plugins/tagmanager/tagmanager.js',
	), array('block' => 'footerBlock'));


?><?php $this->start('scriptBottom'); ?>
	<script>
		 jQuery(document).ready(function() {
			jQuery('#TripFromDate').datetimepicker({
				format: 'YYYY-MM-DD',
                pickDate: true,
				showToday:true,
            });
			jQuery('#TripToDate').datetimepicker({
				format: 'YYYY-MM-DD',
                pickDate: true,
				showToday:true,
            });
			 CKEDITOR.replace( 'TripDescription' );
			 
			$('#tab15pro').click(function(){
				$('a[href="#tab15"]').trigger('click');
			});
			
			$('#tab16pro').click(function(){
				$('a[href="#tab16"]').trigger('click');
			});

			var clickedaddonExtra = 1; 
			$('.addonExtraButton').click(function(){
					var counter =  $('.addonExtraBody').attr('counter');
					var addons =  $('.addonExtraBody .form-group').length;
					if(addons<parseInt(counter)){
						clickedaddonExtra++;
						var addonExtraHtml =  $('.addonExtra').html();
						$('.addonExtraBody').append('<div class="form-group Extra'+clickedaddonExtra+'">'+addonExtraHtml+'</div>');
						$('.Extra'+clickedaddonExtra+' .col-lg-2').html('Addon '+clickedaddonExtra+'.');
						$('.Extra'+clickedaddonExtra+' select').attr('name','data[TripAddon]['+clickedaddonExtra+'][addon]');
						$('.Extra'+clickedaddonExtra+' .col-lg-4 input').attr('name','data[TripAddon]['+clickedaddonExtra+'][qty]');
						$('.Extra'+clickedaddonExtra+' .col-lg-4 input').val(0);
					}else{
						alert('No More Addons!');
					}
				return false;
			});			
		 });

	</script>
<?php $this->end(); // datatables Js Block ?>