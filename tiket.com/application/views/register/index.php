	<nav class="navbar navbar-expand-md justify-content-between">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?= base_url(); ?>">Logo disini</a>
		</div>
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link">TIX Point</a>
			</li>
			<li class="nav-item">
				<a class="nav-link">Mata Uang</a>
			</li>
			<li class="nav-item">
				<a class="nav-link">Bahasa</a>
			</li>
		</ul>
	</nav>
	<nav class="navbar navbar-expand-md justify-content-between">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link">Pesawat</a>
			</li>
			<li class="nav-item">
				<a class="nav-link">Hotel</a>
			</li>
			<li class="nav-item">
				<a class="nav-link">Kereta Api</a>
			</li>
			<li class="nav-item">
				<a class="nav-link">Sewa Mobil</a>
			</li>
			<li class="nav-item">
				<a class="nav-link">Entertainment</a>
			</li>
		</ul>
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link">Promo</a>
			</li>
			<li class="nav-item">
				<a class="nav-link">Cek Pesanan</a>
			</li>
			<li class="nav-item">
				<a class="nav-link">Log In</a>
			</li>
		</ul>
	</nav>
	<nav class="container-fluid">
		<nav class="row">
			<nav class="col-md text-center">
				<h2>Daftar sekarang dan dapatkan manfaatnya!</h2>
			</nav>
		</nav>
		<nav class="row">
			<nav class="col-md-3 offset-md-3 text-right"><a class="btn btn-primary" href="#">Log In dengan Facebook</a></nav>
			<nav class="col-md-3 text-left"><a class="btn btn-primary" href="#">Log In dengan Google</a></nav>
		</nav>
		<nav class="row">
			<nav class="col-md text-center">atau</nav>
		</nav>
	</nav>
	<div class="jumbotron" style="width: 65vh; margin: auto; padding: 6vh;">
		<?php echo form_open('Register/insert');?>
		<form method="post">
			<div class="form-group text-center">
				<input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap">
			</div>
			<div class="form-group text-center">
				<input type="text" class="form-control" id="email" name="email" placeholder="Alamat Email">
			</div>
			<div class="form-group text-center">
				<input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi">
			</div>
			<div class="form-group text-center">
				<input type="password" class="form-control" id="konfirmasi_password" name="konfirmasi_password" placeholder="Konfirmasi Kata Sandi">
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						Kekuatan Kata Sandi
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<small>Kata sandi harus menggunakan paling tidak 8 karakter dan menggunakan paling tidak satu simbol atau angka.</small>
					</div>
				</div>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="checkbox1">
				<label class="form-check-label" for="checkbox1">Saya ingin menerima penawaran menarik dan notifikasi</label>
			</div>
			<div class="form-group text-center">
				Dengan mengklik button “Daftar” di bawah ini, saya setuju dengan <a href="">Kebijakan Privasi</a> serta <a href="">Syarat dan Ketentuan</a> tiket.com
			</div>
			<div class="form-group text-center">
				<button type="submit" name="daftar" class="btn btn-primary" style="width: 50vh;">Daftar</button>
			</div>
			<div class="form-group text-center">
				Sudah punya akun? <a href="<?= base_url(); ?>">Log In</a>
			</div>
		</form>
	</div>
	<nav class="container-fluid">
		<nav class="row" style="height: 20vh;">
			<nav class="col-md">
				Manfaat menjadi member tiket.com
			</nav>
		</nav>
		<nav class="row" style="height: 20vh;">
			<nav class="col-md">
				Manfaat TIX Point
			</nav>
		</nav>
		<nav class="row" style="height: 20vh;">
			<nav class="col-md">
				Footer
			</nav>
		</nav>
	</nav>
<?= $this->session->userdata('email'); ?>