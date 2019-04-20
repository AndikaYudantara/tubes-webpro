  <div class="container-fluid">
    <div class="row py-2" style="background: #0064D2; padding-left: 100px; padding-right: 100px;">
      <div class="col-md-6" style="color: white;">
      <div class="wrapper">
        <h2 style="font-size: 20px;">(<?= $this->session->userdata('stasiun_berangkat'); ?>)->(<?= $this->session->userdata('stasiun_tiba'); ?>)</h2>
        <p style="font-size: 16px;"> <?= $this->session->userdata('tanggal_pergi'); ?> - <?= $this->session->userdata('tanggal_pulang'); ?> | <?= $this->session->userdata('jumlah_penumpang'); ?> Dewasa</p>
      </div>        
      </div>
      <div class="col-md-6 text-right" style="color: white;">
        <p style="font-size: 20px; color: white;">Ubah Pencarian</p>
      </div>
    </div>
    <ul class="list-inline pt-3" style="padding-left: 100px; padding-right: 100px;">
      <li class="list-inline-item">Filter:</li>
      <li class="list-inline-item"><a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: #222222;">Kereta Api</a></li>
      <li class="list-inline-item"><a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: #222222;">Waktu</a></li>
      <li class="list-inline-item"><a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: #222222;">Harga</a></li>
      <li class="list-inline-item"><a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: #222222;">Kelas</a></li>
      <li class="list-inline-item"><a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: #222222;">Transit</a></li>
    </ul>
    <div class="row px-3 py-0" style="background: #0064D2; margin-left: 100px; margin-right: 100px; color: white;">
      <div class="col-md-6" style="font-size: 14px;">(<?= $this->session->userdata('stasiun_berangkat'); ?>)->(<?= $this->session->userdata('stasiun_tiba'); ?>)</div>
      <div class="col-md-6 text-right" style="font-size: 12px;"><?= $this->session->userdata('tanggal_pergi'); ?></div>
    </div>
  </div>
  <div class="row py-0 px-4" style="margin-left: 100px; margin-right: 100px;">
    <table class="table">
      <thead style="font-size: 13px;">
        <th>Kereta Api</th>
        <th>Pergi</th>
        <th>Tiba</th>
        <th>Durasi</th>
        <th>Harga</th>
        <th></th>
      </thead>
     
      <tbody>
        <?php foreach($kereta as $krt){ ?><tr>
          <td><span style="font-size: 16px;"><?= $krt['nama']; ?></span><br><span style="color: #888888"><?= $krt['kelas']; ?></span></td>
          <td><span style="font-size: 18px;"><?= $krt['waktu_berangkat']; ?></span><br><span style="color: #888888">(<?= $krt['stasiun_berangkat']; ?>)</span></td>
          <td><span style="font-size: 18px;"><?= $krt['waktu_tiba']; ?></span><br><span style="color: #888888">(<?= $krt['stasiun_tiba']; ?>)</span></td>
          <td><span style="font-size: 18px;"><?= $krt['durasi']; ?></span></td>
          <td><span style="font-size: 18px; color: #FF7200">IDR <?= $krt['harga']; ?></span></td>
          <td><a href="<?= base_url('Kereta_api/order/'.$krt['id']); ?>" class="btn btn-primary"name="pesan" style="background-color: #FF7200;">Pesan Sekarang</a></td>

          </tr><?php } ?>
        </tbody>
      </table>    
  </div>