<?= $this->Form->create('Comment', array('id' => 'commentForm', 'url' => array('controller' => 'comments', 'action' => 'add', 'plugin' => 'comment'))); ?>
	<?= $this->Session->flash('commentForm'); ?>
	<?php if (!$this->Session->read('Auth.'.Configure::read('Plugin.Comment.user.model').'.id')): ?>
	<div class="form-group">
		<?= $this->Form->input('username',array('label'=>__('Pseudo'),'class'=>'form-control',)); ?>
	</div>
	<div class="form-group">
		<?= $this->Form->input('mail',array('label'=>__('Email'),'class'=>'form-control','placeholder' => 'your@mail.com', 'div' => array('class' => 'input text mail'))); ?>
	</div>
	<?php endif ?>
	<div class="form-group">
	<?= $this->Form->input('content',array('label'=>__('Commentaire'),'class'=>'form-control','type' => 'textarea')); ?>
	</div>
	<?= $this->Form->input('ref',array('type' => 'hidden', 'value' => $ref)); ?>
	<?= $this->Form->input('ref_id',array('type' => 'hidden', 'value' => $ref_id)); ?>
	<?= $this->Form->unlockField('Comment.parent_id'); ?>
	<?= $this->Form->input('parent_id',array('type' => 'hidden', 'default' => 0)); ?>
<?= $this->Form->end(__('Envoyer')); ?>
