@extends('layouts.users')

@section('head')
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
  <meta charset="utf-8">
	<style>
      #right-panel {
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }

      #right-panel select, #right-panel input {
        font-size: 15px;
      }

      #right-panel select {
        width: 100%;
      }

      #right-panel i {
        font-size: 12px;
      }
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 50%;
        float: left;
        width: 60%;
        height: 70%;
        margin-left: 30px;

      }
      #right-panel {
        margin: 20px;
        border-width: 2px;
        width: 20%;
        height: 400px;
        float: left;
        text-align: left;
        padding-top: 0;
      }
      #directions-panel {
        margin-top: 10px;
        background-color: #8FBC8F;
        padding: 10px;
      }
      #infowindow-content .title {
        font-weight: bold;
      }

      #infowindow-content {
        display: none;
      }

      #infowindow-content {
        display: inline;
        margin-top:50px;
      }
      .textbox {
    background: #E6E6FA;
    color: #000000;
    width: 200px;
    padding: 6px 15px 6px 35px;
    border-radius: 8px;
    box-shadow: 0 1px 0 #ccc inset;
    transition: 500ms all ease;
    outline: 0;
    }
     .textbox:hover {
        width: 270px;
    }
  </style>

   <script>
     
      var count=0;
      var set_name_temple=[];
      var latitude;
      var longitude;

      var cityCircle;
      var latitude_af;
      var longitude_af;
      var radius_af;
      var covered;
      var radLatLong;
      var map;
      var markerss = [];
      var count_click;
      var directionsService;
      var directionsDisplay;

      


      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;
        function doNothing() {}
        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function setMapOnAll(map) {
        for (var i = 0; i < markerss.length; i++) {
          markerss[i].setMap(map);
        }
      }
      function clearMarkers() {
        setMapOnAll(null);
      }
      function deleteMarkers() {
        clearMarkers();
        markers = [];
      }
      function hide(){
        var earrings = document.getElementById('waypoints');
        earrings.style.visibility = 'hidden';

}
      function show(){
        var earrings = document.getElementById('waypoints');

        earrings.style.visibility = 'visible';
      }
      function initMap() {
         hide();

        directionsService = new google.maps.DirectionsService;
        directionsDisplay = new google.maps.DirectionsRenderer;
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: {lat: 18.78775, lng: 98.99312}
        });

        directionsDisplay.setMap(map);

        document.getElementById('way').addEventListener('click',function() {
          count_click+=1;
          if(count_click!=0){
            set_name_temple=[];

          }
          newPoint();
          
        });

        document.getElementById('submit').addEventListener('click', function() {
  
        count_click+=1;
        set_name_temple=[];
          newPoint();
          

        }   );

        
        google.maps.event.addDomListener(window, 'load', function () {
            var places = new google.maps.places.Autocomplete(document.getElementById('start'));
            google.maps.event.addListener(places, 'place_changed', function () {
                var place = places.getPlace();
                var address = place.formatted_address;
                latitude = place.geometry.location.lat();
                longitude = place.geometry.location.lng();
                var mesg = "Address: " + address;
                mesg += "\nLatitude: " + latitude;
                mesg += "\nLongitude: " + longitude;
                // alert(mesg);
            });
        });
      }

      function newPoint(){
          show();
          
          clearMarkers();
          
          radLatLong= calculateAndDisplayRoute(directionsService, directionsDisplay);
          // window.alert(radLatLong);
          var customLabel = {
            restaurant: {
              label: 'R'
            },
            bar: {
              label: 'B'
            }
          };
          var infoWindow = new google.maps.InfoWindow;

          downloadUrl("{{ $xml_url }}", function(data) {


            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');

            Array.prototype.forEach.call(markers, function(markerElem) {
              var raddd=radLatLong;
              var name = markerElem.getAttribute('name');
              var address = markerElem.getAttribute('address');
              var type = markerElem.getAttribute('type');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng'))
              );


              var lat_1=parseFloat(markerElem.getAttribute('lat'));
              var long_1=parseFloat(markerElem.getAttribute('lng'));
              

              var rad = raddd.split(",");
              var dist2rad = dist(lat_1,long_1,parseFloat(rad[0]),parseFloat(rad[1]));

              // window.alert("radius="+rad[2]+","+dist2rad);
              // window.alert(lat_1+" , "+long_1+" , ");

              if(dist2rad<parseFloat(rad[2])){

                  // window.alert("radius="+rad[2]+","+dist2rad);
               
                set_name_temple.push(name);
                  
                 
                  var infowincontent = document.createElement('div');
                  var strong = document.createElement('strong');
                  strong.textContent = name;
                  
                  infowincontent.appendChild(strong);
                  infowincontent.appendChild(document.createElement('br'));
                  var text = document.createElement('text');
                  text.textContent = address
                  infowincontent.appendChild(text);
                  var icon = customLabel[type] || {};
                  var marker = new google.maps.Marker({
                    map: map,
                    position: point,
                    label: icon.label
                  });

                  markerss.push(marker);
                  marker.addListener('click', function() {
                    infoWindow.setContent(infowincontent);
                    infoWindow.open(map, marker);
                  });
              }
              
            });
            create_select();
          });
      }
      
      function createRadius(lat,long,radius) {
        
          covered={
              strokeColor: '#FF0000',
              strokeOpacity: 0.8,
              strokeWeight: 2,
              fillColor: '#FF0000',
              fillOpacity: 0.35,
              map: map,
              center: new google.maps.LatLng(lat, long),
              radius: radius * 1000
          }
          // Add the circle for this city to the map.
          if(count>0)
          {
              cityCircle.setMap(null);

          }

         cityCircle = new google.maps.Circle(covered);

        count=count+1;
   }
      
      function dist(lat1, lon1, lat2, lon2) {
        
        var dist = 0;
        var R = 6371; // Radius of the earth in km
        var dLat = deg2rad(lat2-lat1);  // deg2rad below
        var dLon = deg2rad(lon2-lon1); 
        var a = 
        Math.sin(dLat/2) * Math.sin(dLat/2) +
        Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) * 
        Math.sin(dLon/2) * Math.sin(dLon/2)
        ; 
        var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
        var dist = R * c; // Distance in km
 
        return dist;
      }
      function deg2rad(deg) {
      return deg * (Math.PI/180)
      }
      

      function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        
        var waypts = [];

        var checkboxArray = document.getElementById('waypoints');

        for (var i = 0; i < checkboxArray.length; i++) {
          if (checkboxArray.options[i].selected) {
            waypts.push({
              location: checkboxArray[i].value,
              stopover: true
            });
          }
        }
        // alert(latitude+""+longitude);
        // var latlng = document.getElementById('start').value.split(",");
        // var lat1 = parseFloat(latlng[0]);
        // var lng1 = parseFloat(latlng[1]);
        

        var latlng = document.getElementById('end').value.split(",");
        var lat2 = parseFloat(latlng[0]);
        var lng2 = parseFloat(latlng[1]);


        var distance = dist(latitude, longitude, lat2, lng2);
        var radius = (+distance) / 2.0 ;
        var latitude1 = (+latitude + (+lat2)) / 2.0;
        var longtitude1 = (+longitude + (+lng2)) / 2.0;

        // window.alert("latG=" + latitude + ", longG=" + longitude + ",lat=" + lat2 + ",long=" + lng2 + "C1=" + latitude1 + "C2=" + longtitude1);

       
        createRadius(latitude1,longtitude1,radius);


        directionsService.route({
          origin: document.getElementById('start').value,
          destination: document.getElementById('end').value,
         waypoints: waypts,
          optimizeWaypoints: true,
          travelMode: 'DRIVING'
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
            var route = response.routes[0];
            var summaryPanel = document.getElementById('directions-panel');
            summaryPanel.innerHTML = '';
            // For each route, display summary information.
            for (var i = 0; i < route.legs.length; i++) {
              var routeSegment = i + 1;
              // var duration = parseFloat(route.legs[i].duration.text)+30;


              summaryPanel.innerHTML += '<b>เส้นทางที่ : ' + routeSegment +
                  '</b><br>';
              summaryPanel.innerHTML += route.legs[i].start_address + ' <b>to<b> ';
              summaryPanel.innerHTML += route.legs[i].end_address + '<br>';
              summaryPanel.innerHTML += route.legs[i].duration.text + '<br>';
              summaryPanel.innerHTML += route.legs[i].distance.text + '<br><br>';

            computeTotalDistance(response);

            }
          } else {
            window.alert('ไม่พบเส้นทางกรุณาเลือกจุดเริ่มต้นและจุดปลายทาง');
          }
        });
        var text=latitude1+","+longtitude1+","+radius;
        return text;
      }

      function computeTotalDistance(result) {
        var totalDist = 0;
        var totalTime = 0;
        var myroute = result.routes[0];

        for (i = 0; i < myroute.legs.length; i++) {
          totalDist += myroute.legs[i].distance.value;
          totalTime += myroute.legs[i].duration.value;
        }
          totalDist = totalDist / 1000.
          document.getElementById("total").innerHTML = "ระยะทางรวมทั้งหมด: " + totalDist + " km<br>เวลารวมทั้งหมด: " + (totalTime / 60).toFixed(2) + " minutes";
      }

    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1wd_ZjcGOeUA3Z8PTTArFp2oSiCGd3KQ&sensor=false&libraries=places&callback=initMap">
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
@endsection


