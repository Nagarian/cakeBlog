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
<?php var_dump($post); ?>
	<div id='formulaire_commentaire'>
		<?= $this->Comment->form("Post", $post['Post']['id']); ?>
	</div>

	<?php foreach ($post['Comment'] as $commentaire): ?>
		<div id='comment'>
			<dl class="dl-horizontal"></dl>
  			<dt><?php echo $commentaire['username'];?></dt>
  			<dd><?php echo $commentaire['content'];?></dd>
		</div>
	<?php endforeach; ?>

</div>

