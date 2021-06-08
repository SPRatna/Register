<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User | Registration</title>
	<link rel="stylesheet" href="<?php echo base_url();?>public/suraj/bootstrap.min.css">
	<script type="text/javascript" src="<?php echo base_url();?>public/suraj/jquery.min.css"></script>
	<script type="text/javascript" src="<?php echo base_url();?>public/suraj/popper.min.css"></script>	
	<script type="text/javascript" src="<?php echo base_url();?>public/suraj/bootstrap.min.css"></script>
</head>
<body>
	<div class="container-fluid">
	  <div class="jumbotron">
	    <h1 class="text-center">User Registration</h1>
	    <p class="text-center">Developed by Suraj Prakash Ratna</p>
	  </div>     
	</div>
    <div class="container-fluid">
    	<div class="row justify-content-center">
    		<div class="col-lg-6 col-md-6 col-12 mt-5 shadow mb-5">
    			<?php echo form_open('user/signup'); ?>
				<?php if (isset($message)) { ?>
				<CENTER><h3 style="color:green;">Data inserted successfully</h3></CENTER><br>
				<?php } ?>
				<div class="form-group">
				<?php echo form_label('Name :'); ?> <?php echo form_error('dname'); ?><br />
				<?php echo form_input(array('id' => 'dname', 'name' => 'dname', 'class'=>'form-control')); ?>
                </div> 
                <div class="form-group">
				<?php echo form_label('Email :'); ?> <?php echo form_error('demail'); ?><br />
				<?php echo form_input(array('id' => 'demail', 'name' => 'demail', 'class'=>'form-control')); ?>
                 </div>
                 <div class="form-group">
				<?php echo form_label('Password :'); ?> <?php echo form_error('dpass'); ?><br />
				<?php echo form_input(array('id' => 'dpass', 'name' => 'dpass', 'class' => 'form-control')); ?>
                </div>
				<?php echo form_submit(array('id' => 'submit', 'class'=>'btn btn-outline-primary', 'name'=>'submit', 'value' => 'Submit')); ?>
				<?php echo form_close(); ?>
				
    	</div>
    </div>
</body>
</html>