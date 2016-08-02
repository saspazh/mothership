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



        <a href="<?php  echo site_url()?>admin_customer/add" class="btn btn-default">Tambah</a>
        <a href="<?php  echo site_url()?>admin_customer/export_excel" class="btn btn-default">Export to excel</a>
        <a href="<?php  echo site_url()?>admin_customer/import" class="btn btn-default">Import from excel</a>
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
                    <th>Alamat<i class="fa fa-sort"></i></th>
                    <th>City<i class="fa fa-sort"></i></th>
                    <th>Province<i class="fa fa-sort"></i></th>
                    <th>HP<i class="fa fa-sort"></i></th>
                    <th>Email<i class="fa fa-sort"></i></th>
                    <th>Notification<i class="fa fa-sort"></i></th>
                    <th>Active<i class="fa fa-sort"></i></th>
                    <th>Action <i class="fa fa-sort"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <?php  foreach($data_list as $baris){?>
				  <tr class="active">
                    <td><?php  echo $noUrut?></td>
                    <td><?php  echo $baris->first_name.' '.$baris->last_name ?></td>
                    <td><?php  echo substr($baris->address1,0,10).'...'; ?></td>
                    <td><?php  echo $baris->city?></td>
                    <td><?php  echo $baris->province?></td>
                    <td><?php  echo $baris->no_hp?></td>
                    <td><?php  echo $baris->email?></td>
                    <td><?php  echo $baris->receive?></td>
                    <td><?php  echo $baris->status?></td>
                    <td>
						<a href='<?php  echo site_url()?>admin_customer/edit/<?php  echo $this->uri->segment(3) ?>/<?php  echo $baris->id_customer?>'>edit</a> |
						<a href='<?php  echo site_url()?>admin_customer/delete/<?php  echo $this->uri->segment(3) ?>/<?php  echo $baris->id_customer?>' onclick="return confirm('Anda yakin akan menghapus?')">delete</a>
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
