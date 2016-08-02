

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
                                    <span><?php echo $title ?></span>
                                </h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body " style="display: block;">

                            

                            <form action='<?php echo base_url() ?>admin_statistik' method='get'>
                                <fieldset>
                                    <legend>Filter</legend>

                                <select class='small-2 columns' name='product'>
                                    <?php
                                    foreach ($product as $key => $value) {
                                    ?>
                                    <option value='<?php echo $value->id_product ?>' ><?php echo $value->nama_product ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                <select class='small-2 columns' name='investor'>
                                    <?php
                                    foreach ($investor as $key => $value) {
                                    ?>
                                    <option value='<?php echo $value->id_investor ?>' ><?php echo $value->nama_investor ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                <select class='small-2 columns' name='assign'>
                                    <?php
                                    foreach ($assign as $key => $value) {
                                    ?>
                                    <option value='<?php echo $value->first_name ?>' ><?php echo $value->first_name ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>

                                
                                <input class="tiny button" type='submit' value='submit'>
                                </fieldset>
                            </form>

                            <form action='<?php echo base_url() ?>admin_statistik' method='get'>
                                <fieldset>
                                    <legend>Filter</legend>

                                <select class='small-2 columns' name='product'>
                                    <?php
                                    foreach ($product as $key => $value) {
                                    ?>
                                    <option value='<?php echo $value->id_product ?>' ><?php echo $value->nama_product ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                <select class='small-2 columns' name='investor'>
                                    <?php
                                    foreach ($investor as $key => $value) {
                                    ?>
                                    <option value='<?php echo $value->id_investor ?>' ><?php echo $value->nama_investor ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                <select class='small-2 columns' name='assign'>
                                    <?php
                                    foreach ($assign as $key => $value) {
                                    ?>
                                    <option value='<?php echo $value->first_name ?>' ><?php echo $value->first_name ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>

                                
                                <input class="tiny button" type='submit' value='submit'>
                                </fieldset>
                            </form>


								
								<a href="<?php echo site_url() ?>admin_investor/add" class="tiny button">Add</a> 
								
                                <table style="width:100%;">
                                    <tbody>
                                        <tr class="text-right">
                                            <th>No</th>
                                            <th>Kode barang</th>
                                            <th>Nama</th>
                                            <th>Size</th>
                                            <th>Hpp</th>
                                            <th>Price</th>
                                            <th>Investor</th>
                                            <th>
                                                <input onclick="" type='checkbox'>
                                            </th>
                                            <th>State</th>
                                            <th>Assign</th>
                                            
                                        </tr>
                                        <?php 
                                        $total_hpp = 0;
                                        $total_price = 0;
                                        foreach ($data_list as $key => $value){
                                        ?>
                                        <tr>
                                            <td><?php echo $noUrut?></td>
                                            <td><?php echo $value->kode_barang ?></td>
                                            <td><?php echo $value->nama_product ?></td>
                                            <td><?php echo $value->size ?></td>
                                            <td><?php echo $value->hpp ?></td>
                                            <td><?php echo $value->price ?></td>
                                            <td><?php echo $value->nama_investor ?></td>
                                            <td><input name='id_stok[]' type='checkbox'></td>
                                            <td><?php echo $value->state ?></td>
                                            <td><?php echo $value->ket ?></td>
                                            
                                            
                                        </tr>
                                        <?php
                                        $noUrut++;
                                        $total_hpp = $total_hpp+$value->hpp;
                                        $total_price = $total_price+$value->price;
                                        }
                                        ?>
                                    </tbody>

                                    <tfoot>
                                        <tr class="text-right">
                                            <th colspan='4'>Total Amount</th>
                                            <th colspan='1'>Rp. <?php echo number_format($total_hpp) ?></th>
                                            <th colspan='1'>Rp. <?php echo number_format($total_price) ?></th>
                                            <th colspan='4'></th>
                                        </tr>
                                    </tfoot>

                                </table>





                            </div>
                            <!-- end .timeline -->


                        </div>
                        <!-- box -->
                    </div>


                </div>

                <!-- End of Container Begin -->
