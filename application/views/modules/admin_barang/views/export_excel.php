
              <table class="table table-bordered table-hover table-striped tablesorter" border='1'>
                <thead>
                  <tr>
                    <th>No<i class="fa fa-sort"></i></th>
                    <th>Serial<i class="fa fa-sort"></i></th>
                    <th>Nama<i class="fa fa-sort"></i></th>
                    <th>Warna <i class="fa fa-sort"></i></th>
                    <th>Size <i class="fa fa-sort"></i></th>
                    <th>Tag <i class="fa fa-sort"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <? foreach($data_list as $baris){?>
				  <tr class="active">
                    <td><? echo $noUrut?></td>
                    <td><? echo $baris->serial ?></td>
                    <td><? echo $baris->nama_product?></td>
                    <td><? echo $baris->color?></td>
                    <td><? echo $baris->size?></td>
                    <td><? echo $baris->tag?></td>
                  </tr>
				  <?
				  $noUrut++;
				  }
				  ?>
                  
                </tbody>
              </table>
