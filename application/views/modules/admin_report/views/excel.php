


              <table class="table table-bordered table-hover table-striped tablesorter" border='1'>
                <thead>
                  <tr bgcolor='#cccccc'>
                    <th rowspan='3'>No<i class="fa fa-sort"></i></th>
                    <th rowspan='3'>barang<i class="fa fa-sort"></i></th>
                    <th rowspan='3'>color<i class="fa fa-sort"></i></th>
                    <th rowspan='3'>size<i class="fa fa-sort"></i></th>
                    <th colspan='13'>Modal <i class="fa fa-sort"></i></th>
                    <th rowspan='3'>Price <i class="fa fa-sort"></i></th>
                    <th colspan='2'>Margin <i class="fa fa-sort"></i></th>
                    <th rowspan='3'>Provit <i class="fa fa-sort"></i></th>
                    <th rowspan='3'>Laba <i class="fa fa-sort"></i></th>
                    <th rowspan='3'>Ket <i class="fa fa-sort"></i></th>
                    <th rowspan='3'>tanggal <i class="fa fa-sort"></i></th>
                  </tr>
				  <tr bgcolor='#cccccc'>
					<th rowspan='2'>Bahan <i class="fa fa-sort"></i></th>
                    <th rowspan='2'>Jahit <i class="fa fa-sort"></i></th>
                    <th rowspan='2'>Bordir <i class="fa fa-sort"></i></th>
                    <th rowspan='2'>Kancing <i class="fa fa-sort"></i></th>
                    <th rowspan='2'>Totbag <i class="fa fa-sort"></i></th>
                    <th colspan='5'>Label <i class="fa fa-sort"></i></th>
                    <th rowspan='2'>Hangtag <i class="fa fa-sort"></i></th>
                    <th rowspan='2'>Rantai <i class="fa fa-sort"></i></th>
                    <th rowspan='2'>Total <i class="fa fa-sort"></i></th>
                    <th rowspan='2'>% <i class="fa fa-sort"></i></th>
                    <th rowspan='2'>Rp <i class="fa fa-sort"></i></th>
                  </tr>
				  <tr bgcolor='#cccccc'>
                    <th>1<i class="fa fa-sort"></i></th>
                    <th>2<i class="fa fa-sort"></i></th>
                    <th>3<i class="fa fa-sort"></i></th>
                    <th>4<i class="fa fa-sort"></i></th>
                    <th>5<i class="fa fa-sort"></i></th>
				  </tr>
                </thead>
                <tbody>
                  <? foreach($data_list as $baris){?>
				  <tr class="active">
                    <td><? echo $noUrut?></td>
                    <td><? echo $baris->nama_barang?></td>
                    <td><? echo $baris->color?></td>
                    <td>Rp <? echo $baris->price?></td>
                    <td><? echo $baris->tag?></td>
                    <td>
						<a href='<? site_url()?>admin_barang/detail/<? echo $baris->id_barang?>'>Detail</a> |
						<a href='<? site_url()?>admin_barang/edit/<? echo $baris->id_barang?>'>edit</a> |
						<a href='<? site_url()?>admin_barang/delete/<? echo $baris->id_barang?>' onclick="return confirm('Anda yakin akan menghapus?')">delete</a>
					</td>
                  </tr>
				  <?
				  $noUrut++;
				  }
				  ?>
                  
                </tbody>
              </table>
