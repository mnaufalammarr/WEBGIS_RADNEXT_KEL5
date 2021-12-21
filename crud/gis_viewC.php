
<div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data Point</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="box">
                    <div class="box-body">

              <a href="?page=addP" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Data</a>
              <br><br>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Tipe</th>
                    <th>Nama</th>
                    
                    <th>Catatan</th>
                    <th>Latitude</th>
                    <th>Longtitude</th>
                    <th width="200px">Aksi</th>
                  </tr>
				        </thead>
                <tbody>
                <?php 

        			//Query
        			$sql = $conn->query("SELECT *, X(lokasi_point) x, Y(lokasi_point) y  from tb_point WHERE tipe = 'client' order by id_point desc");
        			$nomor=1;
        			
        			while ($data = $sql->fetch_assoc()) {            
        		?>
				<tr>
					<td><?php echo $nomor++; ?></td>
					<td><?php echo $data['tipe']; ?></td>
					<td><?php echo $data['nama_point']; ?></td>
          <td><?php echo $data['catatan']; ?></td>
          <td><?php echo $data['y']; ?></td>
          <td><?php echo $data['x']; ?></td>
					<td>
						<a href="?page=deleteP&id_point=<?php echo $data['id_point'] ?>" class="btn-danger btn btn-sm"><i class="fa fa-trash"></i> hapus</a>
						<a href="?page=editP&id_point=<?php echo $data['id_point'] ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
            <a href="?page=rute&id_point=<?php echo $data['id_point'] ?>" class="btn btn-info btn-sm"><i class="fa fa-level-up"></i> Rute</a>
					</td>
				</tr>
				<?php
        			}
    			?>
				</tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
                </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- ./box-body -->
            
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->