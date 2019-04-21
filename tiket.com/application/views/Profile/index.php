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
		<div class="row" style="background-color: white;height: 100px;border-radius: 8px;border: solid .5px #ddd">
			<div class="col" style="padding: 2em;padding-top: 1em;padding-left: 2.5em;">
				<div class="row" style="font-weight: 500;font-size: 120%">Tuan/Nyonya <?=  $this->session->userdata('username'); ?></div>
				<div class="row" style="margin-top: 10px;"> <?=  $this->session->userdata('email'); ?></div>
			</div>
		</div>

		<div class="row" style="background-color: white;height: 185px;border-radius: 8px;border: solid .5px #ddd; margin-top: 15px">
			<div class="col" style="padding: 2em;padding-top: 1em;padding-left: 2.5em;">
				<div class="row">
					<h4>Akun Sosial</h4>
				</div>
				<div class="row">
					<p style="color: #888">Hubungkan akun sosial anda untuk proses log in yang lebih mudah</p>
				</div>
				<div class="row" style="margin-top: 10px;">
					<a href="#"><img src="<?= base_url();?>/assets/img/logo_g.png" style="height: 60px; width: 60px; border: 1px solid #ccc; border-radius: 5px; padding: 10px"></a>
				</div>
			</div>
		</div>
	</div>
   </div>
</div>
</div>