	<hr id="hr">
	<div align="center">
		<p style="color: black;font-size: 125%;font-weight: bold;padding-top: 20px;padding-bottom: 5px;"> Log In ke tiket.com </p>
	</div>	

	<div align="center">
		<table cellpadding="35">
			<tr>
				<td><button id="b1"><img style="width: 25px;height: 25px;" src="<?= base_url('assets/img/fb.png'); ?>"> Log In dengan Facebook</button></td>
				
				<td><button id="b2"><img id="b21" style="height: 30px;width: 30px;padding-right: : 10px;margin-right: 5px;" src="<?= base_url('assets/img/google.png') ?>"> Log In dengan Google</button></td>
			</tr>

		</table>

	</div >

	<div  align="center">
		<img style="width: 150px;" src="<?= base_url('assets/img/4.png') ?>">
	</div>

	<div align="center" id="box">
		<div align="center" style="border-radius: 5px;border: solid 1px #ddd ;margin-bottom: 100px; ;width: 40%;height: 100%;margin-left: 40px;box-shadow: 0 6px 8px 0 rgba(0,0,0,0.15); ">
			<?= form_open('Login/validate'); ?>
			<form method="post">
			<input id="email" type="text" name="email" placeholder="Alamat Email" >
			<br>
			<input id="pass"  placeholder="Kata Sandi" type="password" name="pass">


			<div align="center" style="color: #ff9900 ; margin-top: 10px;">
				Lupa Kata Sandi?

			</div>
                <button type="submit" id="btn" class="btn">Log In</button>
			<div align="center">
				<div align="center">Belum Punya Akun? <span style="color: #ff9900;"><a href="<?= base_url('Register'); ?>">Daftar</a></span>
				</div>
			</div>
			</form>
		</div>
	</div>

	<hr id="hr1">