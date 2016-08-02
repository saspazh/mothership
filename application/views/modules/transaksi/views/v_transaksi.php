<!-- BEGIN #content-wrapper -->
	<div id="content-wrapper" class="clearfix">
		
		<!-- BEGIN #main-content -->
		<div id="main-content" class="page-content">
			
			<h2 class="page-title">Transaksi <?php echo $db->no_order ?></h2>
			



			

							<!-- BEGIN .product_list_widget -->

				<ul class="product_list_widget">

<?php 
$data_best = $this->db->query("SELECT d.id_product, d.url_suffix, c.size, d.id_kategori, e.id_poto, d.nama_product, d.color, d.price, d.description, e.file_name, e.path, d.waktu
FROM stok b, barang c, product d, poto e
WHERE b.id_barang = c.id_barang
and c.id_product = d.id_product
and d.id_product = e.id_product
AND e.highlight =  '1'
AND e.type =  'original'
AND b.no_order = '$db->no_order'")->result();
?>
				
						<div class="tag-title-wrap clearfix">
							<h3 class="tag-title-small">Barang</h3>
						</div>					

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
					
					<?php foreach($data_best as $best): ?>

						<tr>
							<?php echo form_hidden('rowid[]', $items['rowid']); ?>
							<td data-title="Product Name"><a href='<?php echo base_url()?>product/detail/<?php echo $best->id_product ?>/'><?php  echo $best->nama_product ?></a></td>
							<td data-title="Size"><?php  echo $best->size ?></td>
							<td data-title="Qty"><?php  echo '1' ?></td>
							<td data-title="Price">Rp. <?php  echo number_format($best->price) ?></td>
							<td data-title="Totals">Rp. <?php  echo number_format($best->price) ?></td>
						<!--
							<td data-title="Remove"><input type="checkbox" name="remove-item" value="0123" /></td>
						-->
						</tr>
					<?php $i++; ?>
					<?php endforeach; ?>


						
					</tbody>
				</table>



							<div class="tag-title-wrap clearfix">
							<h3 class="tag-title-small">Detail</h3>
						</div>

<?php 
$data_best = $this->db->query("SELECT a.id_transaksi, a.no_order, sum(d.price) as total
FROM transaksi a, stok b, barang c, product d, poto e
WHERE a.no_order=b.no_order 
and b.id_barang = c.id_barang
and c.id_product = d.id_product
and d.id_product = e.id_product
AND e.highlight =  '1'
AND e.type =  'original'
AND a.id_transaksi = '$db->id_transaksi'
GROUP by a.id_transaksi")->row();
?>

						<table width="100%" class="account-table">
							<tbody>
								<tr>
									<td><strong>Subtotal</strong></td>
									<td>Rp. <?php echo number_format($data_best->total) ?></td>
								</tr>
							<?php
							if(!empty($db->id_voucher)){
							?>
								<tr>
									<td><strong>Voucher</strong></td>
									<td>Rp. <?php echo number_format($t_voucher) ?> (-)</td>
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
									<td>Rp. <?php echo number_format($data_best->total-$t_voucher); ?></td>
								</tr>
							</tbody>
						</table>



				<?php
				if(($db->konfirmasi == null) and ($db->paid == null) ){
				?>

	<ul class="columns-2 clearfix">
		<li class="col2">
			<p>
				Bank: <span>Mandiri Syariah (BSM)</span><br>								
				Kode Bank : 451<br>								
				No Rekening: <span>708 638 850 7</span><br>								
				a.n Fadhli Maulidri <span></span>
			</p>
			<br>
		</li>

		<li class="col2">
			<p>
				Bank: <span>BCA</span><br>
				Kode Bank : 014<br>								
				No Rekening: <span>8050 2444 59</span><br>								
				a.n Fadhli Maulidri <span></span>
			</p>
			<br>
		</li>
	</ul>


					<a href="<?php echo site_url() ?>transaksi/konfirmasi/<?php echo $db->id_transaksi ?>/<?php echo $db->token ?>" class="button2 fl" style="margin: 2px 0 0 0;">Konfirmasi Pembayaran &raquo;</a>					
				<?php
				}elseif(($db->konfirmasi != null) and ($db->paid == null)){
				?>
					<p><em>Menunggu verifikasi pembayaran</em></p>
				<?php
				}elseif(($db->paid != null) and ($db->resi_pengiriman == null)){
				?>
					<p><i>Verifikasi pembayaran sukses</i></p>
				<?php
				}elseif(($db->resi_pengiriman != null) and ($db->konfirmasi_penerimaan_barang == null)){
				?>
					<p><i>Konfirmasi penerimaan barang</i></p>
				<?php
				}elseif($db->konfirmasi_penerimaan_barang != null ){
				?>
					<p><i>Selesai</i></p>
				<?php
				}
				?>
				
				<!-- END .product_list_widget -->
				

		<!-- END #main-content -->
		</div>
		
		<?php 
		//$this->load->view('vintage/sidebar.php');
		?>
	
	<!-- END #content-wrapper -->
	</div>