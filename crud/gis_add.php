<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">Tambah Data Lokasi Point</h3>
	</div>
	<!-- /.box-header -->
	<!-- form start -->
	<form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
		<div class="box-body">
					<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Tipe</label>

				<div class="col-sm-6">
					<select class="form-control" name="tipe">
						<option>Tipe </option>
						<option value="odp">ODP</option>
						<option value="client">Client</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Nama </label>

				<div class="col-sm-6">
					<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required="">
				</div>
			</div>

			

			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Catatan</label>

				<div class="col-sm-6">
					<input type="text" name="cat" class="form-control" placeholder="Catatan" >
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Latitude Longtitude</label>

				<div class="col-sm-3">
					<input type="text" name="lat" id="lat" class="form-control" placeholder="Latitude" required="">
				</div>
				<div class="col-sm-3">
					<input type="text" name="lng" id="lng" class="form-control" placeholder="Longtitude" required="">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-2"></div>
				<div class="col-sm-6">
					<div id="map" style="width:100%;height:380px;"></div>
				</div>
			</div>

			
			
		</div>
		<!-- /.box-body -->
		<div class="box-footer">
			<input type="reset" class="btn btn-default" value="Cancel" />
			<input type="submit" name="save" class="btn btn-info pull-right" value="Simpan" />
		</div>
		<!-- /.box-footer -->
	</form>
	<?php
	if (isset($_POST['save'])) {

		$tipe    = $_POST['tipe'];
		$nama     = $_POST['nama'];
		$telp = "";
		$alm      = "";
		$cat     = $_POST['cat'];
		$lat      = $_POST['lat'];
		$lng      = $_POST['lng'];
		
		
				$sql = $conn->query("INSERT INTO `tb_point`(`id_point`, `id_adm`, `nama_point`, `alamat_point`, `no_point`, `lokasi_point`, `catatan`, `tipe`) VALUES (NULL,$id_adm,'$nama','$alm','$telp',POINT($lng,$lat),'$cat','$tipe')");
		if ($sql) {

			?>
			<script type="text/javascript">
				alert("Data Berhasil disimpan."); document.location = '?page=viewP';
			</script>
			<?php

		} else {
			?>
			<script type="text/javascript">
				alert("Data gagal disimpan."); document.location = '?page=viewP';
			</script>
			<?php

		}
		
	}
	?>
</div>




<script>
	var cities = L.layerGroup();	

	var mbAttr = 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		mbUrl = 'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';

	var grayscale   = L.tileLayer(mbUrl, {id: 'mapbox/light-v9', tileSize: 512, zoomOffset: -1, attribution: mbAttr}),
		streets  = L.tileLayer(mbUrl, {id: 'mapbox/streets-v11', tileSize: 512, zoomOffset: -1, attribution: mbAttr});

	var map = L.map('map', {
		center: [-7, 112],
		zoom: 10,
		layers: [streets, cities]
	});

	var baseLayers = {
		"Grayscale": grayscale,
		"Streets": streets
	};

	var overlays = {
		"Cities": cities
	};

	L.control.layers(baseLayers, overlays).addTo(map);

	var marker = new L.Marker([-7, 112],{draggable:true}).on('drag', markerOnClick).addTo(map);

function markerOnClick(e)
{
var coord=e.latlng.toString().split(',');
var lat=coord[0].split('(');
var long=coord[1].split(')');
  popup
			.setLatLng(e.latlng)
			.setContent("you clicked the map at LAT: "+ lat[1]+" and LONG:"+long[0])
			.openOn(map);
			document.getElementById('lat').value = lat[1];
   		 document.getElementById('lng').value = long[0];

}
var popup = L.popup()
		.setLatLng([-7, 112])
		.setContent('Drag untuk pindah lokasi')
		.openOn(map);




	

	

</script>


