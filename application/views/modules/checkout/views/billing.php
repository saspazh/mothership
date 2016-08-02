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
								<div id="collapseThree" class="accordion-body in collapse">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="span6">
												<h4>Payment</h4>
												<form action="<? echo base_url()?>checkout/review" method="post">
													<fieldset>
														<label class="radio" for="register">
															<input type="radio" name="payment" value="1" id="register" checked="checked">Transfer Bank
														</label>
														
														<br>
														<input type='submit' value='Continue' class="btn btn-inverse">
													</fieldset>
												</form>
											 </div>									
										</div>
									</div>
								</div>
							</div>
								
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle">Confirm Order</a>
								</div>
							</div>
							
						</div>				
					</div>
				</div>
			</section>			
			
			
			<script src="<? echo base_url()?>shopper_new/themes/js/common.js"></script>