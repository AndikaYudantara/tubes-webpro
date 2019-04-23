 <div class="container-fluid">
    <div class="navbar navbar-expand-md justify-content-between" style="margin: 0px-15px; padding: 0px 15px; font-size: 13px;">
      <div class="container" style="margin: 14px 0px 0px; padding: 0px 15px;">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="navbar-brand" href="<?= base_url(); ?>"><img src="<?= base_url(); ?>/assets/img/logo.svg"></a>
        </li>
      </ul>
      <ul class="navbar-nav" style="margin: 0px 13px; padding: 0px 13px;">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"  style="color: #888888;">language</a>
          <div class="dropdown-menu">
            <a class="dropdown-item disabled" href="#" style="font-size: 14px;">English (United States)</a>
            <a class="dropdown-item disabled" href="#" style="font-size: 14px;">Bahasa (Indonesia)</a>
          </div>
        </li>
        <li class="navbar-nav">
          <a class="nav-link" role="button" href="#" style="color: #888888;">Cek Order</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"  style="color: #888888;"><?= $name = $this->session->userdata('username'); ?></a>
          <div class="dropdown-menu">
            <a class="dropdown-item " href="<?= base_url().'Profile'; ?>" style="font-size: 14px;">Profil Saya</a>
            <a class="dropdown-item disabled" href="#" style="font-size: 14px;">Kelola Kereta</a>
            <a class="dropdown-item disabled" href="#" style="font-size: 14px;">Kelola Pesawat</a>
            <a class="dropdown-item disabled" href="#" style="font-size: 14px;">Kelola Hotel</a>
            <a class="dropdown-item disabled" href="#" style="font-size: 14px;">Kelola User</a>
            <a class="dropdown-item disabled" href="#" style="font-size: 14px;">Pengaturan Berlangganan</a>
            <a class="dropdown-item disabled" href="#" style="font-size: 14px;">Ubah Kata Sandi</a>
            <a class="dropdown-item" href="<?= base_url('Login/logout'); ?>" style="font-size: 14px;">Keluar</a>
          </div>
        </li>
      </ul>
      </div>
    </div>
    <div class="navbar navbar-expand-md justify-content-between" style="padding: 12px 15px 0px; font-size: 13px;">
      <div class="container" style="margin: 14px 0px 0px; padding: 0px 15px;">
      <ul class="navbar-nav">
        <li class="navbar-nav">
          <a class="nav-link" role="button" href="#" style="color: black;">Pesawat</a>
        </li>
        <li class="navbar-nav">
          <a class="nav-link disabled" role="button" href="#" style="color: black;">Hotel</a>
        </li>
        <li class="navbar-nav">
          <a class="nav-link" role="button" href="<?= base_url('Kereta_api') ?>" style="color: black;">Kereta Api</a>
        </li>
        <li class="navbar-nav">
          <a class="nav-link disabled" role="button" href="#" style="color: black;">Sewa Mobil</a>
        </li>
        <li class="navbar-nav">
          <a class="nav-link disabled" role="button" href="#" style="color: black;">Entertainment</a>
        </li>
      </ul>
      <ul class="navbar-nav" style="margin: 0px 13px; padding: 0px 13px;">
        <li class="navbar-nav">
          <a class="nav-link disabled" role="button" href="#" style="color: #666666;">Promo</a>
        </li>
        <li class="navbar-nav">
          <a class="nav-link disabled" role="button" href="#" style="color: #666666;">TIX Point</a>
        </li>
      </ul>
      </div>
    </div>
  </div>