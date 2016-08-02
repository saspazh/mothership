<?php
if($this->session->flashdata('message')){
echo "
<div class='alert error'><span class='hide'></span><strong></strong>" .$this->session->flashdata('message')."</div>";
}
?>

          
          
        <form method="post" action="<? echo site_url()?>/siswa/save_sw" class="form" id="form">
            
            <fieldset>
                <legend>Entry Siswa</legend>
                     

                    <p class="inline-small-label">
                  <label for="field5">NIS *</label>
                        <input type="text" style="width: 50%;" name="nis" class="text">
                    
                    </p>
                    <p class="inline-small-label">
                      <label for="field5">NIS Nasional *</label>
                        <input type="text" style="width: 50%;" name="nis_nas" class="text">
                    
                    </p>
                     <p class="inline-small-label">
                        <label for="field5">Nama Siswa *</label>
                        <input type="text" style="width: 50%;" name="nama_siswa" class="text"> </p>
                   
        
                        
                   <p class="inline-small-label">
                        <label for="field5">* Wajib diisi</label></p>     
                        

            </fieldset>
          <? if( validation_errors()){
                             echo "<div class='alert error' ><span class='hide'>x</span><strong></strong>" . validation_errors()."</div>";

                            }
                        ?>
            <div class="block-actions">
                <ul class="actions-left">
                    <li><a href="javascript:void(0);" class="close-toolbox button red">Cancel</a></li> </ul>
                <ul class="actions-right"> <input type="submit" class="close-toolbox button" value="Simpan"> </ul>
            </div>
        </form>

