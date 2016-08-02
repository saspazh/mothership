<html>

<head>
	<style>
	#mydiv {
//    background-color: #000;
    width: auto;
    height: 130%
	}
	
	div.img {
		border: 1px solid #cccccc;
		height: 140px;
		width: 70px;
		float: left;
		text-align: center;
		background-color: #fff;
	}	

	div.img img {
		display: inline;
		border: 0px solid #ffffff;
	}

	div.img a:hover img {
	//    border: 1px solid #0000ff;
	}

	div.desc {
	  text-align: center;
	  font-weight: normal;
	  font-size: 73%;
	  width: auto;
	}
	</style>
</head>

<body>

<div id="mydiv">

<?php
$signature ='<img src='.base_url().'saspazh/img/signature.jpg width=90% style=padding:2px left; />';
?>

<?php
for ($i=0; $count>$i; $i++){

	for($j=0; $qty[$i]>$j; $j++){
?>


<div class="img">
 <a target="_blank" href="klematis_big.htm">
 <img src='<?php echo base_url() ?>barcode/<?php echo $serial[$i].'-'.$nama_product[$i].'-'.$size[$i].'.png' ?>' width='100%' />
 </a>
 <div class="desc">
 	<?php echo $serial[$i] ?>
	<br>
	IDR <?php echo number_format($price[$i]) ?>
	<br>
	<?php echo $nama_product[$i] ?>
	<br>
	Size : <?php echo $size[$i] ?>
	<br>
	<?php
	echo $signature;
	?>
 </div>
</div>



<?
	}

}
?>


</div>



<div id="image">
	<p>Image:</p>
</div>


</body>

<script src="<?php echo base_url() ?>html_image/html2canvas.js"></script>
<script>
html2canvas([document.getElementById('mydiv')], {
    onrendered: function (canvas) {
        var data = canvas.toDataURL('image/png');
        // AJAX call to send `data` to a PHP file that creates an image from the dataURI string and saves it to a directory on the server

        var image = new Image();
        image.src = data;
        document.getElementById('image').appendChild(image);
    }
});
</script>

</html>