        <div class="row">
          
		  <div class="col-lg-4 text-center">
            <div class="panel panel-default">
              <div class="panel-body">
                <a href="<? echo base_url()?>uploads/<? echo $db->file_name ?>" class="thumbnail" data-fancybox-group="group1" title="Description 1"><img alt="" src="<? echo base_url()?>uploads/<? echo $db->file_name ?>"></a>												
				

		<div class="row">
          <div class="col-lg-3 text-center">
                <a href="<? echo base_url()?>shopper_new/themes/images/ladies/2.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 2"><img src="<? echo base_url()?>shopper_new/themes/images/ladies/2.jpg" alt=""></a>
          </div>
          <div class="col-lg-3 text-center">
                <a href="<? echo base_url()?>shopper_new/themes/images/ladies/2.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 2"><img src="<? echo base_url()?>shopper_new/themes/images/ladies/2.jpg" alt=""></a>
          </div>
          <div class="col-lg-3 text-center">
                <a href="<? echo base_url()?>shopper_new/themes/images/ladies/2.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 2"><img src="<? echo base_url()?>shopper_new/themes/images/ladies/2.jpg" alt=""></a>
          </div>
          <div class="col-lg-3 text-center">
                <a href="<? echo base_url()?>shopper_new/themes/images/ladies/2.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 2"><img src="<? echo base_url()?>shopper_new/themes/images/ladies/2.jpg" alt=""></a>
            
        </div><!-- /.row -->
				
			  
			  
			  </div>
            </div>            
          </div>
		  
		 
          
        </div><!-- /.row -->
		
		

									<strong>Brand:</strong> <span><? echo $db->nama_barang ?></span><br>
									<strong>Product Code:</strong> <span><? echo $db->serial ?></span><br>
									<strong>Reward Points:</strong> <span>0</span><br>
									<strong>Availability:</strong> <span>Ready Stock</span><br>								
									<strong>Tag : </strong> <span><? echo $db->tag ?></span><br>								

								<h4><strong>Price: Rp <? echo $db->price?></strong></h4>
								
								<a href="<? echo site_url()?>admin_barang/edit/<? echo $this->uri->segment(3) ?>" class="btn btn-primary">Edit</a>  
								<a href="<? echo site_url()?>admin_barang/delete/<? echo $this->uri->segment(3) ?>" class="btn btn-danger">Delete</a>  
								<a href="<? echo site_url()?>admin_barang" class="btn btn-default">Back</a>  
