
        <div class="row">
          <div class="col-lg-6">
		
            <form action='<?php echo site_url()?>admin_stok/save_import' method='post' enctype="multipart/form-data">
			  <div class="form-group">
                <label>Barangs</label>
                <select multiple class="form-control" name='id_barang'>
                <?php
								
				$asd = $this->db->query("SELECT id_barang, nama_barang FROM  barang ")->result();
				foreach($asd as $dsa){
				?>
				<option value="<?php echo $dsa->id_barang; ?>" <?php if($dsa->id_barang == $this->uri->segment(3)){ ?>selected<?php } ?>><?php echo $dsa->nama_barang; ?></option>
				<?php } ?>
				
                
				</select>
              </div>
			  
			  <div class="form-group">
                <label>Size</label>
                <div class="file">
                  <label>
                    <input type="file" style="width: 50%;" class="text" id="file_upload" name="userfile" >
                  </label>
                </div>
              </div>
			  
			  <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-default">Reset</button>  
              
            </form>

          </div>
        
		</div><!-- /.row -->
