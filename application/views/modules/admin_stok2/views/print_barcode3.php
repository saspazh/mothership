<style>
#mydiv {
    background-color: blue;
    width: 200px;
    height: 200px
}
</style>
<body>
<div id="mydiv">
    <p style="color:white;">Hai, Ottong</p>
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