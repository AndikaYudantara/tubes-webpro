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

// function show_pesawat(){
//   document.getElementsById("main-pesawat").display = block;
//   document.getElementsById("main-hotel").display = none;
// }
// function show_hotel(){
//   document.getElementsById("main-pesawat").display = none;
//   document.getElementsById("main-hotel").display = block;
// }
// $(document).ready(function(){
//         $('#pesawat').on('click', function(){
//             show_pesawat();
//         });
//     });
// $(document).ready(function(){
//         $('#hotel').on('click', function(){
//             show_hotel();
//         });
//     });
