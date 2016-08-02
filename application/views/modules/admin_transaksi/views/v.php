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


        <a href="<?php echo site_url()?><?php echo $this->uri->segment(1) ?>/add/<?php echo $this->uri->segment(3) ?>" class="btn btn-default">Tambah <?php echo $this->uri->segment(3) ?></a>
    <br>
    <br>
    <div class="row">
          <div class="col-lg-12">
            <!--<h2>Contextual Classes</h2>-->
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped tablesorter">
                <thead>
                  <tr>
                    <th>No Order<i class="fa fa-sort"></i></th>
                    <th>Total<i class="fa fa-sort"></i></th>
                    <th>Nama<i class="fa fa-sort"></i></th>
                    <th>City<i class="fa fa-sort"></i></th>
                    <th>Province<i class="fa fa-sort"></i></th>
                    <th>Date<i class="fa fa-sort"></i></th>
                    <th>Action <i class="fa fa-sort"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($data_list as $baris){?>
          <tr class="active">
                    <td><?php echo $baris->no_order?></td>
                    <td>Rp. 
                      <?php 
                        echo number_format($baris->total).'<br>';
                        echo $this->mymodel->get_voucher($baris->id_voucher); 
                      ?>
                    </td>
                    <td><?php echo $baris->nama_customer ?></td>
                    <td><?php echo $baris->kota?></td>
                    <td><?php echo $baris->propinsi?></td>
                    <td><?php echo $baris->tgl_order?></td>
                    <td>
            <a href='<?php echo site_url()?>admin_transaksi/detail/<?php echo $baris->id_transaksi ?>'>Detail</a> |
            <a href='<?php echo site_url()?>admin_transaksi/delete/<?php echo $baris->id_transaksi ?>' onclick="return confirm('Anda yakin akan menghapus?')">delete</a>
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
