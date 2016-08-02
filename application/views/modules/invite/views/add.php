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
			
			<div class="msg notice"><p>Dapatkan <strong>2 poin</strong> setelah mengundang teman Anda. dan dapatkan <strong>10 poin</strong> setelah teman anda registrasi</p></div>
			
			<form method="post" action="<?php echo site_url()?>invite/save">
			
				<ul class="columns-2 checkout-form clearfix">
					<li class="col2 clearfix">
						
						<div class="tag-title-wrap clearfix">
							<h3 class="tag-title-small">Kirim undangan ke alamat email</h3>
						</div>
											
						<input class="full-input" type="text" name="email" required placeholder='E-mail' />	
					
						<input class="button2 fr" style="margin: 10px 0 0 0px;" type="submit" value="Kirim &raquo;" id="submit" name="submit">

						
					</li>


				</ul>
				
			
			</form>
			
		<!-- END #main-content -->
		</div>
	
	<!-- END #content-wrapper -->
	</div>