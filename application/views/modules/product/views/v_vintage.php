	<!-- BEGIN #content-wrapper -->
	<div id="content-wrapper" class="clearfix">
		
		<!-- BEGIN #main-content -->
		<div id="main-content">
			
			<h2 class="page-title"><?php echo $judul ?></h2>
			<div class="shadow-wrapper margin1">
				<div class="left-shadow"></div>
				<div class="mid-shadow"></div>
				<div class="right-shadow"></div>
			</div>
			
			<!-- BEGIN .product-4columns -->
			<ul class="products-4columns clearfix section">
				
				<?php
				foreach($data_list as $baris){
				?>
				<li>
					<div class="product-wrapper">
						<div class="product-inner">
							<a href="<?php echo base_url()?>product/detail/<?php echo $baris->id_product ?>/<?php echo $baris->slug ?>"><img src="<?php echo base_url()?><?php echo $baris->path ?>/<?php echo $baris->file_name ?>" alt="" /></a>
						</div>
					</div>
					<h4>
						<a href="<?php echo base_url()?>product/detail/<?php echo $baris->id_product ?>/<?php echo $baris->slug ?>"><?php echo $baris->nama_product?></a>
					</h4>
					<p class="product-price">
						<!--
						<del>
							<span>Rp. 230000</span>
						</del>
					    -->
						<ins>
							<span>Rp. <?php echo number_format($baris->price) ?></span>
						</ins>
					</p>
					<p class="product-button clearfix"><a href="<?php echo base_url()?>product/detail/<?php echo $baris->id_product ?>/<?php echo $baris->slug ?>" class="button1">Add to Cart</a></p>
				</li>
				<?php
				}
				?>

				
			<!-- END .product-4columns -->
			</ul>

			<div class="shadow-wrapper margin3">
				<div class="left-shadow"></div>
				<div class="mid-shadow"></div>
				<div class="right-shadow"></div>
			</div>
				
			<!--BEGIN .page-pagination -->
			<div class="page-pagination">

				<p class="clearfix">
					<span class="fl"><a href="#">&larr; Previous Page</a></span>
					<span class="fr"><a href="#">Next Page &rarr;</a></span>
				</p>

			<!--END .page-pagination -->
			</div>

		<!-- END #main-content -->
		</div>
		
		<?php 
		$this->load->view('vintage/sidebar.php');
		?>
	
	<!-- END #content-wrapper -->
	</div>