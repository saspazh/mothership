

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
								
								<a href="<?php echo site_url() ?>admin_slideshow/add" class="tiny button">Add</a> 
								
                                <table style="width:100%;">
                                    <tbody>
                                        <tr class="text-right">
                                            <th>No.</th>
                                            <th>Title</th>
                                            <th>path</th>
                                            <th>image</th>
                                            
                                        </tr>
                                        <?php 
                                        foreach ($data_list as $key => $value){
                                        ?>
                                        <tr>
                                            <td><?php echo $noUrut?></td>
                                            <td><?php echo $value->title ?></td>
                                            <td><?php echo $value->path ?></td>
                                            <td><?php echo $value->image ?></td>
                                            <td> 
                                                <a href="<?php echo base_url()?>admin_slideshow/edit/<?php echo $value->id_slideshow ?>" class="fontello-th-list" title="Edit"></a>
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