@section('content')
	<h1 align="center" style="color: white" >แนะนำเส้นทาง</h1>
  
	<hr width="50%"><br>
  <div id="map"></div>
	<div id="floating-panel">
    
    <div id="right-panel">
    <div>
    <b style="color: white">จุดเริ่มต้น:</b>
    <input class="textbox" id="start" style="width: 250px" placeholder="Enter a location" />

    
    
<b style="color: white">จุดสิ้นสุด:</b><br>
    <input class="textbox" type="text" list="myCompanies" name="tempName" id="end" style="width: 250px;" >
            <datalist id='myCompanies'>
      
        @foreach($tempmaps as $temple)
          <option value="{{ $temple->Temp_latitude }},{{ $temple->Temp_longitude }}" >"{{ $temple->Temp_name}}"</option>
        @endforeach
    
    </datalist><br>

    <br>

    <input type="submit" id="submit" value="ดูวัดระหว่างเส้นทาง" style="padding: 2px 15px 6px 5px;
    border-radius: 8px; background: #556B2F; color: #E0FFFF "><br>

    <b style="color: white">เลือกวัดที่ต้องการ:</b> <br>
    <i style="color: white">(Ctrl+Click สำหรับเลือกได้หลายวัด)</i> <br>
    <p id="demo"></p>
    <select multiple id="waypoints">
      

    </select>

    <input type="submit" id="way" value="ดูเส้นทาง" style="padding: 2px 15px 6px 5px;
    border-radius: 8px; background-color: #556B2F;color:#E0FFFF " ><br>

    <div id="total" style="color: white; font-weight: bold;"></div>

    <script type="text/javascript">
    function create_select(){
      var i=0;

    var y 
    ;
    // document.getElementById('waypoints').innerHTML=y;

    for (i = 0 ;i<set_name_temple.length;i++){
          y+="<option value='"+set_name_temple[i]+"'>"+set_name_temple[i]+"</option>";

    }

    document.getElementById('waypoints').innerHTML=y;
    }

    </script>


  

    <br><br>
    
  
    
      
    </div>
    
    
    </div>
    <div id="right-panel">
    <div id="directions-panel"></div>
    </div>
  </div><br>


@endsection

