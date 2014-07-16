<div id="content">
<div id='navigationDiv'>
<nav><?php //echo anchor('usercontroller/logout', 'Logout', array('class'=>'focus') ); ?></nav>
</div>

<script>
sendUserActionsLessions(null, "logged_in", null);
</script>

		<?php $attributes = array('class' => 'welcome');
				
			
		echo form_open("usercontroller/start", $attributes); ?>
		
			<h3> <br /> Welcome <?php echo $this->session->userdata('user_name'); ?>! <br /><br />Start learning with DSi1.5 </h3>

			<input type="submit" class="button" value="Start!" />
			
		<?php echo form_close(); ?>
		
</div><!--<div id="content">-->