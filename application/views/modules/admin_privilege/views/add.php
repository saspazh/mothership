                <!-- Container Begin -->
                <div class="row no-pad">

                    <div class="large-12 columns">
                        <div class="box bg-white">


                            <!-- /.box-header -->
                            <div class="box-body pad-forty" style="display: block;">
                                <!-- basic form -->

                                <div class="row">
                                    
                                    <div class="large-9 columns">
                                        <form action="<?php echo site_url()?>admin_privilege/save" method="post">

                                            <input type="hidden" name="id_privilege" value='<?php echo $this->uri->segment(3) ?>' />
                                                                                                    
                                            <div class="row">
                                                <div class="large-12 columns">
                                                    <label>Username
                                                        <input type="text" placeholder="Username" required name="username" />
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