<?php
if($this->session->flashdata('message')){
?>
			<div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
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


        <a href="<?php  echo site_url()?>admin_barang/add" class="btn btn-default">Tambah Barang</a>
		
		<a href="<?php  echo site_url()?>admin_barang/export_excel" class="btn btn-default">Export excel</a>
		<br>
		<br>
		<div class="row">
          <div class="col-lg-12">
            <!--<h2>Contextual Classes</h2>-->
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped tablesorter">
                <thead>
                  <tr>
                    <th>No<i class="fa fa-sort"></i></th>
                    <th>Serial<i class="fa fa-sort"></i></th>
                    <th>Nama<i class="fa fa-sort"></i></th>
                    <th>Warna <i class="fa fa-sort"></i></th>
                    <th>Size <i class="fa fa-sort"></i></th>
                    <th>Tag <i class="fa fa-sort"></i></th>
                    <th>Action <i class="fa fa-sort"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <?php  foreach($data_list as $baris){?>
				  <tr class="active">
                    <td><?php  echo $noUrut?></td>
                    <td><?php  echo $baris->serial ?></td>
                    <td><?php  echo $baris->nama_product?></td>
                    <td><?php  echo $baris->color?></td>
                    <td><?php  echo $baris->size?></td>
                    <td><?php  echo $baris->tag?></td>
                    <td>
						<a href='<?php echo site_url()?>admin_barang/detail/<?php  echo $baris->id_barang?>'>Detail</a> |
						<a href='<?php echo site_url()?>admin_barang/edit/<?php  echo $baris->id_barang?>'>edit</a> |
						<a href='<?php echo site_url()?>admin_barang/delete/<?php  echo $baris->id_barang?>' onclick="return confirm('Anda yakin akan menghapus?')">delete</a>
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
