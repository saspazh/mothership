<?php
$cus= $this->db->query("SELECT sum(d.price) as total_pembayaran
FROM transaksi a, stok b, barang c, product d
WHERE a.no_order = b.no_order
AND b.id_barang = c.id_barang
AND c.id_product = d.id_product
AND a.no_order = '$db->no_order'");

?>


<!-- BEGIN #content-wrapper -->
	<div id="content-wrapper" class="clearfix">
		
		<!-- BEGIN #main-content -->
		<div id="main-content" class="full-width page-content">
			
			<h2 class="page-title">Pembayaran via Transfer Bank</h2>
			<div class="shadow-wrapper margin1">
				<div class="left-shadow"></div>
				<div class="mid-shadow"></div>
				<div class="right-shadow"></div>
			</div>
			
	<p>Hi,<strong><?php echo $db->nama_customer ?></strong></p>

	<p>Transaksi ini dicatat dengan nomor <strong><?php echo $db->no_order ?></strong>. </p>

	<p>Beberapa saat lagi anda akan mendapatkan email konfirmasi pemesanan sebagai bukti bahwa kami telah menerima pesanan anda. Segera lakukan pembayaran ke salah satu nomor rekening berikut</p>
	
	
	<br>								
	
	
	
	

	<ul class="columns-3 clearfix">
		<li class="col3">
			<p>
				Bank: <span>Mandiri Syariah (BSM)</span><br>								
				Kode Bank : 451<br>								
				No Rekening: <span>708 638 850 7</span><br>								
				a.n Fadhli Maulidri <span></span>
			</p>
			<br>
		</li>

		<li class="col3">
			<p>
				Bank: <span>BCA</span><br>
				Kode Bank : 014<br>								
				No Rekening: <span>8050 2444 59</span><br>								
				a.n Fadhli Maulidri <span></span>
			</p>
			<br>
		</li>
		<li class="col3">
			
		</li>
	</ul>
	
	
	<p>Jika menggunakan m-banking, e-banking atau ATM non tunai<br> di kolom 'Berita' harap cantumkan no order : <strong><? echo $db->no_order ?></strong></p>


	<a>Total belanja yang harus dibayar : </a>

	<?php
	if($db->id_voucher != NULL){
		$v_harga = $this->db->query("SELECT b.harga FROM transaksi a, voucher b WHERE a.id_voucher = b.id_voucher AND a.no_order = '$db->no_order'")->row()->harga;
		//echo $v_harga;
		$total = $cus->last_row()->total_pembayaran - $v_harga;
	}else{
		//echo 'tidak ada';
		$total = $cus->last_row()->total_pembayaran;
	}
	?>
	<a style="background: #80b600; color: #fff; border: none;">Rp <? echo number_format($total) ?></a>

	<div style="clear:both;height:25px;margin:0;"></div>

	<a href="<?php echo site_url() ?>transaksi/detail/<?php echo $db->id_transaksi ?>/<?php echo $db->token ?>" class="button3">Lihat Transaksi</a>
	

			
		<!-- END #main-content -->
		</div>
	
	<!-- END #content-wrapper -->
	</div>