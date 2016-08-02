<?php
if($this->session->flashdata('message')){
echo "
<div class='alert error'><span class='hide'></span><strong></strong>" .$this->session->flashdata('message')."</div>";
}
?>

          
          
        <form method="post" action="<? echo site_url()?>/stok_supervisor/report" class="form" id="form">
            
            <fieldset>
                <legend>Entry Stok</legend>
	
                    <p class="inline-small-label">
                      <label for="field5">Serial *</label>
                        <input type="number" style="width: 20%;" name="serial_awal" class="text">s/d
						<input type="number" style="width: 20%;" name="serial_akhir" class="text">
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

