
			<section class="header_text sub">
			<img class="pageBanner" src="<? echo base_url()?>shopper_new/themes/images/pageBanner.png" alt="New products" >
				<h4><span>Contact Us</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">				
					<div class="span5">
						<div>
							<h5>ADDITIONAL INFORMATION</h5>
							<p><strong>Handphone:</strong>&nbsp;(+62) 812-8750-7270<br>
							<strong>Email:</strong>&nbsp;<a href="#">support@saspazh.com</a>								
							</p>
							<br/>					
							</p>
						</div>
					</div>
					<div class="span7">
						<!--
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
						-->
						<form method="post" action="<? echo site_url()?>contact/save">
							<fieldset>
								<div class="clearfix">
									<label for="name"><span>Name:</span></label>
									<div class="input">
										<input tabindex="1" size="18" id="name" name="name" type="text" value="" class="input-xlarge" placeholder="Name">
									</div>
								</div>
								
								<div class="clearfix">
									<label for="email"><span>Handphone :</span></label>
									<div class="input">
										<input tabindex="2" size="25" id="phone" name="phone" type="text" value="" class="input-xlarge" placeholder="Handphone">
									</div>
								</div>
								
								<div class="clearfix">
									<label for="email"><span>Email:</span></label>
									<div class="input">
										<input tabindex="2" size="25" id="email" name="email" type="text" value="" class="input-xlarge" placeholder="Email Address">
									</div>
								</div>
								
								<div class="clearfix">
									<label for="message"><span>Message:</span></label>
									<div class="input">
										<textarea tabindex="3" class="input-xlarge" id="message" name="message" rows="7" placeholder="Message"></textarea>
									</div>
								</div>
								
								<div class="actions">
									<button tabindex="3" type="submit" class="btn btn-inverse">Send message</button>
								</div>
							</fieldset>
						</form>
					</div>				
				</div>
			</section>			
			<script src="<? echo base_url()?>shopper_new/themes/js/common.js"></script>