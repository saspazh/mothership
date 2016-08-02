<?php
if($this->session->flashdata('message')){
echo "
<div class='alert error'><span class='hide'></span><strong></strong>" .$this->session->flashdata('message')."</div>";
}
?>

        <?php echo $error;?>  




        <form method="post" action="<? echo site_url()?>/galery_admin/editsave " class="form" id="form">
            
            <fieldset>
                <legend>Entry Siswa</legend>
<br>
        <img src="<? echo base_url().$db->path.$db->file_name ?>" width="300" height="150" alt="Medica" /> 


                    <input type="hidden" value="<? echo $db->id_poto ?>" style="width: 50%;" class="text" name="id_poto" >

                    <p class="inline-small-label">
                      <label for="field5">judul</label>
                      <input type="text" value="<? echo $db->judul ?>" style="width: 50%;" class="text" name="judul" >          
                    </p>

                    <p class="inline-small-label">
                      <label for="field5">Deskripsi</label>
                      <textarea type="text" style="width: 50%;" class="text" name="deskripsi"></textarea>          
                    </p>
                    
                    <p class="inline-small-label">
                      <label for="field5">Highlight</label>
                      <input type="checkbox" value="1" <? if($db->highlight==1){?>checked<?}else{}?> class="text" name="highlight" >          
                    </p>
                                

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

