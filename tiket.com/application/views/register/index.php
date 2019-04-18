<div class="container-fluid text-center" style="border: 0.5px solid #e6e6e6;">
	<h2 style="font-size: 20px; padding: 37px">Daftar sekarang dan dapatkan manfaatnya!</h2>
	<a class="btn btn-primary" href="#"	style="background: #3B5998; margin: 0px 10px 15px;"><img src="<?= base_url(); ?>/assets/img/logo_fb.png" height="16">Log In dengan Facebook</a>
	<a class="btn btn-outline-secondary" href="#" style="margin: 0px 10px 15px;"><img src="<?= base_url(); ?>/assets/img/logo_g.png" height="16">Log In dengan Google</a>
	<div class="row justify-content-center" style="color: #888888">
		- atau -
	</div>
	<div class="row justify-content-center" style="font-size: 14px;">
		<?= form_open(base_url('Register/insert')); ?>
		<form class="rounded" method="post" style="width: 498px; border: 2px solid #e6e6e6; padding: 40px 40px; margin: 15px;">
			<div class="form-group text-left">
				<input type="text" class="form-control" name="username" placeholder="Nama Lengkap">
			</div>
			<div class="form-group text-left">
				<input type="email" class="form-control" name="email" placeholder="Alamat Email">
			</div>
			<div class="form-group text-left">
				<input type="password" class="form-control" name="password" placeholder="Kata Sandi">
			</div>
			<div class="form-group text-left">
				<input type="password" class="form-control" name="password_conf" placeholder="Konfirmasi Kata Sandi">
			</div>
			<div class="row form-group text-left" style="padding-bottom: 25px;">
				<div class="col-md-4 form-control" style="border: none; font-size: 13px; color: #888888;">Kekuatan Kata Sandi</div>
				<div class="col-md-8 form-control" style="border: none; font-size: 13px; color: #888888; max-width: 300px;">Kata sandi harus menggunakan paling tidak 8 karakter dan menggunakan paling tidak satu simbol atau angka.</div>
			</div>
			<div class="form-group"><label class="checkbox-inline"><input type="checkbox">Saya ingin menerima penawaran menarik dan notifikasi</label></div>
			<div class="form-group mx-auto" style="max-width: 415px; color: #888888">Dengan mengklik button “Daftar” di bawah ini, saya setuju dengan<a class="disabled" style="color: #FF7200; font-size: 13px"> Kebijakan Privasi</a> serta <a class="disabled" style="color: #FF7200; font-size: 13px">Syarat dan Ketentuan</a> tiket.com</div>
			<button type="submit" name="regis" class="btn btn-primary" style="background-color: #FF7200; width: 415px; margin: auto auto 15px;">Daftar</button>
			<div class="form-group text-center">Sudah punya akun? <a href="<?= base_url('Login'); ?>" style="color: #FF7200">Log In</a></div>
		</form>
	</div>
</div>