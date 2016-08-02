<!-- BEGIN #content-wrapper -->
	<div id="content-wrapper" class="clearfix">
		
		<!-- BEGIN #main-content -->
		<div id="main-content" class="full-width page-content">
			
			<h2 class="page-title"><?php echo $judul ?></h2>
			<div class="shadow-wrapper margin1">
				<div class="left-shadow"></div>
				<div class="mid-shadow"></div>
				<div class="right-shadow"></div>
			</div>
			
			<div class="msg notice"><p>Already have an account? <a href="<?php echo site_url() ?>login">Login now</a></p></div>
			
			<form method="post" action="<?php echo site_url()?>checkout/create_trx_qb">
			
				<ul class="columns-2 checkout-form clearfix">
					<li class="col2 clearfix">
						
						<div class="tag-title-wrap clearfix">
							<h3 class="tag-title-small">Shipping Addresses</h3>
						</div>
					
						<input class="full-input" type="text" name="nama" required placeholder='Nama' />
						
						<input class="full-input" type="text" name="email" required placeholder='E-mail' />

						<input class="full-input" type="text" name="no_hp" required placeholder='No.Handphone' />
						
						<input class="half-input fl" type="text" name="provinsi" required placeholder='Provinsi' />
						<input class="half-input fr" type="text" name="kota" required placeholder='Kota' />
						<input class="half-input fl" type="text" name="kecamatan" required placeholder='Kecamatan' />
						

						
						<input class="half-input fr" type="text" maxlength='5' name="kodepos" required placeholder='Kode Pos' />

						
						
						
						<input class="full-input" type="text" name="alamat" required placeholder='Alamat' />

						<p style="margin: 0 0 15px 0;">Add any additional information here such as special delivery requires etc</p>
						<textarea name="message" class="full-input"></textarea>
						
					</li>

					<li class="col2 clearfix">

						<div class="tag-title-wrap clearfix">
							<h3 class="tag-title-small">Payment method</h3>
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
						

						<div class="tag-title-wrap clearfix">
							<h3 class="tag-title-small">Payment method</h3>
						</div>
					
						<p class="radio-wrapper"><input checked type="radio" name="payment-method" value="bank-transfer" /> Bank Transfer</p>
						<p class="radio-wrapper"><input disabled type="radio" name="payment-method" value="credit-card" /> <s>Credit Card</s> </p>
						
						<p><input disabled type="radio" name="payment-method" value="paypal" /> <s>Paypal</s> <br></p>
						

						<input class="button2 fr" style="margin: 10px 0 0 0px;" type="submit" value="Place Order &raquo;" id="submit" name="submit">

					</li>
				</ul>
				
			
			</form>
			
		<!-- END #main-content -->
		</div>
	
	<!-- END #content-wrapper -->
	</div>