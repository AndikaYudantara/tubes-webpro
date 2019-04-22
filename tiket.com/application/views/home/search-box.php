  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/home.css">
  <style type="text/css">
    #swap{
      transition: transform .5s;
    }
    #swap:hover{
      transform: rotate(180deg);
    }
  </style>

  <div class="container-fluid text-center" style="z-index: 1; position: relative;">
    <div class="search-box" >
      <!-- HEADER -->
      <div class="header">
        <div class="row" style="text-align: left; margin: 50px 200px;margin-top: -70px; background-color: #eefefe; border-radius: 15px 15px 0px 0px;box-shadow: 0 0 8px 0px rgba(0, 0, 0, 0.2);">
          <div class="col-md-4" style="padding: 10px">
            <h4 style="margin-top: 30px;margin-left: 30px">Hey kamu</h4>
            <h1 style="margin-bottom: 30px;margin-left: 30px">Mau ke mana?</h1>
          </div>
          <div class="col-md-8" style="padding-left:120px">
            <img src="<?= base_url();?>/assets/img/logo_pesawat.jpg" style="cursor: pointer;" onclick="view_pesawat()">
            <img src="<?= base_url();?>/assets/img/logo_hotel.jpg" style="cursor: pointer;" onclick="view_hotel()">
            <a href="<?= base_url('Kereta_api');?>"> <img src="<?= base_url(); ?>/assets/img/logo_kereta.jpg"></a>
            <a href="#"> <img src="<?= base_url();?>/assets/img/logo_mobil.jpg"></a>
            <a href="#"> <img src="<?= base_url();?>/assets/img/logo_entertaiment.jpg"></a>
          </div>
        </div>
      </div>
      <!-- BODY -->
      <div class="body" style="text-align: left; margin: 50px 200px;margin-top: -50px; border-radius: 0px 0px 15px 15px;box-shadow: 0 5px 8px 3px rgba(0, 0, 0, 0.1)">

        <!-- Plane -->
        <div class="plane" id="plane" style="display: block;">
          <div class="row" style="padding-bottom: 30px">
            <div class="col-md-8" style="">
              <img src="<?= base_url(); ?>/assets/img/logo_pesawat2.jpg" style="padding: 15px; float: left; border-radius: 50%">
              <h4 style="padding-top: 20px">Cari harga tiket pesawat murah & promo di sini</h4>
            </div>
            <div class="col-md-4" style=" padding-left: 150px; padding-top: 25px;">
              <a href="#" style="">Pencarian Terakhir > </a>
            </div>
          </div>
          <form action="Home.php" method="post">
            <div class="form-row">
              <div class="form-group col-md-4" style="padding-left: 50px">
                <label for="dari">Dari</label>
                <input type="text" class="form-control" id="dari" placeholder="Jakarta (JKTC)" name="dari">
              </div>
              <div class="col-md-4 text-center">
                <img id="swap" src="<?= base_url(); ?>/assets/img/swap.jpg" style="border-radius: 50%; padding: 28px;">
              </div>
              <div class="form-group col-md-4" style="padding-right: 50px">
                <label for="ke">Ke</label>
                <input type="text" class="form-control" id="ke" placeholder="Ngurah Rai (DPS)" name="ke">
              </div>
            </div>
            <div class="form-row" style="margin-top: 15px">
              <div class="form-group col" style="padding-left: 50px">
                <label for="pergi">Pergi</label>
                <input type="date" id="pergi" value="2019-04-23" class="form-control" name="tanggal_pergi">
              </div>
              <div class="form-group col" style="padding-left: 15px">
                <label for="pulang">Pulang</label>
                <input type="date" id="pulang" value="2019-04-23" class="form-control" name="tanggal_pulang">
              </div>
              <div class="form-group col" style="padding-left: 100px">
                <label for="penumpang">Penumpang</label>
                <input type="text" id="penumpang" class="form-control" name="penumpang">
              </div>
              <div class="form-group col" style="padding-left: 15px; padding-right: 50px">
                <label for="kelas_kabin">Kelas Kabin</label>
                <input type="text" id="kelas_kabin" class="form-control" name="kelas_kabin">
              </div>
            </div>
            <button class="btn" type="submit" style="padding: 15px; margin: 30px; margin-left: 840px; color: #fff; background-color: #ff7200">Cari Penerbangan</button>
          </form>
        </div>

        <!-- Hotel -->
        <div class="hotel" id="hotel" style="display: none;">
          <div class="row" style="padding-bottom: 30px">
            <div class="col-md-8" style="">
              <img src="<?= base_url(); ?>/assets/img/logo_hotel2.jpg" style="padding: 15px; float: left; border-radius: 50%">
              <h4 style="padding-top: 20px">Booking Hotel Murah Online dengan Harga Promo</h4>
            </div>
            <div class="col-md-4" style=" padding-left: 150px; padding-top: 25px;">
              <a href="#" style="">Pencarian Terakhir > </a>
            </div>
          </div>
          <form>
            <div class="form-row">
              <div class="form-group col-md-6" style="padding-left: 50px; padding-right: 53px">
                <label for="tujuan">Tujuan</label>
                <input type="text" class="form-control" id="tujuan" placeholder="Mau nginep ke mana?">
              </div>
              <div class="form-group col-md-6" style="padding-right: 50px; padding-left: 53px">
                <label for="tamu">Tamu dan Kamar</label>
                <input type="text" class="form-control" id="tamu">
              </div>
            </div>
            <div class="form-row" style="margin-top: 15px">
              <div class="form-group col" style="padding-left: 50px">
                <label for="check-in">Check-in</label>
                <input type="date" id="check-in" value="2019-04-23" class="form-control" name="check-in">
              </div>
              <div class="form-group col" style="padding-left: 15px">
                <label for="check-out">Check-out</label>
                <input type="date" id="check-out" value="2019-04-23" class="form-control" name="check-out">
              </div>
              <div class="form-group col" style="padding-left: 100px">
                <label for="harga">Rentan Harga</label>
                <input type="text" id="harga" class="form-control" name="harga">
              </div>
              <div class="form-group col" style="padding-left: 15px; padding-right: 50px">
                <label for="bintang">Bintang</label>
                <input type="text" id="bintang" class="form-control" name="bintang">
              </div>
            </div>
            <button class="btn" type="submit" style="padding: 15px 50px; margin: 30px; margin-left: 840px; color: #fff; background-color: #ff7200">Cari Hotel</button>
          </form>  
        </div>
      </div>
    </div>
  </div> 

  <script type="text/javascript">
    var plane = document.getElementById("plane");
    var hotel = document.getElementById("hotel");
    function view_pesawat(){
      plane.style.display = "block";
      hotel.style.display = "none"
    }
    function view_hotel(){
      hotel.style.display = "block";
      plane.style.display = "none"
    }    
  </script>

  
  