<div>
    <h1><?php echo $post['Post']['title'] ?></h1>
    <div><?php echo $post['Post']['created']; ?></div>
    <div><?php echo $post['Post']['body']; ?></div>
</div>
<?php unset($post); ?>