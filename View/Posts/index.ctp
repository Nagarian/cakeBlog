<div id="masthead">  
  <div class="container">
	<a href="/index.php">
    <div class="row">
      <div class="col-md-12">
		<div class="titleblog">
			<h1>SaFrOl
			  <p class="lead">Saucisson, Fromage, Olives</p>
			</h1>
		</div>
      </div>
    </div> 
	</a>
  </div><!-- /cont -->
</div>
<div class="container">
  <div class="row">
    
    <div class="col-md-12"> 
      
      <div class="panel">
        <div class="panel-body">
        
          
          <!--/stories-->

		<?php foreach ($posts as $post): ?>
				<div class="row">    
					<br>
					<div class="col-md-2 col-sm-3 text-center">
						<?php 
						switch ($post['Post']['categorie']){
							case 1:
								echo $this->Html->link(
								$this->Html->image("/img/saucisson.jpg", array("style" => "width:100px;height:100px", "class" => "img-circle")),
								array('controller' => 'posts', 'action' => 'detail', $post['Post']['id']), array('escape' => false, 'class' => 'story-img'));
								break;
							case 2:
								echo $this->Html->link(
								$this->Html->image("/img/fromage.jpg", array("style" => "width:100px;height:100px", "class" => "img-circle")),
								array('controller' => 'posts', 'action' => 'detail', $post['Post']['id']), array('escape' => false, 'class' => 'story-img'));
								break;
							case 3:
								echo $this->Html->link(
								$this->Html->image("/img/olives.jpg", array("style" => "width:100px;height:100px", "class" => "img-circle")),
								array('controller' => 'posts', 'action' => 'detail', $post['Post']['id']), array('escape' => false, 'class' => 'story-img'));
								break;
							default :
								echo $this->Html->link(
								$this->Html->image("//placehold.it/100", array("style" => "width:100px;height:100px", "class" => "img-circle")),
								array('controller' => 'posts', 'action' => 'detail', $post['Post']['id']), array('escape' => false, 'class' => 'story-img'));
								break;}
						?>
					</div>
					<div class="col-md-10 col-sm-9">
					<div class="col-md-10 col-sm-9">
							<h3><?php echo $this->Html->link($post['Post']['title'],
							array('controller' => 'posts', 'action' => 'detail', $post['Post']['id'])); ?>
							</h3>
						<div class="row">
							<div class="col-xs-10">
								<p><?php echo $this->Html->link($this->Text->truncate(
										$post['Post']['body'],
										200,
										array(
											'ellipsis' => '...',
											'exact' => false
										)
									),array('controller' => 'posts', 'action' => 'detail', $post['Post']['id'])); ?></p>
								<hr>
								<ul class="list-inline">
									<li>
										<i class='glyphicon glyphicon-time'></i>
										<?php 
										echo $this->Time->timeAgoInWords(
											$post['Post']['created'],
											array('end' => '+1 year',
											'format' => 'F jS, Y',
											'accuracy' => array('month'=>'month', 'day'=>'day', 'hour' => 'hour'))); 
										?>
									</li>
									<li>
										<i class='glyphicon glyphicon-comment'></i>
										<?php 
											echo $this->Html->link(
												" ".$post['Post']['comment_count']." Comments",
												array('controller' => 'posts', 'action' => 'detail', $post['Post']['id'],'#'=>'commentaires'));
										?>
									</li>
								</ul>
							</div>
							<div class="col-xs-3"></div>
						  </div>
					  <br><br>
					</div>
				  </div>
				 </div>
          <hr>


		<?php endforeach;?>
		
		<ul class="pager">
			<li class="previous">
			<?php echo $this->Paginator->prev(
				  ' << ',
				  array(),
				  null,
				  array('class' => 'prev disabled')
				);?>	
			</li>
			<li>
			<?php echo $this->Paginator->numbers();?>
			</li>
			<li class="next">
				<?php	echo $this->Paginator->next(
				  ' >> ',
				  array(),
				  null,
				  array('class' => 'prev disabled')
				);?>
			</li>
		</ul>
	</div>
		<?php unset($post); ?>

      </div><!-- /.row -->

    </div><!-- /.container -->
</div>
</div>
		

