<!-- BEGIN .widget -->
			<div class="widget clearfix">
				
				<div class="tag-title-wrap clearfix">
					<h3 class="tag-title-small">New Arrivals</h3>
				</div>
				
				<!-- BEGIN .product_list_widget -->
				<ul class="product_list_widget">

<?php 
$data_best = $this->db->query("SELECT a.id_product, a.url_suffix, a.id_kategori, b.id_poto, a.nama_product, a.color, a.price, a.description, b.file_name, b.path, a.waktu
FROM product a, poto b
WHERE a.id_product = b.id_product
AND b.highlight =  '1'
AND a.display =  '1'
AND b.type =  'medium'
ORDER BY  `a`.`waktu` DESC 
LIMIT 0 , 3 ")->result();
?>
					<?php 
					foreach($data_best as $best){
					?>
					
					<li>
						<a href="<?php  echo site_url()?>product/detail/<?php  echo $best->id_product ?>/<?php  echo $best->url_suffix ?>">
							<img src="<?php  echo base_url()?>/<?php  echo $best->path ?>/<?php  echo $best->file_name ?>" alt="<?php  echo $best->url_suffix ?>" />
							<?php  echo $best->nama_product ?>
						</a>
						<span class="amount"><?php  echo $best->price ?> IDR</span>
					</li>
					
					<?php 
					}
					?>
					
					
				
				<!-- END .product_list_widget -->
				</ul>
			
			<!-- END .widget -->
			</div>
			