
        <div class="row">
          <div class="col-lg-6">

		<?php echo $error;?>
		
            <form role="form" action='<?php echo site_url()?>admin_product/do_upload' enctype="multipart/form-data" method='post'>
			
              <div class="form-group">
                <label>Nama barang</label>
                <input class="form-control" name='nama_barang' placeholder="Nama Barang">
              </div>


			  
			  <div class="form-group">
                <label>Kategori</label>
                <select multiple class="form-control" name='kategori'>
                <?php
								
				$asd = $this->db->query("SELECT id_kategori, nama_kategori FROM  kategori ")->result();
				foreach($asd as $dsa){
				?>
				<option value="<?php echo $dsa->id_kategori; ?>"><?php echo $dsa->nama_kategori; ?></option>
				<?php } ?>
				
                
				</select>
              </div>
			  
			  
			  
			  <div class="form-group">
                <label>Pic</label>
                <input type="file" name='userfile'>
              </div>
			  
			  <div class="form-group">
                <label>Judul</label>
                <input class="form-control" name='judul' placeholder="Judul">
              </div>
			  
			  <div class="form-group">
                <label>Slug</label>
                <input class="form-control" name='slug' placeholder="ex: one-two-three">
              </div>
			  
              <label>Harga</label><br>
			  <div class="form-group input-group">
				<span class="input-group-addon">$</span>
                <input type="text" class="form-control" name='harga'>
                <span class="input-group-addon">.00</span>
              </div>

			  
			  <div class="form-group">
                <label>Warna</label>
                <input class="form-control" name='color' placeholder="Warna">
              </div>
			  
			  <div class="form-group">
                <label>Descripsi</label>
                <textarea name='description' class="form-control" rows="3"></textarea>
              </div>
			  
			  <div class="form-group">
                <label>Tag</label>
                <textarea name='tag' class="form-control" rows="3"></textarea>
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
