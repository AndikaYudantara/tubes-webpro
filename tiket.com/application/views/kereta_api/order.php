	<div class="container-fluid">
		<div class="row py-5" style="padding-left: 100px;">
			<div class="col-md-8">
				<div class="wrapper border rounded mb-4">
					<ul class="col-md-12 list-inline my-0" style="padding: 10px;">
						<li class="list-inline-item"><img src="<?= base_url('assets/img/logo_kai.jpg'); ?>" width="50px" height="31.13"></li>
						<li class="list-inline-item" style="color: #E98A00;">Perjalanan Pergi</li>
						<li class="list-inline-item" style="font-size: 14px;">&bull; <?= $kereta->nama; ?></li>
						<li class="list-inline-item" style="font-size: 14px;">&bull; <?= $kereta->tanggal; ?></li>
					</ul>
					<ul class="col-md-12 list-inline border border-left-0 border-right-0 my-0" style="padding: 10px; background-color: #E4EBF5">
						<li class="list-inline-item" style="font-size: 20px;"><b><?= $kereta->stasiun_berangkat?></b><span style="color: #2F5995"> > </span><b><?= $kereta->stasiun_tiba?></b></li>
						<li class="list-inline-item"><b><?= date_create_from_format('Y:m:d', $kereta->waktu_berangkat)->format('h:i'); ?>-<?= date_create_from_format('Y:m:d', $kereta->waktu_tiba)->format('h:i'); ?></b><br><span><?= $kereta->tanggal ?></span></li>
						<li class="list-inline-item"><b><?= $kereta->kelas ?></b></li>
						<li class="list-inline-item text-center"><span style="color: #2F5995;"><b>IDR <?= $kereta->harga*$this->session->userdata('jumlah_penumpang'); ?></b></span><br><span>Subtotal</span></li>
					</ul>
					<ul class="col-md-12 list ml-4 my-0" style="padding: 10px; font-size: 12px;">
						<li class="list-item">(<?= $kereta->stasiun_berangkat ?>)-(<?= $kereta->stasiun_tiba ?>)</li>
						<li class="list-item"><?= $this->session->userdata('jumlah_penumpang') ?> Dewasa x IDR <?= $kereta->harga ?></li>
					</ul>
					<ul class="col-md-12 list-inline border border-left-0 border-right-0 border-bottom-0 my-0" style="padding: 10px; background-color: #FDE7AF;">
						<li class="list-inline-item"><b>Total</b><span style="font-size: 11px;"> * Sebelum biaya administrasi</span></li>
						<li class="list-inline-item" style="color: #5D8D00"><b>IDR <?= $kereta->harga*$this->session->userdata('jumlah_penumpang'); ?></b></li>
					</ul>
				</div>
				<div class="wrapper border">
					<div class="wrapper p-2" style="background-color: #0064D2;">
						<h2 class="text-light" style="font-size: 20px;"><b>Data penumpang yang akan pergi</b></h2>
					</div>
					<div class="wrapper p-2 text-center">
						<p style="font-size: 15px;">Kami perlu untuk mengumpulkan informasi penumpang untuk Anda dan siapa pun yang berpergian dengan Anda. Harap memberikan nomor ponsel untuk penumpang utama.<br><br>PERSYARATAN DAN KETENTUAN ANGKUTAN PENUMPANG KERETA API</p>
						<div class="collapse text-left" id="syarat_dan_ketentuan" style="font-size: 14px; max-height: 200px; overflow-y: auto;">
							<ol>
								<li>Setiap penumpang wajib memiliki tiket yaitu dokumen angkutan yang sah berupa tiket komputer, tiket tercetak, atau bentuk lainnya yang ditetapkan PT Kereta Api Indonesia (PT KAI) sebagai tiket.</li>
								<li>Setiap penumpang wajib memiliki tiket yaitu dokumen angkutan yang sah berupa tiket komputer, tiket tercetak, atau bentuk lainnya yang ditetapkan PT Kereta Api Indonesia (PT KAI) sebagai tiket.</li>
								<li>Setiap penumpang wajib memiliki tiket yaitu dokumen angkutan yang sah berupa tiket komputer, tiket tercetak, atau bentuk lainnya yang ditetapkan PT Kereta Api Indonesia (PT KAI) sebagai tiket.</li>
								<li>Setiap penumpang wajib memiliki tiket yaitu dokumen angkutan yang sah berupa tiket komputer, tiket tercetak, atau bentuk lainnya yang ditetapkan PT Kereta Api Indonesia (PT KAI) sebagai tiket.</li>
								<li>Setiap penumpang wajib memiliki tiket yaitu dokumen angkutan yang sah berupa tiket komputer, tiket tercetak, atau bentuk lainnya yang ditetapkan PT Kereta Api Indonesia (PT KAI) sebagai tiket.</li>
								<li>Setiap penumpang wajib memiliki tiket yaitu dokumen angkutan yang sah berupa tiket komputer, tiket tercetak, atau bentuk lainnya yang ditetapkan PT Kereta Api Indonesia (PT KAI) sebagai tiket.</li>
								<li>Setiap penumpang wajib memiliki tiket yaitu dokumen angkutan yang sah berupa tiket komputer, tiket tercetak, atau bentuk lainnya yang ditetapkan PT Kereta Api Indonesia (PT KAI) sebagai tiket.</li>
								<li>Setiap penumpang wajib memiliki tiket yaitu dokumen angkutan yang sah berupa tiket komputer, tiket tercetak, atau bentuk lainnya yang ditetapkan PT Kereta Api Indonesia (PT KAI) sebagai tiket.</li>
							</ol>
						</div>
					</div>
					<div class="wrapper p-2 text-center">
						<a href="#syarat_dan_ketentuan" data-toggle="collapse">selengkapnya</a>
						<?php if($this->session->userdata('username') == NULL){ ?><div class="card m-2 p-3 text-left" style="background-color: #EBF3FD;">
							<h4 style="font-size: 14px; color: #295291;">tiket.com Member Login</h4>
							<div class="row">
								<div class="col-md-9">
									<p style="font-size: 12px; color: #666666;">Jika Anda telah memiliki akun tiket.com, Anda dapat melakukan login untuk mempercepat proses ini.</p>
								</div>
								<div class="col-md">
									<a class="btn btn-dark" href="#" style="background-color: #FF720A;"><b>Login</b></a>
								</div>
							</div>
							</div><?php } ?>
						</div>
						<div class="wrapper p-2" style="background-color: #CDDEF2;">
							<h4 style="font-size: 15px; color: #264770;">Informasi Kontak yang Dapat Dihubungi</h4>
						</div>
						<div class="wrapper p-4">
							<form method="post">
								<div class="row">
									<div class="col-md-2">
										<div class="form-group">
											<label><b>Titel</b></label>
											<select class="custom-select">
												<option selected="">Pilih Titel</option>
												<option value="Tuan">Tuan</option>
												<option value="Nyonya">Nyonya</option>
												<option value="Nona">Nona</option>
											</select>
										</div>
									</div>
									<div class="col-md-5 offset-md-5">
										<div class="form-group">
											<label><b>Kontak Email</b></label>
											<input class="form-control" type="text" name="email">
										</div>									
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label><b>Nama Lengkap</b></label>
											<input class="form-control" type="text" name="nama_lengkap">
											<small class="form-text text-muted">Diisi sesuai KTP/Paspor/SIM (tanpa tanda baca atau gelar)</small>
										</div>									
									</div>
									<div class="col-md-5 offset-md-1 orm-group">
										<label><b>No. Telepon</b></label>
										<div class="row">
											<div class="col-md-6">
												<select class="custom-select">
													<option selected="Indonesia(+62)" value="+62">Indonesia(+62)</option>
													<option value="+44">United Kingdom(+44)</option>
												</select>
											</div>
											<div class="col-md-6">
												<input class="form-control" type="text" name="telepon">
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
						<?= form_open('Kereta_api/tambah_penumpang/'.$this->session->userdata('jumlah_penumpang')); ?>
						<form method="post">
							<?php for ($i=1; $i <= $this->session->userdata('jumlah_penumpang'); $i++){?>
								<div class="wrapper p-2" style="background-color: #CDDEF2;">
									<h4 style="font-size: 15px; color: #264770;">Penumpang Dewasa <?= $i; ?></h4>
								</div>
								<div class="wrapper p-4">
									
									<form method="post" action="<!?= base_url('Kereta_api/tambah_penumpang'); ?>">
									<div class="checkbox">
										<label><input type="checkbox"><b>Sama dengan kontak</b></label>
									</div>
									<div class="row">
										<div class="col-md-2">
											<div class="form-group">
												<label><b>Titel</b></label>
												<select class="custom-select" name="select<?= $i; ?>">
													<option selected="">Pilih Titel</option>
													<option value="Tuan">Tuan</option>
													<option value="Nyonya">Nyonya</option>
													<option value="Nona">Nona</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label><b>Nama Lengkap</b></label>
												<input class="form-control" type="text" name="nama_lengkap<?= $i; ?>">
												<small class="form-text text-muted">Diisi sesuai KTP/Paspor/SIM (tanpa tanda baca atau gelar)</small>
											</div>									
										</div>
										<div class="col-md-5 offset-md-1 form-group">
											<label><b>Nomor KTP / SIM</b></label>
											<input class="form-control" type="text" name="identitas<?= $i; ?>">
											<small class="form-text text-muted">Untuk penumpang di bawah 17 tahun, wajib diisi dengan tanggal lahir, format ddmmyyyy. Contoh: 17071999</small>
										</div>
									</div>
									</form>
								</div>
							<?php } ?>
							<div class="wrapper p-4 text-right">
								<button type="submit" class="btn btn-dark" style="background-color: #FF720A;"><b>Pesan Sekarang</b></button>
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-4"><img src="<?= base_url('assets/img/i_1.jpg'); ?>"></div>
			</div>
		</div>