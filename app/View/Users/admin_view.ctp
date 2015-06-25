<?php
	// ADD BREADCRUMBS HERE
	$this->Html->addCrumb('<span class="glyphicon glyphicon-home"></span>',  '/', array(
		'class'=>'crumb-active',
		'escape' => FALSE
	)) ;
	$this->Html->addCrumb('List Users',  array(
		'admin'=>true,
		'controller'=>'users',
		'action'=>'index'
	), array(
		'class'=>'crumb-active'
	)) ;
	$this->Html->addCrumb('View User',  '', array('class' => 'crumb-trail')) ;
?>
<div id="content">
	<div class="row">
		<div class="col-md-8">
			<div class="panel">
				<div class="panel-heading">
					<span class="panel-title"><?php echo __('View User Detail'); ?></span>
				</div>
					<div class="panel-body">
						<table class="table mbn br-t">
						<tr>
							<td class="fs14 fw700 "><?php echo __('Id'); ?></td>
							<td class="va-m fw600 text-muted">
								<?php echo h($user['User']['id']); ?>
								&nbsp;
							</td>
						</tr>
						<tr>
						<td class="fs14 fw700 " ><?php echo __('Username'); ?></td>
						<td class="va-m fw600 text-muted" >
							<?php echo h($user['User']['username']); ?>
							&nbsp;
						</td>						</tr>
						<tr>
						<td class="fs14 fw700 " ><?php echo __('Role'); ?></td>
						<td class="va-m fw600 text-muted" >
							<?php echo $this->Html->link($user['Role']['title'], array('controller' => 'roles', 'action' => 'view', $user['Role']['id'])); ?>
							&nbsp;
						</td>						</tr>
						<tr>
						<td class="fs14 fw700 " ><?php echo __('Created'); ?></td>
						<td class="va-m fw600 text-muted" >
							<?php echo h($user['User']['created']); ?>
							&nbsp;
						</td>						</tr>
						<tr>
						<td class="fs14 fw700 " ><?php echo __('Modified'); ?></td>
						<td class="va-m fw600 text-muted" >
							<?php echo h($user['User']['modified']); ?>
							&nbsp;
						</td>
						</tr>
						</table>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<aside class="tray tray-left pn va-t" data-tray-height="match" style="height:auto!important;">
				<div class="p10">
                        <h4 class="ph10 mt10 mb5"> Quick Area </h4>
                        <ul class="nav nav-messages p5" role="menu">
							
								<li><?php echo $this->Form->postLink(__('<span class="fa fa-remove pr5"></span> Delete User'), array('action' => 'delete', $this->Form->value('User.id')), array(
								'class'=>'fw600 p10 animated animated-short fadeInDown',
								'escape'=>false,
								), __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?>
								
								<li><?php echo $this->Html->link('<span class="fa fa-user pr5"></span> List Users', 
								array('action' => 'index'),
								array(
								'class'=>'fw600 p10 animated animated-short fadeInDown',
								'escape'=>false,
								)); ?></li>
								
								<li><?php echo $this->Html->link('<span class="fa fa-pencil pr5"></span> Edit User', 
								array('action' => 'edit', $user['User']['id']),
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
		''.Configure::read('BaseURL').'files/theme/vendor/plugins/tagmanager/tagmanager.css',
	), array('inline' => false));
	
	echo $this->Html->script(array(
		''.Configure::read('BaseURL').'files/theme/vendor/plugins/jquerymask/jquery.maskedinput.min.js',
		''.Configure::read('BaseURL').'files/theme/vendor/plugins/tagmanager/tagmanager.js',
	), array('block' => 'footerBlock'));


?>