

        <div class="row">
          <div class="col-lg-6">

            <form role="form" action='<?php echo site_url()?>admin_popular/editsave' method='post'>

                <input type='hidden' name='id_popular' value='<?= $db->id_popular?>'>
            
              <div class="form-group">
                <label>Nama popular</label>
                <input class="form-control" name='name_popular' value="<?= $db->name_popular?>">
              </div>


              <button type="submit" class="btn btn-default">Submit Button</button>
              <button type="reset" class="btn btn-default">Reset Button</button>  

            </form>

          </div>
        
		</div><!-- /.row -->
