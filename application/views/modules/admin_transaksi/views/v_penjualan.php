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

			  <div class="form-group">
                <label>No Order</label>
                <p class="form-control-static"><? echo $db->no_order ?></p>
              </div>
			  
			  <div class="form-group">
                <label>Tanggal Order</label>
                <p class="form-control-static"><? echo $db->tgl_order ?></p>
              </div>
			  
			  <div class="form-group">
                <label>Status Order</label>
                <p class="form-control-static">
				<? 
				if($db->status == 0){
					echo 'Assign';
				}else{
					echo 'Cash';
				} 
				?>
				</p>
              </div>
        <div class="form-group">
                <label>Voucher</label>
                <p class="form-control-static">
                
                  <?php
                  if(!empty($db->id_voucher)){
                    echo $this->mymodel->get_voucher($db->id_voucher);
                  }else{
                    echo '-';
                  } 
                  ?>
                </p>
              </div>
        


        <a href="<? echo site_url()?>admin_stok/add/<? echo $this->uri->segment(3) ?>" class="btn btn-default">Tambah Item</a>
        <a href="<? echo site_url()?>admin_transaksi/excel/<? echo $this->uri->segment(3) ?>" class="btn btn-default">Print</a>
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
                    <th>Barang <i class="fa fa-sort"></i></th>
                    <th>Poto <i class="fa fa-sort"></i></th>
                    <th>Serial <i class="fa fa-sort"></i></th>
                    <th>Color <i class="fa fa-sort"></i></th>
                    <th>Size<i class="fa fa-sort"></i></th>
                    <th>Sale Price <i class="fa fa-sort"></i></th>
                    <th>Action <i class="fa fa-sort"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <? foreach($data_list as $baris){?>
				  <tr class="active" color='#cccccc'>
                    <td><? echo $noUrut?></td>
                    <td><? echo $baris->nama_product ?></td>
                    <td><img src='<? echo base_url() ?><? echo $baris->path?>/<? echo $baris->file_name?>' width='50px'></td>
					<td><? echo $baris->serial ?></td>
                    <td><? echo $baris->color ?></td>
                    <td><? echo $baris->size ?></td>
					<td><? echo $baris->price ?></td>
                    <td>
						<a href='<? echo site_url()?>admin_stok/edit/<? echo $baris->id_barang?>/<? echo $baris->id_barang ?>'>edit</a> |
						<a href='<? echo site_url()?>admin_stok/delete/<? echo $baris->id_barang?>/<? echo $baris->id_barang ?>' onclick="return confirm('Anda yakin akan menghapus?')">delete</a> |
						<a href='<? echo site_url()?>admin_stok/set_terjual/<? echo $baris->id_barang?>/<? echo $baris->id_barang ?>' >Set terjual</a>
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
