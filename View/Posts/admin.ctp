<div id="masthead">  
  <div class="container">
	<a href="/cakephp/index.php">
	<div class="row">
	  <div class="col-md-12">
		<div class="titlepost">
			<h1><?php echo __('Posts'); ?></h1>
			<h4>Admin</h4>
		</div>
	  </div>
	</div> 
	</a>
  </div><!-- /cont -->
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12"> 
			<div class="panel">
				<div class="panel-body">
					<table cellpadding="0" cellspacing="0" class="table table-striped ">
					<tr>
							<th><?php echo $this->Paginator->sort('id'); ?></th>
							<th><?php echo $this->Paginator->sort('title'); ?></th>
							<th><?php echo $this->Paginator->sort('body'); ?></th>
							<th><?php echo $this->Paginator->sort('created'); ?></th>
							<th><?php echo $this->Paginator->sort('modified'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
					</tr>
					<?php foreach ($posts as $post): ?>
					<tr>
						<td><?php echo h($post['Post']['id']); ?>&nbsp;</td>
						<td><?php echo h($post['Post']['title']); ?>&nbsp;</td>
						<td><?php echo $this->Text->truncate(
										$post['Post']['body'],
										100,
										array(
											'ellipsis' => '...',
											'exact' => false
										)); ?>&nbsp;</td>
						<td><?php echo h($post['Post']['created']); ?>&nbsp;</td>
						<td><?php echo h($post['Post']['modified']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link(__('View'), array('action' => 'view', $post['Post']['id'])); ?> |
							<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $post['Post']['id'])); ?> |
							<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $post['Post']['id']), null, __('Are you sure you want to delete # %s?', $post['Post']['id'])); ?>
						</td>
					</tr>
					<?php endforeach; ?>
					</table>
					<p>
					<?php
					echo $this->Paginator->counter(array(
					'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
					));
					?>	</p>
					<ul class="pager">
						<li class="previous">
							<?php echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));?>
						</li>
						<li>
							<?php echo $this->Paginator->numbers(array('separator' => ''));?>
						</li>
						<li>
							<?php echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));?>
						</li>
					</ul>
					<hr>
					<div class="actions">
						<h3><?php echo __('Actions'); ?></h3>
						<ul>
							<li><?php echo $this->Html->link(__('New Post'), array('action' => 'add')); ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
