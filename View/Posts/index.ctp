<h1>Blog posts</h1>

    <?php foreach ($posts as $post): ?>
    <div>
        <h1><?php echo $this->Html->link($post['Post']['title'],
array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
        </h1>
        <div><?php echo $post['Post']['created']; ?></div>
        <div><?php echo $post['Post']['body']; ?></div>
    </div>
    <?php endforeach; ?>
    <?php unset($post); ?>