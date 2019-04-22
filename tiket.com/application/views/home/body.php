 <style type="text/css">
 	.btn{
 		color: #ff7200;
 		border: 1px solid #ff7200;
 	}
 	.btn:hover{
 		color: #fff;
 		background-color: #ff7200;
 	}
 	#destinasi div img{
 		transition: transform .2s;
 	}
 	#destinasi div img:hover{
 		transform: scale(1.05);
 	}
 	#tix div img{
 		transition: transform .2s;
 	}
 	#tix div img:hover{
 		transform: translate(0pc, -10px)
 	}
 </style>
 

 <div class="container-fluid">
 	<div class="text-center">
 		<img src="<?= base_url(); ?>/assets/img/smarts.jpg">
 		<a href="#"><img src="<?= base_url(); ?>/assets/img/wa.jpg" style="position: fixed; right: 45px; bottom: 45px; z-index: 2; border-radius: 30px"></a>
 		<h1 style="padding-top: 150px">#tiketWonderfulIndonesia: Destinasi Populer</h1>
 		<p>Jelajahi Indonesia dengan mengeksplor kekayaannya di berbagai destinasi populer</p>
 		<div class="row" id="destinasi" style="margin: 0 0px 30px 120px">
		    <div class="col-md-auto">
		      <a href="#"><img src="<?= base_url(); ?>/assets/img/medan.jpg"></a>
		    </div>
		    <div class="col-md-auto">
		      <a href="#"><img src="<?= base_url(); ?>/assets/img/makassar.jpg"></a>
		    </div>
		    <div class="col-md-auto">
		      <a href="#"><img src="<?= base_url(); ?>/assets/img/mataram.jpg"></a>
		    </div>
		</div>
		<div class="row" id="destinasi" style="margin: 0 0px 30px 118px">
		    <div class="col-md-auto">
		      <a href="#"><img src="<?= base_url(); ?>/assets/img/manado.jpg"></a>
		    </div>
		    <div class="col-md-auto">
		      <a href="#"><img src="<?= base_url(); ?>/assets/img/makassar2.jpg"></a>
		    </div>
		    <div class="col-md-auto">
		      <a href="#"><img src="<?= base_url(); ?>/assets/img/malang.jpg"></a>
		    </div>
		</div>

		<h1 style="padding-top: 150px">Tix Spot</h1>
		<p>Nikmati Berbagai Penawaran Eksklusif Merchant di tiket.com</p>
		<div  class="row" id="tix" style="margin-left: 110px">
		    <div class="col-sm-auto">
		      <a href="#"><img src="<?= base_url(); ?>/assets/img/free_pizza.jpg"></a>
		    </div>
		    <div class="col-sm-auto">
		      <a href="#"><img src="<?= base_url(); ?>/assets/img/travel_wifi.jpg"></a>
		    </div>
		    <div class="col-sm-auto">
		      <a href="#"><img src="<?= base_url(); ?>/assets/img/gelato.jpg"></a>
		    </div>
		    <div class="col-sm-auto">
		      <a href="#"><img src="<?= base_url(); ?>/assets/img/k.jpg"></a>
		    </div>
		</div>
		<button class="btn" style="margin: 50px; padding: 10px;">Masih Banyak Lagi</button>

		<h1 style="padding-top: 150px">Kenapa memesan di tiket.com?</h1>
		<img src="<?= base_url(); ?>/assets/img/kenapa.jpg">

		<div class="row" style="background-color: #f2f7fd; padding-top: 200px; padding-right: 150px; padding-left: : 150px;" >
			<div class="col-12 col-md-8">
				<img src="<?= base_url(); ?>/assets/img/cicil.png" style="width: 90%; padding-left: 100px; padding-right: : 100px">
			</div>
			<div class="col-6 col-md-4"  style="padding-top: 30px; background-color: #f2f7fd;text-align: left;">
				<h1>Mudahnya Mencicil di tiket.com</h1>
				<p style="font-size: 20px;">Pesan sekarang dan cicil pembayarannya dengan satu klik. Iya, semudah itu! Program cicilan dapat digunakan untuk membayar penerbangan, hotel, entertainment, dan sewa mobil. Bayar dalam 3,6 atau 12 bulan, terserah Anda! Program cicilan ini dapat dinikmati oleh pemegang kartu bank partner kami.</p>
				<button class="btn" style="padding: 10px;">Selengkapnya</button>
			</div>
		</div>

		<div class="row" style="background-color: #f2f7fd; padding-top: 300px; padding-bottom: 300px; padding-left: 150px; padding-right: 100px">
			<div class="col"  style="background-color: #f2f7fd;text-align: left;">
				<h1>Partner Kami</h1>
				<p style="font-size: 20px; max-width: 500px">Anda adalah prioritas kami. Oleh karena itu kami bekerja sama dengan berbagai penyedia jasa transportasi, jaringan hotel dan penyedia hiburan untuk memastikan agar perjalanan Anda selalu nyaman dan menyenangkan, ke manapun Anda pergi.</p>
				<button class="btn" style="left: 150px; padding: 10px;">Selengkapnya</button>
			</div>
			<div class="col">
				<img src="<?= base_url(); ?>/assets/img/partner.svg">
			</div>		
		</div>

 	</div>
 </div>