<?php
if($this->session->flashdata('message')){
?>
			<div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <?php 
			  echo $this->session->flashdata('message') 
			  ?>
            </div>	
<?php
}

if($this->session->flashdata('hapus')){
?>
			<div class="alert alert-info alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <?php 
			  echo $this->session->flashdata('hapus')
			  ?>
            </div>
			
<?php
}
?>


        <a href="<?php echo site_url()?>admin_product/add" class="btn btn-default">Tambah Barang</a>
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
                    <th>Nama<i class="fa fa-sort"></i></th>
                    <th>Category<i class="fa fa-sort"></i></th>
                    <th>Foto <i class="fa fa-sort"></i></th>
                    <th>Warna <i class="fa fa-sort"></i></th>
                    <th>Harga <i class="fa fa-sort"></i></th>
                    <th>Display <i class="fa fa-sort"></i></th>
                    <th>Tag <i class="fa fa-sort"></i></th>
                    <th>Action <i class="fa fa-sort"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($data_list as $baris){?>
				  <tr class="active">
                    <td><?php echo $noUrut?></td>
                    <td><?php echo $baris->nama_product?></td>
                    <td><?php echo $baris->nama_kategori?></td>
                    <td><img src='<?php echo base_url() ?><?php echo $baris->path?><?php echo $baris->file_name?>' width='100px'></td>
                    <td><?php echo $baris->color?></td>
                    <td>Rp <?php echo $baris->price?></td>
                    <td>
						<?php 
						if($baris->display == 0){
						?>
							<a href='<?php echo base_url() ?>admin_product/display/<?php echo $baris->id_product?>/1' title='Click to active'>Inactive</a>
						<?php
						}else{
						?>
							<a href='<?php echo base_url() ?>admin_product/display/<?php echo $baris->id_product?>/0' title='Click to inactive'>Active</a>
						<?php
						}
						?>
					</td>
                    <td><?php echo $baris->tag?></td>
                    <td>
						<a href='<?php site_url()?>admin_product/detail/<?php echo $baris->id_product?>'>Detail</a> |
						<a href='<?php site_url()?>admin_product/edit/<?php echo $baris->id_product?>'>edit</a> |
						<a href='<?php site_url()?>admin_product/delete/<?php echo $baris->id_product?>' onclick="return confirm('Anda yakin akan menghapus?')">delete</a>
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
