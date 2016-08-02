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
								
								<div id="collapseOne" class="accordion-body collapse">
								</div>
							
							</div>
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle">Shipping</a>
								</div>
								<div id="collapseTwo" class="accordion-body in collapse">
									<div class="accordion-inner">
										<form action='<? echo base_url()?>checkout/saveshipping' method='post'>
										<div class="row-fluid">
											<div class="span6">
											
												<h4>Your Personal Details</h4>
												<div class="control-group">
													<label class="control-label">First Name</label>
													<div class="controls">
														<input type="text" name='first_name' placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Last Name</label>
													<div class="controls">
														<input type="text" name='last_name' placeholder="" class="input-xlarge">
													</div>
												</div>					  
												<div class="control-group">
													<label class="control-label">Email Address</label>
													<div class="controls">
														<input type="text" name='email' placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Telephone</label>
													<div class="controls">
														<input type="text" name='no_hp' placeholder="" class="input-xlarge">
													</div>
												</div>
												
												
										<?
											if($this->input->post('account') == 'guest'){
										?>	
												<input name='status' type="hidden" value='0'>
										<?	
											}else{
										?>
												<input name='status' type="hidden" value='1'>
												
												<div class="control-group">
													<label class="control-label">Username</label>
													<div class="controls">
														<input name='username' type="text" placeholder="Username" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Password</label>
													<div class="controls">
														<input name='password' type="password" placeholder="Password" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Confirm Password</label>
													<div class="controls">
														<input name='confirmpassword' type="password" placeholder="Confirm Password" class="input-xlarge">
													</div>
												</div>
										<?	
											}
										?>		
												
											</div>
											<div class="span6">
												<h4>Your Address</h4>
												<div class="control-group">
													<label class="control-label">Company</label>
													<div class="controls">
														<input type="text" name='company' placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Company ID:</label>
													<div class="controls">
														<input type="text" name='company_id' placeholder="" class="input-xlarge">
													</div>
												</div>					  
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> Address 1:</label>
													<div class="controls">
														<input type="text" name='address1' placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Address 2:</label>
													<div class="controls">
														<input type="text" name='address2' placeholder="" class="input-xlarge">
													</div>
												</div>
												
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> Post Code:</label>
													<div class="controls">
														<input type="text" name='post_code' placeholder="" class="input-xlarge">
													</div>
												</div>
												
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> City:</label>
													<div class="controls">
														<input type="text" name='city' placeholder="" class="input-xlarge">
													</div>
												</div>
												
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> Province:</label>
													<div class="controls">
														<input type="text" name='province' placeholder="" class="input-xlarge">
													</div>
												</div>
													
												<br>
												<input type='submit' value='Continue' class="btn btn-inverse">
														
											</div>
										</div>
										</form>
									</div>
								</div>
							</div>
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle">Billing</a>
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