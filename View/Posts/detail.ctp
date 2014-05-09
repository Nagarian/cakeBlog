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

<?php foreach ($commentaires as $commentaire): ?>


</div>

