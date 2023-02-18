<?php 
	setcookie("Color", "", time-3600());
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Destroy Cookie</title>
</head>
<body>
	<?php 
		header("Location: color.php?msg" . "Cookie deleted");
	?>
</body>
</html>