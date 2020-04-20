<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pemesanan Tiket Kereta</title>
  <link rel="stylesheet" href="asset/css/style.css">
  <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="asset/fontawesome/css/all.min.css">
  <script src="asset/js/sweetalert.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
</head>

<body>

  <div class="navbar navbar-expand-lg navbar-dark bg-custom">
    <div class="container">
      <a class="navbar-brand" style="font-family: 'Varela Round', sans-serif;" href="#">
        <i class="fas fa-subway fa-lg">
        </i>
        beli-tiket.com
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-2 my-2">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
      </div>
    </div>
  </div>

  <!-- Content -->
  <div class="content">
    <div class="container">
      <h2>Cari & Pesan Tiket Kereta Api Online</h2>
      <h4>Info Harga</h4>
      <h4>Dari <span class="typedDari"></span></h4>
    </div>
  </div>
  <!-- end Content -->

  <!-- Form -->
  <div class="container pt-3">
    <div class="card text-white min-mt">
      <!--  -->
      <div class="card-header" style="background-color: #536DFE;">
        <h5>PESAN TIKET KERETA API</h5>
      </div>
      <!--  -->
      <div class="card-body text-dark">
        <form action="" method="POST" class="needs-validation" novalidate>
          <div class="form-row">
            <div class="form-group col-4">
              <label>Dari</label>
              <select class="form-control" name="dari_mana">
                <option selected>Kota / Stasiun</option>
                <option value="jakarta">Jakarta</option>
                <option value="bandung">Bandung</option>
                <option value="yogyakarta">Yogyakarta</option>
                <option value="surabaya">Surabaya</option>
              </select>
            </div>
            <div class="form-group col-4">
              <label>Ke</label>
              <select class="form-control" name="ke_mana">
                <option selected>Mau Kemana ?</option>
                <option value="bandung">Bandung</option>
                <option value="jakarta">Jakarta</option>
                <option value="yogyakarta">Yogyakarta</option>
                <option value="surabaya">Surabaya</option>
              </select>
            </div>
            <div class="form-group col-4">
              <label>Jumlah Tiket</label>
              <input type="text" name="jml_tiket" class="form-control" id="jml_tiket" placeholder="Minimal 1" required>
              <div class="invalid-feedback">Minimal 1 tiket !</div>
              <!-- <span class="pesan-nama"></span> -->
            </div>
          </div>
          <button type="submit" class="btn-custom float-right col-2" name="submit"><i class="fas fa-search"></i>
            Cari</button>
        </form>
      </div>
    </div>
  </div>
  <!-- end Form -->

  <div class="container pt-3">
    <?php
      include "proses.php";
    ?>
  </div>
  <br><br><br>

  <div class="footer">
    &copy Firhan Hardiansyah
  </div>

  <script src="asset/js/jquery_3_4_1.min.js"></script>
  <script src="asset/bootstrap/js/bootstrap.min.js"></script>
  <script src="asset/js/typed.min.js"></script>
  <script src="asset/js/script.js"></script>

</body>

</html>