        <!-- content -->        	
    	<div class="grid_8 content">
        	
            <div class="post-item">
            	<h1>About our Medical Center</h1>
                <div class="entry">
                	
                    <h2>Cerita singkat The Dentist</h2>

                    <p>The denstist terbentuk oleh 3 orang drg diantaranya : drg.caterine,drg.ibut dan drg.ratna terletak dilokasi Ruko Orlin Arcade 2 Blok GR/JB No. 20, Graha Raya Bintaro, Tangerang Selatan yang merupakaln lokasi strategis di bintaro. Dengan meggunakan konsep "Family dental care" dan tenaga ahli yang profesionnal dibidangnya.</p>
                    
                  	                    
                  	<div class="divider_space"></div>
                    
					<h2>Our dentist staff:</h2>
                    
                    <?
                    foreach ($dokter as $key) {
                    ?>

                    <img src="<? echo base_url().$key->path.$key->file_name?>" alt="" width="115" height="152" class="alignright" />
					<h3 class="title_pink text_italic"><? echo $key->nama_dokter?></h3>
                    <p><? echo $key->description?></p>
                    <div class="divider_space_thin"></div>
                    
                    <?
                    }
                    ?>
                    
                    
                                        
                    <div class="row">
                    <div class="col col_1_2">
                    	<!-- widget contacts -->
							<div class="widget-container widget_contact">
								<div class="inner">
                                <div class="contact-phone"> 
                                    <label>by phone:</label>
                                    <strong>+33 (0) 9399 7987</strong>
                                </div>      
                                         
                                <div class="contact-mail">
                                    <label>by email:</label>
                                    <a href="mailto:office@medica.com">office@medica.com</a>
                                </div>    
								</div>    
                            </div>
						<!--/ widget contacts -->
                    </div>
                    
                    
                  	</div>
                    
              </div>
            </div>
            
        </div> 
        <!--/ content -->

        <!-- sidebar -->        
      	<div class="grid_4 sidebar">
        	
            <div id="categories-5" class="widget-container widget_nav_menu">
				<ul>
                    <li><a href="#"><span>Medical Center Tour</span></a></li>                            
                    <li><a href="#"><span>Staff &amp; Personal</span></a></li>  
                    <li class="current-menu-item"><a href="#"><span>Our History</span></a></li>  
                    <li><a href="#"><span>Experience &amp; Technology</span></a></li>  
                    <li><a href="#"><span>Why our facility?</span></a></li>  
				</ul>
		  	</div>
            
            <div class="text-center">
          	<img src="images/temp/facebook_activity.gif" width="239" height="406" alt="" />
            </div>
             
      	</div>     
        <!--/ sidebar -->