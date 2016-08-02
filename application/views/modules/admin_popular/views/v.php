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


    <a href="<?php  echo site_url()?>admin_popular/add" class="btn btn-default">Tambah popular</a>
		<br>
		
    <?php  
    foreach($data_list as $baris){
    ?>
    
    <div class="row">
          <div class="col-lg-6">
            <h2><?php echo $baris->name_popular ?></h2>
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped tablesorter">
                <thead>
                  <tr>
                    <th>No<i class="fa fa-sort"></i></th>
                    <th>Nama Popular<i class="fa fa-sort"></i></th>
                    <th>Action <i class="fa fa-sort"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <?php  
                  $sql_pp = $this->db->query("select * from popular_product where id_popular=$baris->id_popular")->result;
                  foreach($sql_pp as $popular_product){
                  ?>
				          <tr class="active">
                    <td><?php  echo $noUrut?></td>
                    <td><?php  echo $popular_product->id_popular_product ?></td>
                    <td>
						          <a href='<?php echo site_url()?>admin_popular/edit/<?php  echo $popular_product->id_popular ?>'>edit</a> |
						          <a href='<?php echo site_url()?>admin_popular/delete/<?php  echo $popular_product->id_popular ?>' onclick="return confirm('Anda yakin akan menghapus?')">delete</a>
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
    <?php
    }
    ?>