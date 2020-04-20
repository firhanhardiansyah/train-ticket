<?php
echo '<div class="card">
<div class="card-header bg-success text-white">
  <h5>Detail</h5>
</div>
<div class="card-body">
    <div class="row">
      <div class="col-2">
        <h6>Dari</h6>
      </div>
      <div class="col">
        <p>'.ucfirst($dari_mana).'</p>
      </div>
    </div>
    <div class="row">
      <div class="col-2">
        <h6>Kemana</h6>
      </div>
      <div class="col">
        <p>'.ucfirst($ke_mana).'</p>
      </div>
    </div>
    <div class="row">
      <div class="col-2">
        <h6>Harga Tiket</h6>
      </div>
      <div class="col">
        <p>'.$harga_tiket.'</p>
      </div>
    </div>
    <div class="row">
      <div class="col-2">
        <h6>Jumlah Tiket</h6>
      </div>
      <div class="col">
        <p>'.$jml_tiket.'</p>
      </div>
    </div>
    <div class="row">
      <div class="col-2">
        <h6>Total Harga</h6>
      </div>
      <div class="col">
        <p>'.$total_harga.'</p>
      </div>
    </div>
</div>
</div>';