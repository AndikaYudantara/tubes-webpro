

<div class="container-fluid text-center" style="border: 0.5px solid #e6e6e6;">
	<h2 style="font-size: 20px; padding: 37px">Log In ke tiket.com</h2>
	<a class="btn btn-primary" href="#"	style="background: #3B5998; margin: 0px 10px 15px;"><img src="<?= base_url(); ?>/assets/img/logo_fb.png" height="16">Log In dengan Facebook</a>
	<a class="btn btn-outline-secondary" href="#" style="margin: 0px 10px 15px;"><img src="<?= base_url(); ?>/assets/img/logo_g.png" height="16">Log In dengan Google</a>
	<div class="row justify-content-center" style="color: #888888">
		- atau -
	</div>
	<div class="row justify-content-center" style="font-size: 14px;">
		<?= form_open(base_url('Login/validate')); ?>
		<form class="rounded" method="post" id="form1" style="width: 498px; border: 2px solid #e6e6e6; padding: 40px 40px; margin: 15px;">
		  <div style="border: solid 1px; padding: 50px;">
			<div class="form-group text-left ">
				<input  type="email" class="form-control border-right-0 border-top-0 border-left-0" placeholder="Alamat Email" name="email">
			</div>
			<div class="form-group text-left" >
				<input type="password"  placeholder="Kata Sandi" class="form-control border-right-0 border-top-0 border-left-0" name="password">
			</div>
			<div class="form-group"><a class="disabled" style="color: #FF7200; font-size: 13px"	>Lupa Kata Sandi?</a></div>
			<button type="submit" name="login" class="btn btn-primary" style="background-color: #FF7200; width: 415px; margin: auto auto 15px;">Log In</button>
			<div class="form-group text-center">Belum punya akun? <a href="<?= base_url('Register'); ?>" style="color: #FF7200">Daftar</a></div>
			</div>	
		</form>
	</div>
</div>


<br>
<br>
<br>

		<img style="display: block; margin-left: auto;margin-right: auto;" src="<?= base_url(); ?>/assets/img/logo_log_bot.png" >

