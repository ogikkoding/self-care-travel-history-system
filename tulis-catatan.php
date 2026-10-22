<div class="card">
	<div class="card-header">
		
<font color="blue"><b>SILAHKAN ISI DATA DIBAWAH INI</b></font>


</div>
<br>
<div class="card-body">
	<form action="simpan.php" method="post">
		
		<div class="form-group">
			<label><i class="fa fa-book fa-fw"></i> Pilih Tanggal </label>
			<input name="tanggal" type="date" required class="form-control" placeholder="masukan tanggal">
		</div>

       <div class="form-group">
			<label><i class="fa fa-clock fa-fw"></i> Pilih jam </label>
			<input name="jam" type="time" required class="form-control" placeholder="masukan jam">
		</div>
     
     <div class="form-group">
			<label><i class="fa fa-map fa-fw"></i> Pilih lokasi </label>
			<input name="lokasi" type="text" required class="form-control" placeholder="lokasi">
		</div>

		<div class="form-group">
			<label><i class="fa fa-tachometer-alt fa-fw"></i> Suhu tubuh </label>
			<input name="suhu" type="text" required class="form-control" placeholder="masukan suhu tubuh">
		</div>

			<div class="form-group">
			<label><i class="fa fa-user fa-fw"></i> Kelurahan </label>
			<input name="lurah" type="text" required class="form-control" placeholder="masukan kelurahan">
		</div>



		<div class="form-group">

         <a href="user.php" class="btn btn-primary btn-icon-split btn-sm">
                    <span class="icon text-white-50">
                      <i class="fas fa-arrow-left"></i>
                    </span>
                    <span class="text">kembali</span>
                  </a>


			  <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan </button>
		    <button type="reset"  class="btn btn-danger"><i class="fa fa-trash"></i> Hapus </button>
		</div>




	</form>

	</div>
</div>