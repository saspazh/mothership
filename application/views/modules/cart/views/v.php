			<section class="header_text sub">
			<img class="pageBanner" src="<? echo base_url()?>shopper_new/themes/images/pageBanner.png" alt="New products" >
				<h4><span>Shopping Cart</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">
					<div class="span9">					
						<h4 class="title"><span class="text"><strong>Your</strong> Cart</span></h4>
						
					<form action="<? echo site_url()?>/cart/update_cart" id='form1' name='form1' class="form-horizontal" method='post'>
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Remove</th>
									<th>Image</th>
									<th>Product Name</th>
									<th>Size</th>
									<th>Quantity</th>
									<th>Unit Price</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach($this->cart->contents() as $items): ?>
								<tr>
									<?php echo form_hidden('rowid[]', $items['rowid']); ?>
									<td><input type="checkbox" value="option1"></td>
									<td width='20%'><a href="<? echo base_url()?>product/detail/<? echo $items['id']?>"><img alt="" src="<? echo base_url()?><? echo $items['path']?>/<? echo $items['file_name']?>"></a></td>
									<td><? echo $items['name']?></td>
									<td><? echo $items['size']?></td>
									<td><input name='qty[]' type="number" min='0' max='<? echo $items['max']?>' value='<? echo $items['qty']?>' class="input-mini"></td>
									<td>Rp. <?php echo $this->cart->format_number($items['price']); ?></td>
									<td>Rp. <?php echo $this->cart->format_number($items['subtotal']); ?></td>
								</tr>			  
							
						  	<?php $i++; ?>
							<?php endforeach; ?>	
								<tr>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td><strong>Rp. <?php echo $this->cart->format_number($this->cart->total()); ?></strong></td>
								</tr>		  
							</tbody>
						</table>
<!--
						<h4>What would you like to do next?</h4>
						<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
						<label class="radio">
							<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
							Use Coupon Code
						</label>
						<label class="radio">
							<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
							Estimate Shipping &amp; Taxes
						</label>
-->
						<hr>
						<p class="cart-total right">
							<strong>Sub-Total</strong>:	$100.00<br>
							<strong>Eco Tax (-2.00)</strong>: $2.00<br>
							<strong>VAT (17.5%)</strong>: $17.50<br>
							<strong>Total</strong>: Rp. <?php echo $this->cart->format_number($this->cart->total()); ?><br>
						</p>
						<hr/>
						<p class="buttons center">				
							<button class="btn" type="submit">Update</button>
							<button class="btn" type="button"><a href='<? echo base_url()?>product'>Continue</a></button>
							<button class="btn btn-inverse" type="button" id="checkout">Checkout</button>
						</p>					
					</form>
					
					</div>
					<div class="span3 col">
						<?
						$this->load->view('sidebar/categories');
						$this->load->view('sidebar/randomize');
						?>
					</div>
				</div>
			</section>			
			
		<script src="<? echo base_url()?>shopper_new/themes/js/common.js"></script>	
		<script>
			$(document).ready(function() {
				$('#checkout').click(function (e) {
					document.location.href = "<? echo base_url()?>checkout/index";
				})
			});
		</script>