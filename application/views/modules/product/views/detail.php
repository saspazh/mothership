<html>

	<head>

	<meta property="og:title" content="Saspazh | <? echo $db->nama_product ?>" />
	<meta property="og:description" content="Made In Indonesia" />
	<meta property="og:image" content="<? echo base_url()?>uploads/<? echo $db->file_name ?>" />

	<!--
	<link rel="image_src" href=" echo base_url() saspazh/img/logo.png" />
	-->

	<script type="text/javascript">
	function setMax(size){
		document.getElementById('qty').max = size;
		document.getElementById('max').value = size;
	//	document.attr('qty').val = size;
	}

	</script>


	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=710939552279508";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>

	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

	<head>


<body>


<div id="fb-root"></div>



			<section class="header_text sub">
			<a href='<? echo base_url() ?>product/kategori/4'>
			<img class="pageBanner" src="<? echo base_url()?>uploads/flannel-shirt-saspazh.jpg" href='<? echo base_url() ?>product/detail/13' height='100px' alt="New products" >
			</a>
			<h4><span>Product Detail</span></h4>
			</section>
			
			<section class="main-content">				
				<div class="row">						
					<div class="span9">
					<form action='<? echo site_url()?>cart/tambah' method='post'>
						<div class="row">
							<div class="span4">
								<a href="<? echo base_url()?><? echo $db->path ?>/<? echo $db->file_name ?>" class="thumbnail" data-fancybox-group="group1" title="Description 1"><img alt="" src="<? echo base_url()?><? echo $db->path ?>/<? echo $db->file_name ?>"></a>												
								<!--
								<ul class="thumbnails small">								
									<li class="span1">
										<a href="<? echo base_url()?>uploads/<? echo $db->file_name ?>" class="thumbnail" data-fancybox-group="group1" title="Description 1"><img src="<? echo base_url()?>uploads/<? echo $db->file_name ?>" alt=""></a>
									</li>								
									<li class="span1">
										<a href="<? echo base_url()?>uploads/<? echo $db->file_name ?>" class="thumbnail" data-fancybox-group="group1" title="Description 2"><img src="<? echo base_url()?>uploads/<? echo $db->file_name ?>" alt=""></a>
									</li>													
									<li class="span1">
										<a href="<? echo base_url()?>uploads/<? echo $db->file_name ?>" class="thumbnail" data-fancybox-group="group1" title="Description 3"><img src="<? echo base_url()?>uploads/<? echo $db->file_name ?>" alt=""></a>
									</li>
									<li class="span1">
										<a href="<? echo base_url()?>uploads/<? echo $db->file_name ?>" class="thumbnail" data-fancybox-group="group1" title="Description 4"><img src="<? echo base_url()?>uploads/<? echo $db->file_name ?>" alt=""></a>
									</li>
								</ul>
								-->
							</div>
							<div class="span5">
								<address>
									<strong>Brand:</strong> <span><? echo $db->nama_barang ?></span><br>
									<strong>Product Code:</strong> <span>#Code</span><br>
									<strong>Reward Points:</strong> <span>0</span><br>
									<strong>Availability:</strong> <span>Ready Stock</span><br>								
									<strong>tag:</strong> <span><? echo $db->tag ?></span><br>								
								</address>									
								<h4><strong>Price : Rp <? echo $db->price ?></strong></h4>
							</div>
							<div class="span5">																
								<form class="form-inline" action='<? echo site_url()?>cart/tambah' method='post' id='myForm'>
									<input name='id_product' type='hidden' value='<? echo $db->id_product ?>' />
									<strong>Size:</strong>
									
									<?
									
									foreach($size as $asd){
										
										$ceksize= $this->db->query("SELECT count(id_barang) as jmlstok FROM  `stok` WHERE id_barang ='$asd->id_barang'");
										if($ceksize->last_row()->jmlstok==0){
											$status='disabled';
										}else{
											$status='';
										}
									//echo $ceksize->last_row()->jmlstok;
									?>
									<label class="radio">
									  <input name='size' type="radio" onclick='setMax(<? echo $ceksize->last_row()->jmlstok ?>)' <? echo $status?> value="<? echo $asd->size ?>"><? echo $asd->size ?> 
									</label>
									<?
									}
									?>
									
									
								<label class='text'>
								</label>
									
									
								
							<table cellpadding='2' border='0'>	
								<tr>
									<!--
									<td>
									<?php
									$title=urlencode('Title of Your iFrame Tab');
									$url=urlencode('http://www.facebook.com/wordpressdesign');
									$summary=urlencode('Custom message that summarizes what your tab is about, or just a simple message to tell people to check out your tab.');
									$image=urlencode('http://www.yourdomain.com/images/share-thumbnail.jpg');
									?>
									<a onClick="window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php echo $title;?>&amp;p[summary]=<?php echo $summary;?>&amp;p[url]=<?php echo $url; ?>&amp;p[images][0]=<?php echo $image;?>','sharer','toolbar=0,status=0,width=548,height=325');" href="javascript: void(0)">Insert text or an image here.</a>
									</td>
									-->

									<td valign='top'>
									<div class="fb-share-button" data-href="http://saspazh.com/product/detail/<? echo $db->id_product ?>" data-type="button"></div>
									</td>
									
									<td>
									<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://saspazh.com/product/detail/<? echo $db->id_product ?>" data-counturl="http://groups.google.com/group/twitter-api-announce" data-lang="en" data-count="none" data-via='saspazh'></a>
									</td>
								</tr>
							</table>	
								
									<p>&nbsp;</p>
									<label>Qty:</label>
									<label class='text'>
										<input name='qty' type="number" min='0' value='1' class="span1" id='qty'>
										<input name='max' type="hidden" id='max'>
									</label>
									
									<button class="btn btn-inverse" type="submit">Add to cart</button>
								</form>
							</div>							
						</div>
						<div class="row">
							<div class="span9">
								<ul class="nav nav-tabs" id="myTab">
									<li class="active"><a href="#home">Description</a></li>
									<li class=""><a href="#profile">Additional Information</a></li>
								</ul>							 
								<div class="tab-content">
									<div class="tab-pane active" id="home"><? echo $db->description?></div>
									<div class="tab-pane" id="profile">
										<table class="table table-striped shop_attributes">	
											<tbody>
												<tr class="">
													<th>Size</th>
													<td>Large, Medium, Small, X-Large</td>
												</tr>		
												<tr class="alt">
													<th>Colour</th>
													<td><? echo $db->color?></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>							
							</div>
							
							<div class="span9">	
								<br>
								<h4 class="title">
									<span class="pull-left"><span class="text"><strong>Related</strong> Products</span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-1" data-slide="prev"></a><a class="right button" href="#myCarousel-1" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-1" class="carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails listing-products">
												<?
												foreach($data_best as $best){
												?>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<a href="<? echo site_url()?>product/detail/<? echo $best->id_product ?>"><img alt="" src="<? echo base_url()?>uploads/<? echo $best->file_name ?>"></a><br/>
														<a href="<? echo site_url()?>product/detail/<? echo $best->id_product ?>" class="title"><? echo $best->nama_product?></a><br/>
														<a href="#" class="category">Suspendisse aliquet</a>
														<p class="price">Rp <? echo $best->price?></p>
													</div>
												</li>
												<?
												}
												?>       												
											</ul>
										</div>
										
										
										
										<div class="item">
											<ul class="thumbnails listing-products">
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<a href="product_detail.html"><img alt="" src="<? echo base_url()?>shopper_new/themes/images/ladies/1.jpg"></a><br/>
														<a href="product_detail.html" class="title">Fusce id molestie massa</a><br/>
														<a href="#" class="category">Phasellus consequat</a>
														<p class="price">$341</p>
													</div>
												</li>       
												<li class="span3">
													<div class="product-box">												
														<a href="product_detail.html"><img alt="" src="<? echo base_url()?>shopper_new/themes/images/ladies/2.jpg"></a><br/>
														<a href="product_detail.html">Praesent tempor sem</a><br/>
														<a href="#" class="category">Erat gravida</a>
														<p class="price">$28</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<a href="product_detail.html"><img alt="" src="<? echo base_url()?>shopper_new/themes/images/ladies/3.jpg"></a><br/>
														<a href="product_detail.html" class="title">Wuam ultrices rutrum</a><br/>
														<a href="#" class="category">Suspendisse aliquet</a>
														<p class="price">$341</p>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="span3 col">
						<?
//						$this->load->view('sidebar/randomize');
//						$this->load->view('sidebar/best');
						?>
					</div>
				</div>
			</section>			
			
		<script src="<? echo base_url()?>shopper_new/themes/js/common.js"></script>	
		<script>
			$(function () {
				$('#myTab a:first').tab('show');
				$('#myTab a').click(function (e) {
					e.preventDefault();
					$(this).tab('show');
				})
			})
			$(document).ready(function() {
				$('.thumbnail').fancybox({
					openEffect  : 'none',
					closeEffect : 'none'
				});
				
				$('#myCarousel-2').carousel({
                    interval: 2500
                });								
			});
		</script>
</body>

</html>