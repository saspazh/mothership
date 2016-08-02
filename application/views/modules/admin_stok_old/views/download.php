

<table id=table-example class=table>
<thead>
    <tr>
    <th>No</th>
    <th>Brand</th>
    <th>Nama Barang</th>
    <th>Dealer</th>
    <th>Serial</th>
    <th>Harga</th>
    </tr>



<tbody>
     <? if (isset($data_list)): ?>
                        <?php foreach($data_list as $baris): ?>
                        <tr class=gradeX>
                            <td><?php echo $noUrut; ?></td>
                            <td><?php echo $baris->nama_brand; ?></td>
							<td><?php echo $baris->nama_barang; ?></td>
                            <td><?php echo $baris->nama_dealer; ?></td>
                            <td><?php echo $baris->serial; ?></td>
                            <td><?php echo $baris->harga; ?></td>
                            
                        </tr>
                           <? $noUrut++?>
                         <?php  endforeach; ?>
              <? endif ?>
    
</tbody>
</table>