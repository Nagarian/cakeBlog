<div id="masthead">  
  <div class="container">
	<a href="/cakephp/index.php">
    <div class="row">
      <div class="col-md-12">
		<div class="titlepost">
			<h1><?php echo $post['Post']['title'] ?></h1>
			<h4><?php echo $this->Time->nice($post['Post']['created']); ?></h4>
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
						<div class="col-md-offset-1 col-md-10">
							<?php echo $post['Post']['body']; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="panel">
				<div class="panel-body">
					<div class="row">    
						<div class="col-md-offset-1 col-md-10">
							<?= $this->Comment->form("Post", $post['Post']['id']); ?>
						</div>
					</div>
					<?php foreach ($post['Comment'] as $commentaire): ?>
						<hr>
						<div class="row">
							<div class="col-md-offset-1 col-md-10">
								<h3><?php echo $commentaire['username'];?></h3>
								<h5><?php echo $this->Time->timeAgoInWords(
											$commentaire['created'],
											array('end' => '+1 year',
											'format' => 'F jS, Y',
											'accuracy' => array('month'=>'month', 'day'=>'day', 'hour' => 'hour', 'minute' => 'minute'))); 
										?></h5>
								<blockquote>
									<p><?php echo $commentaire['content'];?></p>
								</blockquote>
							</div>
						</div>
						
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</div>
