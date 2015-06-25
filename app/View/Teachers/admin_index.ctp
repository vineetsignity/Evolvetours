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
	$this->Html->addCrumb('List Teachers',  '', array('class' => 'crumb-trail')) ;
?>

<div class="col-md-12">
	<div class="panel panel-visible">
		<div class="panel-heading">
			<div class="panel-title hidden-xs">
				<span class="glyphicon glyphicon-tasks"></span><?php echo __('Teachers'); ?> Managment</div>
		</div>
		<div class="panel-body pn">
			<table class="table table-striped table-bordered table-hover" id="datatable3" cellspacing="0" width="100%">
				<thead>				
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('user_id', 'Username'); ?></th>
						<th><?php echo $this->Paginator->sort('first_name'); ?></th>
						<th><?php echo $this->Paginator->sort('last_name'); ?></th>
						<th><?php echo $this->Paginator->sort('school_id'); ?></th>
						<th><?php echo $this->Paginator->sort('image'); ?></th>
						<th><?php echo $this->Paginator->sort('doc'); ?></th>
						<th><?php echo $this->Paginator->sort('status'); ?></th>
						<th class="actions"><?php echo __('Actions'); ?></th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('user_id', 'Username'); ?></th>
						<th><?php echo $this->Paginator->sort('first_name'); ?></th>
						<th><?php echo $this->Paginator->sort('last_name'); ?></th>
						<th><?php echo $this->Paginator->sort('school_id'); ?></th>
						<th><?php echo $this->Paginator->sort('image'); ?></th>
						<th><?php echo $this->Paginator->sort('doc'); ?></th>
						<th><?php echo $this->Paginator->sort('status'); ?></th>
						<th class="actions"><?php echo __('Actions'); ?></th>
					</tr>
				</tfoot>
				<tbody>
					<?php foreach ($teachers as $teacher): ?>
					<tr>
						<td><?php echo h($teacher['Teacher']['id']); ?>&nbsp;</td>
						<td>
							<?php echo $this->Html->link($teacher['User']['username'], array('controller' => 'users', 'action' => 'view', $teacher['User']['id'])); ?>
						</td>
						<td><?php echo h($teacher['Teacher']['first_name']); ?>&nbsp;</td>
						<td><?php echo h($teacher['Teacher']['last_name']); ?>&nbsp;</td>
						<td>
							<?php echo $this->Html->link($teacher['School']['school_name'], array('controller' => 'schools', 'action' => 'view', $teacher['School']['id'])); ?>
						</td>
						<td><?php echo h($teacher['Teacher']['image']); ?>&nbsp;</td>
						<td><?php echo h($teacher['Teacher']['doc']); ?>&nbsp;</td>
						<td><?php echo h($teacher['Teacher']['status']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link(__('View'), array('action' => 'view', $teacher['Teacher']['id'])); ?>
							<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $teacher['Teacher']['id'])); ?>
							<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $teacher['Teacher']['id']), array(), __('Are you sure you want to delete # %s?', $teacher['Teacher']['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
			<?php
			/*
			echo $this->Paginator->counter(array(
			'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
			));
			echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
			echo $this->Paginator->numbers(array('separator' => ''));
			echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));*/
			?>
		</div>
	</div>
</div>
	</div>
</div>
<?php echo $this->element('theme_footer_scripting'); ?>


			