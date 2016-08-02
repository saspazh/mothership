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


<!-- BEGIN #content-wrapper -->
	<div id="content-wrapper" class="clearfix">
		
		<!-- BEGIN #main-content -->
		<div id="main-content">
			
			<h2 class="page-title"><? echo $db->nama_product ?></h2>
			<div class="shadow-wrapper margin1">
				<div class="left-shadow"></div>
				<div class="mid-shadow"></div>
				<div class="right-shadow"></div>
			</div>
			
			
			<ul class="columns-2 shop-single-columns-2 clearfix">
				<li class="col2">
					
					<a class="cloud-zoom" href="<? echo base_url()?><? echo $db->path ?>/<? echo $db->file_name ?>" id="zoom1" rel="adjustX: 10, adjustY:-4">
						<img src="<? echo base_url()?><? echo $db->path ?>/<? echo $db->file_name ?>" alt="" />
					</a>
<!--
					<ul id="mycarousel" class="jcarousel-skin-tango">
						<li>
							<a class="cloud-zoom-gallery" href="<? echo base_url() ?>vintage_shop/images/05_demo-product-xlarge.png" rel="useZoom: 'zoom1', smallImage: 'images/04_demo-product-large.png' ">
								<img src="<? echo base_url() ?>vintage_shop/images/01_demo-product-carousel.png" alt="" />
							</a>
						</li>
						<li>
							<a class="cloud-zoom-gallery" href="<? echo base_url() ?>vintage_shop/images/05_demo-product-xlarge.png" rel="useZoom: 'zoom1', smallImage: 'images/04_demo-product-large.png' ">
								<img src="<? echo base_url() ?>vintage_shop/images/01_demo-product-carousel.png" alt="" />
							</a>
						</li>
						<li>
							<a class="cloud-zoom-gallery" href="<? echo base_url() ?>vintage_shop/images/05_demo-product-xlarge.png" rel="useZoom: 'zoom1', smallImage: 'images/04_demo-product-large.png' ">
								<img src="<? echo base_url() ?>vintage_shop/images/01_demo-product-carousel.png" alt="" />
							</a>
						</li>
						<li>
							<a class="cloud-zoom-gallery" href="<? echo base_url() ?>vintage_shop/images/05_demo-product-xlarge.png" rel="useZoom: 'zoom1', smallImage: 'images/04_demo-product-large.png' ">
								<img src="<? echo base_url() ?>vintage_shop/images/01_demo-product-carousel.png" alt="" />
							</a>
						</li>
					</ul>
-->						
				</li>

					
				<li class="col2">
					
					<h2>
						<span class="price-now">Rp. <?php echo number_format($db->price) ?></span>
						<!--
						<span class="price-original"><? echo $db->price ?> IDR</span>
						-->
					</h2>
					
					<div class="page-content">
						<p><?php echo $db->description ?></p>
					</div>
					
					<hr>
					
					<form class="qty-product-single clearfix" action="<? echo site_url()?>cart/tambah" method="post">
						<input name='id_product' type='hidden' value='<? echo $db->id_product ?>' />
					
						<div class="clearfix" style="margin: 20px 0 20px 0;">
							<label class="fl" style="margin: 8px 10 10 10;">Size</label>
							
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
							  <input name='size' type="radio" <?php if($asd->size=='M'){echo 'checked';}else{} ?> <? echo $status?> value="<? echo $asd->size ?>"><? echo $asd->size ?> 
							</label>
							<?
							}
							?>
							<!--
							<div class="select-box">
								<select id="size" name="attribute_size">
									<option value="">Choose an option…</option>
									<option value="S">S</option>
									<option value="M">M</option>
									<option value="L">L</option>
									<option value="XL">XL</option>
								</select>
							</div>
							-->
							
						</div>
					
						<hr class="margin4">

						<div class="qty-fields-large clearfix fl">
				       		<input name="qty" id='qty' value="1" size="4" class="qty-text" maxlength="12">
							<input name='max' type="hidden" id='max'>
						</div>
						<button class="button3 fr" type="submit">Add to cart »</button>
					</form>
					
				</li>
			</ul>
			
			<div class="page-content" style="margin: 40px 0 0 0;">
				<div id="tabs">
					<ul class="nav clearfix">
						<li><a href="#tabs-tab-title-1">Description</a></li>
						<li><a href="#tabs-tab-title-2">Additional Information</a></li>
						<li><a href="#tabs-tab-title-3">Sizing Guide</a></li>
					</ul>
					<div id="tabs-tab-title-1"><p><?php echo $db->description ?></p></div>
					<div id="tabs-tab-title-2"><p><?php echo $db->additional_information ?></p></div>
					<div id="tabs-tab-title-3"><p><?php echo $db->size_chart ?></p></div>
				</div>
			</div>
			

		<!-- END #main-content -->
		</div>
		
		<?
		$this->load->view('vintage/sidebar.php');
		?>
	<!-- END #content-wrapper -->
	</div>