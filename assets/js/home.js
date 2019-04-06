function hotel(){
  document.getElementsById("hotel").display = "block";
  document.getElementsById("pesawat").display = "none";
}
function pesawat(){
  document.getElementsById("pesawat").display = "block";
  document.getElementsById("hotel").display = "none";
}

var slideIndex = 0;
function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none"; 
  }
  	slideIndex++;
  	if (slideIndex > x.length) {
  		slideIndex = 1
  	} 
  	x[slideIndex-1].style.display = "block"; 
  	setTimeout(carousel, 3000);
}

