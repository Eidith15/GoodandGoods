
    <!-- Bagian Keranjang static -->

        <!-- END Bagian Keranjang static -->

<section class="htc__product__area ptb--130 bg__white">
            <div class="container">
                <div class="htc__product__container">
<form action="<?php echo base_url()?>shopping/ubah_cart" method="post" name="frmShopping" id="frmShopping" class="form-horizontal" enctype="multipart/form-data">
<?php
    if ($cart = $this->cart->contents())
        {
 ?>
 
 
<table class="table">
<tr id= "main_heading">
<td width="2%">No</td>
<td width="10%">Gambar</td>
<td width="33%">Item</td>
<td width="17%">Harga</td>
<td width="8%">Qty</td>
<td width="20%">Jumlah</td>
<td width="10%">Hapus</td>
</tr>
<?php
// Create form and send all values in "shopping/update_cart" function.
$grand_total = 0;
$i = 1;
 
foreach ($cart as $item):
$grand_total = $grand_total + $item['subtotal'];
?>
<input type="hidden" name="cart[<?= $item['id'];?>][id]" value="<?= $item['id'];?>" />
<input type="hidden" name="cart[<?= $item['id'];?>][rowid]" value="<?= $item['rowid'];?>" />
<input type="hidden" name="cart[<?= $item['id'];?>][name]" value="<?= $item['name'];?>" />
<input type="hidden" name="cart[<?= $item['id'];?>][price]" value="<?= $item['price'];?>" />
<input type="hidden" name="cart[<?= $item['id'];?>][gambar]" value="<?= $item['gambar'];?>" />
<input type="hidden" name="cart[<?= $item['id'];?>][qty]" value="<?= $item['qty'];?>" />
<tr>
<td><?= $i++; ?></td>
<td><img class="img-thumbnail" src="<?= base_url() . 'assets/img/'.$item['gambar']; ?>"/></td>
<td><?= $item['name']; ?></td>
<td><?= number_format($item['price'], 0,",","."); ?></td>
<td><input type="text" class="form-control input-sm" name="cart[<?= $item['id'];?>][qty]" value="<?= $item['qty'];?>" /></td>
<td><?= number_format($item['subtotal'], 0,",",".") ?></td>
<td><a href="<?= base_url()?>shopping/hapus/<?= $item['rowid'];?>" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i>Hapus</a></td>
<?php endforeach; ?>
</tr>
<tr>
<td colspan="3"><b>Order Total: Rp <?= number_format($grand_total, 0,",","."); ?></b></td>
<td colspan="4" align="right">

<button class ="btn btn-danger"><a href="<?=base_url()?>shopping/hapusAll" data-toggle="modal" data-target="#myModal"   rel="noopener noreferrer">Kosongkan Cart</a></button>
<button class='btn btn-sm btn-success'  type="submit">Update Cart</button>
<a href="<?=base_url()?>shopping/check_out"  class ='btn btn-sm btn-primary'>Check Out</a>
</tr>
 
</table>
<?php
        }
    else
        {
            echo "<h3>Keranjang Belanja masih kosong</h3>";
        }
?>
</form>
                
            </div>
        </section>


  