<?php
if($this->session->flashdata('message')){
?>
			<div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <? echo $this->session->flashdata('message') ?>
            </div>	
<?
}

if($this->session->flashdata('hapus')){
?>

			<div class="alert alert-dismissable alert-danger">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <? echo $this->session->flashdata('hapus')?>
            </div>
			
<?
}
?>

        <div class="row">
          <div class="col-lg-6">

            <form role="form" action='<? echo site_url()?>user/savesetting' method='post'>
			  <div class="form-group">
                <label>Old Password</label>
                <input class="form-control" name='old' type='password'>
              </div>
			  
			  <div class="form-group">
                <label>New Password</label>
                <input class="form-control" name='new' type='password'>
              </div>
			  
			  <div class="form-group">
                <label>Confirm Password</label>
                <input class="form-control" name='confirm' type='password'>
              </div>


              <button type="submit" class="btn btn-default">Submit Button</button>

            </form>

          </div>
        
		</div><!-- /.row -->
