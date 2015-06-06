<!DOCTYPE html>
<html>
<head>
	<title>Logged in</title>
</head>
<body>
	<?php if (!is_logged_in()) redirect('home'); ?>
	<p>You are now logged in</p>
	<a href="<?php echo base_url()?>/logout">Log out</a>
</body>
</html>