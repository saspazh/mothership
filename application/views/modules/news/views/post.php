

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
                                <h3 class="box-title"><i class="icon-menu"></i>
                                    <span><?php echo $title ?></span>
                                </h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body " style="display: block;">

                                <table style="width:100%;" >

                                    <tbody>
                                        <tr>
                                            <th>Title</th>
                                            <th>Categories</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Comment</th>
                                        </tr>
										<?php 
										if (isset($data_list)): 
										
										foreach($data_list as $baris): 
										?>
                                        <tr>
                                            <td>
												<?php echo $baris->judul; ?>
												<br>
												<br>
												<a href="<?php echo base_url() ?>news/edit_view/<?php echo $baris->id_informasi ?>" class="tiny button">Edit</a>
												<a target='_blank' href="http://smkjayabeka1karawang.com/news/?page=post&post=<?php echo $baris->id_informasi ?>" class="tiny button success">View</a>
												<a href="<?php echo base_url() ?>news/delete/<?php echo $baris->id_informasi ?>" onclick="return confirm('Anda yakin akan menghapus?')" class="tiny button alert">Trash</a>
												
											</td>
                                            <td><?php echo $baris->kategori; ?></td>
                                            <td><?php echo $baris->tanggal; ?></td>
                                            <td><?php echo $baris->status; ?></td>
                                            <td><?php echo $baris->comment_status; ?></td>
                                        </tr>
                                        <?php  
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
                