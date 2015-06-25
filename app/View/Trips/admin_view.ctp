<?php
	// ADD BREADCRUMBS HERE
	$this->Html->addCrumb('<span class="glyphicon glyphicon-home"></span>',  '/', array(
		'class'=>'crumb-active',
		'escape' => FALSE
	)) ;
	$this->Html->addCrumb('List Trips',  array(
		'admin'=>true,
		'controller'=>'trips',
		'action'=>'index'
	), array(
		'class'=>'crumb-active'
	)) ;
	$this->Html->addCrumb('View Trip',  '', array('class' => 'crumb-trail')) ;
?>
<div id="content">
	<div class="row">
		<div class="col-md-9">
			<div class="panel">
				<div class="panel-heading">
					<span class="panel-title"><?php echo __('View Trip Detail'); ?></span>
				</div>
					<div class="panel-body">
							<table class="table table-striped">
								<tr><td class="fs12 fw700" ><?php echo __('Id'); ?></td>
								<td valign="top"  class="va-m fw600 text-muted" >
									<?php echo h($trip['Trip']['id']); ?>
									&nbsp;
								</td></tr><tr>
								<td valign="top"  class="fs12 fw700" ><?php echo __('Title'); ?></td>
								<td valign="top"  class="va-m fw600 text-muted" >
									<?php echo h($trip['Trip']['title']); ?>
									&nbsp;
								</td></tr><tr>
								<td valign="top"  class="fs12 fw700" ><?php echo __('Unique Code'); ?></td>
								<td valign="top"  class="va-m fw600 text-muted" >
									<?php echo h($trip['Trip']['unique_code']); ?>
									&nbsp;
								</td></tr><tr>
								<td valign="top"  class="fs12 fw700" ><?php echo __('Description'); ?></td>
								<td valign="top"  class="va-m fw600 text-muted" >
									<?php echo strip_tags($trip['Trip']['description']); ?>
									&nbsp;
								</td></tr><tr>
								<td valign="top"  class="fs12 fw700" ><?php echo __('Image'); ?></td>
								<td valign="top"  class="va-m fw600 text-muted" >
									<?php echo $this->Html->image('../'.$trip['Trip']['image'], array(
											'class'=>'img-responsive',
											'height'=>'100px',
											'width'=>'100px'
										)) ?>
									&nbsp;
								</td></tr><tr>
								<td valign="top"  class="fs12 fw700" ><?php echo __('Country'); ?></td>
								<td valign="top"  class="va-m fw600 text-muted" >
									<?php echo $trip['Country']['name'] ?>
									&nbsp;
								</td></tr><tr>
								<td valign="top"  class="fs12 fw700" ><?php echo __('State'); ?></td>
								<td valign="top"  class="va-m fw600 text-muted" >
									<?php echo $trip['State']['name'] ?>
									&nbsp;
								</td></tr><tr>
								<td valign="top"  class="fs12 fw700" ><?php echo __('City'); ?></td>
								<td valign="top"  class="va-m fw600 text-muted" >
									<?php echo $trip['City']['name'] ?>
									&nbsp;
								</td></tr><tr>
								<td valign="top"  class="fs12 fw700" ><?php echo __('From Date'); ?></td>
								<td valign="top"  class="va-m fw600 text-muted" >
									<?php echo h($trip['Trip']['from_date']); ?>
									&nbsp;
								</td></tr><tr>
								<td valign="top"  class="fs12 fw700" ><?php echo __('To Date'); ?></td>
								<td valign="top"  class="va-m fw600 text-muted" >
									<?php echo h($trip['Trip']['to_date']); ?>
									&nbsp;
								</td></tr><tr>
								<td valign="top"  class="fs12 fw700" ><?php echo __('School'); ?></td>
								<td valign="top"  class="va-m fw600 text-muted" >
									<?php echo $this->Html->link($trip['School']['school_name'], array('controller' => 'schools', 'action' => 'view', $trip['School']['id'])); ?>
									&nbsp;
								</td></tr><tr>
								<td valign="top"  class="fs12 fw700" ><?php echo __('Teacher'); ?></td>
								<td valign="top"  class="va-m fw600 text-muted" >
									<?php echo $this->Html->link($trip['Teacher']['first_name'], array('controller' => 'teachers', 'action' => 'view', $trip['Teacher']['id'])); ?>
									&nbsp;
								</td></tr><tr>
								<td valign="top"  class="fs12 fw700" ><?php echo __('Hotel'); ?></td>
								<td valign="top"  class="va-m fw600 text-muted" >
									<?php echo h($trip['Trip']['hotel']); ?>
									&nbsp;
								</td></tr><tr>
								<td valign="top"  class="fs12 fw700" ><?php echo __('No Of Rooms'); ?></td>
								<td valign="top"  class="va-m fw600 text-muted" >
									<?php echo h($trip['Trip']['no_of_rooms']); ?>
									&nbsp;
								</td></tr><tr>
								<td valign="top"  class="fs12 fw700" ><?php echo __('Trip Price Amount'); ?></td>
								<td valign="top"  class="va-m fw600 text-muted" >
									<?php echo h($trip['Trip']['trip_price_amount']); ?>
									&nbsp;
								</td></tr><tr>
								<td valign="top"  class="fs12 fw700" ><?php echo __('Trip Price Currency'); ?></td>
								<td valign="top"  class="va-m fw600 text-muted" >
									<?php echo h($trip['Trip']['trip_price_currency']); ?>
									&nbsp;
								</td></tr><tr>
								<td valign="top"  class="fs12 fw700" ><?php echo __('Payment Methods'); ?></td>
								<td valign="top"  class="va-m fw600 text-muted" >
									<?php echo h($trip['Trip']['payment_methods']); ?>
									&nbsp;
								</td></tr><tr>
								<td valign="top"  class="fs12 fw700" ><?php echo __('Card Accepted'); ?></td>
								<td valign="top"  class="va-m fw600 text-muted" >
									<?php echo h($trip['Trip']['card_accepted']); ?>
									&nbsp;
								</td></tr><tr>
								<td valign="top"  class="fs12 fw700" ><?php echo __('Payment Type'); ?></td>
								<td valign="top"  class="va-m fw600 text-muted" >
									<?php echo h($trip['Trip']['payment_type']); ?>
									&nbsp;
								</td></tr><tr>
								<td valign="top"  class="fs12 fw700" ><?php echo __('Tax Variation'); ?></td>
								<td valign="top"  class="va-m fw600 text-muted" >
									<?php echo h($trip['Trip']['tax_variation']); ?>
									&nbsp;
								</td></tr><tr>
								<td valign="top"  class="fs12 fw700" ><?php echo __('Tax Variation Amount'); ?></td>
								<td valign="top"  class="va-m fw600 text-muted" >
									<?php echo h($trip['Trip']['tax_variation_amount']); ?>
									&nbsp;
								</td></tr><tr>
								<td valign="top"  class="fs12 fw700" ><?php echo __('Created'); ?></td>
								<td valign="top"  class="va-m fw600 text-muted" >
									<?php echo h($trip['Trip']['created']); ?>
									&nbsp;
								</td></tr>
							</table>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<aside class="tray tray-left pn va-t" data-tray-height="match" style="height:auto!important;">
				<div class="p10">
                        <h4 class="ph10 mt10 mb5"> Quick Area </h4>
                        <ul class="nav nav-messages p5" role="menu">
							<li><?php echo $this->Html->link(__('Edit Trip'), array('action' => 'edit', $trip['Trip']['id'])); ?> </li>
							<li><?php echo $this->Form->postLink(__('Delete Trip'), array('action' => 'delete', $trip['Trip']['id']), array(), __('Are you sure you want to delete # %s?', $trip['Trip']['id'])); ?> </li>
							<li><?php echo $this->Html->link(__('List Trips'), array('action' => 'index')); ?> </li>
							<li><?php echo $this->Html->link(__('New Trip'), array('action' => 'add')); ?> </li>
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