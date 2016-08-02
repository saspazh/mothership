<html>

<head>

  <link rel="stylesheet" href="<? echo base_url()?>saspazh/jquery-ui.css">
  
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  
  <style>
    label, input { display:block; }
    input.text { margin-bottom:12px; width:95%; padding: .4em; }
    fieldset { padding:0; border:0; margin-top:25px; }
    h1 { font-size: 1.2em; margin: .6em 0; }
    div#users-contain { width: 350px; margin: 20px 0; }
    div#users-contain table { margin: 1em 0; border-collapse: collapse; width: 100%; }
    div#users-contain table td, div#users-contain table th { border: 1px solid #eee; padding: .6em 10px; text-align: left; }
    .ui-dialog .ui-state-error { padding: .3em; }
    .validateTips { border: 1px solid transparent; padding: 0.3em; }
  </style>
  
<script>
  $(function() {    
    $( "#dialog-form" ).dialog({
      autoOpen: false,
      height: 500,
      width: 550,
      modal: true,
//	  show: 'blind'
      

    });
 
    $( "#create-user" )
      .button()
      .click(function() {
        $( "#dialog-form" ).dialog( "open" );
      });
  });
</script>

</head>

<body>

<div class="bg-content">
	
      
      <!--============================== content =================================-->
      
      <div id="content" class="content-extra">

		<div class="container">
          <div class="row">
	
	<form action='<? echo site_url()?>cart/tambah' method='post'>
        <article class="span12">
              
              <div class="wrapper">
            <figure class="img-indent">
				<input name='id_barang' type='hidden' value='<? echo $db->id_barang ?>' />
				
							
				<img src="<? echo base_url() ?>uploads/<? echo $db->file_name ?>" width='600px' alt="" />
			</figure>
            <h3><? echo $db->nama_barang ?></h3>
			<div class="inner-1 overflow extra">
                  <div class="txt-1"><? echo $db->color ?></div>
                  <div class="txt-2"><h5>IDR <? echo $this->cart->format_number($db->price); ?></h5></div>

				  <br>
				  Size :
				  <br>
					  
					  <table border='0' align='centre' bgcolor='#000000'>
						<tr>
							<td width='50'><input name='size' type='radio' value='S' /></td>
							<td width='50'><input name='size' type='radio' value='M' /></td>
							<td width='50'><input name='size' type='radio' value='L' /></td>
							<td width='50'><input name='size' type='radio' value='XL' /></td>
							<td width='50'><input name='size' type='radio' value='XXL' /></td>
						</tr>
						<tr>
							<td width='50'>S</td>
							<td width='50'>M</td>
							<td width='50'>L</td>
							<td width='50'>XL</td>
							<td width='50'>XXL</td>
						</tr>
					  </table>
					  
<hr>
					  <br>
						
					  <button type='button' class="btn btn-1" id="create-user">Buy</button>
					  
                  <div class="overflow">

              </div>
                </div>
          </div>
            </article>
		</form>
      </div>
        </div>

  
  
  
  </div>
    </div>
	
<body>

<html>




<div id="dialog-form" title="Create new user">
  
  <table border='1'>
	<tr>
		<td>
			<img src="<? echo base_url() ?>uploads/<? echo $db->file_name ?>" width='300px' alt="" />
		</td>
		<td>
			<table border='1'>
				<tr>
					<td>
					
					<h3><font color='#000000'><? echo $db->nama_barang ?></font></h3>
					<div class="txt-1"><font color='#000000'><? echo $db->color ?></font></div>
					<div class="txt-1"><font color='#000000'><? echo $db->color ?></font></div>
					<div class="txt-2"><h5>IDR <? echo $this->cart->format_number($db->price); ?></h5></div>
					
					</td>
				</tr>
				
				<tr>
					<td><h3><? echo $db->nama_barang ?></h3></td>
				</tr>
				<tr>
					<td><h3><? echo $db->nama_barang ?></h3></td>
				</tr>
				<tr>
					<td><h3><? echo $db->nama_barang ?></h3></td>
				</tr>
				
			</table>
		</td>
	</tr>
  </table>
  
  <!--
  <p class="validateTips">All form fields are required.</p>
  <form action='<? echo base_url()?>save' id="contact-form" method='post'>
  <fieldset>
    <div>

    <input type="text" placeholder="Your name" name="name">
    <input type="text" name="email" id="email" value="" class="text ui-widget-content ui-corner-all">
    <input type="password" name="password" id="password" value="" class="text ui-widget-content ui-corner-all">

	<button>asd</button>
	</fieldset>
  </form>
  -->
</div>
 