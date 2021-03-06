<div class="container">

  <div class="row mt-3">
    <div class="col-md-6">
      <a href="<?= base_url(); ?>AdminHome/tambah" class="btn btn-success">Tambah Data Barang</a>
    </div>
  </div>

  <div class="row ">
    <?php foreach($barang as $brg) : ?>
    <div class="col-md-3 mb-2 mt-3">
      <a class="text-decoration-none text-body" href="<?= base_url(); ?>/home/detail/<?=$brg['id_barang'] ?>">
        <div class="card hover-card h-100" >
          <div>
          <img src="<?= base_url();  ?>assets/img/<?= $brg['image_barang'] ?>" class="card-img-top" height="300">
          </div>
          <div class="card-header bg-transparent h-100">
            <h5 class="card-title text-center mt-1"><?= $brg['nama_barang'] ?></h5>
          </div>
          <div class="card-body">
            <p class="card-text line-clamp"><?= $brg['deskripsi_barang'] ?></p> 
                
          </div>
          <div class="card-footer bg-transparent">
            <h6 class="card-text">Harga : Rp. <?= number_format($brg['harga_barang'],0,",",".");?>,-</h6>
          </div>
          <form method="post" action="<?php echo base_url();?>shopping/tambah" method="post" accept-charset="utf-8">
            <input type="hidden" name="id" value="<?= $brg['id_barang']; ?>" />
            <input type="hidden" name="nama" value="<?= $brg['nama_barang']; ?>" />
            <input type="hidden" name="harga" value="<?= $brg['harga_barang']; ?>" />
            <input type="hidden" name="gambar" value="<?= $brg['image_barang']; ?>" />
            <input type="hidden" name="qty" value="1" />
            <button type="submit" class="btn btn-sm btn-danger w-100"> Hapus Data Barang</button>
            <button type="submit" class="btn btn-sm btn-success w-100">Ubah Data Barang</button>
            </form>
        </div>
      </a>
    </div>
    <?php endforeach; ?>  
  </div>
</div>