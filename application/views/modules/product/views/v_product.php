<div class="bg-content">
      <div class="container">
    <div class="row">
          <div class="span12"> 
        <!--============================== slider =================================-->
 <br>
 <br>
        <span id="responsiveFlag"></span>
        <div class="block-slogan">
              <h2>Welcome!</h2>
              <div>
            <p><a href="http://blog.templatemonster.com/free-website-templates/ " target="_blank" class="link-1">Click here</a> for more info about this free website template created by TemplateMonster.com. This is a Bootstrap template that goes with several layout options (for desktop, tablet, smartphone landscape and portrait) to fit all popular screen resolutions. The PSD source files of this template are available for free for the registered members of TemplateMonster.com. Feel free to get them!</p>
          </div>
            </div>
      </div>
        </div>
  </div>
      
      <!--============================== content =================================-->
      
      <div id="content" class="content-extra"><div class="ic">More Website Templates @ TemplateMonster.com. November19, 2012!</div>
    <div class="row-1">
      <div class="container">
        <div class="row">
        
    <h3>Product</h3>    		
		<ul class="thumbnails thumbnails-1">
        	
					<?
			foreach($data_list as $baris){
			?>
			
            <li class="span3">
                  <div class="thumbnail thumbnail-1">
                <!--<h3 class="title-1 extra">Fine art</h3>-->
                <img  src="<? echo base_url() ?>uploads/<? echo $baris->file_name?>" alt="">
					<section> 
					  <strong><? echo $baris->nama_barang ?></strong>
                      <p>IDR <? echo $this->cart->format_number($baris->price); ?></p>
                      <a href="<? echo site_url()?>product/detail/<? echo $baris->id_barang?>" class="btn btn-1">View More</a> 
					</section>
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