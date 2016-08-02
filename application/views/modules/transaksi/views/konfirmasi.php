<!-- BEGIN #content-wrapper -->
	<div id="content-wrapper" class="clearfix">
		
		<!-- BEGIN #main-content -->
		<div id="main-content" class="full-width page-content">
			
			<h2 class="page-title"><?php echo $judul ?></h2>
			
			
			<form method="post" action="<?php echo site_url()?>transaksi/save_konfirmasi">
			
				<ul class="columns-2 checkout-form clearfix">
					<li class="col2 clearfix">
						
						<div class="tag-title-wrap clearfix">
							<h3 class="tag-title-small">Konfirmasi pembayaran</h3>
						</div>
						
						<input type='hidden' name='id_transaksi' value='<?php echo $this->uri->segment(3) ?>' />

						<?php
						if($this->uri->segment(4)) {
						?>
						<input type='hidden' name='token' value='<?php echo $this->uri->segment(4) ?>' />
						<?php
						}else{

						}
						?>
						<div class="clearfix" style="margin: 20px 0 20px 0;">
							<div class="select-box">
								<select id="size" required name="bank_tujuan">
									<option value="">Choose bank tujuan</option>
									<option value="BSM">Fadhli Maulidri a/n BSM</option>
									<option value="BCA">Fadhli Maulidri a/n BCA</option>

								</select>
							</div>
							
						</div>

						
						<div class="clearfix" style="margin: 20px 0 20px 0;">
							<div class="select-box">
								<select id="size" required name="metode">
									<option value="">Pilih metode</option>
									<option value="Transfer">Transfer</option>
									<option value="Tunai">Tunai</option>
								</select>
							</div>
							
						</div>

						
						<input class="full-input fl" type="text" name="no_rek_pengirim" required placeholder='No Rek. Pengirim' />
						<input class="full-input fr" type="text" name="nama_pengirim" required placeholder='Nama Pengirim' />	
						
						<a href="<?php echo site_url() ?>transaksi/detail/<?php echo $this->uri->segment(3) ?>" class="button2 fl" style="margin: 10px 5px 0 0;">Kembali</a>
						<input class="button2 fr" style="margin: 10px 0 0 0px;" type="submit" value="Simpan &raquo;" id="submit" name="submit">

					</li>
				</ul>
				
			
			</form>
			
		<!-- END #main-content -->
		</div>
	
	<!-- END #content-wrapper -->
	</div>