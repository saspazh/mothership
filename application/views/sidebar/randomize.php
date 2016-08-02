<?
$data_best = $this->db->query("SELECT a.id_product, a.url_suffix, a.id_kategori, b.id_poto, a.nama_product, a.color, a.price, a.description, b.file_name, b.path, a.waktu
FROM product a, poto b
WHERE a.id_product = b.id_product
AND b.highlight =  '1'
AND a.display =  '1'
AND b.type =  'medium'
ORDER BY  `a`.`waktu` DESC 
LIMIT 0 , 3 ")->result();
?>
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
													<a href="<? echo site_url()?>product/detail/<? echo $best->id_product ?>/<? echo $best->url_suffix ?>"><img alt="" src="<? echo base_url()?>/<? echo $best->path ?>/<? echo $best->file_name ?>"></a><br/>
													<a href="<? echo site_url()?>product/detail/<? echo $best->id_product ?>/<? echo $best->url_suffix ?>" class="title"><? echo $best->nama_product?></a><br/>
													<a href="<? echo site_url()?>product/kategori/<? echo $best->id_kategori ?>" class="category"><? //echo $best->nama_kategori?></a>
										 			<p class="price">Rp <? echo $best->price?></p>
												</div>
											</li>
										</ul>
									</div>
									<?
									$active++;
									}
									?>
									
								</div>
							</div>
						</div>
						