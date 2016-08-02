

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

                                <a href="<?php echo site_url() ?>admin_stok" class="tiny button">Back</a> 
                                
                                <table style="width:100%;">
                                    <tbody>
                                        <tr class="text-right">
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Kategori</th>
                                            <th>Size</th>
                                            <th>Hpp</th>
                                            <th>Price</th>
                                            <th>State</th>
                                            <th>Investor</th>
                                            <th>Assign</th>
                                            
                                        </tr>
                                        <?php 

                                        //echo $count;

                                        for ($i=0; $i < $count; $i++) { 
                                            //echo $stok_id[$i].'<br>';
                                            $data_list = $this->m_admin_stok->getdata($stok_id[$i]);
                                        }


                                        foreach ($data_list as $key => $data_list) {
                                        // } ($i=0; $i < $count; $i++) { 
                                        ?>
                                        <tr>
                                            <td><?php echo $noUrut?></td>
                                            <td><?php echo $data_list->nama_product ?></td>
                                            <td><?php echo $data_list->nama_kategori ?></td>
                                            <td><?php echo $data_list->size ?></td>
                                            <td><?php echo $data_list->hpp ?></td>
                                            <td><?php echo $data_list->price ?></td>
                                            <td><?php echo $data_list->state ?></td>
                                            <td><?php echo $data_list->investor_name ?></td>
                                            <td><?php echo $data_list->store_name ?></td>

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
