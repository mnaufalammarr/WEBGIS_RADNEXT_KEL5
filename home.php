<style>
	#mapid { height: 480px; }
</style>
<link type="text/css" rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
	integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
	crossorigin="">
	<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3> <?php
              $ambil = $conn->query("SELECT * FROM tb_admin ");
                    $totaladm = $ambil->num_rows;
                    echo $totaladm;?></h3>

              <p>Admin</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-stalker"></i>
            </div>
            <a href="?page=viewA" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php $data = $conn->query("SELECT * FROM tb_point WHERE tipe = 'odp' ");
                    $totalodp = $data->num_rows;
                    echo $totalodp;?></h3>

              <p>ODP</p>
            </div>
            <div class="icon">
              <i class="ion ion-flag"></i>
            </div>
            <a href="?page=viewPO" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php $data = $conn->query("SELECT * FROM tb_point WHERE tipe = 'client' ");
                    $totalclient = $data->num_rows;
                    echo $totalclient;?></h3>

              <p>Client</p>
            </div>
            <div class="icon">
              <i class="ion ion-home"></i>
            </div>
            <a href="?page=viewPC" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php $data = $conn->query("SELECT * FROM tb_point ");
                    $total = $data->num_rows;
                    echo $total;?></h3>

              <p>Total Point</p>
            </div>
            <div class="icon">
              <i class="ion ion-pin"></i>
            </div>
            <a href="?page=viewP" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>

<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">Lokasi Point</h3>
	</div>
		<div class="col-md-12 peta leaflet-container leaflet-touch leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom" id="mapid"> </div>
	</div>

<script type="text/javascript" src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
crossorigin=""></script>
<script type="text/javascript">
	function myMap() {
		var winH = $(window).height();
		var winW = $(window).width();
		var navbar_hight = $('#navbar_hight').height();
		var total = winH - navbar_hight - navbar_hight;
		$('#mapid').css( {'height' : total+'px',});
	};
	//window.onload = myMap();
	var mymap = L.map('mapid').setView([-7.272579 , 112.74087], 20);
	L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 30,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11'
	}).addTo(mymap);

	var marker_red = 'assets/images/marker_red.png',
	marker_blue = 'assets/images/marker_blue.png',
	marker_green = 'assets/images/marker_green.png';

	var redIcon = L.icon({
		iconUrl: marker_red,
		    iconSize:     [30, 30], // size of the icon
		}), blueIcon = L.icon({
			iconUrl: marker_blue,
			iconSize: [30, 30],
		});

		var odp = L.layerGroup();
		var client = L.layerGroup();
		var overlays = {
			"<img src='assets/images/marker_red.png' width='20px'>odp": odp,
			"<img src='assets/images/marker_blue.png' width='20px'>client": client,
		};
		mymap.addLayer(odp);
		mymap.addLayer(client);
		<?php
		$query = $conn->query("SELECT *, X(lokasi_point) x, Y(lokasi_point) y  from tb_point");
		while ($data = $query->fetch_assoc()) {
			# code...
			?>
		var dataPop = 
		'<b>Nama </b> : <?= $data['nama_point'] ?><br> <b>Catatan</b> : <?= $data['catatan'] ?><br>';

			L.marker([<?= $data['y'] . ", " . $data['x'] ?>], <?php if ($data['tipe'] == "odp") { echo "{icon: redIcon}";} else {echo "{icon: blueIcon}";} ?>).bindPopup(dataPop).addTo(<?= $data['tipe']; ?>);
      console.log(<?=$data['id_point']?>);
			<?php
		}
		?>

		L.control.layers({},overlays).addTo(mymap);	
	</script>