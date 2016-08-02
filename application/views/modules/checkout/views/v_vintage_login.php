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
			
			<form method="post" action="<?php echo site_url()?>checkout/create_trx">
			
				<ul class="columns-2 checkout-form clearfix">
					<li class="col2 clearfix">
						
						
						<div class="tag-title-wrap clearfix">
							<h3 class="tag-title-small">Shipping Addresses</h3>
						</div>
					
						<input class="full-input" type="text" name="nama" required placeholder='Nama' value='<?php echo $db->first_name ?>'/>
						
						<input class="full-input" type="text" name="email" required placeholder='E-mail' value='<?php echo $db->email ?>' />

						<input class="full-input" type="text" name="no_hp" required placeholder='No.Handphone' value='<?php echo $db->no_hp ?>' />
						
						<input class="half-input fl" type="text" name="provinsi" required placeholder='Provinsi' value='<?php echo $db->province ?>' />
						<input class="half-input fr" type="text" name="kota" required placeholder='Kota' value='<?php echo $db->city ?>' />
						<input class="half-input fl" type="text" name="kecamatan" required placeholder='Kecamatan' value='<?php echo $db->kecamatan ?>' />
						
						<input class="half-input fr" type="text" name="kodepos" maxlength='5' required placeholder='Kode Pos' value='<?php echo $db->kodepos ?>' />

						
						
						
						<input class="full-input" type="text" name="alamat" min='5' placeholder='Alamat' value='<?php echo $db->address ?>' />

						<p style="margin: 0 0 15px 0;">Informasi tambahan pemesanan barang</p>
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

							<?php
							if($this->session->userdata('kode')){
							?>
								<tr>
									<td><strong>Voucher</strong></td>
									<td>Rp. <?php echo number_format($this->session->userdata('voucher_harga')) ?> (-)</td>
								</tr>
							<?php
							}
							?>	
								<tr>
									<td><strong>Shipping</strong></td>
									<td>Free Shipping</td>
								</tr>
								<tr>
									<td><strong>Order Total</strong></td>
									<td>Rp. <?php echo $this->cart->format_number($this->cart->total()-$this->session->userdata('voucher_harga')); ?></td>
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