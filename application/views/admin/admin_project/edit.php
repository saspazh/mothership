                <!-- Container Begin -->
                <div class="row no-pad">

                    <div class="large-12 columns">


                        <div class="box bg-white">

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
                            <div class="box-body pad-forty" style="display: block;">
                                <!-- basic form -->

                                <div class="row">


                                    
                                    <div class="large-9 columns">
                                        <form action="<?php echo site_url()?>admin_project/save" method="post">
                                            
                                                                                                    
                                            <div class="row">
                                                <div class="large-12 columns">
                                                    <label>Nama project
                                                        <input type="text" placeholder="Nama Project" required name="project_name" value="<?php echo $db->project_name ?>" />
                                                    </label>
                                                </div>
                                                                                                
                                                <div class="large-12 columns">
                                                        <label>Investor
                                                            <select name='investor_id'>
                                                                <?php
                                                                foreach ($investor as $key => $value) {
                                                                ?>
                                                                    <option value='<?php echo $value->investor_id ?>' <?php ($value->investor_id = $db->investor_id) ? echo 'selected'; :  echo'';  ?> ><?php echo $value->investor_name ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                                
                                                            </select>
                                                        </label>    
                                                </div>

                                                <div class="large-12 columns">
                                                    <label>Start Date
                                                        <input type="date" placeholder="Start date" required name="start_date" value="" />
                                                    </label>
                                                </div>

                                            </div>

                                                

                                            <hr>
                                            <button type="submit" class="tiny">Submit</button>
                                        </form>
                                    </div>
                                     
                                    
                                </div>
                                <!-- end of basic form -->

                            </div>
                            <!-- end .timeline -->


                        </div>
                        <!-- box -->
                    </div>
                </div>
                <!-- End of Container Begin --> 