	<!-- BEGIN #content-wrapper -->
	<div id="content-wrapper" class="clearfix">
		
		<!-- BEGIN #main-content -->
		<div id="main-content" class="page-content">
			
			<h2 class="page-title">Contact</h2>
			<div class="shadow-wrapper margin1">
				<div class="left-shadow"></div>
				<div class="mid-shadow"></div>
				<div class="right-shadow"></div>
			</div>
			
			<ul class="columns-2 clearfix">
				<li class="col2">
					<p>Saspazh adalah perusahaan ritel pakaian yang resmi dimulai pada 1 Januari 2014 dengan harapan besar untuk memberikan pilihan yang luar biasa dalam industri fashion. Pasar kami untuk saat ini berkisar kepada remaja yang berpikiran terbuka, mandiri, dan modern. Kami mencoba untuk menempatkan setiap aspek perilaku manusia dalam produk kami. Sehingga tetap pantas untuk digunakan dalam berbagai lingkungan. Apa pun yang Anda lakukan, merasakan, mendengar, atau melihat sehari-hari adalah perilaku utama. Hal ini tidak hanya pernyataan busana, ia sedang siapa Anda sebenarnya, itu adalah menjadi bagian dari diri sendiri, dan itu menjadi luar biasa!</p>

<p>Produk varietas yang ditawarkan kepada konsumen laki-laki seperti t-shirt, kemeja. Selain itu, kami memproduksi setiap detail dari produk kami dengan kualitas terbaik dan dirilis setiap produk dalam jumlah eksklusif dan pasokan dengan harga yang terjangkau.</p>
				</li>

				<li class="col2">
					<h4>Details</h4>
					<ul>
						<li>Jl. Masjid Benda, Kemang, Jakarta Selatan</li>
						<li>+62 812 87 507270</li>
						<li>saspazh [at] gmail [dot] com</li>
						<li>Twitter @saspazh</li>
						<li>Line <a href='http://line.me/ti/p/%40hmj9372z' target='_blank'>line.me/ti/p/%40hmj9372z</a></li>
					
					
					</ul>
				</li>
			</ul>

			<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
			<script type="text/javascript" src="https://raw.github.com/marioestrada/jQuery-gMap/master/jquery.gmap.min.js"></script>

			<div id="google-map" style="width:100%;height:300px;"></div>

			<script type="text/javascript">
				$(document).ready(function($) {
					$("#google-map").gMap({latitude: 0,longitude: 0,maptype: "ROADMAP",zoom: 13,markers: [
						{latitude: 0,longitude: 0,address: "London, UK",popup: true,html: ""}
							],controls: {panControl: true,zoomControl: true,mapTypeControl: true,scaleControl: true,streetViewControl: false,overviewMapControl: false}
					});
				});
			</script>

			<h4 style="margin: 0 0 25px 0;">Send Us An Email</h4>

			<form action="#" id="contactform" class="clearfix" method="post">

				<div class="field-row">
					<label for="contact_name">Name <span>(required)</span></label>
				    <input type="text" name="contact_name" id="contact_name" class="text_input" value="" />
				</div>

				<div class="field-row">
					<label for="email">Email <span>(required)</span></label>
					<input type="text" name="email" id="email" class="text_input" value="" />		
				</div>

				<div class="field-row">
					<label for="message_text">Message</label>
					<textarea name="message" id="message_text" class="text_input" cols="60" rows="9"></textarea>
				</div>

				<input class="button1" type="submit" value="Send Email" id="submit" name="submit">

			</form>
			
		<!-- END #main-content -->
		</div>
		
		<!-- BEGIN #sidebar -->
		<?php 
		$this->load->view('vintage/sidebar.php');
		?>	
		<!-- END #sidebar -->
		</div>
	
	<!-- END #content-wrapper -->
	</div>