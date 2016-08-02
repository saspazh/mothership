<!-- Container Begin -->

								



                <div class="row no-pad">

                    <div class="large-12 columns">
                        <div class="box bg-white">


                            <!-- /.box-header -->
                            <div class="box-body pad-forty" style="display: block;">
                                <!-- Masked Input -->
							<form action='<?php echo base_url()?>news/edit_post' method='post'>
                                <div class="row">
                                    
									<!-- Inline form -->
									<input type="hidden" style="width: 50%;" name="id_informasi" value="<?php echo $db->id_informasi ?>" class="text">
								
									<div class="large-3 columns">
                                        <p><strong>Judul</strong>
                                        </p>
                                    </div>
                                    <div class="large-9 columns">
                                            <div class="row">
                                                <div class="small-8">
                                                    <div class="row">
                                                        <div class="small-2 columns">
                                                            <label for="right-label" class="right"></label>
                                                        </div>
                                                        <div class="small-10 columns">
                                                            <input type="text" name='judul' id="right-label" placeholder="Inline Text Input" value="<?php echo $db->judul ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                    </div>
									<!-- end of Inline form -->
									<hr>
									
									<!-- Inline form -->

								
									<div class="large-3 columns">
                                        <p><strong>Kategori</strong>
                                        </p>
                                    </div>
                                    <div class="large-9 columns">
                                            <div class="row">
                                                <div class="small-8">
                                                    <div class="row">
                                                        <div class="small-2 columns">
                                                            <label for="right-label" class="right"></label>
                                                        </div>
                                                        <div class="small-10 columns">
														
														<select required name="id_kategori" >
															<option value="" selected>--Pilih--</option>
															<?php
															$asd = $this->db->query("select * from kategori")->result();
															foreach($asd as $dsa){
															?>
															<option value="<?php echo $dsa->id_kategori; ?>" <?php if($db->id_kategori==$dsa->id_kategori) echo'selected'?>><?php echo $dsa->kategori; ?></option>
															<?php 
															} 
															?>
														</select>
														
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                    </div>
									
									<div class="large-3 columns">
                                        <p><strong>Status</strong>
                                        </p>
                                    </div>
                                    <div class="large-9 columns">
                                            <div class="row">
                                                <div class="small-8">
                                                    <div class="row">
                                                        <div class="small-2 columns">
                                                            <label for="right-label" class="right"></label>
                                                        </div>
                                                        <div class="small-10 columns">
														
														<select required name="status" >
															<option value="Publish" <?php if($db->status=='Publish') echo'selected'?> >Publish</option>
															<option value="Draft" <?php if($db->status=='Draft') echo'selected'?>>Draft</option>
														</select>
														
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                    </div>
									
									<div class="large-3 columns">
                                        <p><strong>Comment</strong>
                                        </p>
                                    </div>
                                    <div class="large-9 columns">
                                            <div class="row">
                                                <div class="small-8">
                                                    <div class="row">
                                                        <div class="small-2 columns">
                                                            <label for="right-label" class="right"></label>
                                                        </div>
                                                        <div class="small-10 columns">
														
														<select required name="comment" >
															<option value="Active" <?php if($db->comment_status=='Active') echo'selected'?> >Active</option>
															<option value="Inactive" <?php if($db->comment_status=='Inactive') echo'selected'?>>Inactive</option>
														</select>
														
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                    </div>
									<!-- end of Inline form -->
									<hr>
									
                                    <div class="large-3 columns">
                                        <p><strong>Content</strong></p>
                                        

                                    </div>
                                    <div class="large-9 columns">
                                        
                                            <textarea name='content' id="edumix-editor" rows="8" cols="150">
                                                <?php echo $db->content ?>
                                            </textarea>
											
											
											
                                        



                                    </div>
                                </div>
                                <!-- end Masked Input -->
                                <hr>
								
								<button type="submit" class="tiny">Submit</button>
                            </form>    
                            </div>
                            <!-- end .timeline -->
                        </div>
                        <!-- box -->
                    </div>
                </div>
                <!-- End of Container Begin -->