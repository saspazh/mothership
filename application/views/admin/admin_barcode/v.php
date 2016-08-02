

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
                                    <span>Poin</span>
                                </h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body " style="display: block;">
								
                                <a href="<?php echo site_url() ?>admin_barcode/barcode" class="tiny button">Generate</a> 
								
                                <form target="_blank" action='<?php echo base_url() ?>admin_barcode/generate' method='post' >
                                <table style="width:100%;">
                                    <tbody>
                                        <tr class="text-right">
                                            <th>No.</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Category</th>
                                            <th>Warna</th>
                                            <th>Harga</th>
                                            <th>Size</th>
                                            <th>Action</th>
                                        
                                        </tr>
                                        <?php 
                                        foreach ($data_list as $key => $value){
                                        ?>
                                        <tr>
                                            <td><?php echo $noUrut?></td>
                                            <input name='id_barang[]' value='<?php echo $value->id_barang?>' type='hidden' />
                                            
                                            <input name='serial[]' value='<?php echo $value->serial?>' type='hidden' />
                                            <td><?php echo $value->serial?></td>
                                            <input name='nama_product[]' value='<?php echo $value->nama_product?>' type='hidden' />
                                            <td><?php echo $value->nama_product?></td>
                                            <td><?php echo $value->nama_kategori?></td>
                                            <td><?php echo $value->color?></td>
                                            <input name='price[]' value='<?php echo $value->price?>' type='hidden' />
                                            <td>Rp <?php echo $value->price?></td>
                                            <input name='size[]' value='<?php echo $value->size?>' type='hidden' />
                                            <td><?php echo $value->size ?></td>
                                            <td>
                                                <input name='qty[]' type='number' /> 
                                            </td>                                            
                                        </tr>
                                        <?php
                                        $noUrut++;
                                        }
                                        ?>
                                    </tbody>
                                </table>

                                <button class="tiny button">Create</button>

                                </form>





                            </div>
                            <!-- end .timeline -->


                        </div>
                        <!-- box -->
                    </div>


                </div>

                <!-- End of Container Begin -->
