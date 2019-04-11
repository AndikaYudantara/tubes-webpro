	<nav class="navbar navbar-expand-md text-light bg-dark justify-content-between">
		<div class="navbar-header">
			NAVBAR
		</div>
		<ul class="navbar-nav">
			<li class="nav-item">Active Session : <?= $this->session->userdata('email'); ?></li>
		</ul>
		<ul class="navbar-nav">
			<li class="nav-item"><a href="<?= base_url('Login/logout'); ?>">Logout</a></li>
		</ul>
	</nav>
	<!--nav class="navbar navbar-expand-md justify-content-between">
		<div class="navbar-header">
			<a class="navbar-brand" href="">Logo disini</a>
		</div>
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link">TIX Point</a>
			</li>
			<li class="nav-item">
				<a class="nav-link">Mata Uang</a>
			</li>
			<li class="nav-item">
				<a class="nav-link">Bahasa</a>
			</li>
		</ul>
	</nav>
	<nav class="navbar navbar-expand-md justify-content-between">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link">Pesawat</a>
			</li>
			<li class="nav-item">
				<a class="nav-link">Hotel</a>
			</li>
			<li class="nav-item">
				<a class="nav-link">Kereta Api</a>
			</li>
			<li class="nav-item">
				<a class="nav-link">Sewa Mobil</a>
			</li>
			<li class="nav-item">
				<a class="nav-link">Entertainment</a>
			</li>
		</ul>
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link">Promo</a>
			</li>
			<li class="nav-item">
				<a class="nav-link">Cek Pesanan</a>
			</li>
			<li class="nav-item">
				<a class="nav-link">Log In</a>
			</li>
		</ul>
	</nav-->
