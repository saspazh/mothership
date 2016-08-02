<?php
if($this->session->flashdata('message')){
echo "
<div class='alert error'><span class='hide'></span><strong></strong>" .$this->session->flashdata('message')."</div>";
}
?>

        <?php echo $error;?>  
          
        <form method="post" enctype="multipart/form-data" action="<? echo site_url()?>/dokter_admin/do_upload " class="form" id="form">
            
            <fieldset>
                <legend>Entry Siswa</legend>
                     
                    <p class="inline-small-label">
                      <label for="field5">Nama</label>
                      <input type="text" style="width: 50%;" class="text" name="nama" >          
                    </p>

                    <p class="inline-small-label">
                      <label for="field5">NIP</label>
                      <input type="text" style="width: 50%;" class="text" name="nip" >          
                    </p>

                    <p class="inline-small-label">
                      <label for="field5">Deskripsi</label>
                      <textarea type="text" style="width: 50%;" class="text" name="deskripsi"></textarea>          
                    </p>

                     <p class="inline-small-label">
                      <label for="field5">File *</label>
                        <input type="file" style="width: 50%;" class="text" id="file_upload" name="userfile" >
          
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
                    <li><a href="javascript:void(0);" class="close-toolbox button red">Cancel</a></li> </ul>
                <ul class="actions-right"> <input type="submit" class="close-toolbox button" value="Simpan"> </ul>
            </div>
        </form>

