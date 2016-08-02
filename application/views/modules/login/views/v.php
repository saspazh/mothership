<!-- BEGIN #content-wrapper -->
	<div id="content-wrapper" class="clearfix">
		
		<!-- BEGIN #main-content -->
		<div id="main-content" class="page-content">
			
			<h2 class="page-title">My Account</h2>
			<div class="shadow-wrapper margin1">
				<div class="left-shadow"></div>
				<div class="mid-shadow"></div>
				<div class="right-shadow"></div>
			</div>
			
			<form action="<?php echo site_url()?>login/auth" id="loginform" class="clearfix" method="post">

				<div class="field-row">
					<label for="email_address">Username</label>
				    <input type="text" name="username" id="email_address" class="text_input" value="" />
				</div>

				<div class="field-row">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="text_input" value="" />		
				</div>
				
				<div class="field-row clearfix">
					<input type="checkbox" name="remember_me" id="remember_me" value="remember" />
					<label for="remember_me" id="remember_me_label">Remember Me</label>
				</div>
				
					<input class="button2" type="submit" value="Login &raquo;" id="submit" name="submit">
				
				
			</form>
			<br>
			<p>Silakan daftar <a href='<?php echo site_url() ?>register'>disini<a/></p>
				

		<!-- END #main-content -->
		</div>
		
		<?php 
		$this->load->view('vintage/sidebar.php');
		?>
	
	<!-- END #content-wrapper -->
	</div>