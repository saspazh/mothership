            <?php
            foreach ($data_list as $key => $value) {
            
            ?>

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
                                    <span><?php echo $value->nama_privilege ?></span>
                                </h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body " style="display: block;">
                
                            <a href="<?php echo site_url() ?>admin_privilege/add/<?php echo $value->id_privilege ?>" class="tiny button">Add</a> 
                
                                <table style="width:100%;">
                                    <tbody>
                                        <tr class="text-right">
                                            <th>No.</th>
                                            <th>Privilege</th>
                                            <th>Action</th>
                                        
                                        </tr>
                                        <?php 
                                        $user = $this->db->query("SELECT * FROM `customer` where id_privilege='$value->id_privilege'")->result();
                                        $noUrut=1;
                                        //$user = $this->m_admin_privilege->get_user($value->id_privilege);

                                        foreach ($user as $v_user) {
                                        
                                        ?>
                                        <tr>
                                            <td><?php echo $noUrut?></td>
                                            <td><?php echo $v_user->username ?></td>
                                            <td> 
                                                <a href="<?php echo base_url()?>admin_privilege/delete/<?php echo $v_user->username ?>" class="fontello-th-list" title="Delete"></a>
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
                <?php
                }
                ?>