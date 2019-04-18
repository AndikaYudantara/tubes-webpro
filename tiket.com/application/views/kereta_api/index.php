	<div class="container-fluid">
		<div class="row py-4" style="background: rgba(34, 34, 34, 0.15); padding-left: 150px; padding-right: 150px; position: fixed;">
			<form class="form-inline mx-auto px-auto" method="post" style="color: #888888; font-size: 14px;" accept-charset="utf-8" action="<?= base_url('Kereta_api/cari'); ?>">
				<div class="input-group">
					<div class="col border-top-0 border-bottom-0 border-left-0" style="background: white; border: solid 0.5px;">
						<div class="form-group">
							<label>Dari</label>
							<input type="text" class="form-control border-0" name="stasiun_berangkat" style="width: 180px;">
						</div>
					</div>
					<div class="col border-top-0 border-bottom-0" style="background: white; border: solid 0.5px;">
						<div class="form-group">
							<label>Ke</label>
							<input type="text" class="form-control border-0" name="stasiun_tiba" style="width: 180px;">
						</div>
					</div>
					<div class="col border-top-0 border-bottom-0" style="background: white; border: solid 0.5px;">
						<div class="form-group">
							<label>Pergi</label>
							<input type="text" class="form-control border-0" name="tanggal_pergi" style="width: 140px;">
						</div>
					</div>
					<div class="col border-top-0 border-bottom-0" style="background: white; border: solid 0.5px;">
						<div class="form-group">
							<label>Pulang</label>
							<input type="text" class="form-control border-0" name="tanggal_pulang" style="width: 140px;">
						</div>
					</div>				
					<div class="col border-top-0 border-bottom-0" style="background: white; border: solid 0.5px;">
						<div class="form-group">
							<label>Penumpang</label>
							<input type="text" class="form-control border-0" name="jumlah_penumpang" style="width: 140px;">
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