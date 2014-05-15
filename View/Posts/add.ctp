<div class="posts form">
<?php echo $this->Form->create('Post'); ?>
<fieldset>
	<div id="add_infos">
		<legend><?php echo __('Add Post'); ?></legend>
		<div class="form-group">
			<?php echo $this->Form->input('title',array('class'=>'form-control')); ?>
		</div>
		<div class="form-group">
			<?php echo $this->Form->input('body',array('class'=>'form-control')); ?>
		</div>
			<?php echo $this->Form->end(__('Submit')); ?>
	</div>
</fieldset>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Lister les Posts'), array('action' => 'index')); ?></li>
	</ul>
</div>
