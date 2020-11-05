
<!DOCTYPE html>
<html>
<head>
	<title>OC LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
		<h2>OC LOGIN</h2>
	</div>
	
	<form method="post" action="simplescript.php">

		<?php include('errors.php'); ?>

		
		<div class="input-group">
			<label>Passcode</label>
			<input type="passcode" name="passcode">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		
	</form>


</body>
</html>