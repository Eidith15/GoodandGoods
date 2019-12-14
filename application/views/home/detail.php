<!-- <h2><?= $barang['nama_barang'];?></h2> -->
<form method="post" action="<?php echo base_url();?>shopping/tambah" method="post" accept-charset="utf-8">
	<!-- <div class="container">
	<div class="row">
		<div class="col-lg-6">
			<img class="rounded float-left" src="<?=base_url() . 'assets/img/'.$barang['image_barang']; ?>"/>
		</div>
	</div>
</div>
<div class="container">
		<div class="row detail-desc">
		<div class="col-lg-6">
			<h5>Harga: Rp. <?php echo number_format($barang['harga_barang'],0,",",".");?></h5>
				 <p class="card-text">
				<strong><?= $barang['deskripsi_barang'] ?></strong><br>
				 </p>
				  <input type="hidden" name="id" value="<?= $barang['id_barang']; ?>" />
				  <input type="hidden" name="nama" value="<?= $barang['nama_barang']; ?>" />
				  <input type="hidden" name="harga" value="<?= $barang['harga_barang']; ?>" />
				  <input type="hidden" name="gambar" value="<?= $barang['image_barang']; ?>" />
				  <input type="hidden" name="qty" value="1" />
				 <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-shopping-cart"></i> Beli barang Ini</button>
		</div>
	</div>
</div> -->


<div class="card mb-3" style="max-width: 540px; font-size: 13px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?=base_url() . 'assets/img/'.$barang['image_barang']; ?>" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title "  style=" font-size: 20px;"><?= $barang['nama_barang'];?></h5>
        <p class="card-text"><?= $barang['deskripsi_barang'] ?></p>
        <h5>Harga: Rp. <?php echo number_format($barang['harga_barang'],0,",",".");?></h5>
        <input type="hidden" name="id" value="<?= $barang['id_barang']; ?>" />
				  <input type="hidden" name="nama" value="<?= $barang['nama_barang']; ?>" />
				  <input type="hidden" name="harga" value="<?= $barang['harga_barang']; ?>" />
				  <input type="hidden" name="gambar" value="<?= $barang['image_barang']; ?>" />
				  <input type="hidden" name="qty" value="1" />
				 <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-shopping-cart"></i> Beli barang Ini</button>
      </div>
    </div>
  </div>
</div>

<!-- <div class="card mb-3">
  <img src="<?=base_url() . 'assets/img/'.$barang['image_barang']; ?>" class="card-img" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= $barang['nama_barang'];?></h5>
    <p class="card-text"><?= $barang['deskripsi_barang'] ?></p>
   <h5>Harga: Rp. <?php echo number_format($barang['harga_barang'],0,",",".");?></h5>
   <input type="hidden" name="id" value="<?= $barang['id_barang']; ?>" />
				  <input type="hidden" name="nama" value="<?= $barang['nama_barang']; ?>" />
				  <input type="hidden" name="harga" value="<?= $barang['harga_barang']; ?>" />
				  <input type="hidden" name="gambar" value="<?= $barang['image_barang']; ?>" />
				  <input type="hidden" name="qty" value="1" />
				 <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-shopping-cart"></i>
  </div>
</div> -->
  </form>


