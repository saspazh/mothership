

              <table class="table table-bordered table-hover table-striped tablesorter" border='1'>
                  <tr bgcolor='#cccccc'>
						<td colspan='2'>No Order</td>
						<td align='center'>:</td>
						<td><? echo $db->no_order ?></td>
						<td colspan='4'></td>
                  </tr>
				  <tr bgcolor='#cccccc'>
						<td colspan='2'>Tanggal Order</td>
						<td align='center'>:</td>
						<td><? echo date('d M Y',strtotime($db->tgl_order)) ?></td>
						<td colspan='4'></td>
                  </tr>
				  <tr bgcolor='#cccccc'>
						<td colspan='2'>Status</td>
						<td align='center'>:</td>
						<td>
						<? 
						if($db->status == 0){
							echo 'Assign';
						}else{
							echo 'Cash';
						} 
						?>
						</td>
						<td colspan='4'></td>
                  </tr>
				  <tr>
                    <th>No<i class="fa fa-sort"></i></th>
                    <th>Category <i class="fa fa-sort"></i></th>
                    <th>Barang <i class="fa fa-sort"></i></th>
                    <th>Serial <i class="fa fa-sort"></i></th>
                    <th>Color <i class="fa fa-sort"></i></th>
                    <th>Size<i class="fa fa-sort"></i></th>
                    <th>Sale Price <i class="fa fa-sort"></i></th>
                    <th>Status <i class="fa fa-sort"></i></th>
                  </tr>

                <tbody>
                  <? 
				  $total=0;
				  foreach($data_list as $baris){
				  ?>
				  <tr class="active" color='#cccccc'>
                    <td><? echo $noUrut?></td>
                    <td><? echo $baris->nama_kategori ?></td>
                    <td><? echo $baris->nama_barang ?></td>
					<td><? echo $baris->serial ?></td>
                    <td><? echo $baris->color ?></td>
                    <td><? echo $baris->size ?></td>
					<td><? echo $baris->price ?></td>
					<td><? echo $baris->status ?></td>
                  </tr>
				  <?
				  $noUrut++;
				  $total = $total+$baris->price;
				  }
				  ?>
                  <tr bgcolor='#cccccc'>
					<td colspan='6'>Total</td>
					<td><? echo $total ?></td>
					<td></td>
                  </tr>
                </tbody>
              </table>
        