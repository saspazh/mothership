<!-- BEGIN #content-wrapper -->
	<div id="content-wrapper" class="clearfix">
		
		<!-- BEGIN #main-content -->
		<div id="main-content" class="page-content">
			
			<h2 class="page-title">Cek Transaksi</h2>
			<div class="shadow-wrapper margin1">
				<div class="left-shadow"></div>
				<div class="mid-shadow"></div>
				<div class="right-shadow"></div>
			</div>
			
			<form action="<?php echo site_url()?>transaksi/auth" id="loginform" class="clearfix" method="post">

				<div class="field-row">
					<label for="email_address">No. transaksi</label>
				    <input type="text" name="no_transaksi" placeholder='Masukan nomor transaksi' class="text_input" value="" />
				</div>

				
					<input class="button2" type="submit" value="Submit &raquo;" id="submit" name="submit">
				
				
			</form>
				

		<!-- END #main-content -->
		</div>
		
		<?php 
		//$this->load->view('vintage/sidebar.php');
		?>
	
	<!-- END #content-wrapper -->
	</div>