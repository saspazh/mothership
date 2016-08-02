<!DOCTYPE html>
<html lang="en">
	<?
	$this->load->view('header.php');
	?>
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
							</li>					
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
			
			$this->load->view('footer.php');
			?>
			
			
		</div>
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