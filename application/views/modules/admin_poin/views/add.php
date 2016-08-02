                <!-- Container Begin -->
                <div class="row no-pad">

                    <div class="large-12 columns">
                        <div class="box bg-white">


                            <!-- /.box-header -->
                            <div class="box-body pad-forty" style="display: block;">
                                <!-- basic form -->

                                <div class="row">
                                    <div class="large-3 columns">
                                        <p><strong>Add poin</strong>
                                        </p>
                                        

                                    </div>
                                    <div class="large-9 columns">
                                        <form action="<?php echo site_url()?>admin_poin/save" method="post">
										                                                    
                                            <div class="row">
                                                <div class="large-12 columns">
                                                    <label>Username
                                                        <input type="text" placeholder="Username" name='username' value="<?php echo $this->uri->segment(3) ?>" />
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="large-6 columns">
                                                    <label>Poin
                                                        <input type="number" placeholder="Poin" required name="poin" />
                                                    </label>
                                                </div>
                                                <div class="large-6 columns"> 
                                                    <label>Keterangan
                                                        <input type="text" placeholder="Keterangan (Event)" required name="event" />
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