<?php
	session_start();
	require 'config/dbc.php';
?>

<html>
	<body>
		<?php
			$saveProgressQuery = "UPDATE Characters SET statLevel = '$_SESSION[statLevel]', statExperience = '$_SESSION[statExperience]', statHealth = '$_SESSION[statHealth]', statHealthCurrent = '$_SESSION[statHealthCurrent]', statMana = '$_SESSION[statMana]', statManaCurrent = '$_SESSION[statManaCurrent]', statPhysicalStrength = '$_SESSION[statPhysicalStrength]', statMagicStrength = '$_SESSION[statMagicStrength]', statPhysicalDefense = '$_SESSION[statPhysicalDefense]', statMagicDefense = '$_SESSION[statMagicDefense]', statSpeed = '$_SESSION[statSpeed]', statDodge = '$_SESSION[statDodge]', statAccuracy = '$_SESSION[statAccuracy]', statLuck = '$_SESSION[statLuck]' WHERE ID = '$_SESSION[selectedCharacter]'";
			if($submitSaveProgress = mysqli_query($conn, $saveProgressQuery))
			{
				echo "<a href='../adventure.php'>Saved successfully</a>";
			}
			else {
				
			}
		?>

	</body>
</html>