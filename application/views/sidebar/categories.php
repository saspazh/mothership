<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fsaspazh&amp;width=290&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=710939552279508" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100%; height:290px;" allowTransparency="true"></iframe>
<?
$data_kategori = $this->db->query("SELECT * 
FROM  `kategori` 
ORDER BY  `kategori`.`nama_kategori` ASC ")->result();
?>

						<div class="block">	
							<ul class="nav nav-list">
								<li class="nav-header">CATEGORIES</li>
								<?
								foreach($data_kategori as $kategori){	
								?>
								<li><a href="<? echo site_url() ?>product/kategori/<? echo $kategori->id_kategori ?>"><? echo $kategori->nama_kategori ?></a></li>
								<?
								}	
								?>	
							</ul>
						</div>
						
