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
                                        <form action="<?php echo site_url()?>admin_voucher_mass/save" method="post">
                                            
                                                                                                    
                                            <div class="row">
                                                <div class="large-12 columns">
                                                    <label>Event
                                                        <input type="text" placeholder="Event" required name="event" />
                                                    </label>
                                                </div>
                                                
                                                <div class="large-12 columns">
                                                    <label>Kode Event
                                                        <input type="text" placeholder="Kode event" required name="kode_event" />
                                                    </label>
                                                </div>
                                                
                                                <div class="row columns">
                                                    <div class="large-2 columns">
                                                        <label>Tahun start
                                                            <input name='thn_start' type="text" placeholder="YYYY" value='<?php echo date('Y')?>' />
                                                        </label>
                                                    </div>
                                                    <div class="large-2 columns">
                                                        <label>Bulan start
                                                            <input name='bln_start' type="text" placeholder="MM" value='<?php echo date('m')?>' />
                                                        </label>
                                                    </div>
                                                    <div class="large-2 columns">
                                                        <label>Tanggal start
                                                            <input name='tgl_start' type="text" placeholder="DD" value='<?php echo date('d')?>' />
                                                        </label>
                                                    </div>
                                                    <div class="large-3 columns">
                                                        <label>Hour start
                                                            <select name='hour_start'>
                                                                <?php
                                                                for($i=0; $i<=23; $i++){
                                                                ?>
                                                                    <option value='<?php echo $i ?>'><?php echo $i ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                                
                                                            </select>
                                                        </label>    
                                                    </div>

                                                    <div class="large-3 columns">
                                                        <label>Menit start
                                                            <select name='menit_start'>
                                                                <?php
                                                                for($i=0; $i<=59; $i++){
                                                                ?>
                                                                    <option value='<?php echo $i ?>'><?php echo $i ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </label>    
                                                    </div>

                                                </div>

                                                <div class="row columns">
                                                    <div class="large-2 columns">
                                                        <label>Tahun end
                                                            <input name='thn_end' type="text" placeholder="YYYY" value='<?php echo date('Y')?>' />
                                                        </label>
                                                    </div>
                                                    <div class="large-2 columns">
                                                        <label>Bulan end
                                                            <input name='bln_end' type="text" placeholder="MM" value='<?php echo date('m')?>' />
                                                        </label>
                                                    </div>
                                                    <div class="large-2 columns">
                                                        <label>Tanggal end
                                                            <input name='tgl_end' type="text" placeholder="DD" value='<?php echo date('d')?>' />
                                                        </label>
                                                    </div>
                                                    <div class="large-3 columns">
                                                        <label>Hour end
                                                            <select name='hour_end'>
                                                                <?php
                                                                for($i=0; $i<=23; $i++){
                                                                ?>
                                                                    <option <?php if($i==23){ echo 'selected';}else{} ?> value='<?php echo $i ?>'><?php echo $i ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                                
                                                            </select>
                                                        </label>    
                                                    </div>

                                                    <div class="large-3 columns">
                                                        <label>Menit end
                                                            <select name='menit_end'>
                                                                <?php
                                                                for($i=0; $i<=59; $i++){
                                                                ?>
                                                                    <option <?php if($i==59){ echo 'selected';}else{} ?> value='<?php echo $i ?>'><?php echo $i ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </label>    
                                                    </div>

                                                </div>

                                                    
                                                    
                                                <div class="large-12 columns"> 
                                                    <label>Harga
                                                        <input type="text" placeholder="Harga" required name="harga" />
                                                    </label>
                                                </div>
                                                
                                                <div class="large-12 columns"> 
                                                    <label>Persen
                                                        <input type="text" placeholder="Harga dalam persen" name="persen" />
                                                    </label>
                                                </div>
                                                
                                                <div class="large-12 columns"> 
                                                    <label>Minimal transaksi
                                                        <input type="text" placeholder="Minimal transaksi" required name="min_trx" />
                                                    </label>
                                                </div>
                                                
                                                <div class="large-12 columns"> 
                                                    <label>Maximal transaksi
                                                        <input type="text" placeholder="Maximal transaksi" required name="max_trx" />
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