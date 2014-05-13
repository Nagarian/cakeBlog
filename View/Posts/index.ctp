<div id="masthead">  
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <h1>Blog du saussisson
          <p class="lead">C'est bon !</p>
        </h1>
      </div>
      <div class="col-md-5">
        <div class="well well-lg"> 
          <div class="row">
            <div class="col-sm-12">
              Ad Space			
            </div>
          </div>
        </div>
      </div>
    </div> 
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
              <a class="story-img" href="#"><img src="//placehold.it/100" style="width:100px;height:100px" class="img-circle"></a>
            </div>
            <div class="col-md-10 col-sm-9">
		<div class="col-md-10 col-sm-9">
              <h3><?php echo $this->Html->link($post['Post']['title'],
	array('controller' => 'posts', 'action' => 'detail', $post['Post']['id'])); ?>
			</h3>
			<div class="row">
                <div class="col-xs-9">
					<p><?php echo $post['Post']['body']; ?></p>
					<ul class="list-inline"><li><a href="#"><?php echo $post['Post']['created']; ?></a></li><li><a href="#"><i class="glyphicon glyphicon-comment"></i> 4 Comments</a></li><li><a href="#"><i class="glyphicon glyphicon-share"></i> 34 Shares</a></li></ul>
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
		

