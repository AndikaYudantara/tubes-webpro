<div class="container-fluid text-center" style="border: 0.5px solid #e6e6e6;">
	<h2 style="font-size: 20px; padding: 37px">Log In ke tiket.com</h2>
	<a class="btn btn-primary" href="#"	style="background: #3B5998; margin: 0px 10px 15px;"><img src="<?= base_url(); ?>/assets/img/logo_fb.png" height="16">Log In dengan Facebook</a>
	<a class="btn btn-outline-secondary" href="#" style="margin: 0px 10px 15px;"><img src="<?= base_url(); ?>/assets/img/logo_g.png" height="16">Log In dengan Google</a>
	<div class="row justify-content-center" style="color: #888888">
		- atau -
	</div>
	<div class="row justify-content-center" style="font-size: 14px;">
		<?= form_open(base_url('Login/validate')); ?>
		<form class="rounded" method="post" style="width: 498px; border: 2px solid #e6e6e6; padding: 40px 40px; margin: 15px;">
			<div class="form-group text-left">
				<label>Alamat Email</label>
				<input type="email" class="form-control" name="email">
			</div>
			<div class="form-group text-left">
				<label>Kata Sandi</label>
				<input type="password" class="form-control" name="password">
			</div>
			<div class="form-group"><a class="disabled" style="color: #FF7200; font-size: 13px">Lupa Kata Sandi?</a></div>
			<button type="submit" name="login" class="btn btn-primary" style="background-color: #FF7200; width: 415px; margin: auto auto 15px;">Log In</button>
			<div class="form-group text-center">Belum punya akun? <a href="<?= base_url('Register'); ?>" style="color: #FF7200">Daftar</a></div>
		</form>
	</div>
</div>