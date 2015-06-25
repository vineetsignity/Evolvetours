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
	$this->Html->addCrumb('List Trips',  '', array('class' => 'crumb-trail')) ;
?>
<div class="col-md-12">
	<div class="panel panel-visible">
		<div class="panel-heading">
			<div class="panel-title hidden-xs">
				<span class="glyphicon glyphicon-tasks"></span>Trips Managment</div>
		</div>
		<div class="panel-body pn">
			<table class="table table-striped table-bordered table-hover" id="datatable3" cellspacing="0" width="100%">
				<thead>				
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('title'); ?></th>
						<th><?php echo $this->Paginator->sort('unique_code'); ?></th>
						<th><?php echo $this->Paginator->sort('country_id'); ?></th>
						<th><?php echo $this->Paginator->sort('state_id'); ?></th>
						<th><?php echo $this->Paginator->sort('city_id'); ?></th>
						<th><?php echo $this->Paginator->sort('school_id'); ?></th>
						<th><?php echo $this->Paginator->sort('teacher_id'); ?></th>
						<th class="actions"><?php echo __('Actions'); ?></th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('title'); ?></th>
						<th><?php echo $this->Paginator->sort('unique_code'); ?></th>
						<th><?php echo $this->Paginator->sort('country_id'); ?></th>
						<th><?php echo $this->Paginator->sort('state_id'); ?></th>
						<th><?php echo $this->Paginator->sort('city_id'); ?></th>
						<th><?php echo $this->Paginator->sort('school_id'); ?></th>
						<th><?php echo $this->Paginator->sort('teacher_id'); ?></th>
						<th class="actions"><?php echo __('Actions'); ?></th>
					</tr>
				</tfoot>
				<tbody>
					<?php foreach ($trips as $trip): ?>
						<tr>
							<td><?php echo h($trip['Trip']['id']); ?>&nbsp;</td>
							<td><?php echo h($trip['Trip']['title']); ?>&nbsp;</td>
							<td><?php echo h($trip['Trip']['unique_code']); ?>&nbsp;</td>
							<td><?php echo $trip['Country']['name']; ?>&nbsp;</td>
							<td><?php echo $trip['State']['name']; ?>&nbsp;</td>
							<td>
								<?php echo $trip['City']['name']; ?>
							</td>
							<td>
								<?php echo $this->Html->link($trip['School']['school_name'], array('controller' => 'schools', 'action' => 'view', $trip['School']['id'])); ?>
							</td>
							<td>
								<?php echo $this->Html->link($trip['Teacher']['first_name'], array('controller' => 'teachers', 'action' => 'view', $trip['Teacher']['id'])); ?>
							</td>
							<td class="actions">
								<?php echo $this->Html->link(__('View'), array('action' => 'view', $trip['Trip']['id'])); ?>
								<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $trip['Trip']['id'])); ?>
								<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $trip['Trip']['id']), array(), __('Are you sure you want to delete # %s?', $trip['Trip']['id'])); ?>
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
</div>	</div>
</div><?php echo $this->element('theme_footer_scripting'); ?>


			