<section class="header_text sub">
			<img class="pageBanner" src="<? echo base_url()?>shopper_new/themes/images/pageBanner.png" alt="New products" >
				<h4><span>Terima kasih telah berbelanja di Saspazh</span></h4>
			</section>	
			<section class="main-content">
				<div class="row">
					<div class="span12" align='center'>
<?php
$cus= $this->db->query("SELECT sum(c.price) as total_pembayaran
FROM transaksi z, penjualan a, stok b, barang c
WHERE z.id_transaksi = a.id_transaksi
AND a.id_stok = b.id_stok
AND b.id_barang = c.id_barang
AND z.no_order = '$db->no_order'");

?>
					
					
<address>
	<p>Hi,<strong><? echo $db->first_name ?></strong></p>
	<p>Beberapa saat lagi anda akan mendapatkan email konfirmasi pemesanan sebagai bukti bahwa kami telah menerima pesanan anda.</p>
	<strong>No Order :</strong> <span><? echo $db->no_order ?></span><br>
	<strong>Total Pembayaran:</strong> <span>Rp <? echo $cus->last_row()->total_pembayaran ?></span><br>
	<strong>Metode Pembayaran:</strong> 
	<span>
	<?
	switch($db->payment){
		case 1: echo 'Transfer Bank';
	}	
	?>
	</span><br>								
	<p>Metode pembayaran tidak bisa diganti apabila proses order sudah dijalankan.</p>
	<p>Pemesanan hanya akan diproses apabila pembayaran dilakukan dalam waktu <font color='red'>20 jam</font> ke akun kami dibawah ini</p>
	
	<strong>Bank:</strong> <span>Mandiri</span><br>								
	<strong>No Rekening:</strong> <span>111 000 555 128</span><br>								
	<strong>A/n PT.Saspazh </strong> <span></span>
	<br>
	<br>
	
	<strong>Bank:</strong> <span>BCA</span><br>								
	<strong>No Rekening:</strong> <span>8050 444 11</span><br>								
	<strong>A/n PT.Saspazh </strong> <span></span>
	<br>
	<br>
	
	<strong>Bank:</strong> <span>Permata Bank</span><br>								
	<strong>No Rekening:</strong> <span>3333 4444 5555 6666</span><br>								
	<strong>A/n PT.Saspazh </strong> <span></span>
	<br>
	<br>
	
	<p>Jika menggunakan m-banking, e-banking atau ATM non tunai<br> di kolom 'Berita' harap cantumkan no order : <? echo $db->no_order ?></p>			
</address>

						<h5><span>Apa yang harus saya lakukan selanjutnya?</span></h5>
				<table width='80%' border='0' cellpadding='20'>
					<tr align='center'>
						<td>
					<img alt="" src="<? echo base_url() ?>shopper_new/themes/images/email.png" width='150px' height='' >
						</td>
					
						<td>
					<img alt="" src="<? echo base_url() ?>shopper_new/themes/images/tracking.png" width='150px' height='' >
						</td>
					
						<td>
					<img alt="" src="<? echo base_url() ?>shopper_new/themes/images/shipping.png" width='150px' height='' >
						</td>
					</tr>
					
					<tr align='center'>
						<td><h5>1. Konfirmasi Pesanan</h5></td>
						<td><h5>2. Cek Status Order</h5></td>
						<td><h5>3. Tunggu Pesanan</h5></td>
					</tr>
					<tr align='center' padding='10'>
						<td><strong>Kami akan segera mengirim konfirmasi pesanan ke email anda, harap periksa kembali dengan saksama.</strong></td>
						<td><strong>Gunakan nomor order anda yang ada dalam email untuk mencari tahu status pesanan anda.</strong></td>
						<td><strong>Setelah transaksi anda di proses anda bisa menunggu barang tiba dalam estimasi tertentu.</strong></td>
					</tr>
				<table>	
	
					</div>
				</div>
			</section>			
			
			
			<script src="<? echo base_url()?>shopper_new/themes/js/common.js"></script>