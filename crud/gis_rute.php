
<style>
	#mapid { height: 480px; }
</style>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
<link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
<script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
<script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">Lokasi Point</h3>
	</div>
		<div class="col-md-12 peta leaflet-container leaflet-touch leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom" id="mapid"> </div>
	</div>
<?php
$id = $_GET['id_point'];
$query = $conn->query("SELECT X(lokasi_point) x, Y(lokasi_point) y  from tb_point WHERE id_point = '$id'");
$data = $query->fetch_assoc();
?>
  
<script type="text/javascript">
	function myMap() {
		var winH = $(window).height();
		var winW = $(window).width();
		var navbar_hight = $('#navbar_hight').height();
		var total = winH - navbar_hight - navbar_hight;
		$('#mapid').css( {'height' : total+'px',});
	};
	//window.onload = myMap();
	var mymap = L.map('mapid').setView([-6.9884791,110.3915757], 13);
	L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11'
	}).addTo(mymap);

navigator.geolocation.getCurrentPosition(function(location) {
  var latlng = new L.LatLng(location.coords.latitude, location.coords.longitude);
  var marker = L.marker(latlng).addTo(mymap);
  L.Routing.control({
  waypoints: [
    L.latLng(latlng),
    L.latLng(<?=$data['y'];?>,<?=$data['x'];?>)
  ]
}).addTo(mymap);
});


		// var marker = L.marker([-6.984277, 110.409636]).addTo(mymap);
	</script>