<html>

<head>

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
			<img class="pageBanner" src="<? echo base_url()?>shopper_new/themes/images/pageBanner.png" alt="New products" >
				<h4><span>Product Detail</span></h4>
			</section>
			
			<section class="main-content">				
				<div class="row">						
					<div class="span9">
					<form action='<? echo site_url()?>cart/tambah' method='post'>
						<div class="row">
							<div class="span4">
								<a href="<? echo base_url()?>uploads/<? echo $db->file_name ?>" class="thumbnail" data-fancybox-group="group1" title="Description 1"><img alt="" src="<? echo base_url()?>uploads/<? echo $db->file_name ?>"></a>												
								
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
								
							</div>
							<div class="span5">
								<address>
									<strong>Brand:</strong> <span><? echo $db->nama_barang ?></span><br>
									<strong>Product Code:</strong> <span>#Code</span><br>
									<strong>Reward Points:</strong> <span>0</span><br>
									<strong>Availability:</strong> <span>Ready Stock</span><br>								
								</address>									
								<h4><strong>Price: Rp <? echo $db->price?></strong></h4>
							</div>
							<div class="span5">																
								<form class="form-inline" action='<? echo site_url()?>cart/tambah' method='post' id='myForm'>
									<input name='id_barang' type='hidden' value='<? echo $db->id_barang ?>' />
									<strong>Size:</strong>
									
									<?
									$size = array('S','M','L','XL');

									foreach($size as $asd){
									$ceksize= $this->db->query("SELECT count(id_barang) as jmlstok FROM  `stok` WHERE id_barang ='$db->id_barang' AND size = '$asd'");
									if($ceksize->last_row()->jmlstok==0){
										$status='disabled';
									}else{
										$status='';
									}
									//echo $ceksize->last_row()->jmlstok;
									?>
									<label class="radio">
									  <input name='size' type="radio" onclick='setMax(<? echo $ceksize->last_row()->jmlstok ?>)' <? echo $status?> value="<? echo $asd?>"><? echo $asd?> 
									</label>
									<?
									}
									?>
									
									
								<label class='text'>
								</label>
									
									
								
							<table cellpadding='2' border='0'>	
								<tr>
									<td valign='top'>
									<div class="fb-share-button" data-href="http://saspazh.com/product/detail/<? echo $db->id_barang ?>" data-type="button"></div>
									</td>
									
									<td>
									<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://saspazh.com/product/detail/<? echo $db->id_barang ?>" data-counturl="http://groups.google.com/group/twitter-api-announce" data-lang="en" data-count="none" data-via='saspazh'></a>
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
														<a href="<? echo site_url()?>product/detail/<? echo $best->id_barang ?>"><img alt="" src="<? echo base_url()?>uploads/<? echo $best->file_name ?>"></a><br/>
														<a href="<? echo site_url()?>product/detail/<? echo $best->id_barang ?>" class="title"><? echo $best->nama_barang?></a><br/>
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
						<!--
						<div class="block">	
							<ul class="nav nav-list">
								<li class="nav-header">SUB CATEGORIES</li>
								<li><a href="products.html">Nullam semper elementum</a></li>
								<li class="active"><a href="products.html">Phasellus ultricies</a></li>
								<li><a href="products.html">Donec laoreet dui</a></li>
								<li><a href="products.html">Nullam semper elementum</a></li>
								<li><a href="products.html">Phasellus ultricies</a></li>
								<li><a href="products.html">Donec laoreet dui</a></li>
							</ul>
							<br/>
							<ul class="nav nav-list below">
								<li class="nav-header">MANUFACTURES</li>
								<li><a href="products.html">Adidas</a></li>
								<li><a href="products.html">Nike</a></li>
								<li><a href="products.html">Dunlop</a></li>
								<li><a href="products.html">Yamaha</a></li>
							</ul>
						</div>
						-->
						<div class="block">
							<h4 class="title">
								<span class="pull-left"><span class="text">Randomize</span></span>
								<span class="pull-right">
									<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
								</span>
							</h4>
							<div id="myCarousel" class="carousel slide">
								<div class="carousel-inner">
									<?
									$active=1;
									foreach($data_best as $best){
									?>
									<div class=" <? if($active==1){ ?>active item<?}else{?>item<?}?>">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">
													<span class="sale_tag"></span>												
													<a href="<? echo site_url()?>product/detail/<? echo $best->id_barang ?>"><img alt="" src="<? echo base_url()?>uploads/<? echo $best->file_name ?>"></a><br/>
													<a href="<? echo site_url()?>product/detail/<? echo $best->id_barang ?>" class="title"><? echo $best->nama_barang?></a><br/>
													<a href="#" class="category">Suspendisse aliquet</a>
													<p class="price">Rp <? echo $best->price?></p>
												</div>
											</li>
										</ul>
									</div>
									<?
									$active++;
									}
									?>
									<div class="item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">												
													<a href="product_detail.html"><img alt="" src="<? echo base_url()?>shopper_new/themes/images/ladies/8.jpg"></a><br/>
													<a href="product_detail.html" class="title">Tempor sem sodales</a><br/>
													<a href="#" class="category">Urna nec lectus mollis</a>
													<p class="price">$134</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="block">								
							<h4 class="title"><strong>Best</strong> Seller</h4>								
							<ul class="small-product">
								<?
								foreach($data_best as $best){
								?>
								<li>
									<a href="<? echo site_url()?>product/detail/<? echo $best->id_barang ?>" title="<? echo $best->nama_barang ?>">
										<img src="<? echo base_url()?>uploads/<? echo $best->file_name ?>" alt="<? echo $best->nama_barang ?>">
									</a>
									<a href="<? echo site_url()?>product/detail/<? echo $best->id_barang ?>"><? echo $best->nama_barang ?></a>
								</li>
								<?
								}
								?>
							</ul>
						</div>
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