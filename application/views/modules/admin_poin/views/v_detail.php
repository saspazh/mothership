

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
                                    <span>Poin <?php echo $this->uri->segment(3) ?></span>
                                </h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body " style="display: block;">
 
								<a href="<?php echo site_url() ?>admin_poin/add/<?php echo $this->uri->segment(3) ?>" class="tiny button">Add</a>
                                
								<table style="width:100%;">
                                    <tbody>
                                        <tr class="text-right">
                                            <th>No.</th>
                                            <th>poin</th>
                                            <th>Keterangan</th>
                                            <th>Created at</th>
                                            <th>Created by</th>
											<th>Action</th>
                                         
                                        </tr>
                                        <?php
                                        foreach ($data_list as $key => $value) {
                                        ?>
                                        <tr>
                                            <td><?php echo $noUrut?></td>
                                            <td><?php echo $value->poin ?></td>
                                            <td><?php echo $value->keterangan ?></td>
                                            <td><?php echo $value->tanggal ?></td>
                                            <td><?php echo $value->created_by ?></td>
                                            <td>
                                                <a href="<?php echo base_url()?>admin_poin/edit/<?php echo $value->id_poin ?>" class="fontello-th-list" title="View detail"></a>
                                                <a href="<?php echo base_url()?>admin_poin/delete/<?php echo $value->id_poin ?>/<?php echo $this->uri->segment(3) ?>" onclick="return confirm('Anda yakin?')" class="fontello-th-list" title="View detail"></a>
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
