	<nav class="container-fluid">
		<nav class="row">
			<nav class="col-md text-center">
				<h2>Log In ke Tiket.com</h2>
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
		<?php echo form_open('Login/validate');?>
		<form method="post">
			<div class="form-group text-center">
				<input type="text" class="form-control" id="email" name="email" placeholder="Alamat Email">
			</div>
			<div class="form-group text-center">
				<input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi">
			</div>
			<div class="form-group text-center">
				<a href="#">Lupa Kata Sandi?</a>
			</div>
			<div class="form-group text-center">
				<button type="submit" name="login" class="btn btn-primary" style="width: 50vh;">Login</button>
			</div>
			<div class="form-group text-center">
				Belum punya akun? <a href="<?= base_url('Register'); ?>">Daftar</a>
			</div>
		</form>
	</div>