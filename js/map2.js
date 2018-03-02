var geocoder;
var map;
var markers = new Array();
var i = 1;
var infoopened;

var Allmarkers = [];

/* Initialisation de la carte  */
function initMap() {
  /* Instanciation du geocoder  */
  geocoder = new google.maps.Geocoder();
  var center = new google.maps.LatLng(29.980017, 1.286894);
  var myOptions = {
    zoom: 2,
    center: center,
    mapTypeId: google.maps.MapTypeId.HYBRID
  }
  /* Chargement de la carte  */
  map = new google.maps.Map(document.getElementById("map"), myOptions);

}


$(document).ready(function() {
  $('div .switchbox').each(function(index, div) {

    var id = $('input', div).attr('id');
    console.log("ça part avec le numéro " + id);
    var idAvecDiez = '#' + id;
    $(idAvecDiez).change(function() {
      if ($(this).prop("checked") == true) {

        HelloMarkers(id);

      } else {

        console.log("effacage demandée");
        clearMarkers(id);

      }
    });

  })
})


function HelloMarkers(id) {
  var url = 'include/GiveMeMyUniv.php?spe=' + id;
  downloadUrl(url, function(data) {
    var xml = data.responseXML;
    var markers = xml.documentElement.getElementsByTagName('marker');
    Array.prototype.forEach.call(markers, function(markerElem) {

      var Name = markerElem.getAttribute('Name');
      var Country = markerElem.getAttribute('Country');
      var nbSemester = markerElem.getAttribute('nbSemester');
      var Spe = markerElem.getAttribute('Spe');
      var idUniv = markerElem.getAttribute('idUniv');
      var remark = markerElem.getAttribute('remark');
      var Lng = parseFloat(markerElem.getAttribute('lng'));
      var Lat = parseFloat(markerElem.getAttribute('lat'));
      //i=i+1;
      //setTimeout(function() {geocodage(Name, Country, nbSemester, Spe, id,idUniv)}, 1000*i);
      //    geocodage(Name, Country, nbSemester, Spe, id);
      setMarkers(Name, Country, nbSemester, Spe, id, Lat, Lng, idUniv,remark);
    });

  });
}


// Removes the markers from the map, but keeps them in the array.
function clearMarkers(id) {
  console.log(Allmarkers.length);
  for (var i = Allmarkers.length - 1; i >= 0; i--) {
    if (Allmarkers[i].spe == id) {
      Allmarkers[i].setMap(null);
      Allmarkers.splice(i, 1);
    }
  }
  console.log(Allmarkers.length);
}



function setMarkers(Name, Country, nbSemester, Spe, id, Lat, Lng, idUniv,remark) {
  console.log(Lat + ' ' + Lng);
  var img = {
    url: './img/markers/marker-' + id + '.png',
    // This marker is 20 pixels wide by 32 pixels high.
    size: new google.maps.Size(32, 32),
    // The origin for this image is (0, 0).
    origin: new google.maps.Point(0, 0),
    // The anchor for this image is the base of the flagpole at (0, 32).
    anchor: new google.maps.Point(16, 32)
  };


  var marker = new google.maps.Marker({
    map: map,
    position: {
      lat: Lat,
      lng: Lng
    },
    icon: img,
    spe: id,
    animation: google.maps.Animation.DROP

  });
  Allmarkers.push(marker);
  console.log(marker.spe);
  var SemesterContent;
  if (nbSemester == '') {
    SemesterContent = '';
  } else {
    if (nbSemester == 1) {
      SemesterContent = nbSemester + '  semestre disponible'
    } else {
      SemesterContent = nbSemester + '  semestre(s) disponible(s)'
    }
  }

  var content = '<div id="iw-container"><div class="iw-title">' + Name + '</div><hr></br><p>' + SemesterContent + '</p></br><p>' + Country + '</p></br><p>' + Spe + '</p></br><p>' + remark + '</p></div>';
  // Check content
  if (content) {
    var infoWindow = new google.maps.InfoWindow({
      content: content
    });
    marker.addListener('click', function() {
      if (typeof( window.infoopened ) != 'undefined') infoopened.close();
      infoWindow.open(map, marker);
      infoopened = infoWindow;
    });
  }

}



function downloadUrl(url, callback) {
  var request = window.ActiveXObject ?
    new ActiveXObject('Microsoft.XMLHTTP') :
    new XMLHttpRequest;

  request.onreadystatechange = function() {
    if (request.readyState == 4) {
      request.onreadystatechange = doNothing;
      callback(request, request.status);
    }
  };

  request.open('GET', url, true);
  request.send(null);

}



function doNothing() {}
