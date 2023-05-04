<!DOCTYPE html>
<html>
<head>
	<title>Thank you for your purchase!</title>
	<style>
		body {
			background-image: url('index2background.jpg');
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
		}
	</style>
</head>
<body>
	<h1>Thank you for your purchase, <?php echo $_POST['fname'] ?>!</h1>
	<p>You have purchased <?php echo $_POST['coins'] ?> coins. We will bill your account ending in <?php echo substr($_POST['zipcode'], -4) ?>.</p>
</body>
</html>
