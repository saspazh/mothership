<!-- BEGIN #footer-wrapper -->
	<div id="footer-wrapper">
		
		<!-- BEGIN #footer -->
		<div id="footer">					
			
			<!-- BEGIN .columns-4 -->
			<ul class="columns-4 clearfix">
				
				<li class="col4">
					<div class="widget">
						<div class="widget-title clearfix">
							<h6>Customer Services</h6>
						</div>
						<ul>
							<li class="contact-phone">+62 81287 507270</li>
							<li class="contact-mail">support@saspazh.com</li>
							<li class="contact-mail">Twitter @saspazh</li>
						</ul>
					</div>
				</li>
				
				<li class="col4">
					<div class="widget">
						<div class="widget-title clearfix">
							<h6>Categories</h6>
						</div>
						<ul>
						<?php
						$data_kategori = $this->db->query("SELECT * 
						FROM  `kategori` 
						ORDER BY  `kategori`.`nama_kategori` ASC ")->result();

						foreach ($data_kategori as $kategori) {
						?>
							<li><a href="<? echo site_url() ?>product/kategori/<? echo $kategori->id_kategori ?>"><? echo $kategori->nama_kategori ?></a></li>
						<?php
						}
						?>
						</ul>
					</div>							
				</li>
				
				<li class="col4">
					<div class="widget">
						<div class="widget-title clearfix">
							<h6>Tags</h6>
						</div>
						
						<ul class='wp-tag-cloud'>
							<li><a href="#">Tag #1</a></li>
							<li><a href="#">Tag #2</a></li>
							<li><a href="#">Tag #3</a></li>
							<li><a href="#">Tag #4</a></li>
							<li><a href="#">Tag #5</a></li>
							<li><a href="#">Tag #6</a></li>
							<li><a href="#">Tag #7</a></li>
							<li><a href="#">Tag #8</a></li>
							<li><a href="#">Tag #9</a></li>
						</ul>
					</div>
				</li>
				
				<li class="col4">
					<div class="widget">
						<div class="widget-title clearfix">
							<h6>Twitter</h6>
						</div>
						
						<ul class="latest-tweets">
							<li>@saspazh selamat kepada pemenang #saspazhcontest nov2015.<span>about 1 hours ago</span></li>
							<li>@saspazh Dirgahayu indonesia. Happy freedom. Never fear to big bad person. Eventhought you are.<span>about 3 month ago</span></li>
							<li>@saspazh Lets start your gold dream! Never down Never fear Never giveup.<span>about 5 month ago</span></li>
						</ul>
					</div>
				</li>
			
			<!-- END .columns-4 -->
			</ul>
							
		<!-- END #footer -->
		</div>
							
	<!-- END #footer-wrapper -->
	</div>

	<!-- BEGIN #footer-bottom-wrapper -->
	<div id="footer-bottom-wrapper" class="clearfix">
		
		<!-- BEGIN #footer-bottom -->
		<div id="footer-bottom" class="clearfix">
		
			<div class="fl clearfix">
		
				<!-- Secondary Menu -->
				<ul class="footer-menu">
					<li><a href="<?php echo base_url() ?>">Home</a></li>
					<!--
					<li><a href="#">Terms &#038; Conditions</a></li>
					<li><a href="#">Return Policy</a></li>
					-->
					<li><a href="<?php echo base_url() ?>contact">Contact</a></li>
				</ul>
			
				<p>&copy; Copyright 2012</p>
			
			</div>	
		
			<div class="fr">
				<img src="<? echo base_url() ?>vintage_shop/images/payment-methods.png" alt="" />	
			</div>
		
		<!-- BEGIN #footer-bottom -->
		</div>
		
	<!-- END #footer-bottom-wrapper -->
	</div>
