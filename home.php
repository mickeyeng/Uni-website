<?php	
?>
<!DOCTYPE html>
<html>
	<head>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css?<?php echo time(); ?> /">
		<link rel="stylesheet" href="css/style-mickey.css?<?php echo time(); ?> /">
		<link rel="stylesheet" href="css/tile.css?<?php echo time(); ?> /">
		<title>Home</title>
	</head>
	<body>
		<?php include "includes/navbar.inc.php" ?>
		<br>
		<br>
		<br>
		<div class="wrapper">
		<?php include "includes/main-content.inc.php"; ?>
	</body>
	<?php include "includes/footer.inc.php";?>
	</div>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>