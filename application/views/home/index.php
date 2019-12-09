<div class="container">
  <div class="row mt-5">
    <?php foreach($barang as $brg) : ?>
    <div class="col-md-3 mb-3">
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
            <h6 class="card-text">Harga : Rp.<?= $brg['harga_barang'] ?>,-</h6>
          </div>
        </div>
      </a>
    </div>
    <?php endforeach; ?>
  </div>
</div>
