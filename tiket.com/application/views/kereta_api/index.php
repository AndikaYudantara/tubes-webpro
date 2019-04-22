<style >
	#btn:hover{
		background-color: #FF7200;
		color:white;
	}
	#btn{
		 background-color: white;
		 border:#FF7200 solid .5px;
		 color: #FF7200; 
	}
	#btn2{
		background-color: #FF7200;
		width: 415px;
		border:none;
	}
	#btn2:hover{
		background-color: #ffc299;
	}
	.align-bottom {
 	 position: absolute;
  	bottom: 0;
  	left: 0;
  	margin-bottom: 30px;
  	margin-left: 70px;
  	color: white;
  	font-size: 125%;
  }
  #hover,#hover1,#hover2,#hover3,#hover4,#hover5{
  	display: none;
  }

 


</style>

	
	<div class="container-fluid">
		<div class="row py-4" style="background: rgba(34, 34, 34, 0.15); padding-left: 150px; padding-right: 150px; position: absolute;">
			<form class="form-inline mx-auto px-auto" method="post" style="color: #888888; font-size: 14px;" accept-charset="utf-8" action="<?= base_url('Kereta_api/cari'); ?>">
				<div class="input-group">
					<div class="col border-top-0 border-bottom-0 border-left-0" style="background: white; border: solid 0.5px;">
						<div class="form-group">
							<label>Dari</label>
							<input type="text" class="form-control border-0" name="stasiun_berangkat" style="width: 150px;">
						</div>
					</div>
					<div class="col border-top-0 border-bottom-0" style="background: white; border: solid 0.5px;">
						<div class="form-group">
							<label>Ke</label>
							<input type="text" class="form-control border-0" name="stasiun_tiba" style="width: 150px;">
						</div>
					</div>
					<div class="col border-top-0 border-bottom-0" style="background: white; border: solid 0.5px;">
						<div class="form-group">
							<label>Pergi</label>
							<input type="date" value="2019-04-23" class="form-control border-0" name="tanggal_pergi" style="width: 200px;">
						</div>
					</div>
					<div class="col border-top-0 border-bottom-0" style="background: white; border: solid 0.5px;">
						<div class="form-group">
							<label>Pulang</label>
							<input type="date" value="2019-04-30" class="form-control border-0" name="tanggal_pulang" style="width: 200px;">
						</div>
					</div>				
					<div class="col border-top-0 border-bottom-0" style="background: white; border: solid 0.5px;">
						<div class="form-group">
							<label>Penumpang</label>
							<input type="text" class="form-control border-0" name="jumlah_penumpang" style="width: 100px;">
						</div>
					</div>				
					<div class="col px-0">
						<button type="submit" name="cari" class="btn btn-primary" style="background-color: #FF7200; width: 105px; height: 60px;">Cari</button>
					</div>
				</div>
			</form>
		</div>
		<div class="row" style="position: relative; z-index: -1;">
		<div id="carousel_indicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carousel_indicators" data-slide-to="0" class="active"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="<?= base_url('assets/img/c_1.jpg'); ?>" alt="First slide">
				</div>
			</div>

			<a class="carousel-control-prev" href="#carousel_indicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			</a>
			<a class="carousel-control-next" href="#carousel_indicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
			</a>
		</div>
		</div>
	</div>

	<div align="center" style="margin-top: 30px;">
		<div class="row" style="margin-bottom: 90px;">
			<div class="col-4">
				
			</div>
			<div class="col-4">
				<div class="row">
					<div  class="col" style=";margin-right: 100px">
							<img  style="height: 200px;width: 100%;" src="<?= base_url(); ?>/assets/img/logo_KA.png" >
						
					</div>

						<div class="col-4" style="margin-left: -100px;border: ridge .5px;border-left: none;padding: 2em;height: 200px;width: 100%" >

								<div style="margin-bottom: 10px;font-size: 100%;font-weight: bold;text-align: left;" class="row">
									Partner Online No.1 PT.KAI
								</div>
								<div style="margin-bottom: 10px;text-align: left;font-size: 60%" class="row">
									Tiket.com adalah Partner Online No. 1 PT. Kereta Api Indonesia sejak 2012 hingga sekarang.
								</div>
								<div style="margin-bottom: 10px" class="row">
									<button type="submit" id="btn2" class="btn btn-primary" >Selengkapnya</button>
								</div>
							</div>

						</div>

			
			</div>
			<div class="col-4">
				
			</div>
			

			</div>
		
	</div>

	<div class="container">
		
		<div class="col-4 mx-auto" style="font-size: 150%;font-weight: bold;margin-bottom: 50px">
			Tujuan Terbaik
		</div>
		<div class="row">
			<div class="col-4 mx-auto" id="body" style="background-image:url(<?= base_url('/assets/img/logo_KA1.jpg'); ?>);height: 300px;
			background-repeat: no-repeat;background-position: center;vertical-align: text-bottom ">
				<div id="align-bottom" class="align-bottom" >
					Tiket Kereta ke
					<br><span style="font-weight: 500;font-size: 150%">Jakarta</span><br>
					Mulai Dari <span style="color:#ffcc00;font-weight: 400;
					font-size: 120%">IDR 110.000</span>
				</div>

				<div class="mx-auto" id="hover" style="padding: 3em">
					<span style="color: white;font-size: 130%">Ke</span>
					<br><span style="color: white;font-size: 200%;font-weight: bold;"> Jakarta </span>
					<br><span style="color: white">Dari</span><br>
					<div class="row">
						<div class="col-7"style="color: white" >
							Bandung
						</div>
						<div class="col" style="color: #ffcc00;">
							IDR 110.000
						</div>
					</div>
					<div class="row">
						<div class="col-7" style="color: white">
							Malang
						</div>
						<div class="col" style="color: #ffcc00;">
							IDR 650.000
						</div>
					</div>
					<div class="row">
						<div class="col-7" style="color: white">
							Yogyakarta
						</div>
						<div class="col" style="color: #ffcc00;">
							IDR 490.000
						</div>
					</div>
					<div class="row">
						<div class="col-7" style="color: white">
							Cirebon
						</div>
						<div class="col" style="color: #ffcc00;">
							IDR 125.000
						</div>
					</div>
					<div class="row" style="color: white">
						<div class="col-7">
							Surabaya pasarturi
						</div>
						<div class="col" style="color: #ffcc00;">
							IDR 600.000
						</div>
					</div>
				</div>
			</div>

			<div class="col-4 mx-auto" id="body1" style="background-image:url(<?= base_url('/assets/img/logo_KA2.jpg'); ?>);height: 300px;
			background-repeat: no-repeat;background-position: center;vertical-align: text-bottom ">
				<div id="align-bottom1" class="align-bottom">
					Tiket Kereta ke
					<br><span style="font-weight: 500;font-size: 150%">Bandung</span><br>
					Mulai Dari <span style="color:#ffcc00;font-weight: 400;
					font-size: 120%">IDR 110.000</span>
				</div>
				<div class="mx-auto" id="hover1" style="padding: 3em">
					<span style="color: white;font-size: 130%">Ke</span>
					<br><span style="color: white;font-size: 200%;font-weight: bold;"> Bandung </span>
					<br><span style="color: white">Dari</span><br>
					<div class="row">
						<div class="col-7"style="color: white" >
							Gambir
						</div>
						<div class="col" style="color: #ffcc00;">
							IDR 110.000
						</div>
					</div>
					<div class="row">
						<div class="col-7" style="color: white">
							Malang
						</div>
						<div class="col" style="color: #ffcc00;">
							IDR 260.000
						</div>
					</div>
					<div class="row">
						<div class="col-7" style="color: white">
							Yogyakarta
						</div>
						<div class="col" style="color: #ffcc00;">
							IDR 195.000
						</div>
					</div>
					<div class="row">
						<div class="col-7" style="color: white">
							Cirebon
						</div>
						<div class="col" style="color: #ffcc00;">
							IDR 140.000
						</div>
					</div>
					<div class="row" style="color: white">
						<div class="col-7">
							Surabaya pasarturi
						</div>
						<div class="col" style="color: #ffcc00;">
							IDR 270.000
						</div>
					</div>
				</div>
			</div>


			<div class="col-4 mx-auto" id="body2" style="background-image:url(<?= base_url('/assets/img/logo_KA3.jpg'); ?>);height: 300px;
			background-repeat: no-repeat;background-position: center;vertical-align: text-bottom ">
				<div id="align-bottom2" class="align-bottom">
					Tiket Kereta ke
					<br><span style="font-weight: 500;font-size: 150%">Malang</span><br>
					Mulai Dari <span style="color:#ffcc00;font-weight: 400;
					font-size: 120%">IDR 550.000</span>
				</div>
				<div class="mx-auto" id="hover2" style="padding: 3em">
					<span style="color: white;font-size: 130%">Ke</span>
					<br><span style="color: white;font-size: 200%;font-weight: bold;"> Malang </span>
					<br><span style="color: white">Dari</span><br>
					<div class="row">
						<div class="col-7"style="color: white" >
							Gambir
						</div>
						<div class="col" style="color: #ffcc00;">
							IDR 555.000
						</div>
					</div>
					<div class="row">
						<div class="col-7" style="color: white">
							Bandung
						</div>
						<div class="col" style="color: #ffcc00;">
							IDR 260.000
						</div>
					</div>
					<div class="row">
						<div class="col-7" style="color: white">
							Yogyakarta
						</div>
						<div class="col" style="color: #ffcc00;">
							IDR 170.000
						</div>
					</div>
					<div class="row">
						<div class="col-7" style="color: white">
							Cirebon
						</div>
						<div class="col" style="color: #ffcc00;">
							IDR 520.000
						</div>
					</div>
					<div class="row" style="color: white">
						<div class="col-7">
							Surabaya pasarturi
						</div>
						<div class="col" style="color: #ffcc00;">
							IDR 35.000
						</div>
					</div>
				</div>
			</div>

		</div>

		<div class="row">
			<div class="col-4 mx-auto" id="body3" style="background-image:url(<?= base_url('/assets/img/logo_KA4.jpg'); ?>);height: 300px;
			background-repeat: no-repeat;background-position: center;vertical-align: text-bottom ">
				<div id="align-bottom3" class="align-bottom" >
					Tiket Kereta ke
					<br><span style="font-weight: 500;font-size: 150%">Yogyakarta</span><br>
					Mulai Dari <span style="color:#ffcc00;font-weight: 400;
					font-size: 120%">IDR 380.000</span>
				</div>
				<div class="mx-auto" id="hover3" style="padding: 3em">
					<span style="color: white;font-size: 130%">Ke</span>
					<br><span style="color: white;font-size: 200%;font-weight: bold;"> Yogyakarta </span>
					<br><span style="color: white">Dari</span><br>
					<div class="row">
						<div class="col-7"style="color: white" >
							Gambir
						</div>
						<div class="col" style="color: #ffcc00;">
							IDR 380.000
						</div>
					</div>
					<div class="row">
						<div class="col-7" style="color: white">
							Bandung
						</div>
						<div class="col" style="color: #ffcc00;">
							IDR 225.000
						</div>
					</div>
					<div class="row">
						<div class="col-7" style="color: white">
							Malang
						</div>
						<div class="col" style="color: #ffcc00;">
							IDR 170.000
						</div>
					</div>
					<div class="row">
						<div class="col-7" style="color: white">
							Cirebon
						</div>
						<div class="col" style="color: #ffcc00;">
							IDR 180.000
						</div>
					</div>
				</div>
			</div>


			<div class="col-4 mx-auto" id="body4" style="background-image:url(<?= base_url('/assets/img/logo_KA5.jpg'); ?>);height: 300px;
			background-repeat: no-repeat;background-position: center;vertical-align: text-bottom ">
				<div id="align-bottom4" class="align-bottom" >
					Tiket Kereta ke
					<br><span style="font-weight: 500;font-size: 150%">Cirebon</span><br>
					Mulai Dari <span style="color:#ffcc00;font-weight: 400;
					font-size: 120%">IDR 100.000</span>
				</div>
				<div class="mx-auto" id="hover4" style="padding: 3em">
					<span style="color: white;font-size: 130%">Ke</span>
					<br><span style="color: white;font-size: 200%;font-weight: bold;"> Cirebon </span>
					<br><span style="color: white">Dari</span><br>
					<div class="row">
						<div class="col-7"style="color: white" >
							Gambir
						</div>
						<div class="col" style="color: #ffcc00;">
							IDR 100.000
						</div>
					</div>
					<div class="row">
						<div class="col-7" style="color: white">
							Bandung
						</div>
						<div class="col" style="color: #ffcc00;">
							IDR 140.000
						</div>
					</div>
					<div class="row">
						<div class="col-7" style="color: white">
							Malang
						</div>
						<div class="col" style="color: #ffcc00;">
							IDR 520.000
						</div>
					</div>
					<div class="row">
						<div class="col-7" style="color: white">
							Yogyakarta
						</div>
						<div class="col" style="color: #ffcc00;">
							IDR 180.000
						</div>
					</div>
					<div class="row" style="color: white">
						<div class="col-7">
							Surabaya pasarturi
						</div>
						<div class="col" style="color: #ffcc00;">
							IDR 220.000
						</div>
					</div>
				</div>
			</div>


			<div class="col-4 mx-auto" id="body5" style="background-image:url(<?= base_url('/assets/img/logo_KA6.jpg'); ?>);height: 300px;
			background-repeat: no-repeat;background-position: center;vertical-align: text-bottom ">
				<div id="align-bottom5" class="align-bottom" >
					Tiket Kereta ke
					<br><span style="font-weight: 500;font-size: 150%">Surabaya</span><br>
					Mulai Dari <span style="color:#ffcc00;font-weight: 400;
					font-size: 120%">IDR 470.000</span>
				</div>
				<div class="mx-auto" id="hover5" style="padding: 3em">
					<span style="color: white;font-size: 130%">Ke</span>
					<br><span style="color: white;font-size: 200%;font-weight: bold;"> Surabaya </span>
					<br><span style="color: white">Dari</span><br>
					<div class="row">
						<div class="col-7"style="color: white" >
							Gambir
						</div>
						<div class="col" style="color: #ffcc00;">
							IDR 470.000
						</div>
					</div>
					<div class="row">
						<div class="col-7" style="color: white">
							Bandung
						</div>
						<div class="col" style="color: #ffcc00;">
							IDR 300.000
						</div>
					</div>
					<div class="row">
						<div class="col-7" style="color: white">
							Malang
						</div>
						<div class="col" style="color: #ffcc00;">
							IDR 35.000
						</div>
					</div>
					<div class="row" style="color: white">
						<div class="col-7">
							Cirebon
						</div>
						<div class="col" style="color: #ffcc00;">
							IDR 240.000
						</div>
					</div>
				</div>
			</div>

		</div>
	
		
	</div>

	<div class="col mx-auto" style="margin-bottom: 100px;margin-top: 50px;">
		<div style="font-weight: bold;font-size: 150%;margin-bottom: 40px" class="row">
			<div class="col-4 mx-auto">Cara Pesan Tiket Kereta Api</div>
			
		</div>
		<div class="row">
			<div class="col-4 mx-auto"><img style="margin-left: -180px;" src="<?= base_url(); ?>/assets/img/pesan.png" ></div>
		</div>
		<div class="row" style="margin-top: 20px; margin-left: 100px;">
			<div class="col-4 mx-auto">
			<button id="btn" type="submit" name="Selengkapnya" class="btn ">Selengkapnya</button>
			</div>
		</div>

	</div>

