	<div>
		<img src="<?= base_url('assets/img/1.png'); ?>" id="g1" align="left">
		<div class="dropdown" align="right" id="nav1">
			<table cellpadding="10">
				
				<tr>
					<td><img src="<?= base_url('assets/img/3.png'); ?>"> TIX POINT</td><?= $this->session->userdata('email'); ?>
					<td> | </td>
					<td>
						 <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    				     IDR	
    				</button>
  				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
   	 			<a class="dropdown-item" href="#">AUD - Dolar Australia</a>
 		   		<a class="dropdown-item" href="#">BND - Dolar Brunei</a>
 		   		<a class="dropdown-item" href="#">CAD - Dolar Kanada</a>
 		   		<a class="dropdown-item" href="#">CHF - Swiss Franc</a>
 		   		<a class="dropdown-item" href="#">CNY - Yuan China</a>
 		   		<a class="dropdown-item" href="#">DKK - Danish Krone</a>
 		   		<a class="dropdown-item" href="#">EUR - Euro</a>
 		   		<a class="dropdown-item" href="#">GBP - British Pound</a>
 		   		<a class="dropdown-item" href="#">HKD - Dolar Hongkong</a>
 		   		<a class="dropdown-item" href="#">English</a>
 		   		<a class="dropdown-item" href="#">IDR - Rupiah Indonesia</a>
 		   		<a class="dropdown-item" href="#">INR - Rupee India</a>
 		   		<a class="dropdown-item" href="#">JPY - Yen Jepang</a>
 		   		<a class="dropdown-item" href="#">KRW - Won Korea</a>
 		   		<a class="dropdown-item" href="#">KWD - Kuwaiti Dinar</a>
 		   		<a class="dropdown-item" href="#">LBP - Lebanese Pound</a>
 		   		<a class="dropdown-item" href="#">MOP - Macau Pataca</a>
 		   		<a class="dropdown-item" href="#">MYR - Ringgit Malaysia</a>
 		   		<a class="dropdown-item" href="#">NOK - Norwegian Krone</a>
 		   		<a class="dropdown-item" href="#">NPR - Nepal Rupee</a>
 		   		<a class="dropdown-item" href="#">NZD - Dolar Selandia Baru</a>
 		   		<a class="dropdown-item" href="#">PGK - Papua New Guinean Kina</a>
 		   		<a class="dropdown-item" href="#">PHP - Peso Filipina</a>
 		   		<a class="dropdown-item" href="#">PLN - Polish Zloty</a>
 		   		<a class="dropdown-item" href="#">RUB - Rubel Rusia</a>
 		   		<a class="dropdown-item" href="#">SAR - Saudi Riyal</a>
 		   		<a class="dropdown-item" href="#">SEK - Swedish Krona</a>
 		   		<a class="dropdown-item" href="#">SGD - Dolar Singapura</a>
 		   		<a class="dropdown-item" href="#">THB - Baht Thailand</a>
 		   		<a class="dropdown-item" href="#">TWD - Dolar Taiwan</a>
 		   		<a class="dropdown-item" href="#">USD - Dolar Amerika</a>
 		   		<a class="dropdown-item" href="#">VND - Dong Vie</a>
 		 		</div>
					</td>
					<td> |</td>
					<td>
					 <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    				    <img src="<?= base_url('assets/img/2.png'); ?>">
    				</button>
  				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
   	 			<a class="dropdown-item" href="#">Indonesian</a>
 		   		<a class="dropdown-item" href="#">English</a>
 		   		</div>
 		   		</td>
				</tr>
			</table>
 			
		</div	>
	</div>
	
	<nav  class="navbar navbar-expand-lg ">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Pesawat <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link text-secondary" href="#">| </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#">Hotel </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-secondary" href="#">| </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Kereta Api</a>
      </li>

      <li class="nav-item">
        <a class="nav-link text-secondary" href="#">| </a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Sewa Mobil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-secondary" href="#">| </a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Entertainment</a>
      </li>
    </ul>
  </div>
  <div align="right"  style="margin-right: 17%">
  	<table cellpadding="15">
  		
  		<tr>
  			<td id="td1">Promo</td>
  			<td id="td1">|</td>
  			<td id="td1">Cek Pesanan</td>
  			<td id="td1">|</td>
  			<td id="td2">Log In</td>
        <td id="td2"><a href="<?= base_url('Login/logout'); ?>">Logout</a></td>
  		</tr>
  	</table>

  </div>
</nav>