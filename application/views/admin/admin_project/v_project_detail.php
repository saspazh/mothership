

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
								
                                <a href="<?php echo site_url() ?>admin_project" class="tiny button">Back</a>
                                <a href="<?php echo site_url() ?>admin_project/edit_project_detail/<?php echo $this->uri->segment(3)?>/<?php echo $this->uri->segment(4)?>" class="tiny button">Edit</a> 
                                <a href="<?php echo site_url() ?>admin_project/add_project_detail/<?php echo $this->uri->segment(3)?>/<?php echo $this->uri->segment(4)?>" class="tiny button">Add</a> 
                                
                                <table style="width:100%;">
                                    <tbody>
                                        <tr class="text-right">
                                            <th>No.</th>
                                            <th>Detail</th>
                                            <th>Amount</th>
                                            
                                        </tr>
                                        <?php 
                                        foreach ($data_list as $key => $value){
                                        ?>
                                        <tr>
                                            <td><?php echo $noUrut?></td>
                                            <td><?php echo $value->detail ?></td>
                                            <td>Rp.<?php echo number_format($value->amount) ?></td>
                                                                                        
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
