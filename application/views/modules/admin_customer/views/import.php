<?php
if($this->session->flashdata('message')){
?>

			  <div class="alert alert-dismissable alert-warning">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <h4>Warning!</h4>
                <?php  echo $this->session->flashdata('message') ?>
              </div>
<?php 
}

if($this->session->flashdata('hapus')){
?>
			<div class="alert alert-info alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <?php  echo $this->session->flashdata('hapus')?>
            </div>
			
<?php 
}
?>
        <div class="row">
          <div class="col-lg-6">
		
            <form action='<?php echo site_url()?>admin_customer/save_import' method='post' enctype="multipart/form-data">
			  
			  <div class="form-group">
                <label>Format example</label>
                <p class="form-control-static"><a href='#'>Download</a></p>
              </div>
			  
			  <div class="form-group">
                <label>File input</label>
                <input type="file" name='files'>
              </div>
			  
			  <div class="form-group">
                <label>Radio Buttons</label>
                
               <div class="radio">
                  <label>
                    <input type="radio" name="method" id="optionsRadios2" value="merge">
                    Merge
                  </label>
                </div>
               <div class="radio">
                  <label>
                    <input type="radio" name="method" id="optionsRadios3" value="replace">
                    Replace
                  </label>
                </div>
              </div>

			  
			  
			  
			  <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-default">Reset</button>  
              
            </form>

          </div>
        
		</div><!-- /.row -->
