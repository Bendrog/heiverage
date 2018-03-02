/*function initMap(){
  // Map options
  var options = {
    zoom:3,
    center:{lat:42.3601,lng:-71.0589}
  }

  // New map
  var map = new google.maps.Map(document.getElementById('map'), options);

  // Listen for click on map
  google.maps.event.addListener(map, 'click', function(event){
    // Add marker
    addMarker({coords:event.latLng});
  });
*/
  /*
  // Add marker
  var marker = new google.maps.Marker({
    position:{lat:42.4668,lng:-70.9495},
    map:map,
    icon:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
  });

  var infoWindow = new google.maps.InfoWindow({
    content:'<h1>Lynn MA</h1>'
  });

  marker.addListener('click', function(){
    infoWindow.open(map, marker);
  });
  */

  // Array of markers

/*
var lille = TrouverAdresse('Lille');
  console.log(lille);
  var markers = [
    {
      coords:{lat:42.4668,lng:-70.9495},
      iconImage:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
      content:'<h1>Lynn MA</h1>'
    },
    {
    coords:{lat:42.4668,lng:-70.9495},
      content:'<h1>Amesbury MA</h1>'
    },
    {
      coords:lille,
        content:'<h1>Amesbury MA</h1>'
    }
  ];

  // Loop through markers
  for(var i = 0;i < markers.length;i++){
    // Add marker
    addMarker(markers[i]);
  }

  // Add Marker Function
  function addMarker(props){
    var marker = new google.maps.Marker({
      position:TrouverAdresse('Lille'),
      map:map,
      animation: google.maps.Animation.DROP,
      //icon:props.iconImage
    });

    // Check for customicon
    if(props.iconImage){
      // Set icon image
      marker.setIcon(props.iconImage);
    }

    // Check content
    if(props.content){
      var infoWindow = new google.maps.InfoWindow({
        content:props.content
      });

      marker.addListener('click', function(){
        infoWindow.open(map, marker);
      });
    }
  }



function TrouverAdresse(Adresse){
  // Récupération de l'adresse tapée dans le formulaire
 geocoder = new google.maps.Geocoder();

  geocoder.geocode( { 'address': Adresse}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {

console.log(results[0].geometry.location);
      // Création du marqueur du lieu (épingle)
latlng = {lat:results[0].geometry.location.lat(),lng:results[0].geometry.location.lng()};
console.log(latlng);
      return latlng;
    } else {
      alert('Adresse introuvable: ' + status);
      return 'error';
    }
  });
}
}
*/
