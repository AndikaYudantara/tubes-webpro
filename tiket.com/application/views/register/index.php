<hr id="hr">
<div align="center">
	<p style="color: black;font-size: 125%;font-weight: bold;padding-top: 20px;padding-bottom: 5px;"> Log In ke tiket.com </p>
</div>	

<div align="center">
		<table cellpadding="35">
			<tr>
				<td><button id="b1"><img style="width: 25px;height: 25px;" src="assets/img/fb.png"> Log In dengan Facebook</button></td>
			
				<td><button id="b2"><img id="b21" style="height: 30px;width: 30px;padding-right: : 10px;margin-right: 5px;" src="assets/img/google.png"> Log In dengan Google</button></td>
			</tr>

		</table>

</div >

<div  align="center">
	<img style="width: 150px;" src="assets/img/4.png">
</div>


<div align="center" id="box">
    <div align="center" style="border-radius: 5px;" id="box2">
    	<?= form_open('Register/insert'); ?>
    	<form method="post">
        <input id="nama" style="margin-top: 60px;" placeholder="Nama Lengkap" type="text" name="nama" id="nama">
        <input type="email" placeholder="Alamat Email" name="email" id="email">
        <input type="password" id="pass" placeholder="Kata Sandi" name="pass" id="pass">
        <input type="password" placeholder="Konfirmasi Kata Sandi" id="re-pass" name="re-pass" id="re-pass">

      <label>
          <input type="checkbox" id="cek" name="agree-term" id="agree-term">
            <span style="color: black;font-weight: 500;">Saya ingin menerima penawaran menarik dan notifikasi</span>    
       </label>

       <div style="margin-left: 50px; margin-right: 50px; margin-top: 30px; font-size: 75%" align="center">
         Dengan mengklik button “Daftar” di bawah ini, saya setuju dengan <span id="span">Kebijakan Privasi</span> serta <span id="span">Syarat dan Ketentuan</span> tiket.com
       </div>

         <button id="btn" >
               Daftar
         </button>

          <div align="center">
    <div align="center">Sudah Punya Akun? <span style="color: #ff9900;"><a href="<?= base_url(); ?>">Log In</a></span>
    </div>
  </div>
  </form>
    </div>



</div>

<hr id="hr1">
