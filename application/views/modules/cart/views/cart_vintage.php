<!-- BEGIN #content-wrapper -->
	<div id="content-wrapper" class="clearfix">
		
		<!-- BEGIN #main-content -->
		<div id="main-content" class="full-width page-content">
			
			<h2 class="page-title">Cart</h2>
			<div class="shadow-wrapper margin1">
				<div class="left-shadow"></div>
				<div class="mid-shadow"></div>
				<div class="right-shadow"></div>
			</div>

			<form method="post" action="<? echo site_url()?>/cart/update_cart">
			
				<table width="100%" class="account-table">
					<thead>
						<tr>
							<th>Product Name</th>
							<th>Size</th>
							<th>Qty</th>
							<th>Price</th>
							<th>Totals</th>
						<!--
							<th>Remove</th>
						-->
						</tr>
					</thead>
					<tbody>
					
					<?php foreach($this->cart->contents() as $items): ?>

						<tr>
							<?php echo form_hidden('rowid[]', $items['rowid']); ?>
							<td data-title="Product Name"><?php echo $items['name']?></td>
							<td data-title="Size"><?php echo $items['size']?></td>
							<td data-title="Qty">	
							<div>
								<select name="qty" onchange="this.form.submit()">
									<?php
									for($i=0; $i<=12; $i++){
									?>
										<option <?php if($i==$items['qty']){echo'selected';}else{}?> value="<?php echo $i ?>"><?php echo $i ?></option>
									<?php
									}
									?>
								</select>
							</div>
							</td>
							<td data-title="Price">Rp. <?php echo $this->cart->format_number($items['price']); ?></td>
							<td data-title="Totals">Rp. <?php echo $this->cart->format_number($items['subtotal']); ?></td>
						<!--
							<td data-title="Remove"><input type="checkbox" name="remove-item" value="0123" /></td>
						-->
						</tr>
					<?php $i++; ?>
					<?php endforeach; ?>


						
					</tbody>
				</table>
				
				<!-- BEGIN .clearfix -->
				<div class="cart-options clearfix">
			
					
					<div class="cart-buttons fr">

						<input class="button2 fl" style="margin: 2px 10px 0 0;" type="submit" value="Update Cart &raquo;" name="submit">
					</div>
				</form>

					
					<form action='<?php echo site_url() ?>voucher' method='post'>
						<div class="coupon-form clearfix fl">
							
							<input type="hidden" value="<?php echo $this->cart->total(); ?>" name="jumlah_transaksi" />

							<input type="text" class="coupon-code" required maxlength='15' name="voucher" class="text_input" /><br>
							<input class="button2 fr" type="submit" value="Apply Coupon &raquo;" name="submit">
						
						</div>
					</form>
					
				
				<!-- END .clearfix -->
				</div>
						
			<hr>
			<br>
			
			<div class="form-third clearfix">
				
				<div class="tag-title-wrap clearfix">
					<h3 class="tag-title-small">Total</h3>
				</div>
			
				<table width="100%" class="account-table">
					<tbody>
						<tr>
							<td><strong>Subtotal</strong></td>
							<td>Rp. <?php echo $this->cart->format_number($this->cart->total()); ?></td>
						</tr>
					
						<tr>
							<td><strong>Voucher</strong></td>
							<td>Rp. <?php echo number_format($this->session->userdata('voucher_harga')) ?> (-)</td>
						</tr>
					
						<tr>
							<td><strong>Shipping</strong></td>
							<td>Free Shipping</td>
						</tr>
						<tr>
							<td><strong>Order Total</strong></td>
							<td>Rp. <?php echo $this->cart->format_number($this->cart->total() - $this->session->userdata('voucher_harga')); ?></td>
						</tr>
					</tbody>
				</table>
			
				<a href="<?php echo site_url() ?>checkout" class="button2 fr" style="margin: 2px 0 0 0;">Proceed to Checkout &raquo;</a>
			
			</div>

		<!-- END #main-content -->
		</div>
	
	<!-- END #content-wrapper -->
	</div>