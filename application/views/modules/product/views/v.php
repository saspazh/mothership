<section class="header_text sub">
				<h4><span><? echo $judul ?></span></h4>
			</section>
			<section class="main-content">
				
				<div class="row">						
					<div class="span9">								
						<ul class="thumbnails listing-products">
							
							<?
							foreach($data_list as $baris){
							?>	
							<li class="span3">
								<div class="product-box">
									<span class="sale_tag"></span>
									<p><a href="<? echo base_url()?>product/detail/<? echo $baris->id_product ?>/<? echo $baris->slug ?>"><img src="<? echo base_url()?><? echo $baris->path ?>/<? echo $baris->file_name ?>" alt="" /></a></p>
									<a href="<? echo base_url()?>product/detail/<? echo $baris->id_product ?>/<? echo $baris->slug ?>" class="title"><? echo $baris->nama_product?></a><br/>
									<a href="<? echo base_url()?>product/kategori/<? echo $baris->id_kategori ?>" class="category"><? echo $baris->nama_kategori?></a>
									<p class="price">Rp <? echo $baris->price?></p>
								</div>
							</li>
							<?
							}
							?>
						
						</ul>								
						<hr>
						<div class="pagination pagination-small pagination-centered">
							<ul>
								<li><a href="#">Prev</a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">Next</a></li>
							</ul>
						</div>
					</div>
					<div class="span3 col">
						
						
						<?
						$this->load->view('sidebar/categories');
						$this->load->view('sidebar/randomize');
						$this->load->view('sidebar/best');
						?>
						
					</div>
				</div>
			</section>
			<script src="<? echo base_url()?>shopper_new/themes/js/common.js"></script>