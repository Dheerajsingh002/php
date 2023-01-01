<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geocoding</title>
</head>
<body>
    
</body><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #map{
            width:60%;
            height:300px;
            border:2px solid black;
        }
    </style>
</head>
<body>
   <div id="map"></div>
  <input type="text" placeholder="Address" id="address">
  <button onclick="geocodeAddress();">geocodeAddress</button>
   <script src="https://maps.googleapis.com/maps/api/js?
   key=AIzaSyB_YRI1-i2cKpsuX5Z7FEYwBTiu2Oh5NZ0">
   </script>
   <script>
    var mapOptions={
        center:{lat:51.5,lng:-0.1},
        zoom:7,
        mapTypeId:google.maps.MapTypeId.SATELLITE
    };
    
    var map=new google.maps.Map(document.getElementById("map"),mapOptions);
    //create a geocoder object to use the geocode method
    var geocoder=new google.maps.Geocoder();
    function geocodeAddress(){
        geocoder.geocode({'address':document.getElementById("address").value},function(results, status){
             if(status==google.maps.GeocoderStatus.OK){
                console.log(results);
                window.alert("Adress Cordinates: "+results[0].geometry.location);
                map.setCenter(results[0].geometry.location);
                var marker= new google.maps.Marker({
                    map:map,
                    position:results[0].geometry.location
                });

             }else
             {
                window.alert("Geocode not successful:" status);
             }
        });
    }
   
   </script>
    
</body>
</html>


</html>