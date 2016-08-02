<html>

	<head>
	</head>

		
	<body>
	
		<table border='1'>
			<tr>
				<td>nim</td>
				<td>nama</td>
				<td>alamat</td>
				<td>HP</td>
			</tr>
			
			<?php 
			for($i=1; $i<=5; $i++){
			?>
			<tr>
				<td><?php echo $i ?></td>
				<td>Mahasiswa 1</td>
				<td>alamat 1</td>
				<td>HP 1</td>
			</tr>
			<?php
			}
			?>
		</table>
	
	</body>
	
</html>