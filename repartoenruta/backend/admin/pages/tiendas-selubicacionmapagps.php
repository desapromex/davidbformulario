<?php 
// sqvr_latitude
// sqvr_longitude

    $sdvbbfparname = 'sqvr_latitude';
    $sdvbbfparinfoq = '';
    if (isset($_REQUEST[$sdvbbfparname])) {
        //$sdvbbfparinfoq=$_REQUEST[$sdvbbfparname];
        $sdvbbfparinfoq = trim($_REQUEST[$sdvbbfparname]);
    }
    $sqvr_latitude = trim($sdvbbfparinfoq);

    if (trim($sdvbbfparinfoq) != '') {

    } else {

        // header("HTTP/1.0 202 ErrorqServerq");
        // echo '["el dato: sqvr_latitude ,es obligatorio"]';
        // die();
    }

    $sdvbbfparname = 'sqvr_longitude';
    $sdvbbfparinfoq = '';
    if (isset($_REQUEST[$sdvbbfparname])) {
        //$sdvbbfparinfoq=$_REQUEST[$sdvbbfparname];
        $sdvbbfparinfoq = trim($_REQUEST[$sdvbbfparname]);
    }
    $sqvr_longitude = trim($sdvbbfparinfoq);

    if (trim($sdvbbfparinfoq) != '') {

    } else {

        // header("HTTP/1.0 202 ErrorqServerq");
        // echo '["el dato: sqvr_longitude ,es obligatorio"]';
        // die();
    }

if($sqvr_latitude != ''){
if($sqvr_longitude != ''){
	
if(is_numeric($sqvr_latitude) != ''){
if(is_numeric($sqvr_longitude) != ''){
}
}

}
}

$sqvradfhhhscvvbanderaubicacion=false;

if($sqvr_latitude != ''){
if($sqvr_longitude != ''){
	
if(is_numeric($sqvr_latitude) != ''){
if(is_numeric($sqvr_longitude) != ''){
	$sqvradfhhhscvvbanderaubicacion=true;
}
}

}
}
?>
       <style>
		html, body {
			height: 100%;
			margin: 0;
		}
		.leaflet-container {
			height: 400px;
			width: 600px;
			max-width: 100%;
			max-height: 100%;
		}
		
		
		
		
		
		
		
		div#map {}

.modal-body {}

.modal-content {}
		
		
.modal-content .modal-body {
    margin: 7px;
    margin-top: 33px;
    padding: 0px !important;
    padding-left: 7px !important;
    padding-right: 11px !important;
}

.modal-content .modal-body div#map{
		position:relative;
    overflow: scroll;	
    width: 99% !important;
    position: relative;
	height: 173px !important; 
    overflow: scroll;
    left: 0;
    top: 0;	
} .est843rfgj843ef76 {
    overflow-y: scroll;
    float: left;
	padding-bottom:7px;
    text-align: center;
    width: 60%;
    overflow-x: scroll;
}
.est703wegn83ed865 {
    float: left;
    text-align: center;
    overflow: visible;
    width: 40%;
}</style>

<div id="map" style=""></div>
<script>
	//17.9863552, -94.5782784
	//var map = L.map('map').setView([51.505, -0.09], 13);
	//var jdcvpodfvb=[23.4834007, -99.953125]
	var jdcvpodfvblatitide=23.4834007
	var jdcvpodfvblongitude=-99.953125
	var jdcvpodfvbzo=5
	var map = L.map('map').setView([jdcvpodfvblatitide,jdcvpodfvblongitude], jdcvpodfvbzo);

	var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map);
