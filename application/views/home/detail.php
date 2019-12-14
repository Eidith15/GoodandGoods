<h2><?= $barang['nama_barang'];?></h2>
<form method="post" action="<?php echo base_url();?>shopping/tambah" method="post" accept-charset="utf-8">
<div class="kotak2">
<img class="img-thumbnail"" src="<?=base_url() . 'assets/img/'.$barang['image_barang']; ?>"/>
 <h5>Harga: Rp. <?php echo number_format($barang['harga_barang'],0,",",".");?></h5>
 <p class="card-text">
<strong> <u><?= $barang['deskripsi_barang'] ?></u></strong><br>
 </p>
  <input type="hidden" name="id" value="<?= $barang['id_barang']; ?>" />
  <input type="hidden" name="nama" value="<?= $barang['nama_barang']; ?>" />
  <input type="hidden" name="harga" value="<?= $barang['harga_barang']; ?>" />
  <input type="hidden" name="gambar" value="<?= $barang['image_barang']; ?>" />
  <input type="hidden" name="qty" value="1" />
 <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-shopping-cart"></i> Beli barang Ini</button>
 </div>
 </form>


 <h1>Hallo</h1>