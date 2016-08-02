<? 
$data_best = $this->db->query("SELECT a.id_product, a.url_suffix, a.id_kategori, b.id_poto, a.nama_product, a.color, a.price, a.description, b.file_name, b.path, a.waktu
FROM product a, poto b
WHERE a.id_product = b.id_product
AND b.highlight =  '1'
AND a.display =  '1'
AND b.type =  'small'
ORDER BY  `a`.`waktu` DESC 
LIMIT 0 , 3 ")->result();
?>
						<div class="block">								
							<h4 class="title"><strong>Best</strong> Seller</h4>								
							<ul class="small-product">
								<?
								foreach($data_best as $best){
								?>
								<li>
									<a href="<? echo site_url()?>product/detail/<? echo $best->id_product ?>/<? echo $best->url_suffix?>" title="<? echo $best->nama_product ?>">
										<img src="<? echo base_url()?>/<? echo $best->path ?>/<? echo $best->file_name ?>" alt="<? echo $best->nama_product ?>">
									</a>
									<a href="<? echo site_url()?>product/detail/<? echo $best->id_product ?>/<? echo $best->url_suffix ?>"><? echo $best->nama_product ?></a>
								</li>
								<?
								}
								?>
							</ul>
						</div>