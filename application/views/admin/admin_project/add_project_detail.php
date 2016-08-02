

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
								
                                <a href="<?php echo site_url() ?>admin_project/project_detail/<?php echo $this->uri->segment(3) ?>/<?php echo $this->uri->segment(4) ?>" class="tiny button">Back</a>
                                
                                <form action='<?php echo base_url()?>admin_project/save_project_detail' method='post'>
                                
                                <input type='hidden' name='project_id' value='<?php echo $this->uri->segment(4) ?>'>
                                <input type='hidden' name='investor_id' value='<?php echo $this->uri->segment(3) ?>'>
                                          

                                <table style="width:100%;">
                                    <tbody>
                                        <tr class="text-right">
                                            <th>No.</th>
                                            <th>Detail</th>
                                            <th>Amount</th>
                                            
                                        </tr>
                                        <?php
                                        for ($i=0; $i < 20 ; $i++) { 
                                        ?>
                                        <tr>
                                            <td>
                                                <?php echo $noUrut?>
                                            </td>
                                            <td>
                                                <input type='text' name='detail[]'>
                                            </td>
                                            <td>
                                                <input type='text' name='amount[]'>
                                            </td>
                                                                                        
                                        </tr>
                                        <?php
                                        $noUrut++;
                                        }
                                        ?>

                                    </tbody>
                                    
                                    

                                </table>
                                <input class="tiny button" type='submit' value='Save'>
                                </form>

                            </div>
                            <!-- end .timeline -->


                        </div>
                        <!-- box -->
                    </div>


                </div>

                <!-- End of Container Begin -->
