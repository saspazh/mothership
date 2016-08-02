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
                                            <span><?php echo $title ?></span>
                                        </h3>
                                    </div>

                                    


                            <!-- /.box-header -->
                            <div class="box-body pad-forty" style="display: block;">
                                <!-- basic form -->

                                <div class="row">


                                    
                                    <div class="large-9 columns">
                                        <form action="<?php echo site_url()?>admin_investor/save_amount" method="post">
                                            
                                            <input type="hidden" value='<?php echo $this->uri->segment(3) ?>' name="investor_id" />
                                                    

                                            <div class="row">
                                                <div class="large-12 columns">
                                                    <label>Amount
                                                        <input type="text" placeholder="Amount" required name="amount" />
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