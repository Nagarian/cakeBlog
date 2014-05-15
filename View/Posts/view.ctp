<div id="masthead">  
  <div class="container">
	<a href="/cakephp/index.php">
    <div class="row">
      <div class="col-md-12">
		<div class="titlepost">
			<h1><?php echo __('Post'); ?></h1>
		</div>
      </div>
    </div> 
	</a>
  </div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12"> 
			<div class="panel">
				<div class="panel-body">
					<div class="row">    
						<div class="col-md-offset-1">
							<h3><?php echo __('Id'); ?></h3>
							<p>
								<?php echo h($post['Post']['id']); ?>
								&nbsp;
							</p>
							<h3><?php echo __('Title'); ?></h3>
							<p>
								<?php echo h($post['Post']['title']); ?>
								&nbsp;
							</p>
							<h3><?php echo __('Body'); ?></h3>
							<p>
								<?php echo h($post['Post']['body']); ?>
								&nbsp;
							</p>
							<h3><?php echo __('Created'); ?></h3>
							<p>
								<?php echo h($post['Post']['created']); ?>
								&nbsp;
							</p>
							<h3><?php echo __('Modified'); ?></h3>
							<p>
								<?php echo h($post['Post']['modified']); ?>
								&nbsp;
							</p>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-offset-1">
							<h3><?php echo __('Actions'); ?></h3>
							<ul>
								<li><?php echo $this->Html->link(__('Edit Post'), array('action' => 'edit', $post['Post']['id'])); ?> </li>
								<li><?php echo $this->Form->postLink(__('Delete Post'), array('action' => 'delete', $post['Post']['id']), null, __('Are you sure you want to delete # %s?', $post['Post']['id'])); ?> </li>
								<li><?php echo $this->Html->link(__('List Posts'), array('action' => 'index')); ?> </li>
								<li><?php echo $this->Html->link(__('New Post'), array('action' => 'ap')); ?> </li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
