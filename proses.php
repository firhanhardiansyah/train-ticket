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
          } else {
            echo "isi dulu";
          }
      }  
    }
  ?>