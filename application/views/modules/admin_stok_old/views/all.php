

                <div class="row">

                    <div class="large-12 columns">
                        <div class="box">
                            <div class="box-header bg-transparent">
                                <!-- tools box -->
                                <div class="pull-right box-tools">

                                    <span class="box-btn" data-widget="collapse"><i class="icon-minus"></i>
                                    </span>
                                    <span class="box-btn" data-widget="remove"><i class="icon-cross"></i>
                                    </span>
                                </div>
                                <h3 class="box-title"><i class="icon-view-list"></i>
                                    <span>RESPONSIVE</span>
                                </h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body " style="display: block;">

                            <form action='<?php echo base_url() ?>admin_stok/all' method='post'>
                                <fieldset>

                                <select class='small-2 columns' name='t_awal'>
                                    <?php
                                    $asd = date('Y');
                                    $y=$asd-5;
                                    for($i=$y; $i<=$asd; $i++){
                                    ?>
                                    <option value='<?php echo $i?>' <?php if($i==$t_awal){echo 'selected';}else{} ?>><?php echo $i ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>

                                <select class='small-2 columns' name='b_awal'>
                                    <option value='1' <?php if(1==$b_awal){echo 'selected';}else{} ?> >Jan</option>
                                    <option value='2' <?php if(2==$b_awal){echo 'selected';}else{} ?> >Feb</option>
                                    <option value='3' <?php if(3==$b_awal){echo 'selected';}else{} ?> >Mar</option>
                                    <option value='4' <?php if(4==$b_awal){echo 'selected';}else{} ?> >Apr</option>
                                    <option value='5' <?php if(5==$b_awal){echo 'selected';}else{} ?> >Mei</option>
                                    <option value='6' <?php if(6==$b_awal){echo 'selected';}else{} ?> >Jun</option>
                                    <option value='7' <?php if(7==$b_awal){echo 'selected';}else{} ?> >Jul</option>
                                    <option value='8' <?php if(8==$b_awal){echo 'selected';}else{} ?> >Agu</option>
                                    <option value='9' <?php if(9==$b_awal){echo 'selected';}else{} ?> >Sep</option>
                                    <option value='10' <?php if(10==$b_awal){echo 'selected';}else{} ?> >Okt</option>
                                    <option value='11' <?php if(11==$b_awal){echo 'selected';}else{} ?> >Nov</option>
                                    <option value='12' <?php if(12==$b_awal){echo 'selected';}else{} ?> >Des</option>
                                </select>

                                <select class='small-2 columns' name='tgl_awal'>
                                    <?php
                                    for($i=1; $i<=31; $i++){
                                    ?>
                                    <option value='<?php echo $i?>' <?php if($i==$tgl_awal){echo 'selected';}else{}?> ><?php echo $i ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>

                                <input class="tiny button" type='submit' value='submit'>

                                    
                                
                                
                                </fieldset>
                            </form>

                                <table style="width:100%;">
                                    <tbody>
                                        <tr class="text-right">
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Warna</th>
                                            <th>Size</th>
                                            <th>Serial</th>

                                        
                                        </tr>
                                        <?php
                                        foreach ($data_list as $key => $value) {
                                        ?>
                                        <tr>
                                            <td><?php echo $noUrut?></td>
                                            <td><?php echo $value->nama_product ?></td>
                                            <td><?php echo $value->color ?></td>
                                            <td><?php echo $value->size ?></td>
                                            <td><?php echo $value->serial ?></td>
                                            
                                            <td>
                                                <a href="<?php echo base_url()?>admin_statistik/detail/'<?php echo $value->id_stok ?>'" class="fontello-th-list" title="View detail"></a>
                                                <a href="<?php echo base_url()?>admin_statistik/grafik?file_name=<?php echo $value->id_stok ?>" class="fontello-chart" title="Grafik"></a>
                                            </td>
                                            
                                        </tr>
                                        <?php
                                        $noUrut++;
                                        }
                                        ?>
                                    </tbody>
                                </table>





                            </div>
                            <!-- end .timeline -->


                        </div>
                        <!-- box -->
                    </div>


                </div>

                <!-- End of Container Begin -->
