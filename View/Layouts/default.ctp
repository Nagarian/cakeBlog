<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$sitedesc = __d('cake_dev', 'SaFrOl ');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $sitedesc ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<?php
		echo $this->Html->meta('icon');

		// echo $this->Html->css('cake.generic');
		echo $this->Html->script('bootstrap');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('bootstrap-theme.min');
		echo $this->Html->css('style');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<header class="navbar navbar-default navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	  <?php echo $this->Html->link("Home", array('controller' => '', 'action' => 'index'), array('class' => 'navbar-brand')); ?>
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li>
			<?php echo $this->Html->link("Les plus commentés", array('controller' => 'posts', 'action' => 'more')); ?>
        </li>
        
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown">
				Catégories <span class="caret"></span>
			</a>
			<ul class="dropdown-menu">
				<li>
					<?php echo $this->Html->link("Saucisson", array('controller' => 'posts', 'action' => 'saucisson')); ?>
				</li>
				<li>
					<?php echo $this->Html->link("Fromage", array('controller' => 'posts', 'action' => 'fromage')); ?>
				</li>
				<li>
					<?php echo $this->Html->link("Olives", array('controller' => 'posts', 'action' => 'olives')); ?>
				</li>
				<li>
					<?php echo $this->Html->link("Autres", array('controller' => 'posts', 'action' => 'autres')); ?>
				</li>
			</ul>
		  </li>
		<li>
			<?php echo $this->Html->link("Partenaires", array('controller' => 'partenaires', 'action' => 'index')); ?>
        </li>
		<li>
			<?php echo $this->Html->link("About", array('controller' => 'about', 'action' => 'index')); ?>
        </li>
      </ul>
      <ul class="nav navbar-right navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-search"></i></a>
          <ul class="dropdown-menu" style="padding:12px;">
			<?php echo $this->Form->create("Posts", array( 'action' => 'search', 'type' => 'get', 'class' => 'form-inline')); ?>
              <button type="submit" class="btn btn-default pull-right"><i class="glyphicon glyphicon-search"></i></button><input type="text" class="form-control pull-left" name="query" placeholder="Search">
            </form>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</header>
		<!-- <div id="header">
			<h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
		</div> -->
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
	</div>
	<!--<?php echo $this->element('sql_dump'); ?>-->
<hr>


<footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
      </div>
      <div class="col-sm-6">
          <p class="pull-right"></p>      
      </div>
    </div>
  </div>
</footer>
</body>
</html>
