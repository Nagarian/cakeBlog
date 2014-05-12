<?php echo $this->Html->css('styles_details'); ?>

<div id='article' class="MyContainer">
	<div id='entete'>
	    <h1><?php echo $post['Post']['title'] ?></h1>
	    <p id='right'><?php echo $post['Post']['created']; ?></p>
	    <hr>
    </div>
    <div id='contenu'>
   		<?php echo $post['Post']['body']; ?>
    </div>
</div>
<div id='commentaires' class="MyContainer">

	<!--Ajouter un commentaire 
	<div class="posts form">
	<?php echo $this->Form->create('Post'); ?>
		<fieldset>
			<legend><?php echo __('Add Post'); ?></legend>
		<?php
			echo $this->Form->input('username'); //id username content 
			echo $this->Form->input('content');
		?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
	</div>-->

	<?php var_dump($post); ?>
	<?= $this->Comment->form("Post", $post['Post']['id']); ?>


	<?php foreach ($post['Comment'] as $commentaire): ?>
		<div id='comment'>
			<dl class="dl-horizontal"></dl>
  			<dt><?php echo $commentaire['username'];?></dt>
  			<dd><?php echo $commentaire['content'];?></dd>
		</div>
	<?php endforeach; ?>

</div>

