<html>

<head>

<script type="text/javascript">
  function modify_qty(val) {
    var qty = document.getElementById('qty').value;
    var new_qty = parseInt(qty,10) + val;
    
    if (new_qty < 0) {
        new_qty = 0;
    }
    
    document.getElementById('qty').value = new_qty;
    return new_qty;
  }
	
  function startCalculate(){
	interval=setInterval("Calculate()",10);
  }
	
  function Calculate(){
    var a=document.form1.a.value;
    var b=document.form1.b.value;
    document.form1.c.value=(a*b);
    //document.form1.nominal.value=a-(a*b/100);
  }

  function stopCalc(){
    clearInterval(interval);
  }
</script>

<style>

input {
	font-size: 2em;
	background-color: transparent;
	text-align: center;
	border-width: 0;
	width: 100%;
	margin: 0 0 .1em 0;
	color: #fff;
}


</style>


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
			<td width='10%'>Quantity</td>
			<td>Sub Total Harga</td>
		</tr>
	</thead>
	<tbody>
		<?php $i = 1; ?>
		<?php foreach($this->cart->contents() as $items): ?>
		
		<?php echo form_hidden('rowid[]', $items['rowid']); ?>
		<tr <?php if($i&1){ echo 'class="alt"'; }?>>
	  		
	  		
	  		<td><?php echo $items['name']; ?></td>
	  		<td><a href="<? echo base_url() ?>uploads/<?php echo $items['file_name']; ?>" class="magnifier" ><img src="<? echo base_url() ?>uploads/<?php echo $items['file_name']; ?>" alt="" width='100%' /></a></td>
	  		<td><?php echo $items['color']; ?></td>
	  		<td><?php echo $items['size']; ?></td>
	  		
	  		<td><span id='price'><?php echo $items['price'] ?><span></td>
	  		<td align='center'>
				<div class='box'>
					<input id="qty" name='qty' onfocus="startCalculate()" onblur="stopCalc()" value='<? echo $items['qty'] ?>' />
				</div>
	  		</td>
			<td>Rp. <span id='subtotal'></span</td>
	  	</tr>
	
	  	
	  	<?php $i++; ?>
		<?php endforeach; ?>
		
		<tr>
 		 	<td colspan="6"><strong>Total</strong></td>
 		 	<td>Rp. </td>
		</tr>
	</tbody>
</table>
<br>
<? echo anchor('cart/empty_cart', 'Kosongkan Keranjang').'<br>';?></p>
<? echo anchor('product', 'continue shopping');?></p>
<?php 
echo form_close(); 

?>
<p><?php echo "<button>Checkout</button>";?>
		</div>
	</div>
</div>

<body>
<html>