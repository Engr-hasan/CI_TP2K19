<?php include('header.php'); ?>
<div class="container">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-4 offset-md-4 mt-3 pt-3 pb-3 pl-4 pr-4 bg-warning">
				<?php echo form_open('admin/index'); ?>
					<fieldset>
					  	<legend class="text-light text-center">Admin Form</legend>
					    <div class="form-group">
					      <?php echo form_label('Username :', 'username',['class'=>'text-light']); ?>
					      <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Username','name'=>'username']); ?>
					      <span><?php echo form_error('username',"<div class='text-danger bg-light pl-2'>","</div>"); ?></span>
					    </div>
					    <div class="form-group">
					      <?php echo form_label('Password :', 'password',['class'=>'text-light']); ?>
					      <?php echo form_password(['class'=>'form-control','placeholder'=>'Enter Password','name'=>'password']); ?>
					      <span><?php echo form_error('password',"<div class='text-danger bg-light pl-2'>","</div>"); ?></span>
					    </div>
					    <?php echo form_submit(['class'=>'btn btn-success','value'=>'Submit']); ?>
					    <?php echo form_reset(['class'=>'btn btn-primary','value'=>'Reset']); ?>
					</fieldset>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>
<?php include('footer.php'); ?>