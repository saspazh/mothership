<!DOCTYPE html>
<!--[if lt IE 7]> <html dir="ltr" lang="en-US" class="ie6"> <![endif]-->
<!--[if IE 7]>    <html dir="ltr" lang="en-US" class="ie7"> <![endif]-->
<!--[if IE 8]>    <html dir="ltr" lang="en-US" class="ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html dir="ltr" lang="en-US"> <!--<![endif]-->

<!-- BEGIN head -->

<?php 
$this->load->view('vintage/head.php');
?>

<!-- BEGIN body -->
<body>
	
	<?php 
		$this->load->view('vintage/header.php');		
	
	?>
	
	
		
		
		<?php 
		$this->load->view($page);		
		?>
	
	
	<?php 
//		$this->load->view('vintage/footer.php');
	
	?>
<!-- END body -->
</body>
</html>