<?php
if($this->session->flashdata('message')){
?>
			<div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <?php echo $this->session->flashdata('message') ?>
            </div>	
<?php
}

if($this->session->flashdata('hapus')){
?>
			<div class="alert alert-info alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <?php echo $this->session->flashdata('hapus')?>
            </div>
			
<?php
}
?>


        <a href="<?php echo site_url()?>admin_stok/add/<?php echo $this->uri->segment(3) ?>" class="btn btn-default">Tambah Barang</a>
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
                    <th>Size <i class="fa fa-sort"></i></th>
                    <th>Serial <i class="fa fa-sort"></i></th>
                    <th>Tanggal <i class="fa fa-sort"></i></th>
                    <th>Action <i class="fa fa-sort"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($data_list as $baris){?>
				  <tr class="active">
                    <td><?php echo $noUrut?></td>
                    <td><?php echo $baris->size?></td>
                    <td><?php echo $baris->serial?></td>
                    <td><?php echo $baris->tanggal?></td>
                    <td>
					<?php
					if($baris->status==1){
					?>
						<a href='<?php echo site_url()?>admin_stok/edit/<?php echo $baris->id_stok?>/<?php echo $baris->id_barang ?>'>edit</a> |
						<a href='<?php echo site_url()?>admin_stok/delete/<?php echo $baris->id_stok?>/<?php echo $baris->id_barang ?>' onclick="return confirm('Anda yakin akan menghapus?')">delete</a> |
						<a href='<?php echo site_url()?>admin_stok/set_terjual/<?php echo $baris->id_stok?>/<?php echo $baris->id_barang ?>' >Set terjual</a>
					<?php
					}else{
					?>
						Soldout
					<?php
					}
					?>
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
