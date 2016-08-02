<?php
//$provider = $this->get('provider');
//$month = $this->get('month');
//$year = $this->get('year');

//if($p=='all') $p=''; 

//$filename = $p.' '.date('M',$m).' '.$y;

$filename = 'Customer '.date('M').' '.date('Y');

header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=".$filename.".xls");//ganti nama sesuai keperluan
header("Pragma: no-cache");
header("Expires: 0");

?>

              <table class="table table-bordered table-hover table-striped tablesorter" border='1'>
                <thead>
                  <tr>
                    <th bgcolor='#000080'><font color='#ffffff'>No</font><i class="fa fa-sort"></i></th>
                    <th bgcolor='#000080'><font color='#ffffff'>Nama</font><i class="fa fa-sort"></i></th>
                    <th bgcolor='#000080'><font color='#ffffff'>Alamat</font><i class="fa fa-sort"></i></th>
                    <th bgcolor='#000080'><font color='#ffffff'>City</font><i class="fa fa-sort"></i></th>
                    <th bgcolor='#000080'><font color='#ffffff'>Province</font><i class="fa fa-sort"></i></th>
                    <th bgcolor='#000080'><font color='#ffffff'>HP</font><i class="fa fa-sort"></i></th>
                    <th bgcolor='#000080'><font color='#ffffff'>Email</font><i class="fa fa-sort"></i></th>
                    <th bgcolor='#000080'><font color='#ffffff'>Username</font><i class="fa fa-sort"></i></th>
                    <th bgcolor='#000080'><font color='#ffffff'>Password</font><i class="fa fa-sort"></i></th>
                    <th bgcolor='#000080'><font color='#ffffff'>Notification</font><i class="fa fa-sort"></i></th>
                    <th bgcolor='#000080'><font color='#ffffff'>Aktif</font><i class="fa fa-sort"></i></th>
                    <th bgcolor='#000080'><font color='#ffffff'>Type</font><i class="fa fa-sort"></i></th>
                    
                  </tr>
                </thead>
                <tbody>
                  <?php  foreach($data_list as $baris){?>
				  <tr class="active">
                    <td><?php  echo $noUrut?></td>
                    <td><?php  echo $baris->first_name.' '.$baris->last_name ?></td>
                    <td><?php  echo $baris->address1 ?></td>
                    <td><?php  echo $baris->city ?></td>
                    <td><?php  echo $baris->province ?></td>
                    <td><?php  echo $baris->no_hp ?></td>
                    <td><?php  echo $baris->email ?></td>
                    <td><?php  echo $baris->username ?></td>
                    <td><?php  echo $baris->password ?></td>
                    <td><?php  echo $baris->receive ?></td>
                    <td><?php  echo $baris->status ?></td>
                    <td><?php  echo $baris->type ?></td>
                  </tr>
				  <?php 
				  $noUrut++;
				  }
				  ?>
                  
                </tbody>
              </table>