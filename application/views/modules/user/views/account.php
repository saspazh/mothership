<section class="header_text sub">
			<img class="pageBanner" src="<? echo base_url()?>shopper_new/themes/images/pageBanner.png" alt="New products" >
				<h4><span>Login or Regsiter</span></h4>
			</section>

			
			
			
			<section class="main-content">				
				<div class="row">
							<div class="span9">
								<ul class="nav nav-tabs" id="myTab">
									<li class="active"><a href="#profile">Biodata</a></li>
									<!--
									<li class=""><a href="#home">Additional Information</a></li>
									-->
								</ul>							 
								<div class="tab-content">
									<div class="tab-pane active" id="profile">
									
										<img src='<? echo base_url()?>img/page2-img5.jpg' height='20%' width='20%' />
										<br>
										<br>
										
										<table class="table table-striped shop_attributes">	
											<tbody>
												
												
												<tr class="">
													<th>First Name</th>
													<td><? echo $db->first_name?></td>
												</tr>		
												<tr class="alt">
													<th>Last Name</th>
													<td><? echo $db->last_name?></td>
												</tr>
												<tr class="">
													<th>Company</th>
													<td><? echo $db->company?></td>
												</tr>		
												<tr class="alt">
													<th>Address 1</th>
													<td><? echo $db->address1?></td>
												</tr>
												<tr class="">
													<th>Address 2</th>
													<td><? echo $db->address2?></td>
												</tr>		
												<tr class="alt">
													<th>City</th>
													<td><? echo $db->city?></td>
												</tr>
												
												<tr class="alt">
													<th>Province</th>
													<td><? echo $db->province?></td>
												</tr>
												<tr class="alt">
													<th>No HP</th>
													<td><? echo $db->no_hp?></td>
												</tr>
												<tr class="alt">
													<th>Email</th>
													<td><? echo $db->email ?></td>
												</tr>
												<tr class="alt">
													<th>Username</th>
													<td><? echo $db->username ?></td>
												</tr>
												
											</tbody>
										</table>
										
						<hr>

						<p class="buttons center">				
							<button class="btn" type="button"><a href='<? echo base_url()?>user/edit'>Edit</a></button>
							<button class="btn btn-inverse" id="checkout"><a href='<? echo base_url()?>product'>Shopping</a></button>
						</p>
									
									</div>
									<!--
									<div class="tab-pane" id="home">
										Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem
									</div>
									-->
								</div>							
							
							</div>
				</div>
			</section>			
			
			
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