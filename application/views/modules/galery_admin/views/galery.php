 <?php
            if($this->session->flashdata('message')){
                echo "
                    <div class='alert success'><span class='hide'>x</span><strong>Success</strong>" .$this->session->flashdata('message')."</div>";
            }

          ?>
<?php
            if($this->session->flashdata('hapus')){
                echo "
                    <div class='alert info'><span class='hide'>x</span><strong>Hapus</strong>" .$this->session->flashdata('hapus')."</div>";
            }

          ?>
<br>


<table class=table>
<thead>
    <tr>
    <th>No</th>
    <th>Judul</th>
    <th>Poto</th>
    <th>Deskripsi</th>
    <th>Tanggal</th>
    <th>Action</th>
    </tr>



<tbody>
     <? if (isset($data_list)): ?>
                        <?php foreach($data_list as $baris): ?>
                        <tr class=gradeX>
                            <td width=10%><?php echo $noUrut; ?></td>
                            <td><?php echo $baris->judul; ?></td>
                            
                            
<td width=25%>
<div style="padding:2px; background:#000; width:75%;">
<img src="<? echo base_url();?>uploads/<? echo $baris->file_name?>" height='100%' width='100%' alt="07" />
</div>
</td>
                            <td width=20%><?php echo $baris->description; ?></td>
                            <td width=20%><?php echo $baris->tanggal; ?></td>
                            <td>
                            <a href="<? echo site_url()?>/galery_admin/edit_view/<?echo $baris->id_poto?>" ><img src="<? echo base_url()?>assets/img/icons/packs/fugue/24x24/pencil.png" alt="edit" title="edit"/></a>
                            <a href="<? echo site_url()?>/galery_admin/delete_user/<?echo $baris->id_poto?>" onclick="return confirm('Anda yakin akan menghapus?')" ><img src="<? echo base_url()?>assets/img/icons/packs/fugue/16x16/cross.png" alt="delete" title="delete"/></a>
            
                            </td>
                        </tr>
                           <? $noUrut++?>
                         <?php  endforeach; ?>
              <? endif ?>
    
</tbody>
</table>
