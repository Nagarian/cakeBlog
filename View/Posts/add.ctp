<div id="masthead">  
  <div class="container">
	<a href="/cakephp/index.php">
    <div class="row">
      <div class="col-md-12">
		<div class="titlepost">
			<h1><?php echo __('Add Post'); ?></h1>
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
							<?php echo $this->Form->create('Post'); ?>
								<fieldset>
									<div class="form-group">
										<?php echo $this->Form->input('title',array('class'=>'form-control')); ?>
									</div>
									<div class="form-group">
										<?php echo $this->Form->input('body',array('class'=>'form-control', 'rows'=>'10')); ?>
									</div>
									<div class="form-group">
										<?php 
											$options = array(1 => 'Saucisson', 2 => 'Fromage', 3 => 'Olives');
											echo $this->Form->input('categorie', array('class'=>'form-control', 'options' => $options,'empty' => '(choisissez)')); 
										?>
									</div>
										<?php echo $this->Form->end(__('Submit')); ?>
								</fieldset>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
