<!-- BEGIN #header-wrapper -->
	<div id="header-wrapper">
		
		<!-- BEGIN #top-bar -->
		<div id="top-bar" class="clearfix">
			
			<!-- BEGIN #top-bar-inner -->
			<div id="top-bar-inner">
			
				<!-- BEGIN .social-icons -->
				<ul class="social-icons">
					<li><a href="https://twitter.com/saspazh"><span id="twitter_icon"></span></a></li>
					<li><a href="https://www.facebook.com/saspazh"><span id="facebook_icon"></span></a></li>
					<li><a href="plus.google.com/+Saspazh/"><span id="googleplus_icon"></span></a></li>
					<li><a href="https://instagram.com/saspazh"><span id="skype_icon"></span></a></li>
				<!-- END .social-icons -->
				</ul>
			
				<!-- BEGIN .topbar-right -->
				<div class="topbar-right clearfix">
					<ul class="clearfix">
				
				<?php 
				if($this->session->userdata('login') == 'admin'){
				?>				
						<li class="myaccount-icon"><a href="<?php echo site_url() ?>admin_home">Admin</a></li>
						<li class="myaccount-icon"><a href="<?php echo site_url() ?>user/account">My Account</a></li>
						<li class="checkout-icon"><a href="<?php echo site_url() ?>transaksi">Transaksi</a></li>
						<li class="myaccount-icon"><a href="<?php echo site_url() ?>poin">Poin</a></li>
						<li class="checkout-icon"><a href="<?php echo site_url() ?>invite">Invite</a></li>
						<li class="checkout-icon"><a href="<?php echo site_url() ?>login/logout">Logout</a></li>
				
				<?php 
				}elseif($this->session->userdata('login') == 'customer'){
				?>
						<li class="myaccount-icon"><a href="<?php echo site_url() ?>user/account">My Account</a></li>
						<li class="checkout-icon"><a href="<?php echo site_url() ?>transaksi">Transaksi</a></li>
						<li class="myaccount-icon"><a href="<?php echo site_url() ?>poin">Poin</a></li>
						<li class="checkout-icon"><a href="<?php echo site_url() ?>invite">Invite</a></li>
						<li class="checkout-icon"><a href="<?php echo site_url() ?>login/logout">Logout</a></li>
						
				<?php 
				}else{
				?>
						<li class="checkout-icon"><a href="<?php echo site_url() ?>register">Register</a></li>
						<li class="myaccount-icon"><a href="<?php echo site_url() ?>login">Login</a></li>
						<li class="checkout-icon"><a href="<?php echo site_url() ?>transaksi/cektransaksi">cek transaksi</a></li>
				<?php 
				}
				?>
					</ul>
				
					<div class="cart-top">
						<p><a href="<?php echo site_url() ?>cart"><?php echo $this->cart->total_items() ?> Items</a></p>
					</div>
				
				<!-- END .topbar-right -->
				</div>
			
			<!-- END #top-bar-inner -->
			</div>
		
		<!-- END #top-bar -->
		</div>
		
		<div class="full-shadow"></div>
		
		<!-- BEGIN #header -->
		<div id="header" class="clearfix">
			
			<!-- BEGIN #header-left -->
			<div id="header-left">
			
			<!-- BEGIN #site-title -->
			<div id="site-title">
				<a href="<?php  echo base_url() ?>">
					<h1>Saspazh<span>Store</span></h1>
				</a>
			<!-- END #site-title -->
			</div>
			
			<form method="post" action="<?php echo site_url() ?>product/search/" id="header-search">
				<input type="text" onblur="if(this.value=='')this.value='Search Products...';" onfocus="if(this.value=='Search Products...')this.value='';" value="<?php echo $this->input->post('search') ?>" name="search" />
			</form>
			
			<!-- END #header-left -->
			</div>
			
			<!-- BEGIN #header-right -->
			<div id="header-right">
				
				<div class="icon-area clearfix">
					<img src="<?php  echo base_url() ?>vintage_shop/images/icon-tag.png" alt="" class="icon-image "/>
					<h3>Over 500 Voucher <span>20,000 Poin</span></h3>
				</div>
				
				<div class="icon-area clearfix">
					<img src="<?php  echo base_url() ?>vintage_shop/images/icon-truck.png" alt="" class="icon-image "/>
					<h3>Free Shipping <span>For Orders Over 100k IDR</span></h3>
				</div>
				
				<div class="icon-area clearfix">
					<img src="<?php  echo base_url() ?>vintage_shop/images/icon-clock.png" alt="" class="icon-image "/>
					<h3>24hr Service <span>Free For ID Customers</span></h3>
				</div>
				
			<!-- END #header-right -->
			</div>
					
			<div class="clearboth"></div>
			
			<ul id="main-menu" class="fl">
				
				<li class='<?php echo isActive("")?>'><a href="<?php echo site_url()?>">Home</a></li>
				<li class=''><a href="<?php echo site_url()?>product">Product</a>
					<ul>
						<?
						$data_kategori = $this->db->query("SELECT * 
						FROM  `kategori` 
						ORDER BY  `kategori`.`nama_kategori` ASC ")->result();
						foreach($data_kategori as $kategori){	
						?>
							<li><a href="<? echo site_url() ?>product/kategori/<? echo $kategori->id_kategori ?>" onmouseover="change('Semua','all');" onmouseout="change('All','all')" id='all'><? echo $kategori->nama_kategori ?></a></li>									
						<?
						}
						?>	
					</ul>
				</li>
				<li class='<?php echo isActive("gallery")?>'><a href="<?php echo site_url()?>gallery">Gallery</a></li>					
				<!--
				<li class='<?php echo isActive("distribution")?>'><a href="<?php echo site_url()?>distribution">Distribution</a></li>
				-->
				<li class='<?php echo isActive("contact")?>'><a href="<?php echo site_url()?>contact">Contact</a></li>
				<!--
				<li class='<?php echo isActive("blog")?>'><a href="http://blog.saspazh.com/" target='_blank'>Blog</a></li>
				-->
			</ul>
			
		<!-- END #header -->
		</div>
	
	<!-- END #header-wrapper -->
	</div>