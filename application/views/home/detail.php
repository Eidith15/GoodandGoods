 <!-- Start Product Details -->
        <section class="htc__product__details pt--120 pb--100 bg__white">
    <!--         <div class="container">
                <form method="post" action="<?php echo base_url();?>shopping/tambah" method="post" accept-charset="utf-8">
                <div class="row">
                    <div class="col-md-12 col-lg-6 col-sm-12">
                        <div class="product__details__container">
                            <div class="product__big__images">
                                <div class="portfolio-full-image tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="img-tab-1">
                                        <img src="<?= base_url(); ?>/assets/img/<?= $barang['image_barang']; ?>" alt="full-image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-sm-12 smt-30 xmt-30">
                        <div class="htc__product__details__inner">
                            <div class="pro__detl__title">
                                <h2><?= $barang['nama_barang']; ?></h2>
                            </div>
                            <div class="pro__details">
                                <p><?= $barang['deskripsi_barang']; ?></p>
                            </div>
                            <ul class="pro__dtl__prize">
                                <li>Rp. <?= number_format($barang['harga_barang'],0,",",".");?></li>
                            </ul>
                            
                            <div class="product-action-wrap">
                                <div class="prodict-statas"><span>Quantity :</span></div>
                                <div class="product-quantity">
                                    <form id='myform' method='POST' action='#'>
                                        <div class="product-quantity">
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" type="text" name="qtybutton" value="01">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <ul class="pro__dtl__btn mt-5">
                                <li class="buy__now__btn"><a href="<?php echo base_url();?>shopping/tambah">buy now</a></li>
                            </ul>
                            <div class="pro__social__share">
                                <h2>Share :</h2>
                                <ul class="pro__soaial__link">
                                    <li><a href="https://twitter.com/devitemsllc" target="_blank"><i class="zmdi zmdi-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/devitems/" target="_blank"><i class="zmdi zmdi-instagram"></i></a></li>
                                    <li><a href="https://www.facebook.com/devitems/?ref=bookmarks" target="_blank"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="https://plus.google.com/" target="_blank"><i class="zmdi zmdi-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                      <input type="hidden" name="id" value="<?php echo $barang['id_barang']; ?>" />
  <input type="hidden" name="nama" value="<?php echo $barang['nama_barang']; ?>" />
  <input type="hidden" name="harga" value="<?php echo $barang['harga_barang']; ?>" />
  <input type="hidden" name="gambar" value="<?php echo $barang['image_barang']; ?>" />
  <input type="hidden" name="qty" value="1" />
                </div>
                </form>
            </div> -->
    <div class="container">        
 <h2><?php echo $barang['nama_barang'];?></h2>
<form method="post" action="<?php echo base_url();?>shopping/tambah" method="post" accept-charset="utf-8">
<div class="row">
    <div class="col-md-12 col-lg-6 col-sm-12 mt-2">
<img class="img-responsive" src="<?php echo base_url() . 'assets/img/'.$barang['image_barang']; ?>"/>
</div>

<div class="col-md-12 col-lg-6 col-sm-12 mt-2">
 <ul class="pro__dtl__prize">
                                <li>Rp. <?= number_format($barang['harga_barang'],0,",",".");?></li>
</ul>
 <p class="card-text">
    <div class="pro__details">
<strong> <h3><u>Deskripsi</u></h3></strong><br>
 <?php echo $barang['deskripsi_barang'];?></p>
</div>

  <input type="hidden" name="id" value="<?php echo $barang['id_barang']; ?>" />
  <input type="hidden" name="nama" value="<?php echo $barang['nama_barang']; ?>" />
  <input type="hidden" name="harga" value="<?php echo $barang['harga_barang']; ?>" />
  <input type="hidden" name="gambar" value="<?php echo $barang['image_barang']; ?>" />
  <input type="hidden" name="qty" value="1" />

  <ul class="pro__dtl__btn mt-3">
  <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-shopping-cart"></i> Beli Produk Ini</button>
