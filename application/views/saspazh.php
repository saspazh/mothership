<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><? echo $title ?></title>
		
		<meta name="Author" content="Saspazh">
		<meta name="Keywords" content=" cloth, tshirt, style, apparel, flannel, label, smooth, cool, skate, fashion, lifestyle, future, future lifestyle">
		<meta name="Robots" content="ALL, INDEX, FOLLOW">
		
		<meta name="alexaVerifyID" content="gyGhj_SYueZlkYRgJs1nfi0I_N4"/>
		<meta name="google-site-verification" content="AXhy0yjMabZPtocySuP0zPk8yUsC92IRfT3ztNAAZ1A" />
		<meta name="msvalidate.01" content="79049B4088C88647F28945FD8E162F49" />
 		
		
			<!--meta sosial media-->
			<meta name="Description" content="Saspazh is a fashion brand founded by Fadhli maulidri. the expectation would like to give satisfactory clothing products for people in all walks of life"> 
		 

			<!-- Google Authorship and Publisher Markup --> 
			<link rel="author" href="https://plus.google.com/u/0/103557601953182307498/posts"/> 
			<link rel="publisher" href="https://plus.google.com/u/0/101786212644420072947"/> 

			<!-- Schema.org markup for Google+ --> 
			<meta itemprop="name" content="The Name or Title Here"> 
			<meta itemprop="description" content="This is the page description"> 
			<meta itemprop="image" content="http://www.example.com/image.jpg"> 

			<!-- Twitter Card data --> 
			<meta name="twitter:card" content="summary_large_ image"> 
			<meta name="twitter:site" content="@publisher_handle"> 
			<meta name="twitter:title" content="Page Title"> 
			<meta name="twitter:description" content="Page description less than 200 characters"> 
			<meta name="twitter:creator" content="@author_handle"> 

			<!-- Twitter summary card with large image must be at least 280x150px --> 
			<meta name="twitter:image:src" content="http://www.example.com/image.html"> 

			<!-- Open Graph data --> 
			<meta property="og:title" content="Title Here" /> 
			<meta property="og:type" content="article" /> 
			<meta property="og:url" content="http://www.example.com/" /> 
			<meta property="og:image" content="http://example.com/image.jpg" /> 
			<meta property="og:description" content="Description Here" /> 
			<meta property="og:site_name" content="Site Name" /> 
			<meta property="article:section" content="Article Section" /> 
			<meta property="article:tag" 
			content="Article Tag" /> 
			<meta property="fb:admins" content="Facebook numberic ID" />
			<!--end meta social media-->
		
		
		
		
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<link rel="shortcut icon" href="<? echo base_url() ?>saspazh/img/logo.png" type="image/x-icon" />
		<!-- bootstrap -->

		<link href="<? echo base_url()?>shopper_new/bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="<? echo base_url()?>shopper_new/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">		
		<link href="<? echo base_url()?>shopper_new/themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="<? echo base_url()?>shopper_new/themes/css/flexslider.css" rel="stylesheet"/>
		<link href="<? echo base_url()?>shopper_new/themes/css/main.css" rel="stylesheet"/>
		
		<link href="<? echo base_url()?>shopper_new/themes/css/jquery.fancybox.css" rel="stylesheet"/>
		
		<!-- scripts -->
		<script src="<? echo base_url()?>shopper_new/themes/js/jquery-1.7.2.min.js"></script>
		<script src="<? echo base_url()?>shopper_new/bootstrap/js/bootstrap.min.js"></script>				
		<script src="<? echo base_url()?>shopper_new/themes/js/superfish.js"></script>	
		<script src="<? echo base_url()?>shopper_new/themes/js/jquery.scrolltotop.js"></script>
		<script src="<? echo base_url()?>shopper_new/themes/js/jquery.fancybox.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
		
		

	</head>
    <body>		
		<div id="top-bar" class="container" style="background-color:#000000;" >
			<div class="row" >

				<div class="span4">
					<a href="<? echo base_url()?>" class="logo pull-left"><img src="<? echo base_url()?>shopper_new/themes/images/logo.png" class="site_logo" alt=""></a>
					
				</div>
				<div class="span8">
					
					<?
					if($this->session->userdata('login_customer') == TRUE){
					?>
					<div class="account pull-right">
						<ul class="user-menu">				
							<li><a href="<? echo base_url() ?>user/account/<? echo $this->session->userdata('username') ?>"><font color='#ffffff'>My Account (<? echo $this->session->userdata('username')?>)</font></a></li>
							<li><a href="<? echo base_url() ?>myorder"><font color='#ffffff'>My Order</font></a></li>
							<?
							if($this->cart->total_items() == 0){
							}else{
							?>	
							<li><a href="<? echo base_url()?>cart"><font color='#ffffff'><? echo $this->cart->total_items()?> item, Rp. <?php echo $this->cart->format_number($this->cart->total()); ?></font></a></li>		
							<?
							}
							?>
							<li><a href="<? echo base_url()?>user/logout"><font color='#ffffff'>Logout</a></font></li>
						</ul>
					</div>
					<?
					}else{
					?>
					<div class="account pull-right">
						<ul class="user-menu">				
							<li ><a href="<? echo base_url()?>register"><font color='#ffffff'>Login | Register</font></a></li>
							<?
							if($this->cart->total_items() == 0){
							}else{
							?>	
							<li><a href="<? echo base_url()?>cart"><font color='#ffffff'><? echo $this->cart->total_items()?> item, Rp. <?php echo $this->cart->format_number($this->cart->total()); ?></font></a></li>		
							<?
							}
							?>
						</ul>
					</div>
					<?
					}
					?>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					
					<nav id="menu" class="pull-right">
						<ul>
							<li class=''><a href="<?php echo site_url()?>">Home</a></li>			
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
							<li>					
							<li class=''><a href="<?php echo site_url()?>gallery">Gallery</a></li>					
							<li class=''><a href="<?php echo site_url()?>distribution">Distribution</a></li>
							<li class=''><a href="<?php echo site_url()?>contact">Contact</a></li>
							<li class=''><a href="http://blog.saspazh.com/" target='_blank'>Blog</a></li>
						</ul>
					</nav>
				</div>
			</section>
			
			
			<!--===============================================================================-->
			<?
			$this->load->view($page);
			?>
			<!--===============================================================================-->
			
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="<? echo site_url()?>">Home</a></li>  
							<li><a href="<? echo site_url()?>product">Product</a></li>
							<li><a href="<? echo site_url()?>gallery">Gallery</a></li>
							<li><a href="<? echo site_url()?>distribution">Distribution</a></li>
							<li><a href="<? echo site_url()?>contact">Contact</a></li>
							<li><a href="http://blog.saspazh.com/" target='_blank'>Blog</a></li>
							
						</ul>					
					</div>
					<div class="span4">
						<h4>My Account</h4>
						<ul class="nav">
							<!--
							<li><a href="#">Newsletter</a></li>
							<li><a href="#">Wish List</a></li>
							-->
							
					<?
					if($this->session->userdata('login_customer') == TRUE){
					?>
									
							<li><a href="<? echo base_url() ?>user/account/<? echo $this->session->userdata('username') ?>"><font color='#ffffff'>My Account (<? echo $this->session->userdata('username')?>)</font></a></li>
							<li><a href="<? echo base_url() ?>myorder"><font color='#ffffff'>My Order</font></a></li>
							<?
							if($this->cart->total_items() == 0){
							}else{
							?>	
							<li><a href="<? echo base_url()?>cart"><font color='#ffffff'><? echo $this->cart->total_items()?> item, Rp. <?php echo $this->cart->format_number($this->cart->total()); ?></font></a></li>		
							<?
							}
							?>
							<li><a href="<? echo base_url()?>user/logout"><font color='#ffffff'>Logout</a></font></li>
						
					<?
					}else{
					?>
							<li ><a href="<? echo base_url()?>register"><font color='#ffffff'>Login | Register</font></a></li>
							<?
							if($this->cart->total_items() == 0){
							
							}else{
							?>	
							<li><a href="<? echo base_url()?>cart"><font color='#ffffff'><? echo $this->cart->total_items()?> item, Rp. <?php echo $this->cart->format_number($this->cart->total()); ?></font></a></li>		
							<?
							}
							?>
					<?
					}
					?>
							
							
							
						</ul>
					</div>
					<div class="span5">
						<p class="logo"><img src="<? echo base_url()?>shopper_new/themes/images/logo.png" class="site_logo" alt=""></p>
						<strong>Made In Indonesia.</strong>
						<br/>
							<a class="facebook" target='_blank' href="https://www.facebook.com/saspazh">Facebook</a><br/>
							<a class="instagram" target='_blank' href="http://instagram.com/saspazh">Instagram</a><br/>
							<a class="twitter" target='_blank' href="https://twitter.com/saspazh">Twitter</a>
							<!--
							<a class="skype" href="#">Skype</a>
							<a class="vimeo" href="#">Vimeo</a>
							-->
					</div>					
					
				</div>	
			</section>
			<section id="copyright">
				<span>Copyright 2013 bootstrappage template  All right reserved.</span>
			</section>
		</div>

		<script src="<? echo base_url()?>shopper_new/themes/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>
    </body>
</html>