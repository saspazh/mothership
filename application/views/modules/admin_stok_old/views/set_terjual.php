<script>
	function margin(a,b){
		var biaya = a + 10;
		return document.set_terjual.margin_nominal.value;
	}
</script>

        <div class="row">
          <div class="col-lg-6">
		
            <form action='<?php echo site_url()?>admin_stok/save_set_terjual' name='set_terjual' method='post' enctype="multipart/form-data">
			  
              <input name='id_barang' type='hidden' value='<?php echo $id_barang ?>'>
              <input name='hpp' type='hidden' value='<?php echo $db->hpp ?>'>
              <input name='id_stok' type='hidden' value='<?php echo $db->id_stok ?>'>
			  <div class="form-group">
                <label>Product</label>
                <input class="form-control" readonly type="text" value='<?php echo $db->nama_product?>'>
              </div>
			  <div class="form-group">
                <label>Size</label>
                <input class="form-control" readonly type="text" value='<?php echo $db->size ?>'>
              </div>
			  <div class="form-group">
                <label>Color</label>
                <input class="form-control" readonly type="text" value='<?php echo $db->color ?>'>
              </div>
			  <div class="form-group">
                <label>Price</label>
                <input class="form-control" type="number" name="price" value='<?php echo $db->price?>'>
              </div>
			  
			  <div class="form-group">
                <label>Margin (%)</label>
                <input class="form-control" type="number" name="margin" value='0' onfocus="calc(this.value)">
              </div>
			  <div class="form-group">
                <label>Margin Nominal</label>
                <input class="form-control" readonly type="number" name="margin_nominal">
              </div>
			  
			  <div class="form-group">
                <label>Provit</label>
                <input class="form-control" readonly type="number" name="qty" onfocus="calc(this.value)">
              </div>
			  
			  <div class="form-group">
                <label>Laba</label>
                <input class="form-control" readonly type="number" name="qty" onfocus="calc(this.value)">
              </div>
			  
			  <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-default">Reset</button>  
              
            </form>

          </div>
        
		</div><!-- /.row -->