<script >
	
	document.getElementById("body").onmouseover= function(){
		document.getElementById("hover").style.display="block";
		document.getElementById("align-bottom").style.display="none";}
		document.getElementById("body").onmouseout=function(){
		document.getElementById("hover").style.display="none";
		document.getElementById("align-bottom").style.display="block";
	}


	document.getElementById("body1").onmouseover= function(){
		document.getElementById("hover1").style.display="block";
		document.getElementById("align-bottom1").style.display="none";}
		document.getElementById("body1").onmouseout=function(){
		document.getElementById("hover1").style.display="none";
		document.getElementById("align-bottom1").style.display="block";
	}

	document.getElementById("body2").onmouseover= function(){
		document.getElementById("hover2").style.display="block";
		document.getElementById("align-bottom2").style.display="none";}
		document.getElementById("body2").onmouseout=function(){
		document.getElementById("hover2").style.display="none";
		document.getElementById("align-bottom2").style.display="block";
	}

	document.getElementById("body3").onmouseover= function(){
		document.getElementById("hover3").style.display="block";
		document.getElementById("align-bottom3").style.display="none";}
		document.getElementById("body3").onmouseout=function(){
		document.getElementById("hover3").style.display="none";
		document.getElementById("align-bottom3").style.display="block";
	}

	document.getElementById("body4").onmouseover= function(){
		document.getElementById("hover4").style.display="block";
		document.getElementById("align-bottom4").style.display="none";
		}
		document.getElementById("body4").onmouseout=function(){
		document.getElementById("hover4").style.display="none";
		document.getElementById("align-bottom4").style.display="block";
	}

	document.getElementById("body5").onmouseover= function(){
		document.getElementById("hover5").style.display="block";
		document.getElementById("align-bottom5").style.display="none";}
		document.getElementById("body5").onmouseout=function(){
		document.getElementById("hover5").style.display="none";
		document.getElementById("align-bottom5").style.display="block";
	}
</script>