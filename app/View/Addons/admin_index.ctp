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
	$this->Html->addCrumb('List Addons',  '', array('class' => 'crumb-trail')) ;
?>
<div class="col-md-12">
	<div class="panel panel-visible">
		<div class="panel-heading">
			<div class="panel-title hidden-xs">
				<span class="glyphicon glyphicon-tasks"></span><?php echo __('Addons'); ?> Managment</div>
		</div>
		<div class="panel-body pn">
			<table class="table table-striped table-bordered table-hover" id="datatable3" cellspacing="0" width="100%">
				<thead>				
					<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('quantity'); ?></th>
			<th><?php echo $this->Paginator->sort('image'); ?></th>
			<th><?php echo $this->Paginator->sort('short_description'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
					</tr>
				</thead>
				<tfoot>
					<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('quantity'); ?></th>
			<th><?php echo $this->Paginator->sort('image'); ?></th>
			<th><?php echo $this->Paginator->sort('short_description'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
					</tr>
				</tfoot>
				<tbody>
			<?php foreach ($addons as $addon): ?>
			<tr>
				<td><?php echo h($addon['Addon']['id']); ?>&nbsp;</td>
				<td><?php echo h($addon['Addon']['title']); ?>&nbsp;</td>
				<td><?php echo h($addon['Addon']['price']); ?>&nbsp;</td>
				<td><?php echo h($addon['Addon']['quantity']); ?>&nbsp;</td>
				<td><?php echo $this->Html->image('../'.$addon['Addon']['image'], array(
									'class'=>'img-responsive',
									'height'=>'100px',
									'width'=>'100px'
								)); ?>&nbsp;</td>
				<td><?php echo strip_tags($addon['Addon']['short_description']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $addon['Addon']['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $addon['Addon']['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $addon['Addon']['id']), array(), __('Are you sure you want to delete # %s?', $addon['Addon']['id'])); ?>
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


			