<?php echo $this->Html->css('styles_details'); ?>

<div id='article'>
	<div id='entete'>
	    <h1><?php echo $post['Post']['title'] ?></h1>
	    <p id='right'><?php echo $post['Post']['created']; ?></p>
	    <hr>
    </div>
    <div id='contenu'>
   		<?php echo $post['Post']['body']; ?>
    </div>
</div>
<?php unset($post); ?>
<div id='commentaires'>

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

	<?= $this->Comment->form($MODEL, $ID); ?>


	<?php foreach ($comments as $commentaire): ?>
		<div id='comment'>
			<dl class="dl-horizontal">
  			<dt><?php echo $commentaire[''][''];?></dt>
  			<dd><?php echo $commentaire[''][''];?></dd>
		</div>
	<?php endforeach; ?>

</div>

