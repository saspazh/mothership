<?php
if($this->session->flashdata('message')){
?>
			<div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <?php  echo $this->session->flashdata('message') ?>
            </div>	
<?php 
}

if($this->session->flashdata('hapus')){
?>
			<div class="alert alert-info alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <?php  echo $this->session->flashdata('hapus')?>
            </div>
			
<?php 
}
?>

<div class="row">
          <div class="col-lg-12">
            <div class="bs-example">
              <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                <li class="active"><a href="#list" data-toggle="tab">List</a></li>
                <li><a href="#add" data-toggle="tab">Add</a></li>
                <li><a href="#import" data-toggle="tab">Import</a></li>
                
              </ul>
              <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade active in" id="list">
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
			                    <th>Size <i class="fa fa-sort"></i></th>
			                    <th>Harga <i class="fa fa-sort"></i></th>
			                    <th>Stok <i class="fa fa-sort"></i></th>
			                    <th>Action <i class="fa fa-sort"></i></th>
			                  </tr>
			                </thead>
			                <tbody>
			                  <?php  foreach($data_list as $baris){?>
							  <tr class="active">
			                    <td><?php  echo $noUrut?></td>
			                    <td><?php  echo $baris->nama_product?></td>
			                    <td><img src='<?php  echo base_url() ?><?php  echo $baris->path?>/<?php  echo $baris->file_name?>' width='100px'></td>
			                    <td><?php  echo $baris->color?></td>
			                    <td><?php  echo $baris->size?></td>
			                    <td>Rp <?php  echo $baris->price?></td>
			                    <?php 
									$auto = $this->db->query("SELECT count(id_barang) as jml 
FROM stok
WHERE id_barang = '$baris->id_barang'");
					 
								?>
								<td><?php  echo $auto->last_row()->jml ?></td>
			                    <td>
									<a href='<?php  echo site_url()?>admin_stok/detail/<?php  echo $baris->id_barang?>'>Detail</a> |
									<a href="<?php  echo site_url()?>admin_stok_old/add/<?php  echo $baris->id_barang?>">Tambah Stok</a>
								</td>
			                  </tr>
							  <?php 
							  $noUrut++;
							  }
							  ?>
			                  
			                </tbody>
			              </table>
			            </div>
			          </div>
			        
					</div><!-- /.row -->
          		  
				</div>
                <div class="tab-pane fade" id="add">
			        <div class="row">
			          <div class="col-lg-6">
					
			            <form action='<?php  echo site_url()?>admin_stok/save' method='post'>

						  
						  <div class="form-group">
			                <label>Barang</label>
			                <select multiple class="form-control" name='id_barang'>
			                <?php 
											
							$asd = $this->db->query("SELECT id_barang, nama_barang FROM  barang ")->result();
							foreach($asd as $dsa){
							?>
							<option value="<?php echo $dsa->id_barang; ?>" <?php  if($dsa->id_barang == $this->uri->segment(3)){?>selected<?php }?>><?php echo $dsa->nama_barang; ?></option>
							<?php } ?>
							
			                
							</select>
			              </div>
						  
						  <div class="form-group">
			                <label>Size</label>
			                <div class="radio">
			                  <label>
			                    <input type="radio" name="size" id="optionsRadios1" value="S" checked>
			                    S
			                  </label>
			                </div>
			               <div class="radio">
			                  <label>
			                    <input type="radio" name="size" id="optionsRadios2" value="M">
			                    M
			                  </label>
			                </div>
			               <div class="radio">
			                  <label>
			                    <input type="radio" name="size" id="optionsRadios3" value="L">
			                    L
			                  </label>
			                </div>
							
							<div class="radio">
			                  <label>
			                    <input type="radio" name="size" id="optionsRadios4" value="XL">
			                    XL
			                  </label>
			                </div>
							<div class="radio">
			                  <label>
			                    <input type="radio" name="size" id="optionsRadios5" value="XXL">
			                    XXL
			                  </label>
			                </div>
			              </div>
						  
						  <button type="submit" class="btn btn-primary">Submit</button>
			              <button type="reset" class="btn btn-default">Reset</button>  
			              
			            </form>

			          </div>
			        
					</div><!-- /.row -->

                </div>
                <div class="tab-pane fade" id="import">


		        <div class="row">
		          <div class="col-lg-6">
				
		            <form action='<?php  echo site_url()?>admin_stok/save_import' method='post' enctype="multipart/form-data">
					  <div class="form-group">
		                <label>Barangs</label>
		                <select multiple class="form-control" name='id_barang'>
		                <?php 
										
						$asd = $this->db->query("SELECT id_barang, nama_barang FROM  barang ")->result();
						foreach($asd as $dsa){
						?>
						<option value="<?php echo $dsa->id_barang; ?>" <?php  if($dsa->id_barang == $this->uri->segment(3)){?>selected<?php }?>><?php echo $dsa->nama_barang; ?></option>
						<?php } ?>
						
		                
						</select>
		              </div>
					  
					  <div class="form-group">
		                <label>Size</label>
		                <div class="file">
		                  <label>
		                    <input type="file" style="width: 50%;" class="text" id="file_upload" name="userfile" >
		                  </label>
		                </div>
		              </div>
					  
					  <button type="submit" class="btn btn-primary">Submit</button>
		              <button type="reset" class="btn btn-default">Reset</button>  
		              
		            </form>

		          </div>
		        
				</div><!-- /.row -->

                </div>
              </div>
            </div>
          </div>
         
		</div><!-- /.row -->


        