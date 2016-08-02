			
			<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="<? echo base_url()?>slide/<? echo 'collections-tshirt-saspazh-highlight.jpg' ?>" width='960px' height='330px' alt="collections-tshirt-saspazh-highlight" />
						</li>
						
						<li>
							<img src="<? echo base_url()?>slide/<? echo 'collection-tshirt-saspazh-highlight.jpg' ?>" width='960px' height='330px' alt="collection-tshirt-saspazh-highlight" />
						</li>

						<!--
						<li>
							<img src="<? echo base_url()?>shopper_new/themes/images/carousel/banner-1.jpg" alt="" />
						</li>
						<li>
							<img src="<? echo base_url()?>shopper_new/themes/images/carousel/banner-2.jpg" alt="" />
							<div class="intro">
								<h1>Mid season sale</h1>
								<p><span>Up to 50% Off</span></p>
								<p><span>On selected items online and in stores</span></p>
							</div>
						</li>
						-->
					</ul>
				</div>			
			</section>
			
			<section class="header_text">
				
			</section>
			
			
			<section class="main-content">
				<div class="row">
					<div class="span12">													
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Product</span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
											<?
											foreach($product as $baris){
											?>	
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="<? echo base_url()?>product/detail/<? echo $baris->id_product ?>/<? echo $baris->url_suffix ?>"><img src="<? echo base_url()?><? echo $baris->path ?><? echo $baris->file_name ?>" alt="" /></a></p>
														<a href="<? echo base_url()?>product/detail/<? echo $baris->id_product ?>/<? echo $baris->url_suffix ?>" class="title"><? echo $baris->nama_product?></a><br/>
														<a href="<? echo base_url()?>product/kategori/<? echo $baris->id_kategori ?>" class="category"><? echo $baris->nama_kategori?></a>
														<p class="price">Rp <? echo $baris->price?></p>
													</div>
												</li>
											<?
											}
											?>
											
											</ul>
										</div>
										
										<div class="item">
											<ul class="thumbnails">
											<?
											foreach($products as $baris){
											?>	
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="<? echo base_url()?>product/detail/<? echo $baris->id_product ?>/<? echo $baris->url_suffix ?>"><img src="<? echo base_url()?><? echo $baris->path ?><? echo $baris->file_name ?>" alt="" /></a></p>
														<a href="<? echo base_url()?>product/detail/<? echo $baris->id_product ?>/<? echo $baris->url_suffix ?>" class="title"><? echo $baris->nama_product?></a><br/>
														<a href="<? echo base_url()?>product/kategori/<? echo $baris->id_kategori ?>" class="category"><? echo $baris->nama_kategori?></a>
														<p class="price">Rp <? echo $baris->price?></p>
													</div>
												</li>
											<?
											}
											?>
											
											</ul>
										</div>
										
									</div>							
								</div>
							</div>						
						</div>
						<br/>
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Latest <strong>Products</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-2" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<?
												foreach($latest as $bari){
												?>	
													<li class="span3">
														<div class="product-box">
															<span class="sale_tag"></span>
															<p><a href="<? echo base_url()?>product/detail/<? echo $bari->id_product?>/<? echo $bari->url_suffix?>"><img src="<? echo base_url()?><? echo $bari->path ?><? echo $bari->file_name ?>" alt="" /></a></p>
															<a href="<? echo base_url()?>product/detail/<? echo $bari->id_product?>/<? echo $bari->url_suffix?>" class="title"><? echo $bari->nama_product?></a><br/>
															<a href="<? echo base_url()?>/product/kategori/<? echo $bari->id_kategori?>" class="category"><? echo $bari->nama_kategori?></a>
															<p class="price">Rp <? echo $bari->price?></p>
														</div>
													</li>
												<?
												}
												?>
												
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
												<?
												foreach($latests as $bari){
												?>	
													<li class="span3">
														<div class="product-box">
															<span class="sale_tag"></span>
															<p><a href="<? echo base_url()?>product/detail<? echo $bari->id_product ?>/<? echo $bari->url_suffix?>"><img src="<? echo base_url()?><? echo $bari->path ?><? echo $bari->file_name ?>" alt="" /></a></p>
															<a href="<? echo base_url()?>product/detail<? echo $bari->id_product ?>/<? echo $bari->url_suffix?>" class="title"><? echo $bari->nama_product?></a><br/>
															<a href="<? echo base_url()?>product/kategori/<? echo $bari->id_kategori?>" class="category"><? echo $bari->nama_kategori?></a>
															<p class="price">Rp <? echo $bari->price?></p>
														</div>
													</li>
												<?
												}
												?>
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>
						<!--
						<div class="row feature_box">						
							<div class="span4">
								<div class="service">
									<div class="responsive">	
										<img src="<? echo base_url()?>shopper_new/themes/images/feature_img_2.png" alt="" />
										<h4>MODERN <strong>DESIGN</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>									
									</div>
								</div>
							</div>
							<div class="span4">	
								<div class="service">
									<div class="customize">			
										<img src="<? echo base_url()?>shopper_new/themes/images/feature_img_1.png" alt="" />
										<h4>FREE <strong>SHIPPING</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
									</div>
								</div>
							</div>
							<div class="span4">
								<div class="service">
									<div class="support">	
										<img src="<? echo base_url()?>shopper_new/themes/images/feature_img_3.png" alt="" />
										<h4>24/7 LIVE <strong>SUPPORT</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
									</div>
								</div>
							</div>	
						</div>		
					</div>				
				</div>
			</section>
			<section class="our_client">
				<h4 class="title"><span class="text">Manufactures</span></h4>
				<div class="row">					
					<div class="span2">
						<a href="#"><img alt="" src="<? echo base_url()?>shopper_new/themes/images/clients/14.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="<? echo base_url()?>shopper_new/themes/images/clients/35.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="<? echo base_url()?>shopper_new/themes/images/clients/1.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="<? echo base_url()?>shopper_new/themes/images/clients/2.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="<? echo base_url()?>shopper_new/themes/images/clients/3.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="<? echo base_url()?>shopper_new/themes/images/clients/4.png"></a>
					</div>
				</div>
			</section>
			-->
			<script src="<? echo base_url()?>shopper_new/themes/js/common.js"></script>