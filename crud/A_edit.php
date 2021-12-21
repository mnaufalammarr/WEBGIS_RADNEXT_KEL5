<?php
$id = $_SESSION['users']['id_adm'];
$query = $conn->query("SELECT * from tb_admin WHERE id_adm = '$id'");
$data = $query->fetch_assoc();
$password = $data['password'];
?>

<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">Edit Data Lokasi </h3>
	</div>
	<!-- /.box-header -->
	<!-- form start -->
	<form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
		<div class="box-body">
			
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Nama </label>

				<div class="col-sm-6">
					<input type="text" name="nama" class="form-control" value="<?= $data['nama_adm'] ?>" required="">
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Telepon/Hp</label>

				<div class="col-sm-6">
					<input type="text" name="telp" class="form-control" value="<?= $data['no_adm'] ?>">
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Email</label>

				<div class="col-sm-6">
					<input type="text" name="eml" class="form-control" value="<?= $data['mail_adm'] ?>">
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Username</label>

				<div class="col-sm-6">
					<input type="text" name="usr" class="form-control" value="<?= $data['username'] ?>" required="">
				</div>
			</div>
			
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Password</label>

				<div class="col-sm-6">
					<input type="password" name="pass" class="form-control" value="" required="">
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
		$nama     = $_POST['nama'];
		$telp = $_POST['telp'];
		$eml      = $_POST['eml'];
		$usr     = $_POST['usr'];

		$pass      = $_POST['pass'];

	
			# code...
		$sql = $conn->query("UPDATE tb_admin SET 
		
			nama_adm = '$nama',
			no_adm = '$telp',
			mail_adm = '$eml',
			username = '$usr',
			password = md5('$pass') WHERE id_adm = '$id' ");
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

