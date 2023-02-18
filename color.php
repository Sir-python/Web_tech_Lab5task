<html>
<head>
	<title>Cookie Example</title>
</head>

<body>
	<div style="background-color: <?=$pageColor?>">
		<h1>Cookie Example</h1>

		<?php
			date_default_timezone_set("Asia/Dhaka");
			echo date_default_timezone_get();
		?>
		<hr></hr>
		<br><br>
		<h2>Set Cookie</h2><br>
		<hr></hr>
		<form action="set_cookie.php" method="post">
			<label for="colorSelection">Select a color: </label>
			<input type="color" name="colorSelection"><br><br>
			<label for="expirationTime">Expire on: </label>
			<input type="datetime-local" name="expirationTime"><br><br>
			<input type="submit" name="Set Cookie" value="Set Cookie">
		</form>
		<hr></hr><br>
		<h2>Destroy Cookie</h2><br><br>
		<hr></hr>
		<form action="destroy_cookie.php">
			<input type="submit" name="Destroy_Cookie" value="destroy cookie">
		</form>
			
			<?php
				if (isset($_GET['msg'] ))
				{
					echo $_GET['msg'];
				}
			?>
	</div>
</body>
</html>