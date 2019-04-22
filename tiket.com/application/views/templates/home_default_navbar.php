 <style type="text/css">
  #nav_img img{
    width: 75%;
    border-bottom: 2px solid #fff;
  }
  #nav_img img:hover{
    width: 75%;
    border-bottom: 2px solid #ff7200;
  }
   #promo{
    border-bottom: 2px solid #fff;
    margin-bottom: 10px
  }
  #promo:hover{
    border-bottom: 2px solid #ff7200;
    margin-bottom: 10px
  }

</style>

 <div class="container-fluid">
    <div class="navbar navbar-expand-md justify-content-between" style="margin-left: 175px;margin: 0px-15px; padding: 0px 15px; font-size: 13px;">
      <div class="container" style="margin: 14px 0px 0px; padding: 0px 15px;">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="navbar-brand" href="<?= base_url(); ?>"><img src="<?= base_url(); ?>/assets/img/logo.svg"></a>
        </li>
      </ul>
      <ul class="navbar-nav" style="margin: 0px 13px; padding: 0px 13px;">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"  style="color: #aaa;"><img src="<?= base_url(); ?>/assets/img/logo_id.jpg" style="width: 30px"></a>
          <div class="dropdown-menu">
            <a class="dropdown-item disabled" href="#" style="font-size: 14px;">English (United States)</a>
            <a class="dropdown-item disabled" href="#" style="font-size: 14px;">Bahasa (Indonesia)</a>
          </div>
        </li>
        <li class="navbar-nav">
          <a class="nav-link" role="button" href="#" style="color: #aaa; font-size: 13px; margin-top: 4px;">Cek Order</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"  style="color: #aaa; font-size: 13px; margin-top: 4px"><?= $name = $this->session->userdata('username'); ?></a>
          <div class="dropdown-menu">
            <a class="dropdown-item " href="<?= base_url().'Profile'; ?>" style="font-size: 14px;">Profil Saya</a>
            <a class="dropdown-item disabled" href="#" style="font-size: 14px;">My Order</a>
            <a class="dropdown-item disabled" href="#" style="font-size: 14px;">Kartu Saya</a>
            <a class="dropdown-item disabled" href="#" style="font-size: 14px;">Tix Point</a>
            <a class="dropdown-item disabled" href="#" style="font-size: 14px;">Smart Traveler</a>
            <a class="dropdown-item disabled" href="#" style="font-size: 14px;">Pengaturan Berlangganan</a>
            <a class="dropdown-item disabled" href="#" style="font-size: 14px;">Ubah Kata Sandi</a>
            <a class="dropdown-item" href="<?= base_url('Login/logout'); ?>" style="font-size: 14px;">Keluar</a>
          </div>
        </li>
      </ul>
      </div>
    </div>
    <div class="navbar navbar-expand-md justify-content-between" style="margin-left: 175px;padding: 12px 15px 0px; font-size: 13px;">
      <div class="container" style="margin: 14px 0px 0px; padding: 0px 15px;">
      <ul class="navbar-nav" id="nav_img">
        <li class="navbar-nav">
          <a class="nav-link" role="button" href="#" style="color: #0064D2;"><img src="<?= base_url(); ?>/assets/img/logo_pesawat3.jpg"></a>
        </li>
        <li class="navbar-nav">
          <a class="nav-link" role="button" href="#" style="color: #0064D2;"><img src="<?= base_url(); ?>/assets/img/logo_hotel3.jpg"></a>
        </li>
        <li class="navbar-nav" style="padding-bottom: 3px">
          <a class="nav-link" role="button" href="<?= base_url('Kereta_api') ?>" style="color: #0064D2;"><img src="<?= base_url(); ?>/assets/img/logo_kereta3.jpg"></a>
        </li>
        <li class="navbar-nav">
          <a class="nav-link" role="button" href="#" style="color: #0064D2;"><img src="<?= base_url(); ?>/assets/img/logo_mobil3.jpg"></a>
        </li>
        <li class="navbar-nav">
          <a class="nav-link" role="button" href="#" style="color: #0064D2;"><img src="<?= base_url(); ?>/assets/img/logo_entertaiment3.jpg"></a>
        </li>
      </ul>
      <ul class="navbar-nav" style="margin: 0px 13px; padding: 0px 13px;">
        <li class="navbar-nav">
          <a class="nav-link" id="promo" role="button" href="#" style="color: #666666;"><img src="<?= base_url(); ?>/assets/img/logo_promo.jpg" style="width: 70px;"></a>
        </li> 
        <li class="navbar-nav">
          <a class="nav-link" id="promo" role="button" href="#" style="color: #666666;"><img src="<?= base_url(); ?>/assets/img/logo_tix.jpg" style="width: 80px; margin-top: 4px"></a>
        </li>
      </ul>
      </div>
    </div>
  </div>