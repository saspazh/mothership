

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
								
								<a href="<?php echo site_url() ?>admin_investor/add_amount/<?php echo $this->uri->segment(3) ?>" class="tiny button">Add</a> 
                                <a href="<?php echo site_url() ?>admin_investor" class="tiny button">Back</a> 
                                
                                <table style="width:100%;">
                                    <tbody>
                                        <tr class="text-right">
                                            <th>No.</th>
                                            <th>Amount</th>
                                            <th>Date</th>
                                            
                                        </tr>
                                        <?php 
                                        foreach ($data_list as $key => $value){
                                        ?>
                                        <tr>
                                            <td><?php echo $noUrut?></td>
                                            <td><?php echo $value->amount ?></td>
                                            <td><?php echo $value->date ?></td>
                                            <td> 
                                                <a href="<?php echo base_url()?>admin_investor/v_amount/<?php echo $value->id ?>" class="fontello-th-list" title="Amount"></a>
                                                <a href="<?php echo base_url()?>admin_investor/editamount/<?php echo $value->id ?>" class="fontello-th-list" title="Edit"></a>
                                                <a href="<?php echo base_url()?>admin_investor/deleteamount/<?php echo $value->id ?>" onclick="return confirm('Anda akan menghapus?')" class="fontello-th-list" title="Delete"></a>
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
