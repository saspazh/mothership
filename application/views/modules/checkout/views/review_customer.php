<section class="header_text sub">
			<img class="pageBanner" src="<? echo base_url()?>shopper_new/themes/images/pageBanner.png" alt="New products" >
				<h4><span>Check Out</span></h4>
			</section>	
			<section class="main-content">
				<div class="row">
					<div class="span12">
						<div class="accordion" id="accordion2">
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle">Account</a>
								</div>
							</div>
							
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle">Confirm Order</a>
								</div>
							</div>
							
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle">Account &amp; Billing Details</a>
								</div>
							</div>
							
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle">Billing</a>
								</div>
							</div>
							
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle">Review Order</a>
								</div>
								<div id="collapseThree" class="accordion-body in collapse">
									<div class="accordion-inner">
										<div class="row-fluid">
<?
/*
	$email = $this->session->userdata('email');
	$cus= $this->db->query("SELECT *
FROM customer
WHERE email = '$email'");
*/
?>

												<div class="span5">
											<h4>Customer Detail</h4>
												<br>
												
													<address>
														<strong>Full Name:</strong> <span><? echo $bio->first_name.' '.$bio->last_name ?></span><br>
														<strong>Company:</strong> <span><? echo $bio->company ?></span><br>
														<strong>Address:</strong> <span><? echo $bio->address1 ?></span><br>
														<strong>City:</strong> <span><? echo $bio->city ?></span><br>								
														<strong>Province:</strong> <span><? echo $bio->province ?></span><br>								
														<strong>Email:</strong> <span><? echo $bio->email ?></span><br>								
														<strong>Mobile:</strong> <span><? echo $bio->no_hp ?></span><br>								
																						
													</address>
																					
												</div>
											
											<form action="<? echo site_url()?>checkout/confirm_customer" id='form1' name='form1' class="form-horizontal" method='post'>
											<div class="span7">
												<h4>Cart</h4>
														
														
																<table class="table table-striped">
																	<thead>
																		<tr>
																			<!--<th>Remove</th>-->
																			<th>No</th>
																			<th>Image</th>
																			<th>Product Name</th>
																			<th>Size</th>
																			<th>Quantity</th>
																			<th>Unit Price</th>
																			<th>Total</th>
																		</tr>
																	</thead>
																	<tbody>
																	<?php 
																	$i=1;
																	foreach($this->cart->contents() as $items): 
																	?>
																		<tr>
																			<?php echo form_hidden('rowid[]', $items['rowid']); ?>
																			<td><? echo $i ?></td>
																			<!--<td><input type="checkbox" value="option1"></td>-->
																			<td width='15%'><a href="product_detail.html"><img alt=""  src="<? echo base_url()?>uploads/small/<? echo $items['file_name']?>"></a></td>
																			<td><? echo $items['name']?></td>
																			<td><? echo $items['size']?></td>
																			<td><input name='qty[]' readonly type="text" value='<? echo $items['qty']?>' class="input-mini"></td>
																			<td>Rp. <?php echo $this->cart->format_number($items['price']); ?></td>
																			<td>Rp. <?php echo $this->cart->format_number($items['subtotal']); ?></td>
																		</tr>			  
																	
																  	<?php $i++; ?>
																	<?php endforeach; ?>	
																		<tr>
																			<td>&nbsp;</td>
																			<td>&nbsp;</td>
																			<td>&nbsp;</td>
																			<td>&nbsp;</td>
																			<td>&nbsp;</td>
																			<td>&nbsp;</td>
																			<td><strong>Rp. <?php echo $this->cart->format_number($this->cart->total()); ?></strong></td>
																		</tr>		  
																	</tbody>
																</table>

																<!--
																<p class="cart-total right">
																	<strong>Sub-Total</strong>:	$100.00<br>
																	<strong>Eco Tax (-2.00)</strong>: $2.00<br>
																	<strong>VAT (17.5%)</strong>: $17.50<br>
																	<strong>Total</strong>: $119.50<br>
																</p>
																-->
																<hr/>

																			
			
														<br>
												<label class="checkbox">
												  <input name='receive' type="checkbox" value="1" checked> Receive update to email
												</label>			
									
											 <input type='submit' value='Confirm' class="btn btn-inverse pull-right">
											 </div>									
											 </form>
											 
										
											
										</div>
									</div>
								</div>
							</div>
								
							
							
						</div>				
					</div>
				</div>
			</section>			
			
			
			<script src="<? echo base_url()?>shopper_new/themes/js/common.js"></script>