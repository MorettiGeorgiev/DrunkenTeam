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
    <link href="<?php echo base_url()?>assets/css/dropzone.css" rel="stylesheet">


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
                <li><a href="#">Начало</a></li>
                <li><a href="#">Изпрати сигнал</a></li>

              </ul>      
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        <h1 class = "header">Здравей.Това е <span class="green">Junco</span></h1>
        <h2>Сигнализирай за <span class="green">Junco</span> коли <span class="green">само с</span> няколко клика!</h2>
        <a href="#" class="btn btn-circle">Разбери Повече</a>
    </div>
    <!-- END TOP -->
    <div class="container text-center steps-wrapper">
        <h2 class="container-heading">Сигнализирай с <span class="green" >4 прости</span> стъпки</h2>
        <div class="row">
            <div class="col-md-3 text-center step">
               <i class="fa fa-upload fa-5x"></i>
               <h3>1. Качи или направи снимка</h3>
               <p> Nulla ornare tortor quis rhoncus vulputate. Vivamus a enim vel erat. </p>
            </div>

            <div class="col-md-3 text-center step">
               <i class="fa fa-street-view fa-5x"></i>
               <h3>2. Посочи местоположението</h3>
               <p> Nulla ornare tortor quis rhoncus vulputate. Vivamus a enim vel erat. </p>
            </div>

            <div class="col-md-3 text-center step">
               <i class="fa fa-user fa-5x"></i>
               <h3>3. Влез или попълни формата</h3>
               <p> Nulla ornare tortor quis rhoncus vulputate. Vivamus a enim vel erat. </p>
            </div>

            <div class="col-md-3 text-center step">
               <i class="fa fa-paper-plane fa-5x"></i>
               <h3>4. Сигнализирай на "Столична община"</h3>
               <p> Nulla ornare tortor quis rhoncus vulputate. Vivamus a enim vel erat. </p>
               
            </div>

         </div>
    
    <!--<a href="<?php //echo $requested_url; ?>" class="pull-left">Facebook</a>-->

    <!--<a href="#" id="signInButton">Sign in with Google</a>-->
    <!--END MIDDLE -->

    <div class="carousel" id="main">
                <div class="carousel-inner">
                    <div class="item active text-right">
                        
                        <form action="http://localhost/DrunkenTeam/uploads" accept="image/*" method="post" class="dropzone image-form col-md-11 col-sm-11 col-xs-9" id="my-awesome-dropzone" enctype="multipart/form-data"></form>
                        <a href="#main" class=" col-md-1 col-sm-1 col-xs-3 btn-next" data-slide-to="1"  onclick="initMap()"><i class="fa fa-chevron-right fa-5x"></i></a> 

                </div>

                <div class="item">
                    <a href="#main" class=" col-md-1 col-sm-1 col-xs-3 btn-next btn-next-location" data-slide-to="0"><i class="fa fa-chevron-left fa-5x"></i></a>
                    <div id="map" class="col-md-10 col-sm-10 col-xs-6" ></div>
                    
                        
                        <a href="#main" class=" col-md-1 col-sm-1 col-xs-3 btn-next btn-next-location" data-slide-to="2"><i class="fa fa-chevron-right fa-5x"></i></a>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <form class="form-inline">
                        <label for="title">Координати</label><br />
                            <div class="form-group">
                                <input type="text" class="form-control" id="latFld" disabled="true" value="-" />
                                <input type="text" class="form-control" id="lngFld" disabled="true" value="-" />
                            </div>
                            
                        </form>  
                    </div>
                </div>

                <div class="row-fluid item signal-form-wrapper">
                     <a href="#main" class=" col-md-1 col-sm-1 col-xs-3 btn-next btn-next-location" data-slide-to="1"><i class="fa fa-chevron-left fa-5x"></i></a>
                        
                    <form class="form-horizontal col-md-10 col-sm-10 col-xs-6 ">
                        <fieldset>

                            <!-- Form Name -->
                            <legend>Подай сигнал</legend>

                            <!-- Text input-->
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="names">Имена</label>  
                              <div class="col-md-8">
                              <input id="names" name="names" type="text" placeholder="Трите имена" class="form-control input-md" required="">
                                
                              </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="phone">Телефон</label>  
                              <div class="col-md-8">
                              <input id="phone" name="phone" type="text" placeholder="" class="form-control input-md">
                                
                              </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                              <label class="col-md-4  control-label" for="email">Е-мейл адрес</label>  
                              <div class="col-md-8">
                              <input id="email" name="email" type="text" placeholder="" class="form-control input-md">
                                
                              </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="reg_number">Рег. номер на МПС</label>  
                              <div class="col-md-8">
                              <input id="reg_number" name="reg_number" type="text" placeholder="" class="form-control input-md">
                              <span class="help-block">В случай, че МПС-то има регистрационен номер</span>  
                              </div>
                            </div>

                            <!-- Textarea -->
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="description">Допълнително описание</label>
                              <div class="col-md-4">                     
                                <textarea class="form-control" id="description" name="description">Допълнителна информация относно изоставеното МПС</textarea>
                              </div>
                            </div>

                            <!-- Button -->
                            <div class="form-group ">
                              <label class="col-md-12 control-label" for="submit"></label>
                              <div class="col-md-12 text-right">
                                <button id="submit" name="submit" class="btn btn-danger">Изпрати сигнала</button>
                              </div>
                            </div>
                        </fieldset>
                    </form>
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
    <script src="<?php echo base_url()?>assets/js/dropzone.js"></script>
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
    <script type="text/javascript">
      $('.carousel').carousel({
          interval: false
      })  
    </script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.ui.map.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.ui.map.extensions.js"></script>
        
        <script type="text/javascript">
            var map;
            var markersArray = [];

            function initMap()
            {   
                var latlng = new google.maps.LatLng(42.6954322, 23.3239467);
                var myOptions = {
                    zoom: 12,
                    center: latlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };

                //if(navigator.geolocation) {
                  //navigator.geolocation.getCurrentPosition(function(position) {

                  //});
                //}
                map = new google.maps.Map(document.getElementById("map"), myOptions);

                myLocation();
                // add a click event handler to the map object
                google.maps.event.addListener(map, "click", function(event)
                {
                    // place a marker
                    placeMarker(event.latLng);

                    // display the lat/lng in your form's lat/lng fields
                    document.getElementById("latFld").value = event.latLng.lat();
                    document.getElementById("lngFld").value = event.latLng.lng();
                });

            }
            function myLocation(){
                deleteOverlays();
                 if(navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function(position) {
                      var myloc = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
                      var marker = new google.maps.Marker({
                        position: myloc,
                        map: map
                      });
                      map.setCenter(myloc);
                      map.setZoom(16);
                       document.getElementById("latFld").value = myloc.lat();
                      document.getElementById("lngFld").value = myloc.lng();
                      markersArray.push(marker);
                    });
                  };
            }
            function placeMarker(location) {
                // first remove all markers if there are any
                deleteOverlays();

                var marker = new google.maps.Marker({
                    position: location, 
                    map: map
                });

                // add marker in markers array
                markersArray.push(marker);

                //map.setCenter(location);
            }

            // Deletes all markers in the array by removing references to them
            function deleteOverlays() {
                if (markersArray) {
                    for (i in markersArray) {
                        markersArray[i].setMap(null);
                    }
                markersArray.length = 0;
                }
            }
        </script>
        <script>
</body>
</html>