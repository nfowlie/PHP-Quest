<?php
    require '_assets/login.php';
?>

<html>
	<head>
		<title>
			RPG Quest
		</title>
		<link rel="stylesheet" type="text/css" href="_assets/styles/index.css" />
	</head>
	<body>
	<?php
		include '_assets/logout_button.php';
		include '_assets/login_form.php';
		if($_SESSION['username'])
		{
			echo '<form action="select_character.php">
					<input type="submit" value="Use Existing Adventurer">
				</form>
				<form action="create_character_form.php">
					<input type="submit" value="Create a new Adventurer">
				</form>';
		}
		
	?>
	</body>
</html>