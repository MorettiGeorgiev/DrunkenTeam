<!DOCTYPE html>
<html>
<head>
	<link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
	<title>Admin login</title>
</head>
<body>
	<?php if(is_logged_in()) redirect('admin/admin'); ?>
	 <div class="container text-center" style="margin-top: 50px; width:30%;">
	 <?php echo $this->session->flashdata('flashdata_error');  ?>
	 <?php echo validation_errors(); ?>
      <?php echo form_open('admin/form'); ?>
        <h2 class="form-signin-heading">Sign in</h2>
        <div class="form-group">
        <label for="username" class="sr-only">Username</label>
		<input type="text" id="username" name='username' class="form-control" placeholder="Потребителско име" required autofocus>
        </div>
        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Парола" required>
        <div class="checkbox">
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->
</body>
</html>