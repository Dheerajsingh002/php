<!DOCTYPE html>
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
    map.setMapTypeId(google.maps.MapTypeId.ROADMAP);
   </script>
    
</body>
</html>

