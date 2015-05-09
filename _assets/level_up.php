<?php
	session_start();
	require("_assets/config/dbc.php");
	
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
	$query = "SELECT SUM(statHealth + statMana + statPhysicalStrength + statMagicStrength + statPhysicalDefense + statMagicDefense + statSpeed + statDodge + statAccuracy + statLuck) as statSum FROM Characters WHERE ID = '$_SESSION[selectedCharacter]'";
	$result = mysqli_query($conn, $query);
	while($row = mysqli_fetch_assoc($result))
	{
		$resultSend = $row['statSum'];
	}
	$equivCheck = $resultSend + 5;
	
	if($checkStat == $equivCheck)
	{
		//$updateCharacterQuery = "UPDATE Characters SET statHealth = '$statHealth', statMana = '$statMana', statPhysicalStrength = '$statPhysicalStrength', statMagicStrength = '$statMagicStrength', statPhysicalDefense = '$statPhysicalDefense', statMagicDefense = '$statMagicDefense', statSpeed = '$statSpeed', statDodge = '$statDodge', statAccuracy = '$statAccuracy', statLuck = '$statLuck' WHERE ID = '$_SESSION[selectedCharacter]'"; 
		
		$_SESSION['statHealth'] = $statHealth;
		$_SESSION['statHealthCurrent'] = $statHealth;
		$_SESSION['statMana'] = $statMana;
		$_SESSION['statManaCurrent'] = $statMana;
		$_SESSION['statPhysicalStrength'] = $statPhysicalStrength;
		$_SESSION['statMagicStrength'] = $statMagicStrength;
		$_SESSION['statPhysicalDefense'] = $statPhysicalDefense;
		$_SESSION['statMagicDefense'] = $statMagicDefense;
		$_SESSION['statSpeed'] = $statSpeed;
		$_SESSION['statDodge'] = $statDodge;
		$_SESSION['statAccuracy'] = $statAccuracy;
		$_SESSION['statLuck'] = $statLuck;
		
		$updated = 'yes';
	}
	else
	{
		$updated = 'no';
		echo "You are allowed to allot ". $equivCheck . " skill points.<br />You have allotted " . $checkStat . "Stat points!";
	}
?>