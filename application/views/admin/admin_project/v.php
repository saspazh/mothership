

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
								
								<a href="<?php echo site_url() ?>admin_project/add" class="tiny button">Add</a> 
								
                                <table style="width:100%;">
                                    <tbody>
                                        <tr class="text-right">
                                            <th>No.</th>
                                            <th>Investor</th>
                                            <th>Nama Project</th>
                                            <th>Amount</th>
                                            
                                        </tr>
                                        <?php 
                                        $total_amount = 0;
                                        foreach ($data_list as $key => $value){
                                        ?>
                                        <tr>
                                            <td><?php echo $noUrut?></td>
                                            <td><?php echo $value->investor_name ?></td>
                                            <td><?php echo $value->project_name ?></td>
                                            <td>Rp. <?php echo number_format($value->total_amount) ?></td>
                                            <td> 
                                                <a href="<?php echo base_url()?>admin_project/project_detail/<?php echo $value->investor_id ?>/<?php echo $value->id ?>" class="tiny button" title="Amount">Detail</a>
                                                <a href="<?php echo base_url()?>admin_project/edit/<?php echo $value->id ?>" class="tiny button" title="Edit">Edit</a>
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
