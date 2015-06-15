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
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="fa fa-bars"></span>
                
              </button>
              <a class="navbar-brand brand" href="#"><span class="green">Junco</span></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse " id="navbar">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Начало</a></li>
                <li><a href="#" id="sendSignal">Изпрати сигнал</a></li>

              </ul>      
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        <h1 class = "header">Здравей.Това е <span class="green">Junco</span></h1>
        <h2 class="sub-heading">Сигнализирай за <span class="green">Junco</span> коли <span class="green">само с</span> няколко клика!</h2>
        <a id="scroll" href="#" class="btn btn-circle">Разбери Повече</a>
    </div>
    <!-- END TOP -->
    <div class="container text-center steps-wrapper" id="start">
        <h2 class="container-heading">Сигнализирай с <span class="green" >4 прости</span> стъпки</h2>
        <div class="row">
            <div class="col-md-3 text-center step">
               <i class="fa fa-upload fa-5x"></i>
               <h3>1. Качи или направи снимка</h3>
               <!-- <p> Nulla ornare tortor quis rhoncus vulputate. Vivamus a enim vel erat. </p> -->
            </div>

            <div class="col-md-3 text-center step">
               <i class="fa fa-street-view fa-5x"></i>
               <h3>2. Посочи местоположението</h3>
               <!-- <p> Nulla ornare tortor quis rhoncus vulputate. Vivamus a enim vel erat. </p> -->
            </div>

            <div class="col-md-3 text-center step">
               <i class="fa fa-user fa-5x"></i>
               <h3>3. Попълни формата</h3>
               <!-- <p> Nulla ornare tortor quis rhoncus vulputate. Vivamus a enim vel erat. </p> -->
            </div>

            <div class="col-md-3 text-center step">
               <i class="fa fa-paper-plane fa-5x"></i>
               <h3>4. Изпрати сигнала</h3>
               <!-- <p> Nulla ornare tortor quis rhoncus vulputate. Vivamus a enim vel erat. </p> -->
               
            </div>

         </div>
    
    <!--<a href="<?php //echo $requested_url; ?>" class="pull-left">Facebook</a>-->

    <!--<a href="#" id="signInButton">Sign in with Google</a>-->
    <!--END MIDDLE -->

    <div class="carousel" id="main">
                <div class="carousel-inner">
                    <div class="item active text-right">
                        
                        <form action="/DrunkenTeam/uploads" accept="image/*" method="post" class="dropzone image-form col-md-11 col-sm-11 col-xs-9" id="myAwesomeDropzone" enctype="multipart/form-data"></form>
                        <a href="#main" class=" col-md-1 col-sm-1 col-xs-3 btn-next" data-slide-to="1"  onclick="initMap()"><i class="fa fa-chevron-right fa-5x"></i></a> 

                </div>

                <div class="item">
                    <a href="#main" class=" col-md-1 col-sm-1 col-xs-12 btn-next btn-next-location" data-slide-to="0"><i class="fa fa-chevron-left fa-5x"></i></a>
                    <div id="map" class="col-md-10 col-sm-10 col-xs-12" ></div>
                    
                        
                        <a href="#main" class=" col-md-1 col-sm-1 col-xs-3 btn-next btn-next-location" data-slide-to="2"><i class="fa fa-chevron-right fa-5x"></i></a>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <form class="form-inline" action="/DrunkenTeam/coords">
                        <label for="title">Координати</label><br />
                            <div class="form-group">
                                <input type="text" class="form-control" name="latFld" id="latFld" readonly="readonly" value="-" />
                                <input type="text" class="form-control" name="lngFld" id="lngFld" readonly="readonly" value="-" />
                            </div>
                        </form>  
                    </div>
                </div>


                <div class="row-fluid item signal-form-wrapper">
                    <a href="#main" class=" col-md-1 col-sm-1 col-xs-3 btn-next btn-next-location" data-slide-to="1"><i class="fa fa-chevron-left fa-5x"></i></a>
                    <?php $this->load->view('signal_form') ?>
                </div>
            </div>
        </div>
    </div>
    <footer>
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
    <script src="https://apis.google.com/js/client:platform.js" async defer></script>
    <!-- jQuery -->
    <script src="<?php echo base_url()?>assets/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/dropzone/dropzone.js"></script>

    <script type="text/javascript">
      $('.carousel').carousel({
          interval: false
      })  
    </script>
    
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/map/jquery.ui.map.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/map/jquery.ui.map.extensions.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/map/map.js"> </script>
    <script type="text/javascript">
      Dropzone.options.myAwesomeDropzone = {
        acceptedFiles: 'image/*'
      }

    </script>
    <script type="text/javascript">
        $("#scroll").click(function() {
            $('html, body').animate({
                scrollTop: $("#start").offset().top
            }, 500);
        });

        $("#sendSignal").click(function() {
            $('html, body').animate({
                scrollTop: $("#start").offset().top
            }, 500);
        });
      </script>
</body>
</html>