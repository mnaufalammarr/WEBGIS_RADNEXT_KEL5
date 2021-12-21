
<div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data Admin</h3>

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

              <a href="?page=addA" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Data</a>
              <br><br>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Telp</th>
                    <th>E-mail</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th width="200px">Aksi</th>
                  </tr>
				        </thead>
                <tbody>
                <?php 

        			//Query
        			$sql = $conn->query("SELECT * from tb_admin order by id_adm desc");
        			$nomor=1;
        			
        			while ($data = $sql->fetch_assoc()) {            
        		?>
				<tr>
					<td><?php echo $nomor++; ?></td>
					<td><?php echo $data['nama_adm']; ?></td>
					<td><?php echo $data['no_adm']; ?></td>
          <td><?php echo $data['mail_adm']; ?></td>
          <td><?php echo $data['username']; ?></td>
          <td><?php echo $data['password']; ?></td>
					<td>
						<a href="?page=deleteA&id=<?php echo $data['id_adm'] ?>" class="btn-danger btn btn-sm"><i class="fa fa-trash"></i> hapus</a>
					
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