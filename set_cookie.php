<?php
	$c_name="Color";
	$selectedColor=$_POST['colorSelection'];
	setcookie($c_name, $selectedColor, time() + $_POST['expirationTime'], "/");
?>

<html>
	<body>
		<?php
			if ($_SERVER["REQUEST_METHOD"] === "POST") 
			{
				if (!empty($selectedColor)) 
				{
					header("Location: color.php?Color="."$selectedColor");
				}
				else
				{
					header("Location: color.php?msg="."Color not chosen");
				}
			}
		?>
	</body>
</html>