<?php 
if($sqvradfhhhscvvbanderaubicacion){
?>

	 jdcvpodfvblatitide=<?php echo $sqvr_latitude;?>
	 
	 
	 jdcvpodfvblongitude=<?php echo $sqvr_longitude;?>
	
	jdcvpodfvbzo=12
	
    setTimeout(function(){
        map.setView([jdcvpodfvblatitide,jdcvpodfvblongitude], jdcvpodfvbzo);
    }, 100);
    setTimeout(function(){
        map.setView([jdcvpodfvblatitide,jdcvpodfvblongitude], jdcvpodfvbzo);
    }, 300);
    setTimeout(function(){
        map.setView([jdcvpodfvblatitide,jdcvpodfvblongitude], jdcvpodfvbzo);
    }, 500);

	var marker = L.marker([jdcvpodfvblatitide, jdcvpodfvblongitude]).addTo(map)
		.bindPopup('<b>Hello world!</b><br />I am a popup.').openPopup();

	var circle = L.circle([jdcvpodfvblatitide, jdcvpodfvblongitude], {
		color: 'red',
		fillColor: '#f03',
		fillOpacity: 0.5,
		radius: 3
	}).addTo(map);//.bindPopup('I am a circle.');

<?php 
}
else{
?>
    setTimeout(function(){
        map.setView([jdcvpodfvblatitide,jdcvpodfvblongitude], jdcvpodfvbzo);
    }, 100);
    setTimeout(function(){
        map.setView([jdcvpodfvblatitide,jdcvpodfvblongitude], jdcvpodfvbzo);
    }, 300);
    setTimeout(function(){
        map.setView([jdcvpodfvblatitide,jdcvpodfvblongitude], jdcvpodfvbzo);
    }, 500);
	
	var marker = L.marker([51.5, -0.09]).addTo(map)
		.bindPopup('<b>Hello world!</b><br />I am a popup.').openPopup();

<?php 
}
?>

	// var circle = L.circle([51.508, -0.11], {
		// color: 'red',
		// fillColor: '#f03',
		// fillOpacity: 0.5,
		// radius: 500
	// }).addTo(map).bindPopup('I am a circle.');

	var polygon = L.polygon([
		[51.509, -0.08],
		[51.503, -0.06],
		[51.51, -0.047]
	]).addTo(map).bindPopup('I am a polygon.');


	var popup = L.popup()
		.setLatLng([51.513, -0.09])
		.setContent('I am a standalone popup.')
		.openOn(map);

	function onMapClick(e) {
  console.log(e.latlng.lat,e.latlng.lng);
  //var c = L.circle([e.latlng.lat,e.latlng.lng], {radius: 15}).addTo(map);
		try{
        marker.remove();
        }
		catch (err) {
			console.log(err)
		}
		 marker = L.marker([e.latlng.lat, e.latlng.lng]).addTo(map)
				//.bindPopup('<b>Hello world!</b><br />I am a popup.').openPopup();

		jQuery('#sqvqlabel_input_latitude').val(e.latlng.lat)
		jQuery('#sqvqlabel_input_longitude').val(e.latlng.lng);		jQuery('#sqvqlabel_latitude').html(e.latlng.lat)
		jQuery('#sqvqlabel_longitude').html(e.latlng.lng)
		
  // L.polygon([
    // [e.latlng.lat-xlat,e.latlng.lng-xlng],
    // [e.latlng.lat+xlat,e.latlng.lng-xlng],
    // [e.latlng.lat-xlat,e.latlng.lng+xlng],
    // [e.latlng.lat+xlat,e.latlng.lng+xlng],
  // ]).addTo(map);
  
    // L.polyline([
    // [e.latlng.lat,e.latlng.lng-xlng],
    // [e.latlng.lat,e.latlng.lng+xlng]
  // ]).addTo(map);
  
		// popup
			// .setLatLng(e.latlng)
			// .setContent('You clicked the map at ' + e.latlng.toString())
			// .openOn(map);
			
		// popup
			// .setLatLng(e.latlng)
			// .setContent('You clicked the map at ' + e.latlng.toString())
			// .openOn(map);
			
	}

	map.on('click', onMapClick);

    function getLocationConstant()
    {
        if(navigator.geolocation)
        {
            navigator.geolocation.getCurrentPosition(onGeoSuccess,onGeoError);
        } else {
            alert("No GPS support");
        }
    }

    function onGeoSuccess(event)
    {
        document.getElementById("location").value =  event.coords.latitude+", "+event.coords.longitude;

		<?php 
if($sqvradfhhhscvvbanderaubicacion){
}
else{
?>
  
        map.setView([event.coords.latitude,event.coords.longitude], 13);
		setTimeout(function(){
			map.setView([event.coords.latitude,event.coords.longitude], 13);
		}, 990);
		setTimeout(function(){
			map.setView([event.coords.latitude,event.coords.longitude], 13);
		}, 1000);
		setTimeout(function(){
			map.setView([event.coords.latitude,event.coords.longitude], 13);
		}, 1300);
		
		<?php 
}
?>
  
    }

    function onGeoError(event)
    {
        //alert("Error code " + event.code + ". " + event.message);
    }

    if(navigator.geolocation)
    {
        navigator.geolocation.getCurrentPosition(onGeoSuccess,onGeoError);
    }
	
	function fnsq_seleccionar_ubicacionmapagps(){
		
		if(jQuery('#sqvqlabel_input_latitude').val()){
			if(jQuery('#sqvqlabel_input_longitude').val()){
				
		if(jQuery('#sqvqlabel_input_latitude').val().trim() != ''){
			if(jQuery('#sqvqlabel_input_longitude').val().trim() != ''){
			}
			else{
				alert('toca el mapa en la posicion y haz click al boton guardar')
				return 
			}	
		}
		else{
			alert('toca el mapa en la posicion y haz click al boton guardar')
			return
		}
		
			}
			else{
				alert('toca el mapa en la posicion y haz click al boton guardar')
				return
			}	
		}
		else{
			alert('toca el mapa en la posicion y haz click al boton guardar')
			return
		}
		
		jQuery('#latitude').val(jQuery('#sqvqlabel_input_latitude').val())
		jQuery('#longitude').val(jQuery('#sqvqlabel_input_longitude').val())
		fn_hide_edtboxedtboxfronthighone_otrooneubicacionmapasel()
	}	
</script>

<div style="float:none;clear:both;"></div><div style="
    padding-top: 13px;
"></div>
<div class="est843rfgj843ef76">
<input id="sqvqlabel_input_latitude" type="hidden">
<input id="sqvqlabel_input_longitude" type="hidden">
Lat: <span id="sqvqlabel_latitude"></span>&nbsp;&nbsp;&nbsp;Lon:&nbsp;<span id="sqvqlabel_longitude"></span>
</div>
<div class="est703wegn83ed865">
<button onclick="fnsq_seleccionar_ubicacionmapagps()" >Guardar</button>
</div>
<input type="text" name="location" id="location" style="display:none;width:278px;">
<button onclick="getLocationConstant()" style="display:none;">Click</button>