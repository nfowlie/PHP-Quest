<?php
	session_start();
	require("_assets/config/dbc.php");
	include '_assets/logout_button.php';
	
	$characterName = $_POST['characterName'];
	$characterGender = $_POST['characterGender'];
	$statHealth = $_POST['statHealth'];
	$statMana = $_POST['statMana'];
	$statPhysicalStrength = $_POST['statPhysicalStrength'];
	$statMagicStrength = $_POST['statMagicStrength'];
	$statPhysicalDefense = $_POST['statPhysicalDefense'];
	$statMagicDefense = $_POST['statMagicDefense'];
	$statSpeed = $_POST['statSpeed'];
	$statDodge = $_POST['statDodge'];
	$statAccuracy = $_POST['statAccuracy'];
	$statLuck = $_POST['statLuck'];
	
	$checkStat = $statHealth + $statMana + $statPhysicalStrength + $statMagicStrength + $statPhysicalDefense + $statMagicDefense + $statSpeed + $statDodge + $statAccuracy + $statLuck;
	if($checkStat == 30)
	{
		if(empty($characterName))
		{
			
		}
		else
		{
			$createCharacterQuery = "INSERT INTO Characters(memberID, characterName, characterGender, statHealth, statHealthCurrent, statMana, statManaCurrent, statPhysicalStrength, statMagicStrength, statPhysicalDefense, statMagicDefense, statSpeed, statDodge, statAccuracy, statLuck) VALUES('$_SESSION[ID]', '$characterName', '$characterGender', '$statHealth', '$statHealth', '$statMana', '$statMana', '$statPhysicalStrength', '$statMagicStrength', '$statPhysicalDefense', '$statMagicDefense', '$statSpeed', '$statDodge', '$statAccuracy', '$statLuck')";
			if($submitCharacter = mysqli_query($conn, $createCharacterQuery))
			{
				echo "Adventurer " . $characterName . " was created!";
			}
			else
			{
				echo mysqli_error($conn);
			}
		}
	}
	else
	{
		echo "Stats allotment must be exactly 30.<br />You have alloted " . $checkStat . "Stat points!";
	}
?>