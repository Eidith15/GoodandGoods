<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/style.css">

    <title><?= $judul; ?></title>
  </head>
  <body>

  <div class="shadow">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    	<div class="container">
	      <a class="navbar-brand" href="<?= base_url() ?>home">GOOD & GOODS</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>

	      <div class="collapse navbar-collapse" id="navbarSupportedContent">
	        <ul class="navbar-nav mr-auto">
	          <li class="nav-item dropdown">
	            <a class="nav-link dropdown-toggle mr-sm-2" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	              Kategori
	            </a>
	            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	              <a class="dropdown-item" href="#">Action</a>
	              <a class="dropdown-item" href="#">Another action</a>
	              <div class="dropdown-divider"></div>
	              <a class="dropdown-item" href="#">Something else here</a>
	            </div>
	          </li>
	        </ul>
	        <form class="my-auto d-inline w-100">
	          <div class="input-group">
	            <input type="text" class="form-control" placeholder="Search">
	            <span class="input-group-append">
	            <button class="btn btn-outline-secondary bg-secondary text-white mr-3" type="button">Search</button>
	            </span>
	          </div>
	        </form>
	        	<span class="border-left">
			    <a class="nav-item nav-link mr-3 ml-3 text-secondary" href="shopping/tampil_cart">Cart</a>
			    </span>
			    <div class="navbar-nav">
			    <span class="border-left">
	     		<a class="nav-item nav-link text-info mr-3 ml-3 btn" href="#">Login</a>
	     		</span>
	     		<span class="border-left">
	     		<a class="nav-item nav-link text-success mr-3 ml-3" href="#">Daftar</a>
	     		</span>
		    </div>
	      </div>
      </div>
    </nav>
  </div>


<div class="container m-5 ">
  <div class="row">
 
        <div class="col-lg-3">


<div class="list-group">
           <a href="<?php echo base_url()?>shopping/tampil_cart" class="list-group-item"><strong><i class="glyphicon glyphicon-shopping-cart"></i> KERANJANG BELANJA</strong></a>
          <?php 
 
            $cart= $this->cart->contents();
 
// If cart is empty, this will show below message.
            if(empty($cart)) {
                ?>
                <a class="list-group-item">Keranjang Belanja Kosong</a>
                <?php
            }
            else
                {
                    $grand_total = 0;
                    foreach ($cart as $item)
                        {
                            $grand_total+=$item['subtotal'];
                ?>
                <a class="list-group-item"><?php echo $item['name']; ?> (<?php echo $item['qty']; ?> x <?php echo number_format($item['price'],0,",","."); ?>)=<?php echo number_format($item['subtotal'],0,",","."); ?></a>
                <?php
                        }
                ?>
 
                <?php
                }
 ?>
            </div>
        </div>
        <!-- /.col-lg-3 -->
 
        <div class="col-lg-9 mt-5">
	
