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
						<strong>We Are Born With A TRUST</strong>
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
		