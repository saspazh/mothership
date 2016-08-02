<html>

<head>


</head>

<body>


<div class="bg-content"> 
	  
	<div class="container">
		<div class="row">

<h3>Cart</h3>
		

<form action="<? echo site_url()?>/cart/update_cart" id='form1' name='form1' class="form-horizontal" method='post'>

<table width="100%" cellpadding="5" cellspacing="5" style="border:1px solid #999;" border="1">
	<thead>
		<tr>
			<td>Product</td>
			<td width='10%'>Picture</td>
			<td>Color</td>
			<td>Size</td>
			<td>Harga</td>
			<td width='5'>Quantity</td>
			<td>Sub Total Harga</td>
		</tr>
	</thead>
	<tbody>
		<?php $i = 1; ?>
		<?php foreach($this->cart->contents() as $items): ?>
		
		<?php echo form_hidden('rowid[]', $items['rowid']); ?>
		<?php echo form_hidden('size[]', $items['size']); ?>
		<tr <?php if($i&1){ echo 'class="alt"'; }?>>
	  		
	  		
	  		<td><?php echo $items['name']; ?></td>
	  		<td><a href="<? echo base_url() ?>uploads/<?php echo $items['file_name']; ?>" class="magnifier" ><img src="<? echo base_url() ?>uploads/<?php echo $items['file_name']; ?>" alt="" width='100%' /></a></td>
	  		<td><?php echo $items['color']; ?></td>
	  		<td><?php echo $items['size']; ?></td>
	  		
	  		<td>Rp. <?php echo $this->cart->format_number($items['price']); ?></td>
	  		<td align='center'>
	  			<?php // echo form_input(array('name' => 'qty[]', 'value' => $items['qty'], 'maxlength' => '2', 'size' => '1')); ?>
	  			<!--<input name='qty[]' type='number' value='<? //echo $items['qty'] ?>' >-->
			
			<div>
	  			<input name='qty[]' type='number' id='qty' value='<? echo $items['qty'] ?>' >
			</div>
				
	  		</td>
			<td>Rp. <?php echo $this->cart->format_number($items['subtotal']); ?></td>
	  	</tr>
	
	  	
	  	<?php $i++; ?>
		<?php endforeach; ?>
		
		<tr>
 		 	<td colspan="6"><strong>Total</strong></td>
 		 	<td>Rp. <?php echo $this->cart->format_number($this->cart->total()); ?></td>
		</tr>
	</tbody>
</table>
<br>
<p><?php echo "<input type='submit' class='kirim' value='Update Keranjang'><br>";?>
<br>
<? echo anchor('cart/empty_cart', 'Kosongkan Keranjang').'<br>';?></p>
<? echo anchor('product', 'continue shopping');?></p>
<?php 
echo form_close(); 

?>
<button id="hide">Hide</button>
<button id="show">Show</button>

<div id='checkout'>
	asdasd
</div>

		</div>
	</div>
</div>

<body>
<html>