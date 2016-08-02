<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    <title>Saspazh &laquo; Apparel, Gear and Workware &laquo;  We Are Born With A TRUST</title>
    
    <link href="<? echo base_url() ?>comingsoon/css/bootstrap.css" rel="stylesheet" />
	<link href="<? echo base_url() ?>comingsoon/css/coming-sssoon.css" rel="stylesheet" />  
    
    <!--     Fonts     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
  
</head>

<body>
<nav class="navbar navbar-transparent navbar-fixed-top" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="https://www.facebook.com/saspazh" target='_blank'> 
                    <i class="fa fa-facebook-square"></i>
                    Facebook
                </a>
            </li>
             <li>
                <a href="https://plus.google.com/+Saspazh/" target='_blank'> 
                    <i class="fa fa-google-plus-square"></i>
                    +saspazh
                </a>
            </li>
             <li>
                <a href="https://twitter.com/saspazh" target='_blank'> 
                    <i class="fa fa-twitter"></i>
                    Twitter
                </a>
            </li>
			
			<li>
                <a href="http://instagram.com/saspazh" target='_blank'> 
                    <i class="fa fa-instagram"></i>
                    Instagram
                </a>
            </li>
       </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>

<div class="main" style="background-image: url('<? echo base_url() ?>comingsoon/images/video_bg.jpg')">
        <video id="video_background" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0"> 
            <source src="http://coming-sssoon.paperplane.io/video/time.webm" type="video/webm"> 
            <source src="http://coming-sssoon.paperplane.io/video/time.mp4" type="video/mp4"> 
            Video not supported 
        </video>
<!--    Change the image source '/images/video_bg.jpg')" with your favourite image.     -->
    
    <div class="cover black" data-color="black"></div>
     
<!--   You can change the black color for the filter with those colors: blue, green, red, orange       -->

    <div class="container">
        <h1 class="logo cursive">
            Under Construction
        </h1>
<!--  H1 can have 2 designs: "logo" and "logo cursive"           -->
        
        <div class="content">
            <h4 class="motto">" We Are Born With A TRUST "</h4>
            <div class="subscribe">
                
<?php
if($this->session->flashdata('message')){
?>
				<h5 class="info-text">
                    <? echo $this->session->flashdata('message') ?> 
                </h5>	
<?
}else{
?>
			<h5 class="info-text">
                    Join the waiting list for the beta. We keep you posted. 
            </h5>
			
<?
}
?>				
				
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-sm6-6 col-sm-offset-3 ">
                        <form action="<? echo base_url() ?>home/save_email" class="form-inline" role="form" method='post'>
                          <div class="form-group">
                            <label class="sr-only" for="exampleInputEmail2">Email address</label>
                            <input name='email' type="email" class="form-control transparent" placeholder="Your email here...">
                          </div>
                          <button type="submit" class="btn btn-warning btn-fill">Notify Me</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
      
    </div>
 </div>
</body>
   <script src="<? echo base_url() ?>comingsoon/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="<? echo base_url() ?>comingsoon/js/bootstrap.min.js" type="text/javascript"></script>
</html>