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
                        <?php foreach($barang as $brg) : ?>
                        <!-- Start Single Product -->
                        <div class="col-md-3 single__pro col-lg-3 col-md-4 col-sm-12 cat--<?= $brg['kategori'] ?>">
                            <div class="product foo">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="#">
                                            <img src="<?= base_url(); ?>assets/img/<?= $brg['image_barang'] ?>" alt="product images" height="350">
                                        </a>
                                    </div>
                                    <div class="product__hover__info">
                                        <ul class="product__action">
                                            <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product__details">
                                    <h2><a href="product-details.html" class="line-clamp" ><?= $brg['nama_barang'] ?></a></h2>
                                    <ul class="product__price">
                                        <li class="new__price">Rp. <?= number_format($brg['harga_barang'],0,",",".");?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Our Product Area -->