<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin | Saspazh</title>
	<link rel="shortcut icon" href="<?php  echo base_url() ?>saspazh/img/logo.png" type="image/x-icon" />
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>sb-admin/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="<?php echo base_url()?>sb-admin/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url()?>sb-admin/font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">SASPAZH Admin</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li class="<?php echo isActive("admin_home")?>"><a href="<?php  echo base_url()?>admin_home"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="<?php echo isActive("admin_kategori")?>"><a href="<?php  echo base_url()?>admin_kategori"><i class="fa fa-edit"></i> Kategori</a></li>
            <li class="<?php echo isActive("admin_product")?>"><a href="<?php  echo base_url()?>admin_product"><i class="fa fa-bar-chart-o"></i> Product</a></li>
            <li class="<?php echo isActive("admin_barang")?>"><a href="<?php  echo base_url()?>admin_barang"><i class="fa fa-bar-chart-o"></i> Barang</a></li>
            <li class="<?php echo isActive("admin_stok")?> dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bar-chart-o"></i> Stok<b class="caret"></b></a>
				<ul class="dropdown-menu">
	                <li><a href="<?php  echo base_url()?>admin_stok">List</a></li>
	                <li><a href="<?php  echo base_url()?>admin_stok/add">Tambah</a></li>
	                <li><a href="<?php  echo base_url()?>admin_stok/import">Import</a></li>
				</ul>
			</li>
            
			<li class="<?php echo isActive("admin_transaksi")?> dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bar-chart-o"></i> Transaksi<b class="caret"></b></a>
				<ul class="dropdown-menu">
	                <li><a href="<?php  echo base_url()?>admin_transaksi/v/Order">Order</a></li>
				</ul>
			</li>
			
			<li class="<?php echo isActive("admin_customer")?> dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bar-chart-o"></i> Customer<b class="caret"></b></a>
				<ul class="dropdown-menu">
	                <li><a href="<?php  echo base_url()?>admin_customer/v/member">Member</a></li>
	                <li><a href="<?php  echo base_url()?>admin_customer/v/guest">Guest</a></li>
	                <li><a href="<?php  echo base_url()?>admin_customer/v/distributor">Distributor</a></li>
	                <li><a href="<?php  echo base_url()?>admin_customer/v">All</a></li>
				</ul>
			</li>
      
      <li class="<?php echo isActive("admin_popular")?> dropdown">
        <a href="<?php  echo base_url()?>admin_popular" ><i class="fa fa-bar-chart-o"></i> Report</a>
      </li>

			<li class="<?php echo isActive("admin_report")?> dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bar-chart-o"></i> Report<b class="caret"></b></a>
				<ul class="dropdown-menu">
	                <li><a href="<?php  echo base_url()?>admin_report/penjualan">Penjualan</a></li>
	                <li><a href="<?php  echo base_url()?>admin_report/stok">Stok</a></li>
	            </ul>
			</li>
			
      <li class="<?php echo isActive("admin_popular")?> dropdown">
        <a href="<?php  echo base_url()?>admin_statistik" ><i class="fa fa-bar-chart-o"></i> Statistik</a>
      </li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown messages-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span class="badge">7</span> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="dropdown-header">7 New Messages</li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="name">John Smith:</span>
                    <span class="message">Hey there, I wanted to ask you something...</span>
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="name">John Smith:</span>
                    <span class="message">Hey there, I wanted to ask you something...</span>
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="name">John Smith:</span>
                    <span class="message">Hey there, I wanted to ask you something...</span>
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li><a href="#">View Inbox <span class="badge">7</span></a></li>
              </ul>
            </li>
            <li class="dropdown alerts-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> Alerts <span class="badge">3</span> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Default <span class="label label-default">Default</span></a></li>
                <li><a href="#">Primary <span class="label label-primary">Primary</span></a></li>
                <li><a href="#">Success <span class="label label-success">Success</span></a></li>
                <li><a href="#">Info <span class="label label-info">Info</span></a></li>
                <li><a href="#">Warning <span class="label label-warning">Warning</span></a></li>
                <li><a href="#">Danger <span class="label label-danger">Danger</span></a></li>
                <li class="divider"></li>
                <li><a href="#">View All</a></li>
              </ul>
            </li>
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li>
                <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1><?php  echo $title?> <!--<small>Statistics Overview--></small></h1>
            <ol class="breadcrumb">
              <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
            </ol>
            
			<!--
			<div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              Welcome to SB Admin by <a class="alert-link" href="http://startbootstrap.com">Start Bootstrap</a>! Feel free to use this template for your admin needs! We are using a few different plugins to handle the dynamic tables and charts, so make sure you check out the necessary documentation links provided.
            </div>
			-->
          </div>
        </div><!-- /.row -->
<!---==============================================================================--->

<?php 
$this->load->view($page);
?>
		
<!---==============================================================================--->
	
      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="<?php echo base_url()?>sb-admin/js/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url()?>sb-admin/js/bootstrap.js"></script>

    <!-- Page Specific Plugins -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <script src="<?php echo base_url()?>sb-admin/js/morris/chart-data-morris.js"></script>
    <script src="<?php echo base_url()?>sb-admin/js/tablesorter/jquery.tablesorter.js"></script>
    <script src="<?php echo base_url()?>sb-admin/js/tablesorter/tables.js"></script>

  </body>
</html>
