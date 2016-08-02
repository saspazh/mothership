                <!-- Container Begin -->
                <div class="row no-pad">

                    <div class="large-12 columns">
                        <div class="box bg-white">


                            <!-- /.box-header -->
                            <div class="box-body pad-forty" style="display: block;">
                                <!-- basic form -->

                                <div class="row">
                                    
                                    <div class="large-9 columns">
                                        <form action="<?php echo site_url()?>admin_investor/editsaveamount" method="post">
										    
                                            <input type="hidden" name='id' value="<?php echo $db->id ?>" />
                                            <input type="hidden" name='investor_id' value="<?php echo $db->investor_id ?>" />
                                                                                                    
                                            <div class="row">
                                                <div class="large-12 columns">
                                                    <label>Amount
                                                        <input type="text" placeholder="Amount" required name="amount" value="<?php echo $db->amount ?>" />
                                                    </label>
                                                </div>
                                                
                                                <div class="large-12 columns">
                                                    <label>Date
                                                        <input type="date" placeholder="Date" required name="date" value="<?php echo $db->date ?>" />
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