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
			<div class="alert alert-info alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <? echo $this->session->flashdata('hapus')?>
            </div>
			
<?
}
?>


        <a href="<? echo site_url()?><? echo $this->uri->segment(1) ?>/add/<? echo $this->uri->segment(3) ?>" class="btn btn-default">Tambah <? echo $this->uri->segment(3) ?></a>
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
                    <th>No Order<i class="fa fa-sort"></i></th>
                    <th>Nama<i class="fa fa-sort"></i></th>
                    <th>City<i class="fa fa-sort"></i></th>
                    <th>Province<i class="fa fa-sort"></i></th>
                    <th>Date<i class="fa fa-sort"></i></th>
                    <th>Action <i class="fa fa-sort"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <? foreach($data_list as $baris){?>
				  <tr class="active">
                    <td><? echo $noUrut?></td>
                    <td><? echo $baris->no_order?></td>
                    <td><? echo $baris->first_name.' '.$baris->last_name ?></td>
                    <td><? echo $baris->city?></td>
                    <td><? echo $baris->province?></td>
                    <td><? echo $baris->tgl_order?></td>
                    <td>
						<a href='<? echo site_url()?>admin_transaksi/v_order/<? echo $baris->id_transaksi?>/<? echo $this->uri->segment(3) ?>'>Detail</a> |
						<a href='<? echo site_url()?>admin_transaksi/delete/<? echo $baris->id_transaksi?>/<? echo $this->uri->segment(3) ?>' onclick="return confirm('Anda yakin akan menghapus?')">delete</a>
					</td>
                  </tr>
				  <?
				  $noUrut++;
				  }
				  ?>
                  
                </tbody>
              </table>
            </div>
          </div>
        
		</div><!-- /.row -->
