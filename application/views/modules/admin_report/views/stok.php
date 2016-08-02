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


        <a href="<?php echo site_url()?>admin_report/excel/<?php echo $filter ?>" class="btn btn-default">Print</a>
		<br>
		<br>
		<div class="row">
          <div class="col-lg-12">
            <!--<h2>Contextual Classes</h2>-->
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped tablesorter">
                <thead>
                  <tr>
                    <th rowspan='2'>No<i class="fa fa-sort"></i></th>
                    <th rowspan='2'>barang<i class="fa fa-sort"></i></th>
                    <th rowspan='2'>color<i class="fa fa-sort"></i></th>
                    <th rowspan='2'>size<i class="fa fa-sort"></i></th>
                    <th rowspan='2'>Modal <i class="fa fa-sort"></i></th>
                    <th rowspan='2'>Price <i class="fa fa-sort"></i></th>
                    <th rowspan='2'>Ket <i class="fa fa-sort"></i></th>
                    <th rowspan='2'>Tanggal masuk<i class="fa fa-sort"></i></th>
                  </tr>
                  
				  
                </thead>
                <tbody>
                  <?php foreach($data_list as $baris){?>
				  <tr class="active">
                    <td><?php echo $noUrut ?></td>
                    <td><?php echo $baris->nama_product ?></td>
                    <td><?php echo $baris->color ?></td>
                    <td><?php echo $baris->size ?></td>
                    <td><?php echo $baris->hpp ?></td>
                    <td><?php echo $baris->price ?></td>
                    <td><?php echo $baris->size ?></td>
                    <td><?php echo date('Y/m/d - H:i',strtotime($baris->tanggal)) ?></td>
                    
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
