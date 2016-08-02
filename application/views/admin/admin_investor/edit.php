                <!-- Container Begin -->
                <div class="row no-pad">

                    <div class="large-12 columns">
                        <div class="box bg-white">


                            <!-- /.box-header -->
                            <div class="box-body pad-forty" style="display: block;">
                                <!-- basic form -->

                                <div class="row">
                                    
                                    <div class="large-9 columns">
                                        <form action="<?php echo site_url()?>admin_investor/editsave" method="post">
										    
                                            <input type="hidden" name='id_investor' value="<?php echo $db->id_investor ?>" />
                                                                                                    
                                            <div class="row">
                                                <div class="large-12 columns">
                                                    <label>Nama
                                                        <input type="text" placeholder="Nama" required name="nama" value="<?php echo $db->nama_investor ?>" />
                                                    </label>
                                                </div>
                                                
                                                <div class="large-12 columns">
                                                    <label>No HP
                                                        <input type="text" placeholder="No HP" required name="no_hp" value="<?php echo $db->no_hp ?>" />
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