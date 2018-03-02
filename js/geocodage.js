function geocodage(Name, Country, nbSemester, Spe, id, idUniv) {
  var address = Name + ' ' + Country;
  geocoder.geocode({
    'address': address
  }, function(results, status) {
    /* Si l'adresse a pu être géolocalisée */
    if (status == google.maps.GeocoderStatus.OK) {
      /* Récupération de sa latitude et de sa longitude */

      //  console.log(results[0].geometry.location);
      var point = results[0].geometry.location;
      var lat = results[0].geometry.location.lat();
      var lng = results[0].geometry.location.lng();
      console.log(Name + '   ' + lat + '  ' + lng)

      $.post(
        'include/AddIntoTable.php', {
          lat: lat,
          lng: lng,
          idUniv: idUniv
        }
      );

    }
  })


}
