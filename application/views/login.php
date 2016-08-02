<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Log In</title>

<link rel="stylesheet" href="<?php echo base_url()?>login_template/css/style.css" />

</head>

<body>
<!--
<nav><a href="#" class="focus">Log In</a> | <a href="register.html">Register</a></nav>
-->
<form action='<?php echo base_url()?>login/auth' method='post'>

	<h2>Log In</h2>

	<input type="text" class="text-field" name='username' placeholder="Username" />
    <input type="password" class="text-field" name='password' placeholder="Password" />
    
    <input type="submit" value="Log In" class="button" />

</form>

</body>
</html>
