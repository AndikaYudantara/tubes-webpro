<div class="container-fluid text-center">
 	<div class="A" id="A" style="display: none;">
 		<h1>WOWOWOWO</h1>
 	</div>
 	<div>
 		<button onclick="hides()">#</button>
 	</div>
 </div>

 <script type="text/javascript">
 	function hides(){
 		document.getElementById('A').style.display = 'block';
 	}
 </script>

<button onclick="myFunction()">Click Me</button>

<div id="myDIV">
  This is my DIV element.
</div>

<script type="text/javascript">
	function myFunction() {
  var x = document.getElementById("A");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>