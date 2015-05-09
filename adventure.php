<?php
	session_start();
	require '_assets/config/dbc.php';
	include '_assets/logout_button.php';
	//When this page loads create session variables for character
	//Also think about making this all done on a single webpage
	
	$monsterRand = rand(1,2);
	
	//Gets Monster's ID
	$getMonsterIDQuery = "SELECT ID FROM Monsters WHERE ID LIKE '{$monsterRand}'";
	$fightMonsterID = mysqli_query($conn, $getMonsterIDQuery);
	
	while($row = mysqli_fetch_assoc($fightMonsterID))
	{
		$selectedMonster = $row['ID'];
	}
	
	//Gets Monster's Name
	$getMonsterNameQuery = "SELECT monsterName FROM Monsters WHERE ID LIKE '{$monsterRand}'";
	$fightMonsterName = mysqli_query($conn, $getMonsterNameQuery);
	
	while($row = mysqli_fetch_assoc($fightMonsterName))
	{
		$monsterName = $row['monsterName'];
	}
	
	//Gets Monster's Experience
	$getMonsterExperienceQuery = "SELECT monsterExperience FROM Monsters WHERE ID LIKE '{$monsterRand}'";
	$fightMonsterExperience = mysqli_query($conn, $getMonsterExperienceQuery);
	
	while($row = mysqli_fetch_assoc($fightMonsterExperience))
	{
		$monsterExperience = $row['monsterExperience'];
	}
	
	//Gets Monster's Health
	$getMonsterHealthQuery = "SELECT monsterHealth FROM Monsters WHERE ID LIKE '{$monsterRand}'";
	$fightMonsterHealth = mysqli_query($conn, $getMonsterHealthQuery);
	
	while($row = mysqli_fetch_assoc($fightMonsterHealth))
	{
		$monsterHealth = $row['monsterHealth'];
	}
	
	//Gets Monster's Mana
	$getMonsterManaQuery = "SELECT monsterMana FROM Monsters WHERE ID LIKE '{$monsterRand}'";
	$fightMonsterMana = mysqli_query($conn, $getMonsterManaQuery);
	
	while($row = mysqli_fetch_assoc($fightMonsterMana))
	{
		$monsterMana = $row['monsterMana'];
	}
	
	//Gets Monster's PhysicalStrength
	$getMonsterPhysicalStrengthQuery = "SELECT monsterPhysicalStrength FROM Monsters WHERE ID LIKE '{$monsterRand}'";
	$fightMonsterPhysicalStrength = mysqli_query($conn, $getMonsterPhysicalStrengthQuery);
	
	while($row = mysqli_fetch_assoc($fightMonsterPhysicalStrength))
	{
		$monsterPhysicalStrength = $row['monsterPhysicalStrength'];
	}
	
	//Gets Monster's MagicStrength
	$getMonsterMagicStrengthQuery = "SELECT monsterMagicStrength FROM Monsters WHERE ID LIKE '{$monsterRand}'";
	$fightMonsterMagicStrength = mysqli_query($conn, $getMonsterMagicStrengthQuery);
	
	while($row = mysqli_fetch_assoc($fightMonsterMagicStrength))
	{
		$monsterMagicStrength = $row['monsterMagicStrength'];
	}
	
	//Gets Monster's PhysicalDefense
	$getMonsterPhysicalDefenseQuery = "SELECT monsterPhysicalDefense FROM Monsters WHERE ID LIKE '{$monsterRand}'";
	$fightMonsterPhysicalDefense = mysqli_query($conn, $getMonsterPhysicalDefenseQuery);
	
	while($row = mysqli_fetch_assoc($fightMonsterPhysicalDefense))
	{
		$monsterPhysicalDefense = $row['monsterPhysicalDefense'];
	}
	
	//Gets Monster's MagicDefense
	$getMonsterMagicDefenseQuery = "SELECT monsterMagicDefense FROM Monsters WHERE ID LIKE '{$monsterRand}'";
	$fightMonsterMagicDefense = mysqli_query($conn, $getMonsterMagicDefenseQuery);
	
	while($row = mysqli_fetch_assoc($fightMonsterMagicDefense))
	{
		$monsterMagicDefense = $row['monsterMagicDefense'];
	}
	
	//Gets Monster's Speed
	$getMonsterSpeedQuery = "SELECT monsterSpeed FROM Monsters WHERE ID LIKE '{$monsterRand}'";
	$fightMonsterSpeed = mysqli_query($conn, $getMonsterSpeedQuery);
	
	while($row = mysqli_fetch_assoc($fightMonsterSpeed))
	{
		$monsterSpeed = $row['monsterSpeed'];
	}
	
	//Gets Monster's Dodge
	$getMonsterDodgeQuery = "SELECT monsterDodge FROM Monsters WHERE ID LIKE '{$monsterRand}'";
	$fightMonsterDodge = mysqli_query($conn, $getMonsterDodgeQuery);
	
	while($row = mysqli_fetch_assoc($fightMonsterDodge))
	{
		$monsterDodge = $row['monsterDodge'];
	}
	
	//Gets Monster's Accuracy
	$getMonsterAccuracyQuery = "SELECT monsterAccuracy FROM Monsters WHERE ID LIKE '{$monsterRand}'";
	$fightMonsterAccuracy = mysqli_query($conn, $getMonsterAccuracyQuery);
	
	while($row = mysqli_fetch_assoc($fightMonsterAccuracy))
	{
		$monsterAccuracy = $row['monsterAccuracy'];
	}
	
	//Gets Monster's commonItemID
	$getMonsterCommonItemIDQuery = "SELECT commonItemID FROM Monsters WHERE ID LIKE '{$monsterRand}'";
	$fightMonsterCommonItemID = mysqli_query($conn, $getMonsterCommonItemIDQuery);
	
	while($row = mysqli_fetch_assoc($fightMonsterCommonItemID))
	{
		$commonItemID = $row['commonItemID'];
	}
	
	//Gets Monster's mediumItemID
	$getMonsterMediumItemIDQuery = "SELECT mediumItemID FROM Monsters WHERE ID LIKE '{$monsterRand}'";
	$fightMonsterMediumItemID = mysqli_query($conn, $getMonsterMediumItemIDQuery);
	
	while($row = mysqli_fetch_assoc($fightMonsterMediumItemID))
	{
		$mediumItemID = $row['mediumItemID'];
	}
	
	//Gets Monster's rareItemID
	$getMonsterRareItemIDQuery = "SELECT rareItemID FROM Monsters WHERE ID LIKE '{$monsterRand}'";
	$fightMonsterRareItemID = mysqli_query($conn, $getMonsterRareItemIDQuery);
	
	while($row = mysqli_fetch_assoc($fightMonsterRareItemID))
	{
		$rareItemID = $row['rareItemID'];
	}
	
	if(empty($selectedMonster))
	{
		
	}
	else
	{
		$_SESSION['selectedMonster'] = $selectedMonster;
		$_SESSION['monsterName'] = $monsterName;
		$_SESSION['monsterExperience'] = $monsterExperience;
		$_SESSION['monsterHealthCurrent'] = $monsterHealth;
		$_SESSION['monsterManaCurrent'] = $monsterMana;
		$_SESSION['monsterPhysicalStrength'] = $monsterPhysicalStrength;
		$_SESSION['monsterMagicStrength'] = $monsterMagicStrength;
		$_SESSION['monsterPhysicalDefense'] = $monsterPhysicalDefense;
		$_SESSION['monsterMagicDefense'] = $monsterMagicDefense;
		$_SESSION['monsterSpeed'] = $monsterSpeed;
		$_SESSION['monsterDodge'] = $monsterDodge;
		$_SESSION['monsterAccuracy'] = $monsterAccuracy;
		$_SESSION['commonItemID'] = $commonItemID;
		$_SESSION['mediumItemID'] = $mediumItemID;
		$_SESSION['rareItemID'] = $rareItemID;
	}
?>

<html>
	<head>
		<title>PHP Quest</title>
	</head>
	<body>
		<?php
			include '_assets/save_button.php';
			echo $_SESSION['characterName'];
		?>
		<form name='monster_encounter' action='fight.php'>
			<input type='submit' value='Look for Monster' align='right'>
		</form>
		<a href='select_character.php'><input type='submit' value='Choose Different Adventurer'></a>
	</body>
</html>