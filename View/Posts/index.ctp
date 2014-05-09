<div class="blog-masthead">
  <div class="container">
	<nav class="blog-nav">
	  <a class="blog-nav-item active" href="#">Home</a>
	  <a class="blog-nav-item" href="#">New features</a>
	  <a class="blog-nav-item" href="#">Press</a>
	  <a class="blog-nav-item" href="#">New hires</a>
	  <a class="blog-nav-item" href="#">About</a>
	</nav>
  </div>
</div>

<div class="container">

  <div class="blog-header">
	<h1 class="blog-title">Le blog du saussisson !</h1>
	<p class="lead blog-description">Par ce que nous on aime ce qui est bon ! BIAAAAAAAAAAATCH !</p>
  </div>
  <div class="row">

	<div class="blog-main">

	  <div class="col-sm-7 blog-main">

		<?php foreach ($posts as $post): ?>
		<div class="blog-post">
			<h2 class="blog-post-title"><?php echo $this->Html->link($post['Post']['title'],
	array('controller' => 'posts', 'action' => 'detail', $post['Post']['id'])); ?>
			</h2>
			<p class="blog-post-meta"><?php echo $post['Post']['created']; ?></p>
			<p><?php echo $post['Post']['body']; ?></p>
		</div>

		<?php endforeach; ?>
		<ul class="pager">
			<li><a href="#">Previous</a></li>
			<li><a href="#">Next</a></li>
		</ul>
	</div>
		<?php unset($post); ?>
	<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>
          <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
              <li><a href="#">July 2013</a></li>
              <li><a href="#">June 2013</a></li>
              <li><a href="#">May 2013</a></li>
              <li><a href="#">April 2013</a></li>
              <li><a href="#">March 2013</a></li>
              <li><a href="#">February 2013</a></li>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->
		

