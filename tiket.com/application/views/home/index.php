<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/home.css">
<script type="text/javascript" src="<?= base_url(); ?>/assets/js/home.js"></script>
</head>
<body>

	<div class="slideshow-container">

		<div class="mySlides fade">
		  <img src="<?= base_url(); ?>/assets/img/slide1.jpg" style="width:100%">
		</div>
		<div class="mySlides fade">
		  <img src="<?= base_url(); ?>/assets/img/slide2.jpg" style="width:100%">
		</div>
		<div class="mySlides fade">
		  <img src="<?= base_url(); ?>/assets/img/slide3.jpg" style="width:100%">
		</div>
		<div class="mySlides fade">
		  <img src="<?= base_url(); ?>/assets/img/slide4.jpg" style="width:100%">
		</div>
		<div class="mySlides fade">
		  <img src="<?= base_url(); ?>/assets/img/slide5.jpg" style="width:100%">
		</div>
		<div class="mySlides fade">
		  <img src="<?= base_url(); ?>/assets/img/slide6.jpg" style="width:100%">
		</div>
		<div class="mySlides fade">
		  <img src="<?= base_url(); ?>/assets/img/slide7.jpg" style="width:100%">
		</div>
		<div class="mySlides fade">
		  <img src="<?= base_url(); ?>/assets/img/slide8.jpg" style="width:100%">
		</div>
		<div class="mySlides fade">
		  <img src="<?= base_url(); ?>/assets/img/slide9.jpg" style="width:100%">
		</div>
		<div class="mySlides fade">
		  <img src="<?= base_url(); ?>/assets/img/slide10.jpg" style="width:100%">
		</div>
		<div class="mySlides fade">
		  <img src="<?= base_url(); ?>/assets/img/slide11.jpg" style="width:100%">
		</div>
		<div class="mySlides fade">
		  <img src="<?= base_url(); ?>/assets/img/slide12.jpg" style="width:100%">
		</div>



		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>

		</div>

		<div style="text-align:center; margin-top: : -15px;">
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

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html> 

	
	<!-- <div class="floating-window">
		<div class="floating-window-header">
			<h2>Hey kamu mau kemana?</h2>
			<div class="floating-window-header-item">
				<nav class="navbar navbar-expand-sm">
					<ul class="navbar-nav">
						<li class="floating-window-header-nav-item"><a class="nav-link" href="#">Pesawat</a></li>
						<li class="floating-window-header-nav-item"><a class="nav-link" href="#">Hotel</a></li>
						<li class="floating-window-header-nav-item"><a class="nav-link" href="#">Kereta Api</a></li>
						<li class="floating-window-header-nav-item"><a class="nav-link" href="#">Sewa Mobil</a></li>
						<li class="floating-window-header-nav-item"><a class="nav-link" href="#">Entertaiment</a></li>
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
</div>

 -->