

<!-- end slider -->

 <div class="container">

  <div class="bd-example sliderr">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?= base_url() ?>/assets/img/2.JPG" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?= base_url() ?>/assets/img/3.JPG" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?= base_url() ?>/assets/img/4.JPG" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
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
            <button type="submit" class="btn btn-sm btn-success w-100"> Tambah ke Keranjang</button>
            </form>
        </div>
      </a>
    </div>
    <?php endforeach; ?>
  </div>
</div> 


