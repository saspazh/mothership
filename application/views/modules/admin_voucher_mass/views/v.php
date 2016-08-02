

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
								
								<a href="<?php echo site_url() ?>admin_voucher_mass/add" class="tiny button">Add</a> 
								
                                <table style="width:100%;">
                                    <tbody>
                                        <tr class="text-right">
                                            <th>No.</th>
                                            <th>Kode Voucher</th>
                                            <th>Berlaku</th>
                                            <th>Nominal</th>
                                            <th>Transaksi</th>
                                            <th>Created at</th>
                                            <th>Action</th>
                                        
                                        </tr>
                                        <?php 
                                        foreach ($data_list as $key => $value){
                                        ?>
                                        <tr>
                                            <td><?php echo $noUrut?></td>
                                            <td><?php echo $value->kode_event ?></td>
                                            <td><?php echo date('d/m/Y - H:i',strtotime($value->date_start)) ?> s/d <?php echo date('d/m/Y - H:i',strtotime($value->date_end)) ?></td>
                                            <td><?php echo $value->amount ?> <?php echo $value->percent ?></td>
                                            <td><?php echo $value->min_trx ?> s/d <?php echo $value->max_trx ?></td>
                                            <td><?php echo date('d/m/Y - H:i',strtotime($value->created_at)) ?></td>  
                                            <td> 
                                                <a href="<?php echo base_url()?>admin_voucher_mass/edit/<?php echo $value->voucher_mass_id ?>" class="fontello-th-list" title="Edit"></a>
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
