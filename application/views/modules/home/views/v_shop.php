<!-- BEGIN #content-wrapper -->
	<div id="content-wrapper" class="clearfix">
	
<!-- BEGIN #main-content -->
		<div id="main-content">
			
			<div class="slider-border">
			
			<!-- BEGIN .slider -->
			<div class="slider clearfix">
				<ul class="slides">
					
					<?php
					foreach ($slideshow as $key => $value) {
					
					?>
					<li>
						<img src="<?php echo base_url() ?><?php echo $value->path ?><?php  echo $value->image ?>" alt="" />
						<div class="flex-caption">
							<?php
							echo $value->title;
							?>
						</div>
					</li>
					
					<?php
					} 
					?>

				</ul>
			<!-- END .slider -->
			</div>
			
			</div>
			
			<!--
			<h2 class="intro-text">Disc Upto 50% by poin, Lets Check your Account</h2>
			-->

		<?php
		foreach ($popular as $key => $value) {
		?>

			<div class="tag-title-wrap clearfix">
				<h3 class="tag-title-large"><?php echo $value->name_popular ?></h3>
			</div>
			
			<!-- BEGIN .product-4columns -->
			<ul class="products-4columns clearfix section">
				
				<?php
				
				$popular_product = $this->m_home->get_popular_product($value->id_popular);

				//$popular_product=$this->db->query($str);

				foreach ($popular_product as $key => $value) {
				?>
				
				<li>
					<div class="product-wrapper">
						<div class="product-inner">
							<a href="<?php  echo base_url()?>product/detail/<?php  echo $value->id_product ?>/<?php  echo $value->url_suffix ?>"><img src="<?php  echo base_url()?><?php  echo $value->path ?><?php  echo $value->file_name ?>" alt="" /></a>
						</div>
					</div>
					<h4>
						<a href="<?php  echo base_url()?>product/detail/<?php  echo $value->id_product ?>/<?php  echo $value->url_suffix ?>"><?php  echo $value->nama_product?></a>
					</h4>
					<p class="product-price">
						<!--
						<del>
							<span>Rp. <?php  echo number_format($value->price)?></span>
						</del>
						<br>
						-->
						<ins>
							<span>Rp. <?php  echo number_format($value->price)?></span>
						</ins>
					</p>
					<p class="product-button clearfix"><a href="<?php  echo base_url()?>product/detail/<?php  echo $value->id_product ?>/<?php  echo $value->url_suffix ?>" class="button1">Add to Cart</a></p>
				</li>
				
				<?php 
				}
				?>
				
				
			
			<!-- END .product-4columns -->
			</ul>
		<?php
		}
		?>


			<div class="tag-title-wrap clearfix">
				<h3 class="tag-title-large">Favorite</h3>
			</div>
			
			<!-- BEGIN .product-4columns -->
			<ul class="products-4columns clearfix section">
				
				<?php 
				foreach($latest as $baris){
				?>
				
				<li>
					<div class="product-wrapper">
						<div class="product-inner">
							<a href="<?php  echo base_url()?>product/detail/<?php  echo $baris->id_product ?>/<?php  echo $baris->url_suffix ?>"><img src="<?php  echo base_url()?><?php  echo $baris->path ?><?php  echo $baris->file_name ?>" alt="" /></a>
						</div>
					</div>
					<h4>
						<a href="<?php  echo base_url()?>product/detail/<?php  echo $baris->id_product ?>/<?php  echo $baris->url_suffix ?>"><?php  echo $baris->nama_product?></a>
					</h4>
					<p class="product-price">
						<!--
						<del>
							<span><?php //  echo $baris->price?> IDR</span>
						</del>
						-->
						<br>
						<ins>
							<span>Rp. <?php  echo $baris->price?></span>
						</ins>
					</p>
					<p class="product-button clearfix"><a href="<?php  echo base_url()?>product/detail/<?php  echo $baris->id_product ?>/<?php  echo $baris->url_suffix ?>" class="button1">Add to Cart</a></p>
				</li>
				
				<?php 
				}
				?>
				
				
			<!-- END .product-4columns -->
			</ul>
			
		<!-- END #main-content -->
		</div>
		
		<?php 
		$this->load->view('vintage/sidebar.php');
		?>
		
	<!-- END #content-wrapper -->
	</div>	