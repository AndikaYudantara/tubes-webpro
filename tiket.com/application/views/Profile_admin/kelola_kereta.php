<style type="text/css">
	.btn{
		margin-left: 10px;
		background-color: #fff; 
		border: 1px solid #ff7200; 
		color: #ff7200
	}
	.hapus{
		border: 1px solid red;
		color: red;
	}
	.tambah{
		border: 1px solid blue;
		color: blue;
		padding: 0px 5px;
	}
	.btn:hover{
		background-color: #ff7200;
		color: #fff;
		border: 1px solid #ff7200; 
	}
	.hapus:hover{
		background-color: red;
		color: #fff;
		border: 1px solid red;
	}
	.tambah:hover{
		background-color: blue;
		color: #fff;
		border: 1px solid blue;
	}
</style>

<div class="container_fluid" style="margin: 30px">
	<h1 style="text-align: center; margin-bottom: 20px">Kelola Kereta Api</h1>
	 <div class="row py-0 px-4" style="margin-left: 100px; margin-right: 100px;">
	    <table class="table">
	      <thead style="font-size: 13px;">
	        <th>Kereta Api</th>
	        <th>Pergi</th>
	        <th>Tiba</th>
	        <th>Durasi</th>
	        <th>Kelola</th>
	        <th><button class="btn tambah" onclick="tambah()">Tambah +</button></th>
	      </thead>
	     
	      <tbody>
	        <?php foreach($kereta as $krt){ ?>
	        <tr>
	          <td><span style="font-size: 16px;"><?= $krt['nama']; ?></span><br><span style="color: #888888"><?= $krt['kelas']; ?></span></td>
	          <td><span style="font-size: 18px;"><?= $krt['waktu_berangkat']; ?></span><br><span style="color: #888888">(<?= $krt['stasiun_berangkat']; ?>)</span></td>
	          <td><span style="font-size: 18px;"><?= $krt['waktu_tiba']; ?></span><br><span style="color: #888888">(<?= $krt['stasiun_tiba']; ?>)</span></td>
	          <td><span style="font-size: 18px;"><?= $krt['durasi']; ?></span></td>

	          <td>
	          	<button class="btn" name="ubah" onclick="ubah()">Ubah</button>
	          	<a href="<?= base_url('Kereta_api/hapus_kereta/'.$krt['id']); ?>" class="btn hapus" name="hapus">Hapus</a>
	          </td>

	          
	        </tr>
	     	<?php } ?>
	        </tbody>
	      </table>    
	  </div>

	<div class="row" id="tambah" style="display: none">
		<div class="col">
			<form action="<?= base_url('Kereta_api/tambah_kereta')?>" method="post" style="width: 1000px; margin-left: 250px; margin-top: 30px; margin-bottom: 30px; border: 2px double #aaa; padding: 30px; border-radius: 15px;">
			  <h3>Tambah Kereta Api</h3>
			  <div class="form-group">
			    <label for="inputAddress">Nama</label>
			    <input type="text" class="form-control" name="nama" placeholder="Nama">
			  </div>

			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputEmail4">Stasiun Berangkat</label>
			      <input type="text" class="form-control" name="berangkat" placeholder="BD">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputPassword4">Stasiun Tiba</label>
			      <input type="text" class="form-control" name="tiba" placeholder="GMR">
			    </div>
			  </div>

			  <div class="form-row">
			    <div class="form-group col-md-4">
			      <label for="inputEmail4">Tanggal</label>
			      <input type="date" class="form-control" name="tanggal">
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputPassword4">Waktu Berangkat</label>
			      <input type="time" class="form-control" name="waktu_berangkat">
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputPassword4">Waktu Tiba</label>
			      <input type="time" class="form-control" name="waktu_tiba">
			    </div>
			  </div>

			  <div class="form-row">
			    <div class="form-group col-md-4">
			      <label for="inputEmail4">Kelas</label>
			      <input type="text" class="form-control" name="kelas">
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputPassword4">Harga</label>
			      <input type="text" class="form-control" name="harga">
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputPassword4">Kursi</label>
			      <input type="text" class="form-control" name="kursi">
			    </div>
			  </div>
			  <button type="submit" class="btn btn-primary">Tambah</button>
			</form>
		</div>
	</div>

	<div class="row" style="display: none;" id="ubah">
		<div class="col">
			<form action="<?= base_url('Kereta_api/update_kereta'.$krt['id']);?>" method="post" style="width: 1000px; margin-left: 250px; margin-top: 30px; margin-bottom: 30px; border: 2px double #aaa; padding: 30px; border-radius: 15px;">
			  <h3>Ubah Kereta Api</h3>
			  <div class="form-group">
			    <label for="inputAddress">Nama</label>
			    <input type="text" class="form-control" name="nama" placeholder="Nama">
			  </div>

			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputEmail4">Stasiun Berangkat</label>
			      <input type="text" class="form-control" name="berangkat" placeholder="BD">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputPassword4">Stasiun Tiba</label>
			      <input type="text" class="form-control" name="tiba" placeholder="GMR">
			    </div>
			  </div>

			  <div class="form-row">
			    <div class="form-group col-md-4">
			      <label for="inputEmail4">Tanggal</label>
			      <input type="date" class="form-control" name="tanggal">
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputPassword4">Waktu Berangkat</label>
			      <input type="time" class="form-control" name="waktu_berangkat">
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputPassword4">Waktu Tiba</label>
			      <input type="time" class="form-control" name="waktu_tiba">
			    </div>
			  </div>

			  <div class="form-row">
			    <div class="form-group col-md-4">
			      <label for="inputEmail4">Kelas</label>
			      <input type="text" class="form-control" name="kelas">
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputPassword4">Harga</label>
			      <input type="text" class="form-control" name="harga">
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputPassword4">Kursi</label>
			      <input type="text" class="form-control" name="kursi">
			    </div>
			  </div>
			  <button type="submit" class="btn btn-primary">Ubah</button>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
	function tambah(){
		document.getElementById("tambah").style.display = "block";
	}
	function ubah(){
		document.getElementById("ubah").style.display = "block";
	}
</script>