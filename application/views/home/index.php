 <!-- Start Slider Area -->
        <div class="slider__container slider--one">
            <div class="slider__activation__wrap owl-carousel owl-theme">
                <!-- Start Single Slide -->
                <div class="slide slider__full--screen" style="background: rgba(0, 0, 0, 0) url(<?= base_url(); ?>assets/images/slider/bg/book4.jpeg) no-repeat scroll center center / cover ;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-4 col-sm-12 col-xs-12">
                                <div class="slider__inner">
                                    <h1>Welcome to <br><span class="text--theme">Good & Goods</span><br>Book Store</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
                <!-- Start Single Slide -->
                <div class="slide slider__full--screen" style="background: rgba(0, 0, 0, 0) url(<?= base_url(); ?>assets/images/slider/bg/book3.jpg) no-repeat scroll center center / cover ;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                                <div class="slider__inner">
                                    <h1>Take a seat and enjoy our <span class="text--theme">Collection</span></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
            </div>
        </div>
<!-- End Slider Area -->

<!-- Start Our Product Area -->
        <section class="htc__product__area ptb--130 bg__white">
            <div class="container">
                <div class="htc__product__container">
                    <!-- Start Product MEnu -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="product__menu">
                                <button data-filter="*"  class="is-checked">All</button>
                                <button data-filter=".cat--1">Novel</button>
                                <button data-filter=".cat--2">Comic</button>
                                <button data-filter=".cat--3">Education</button>
                                <button data-filter=".cat--4">Hobby</button>
                            </div>
                        </div>
                    </div>
                    <!-- End Product MEnu -->
                    <div class="row product__list">
                        <?php 
                        $i = 0;
                        $i++;
                        foreach($barang as $brg) :
                        ?>
                        <!-- Start Single Product -->
                         
                                                <div class="col-md-3 single__pro col-lg-3 col-md-4 col-sm-12 cat--<?= $brg['kategori'] ?>">
 


                            <form method="post" action="<?php echo base_url();?>shopping/tambah" method="post" accept-charset="utf-8">
                            <div class="product foo">
                            <div class="product__inner">
                                <div class="pro__thumb">
                                    <a href="#">
                                            <img src="<?= base_url(); ?>assets/img/<?= $brg['image_barang'] ?>" alt="product images" height="350">
                                        </a>
                                </div>
                                 <div class="product__hover__info">
                                        <ul class="product__action">
                                            <li><a href=""><button type="submit" class="btn ti-shopping-cart"></a></button></li>
                                        </ul>
                                    </div>
                            </div>
                            <div class="product__details">
                              <h2 class="line-clamp">
                                <a href="<?= base_url(); ?>home/detail/<?= $brg['id_barang'] ?>"><?php echo $brg['nama_barang'];?></a>
                              </h2>
                                <ul class="product__price">
                                        <li class="new__price">Rp. <?= number_format($brg['harga_barang'],0,",",".");?></li>
                                </ul>
                              
                              <input type="hidden" name="id" value="<?php echo $brg['id_barang']; ?>" />
                              <input type="hidden" name="nama" value="<?php echo $brg['nama_barang']; ?>" />
                              <input type="hidden" name="harga" value="<?php echo $brg['harga_barang']; ?>" />
                              <input type="hidden" name="gambar" value="<?php echo $brg['image_barang']; ?>" />
                              <input type="hidden" name="qty" value="1" />
                              
                            </div>
                    
             
                              
                            
                        </div>
                            </form>
                        </div>
                        
                        <!-- End Single Product -->
                        <?php 
                        if ($i++ == 8) {
                            break;
                        }
                        endforeach; 

                        ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Our Product Area -->