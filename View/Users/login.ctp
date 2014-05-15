<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend>
            <?php echo __('Please enter your username and password'); ?>
        </legend>
    <div id="log_infos">
	    
	        <div class="form-group">
	        	<?php echo $this->Form->input('username',array('class'=>'form-control','placeholder'=>'Pseudo')); ?>
	        </div>
	        <div class="form-group">
	      		<?php echo $this->Form->input('password',array('class'=>'form-control','placeholder'=>'Mot de passe'));?>
	     	</div>
	    
    <?php echo $this->Form->end(__('Login')); ?>
    </fieldset>

</div>
</div>