<?php
if($this->session->flashdata('message')){
?>
			<div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <? echo $this->session->flashdata('message') ?>
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


        <a href="<?php  echo site_url()?>admin_kategori/add" class="btn btn-default">Tambah Kategori</a>
		<br>
		<br>
		<div class="row">
          <div class="col-lg-6">
            <!--<h2>Contextual Classes</h2>-->
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped tablesorter">
                <thead>
                  <tr>
                    <th>No<i class="fa fa-sort"></i></th>
                    <th>Kategori<i class="fa fa-sort"></i></th>
                    <th>Action <i class="fa fa-sort"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <?php  foreach($data_list as $baris){?>
				  <tr class="active">
                    <td><?php  echo $noUrut?></td>
                    <td><?php  echo $baris->nama_kategori?></td>
                    <td>
						<a href='<?php echo site_url()?>admin_kategori/edit/<?php  echo $baris->id_kategori?>'>edit</a> |
						<a href='<?php echo site_url()?>admin_kategori/delete/<?php  echo $baris->id_kategori?>' onclick="return confirm('Anda yakin akan menghapus?')">delete</a>
					</td>
                  </tr>
				  <?php 
				  $noUrut++;
				  }
				  ?>
                  
                </tbody>
              </table>
            </div>
          </div>
        
		</div><!-- /.row -->
