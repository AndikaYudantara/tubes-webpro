	<div class="jumbotron" style="width: 150vh; margin: auto; padding: 6vh;">
		<?php echo form_open('Penerbangan/lihat_penerbangan');?>
		<h4>Cari harga tiket pesawat murah & promo di sini</h4>
		<form method="post">
			<div class="row justify-content-between">
				<div class="form-group">
					<label for="kota_berangkat">Dari</label>
					<input type="text" class="form-control" id="kota_berangkat" name="kota_berangkat" placeholder="Mau ke mana">
				</div>
				<button class="btn btn-primary">swap</button>
				<div class="form-group">
					<label for="kota_tiba">Ke</label>
					<input type="text" class="form-control" id="kota_tiba" name="kota_tiba" placeholder="Mau ke mana">
				</div>
			</div>
			<div class="row justify-content-between">
				<div class="form-group">
					<label for="tanggal_berangkat">Pergi</label>
					<input type="text" class="form-control" id="tanggal_berangkat" name="tanggal_berangkat" placeholder="YYYY-MM-DD">
				</div>
				<div class="form-group">
					<label for="tanggal_pulang">Pulang</label>
					<input type="text" class="form-control" id="tanggal_pulang" name="tanggal_pulang" placeholder="YYYY-MM-DD">
				</div>
				<div class="form-group">
					<label for="penumpang">Penumpang</label>
					<input type="text" class="form-control" id="penumpang" name="penumpang" value="1">
				</div>
				<div class="form-group">
					<label for="kelas_kabin">Kelas Kabin</label>
					<input type="text" class="form-control" id="kelas_kabin" name="kelas_kabin" value="Ekonomi">
				</div>
			</div>
		</form>
	</div>