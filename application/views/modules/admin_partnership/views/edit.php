                <!-- Container Begin -->
                <div class="row no-pad">

                    <div class="large-12 columns">
                        <div class="box bg-white">


                            <!-- /.box-header -->
                            <div class="box-body pad-forty" style="display: block;">
                                <!-- basic form -->

                                <div class="row">
                                    
                                    <div class="large-9 columns">
                                        <form action="<?php echo site_url()?>admin_partnership/editsave" method="post">
                                            
                                            <input type="hidden" name='id_partnership' value='<?php echo $db->id_partnership ?>'  />
                                                    
                                                                                                    
                                            <div class="row">
                                                <div class="large-12 columns">
                                                    <label>Partnership
                                                        <input type="text" value='<?php echo $db->nama_partnership?>' placeholder="Partnership" required name="nama_partnership" />
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