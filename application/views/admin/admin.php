<?php
	if (!is_logged_in()) redirect('admin/login');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Junco - Admin panel</title>
    <link href="<?php echo base_url()?>assets/css/home.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url()?>assets/css/dropzone.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<div class="container text-center">
		<br />
		<div class="row text-right">
			<?php echo "Hello, {$user_info->username}!" ?>
			<a href="logout">Log out</a>
		</div>
		<hr />

		<div class="row">
		<div class="table-responsive">
		  <table class="table table-striped table-bordered">
		  <thead>
		  	<td>ID</td>
		  	<td>reg_number</td>
		  	<td>photo url</td>
		  	<td>latFld</td>
		  	<td>lngFld</td>
		  	<td>other_desc</td>
		  	<td>date</td>
		  	<td>name</td>
		  	<td>phone</td>
		  	<td>email</td>
		  </thead>
			<?php 
				foreach ($signals as $signal) {
					echo "<tr>";
					echo "<td>{$signal['id']}</td>";
					echo "<td>{$signal['reg_number']}</td>";
					echo "<td><a href='{$signal['photo']}'>{$signal['photo']}</a></td>";
					echo "<td>{$signal['latFld']}</td>";
					echo "<td>{$signal['lngFld']}</td>";
					echo "<td>{$signal['other_desc']}</td>";
					echo "<td>{$signal['date']}</td>";
					echo "<td>{$signal['names']}</td>";
					echo "<td>{$signal['phone']}</td>";
					echo "<td>{$signal['email']}</td>";
					echo "</tr>";
				}
			?>
		  </table>
		</div>
		</div>
	</div>
    
    <script src="<?php echo base_url()?>assets/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
</body>
</html>