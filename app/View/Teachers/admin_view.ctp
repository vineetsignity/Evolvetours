<?php
	// ADD BREADCRUMBS HERE
	$this->Html->addCrumb('<span class="glyphicon glyphicon-home"></span>',  '/', array(
		'class'=>'crumb-active',
		'escape' => FALSE
	)) ;
	$this->Html->addCrumb('List Teacher',  array(
		'admin'=>true,
		'controller'=>'teachers',
		'action'=>'index'
	), array(
		'class'=>'crumb-active'
	)) ;
	$this->Html->addCrumb('View Teacher',  '', array('class' => 'crumb-trail')) ;
?>
<div id="content">
	<div class="row">
		<div class="col-md-9">
			<div class="panel">
				<div class="panel-heading">
					<span class="panel-title"><?php echo __('View Teacher Detail'); ?></span>
				</div>
					<div class="panel-body">
							<table class="table table-striped">
		<tr>
		<td class="fs12 fw700"><?php echo __('Id'); ?></td>
		<td valign="top"  class="va-m fw600 text-muted">
			<?php echo h($teacher['Teacher']['id']); ?>
			&nbsp;
		</td></tr></tr>
		<td class="fs12 fw700"><?php echo __('User'); ?></td>
		<td valign="top"  class="va-m fw600 text-muted">
			<?php echo $this->Html->link($teacher['User']['username'], array('controller' => 'users', 'action' => 'view', $teacher['User']['id'])); ?>
			&nbsp;
		</td></tr></tr>
		<td class="fs12 fw700"><?php echo __('First Name'); ?></td>
		<td valign="top"  class="va-m fw600 text-muted">
			<?php echo h($teacher['Teacher']['first_name']); ?>
			&nbsp;
		</td></tr></tr>
		<td class="fs12 fw700"><?php echo __('Last Name'); ?></td>
		<td valign="top"  class="va-m fw600 text-muted">
			<?php echo h($teacher['Teacher']['last_name']); ?>
			&nbsp;
		</td></tr></tr>
		<td class="fs12 fw700"><?php echo __('School'); ?></td>
		<td valign="top"  class="va-m fw600 text-muted">
			<?php echo $this->Html->link($teacher['School']['school_name'], array('controller' => 'schools', 'action' => 'view', $teacher['School']['id'])); ?>
			&nbsp;
		</td></tr></tr>
		<td class="fs12 fw700"><?php echo __('Bio'); ?></td>
		<td valign="top"  class="va-m fw600 text-muted">
			<?php echo h($teacher['Teacher']['bio']); ?>
			&nbsp;
		</td></tr></tr>
		<td class="fs12 fw700"><?php echo __('Image'); ?></td>
		<td valign="top"  class="va-m fw600 text-muted">
			<?php echo h($teacher['Teacher']['image']); ?>
			&nbsp;
		</td></tr></tr>
		<td class="fs12 fw700"><?php echo __('Doc'); ?></td>
		<td valign="top"  class="va-m fw600 text-muted">
			<?php echo h($teacher['Teacher']['doc']); ?>
			&nbsp;
		</td></tr></tr>
		<td class="fs12 fw700"><?php echo __('Status'); ?></td>
		<td valign="top"  class="va-m fw600 text-muted">
			<?php echo h($teacher['Teacher']['status']); ?>
			&nbsp;
		</td></tr></tr>
		<td class="fs12 fw700"><?php echo __('Created'); ?></td>
		<td valign="top"  class="va-m fw600 text-muted">
			<?php echo h($teacher['Teacher']['created']); ?>
			&nbsp;
		</td></tr></tr>
		<td class="fs12 fw700"><?php echo __('Modified'); ?></td>
		<td valign="top"  class="va-m fw600 text-muted">
			<?php echo h($teacher['Teacher']['modified']); ?>
			&nbsp;
		</td></tr>
	</table >
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<aside class="tray tray-left pn va-t" data-tray-height="match" style="height:auto!important;">
				<div class="p10">
                        <h4 class="ph10 mt10 mb5"> Quick Area </h4>
                        <ul class="nav nav-messages p5" role="menu">
							<li><?php echo $this->Html->link(__('Edit Teacher'), array('action' => 'edit', $teacher['Teacher']['id'])); ?> </li>
							<li><?php echo $this->Form->postLink(__('Delete Teacher'), array('action' => 'delete', $teacher['Teacher']['id']), array(), __('Are you sure you want to delete # %s?', $teacher['Teacher']['id'])); ?> </li>
							<li><?php echo $this->Html->link(__('List Teachers'), array('action' => 'index')); ?> </li>
							<li><?php echo $this->Html->link(__('New Teacher'), array('action' => 'add')); ?> </li>
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