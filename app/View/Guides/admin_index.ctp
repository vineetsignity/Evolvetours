<div id="content">
	<div class="row">
	<?php
	// ADD BREADCRUMBS HERE
	$this->Html->addCrumb('<span class="glyphicon glyphicon-home"></span>',  '/', array(
		'class'=>'crumb-active',
		'escape' => FALSE
	)) ;
	$this->Html->addCrumb('Dashboard',  '/', array(
		'class'=>'crumb-active'
	)) ;
	$this->Html->addCrumb('List Guides',  '', array('class' => 'crumb-trail')) ;
?>
<div class="col-md-12">
	<div class="panel panel-visible">
		<div class="panel-heading">
			<div class="panel-title hidden-xs">
				<span class="glyphicon glyphicon-tasks"></span>Guides Managment</div>
		</div>
		<div class="panel-body pn">
			<table class="table table-striped table-bordered table-hover" id="datatable3" cellspacing="0" width="100%">
				<thead>				
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('user_id'); ?></th>
						<th><?php echo $this->Paginator->sort('first_name'); ?></th>
						<th><?php echo $this->Paginator->sort('last_name'); ?></th>
						<th><?php echo $this->Paginator->sort('gender'); ?></th>
						<th><?php echo $this->Paginator->sort('dob'); ?></th>
						<th><?php echo $this->Paginator->sort('postal_code'); ?></th>
						<th><?php echo $this->Paginator->sort('email'); ?></th>
						<th><?php echo $this->Paginator->sort('created'); ?></th>
						<th class="actions"><?php echo __('Actions'); ?></th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('user_id'); ?></th>
						<th><?php echo $this->Paginator->sort('first_name'); ?></th>
						<th><?php echo $this->Paginator->sort('last_name'); ?></th>
						<th><?php echo $this->Paginator->sort('gender'); ?></th>
						<th><?php echo $this->Paginator->sort('dob'); ?></th>
						<th><?php echo $this->Paginator->sort('postal_code'); ?></th>
						<th><?php echo $this->Paginator->sort('email'); ?></th>
						<th><?php echo $this->Paginator->sort('created'); ?></th>
						<th class="actions"><?php echo __('Actions'); ?></th>
					</tr>
				</tfoot>
				<tbody>
	<?php foreach ($guides as $guide): ?>
	<tr>
		<td><?php echo h($guide['Guide']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($guide['User']['username'], array('controller' => 'users', 'action' => 'view', $guide['User']['id'])); ?>
		</td>
		<td><?php echo h($guide['Guide']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($guide['Guide']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($guide['Guide']['gender']); ?>&nbsp;</td>
		<td><?php echo h($guide['Guide']['dob']); ?>&nbsp;</td>
		<td><?php echo h($guide['Guide']['postal_code']); ?>&nbsp;</td>
		<td><?php echo h($guide['Guide']['email']); ?>&nbsp;</td>
		<td><?php echo h($guide['Guide']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $guide['Guide']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $guide['Guide']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $guide['Guide']['id']), array(), __('Are you sure you want to delete # %s?', $guide['Guide']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>	</div>
</div>
<?php echo $this->element('theme_footer_scripting'); ?>

			