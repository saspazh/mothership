<!-- BEGIN #content-wrapper -->
<div id="content-wrapper" class="clearfix">
	<!-- BEGIN #main-content -->
		<div id="main-content" class="full-width page-content">
			
			<h2 class="page-title">My Poin</h2>
			<div class="shadow-wrapper margin1">
				<div class="left-shadow"></div>
				<div class="mid-shadow"></div>
				<div class="right-shadow"></div>
			</div>
			
			<p>Hello, <?php echo $this->session->userdata('username') ?>. Silakan lakukan konfirmasi email di akun anda. Jika anda masih ingin liat produk klik <a href="<?php echo site_url() ?>">disini</a> </p>
			
					
			
			<div class="tag-title-wrap clearfix">
				<h3 class="tag-title-small">Poin</h3>
			</div>
			
			<table width="100%" class="account-table">
				<thead>
					<tr>
						<th>No</th>
						<th>Tanggal</th>
						<th>Keterangan</th>
						<th>Poin</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($data_poin as $key => $value) {
					
					?>
					<tr>
						<td data-title="Product #"><?php echo $noUrut ?></td>
						<td data-title="Deliver To"><?php echo date('M d, Y - H:i',strtotime($value->tanggal)) ?></td>
						<td data-title="Total"><?php echo $value->keterangan ?></td>
						<td data-title="Date"><?php echo $value->poin ?></td>
					</tr>
					<?php
					$noUrut++;
					$total=$total+$value->poin;
					}
					?>
				</tbody>
					<tr>
						<th colspan='3'>Total</th>
						<th><?php echo $total ?></th>
					</tr>
				<tfoot>
				</tfoot>
			</table>

				<!-- BEGIN .clearfix -->
				<div class="clearfix">
			
					<form action="<?php echo base_url() ?>poin/save" method="post" class="coupon-form fl">
						<input type="text" required class="coupon-code" name="coupon-code" class="text_input" value="" />
						<br>
						<input class="button2" value="Apply poin &raquo;" type="submit">
					</form>
			
					
				
				<!-- END .clearfix -->
				</div>



			
		<!-- END #main-content -->
		</div>
		<!-- END #content-wrapper -->
	</div>	