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
	<h1 style="text-align: center;">Kelola Kereta Api</h1>
	 <div class="row py-0 px-4" style="margin-left: 100px; margin-right: 100px;">
	    <table class="table">
	      <thead style="font-size: 13px;">
	        <th>Kereta Api</th>
	        <th>Pergi</th>
	        <th>Tiba</th>
	        <th>Durasi</th>
	        <th>Kelola</th>
	        <th><button class="btn tambah">Tambah +</button></th>
	      </thead>
	     
	      <tbody>
	        <?php foreach($kereta as $krt){ ?>
	        <tr>
	          <td><span style="font-size: 16px;"><?= $krt['nama']; ?></span><br><span style="color: #888888"><?= $krt['kelas']; ?></span></td>
	          <td><span style="font-size: 18px;"><?= $krt['waktu_berangkat']; ?></span><br><span style="color: #888888">(<?= $krt['stasiun_berangkat']; ?>)</span></td>
	          <td><span style="font-size: 18px;"><?= $krt['waktu_tiba']; ?></span><br><span style="color: #888888">(<?= $krt['stasiun_tiba']; ?>)</span></td>
	          <td><span style="font-size: 18px;"><?= $krt['durasi']; ?></span></td>
	          <td><a href="<?= base_url('Kereta_api/order/'.$krt['id']); ?>" class="btn btn-primary"name="ubah">Ubah</a><a href="<?= base_url('Kereta_api/order/'.$krt['id']); ?>" class="btn hapus" name="hapus">Hapus</a></td>
	          
	        </tr>
	     	<?php } ?>
	        </tbody>
	      </table>    
	  </div>

	<div class="row" style="display: none">
		<div class="col">
			<form  style="width: 1000px; margin-left: 250px; margin-top: 30px; margin-bottom: 30px; border: 2px double #aaa; padding: 30px; border-radius: 15px;">
			  <h3>Tambah Kereta Api</h3>

			  <div class="form-group">
			    <label for="inputAddress">Nama</label>
			    <input type="text" class="form-control" id="inputAddress" placeholder="Nama">
			  </div>

			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputEmail4">Stasiun Berangkat</label>
			      <input type="text" class="form-control" id="inputEmail4" placeholder="BD">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputPassword4">Stasiun Tiba</label>
			      <input type="text" class="form-control" id="inputPassword4" placeholder="GMR">
			    </div>
			  </div>

			  <div class="form-row">
			    <div class="form-group col-md-4">
			      <label for="inputEmail4">Tanggal</label>
			      <input type="date" class="form-control" id="inputEmail4">
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputPassword4">Waktu Berangkat</label>
			      <input type="time" class="form-control" id="inputPassword4">
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputPassword4">Waktu Tiba</label>
			      <input type="time" class="form-control" id="inputPassword4">
			    </div>
			  </div>
			  <button type="submit" class="btn btn-primary">Tambah</button>
			</form>
		</div>
	</div>

	<div class="row" style="display: none;">
		<div class="col">
			<form  style="width: 1000px; margin-left: 250px; margin-top: 30px; margin-bottom: 30px; border: 2px double #aaa; padding: 30px; border-radius: 15px">
			  <h3>Update Kereta Api</h3>

			  <div class="form-group">
			    <label for="inputAddress">Nama</label>
			    <input type="text" class="form-control" id="inputAddress" placeholder="Nama">
			  </div>

			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputEmail4">Stasiun Berangkat</label>
			      <input type="text" class="form-control" id="inputEmail4" placeholder="BD">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputPassword4">Stasiun Tiba</label>
			      <input type="text" class="form-control" id="inputPassword4" placeholder="GMR">
			    </div>
			  </div>

			  <div class="form-row">
			    <div class="form-group col-md-4">
			      <label for="inputEmail4">Tanggal</label>
			      <input type="date" class="form-control" id="inputEmail4">
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputPassword4">Waktu Berangkat</label>
			      <input type="time" class="form-control" id="inputPassword4">
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputPassword4">Waktu Tiba</label>
			      <input type="time" class="form-control" id="inputPassword4">
			    </div>
			  </div>
			  <button type="submit" class="btn btn-primary">Tambah</button>
			</form>
		</div>
	</div>
</div>