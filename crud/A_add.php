<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">Tambah Data Lokasi Point</h3>
	</div>
	<!-- /.box-header -->
	<!-- form start -->
	<form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
		
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Nama </label>

				<div class="col-sm-6">
					<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required="">
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Telepon/Hp</label>

				<div class="col-sm-6">
					<input type="text" name="telp" class="form-control" placeholder="Nomer Telepon/Hp">
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Email</label>

				<div class="col-sm-6">
					<input type="text" name="eml" class="form-control" placeholder="Email"required="">
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Username</label>

				<div class="col-sm-6">
					<input type="text" name="usr" class="form-control" placeholder="Username" >
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Password</label>

				<div class="col-sm-6">
					<input type="password" name="pass" class="form-control" placeholder="Password" >
				</div>
			</div>
			<br>

			
			
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

		$nama     = $_POST['nama'];
		$telp = $_POST['telp'];
		$eml      = $_POST['eml'];
		$usr     = $_POST['usr'];
		$pass      = $_POST['pass'];
		
		
				$sql = $conn->query("INSERT INTO `tb_admin`(`id_adm`, `nama_adm`, `no_adm`, `mail_adm`, `username`, `password`) VALUES (NULL,'$nama','$telp','$eml','$usr',md5('$pass'))");
		if ($sql) {

			?>
			<script type="text/javascript">
				alert("Data Berhasil disimpan."); document.location = '?page=viewA';
			</script>
			<?php

		} else {
			?>
			<script type="text/javascript">
				alert("Data gagal disimpan."); document.location = '?page=viewA';
			</script>
			<?php

		}
		
	}
	?>
</div>

