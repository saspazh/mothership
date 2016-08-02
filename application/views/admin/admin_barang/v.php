                <div class="row">

                    <div class="large-12 columns">
                        <div class="box">
                            <div class="box-header bg-transparent">
                                <!-- tools box -->
                                <div class="pull-right box-tools">

                                    <span class="box-btn" data-widget="collapse"><i class="icon-minus"></i>
                                    </span>
                                    <span class="box-btn" data-widget="remove"><i class="icon-cross"></i>
                                    </span>
                                </div>
                                <h3 class="box-title"><i class="icon-view-list"></i>
                                    <span><?php echo $title ?></span>
                                </h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body " style="display: block;">

                              <a href="<?php  echo site_url()?>admin_barang/add" class="tiny button">Tambah Barang</a>
      		                    <a href="<?php  echo site_url()?>admin_barang/export_excel" class="tiny button">Export excel</a>
		

              <table style="width:100%;">
                <tbody>
                
                  <tr class="text-right">
                    <th>No</th>
                    <th>Serial</th>
                    <th>Nama</th>
                    <th>Warna</th>
                    <th>Size</th>
                    <th>Tag</th>
                    <th>Action</th>
                  </tr>
                
                  <?php  foreach($data_list as $baris){?>
				          <tr>
                    <td><?php echo $noUrut?></td>
                    <td><?php echo $baris->serial ?></td>
                    <td><?php echo $baris->nama_product?></td>
                    <td><?php echo $baris->color?></td>
                    <td><?php echo $baris->size?></td>
                    <td><?php echo $baris->tag?></td>
                    <td>
          						<a href='<?php echo site_url()?>admin_barang/detail/<?php  echo $baris->id_barang?>'>Detail</a> |
          						<a href='<?php echo site_url()?>admin_barang/edit/<?php  echo $baris->id_barang?>'>Edit</a> |
          					  <a href='<?php echo site_url()?>admin_barang/delete/<?php  echo $baris->id_barang?>' onclick="return confirm('Anda yakin akan menghapus?')">Delete</a> |
                      <a href='<?php echo site_url()?>admin_stok/add/<?php  echo $baris->id_barang?>'>Add Stok</a>
                    </td>
                  </tr>
				  <?php 
				  $noUrut++;
				  }
				  ?>
                  
                </tbody>
              </table>
                            </div>
                            <!-- end .timeline -->


                        </div>
                        <!-- box -->
                    </div>


                </div>

                <!-- End of Container Begin -->
