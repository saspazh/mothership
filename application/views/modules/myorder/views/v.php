			<section class="header_text sub">
			<img class="pageBanner" src="<? echo base_url()?>shopper_new/themes/images/pageBanner.png" alt="New products" >
				<h4><span>Shopping Cart</span></h4>
			</section>
			
			<section class="main-content">				
				<div class="row">
							<div class="span12">
								<ul class="nav nav-tabs" id="myTab">
									<li class="active"><a href="#profile">Biodata</a></li>
									<li class=""><a href="#home">Additional Information</a></li>
								</ul>							 
								<div class="tab-content">
									<div class="tab-pane active" id="profile">
									
									
			<section class="main-content">				
				<div class="row">
					<div class="span12">					
						<h4 class="title"><span class="text"><strong>Your</strong> Order</span></h4>
						
					<form action="<? echo site_url()?>/cart/update_cart" id='form1' name='form1' class="form-horizontal" method='post'>
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Remove</th>
									<th>No Order</th>
									<th>Tanggal</th>
									<th>Payment</th>
									<th>Status</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach($data_list as $items): ?>
								<tr>
									<td><input type="checkbox" value="option1"></td>
									<td><? echo $items->no_order ?></td>
									<td><? echo $items->tgl_order ?></td>
									<td><? echo $items->no_order ?></td>
									<td><? echo $items->no_order ?></td>
									<td><? echo $items->no_order ?></td>
									
								</tr>			  
							
						  	<?php $i++; ?>
							<?php endforeach; ?>	
								<tr>
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
						<h4>What would you like to do next?</h4>
						<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
						<label class="radio">
							<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
							Use Coupon Code
						</label>
						<label class="radio">
							<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
							Estimate Shipping &amp; Taxes
						</label>
-->
						<hr>
						<p class="cart-total right">
							<strong>Sub-Total</strong>:	$100.00<br>
							<strong>Eco Tax (-2.00)</strong>: $2.00<br>
							<strong>VAT (17.5%)</strong>: $17.50<br>
							<strong>Total</strong>: Rp. <?php echo $this->cart->format_number($this->cart->total()); ?><br>
						</p>
						<hr/>
											
					</form>
					
					</div>
					
				</div>
			</section>
									
									
			</div>
									<div class="tab-pane" id="home">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem</div>
								</div>							
							</div>
				</div>
			</section>
			
			
		<script src="<? echo base_url()?>shopper_new/themes/js/common.js"></script>	
		<script>
			$(document).ready(function() {
				$('#checkout').click(function (e) {
					document.location.href = "<? echo base_url()?>checkout/index";
				})
			});
		</script>
		
		<script src="themes/js/common.js"></script>
		<script>
			$(function () {
				$('#myTab a:first').tab('show');
				$('#myTab a').click(function (e) {
					e.preventDefault();
					$(this).tab('show');
				})
			})
			$(document).ready(function() {
				$('.thumbnail').fancybox({
					openEffect  : 'none',
					closeEffect : 'none'
				});
				
				$('#myCarousel-2').carousel({
                    interval: 2500
                });								
			});
		</script>