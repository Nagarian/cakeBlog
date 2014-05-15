<div class="posts form">
<?php echo $this->Form->create('Post'); ?>
<div id="edit_infos">
	<fieldset>
	<legend><?php echo __('Edit Post'); ?></legend>
	<div class="form-group">
	<?php echo $this->Form->input('id',array('class'=>'form-control')); ?>
	</div>
	<div class="form-group">
	<?php echo $this->Form->input('title',array('class'=>'form-control')); ?>
	</div>
	<div class="form-group">
	<?php echo $this->Form->input('body',array('class'=>'form-control')); ?>
	</div>
	<?php echo $this->Form->end(__('Submit')); ?>
	</fieldset>
</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Post.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Post.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Posts'), array('action' => 'index')); ?></li>
	</ul>
</div>
