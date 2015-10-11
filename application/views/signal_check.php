<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Junco</title>
    <link href="<?php echo base_url()?>assets/css/home.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url()?>assets/css/dropzone.css" rel="stylesheet">
    <?php header('Access-Control-Allow-Origin: *'); ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div class="container-fluid top-wrapper text-center">
      <?php if($this->session->flashdata('flashdata_ok') != NULL) : ?>
      <div class="row-fluid success-message-wrapper "><p class="success-message text-center text-success"><?php echo $this->session->flashdata('flashdata_ok') ?></p></div>
      <?php endif; ?>
      <nav class="navbar main-nav">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="fa fa-bars"></span>
              </button>
              <a class="navbar-brand brand" href="#"><span class="green">Junco</span></a>
            </div>
            <div class="collapse navbar-collapse " id="navbar">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url()?>home">Начало</a></li>
                <li><a href="<?php echo base_url()?>home" id="sendSignal">Изпрати сигнал</a></li>
                <li><a href="#" id="checkSignal">Провери сигнал</a></li>
              </ul>      
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        <!-- <h1 class="header">Здравей.Това е <span class="green">Junco</span></h1> -->
        <h2 class="sub-heading">Проверете статуса на Вашият сигнал</h2>
        <?php form_open('signal_check/check'); ?>
        <?php form_close(); ?>
        <a id="scroll" href="#" class="btn btn-circle">Разбери Повече</a>
    </div>
    <!-- END TOP -->
    <footer style="margin-top: 0;">
        <div class="container">
            <div class="row copyright-wrapper">
                <div class="col-md-8">
                    <ul class="copyright list-inline">
                        <li>©Junco. All rights reserved</li>
                        <li>Design: Drunken Team</li>
                        <li>Images: Free</li>
                    </ul>
                </div>
                <div class="com-md-4">
                    <ul class="social-networks list-inline text-right">
                        <li><a href="#"><i class="fa fa-facebook    fa-2x"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter     fa-2x"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus fa-2x"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    
    <script type="text/javascript" src="https://apis.google.com/js/client:platform.js" async defer></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/dropzone/dropzone.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/main.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/map/jquery.ui.map.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/map/jquery.ui.map.extensions.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/map/map.js"> </script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/signal_form/signal_form.js"></script>
</body>
</html>