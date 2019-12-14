
 


<!-- <div class="container">
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
</div> -->


<div class="container">
  <div class="row">
<?php foreach($barang as $brg) : ?>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="kotak">
              <form method="post" action="<?php echo base_url();?>shopping/tambah" method="post" accept-charset="utf-8">
                <a href="#"><img class="img-thumbnail" src="<?= base_url();  ?>assets/img/<?= $brg['image_barang'] ?>"/></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#"><?php echo $brg['nama_barang'];?></a>
                  </h4>
                  <h5>Rp. <?php echo number_format($brg['harga_barang'],0,",",".");?></h5>
                  <!-- <p class="card-text"><?php echo $brg['deskripsi_barang'];?></p> -->
                </div>
                <div class="card-footer">
                  <a href="<?php echo base_url();?>home/detail/<?= $brg['id_barang']; ?>" class="btn btn-sm btn-default"><i class="glyphicon glyphicon-search"></i> Detail</a> 
 
 
                  <input type="hidden" name="id" value="<?php echo $brg['id_barang']; ?>" />
                  <input type="hidden" name="nama" value="<?php echo $brg['nama_barang']; ?>" />
                  <input type="hidden" name="harga" value="<?php echo $brg['harga_barang']; ?>" />
                  <input type="hidden" name="gambar" value="<?php echo $brg['image_barang']; ?>" />
                  <input type="hidden" name="qty" value="1" />
                  <button type="submit" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-shopping-cart"></i> Beli</button>
                </div>
                </form>
              </div>
            </div>
<?php endforeach; ?>
  </div>
</div>
