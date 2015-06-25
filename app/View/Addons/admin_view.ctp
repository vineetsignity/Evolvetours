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
	$this->Html->addCrumb('View Addon',  '', array('class' => 'crumb-trail')) ;
?>
<div id="content">
	<div class="row">
		<div class="col-md-9">
			<div class="panel">
				<div class="panel-heading">
					<span class="panel-title"><?php echo __('View Addon Detail'); ?></span>
				</div>
					<div class="panel-body">
							<table class="table table-striped"><tr>
								<td class="fs12 fw700" ><?php echo __('Id'); ?></td>
								<td valign="top"  class="va-m fw600 text-muted" >
									<?php echo h($addon['Addon']['id']); ?>
									&nbsp;
								</td></tr><tr>
								<td class="fs12 fw700" ><?php echo __('Title'); ?></td>
								<td valign="top"  class="va-m fw600 text-muted" >
									<?php echo h($addon['Addon']['title']); ?>
									&nbsp;
								</td></tr><tr>
								<td class="fs12 fw700" ><?php echo __('Description'); ?></td>
								<td valign="top"  class="va-m fw600 text-muted" >
									<?php echo h($addon['Addon']['description']); ?>
									&nbsp;
								</td></tr><tr>
								<td class="fs12 fw700" ><?php echo __('Price'); ?></td>
								<td valign="top"  class="va-m fw600 text-muted" >
									<?php echo h($addon['Addon']['price']); ?>
									&nbsp;
								</td></tr><tr>
								<td class="fs12 fw700" ><?php echo __('Quantity'); ?></td>
								<td valign="top"  class="va-m fw600 text-muted" >
									<?php echo h($addon['Addon']['quantity']); ?>
									&nbsp;
								</td></tr><tr>
								<td class="fs12 fw700" ><?php echo __('Image'); ?></td>
								<td valign="top"  class="va-m fw600 text-muted" >
									<?php echo h($addon['Addon']['image']); ?>
									&nbsp;
								</td></tr><tr>
								<td class="fs12 fw700" ><?php echo __('Short Description'); ?></td>
								<td valign="top"  class="va-m fw600 text-muted" >
									<?php echo h($addon['Addon']['short_description']); ?>
									&nbsp;
								</td></tr><tr>
								<td class="fs12 fw700" ><?php echo __('Created'); ?></td>
								<td valign="top"  class="va-m fw600 text-muted" >
									<?php echo h($addon['Addon']['created']); ?>
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
							<li><?php echo $this->Html->link(__('Edit Addon'), array('action' => 'edit', $addon['Addon']['id'])); ?> </li>
							<li><?php echo $this->Form->postLink(__('Delete Addon'), array('action' => 'delete', $addon['Addon']['id']), array(), __('Are you sure you want to delete # %s?', $addon['Addon']['id'])); ?> </li>
							<li><?php echo $this->Html->link(__('List Addons'), array('action' => 'index')); ?> </li>
							<li><?php echo $this->Html->link(__('New Addon'), array('action' => 'atd')); ?> </li>
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