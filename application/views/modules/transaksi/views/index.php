<!-- BEGIN #content-wrapper -->
	<div id="content-wrapper" class="clearfix">
		
		<!-- BEGIN #main-content -->
		<div id="main-content" class="page-content">
			
			<h2 class="page-title">Transaksi <?php echo $db->no_order ?></h2>
			<div class="shadow-wrapper margin1">
				<div class="left-shadow"></div>
				<div class="mid-shadow"></div>
				<div class="right-shadow"></div>
			</div>
			

							<!-- BEGIN .product_list_widget -->
				<ul class="product_list_widget">

					

<table width="100%" class="account-table">
					<thead>
						<tr>
							<th>No_transaksi</th>
							<th>Tanggal</th>
							<th>Status</th>
							<th>Tindakan/Ket</th>
						<!--
							<th>Remove</th>
						-->
						</tr>
					</thead>
					<tbody>
					
					<?php foreach($data_list as $var => $value): ?>

						<tr>
							<td data-title="Product Name"><a href='<?php echo site_url() ?>transaksi/detail/<?php echo $value->id_transaksi ?>'><?php  echo $value->no_order ?></a></td>
							<td data-title="Tanggal"><?php  echo date('d M Y - H:i', strtotime($value->tgl_order)) ?></td>
							<td data-title="Status"><?php  echo $value->status ?></td>
							<td data-title="Status">
								<?php
									if(empty($value->konfirmasi)){
									?>
										<a href='<?php echo site_url() ?>transaksi/konfirmasi/<?php echo $value->id_transaksi ?>' class="button2">Konfirmasi &raquo;</a>
									<?php
									}elseif(empty($value->paid)){
										echo 'menunggu verifikasi';
									}elseif(empty($value->resi_pengiriman)){
										//echo 'dikirim';
									}
								  
								?>
							</td>
						<!--
							<td data-title="Remove"><input type="checkbox" name="remove-item" value="0123" /></td>
						-->
						</tr>
					<?php $i++; ?>
					<?php endforeach; ?>


						
					</tbody>
				</table>					
					
				
				<!-- END .product_list_widget -->
				

		<!-- END #main-content -->
		</div>
		
		<?php 
		//$this->load->view('vintage/sidebar.php');
		?>
	
	<!-- END #content-wrapper -->
	</div>