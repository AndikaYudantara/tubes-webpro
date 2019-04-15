<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/home.css">
<script type="text/javascript" src="<?= base_url(); ?>/assets/js/home.js"></script>
</head>
<body onload="showSlides(1)">

	<div class="slideshow-container">

		<div class="mySlides">
		  <img src="<?= base_url(); ?>/assets/img/slide14.jpg" style="width:100%;">
		</div>
		<div class="mySlides">
		  <img src="<?= base_url(); ?>/assets/img/slide13.jpg" style="width:100%">
		</div>
		<div class="mySlides">
		  <img src="<?= base_url(); ?>/assets/img/slide15.jpg" style="width:100%">
		</div>
		<div class="mySlides">
		  <img src="<?= base_url(); ?>/assets/img/slide16.jpg" style="width:100%">
		</div>
		<div class="mySlides">
		  <img src="<?= base_url(); ?>/assets/img/slide17.jpg" style="width:100%">
		</div>
		<div class="mySlides">
		  <img src="<?= base_url(); ?>/assets/img/slide6.jpg" style="width:100%">
		</div>
		<div class="mySlides">
		  <img src="<?= base_url(); ?>/assets/img/slide7.jpg" style="width:100%">
		</div>
		<div class="mySlides">
		  <img src="<?= base_url(); ?>/assets/img/slide8.jpg" style="width:100%">
		</div>
		<div class="mySlides">
		  <img src="<?= base_url(); ?>/assets/img/slide9.jpg" style="width:100%">
		</div>
		<div class="mySlides">
		  <img src="<?= base_url(); ?>/assets/img/slide10.jpg" style="width:100%">
		</div>
		<div class="mySlides">
		  <img src="<?= base_url(); ?>/assets/img/slide11.jpg" style="width:100%">
		</div>
		<div class="mySlides">
		  <img src="<?= base_url(); ?>/assets/img/slide12.jpg" style="width:100%">
		</div>

		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>
		
	</div>
	<br>
	<div style="text-align:center;">
		<span class="dot" onclick="currentSlide(1)"></span> 
		<span class="dot" onclick="currentSlide(2)"></span> 
		<span class="dot" onclick="currentSlide(3)"></span> 
		<span class="dot" onclick="currentSlide(4)"></span> 
		<span class="dot" onclick="currentSlide(5)"></span> 
		<span class="dot" onclick="currentSlide(6)"></span> 
		<span class="dot" onclick="currentSlide(7)"></span> 
		<span class="dot" onclick="currentSlide(8)"></span> 
		<span class="dot" onclick="currentSlide(9)"></span> 
		<span class="dot" onclick="currentSlide(10)"></span> 
		<span class="dot" onclick="currentSlide(11)"></span> 
		<span class="dot" onclick="currentSlide(12)"></span> 
	</div>

	<div class="floating-window">
		<div class="floating-window-header">
			<h5>Hey kamu</h5>
			<h2>Mau ke mana?</h2>
			<div class="floating-window-header-item">
				<nav class="navbar navbar-expand-sm">
					<ul class="navbar-nav">
						<a class="floating-window-header-nav-item"><img class="nav-link" src="<?= base_url(); ?>/assets/img/logo_pesawat.jpg"></a>
						<a class="floating-window-header-nav-item"><img class="nav-link" src="<?= base_url(); ?>/assets/img/logo_hotel.jpg"></li>
						<a href="<?= base_url('Kereta_api')?>" class="floating-window-header-nav-item"><img class="nav-link" src="<?= base_url(); ?>/assets/img/logo_kereta.jpg"></li>
						<a class="floating-window-header-nav-item"><img class="nav-link" src="<?= base_url(); ?>/assets/img/logo_mobil.jpg"></li>
						<a class="floating-window-header-nav-item"><img class="nav-link" src="<?= base_url(); ?>/assets/img/logo_entertaiment.jpg"></li>
					</ul>
				</nav>
			</div>
		</div>
		<br>
		<div class="floating-window-main">
			<div id="hotel" class="floating-window-main-hotel" onclick="hotel();">
				<h3>Booking Hotel Murah Online dengan Harga Promo</h3>
			</div>
			<div id="pesawat" class="floating-window-main-pesawat" onclick="pesawat();">
				<h3>Cari harga tiket pesawat murah & promo di sini</h3>
			</div>
		</div>
	</div>
</body>
</html> 

	
	

