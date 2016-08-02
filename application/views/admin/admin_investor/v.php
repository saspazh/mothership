

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
								
								<a href="<?php echo site_url() ?>admin_investor/add" class="tiny button">Add</a> 
								
                                <table style="width:100%;">
                                    <tbody>
                                        <tr class="text-right">
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>No HP</th>
                                            <th>Amount</th>
                                            
                                        </tr>
                                        <?php 
                                        $total_amount = 0;
                                        foreach ($data_list as $key => $value){
                                        ?>
                                        <tr>
                                            <td><?php echo $noUrut?></td>
                                            <td><?php echo $value->investor_name ?></td>
                                            <td><?php echo $value->phone_number ?></td>
                                            <td>Rp. <?php echo number_format($value->total_amount) ?></td>
                                            <td> 
                                                <a href="<?php echo site_url() ?>admin_investor/add_amount/<?php echo $value->investor_id ?>" class="tiny button">Add</a>                            
                                                <a href="<?php echo base_url()?>admin_investor/v_amount/<?php echo $value->investor_id ?>" class="tiny button" title="Amount">View</a>
                                                <a href="<?php echo base_url()?>admin_investor/edit/<?php echo $value->investor_id ?>" class="tiny button" title="Edit">Edit</a>
                                            </td>
                                            
                                        </tr>
                                        <?php
                                        $noUrut++;
                                        $total_amount = $total_amount+$value->total_amount;
                                        }
                                        ?>
                                    </tbody>

                                    <tfoot>
                                        <tr class="text-right">
                                            <th colspan='3'>Total Amount</th>
                                            <th colspan='2'>Rp. <?php echo number_format($total_amount) ?></th>
                                        </tr>
                                    </tfoot>

                                </table>





                            </div>
                            <!-- end .timeline -->


                        </div>
                        <!-- box -->
                    </div>


                </div>

                <!-- End of Container Begin -->
