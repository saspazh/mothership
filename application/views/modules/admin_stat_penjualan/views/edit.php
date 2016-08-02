
        <div class="row">
          <div class="col-lg-6">

		<?php echo $error;?>
		
            <form role="form" action='<? echo site_url()?>admin_barang/editsave' enctype="multipart/form-data" method='post'>
			
              <input type='hidden' name='id_barang' value="<? echo $db->id_barang ?>">
              
			  
			  <div class="form-group">
                <label>Nama barang</label>
                <input class="form-control" name='nama_barang' value="<? echo $db->nama_barang?>">
              </div>


			  
			  <div class="form-group">
                <label>Kategori</label>
                <select multiple class="form-control" name='kategori'>
                <?
								
				$asd = $this->db->query("SELECT id_kategori, nama_kategori FROM  kategori ")->result();
				foreach($asd as $dsa){
				?>
				<option value="<?php echo $dsa->id_kategori; ?>"><?php echo $dsa->nama_kategori; ?></option>
				<?php } ?>
				
                
				</select>
              </div>
			  
			  <div class="form-group">
                <label>Pic</label><br>
				<div class="form-group input-group">
                <img class='col-lg-3 thumbnail' src='<? echo base_url()?>/uploads/<? echo $db->file_name?>' width='100%'>
				<div>
			  </div>
			  
			  <br>
			  <br>
			  <br>
			  <br>
			  <br>
			  <br>
			  <br>
			  <br>
			  <br>
			  <div class="form-group">
              <label>Harga</label><br>
			  <div class="form-group input-group">
				<span class="input-group-addon">$</span>
                <input type="text" value='<? echo $db->price?>' class="form-control" name='harga'>
                <span class="input-group-addon">.00</span>
              </div>
			  </div>
			  
			  <div class="form-group">
                <label>Warna</label>
                <input class="form-control" value='<? echo $db->color?>' name='color' placeholder="Warna">
              </div>
			  
			  <div class="form-group">
                <label>Descripsi</label>
                <textarea name='description' class="form-control" rows="3"><? echo $db->description?></textarea>
              </div>
			  
			  <div class="form-group">
                <label>Tag</label>
                <textarea name='tag' class="form-control" rows="3"><? echo $db->tag?></textarea>
              </div>
			  <hr>
			  <br>
			  <br>
			  
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
