

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


                            <form action='<?php echo base_url() ?>admin_stok' method='get'>
                                <fieldset>
                                    <legend>Filter</legend>

                                <select class='small-2 columns' name='category'>
                                    <option value='all' >All Category</option>
                                    <?php
                                    foreach ($category_list as $key => $category_list) {
                                    ?>
                                    <option value='<?php echo $category_list->id_kategori?>'  <?php if($category_list->id_kategori == $category){ echo 'selected';}else{} ?> ><?php echo $category_list->nama_kategori ?></option>
                                    <?
                                    }
                                    ?>
                                </select>
                                <select class='small-2 columns' name='product'>
                                    <option value='all' >All Product</option>
                                    <?php
                                    foreach ($product_list as $key => $product_list) {
                                    ?>
                                    <option value='<?php echo $product_list->id_product?>' <?php if($product_list->id_product == $product){ echo 'selected';}else{} ?> ><?php echo $product_list->nama_product ?></option>
                                    <?
                                    }
                                    ?>
                                </select>
                                <select class='small-2 columns' name='investor'>
                                    <option value='all' >All Investor</option>
                                    <?php
                                    foreach ($investor_list as $key => $investor_list) {
                                    ?>
                                    <option value='<?php echo $investor_list->investor_id?>' <?php if($investor_list->investor_id == $investor){ echo 'selected';}else{} ?> ><?php echo $investor_list->investor_name ?></option>
                                    <?
                                    }
                                    ?>
                                </select>
                                <select class='small-2 columns' name='store'>
                                    <option value='all' >All Store</option>
                                    <?php
                                    foreach ($store_list as $key => $store_list) {
                                    ?>
                                    <option value='<?php echo $store_list->id?>' <?php if($store_list->id == $store){ echo 'selected';}else{} ?> ><?php echo $store_list->store_name ?></option>
                                    <?
                                    }
                                    ?>
                                </select>
                                
                                
                                <input class="tiny button" type='submit' value='submit'>
                                </fieldset>
                            </form>


								
								<a href="<?php echo site_url() ?>admin_stok/add" class="tiny button">Add</a> 
								
                            <form action='<?php echo base_url() ?>admin_stok/edit' method='post'>
                                <fieldset>
                                    <legend>Filter</legend>

                                    <input class="tiny button" type='submit' value='submit'>


                                </fieldset>

                                
                                <table style="width:100%;">
                                    <tbody>
                                        <tr class="text-right">
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Kategori</th>
                                            <th>Size</th>
                                            <th>Hpp</th>
                                            <th>Price</th>
                                            <th>
                                                <input onclick="" type='checkbox'>
                                            </th>
                                            <th>State</th>
                                            <th>Investor</th>
                                            <th>Assign</th>
                                            
                                        </tr>
                                        <?php 
                                        $total_hpp = 0;
                                        $total_price = 0;
                                        foreach ($data_list as $key => $value){
                                        ?>
                                        <tr>
                                            <td><?php echo $noUrut?></td>
                                            <td><?php echo $value->nama_product ?></td>
                                            <td><?php echo $value->nama_kategori ?></td>
                                            <td><?php echo $value->size ?></td>
                                            <td><?php echo $value->hpp ?></td>
                                            <td><?php echo $value->price ?></td>
                                            <td><input name='id_stok[]' value='<?php echo $value->id_stok ?>' type='checkbox'></td>
                                            <td><?php echo $value->state ?></td>
                                            <td><?php echo $value->investor_name ?></td>
                                            <td><?php echo $value->store_name ?></td>

                                            
                                            
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
                            </form>





                            </div>
                            <!-- end .timeline -->


                        </div>
                        <!-- box -->
                    </div>


                </div>

                <!-- End of Container Begin -->
