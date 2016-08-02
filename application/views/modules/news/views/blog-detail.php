<div class="row">
                    <div class="large-9 columns">

                        <article class="reading-nest">
                            <h3><a href="#"><?php echo $db->judul ?></a></h3>
                            <h6>Written by <a href="#">Admin</a> on <?php echo date('M d, Y',strtotime($db->tanggal))?>.</h6>
                            
							<?php echo $db->content ?>
							
                        </article>
                        <hr/>
                        <div class="blog-comment">
                            <h3>Comment</h3>

                            <ul>
								
								<?php
								$noUrut=1;
								foreach($data_list as $baris){
									if(($noUrut % 2)==0){ $gambar='32.jpg';}
									if(($noUrut % 2)==1){ $gambar='33.jpg';}
								?>
								
                                <li>
                                    <div class="row">
                                        <div class="large-2 columns"> <img alt="" src="http://api.randomuser.me/portraits/thumb/women/<?=$gambar?>">
                                        </div>
                                        <div class="large-10 columns">
                                            <b><?=$baris->nama?></b>
                                            <h5><?php echo date('M d,Y  H:i',strtotime($baris->tanggal))?> AM</h5>
                                            <p>
											<?php echo $baris->comment ?>
                                            <br>
											<!--<span>Reply</span>-->
											<p>
                                        </div>
                                    </div>
                                </li>
								
								<?php
								$noUrut++;
								}
								?>

                            </ul>

                            <h3>Reply</h3>

                            <form action='<?php echo base_url() ?>comment/save' class="blog-comment-input" method='post'>

                                <input type="hidden" name='id_informasi' value='<?php echo $db->id_informasi?>' />

                                <div class="row">
                                    <div class="large-12 columns">
                                        <label>
                                            <textarea required name='comment' placeholder="" rows="8"></textarea>
                                        </label>
                                        <button href="#" class="right tiny bg-black button">Submit</button>
                                    </div>

                                </div>
                            </form>

                        </div>



                    </div>


                    <!-- widget blog -->
                    <div class="large-3 columns">
                        <div class="widget-blog">
                            <h5><span>About</span> Edumix</h5>
                            <p>
                                Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.
                            </p>
                            <h5>Featured</h5>
                            <div class="panel">
                                <p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow.</p>
                                <a href="#">Read More <i class="icon-arrow-thin-right"></i></a>
                            </div>

                            <h5>Categories</h5>
                            <ul>
                                <li><a href="#">News</a>
                                </li>
                                <li><a href="#">Code</a>
                                </li>
                                <li><a href="#">Design</a>
                                </li>
                                <li><a href="#">Fun</a>
                                </li>
                                <li><a href="#">Weasels</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end of widget blog -->
                    <!-- Footer -->
                 <footer>
                    <div id="footer">Copyright &copy; 2015 <a href="http://themeforest.net/user/matirasa">Matirasa</a> Made with <i class="fontello-heart-1 text-green"></i></div>

                </footer>



                </div>
