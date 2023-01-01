<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShowHidedeletemarker</title>
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
   <button onclick="showMarkers();">Show Existing Markers</button>
   <button onclick="hideMarkers();">Hide Markers from the Map</button>
   <button onclick="deleteMarkers();">Remove Markers completely from the map</button>
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
    var marker1Options={
        position:{lat:51.5,lng:-0.1},
        map: map,
        title:"this is london",
        draggable:true,
        animation:google.maps.Animation.DROP
    }
    var marker1=new google.maps.Marker(marker1Options);
    var marker2Options={
        position:{lat:52.1337,lng:-0.4577},
        map: map,
        title:"this is Bedford",
        draggable:true,
        animation:google.maps.Animation.DROP
    }
    var marker2=new google.maps.Marker(marker2Options);
    marker2.setAnimation(google.maps.Animation.BOUNCE);
    marker2.setMap(map);
    marker1.setMap(null);
    marker2.setMap(null);
    //create array once we store a markers
      var markers=[];
    //create marker once we call on a point on the map
    map.addListener("click",function(event){
        var markerOptions={
            position:event.latLng,
            map:map
        }
        var marker=new google.maps.Marker(markerOptions);
        markers.push(marker);

    });
    //show markers stored in the array
    function showMarkers(){
        for(var i=0;i<markers.length;i++){
            markers[i].setMap(map);
        } 
    }
    //hide markers from the map 
    function hideMarkers(){
        for(var i=0;i<markers.length;i++){
            markers[i].setMap(null);
        } 

    }
    function deleteMarkers(){
        hideMarkers();
        markers=[];
    }
    var contentString="<div>This is an info window</div>";
    var infowindow = new google.maps.Infowindow({
        content: contentString,
        maxwidth:100
    });
    marker1.addListener("click",function(){
        infowindow.open(map,marker1);
    });
   </script>
    
</body>
</html>


</html>