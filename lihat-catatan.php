<div class="card">
	<div class="card-header">
	
       <h2> <font <i class="fa fa-book" color="blue"></i> <b>CATATAN ANDA</b></font></h2>
</div>
<div class="card-body">

              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>nomor</th>
                      <th>tanggal</th>
                      <th>jam</th>
                      <th>lokasi</th>
                      <th>suhu tubuh</th>
                      <th>kelurahan</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                     <th>nomor</th>
                      <th>tanggal</th>
                      <th>jam</th>
                      <th>lokasi</th>
                      <th>suhu tubuh</th>
                      <th>kelurahan</th>
                    </tr>
                  </tfoot>
                  <tbody>

                  	<?php
                  	$no =1;
                   $data =file("catatan.txt",FILE_IGNORE_NEW_LINES);
                   $user = $_SESSION['nik']."|".$_SESSION['nama_lengkap'];
                   foreach($data as $value) {
                   	$pecah = explode("|", $value);
                   	@$key=$pecah['0']."|".$pecah['1'];
                   	if($key==$user){
                  	?>


                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $pecah['2'];?></td>
                      <td><?= $pecah['3'];?></td>
                      <td><?= $pecah['4'];?></td>
                      <td><?= $pecah['5'];?></td>
                      <td><?= $pecah['6'];?></td>
                    </tr>
                  <?php } } ?>

     </tbody>
</table>
</div>
	</div>


	<div class="card-header">
	
                  <a href="user.php" class="btn btn-primary btn-icon-split btn-sm">
                    <span class="icon text-white-50">
                      <i class="fas fa-arrow-left"></i>
                    </span>
                    <span class="text">kembali</span>
                  </a>
</div>