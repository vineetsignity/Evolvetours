<?php
	// ADD BREADCRUMBS HERE
	$this->Html->addCrumb('<span class="glyphicon glyphicon-home"></span>',  '/', array(
		'class'=>'crumb-active',
		'escape' => FALSE
	)) ;
	$this->Html->addCrumb('List Schools',  array(
		'admin'=>true,
		'controller'=>'schools',
		'action'=>'index'
	), array(
		'class'=>'crumb-active'
	)) ;
	$this->Html->addCrumb('View School',  '', array('class' => 'crumb-trail')) ;
?>
<div id="content">
	<div class="row">
		<div class="col-md-9">
			<div class="panel">
				<div class="panel-heading">
					<span class="panel-title"><?php echo __('View School Detail'); ?></span>
				</div>
					<div class="panel-body">
						<table class="table table-striped" ><tr>
							<td class="fs12 fw700" ><?php echo __('Id'); ?></td>
							<td valign="top"  class="va-m fw600 text-muted" >
								<?php echo h($school['School']['id']); ?>
								&nbsp;
							</td></tr><tr>
							<td class="fs12 fw700" ><?php echo __('School Name'); ?></td>
							<td valign="top"  class="va-m fw600 text-muted" >
								<?php echo h($school['School']['school_name']); ?>
								&nbsp;
							</td></tr><tr>
							<td class="fs12 fw700" ><?php echo __('City'); ?></td>
							<td valign="top"  class="va-m fw600 text-muted" >
								<?php echo h($school['School']['city']); ?>
								&nbsp;
							</td></tr><tr>
							<td class="fs12 fw700" ><?php echo __('State'); ?></td>
							<td valign="top"  class="va-m fw600 text-muted" >
								<?php echo h($school['School']['state']); ?>
								&nbsp;
							</td></tr><tr>
							<td class="fs12 fw700" ><?php echo __('Zip'); ?></td>
							<td valign="top"  class="va-m fw600 text-muted" >
								<?php echo h($school['School']['zip']); ?>
								&nbsp;
							</td></tr><tr>
							<td class="fs12 fw700" ><?php echo __('Address'); ?></td>
							<td valign="top"  class="va-m fw600 text-muted" >
								<?php echo h($school['School']['address']); ?>
								&nbsp;
							</td></tr><tr>
							<td class="fs12 fw700" ><?php echo __('Status'); ?></td>
							<td valign="top"  class="va-m fw600 text-muted" >
								<?php echo h($school['School']['status']); ?>
								&nbsp;
							</td></tr><tr>
							<td class="fs12 fw700" ><?php echo __('Created'); ?></td>
							<td valign="top"  class="va-m fw600 text-muted" >
								<?php echo h($school['School']['created']); ?>
								&nbsp;
							</td></tr><tr>
							<td class="fs12 fw700" ><?php echo __('Modified'); ?></td>
							<td valign="top"  class="va-m fw600 text-muted" >
								<?php echo h($school['School']['modified']); ?>
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
		<li><?php echo $this->Html->link(__('Edit School'), array('action' => 'edit', $school['School']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete School'), array('action' => 'delete', $school['School']['id']), array(), __('Are you sure you want to delete # %s?', $school['School']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Schools'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New School'), array('action' => 'atd')); ?> </li>
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