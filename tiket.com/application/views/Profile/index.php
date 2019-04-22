<style >
	#a{
		text-decoration: none;
		color: black;
	}
	#a1{
		text-decoration: none;
	}

	#a > span:hover{
		color: gray;
	}
	.btn{
		color: #ff7200;
	}

	.btn:hover{
		background-color: #FF7200;
		color: #ffffff;

</style>

<div style="margin-top: 30px;background-color: #f2f2f2;" class="container-fluid">
	<div class="container">
   <div class="row" style="padding: 40px">
	<div class="col-3 mx-auto" style="border: solid .5px #ddd;border-radius: 5px;background-color: white;">
		<div class="row" style="margin-bottom: 10px; margin-top: 10px;">
				<div class="col-1">
					<img src="<?= base_url(); ?>/assets/img/logo_home1.png">					
				</div>
				<div class="col">
					<a id="a1" href="#">
						<span style="margin-left: 10px;">Profil Saya</span>
					</a>
				</div>
				
		</div>
		<div class="row" style="margin-bottom: 10px;">
				<div class="col-1">
					<img src="<?= base_url(); ?>/assets/img/logo_home2.png">					
				</div>
				<div style="color: black" class="col">
					<a id="a" href="#">
						<span style="margin-left: 10px;">My Order</span>
					</a>
				</div>
				
		</div>
		<div class="row" style="margin-bottom: 10px;">
				<div class="col-1">
					<img src="<?= base_url(); ?>/assets/img/logo_home3.png">					
				</div>
				<div style="color: black" class="col">
					<a id="a" href="#">
						<span style="margin-left: 10px;">Kartu Saya</span>
					</a>
				</div>
				
		</div>
		<div class="row" style="margin-bottom: 10px;">
				<div class="col-1">
					<img src="<?= base_url(); ?>/assets/img/logo_home4.png">					
				</div>
				<div style="color: black" class="col">
					<a id="a" href="#">
						<span style="margin-left: 10px;">Rekening Saya</span>
					</a>
				</div>
				
		</div>
		<div class="row" style="margin-bottom: 10px;">
				<div class="col-1">
					<img src="<?= base_url(); ?>/assets/img/logo_home5.png">					
				</div>
				<div style="color: black" class="col">
					<a id="a" href="#">
						<span style="margin-left: 10px;">TIX Point</span>
					</a>
				</div>
				
		</div>
		<div class="row" style="margin-bottom: 10px;">
				<div class="col-1">
					<img src="<?= base_url(); ?>/assets/img/logo_home6.png">					
				</div>
				<div style="color: black" class="col">
					<a id="a" href="#">
						<span style="margin-left: 10px;">Refund Saya</span>
					</a>
				</div>
				
		</div>
		<div class="row" style="margin-bottom: 10px;">
				<div class="col-1">
					<img src="<?= base_url(); ?>/assets/img/logo_home7.png">					
				</div>
				<div style="color: black" class="col">
					<a id="a" href="#">
						<span style="margin-left: 10px;">Smart Traveler</span>
					</a>
				</div>
				
		</div>
		<div class="row" style="margin-bottom: 10px;">
				<div class="col-1">
					<img src="<?= base_url(); ?>/assets/img/logo_home8.png">					
				</div>
				<div style="color: black" class="col">
					<a id="a" href="#">
						<span style="margin-left: 10px;">Pengaturan Berlangganan</span>
					</a>
				</div>
				
		</div>
		<div class="row" style="margin-bottom: 10px;">
				<div class="col-1">
					<img src="<?= base_url(); ?>/assets/img/logo_home9.png">					
				</div>
				<div style="color: black" class="col">
					<a id="a" href="#">
						<span style="margin-left: 10px;">Ubah Kata Sandi</span>
					</a>
				</div>
				
		</div>
		<div class="row" style="margin-bottom: 10px;">
				<div class="col-1">
					<img src="<?= base_url(); ?>/assets/img/logo_home10.png">					
				</div>
				<div  class="col">
					<a id="a" href="<?= base_url('Login/logout'); ?>">
						<span  style="margin-left: 10px;">Log Out</span>
					</a>
				</div>
				
		</div>

	</div>
	<div class="col " style="margin-left: 50px">
		<div class="row" style="font-size: 80%">
			<span style="color:#FF7200;margin-right: 10px; ">Home</span> <span> > </span> <span style="margin-left: 10[x">Profil Saya</span>
		</div>
		<div class="row" style="font-size: 200%;font-weight: 400;margin-top: 20px;margin-bottom: 20px;">Profil Saya</div>

		<div class="row" id="head" style="background-color: white;height: 100px;border-radius: 8px;border: solid .5px #ddd">
			<div class="col" style="padding: 2em;padding-top: 1em;padding-left: 2.5em;">
				<div class="row" style="font-weight: 500;font-size: 120%"><span id="gelar"></span> &nbsp;<?=  $this->session->userdata('username'); ?></div>
				<div class="row" style="margin-top: 10px;"> <?=  $this->session->userdata('email'); ?></div>
				<button class="btn " id="ubah_btn" style="float: right; margin-top: -45px; border: 1px solid #ff7200" onclick="ubah()">Ubah</button>
			</div>
		</div>
		<div class="row" id="isi" style="background: #fff; padding: 10px 25px; border-top: 1px solid #ccc; border-radius: 0 0 10px 10px; display: none;">
			<?= form_open(base_url('Profile/update')) ?>
			<form method="post" style="width: 200%">
				<div class="row" style="margin-bottom: 15px; margin-top: 15px">
					<div class="col-md-4"><label for="titel" style="color: #777; font-size: 20px">Titel</label></div>
					<div class="col-md-8">
						<select name="titel" id="titel" style="width: 100%; border: none; border-bottom: 1px solid #ccc; font-size: 18px">
					    	<option value="Tuan ">Tuan</option>
					    	<option value="Nyonya ">Nyonya</option>
					    	<option value="Nona ">Nona</option>
					  	</select>
					</div>
				</div>
				<div class="row" style="margin-bottom: 15px; margin-top: 15px">
					<div class="col-md-4"><label for="uname" class="uname" style="color: #777; font-size: 20px">Username</label></div>
					<div class="col-md-8"><input type="text" name="uname" style="width: 100%; border: none; border-bottom: 1px solid #ccc; font-size: 18px"></div>
				</div>
				
				<div class="row" id="simpan" style="background: #fff ;padding: 15px;">
					<div class="col-md-6">
						<p style="color: #777; margin-top: 10px"><span style="color: red">*</span> Mohon tambahkan informasi profil Anda yang lebih lengkap di Smart Traveler</p>
					</div>
					<div class="col-md-6">		
						<button class="btn " id="btn" onclick="batal()" style="background: #fff; color: #777; margin-top: 15px; margin-left: 160px;">Batal</button>
						<button type="submit" class="btn " id="btn" onclick="simpan()" style="background: #FF7200; color: #fff; margin-top: 15px; margin-left: 10px">Simpan</button>
						
					</div>
				</div>
			</form>
			<?= form_open(base_url('Profile/delete')) ?>
			<form>
				<button class="btn " id="btn" style="background: #ff0000;color: #fff; margin: 15px; margin-bottom: 25px">Delete Akun</button>
			</form>
			
		</div>
		

		<div class="row" style="background-color: white;height: 185px;border-radius: 8px;border: solid .5px #ddd; margin-top: 15px">
			<div class="col">
				<div class="row" style="margin : 15px 5px 0px 5px">
					<h4>Akun Sosial</h4>
				</div>
				<div class="row" style="margin : 0px 5px 5px 5px">
					<p style="color: #888">Hubungkan akun sosial anda untuk proses log in yang lebih mudah</p>
				</div>
				<div class="row" style="padding: 0px; padding-top: 10px; border-top: 1px solid #ccc">
					<a href="#"><img src="<?= base_url();?>/assets/img/logo_g.png" style="height: 60px; width: 60px; border: 1px solid #ccc; border-radius: 5px; padding: 10px; margin-left: 15px; margin-top: 3px"></a>
					<label style="margin-top: 20px; margin-left: 25px; font-weight: bold; font-size: 18px">Google</label>
				</div>
			</div>
		</div>
	</div>
   </div>
</div>
</div>

<script type="text/javascript">
	function ubah(){
		document.getElementById("isi").style.display = "flex";
		document.getElementById("head").style.borderRadius = "15px 15px 0 0";
		document.getElementById("ubah_btn").style.display = "none"

	}
	function batal(){
		document.getElementById("isi").style.display = "none";
		document.getElementById("head").style.borderRadius = "15px";
		document.getElementById("ubah_btn").style.display = "flex"
	}
	function simpan(){
		
		document.getElementById("isi").style.display = "none";
		document.getElementById("ubah_btn").style.display = "flex"
	}
</script>