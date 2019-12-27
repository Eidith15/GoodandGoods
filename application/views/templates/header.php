<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $judul; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>assets/images/favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <!-- Bootstrap Fremwork Main Css -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
    <!-- All Plugins css -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/plugins.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/custom.css">

    <!-- Modernizr JS -->
    <script src="<?= base_url(); ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
    
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Body main wrapper start -->
    <div class="wrapper fixed__footer">
        <!-- Start Header Style -->
        <header id="header" class="htc-header <?= $header ?>">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__area sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-lg-2 col-6">
                            <div class="logo">
                                <a href="<?= base_url(); ?>">
                                    <img src="<?= base_url(); ?>assets/images/logo/logo.png" alt="logo">
                                </a>
                            </div>
                        </div>
                        <!-- Start MAinmenu Ares -->
                        <div class="col-md-8 col-lg-8 d-none d-md-block">
                            <nav class="mainmenu__nav  d-none d-lg-block text-white">
                                <ul class="main__menu ">
                                    <li class="drop"><a href="<?= base_url(); ?>">Home</a>
                                    </li>
                                    <li><a href="<?= base_url(); ?>shop">Shop</a></li>
                                    <li><a href="<?= base_url(); ?>about">About</a></li>
                                    <li><a href="<?= base_url(); ?>contact">Contact</a></li>
                                   
                                </ul>
                            </nav>

                            <div class="mobile-menu clearfix d-block d-lg-none">
                                <nav id="mobile_dropdown">
                                    <ul>
                                        <li><a href="<?= base_url(); ?>">Home</a></li>
                                        <li><a href="<?= base_url(); ?>shop">Shop</a></li>
                                        <li><a href="<?= base_url(); ?>about">About</a></li>
                                        <li><a href="<?= base_url(); ?>contact">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- End MAinmenu Ares -->
                        <div class="col-md-2 col-lg-2 col-6">
                            <ul class="menu-extra">
                                <li class="search search__open d-none d-sm-block"><span class="ti-search"></span></li>
                                <li class="cart__menu"><span class="ti-shopping-cart"></span></li>
                                <li><a href="<?= base_url('login'); ?>"><span class="ti-user"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mobile-menu-area"></div>
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>
        <!-- End Header Style -->

        <div class="body__overlay"></div>
        <!-- Start Offset Wrapper -->
        <div class="offset__wrapper">
            <!-- Start Search Popap -->
            <div class="search__area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="search__inner">
                                <form action="#" method="get">
                                    <input placeholder="Search here... " type="text">
                                    <button type="submit"></button>
                                </form>
                                <div class="search__close__btn">
                                    <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Search Popap -->

            <!-- Start Cart Panel -->

            <div class="shopping__cart" >
                                    

    <?php
$grand_total = 0;
$i = 1;
 

?>

                <div class="shopping__cart__inner">

                    <div class="offsetmenu__close__btn">
                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                    </div>


                    <div class="shp__cart__wrap">

                        <?php foreach ( $this->cart->contents() as $item) : $grand_total = $grand_total + $item['subtotal']; ?>
                        <div class="shp__single__product">
                                
                            <div class="shp__pro__thumb">
                                <a href="#">
                                    <img src="<?= base_url() . 'assets/img/'.$item['gambar']; ?>" alt="product images">
                                </a>
                            </div>
                            
                            <div class="shp__pro__details">
                                <h2><a href="product-details.html"><?= $item['name']; ?></a></h2>
                                <span class="quantity">Jumlah : <?= $item['qty']; ?></span>
                                <span class="shp__price"><?= number_format($item['price'],0,",","."); ?></span>
                            </div>
                           
                            <div class="remove__btn">
                                <a href="<?= base_url()?>shopping/hapusCart/<?= $item['rowid'];?>" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                            </div>
                            
                   
                        </div>
                     <?php endforeach; ?>
                    </div>
                       
                    <ul class="shoping__total">
                        <li class="subtotal"><?= number_format( $grand_total, 0,",","."); ?>
                            
                        </li>
                    </ul>
                    <ul class="shopping__btn">
                        <li><a href="<?= base_url()?>shopping/tampil_cart">View Cart</a></li>
                        <li class="shp__checkout"><a href="<?= base_url(); ?>shopping/check_out">Checkout</a></li>
                    </ul>
                
                </div>
             
            </div>
            <!-- End Cart Panel -->
        </div>
        <!-- End Offset Wrapper -->

























