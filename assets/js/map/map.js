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
                    $('#latFld').attr('value', event.latLng.lat());
                    $('#lngFld').attr('value', event.latLng.lng());
                    //document.getElementById("latFld").value = event.latLng.lat();
                    //document.getElementById("lngFld").value = event.latLng.lng();
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
                      // document.getElementById("latFld").value = myloc.lat();
                      // document.getElementById("lngFld").value = myloc.lng();
                      $('#latFld').attr('value', myloc.lat());
                      $('#lngFld').attr('value', myloc.lng());
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