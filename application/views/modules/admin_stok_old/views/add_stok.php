<?php
if($this->session->flashdata('message')){
echo "
<div class='alert error'><span class='hide'></span><strong></strong>" .$this->session->flashdata('message')."</div>";
}
?>

          
          
        <form method="post" action="<? echo site_url()?>/stok_supervisor/save_stok_supervisor" class="form" id="form">
            
            <fieldset>
                <legend>Entry Stok</legend>
	
                    
                    <p class="inline-small-label">
                      <label for="field5">Barang *</label>
                        <select name="id_barang" style="width:30%">
                        	<option value="" selected>--Pilih--</option>
                            <?php
							$username=$this->session->userdata('username');

							$asd = $this->db->query("SELECT a.id_barang, a.nama_barang, b.nama_brand
FROM  `barang` a, brand b Where a.id_brand = b.id_brand")->result();
							foreach($asd as $dsa){

							?>
                            <option value="<?php echo $dsa->id_barang; ?>"><?php echo $dsa->nama_brand.' ('.$dsa->nama_barang.')'; ?></option>
                            <?php } ?>
						</select>
                    </p>
					
					<p class="inline-small-label">
                      <label for="field5">Serial *</label>
                        <input type="number" style="width: 50%;" name="serial" class="text">
                    </p>
					
					<p class="inline-small-label">
                      <label for="field5">Harga *</label>
                        <input type="number" style="width: 50%;" name="harga" class="text">
                    </p>
					
                   <p class="inline-small-label">
                        <label for="field5">* Wajib diisi</label></p>     
                        

            </fieldset>
          <? if( validation_errors()){
                             echo "<div class='alert error' ><span class='hide'>x</span><strong></strong>" . validation_errors()."</div>";

                            }
                        ?>
            <div class="block-actions">
                <ul class="actions-left">
                    <li><a href="<? echo site_url()?>/stok_supervisor/v" class="close-toolbox button red">Cancel</a></li> </ul>
                <ul class="actions-right"> <input type="submit" class="close-toolbox button" value="Simpan"> </ul>
            </div>
        </form>

