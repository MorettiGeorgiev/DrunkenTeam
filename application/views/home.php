<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Junk</title>
    <link href="<?php echo base_url()?>assets/css/home.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<?php if (is_logged_in()) redirect('main'); ?>
    <div class="container-fluid top-wrapper text-center">
    	<nav class="navbar main-nav">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navba">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand brand" href="#"><span class="green">Junco</span></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse " id="navbar">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Home</a></li>
                <li><a href="#">How it works</a></li>
                <li><a href="#">Send Signal</a></li>

              </ul>      
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        <h1 class = "header">HI.This is <span class="green">Junco</span></h1>
        <h2>Alert for <span class="green">Junco</span> cars with a <span class="green">few</span> clicks!</h2>
        <a href="#" class="btn btn-circle">Learn How</a>
    </div>
    <!-- END TOP -->
    <div class="container text-center steps-wrapper">
    <h2 class="container-heading">Alert in <span class="green" >4 simple</span> steps</h2>
       <div class="row">
            <div class="col-md-3 text-center step">
               <i class="fa fa-upload fa-5x"></i>
               <h3>1. Upload or Take a picture</h3>
               <p> Nulla ornare tortor quis rhoncus vulputate. Vivamus a enim vel erat. </p>
            </div>

            <div class="col-md-3 text-center step">
               <i class="fa fa-street-view fa-5x"></i>
               <h3>2. Location of the vechicle</h3>
               <p> Nulla ornare tortor quis rhoncus vulputate. Vivamus a enim vel erat. </p>
            </div>

            <div class="col-md-3 text-center step">
               <i class="fa fa-user fa-5x"></i>
               <h3>3. Login or fill in the form</h3>
               <p> Nulla ornare tortor quis rhoncus vulputate. Vivamus a enim vel erat. </p>
            </div>

            <div class="col-md-3 text-center step">
               <i class="fa fa-paper-plane fa-5x"></i>
               <h3>4. Alert to "Stolichna obshtina"</h3>
               <p> Nulla ornare tortor quis rhoncus vulputate. Vivamus a enim vel erat. </p>
               
            </div>

         </div>
    </div>
    <!--<a href="<?php //echo $requested_url; ?>" class="pull-left">Facebook</a>-->

    <!--<a href="#" id="signInButton">Sign in with Google</a>-->
    
    
    
    <script src="https://apis.google.com/js/client:platform.js" async defer></script>
    <!-- jQuery -->
    <script src="<?php echo base_url()?>assets/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
          $('#signInButton').click(function() {
            $(this).attr('href','https://accounts.google.com/o/oauth2/auth?scope=' +
              'https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fplus.login&' +
              'state=generate_a_unique_state_value&' +
              'redirect_uri=http://localhost/DrunkenTeam/gplus/callback/&'+
              'response_type=code&' +
              'client_id=997873084418-btuk1dkqlpd9dhglo0b7iibai6uj87e4.apps.googleusercontent.com&'+
              'access_type = offline');
              return true; // Continue with the new href.
         });
        });
    </script>
    
</body>
</html>