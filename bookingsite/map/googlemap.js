/* function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(1.3521, 103.8198),
          zoom: 11
        });
}*/
var map;
var geocoder;

/*set location of map*/
function initMap() {
   var singapore = {lat: 1.3521, lng: 103.8198};
   map = new google.maps.Map(document.getElementById('map'),{
     zoom: 11,
     center: singapore
   });

   var marker = new google.maps.Marker({
     position: singapore,
     map: map
   });

   // use geocode
   geocoder = new google.maps.Geocoder();

   //return data linked to allData
   var allData = JSON.parse(document.getElementById('allData').innerHTML);
   showAllLocation(allData)
}

/* Set marker on each location in database*/
function showAllLocation(allData){
  var infoWind = new google.maps.InfoWindow;
  Array.prototype.forEach.call(allData, function(data){
    var content = document.createElement('div');
    var strong = document.createElement('strong');
    strong.textContent = data.address;
    content.appendChild(strong);

    var marker = new google.maps.Marker({
      position: new google.maps.LatLng(data.lat, data.lng),
      map: map
    });

    /*Set click function to open info window*/
    marker.addListener('click', function(){
      infoWind.setContent(content);
      infoWind.open(map, marker);
    })
  })
}

/*Additional feature (admin)*/
function codeAddress(cdata){
  Array.prototype.forEach.call(cdata, function(data){
       var address = data.address + ' ' + data.id;
       geocoder.geocode( { 'address': address}, function(results, status){
         if (status == 'OK') {
            map.setCenter(results[0].geometry.location);
            var points = {};
            points.id = data.id;
            points.lat = map.getCenter().lat();
            points.lng = map.getCenter().lng();
            //alert(map.getCenter().lat())
            updateLocationWithLatLng(points);
         } else {
           alert('Geocode was not successful for the following reason: ' + status)
         }
       });
    });
}

/*For use of addition feature(admin)*/
function updateLocationWithLatLng(points){
  $.ajax({
    url:"action.php",
    method: "post",
    data: points,
    success: function(res){
      console.log(res)
    }
  })
  console.log(points)
}