</ul>
<div class="pro__social__share">
                                <h2>Share :</h2>
                                <ul class="pro__soaial__link">
                                    <li><a href="https://twitter.com/devitemsllc" target="_blank"><i class="zmdi zmdi-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/devitems/" target="_blank"><i class="zmdi zmdi-instagram"></i></a></li>
                                    <li><a href="https://www.facebook.com/devitems/?ref=bookmarks" target="_blank"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="https://plus.google.com/" target="_blank"><i class="zmdi zmdi-google-plus"></i></a></li>
                                </ul>
                            </div>

 </div>
 </div>
 </form>   
 </div>


        </section>
        <!-- End Product Details -->
        <!-- Start Product tab -->
        <section class="htc__product__details__tab bg__white pb--120">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <ul class="nav product__deatils__tab mb--60" role="tablist">
                            <li role="presentation" class="active">
                                <a class="active" href="#description" role="tab" data-toggle="tab">Description</a>
                            </li>
                            <li role="presentation">
                                <a href="#sheet" role="tab" data-toggle="tab">Book Spesification</a>
                            </li>
                            <li role="presentation">
                                <a href="#reviews" role="tab" data-toggle="tab">Reviews</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="product__details__tab__content">
                            <!-- Start Single Content -->
                            <div role="tabpanel" id="description" class="product__tab__content active">
                                <div class="product__description__wrap">
                                    <div class="product__desc">
                                        <h2 class="title__6">Details</h2>
                                        <p><?= $barang['deskripsi_barang']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Content -->
                            <!-- Start Single Content -->
                            <div role="tabpanel" id="sheet" class="product__tab__content">
                                <div class="pro__feature">
                                        <h2 class="title__6">Spesifikasi Buku</h2>
                                        <ul class="feature__list">
                                            <li></i>Duis aute irure dolor in reprehenderit in voluptate velit esse</a></li>
                                            <li></i>Irure dolor in reprehenderit in voluptate velit esse</a></li>
                                            <li></i>Irure dolor in reprehenderit in voluptate velit esse</a></li>
                                            <li></i>Sed do eiusmod tempor incididunt ut labore et </a></li>
                                            <li></i>Sed do eiusmod tempor incididunt ut labore et </a></li>
                                            <li></i>Nisi ut aliquip ex ea commodo consequat.</a></li>
                                            <li></i>Nisi ut aliquip ex ea commodo consequat.</a></li>
                                        </ul>
                                    </div>
                            </div>
                            <!-- End Single Content -->
                            <!-- Start Single Content -->
                            <div role="tabpanel" id="reviews" class="product__tab__content">
                                <div class="review__address__inner">
                                    <!-- Start Single Review -->
                                    <div class="pro__review">
                                        <div class="review__thumb">
                                            <img src="<?= base_url(); ?>assets/images/review/1.jpg" alt="review images">
                                        </div>
                                        <div class="review__details">
                                            <div class="review__info">
                                                <h4><a href="#">Gerald Barnes</a></h4>
                                                <ul class="rating">
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star-half"></i></li>
                                                    <li><i class="zmdi zmdi-star-half"></i></li>
                                                </ul>
                                                <div class="rating__send">
                                                    <a href="#"><i class="zmdi zmdi-mail-reply"></i></a>
                                                    <a href="#"><i class="zmdi zmdi-close"></i></a>
                                                </div>
                                            </div>
                                            <div class="review__date">
                                                <span>27 Jun, 2016 at 2:30pm</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at estei to bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                                        </div>
                                    </div>
                                    <!-- End Single Review -->
                                    <!-- Start Single Review -->
                                    <div class="pro__review ans">
                                        <div class="review__thumb">
                                            <img src="<?= base_url(); ?>assets/images/review/1.jpg" alt="review images">
                                        </div>
                                        <div class="review__details">
                                            <div class="review__info">
                                                <h4><a href="#">Gerald Barnes</a></h4>
                                                <ul class="rating">
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star-half"></i></li>
                                                    <li><i class="zmdi zmdi-star-half"></i></li>
                                                </ul>
                                                <div class="rating__send">
                                                    <a href="#"><i class="zmdi zmdi-mail-reply"></i></a>
                                                    <a href="#"><i class="zmdi zmdi-close"></i></a>
                                                </div>
                                            </div>
                                            <div class="review__date">
                                                <span>27 Jun, 2016 at 2:30pm</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at estei to bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                                        </div>
                                    </div>
                                    <!-- End Single Review -->
                                </div>
                                <!-- Start RAting Area -->
                                <div class="rating__wrap">
                                    <h2 class="rating-title">Write  A review</h2>
                                    <h4 class="rating-title-2">Your Rating</h4>
                                    <div class="rating__list">
                                        <!-- Start Single List -->
                                        <ul class="rating">
                                            <li><i class="zmdi zmdi-star-half"></i></li>
                                        </ul>
                                        <!-- End Single List -->
                                        <!-- Start Single List -->
                                        <ul class="rating">
                                            <li><i class="zmdi zmdi-star-half"></i></li>
                                            <li><i class="zmdi zmdi-star-half"></i></li>
                                        </ul>
                                        <!-- End Single List -->
                                        <!-- Start Single List -->
                                        <ul class="rating">
                                            <li><i class="zmdi zmdi-star-half"></i></li>
                                            <li><i class="zmdi zmdi-star-half"></i></li>
                                            <li><i class="zmdi zmdi-star-half"></i></li>
                                        </ul>
                                        <!-- End Single List -->
                                        <!-- Start Single List -->
                                        <ul class="rating">
                                            <li><i class="zmdi zmdi-star-half"></i></li>
                                            <li><i class="zmdi zmdi-star-half"></i></li>
                                            <li><i class="zmdi zmdi-star-half"></i></li>
                                            <li><i class="zmdi zmdi-star-half"></i></li>
                                        </ul>
                                        <!-- End Single List -->
                                        <!-- Start Single List -->
                                        <ul class="rating">
                                            <li><i class="zmdi zmdi-star-half"></i></li>
                                            <li><i class="zmdi zmdi-star-half"></i></li>
                                            <li><i class="zmdi zmdi-star-half"></i></li>
                                            <li><i class="zmdi zmdi-star-half"></i></li>
                                            <li><i class="zmdi zmdi-star-half"></i></li>
                                        </ul>
                                        <!-- End Single List -->
                                    </div>
                                </div>
                                <!-- End RAting Area -->
                                <div class="review__box">
                                    <form id="review-form">
                                        <div class="single-review-form">
                                            <div class="review-box name">
                                                <input type="text" placeholder="Type your name">
                                                <input type="email" placeholder="Type your email">
                                            </div>
                                        </div>
                                        <div class="single-review-form">
                                            <div class="review-box message">
                                                <textarea placeholder="Write your review"></textarea>
                                            </div>
                                        </div>
                                        <div class="review-btn">
                                            <a class="fv-btn" href="#">submit review</a>
                                        </div>
                                    </form>                                
                                </div>
                            </div>
                            <!-- End Single Content -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Product tab -->