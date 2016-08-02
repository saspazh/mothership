<!-- BEGIN #content-wrapper -->
	<div id="content-wrapper" class="clearfix">
		
		<!-- BEGIN #main-content -->
		<div id="main-content" class="full-width page-content">
			
			<h2 class="page-title"><?php echo $judul ?></h2>
			
			<form method="post" action="<?php echo site_url()?>user/editsave">
			
				<ul class="columns-2 checkout-form clearfix">
					<li class="col2 clearfix">
						
						
						<div class="tag-title-wrap clearfix">
							<h3 class="tag-title-small">General</h3>							
						</div>
						
						<input type="hidden" name="id_customer" value='<?php echo $db->id_customer ?>'/>
						
						<input class="full-input" type="text" name="nama" required placeholder='Nama' value='<?php echo $db->first_name ?>'/>
						
						<input class="full-input" type="text" name="email" required placeholder='E-mail' value='<?php echo $db->email ?>' />

						<input class="full-input" type="text" name="no_hp" required placeholder='No.Handphone' value='<?php echo $db->no_hp ?>' />
						
						
						
					</li>

					<li class="col2 clearfix">

						<div class="tag-title-wrap clearfix">
							<h3 class="tag-title-small">Shipping Addresses</h3>
						</div>
							
						
						<input class="half-input fl" type="text" name="provinsi" required placeholder='Provinsi' value='<?php echo $db->province ?>' />
						<input class="half-input fr" type="text" name="kota" required placeholder='Kota' value='<?php echo $db->city ?>' />
						<input class="half-input fl" type="text" name="kecamatan" required placeholder='Kecamatan' value='<?php echo $db->kecamatan ?>' />
						
						<input class="half-input fr" type="text" name="kodepos" maxlength='5' required placeholder='Kode Pos' value='<?php echo $db->kodepos ?>' />

						<input class="full-input" type="text" name="alamat" min='5' placeholder='Alamat' value='<?php echo $db->address ?>' />

						

						<input class="button2 fr" style="margin: 10px 0 0 0px;" type="submit" value="Submit &raquo;" id="submit" name="submit">

					</li>
				</ul>
				
			
			</form>
			
		<!-- END #main-content -->
		</div>
	
	<!-- END #content-wrapper -->
	</div>