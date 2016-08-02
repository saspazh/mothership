

 <?php
if($this->session->flashdata('message')){
?>


<!-- alert info -->
    <div class="box bg-aqua">
        <div class="box-header bg-aqua ">
        <!-- tools box -->
			<div class="pull-right box-tools">
				<span class="box-btn" data-widget="remove"><i class="icon-cross"></i></span>
			</div>
			<h3 class="box-title "><i class="text-white fontello-attention-filled"></i>
				<span class="text-white">INFO</span>
			</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body " style="display: block;">
            <p class="bg-aqua"><strong>Heads up! </strong> <?php echo $this->session->flashdata('message') ?></p>
        </div>
    </div>
<!-- end of alert info -->
	
<?php
}

if($this->session->flashdata('hapus')){
?>
<!-- alert success -->
    <div class="box bg-light-green">
        <div class="box-header bg-light-green ">
        <!-- tools box -->
        <div class="pull-right box-tools">
            <span class="box-btn" data-widget="remove"><i class="icon-cross"></i></span>
        </div>
        <h3 class="box-title "><i class="text-white  icon-thumbs-up"></i>
			<span class="text-white">SUCCESS</span>
		</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body " style="display: block;">
            <p class="text-white"><strong>Well done!</strong> <?php echo $this->session->flashdata('hapus') ?></p>
        </div>
    </div>
<!-- end of success info -->
<?php
}
?>								
								

<div class="row">

					    <div class="large-6 columns">
                        <div class="box bg-white">


                            <!-- /.box-header -->
                            <div class="box-body pad-forty" style="display: block;">
                                <!-- Masked Input -->
							<form action='<?php echo base_url()?>news/save_kategori' method='post'>
                                <div class="row">
                                    
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
                                                            <input type="text" name='nama_kategori' id="right-label" placeholder="Kategori">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
									<!-- end of Inline form -->
									
									
									
									<hr>
									
                                    
                                </div>
                                <!-- end Masked Input -->
                                
								<button type="submit" class="tiny">Submit</button>
                            </form>    
                            </div>
                            <!-- end .timeline -->
                        </div>
                        <!-- box -->
                    </div>
                
			
			
                    <div class="large-6 columns">
					
					
								
                        <div class="box">
                            <div class="box-header bg-transparent">
							
								
										
										
                                <!-- tools box -->
                                <div class="pull-right box-tools">

                                    <span class="box-btn" data-widget="collapse"><i class="icon-minus"></i>
                                    </span>
                                    <span class="box-btn" data-widget="remove"><i class="icon-cross"></i>
                                    </span>
                                </div>
                                <h3 class="box-title"><i class="icon-menu"></i>
                                    <span><?php echo $title ?></span>
                                </h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body " style="display: block;">

                                <table style="width:100%;" >

                                    <tbody>
                                        <tr>
                                            <th>No</th>
                                            <th>Categories</th>
                                            <th>Count</th>
                                        </tr>
										<?php 
										if (isset($data_list)): 
										
										foreach($data_list as $baris): 
										?>
                                        <tr>
                                            <td><?php echo $noUrut?></td>
                                            <td>
												<?php echo $baris->kategori; ?>
												<br>
												<br>
												<a href="<?php echo base_url() ?>news/edit_view/<?php echo $baris->id_kategori ?>" class="button tiny">Edit</a>
												<a href="http://www.smkjayabeka1karawang.com/artikel/kategori/<?php echo $baris->id_kategori ?>" class="tiny button success">View</a>
												<a href="<?php echo base_url() ?>news/delete_kategori/<?php echo $baris->id_kategori ?>" onclick="return confirm('Anda yakin akan menghapus?')" class="tiny button alert">Trash</a>
												
												
											</td>
                                            <td><?php echo $this->db->query("select count(*) as jumlah from informasi where id_kategori=$baris->id_kategori")->row()->jumlah; ?></td>
                                        </tr>
                                        <?php
										$noUrut++;
										endforeach; 
										endif 
										?>
										
                                    </tbody>
                                </table>
                            </div>
                            <!-- end .timeline -->


                        </div>
                        <!-- box -->
                    </div>


                </div>
                