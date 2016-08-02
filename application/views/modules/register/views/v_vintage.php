<!-- BEGIN #content-wrapper -->
	<div id="content-wrapper" class="clearfix">
		
		<!-- BEGIN #main-content -->
		<div id="main-content" class="full-width page-content">
			
			<h2 class="page-title">Register</h2>
			<div class="shadow-wrapper margin1">
				<div class="left-shadow"></div>
				<div class="mid-shadow"></div>
				<div class="right-shadow"></div>
			</div>
						
			<form method="post" action="<?php echo base_url()?>register/save">
			
				<ul class="columns-2 checkout-form clearfix">
					<li class="col2 clearfix">
						
						<div class="tag-title-wrap clearfix">
							<h3 class="tag-title-small">Biodata</h3>
						</div>
						
						<input class="full-input" type="text" required name="email" placeholder='E-mail' />

						<input class="full-input" type="text" required name="nama" placeholder='Nama' />
						
						
						<p class="radio-wrapper"><input type="radio" checked name="jenis_kelamin" value="laki-laki" /> Laki-laki</p>
						<p><input type="radio" name="jenis_kelamin" value="perempuan" /> Perempuan</p>
						
						<input class="full-input" type="text" name="no_hp" required placeholder='No.Handphone' />

						
					</li>

					<li class="col2 clearfix">

						<div class="tag-title-wrap clearfix">
							<h3 class="tag-title-small">Akun</h3>
						</div>

						
						<input class="full-input" type="text" name="username" required placeholder='Username' />

						<input class="full-input" type="password" name="password" required placeholder='Password' />
						
						<input class="full-input" type="password" name="konfirmasi" required placeholder='Konfirmasi password' />
					
						<input class="button2 fr" style="margin: 10px 0 0 0px;" type="submit" value="Register &raquo;" id="submit" name="submit">

					</li>
				</ul>
				
			
			</form>
			
		<!-- END #main-content -->
		</div>
	
	<!-- END #content-wrapper -->
	</div>