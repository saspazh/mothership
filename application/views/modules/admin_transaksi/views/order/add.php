<div class="row">
          <div class="col-lg-12">
            
            
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-12">

            <form role="form" action='<? echo site_url()?>admin_transaksi/save' method='post'>
			  
			 
			  <div class="form-group">
                <label>Customer</label>
                <select class="form-control" name='id_customer'>
                <?
								
				$asd = $this->db->query("SELECT id_customer, first_name, last_name FROM  customer ")->result();
				foreach($asd as $dsa){
				?>
				<option value="<?php echo $dsa->id_customer; ?>" <? if($dsa->id_customer == $this->uri->segment(3)){?>selected<?}?>><?php echo $dsa->first_name.' '.$dsa->last_name; ?></option>
				<?php } ?>
				
				</select>
              </div>
			  
			  <div class="form-group">
                <label>Jenis</label>
                <div class="radio">
                  <label>
                    <input type="radio" name="status" id="optionsRadios1" value="1" checked>
                    Cash
                  </label>
                </div>
               <div class="radio">
                  <label>
                    <input type="radio" name="status" id="optionsRadios2" value="0">
                    Assign
                  </label>
                </div>
              </div>
			  
<hr>

		<div class="row">
          <div class="col-lg-12">
            <!--<h2>Contextual Classes</h2>-->
            <div class="table-responsive">
						<table class="table table-bordered table-hover table-striped tablesorter">
			                <thead>
			                  <tr>
			                    <th>No<i class="fa fa-sort"></i></th>
			                    <th>Nama<i class="fa fa-sort"></i></th>
			                    <th>Foto <i class="fa fa-sort"></i></th>
			                    <th>Warna <i class="fa fa-sort"></i></th>
			                    <th>Harga <i class="fa fa-sort"></i></th>
			                    <th>Size <i class="fa fa-sort"></i></th>
			                    <th>Stok <i class="fa fa-sort"></i></th>
			                    <th>Sale Price <i class="fa fa-sort"></i></th>
			                    <th>Order <i class="fa fa-sort"></i></th>
			                  </tr>
			                </thead>
			                <tbody>
			                  <? foreach($data_list as $baris){?>
								<?
								$expsize = explode(',',$baris->size);
								$rowspan = count($expsize);
								$hitung=0;
								foreach($expsize as $esize){
								?>
								<?
								if($hitung == 0){
								?>
								  <tr>
									<td rowspan='<? echo $rowspan?>'><? echo $noUrut?></td>
									<td rowspan='<? echo $rowspan?>'><? echo $baris->nama_barang?></td>
									<td rowspan='<? echo $rowspan?>'><img src='<? echo base_url() ?><? echo $baris->path?>/<? echo $baris->file_name?>' width='100px'></td>
									<td rowspan='<? echo $rowspan?>'><? echo $baris->color?></td>
									<td rowspan='<? echo $rowspan?>'>Rp <? echo $baris->price?></td>
									<td rowspan='0'>
										<input name='id_barang[]' type='hidden' value='<? echo $baris->id_barang ?>' />
										<input name='size[]' type='hidden' value='<? echo $expsize[$hitung] ?>' />
										<? 
										echo $expsize[$hitung] 
										?>
									</td>
									<?
									$auto = $this->db->query("SELECT COUNT( id_barang ) AS jml
FROM stok a
LEFT OUTER JOIN penjualan b ON a.id_stok = b.id_stok
WHERE b.id_penjualan IS NULL 
AND a.id_barang =  '$baris->id_barang'
AND a.size =  '$expsize[$hitung]'");
									?>
									<td rowspan='0'><? echo $auto->last_row()->jml ?></td>
									<td><input class="form-control" value='0' name='price[]' type='number' min='0'></td>
									<td><input class="form-control" value='0' name='jumlah[]' type='number' max='<? echo $auto->last_row()->jml ?>' min='0'></td>
								  </tr>
								<?
								}else{
								?>
								  <tr>
									<td>
										<input name='id_barang[]' type='hidden' value='<? echo $baris->id_barang ?>' />
										<input name='size[]' type='hidden' value='<? echo $expsize[$hitung] ?>' />
										<? 
										echo $expsize[$hitung] 
										?>
									</td>
									<?
									$auto = $this->db->query("SELECT COUNT( id_barang ) AS jml
FROM stok a
LEFT OUTER JOIN penjualan b ON a.id_stok = b.id_stok
WHERE b.id_penjualan IS NULL 
AND a.id_barang =  '$baris->id_barang'
AND a.size =  '$expsize[$hitung]'");
									?>
									<td rowspan='0'><? echo $auto->last_row()->jml ?></td>
									<td><input class="form-control" value='0' name='price[]' type='number' min='0'></td>
									<td><input class="form-control" value='0' name='jumlah[]' type='number' max='<? echo $auto->last_row()->jml ?>' min='0'></td>
								  </tr>
								<?
								}
								$hitung++;
								}
								?>
								
							  <?
							  $noUrut++;
							  }
							  ?>
			                  
			                </tbody>
			            </table>
            </div>
          </div>
        
		</div><!-- /.row -->
		
			  
			  
              <button type="submit" class="btn btn-default">Submit Button</button>
              <button type="reset" class="btn btn-default">Reset Button</button>  

            </form>

          </div>
        
		</div><!-- /.row -->
