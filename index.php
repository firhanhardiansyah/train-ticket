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

<body data-spy="scroll" data-target=".navbar" data-offset="50">

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" style="font-family: 'Varela Round', sans-serif;" href="#">
        <i class="fas fa-ticket-alt fa-lg">
        </i>
        TiketKeretaApiOnline.com
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </span>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="navbar-nav mr-auto">
            <a class="nav-item nav-link active" href="#">Home</a>
            <a class="nav-item nav-link" href="#">About</a>
          </div>
        </div>
    </div>
  </nav>

  <div class="container pt-3">
    <h2>Cari & Pesan Tiket Kereta Api Online</h2>
    <h4>Info Harga</h4>
    <h4>Dari <span class="typedDari"></span></h4>

    <div class="card text-white">
      <!--  -->
      <div class="card-header bg-primary">
        <h5>PESAN TIKET KERETA API</h5>
      </div>
      <!--  -->
      <div class="card-body text-dark">
        <form action="" method="POST" id="form-tiket" class="needs-validation" novalidate>
          <div class="form-row">
            <div class="form-group col-4">
              <label>Dari</label>
              <select class="form-control" name="dari_mana">
                <option value="jakarta">Jakarta</option>
                <option value="bandung">Bandung</option>
                <option value="yogyakarta">Yogyakarta</option>
                <option value="surabaya">Surabaya</option>
              </select>
            </div>
            <div class="form-group col-4">
              <label>Ke</label>
              <select class="form-control" name="ke_mana">
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
          <button type="submit" class="btn btn-warning float-right col-2" name="submit"><i
              class="fas fa-search"></i>Cari</button>
        </form>
      </div>
    </div>

  </div>

  <?php
    if (isset($_POST['submit'])) {
      $dari_mana = $_POST['dari_mana'];
      $ke_mana = $_POST['ke_mana'];
      $jml_tiket = $_POST['jml_tiket'];
      $harga_tiket = 0;

      if ($jml_tiket != 0) {
        if (($dari_mana == "jakarta") && ($ke_mana == "bandung")) {
          $harga_tiket = 20000;
          $total_harga = $harga_tiket * $jml_tiket;
            echo "Dari         : ".$dari_mana."<br>";
            echo "Ke           : ".$ke_mana."<br>";
            echo "Harga Tiket  : Rp.".$harga_tiket."<br>";
            echo "Jumlah Tiket : ".$jml_tiket."<br>";
            echo "Total Harga  : Rp.".$total_harga."<br>";
          } else if (($dari_mana == "jakarta") && ($ke_mana == "yogyakarta")) {
            $harga_tiket = 50000;
            $total_harga = $harga_tiket * $jml_tiket;
              echo "Dari         : ".$dari_mana."<br>";
              echo "Ke           : ".$ke_mana."<br>";
              echo "Harga Tiket  : Rp.".$harga_tiket."<br>";
              echo "Jumlah Tiket : ".$jml_tiket."<br>";
              echo "Total Harga  : Rp.".$total_harga."<br>";
          } else if (($dari_mana == "jakarta") && ($ke_mana == "surabaya")) {
            $harga_tiket = 75000;
            $total_harga = $harga_tiket * $jml_tiket;
              echo "Dari         : ".$dari_mana."<br>";
              echo "Ke           : ".$ke_mana."<br>";
              echo "Harga Tiket  : Rp.".$harga_tiket."<br>";
              echo "Jumlah Tiket : ".$jml_tiket."<br>";
              echo "Total Harga  : Rp.".$total_harga."<br>";
          } else if (($dari_mana == "jakarta") && ($ke_mana == "jakarta")) {
            echo "Tujuan Tidak Boleh Sama";
          }
      }  
    }
  ?>


  <div id="footer">
    &copy Firhan Hardiansyah
  </div>

  <script src="asset/js/jquery_3_4_1.min.js"></script>
  <script src="asset/bootstrap/js/bootstrap.min.js"></script>
  <script src="asset/js/typed.min.js"></script>
  <script src="asset/js/script.js"></script>

</body>

</html>