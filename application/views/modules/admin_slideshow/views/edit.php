                <!-- Container Begin -->
                <div class="row no-pad">

                    <div class="large-12 columns">
                        <div class="box bg-white">


                            <!-- /.box-header -->
                            <div class="box-body pad-forty" style="display: block;">
                                <!-- basic form -->

                                <div class="row">
                                    
                                    <div class="large-9 columns">
                                        <form action="<?php echo site_url()?>admin_slideshow/editsave" method="post">
										    
                                            <input type="hidden" name='id_slideshow' value="<?php echo $db->id_slideshow ?>" />
                                                                                                    
                                            <div class="row">
                                                <div class="large-12 columns">
                                                    <label>Title
                                                        <textarea placeholder="Title" name="title">
                                                            <?php echo $db->title ?>
                                                        </textarea>
                                                    </label>
                                                </div>
                                                
                                                <div class="large-12 columns">
                                                    <label>path
                                                        <input type="text" placeholder="ex: path/folder/" required name="path" value="<?php echo $db->path ?>" />
                                                    </label>
                                                </div>
                                                

                                                    
                                                
                                                <div class="large-12 columns"> 
                                                    <label>image
                                                        <input type="text" placeholder="ex : image.jpg" name="image" value="<?php echo $db->image ?>" />
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