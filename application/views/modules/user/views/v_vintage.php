<!-- BEGIN #content-wrapper -->
<div id="content-wrapper" class="clearfix">
	<!-- BEGIN #main-content -->
		<div id="main-content" class="full-width page-content">
			
			<h2 class="page-title">My Account</h2>
			<div class="shadow-wrapper margin1">
				<div class="left-shadow"></div>
				<div class="mid-shadow"></div>
				<div class="right-shadow"></div>
			</div>
			
			<p>Hello, <?php echo $this->session->userdata('username') ?>. Silakan lakukan konfirmasi email di akun anda. Jika anda masih ingin liat produk klik <a href="<?php echo site_url() ?>">disini</a> </p>
			
					
			
			
			
			
			
			<ul class="columns-2 clearfix">
				<li class="col2">
					
					<div class="tag-title-wrap clearfix">
						<h3 class="tag-title-small">General</h3>
					</div>
					
					<p><?php echo $db->first_name ?><br />
					<?php echo $db->email ?><br />
					<?php echo $db->no_hp ?><br />
					</p>
					
					<a href='<?php echo base_url() ?>user/edit_general' class="button2 fl" style="margin: 10px 0 0 0px;" type="submit" value="Place Order &raquo;" id="submit">Edit</a>
				</li>

				<li class="col2">
					
					<div class="tag-title-wrap clearfix">
						<h3 class="tag-title-small">Shipping Addresses</h3>
					</div>
					
					<p><?php echo $db->province ?><br />
					<?php echo $db->city ?><br />
					<?php echo $db->kecamatan ?><br />
					<?php echo $db->address ?><br />
					<?php echo $db->kodepos ?>
					</p>
					
				</li>
			</ul>
			
		<!-- END #main-content -->
		</div>
		<!-- END #content-wrapper -->
	</div>	