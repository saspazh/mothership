
        <div class="row">
          <div class="col-lg-6">

		<?php echo $error;?>
            <form role="form" action='<?php echo site_url()?>admin_barang/save' enctype="multipart/form-data" method='post'>
			  <div class="form-group">
                <label>Product</label>
                <select class="form-control" name='product'>
                <?php
				$asd = $this->db->query("SELECT id_product, nama_product FROM  product ")->result();
				foreach($asd as $dsa){
				?>
				<option value="<?php echo $dsa->id_product; ?>"><?php echo $dsa->nama_product; ?></option>
				<?php 
				} 
				?>
				</select>
              </div>
			  
			  
			  
			  <div class="form-group">
                <label>Size</label>
                <input class="form-control" name='size' value='S,M,L,XL,XXL' placeholder="ex: S,M,L,XL">
              </div>
			  
              
			  <button type="submit" name='go' class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-default">Reset</button>  
			  

<!--
              <div class="form-group">
                <label>Text area</label>
                <textarea class="form-control" rows="3"></textarea>
              </div>

              <div class="form-group">
                <label>Checkboxes</label>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="">
                    Checkbox  1
                  </label>
                </div>
               <div class="checkbox">
                  <label>
                    <input type="checkbox" value="">
                    Checkbox  2
                  </label>
                </div>
               <div class="checkbox">
                  <label>
                    <input type="checkbox" value="">
                    Checkbox  3
                  </label>
                </div>
              </div>

              <div class="form-group">
                <label>Inline Checkboxes</label>
                <label class="checkbox-inline">
                  <input type="checkbox"> 1
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox"> 2
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox"> 3
                </label>
              </div>

              <div class="form-group">
                <label>Radio Buttons</label>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    Radio  1
                  </label>
                </div>
               <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                    Radio  2
                  </label>
                </div>
               <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                    Radio  3
                  </label>
                </div>
              </div>

              <div class="form-group">
                <label>Inline Radio Buttons</label>
                <label class="radio-inline">
                  <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked> 1
                </label>
                <label class="radio-inline">
                  <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2"> 2
                </label>
                <label class="radio-inline">
                  <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="option3"> 3
                </label>
              </div>

             
              
	 <div class="form-group">
                <label>Selects</label>
                <select class="form-control">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>

-->
              
            </form>

          </div>
        
		</div><!-- /.row -->
