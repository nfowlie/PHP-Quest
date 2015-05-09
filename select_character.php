<?php
	session_start();
	require("_assets/config/dbc.php");
	include '_assets/logout_button.php';
	
	$getAllCharacters = ("SELECT * FROM Characters WHERE memberID = '$_SESSION[ID]' ORDER BY characterName");
	$getAllCharactersResult = mysqli_query($conn, $getAllCharacters);

	echo "<form name = 'characterSelect' method='post'>
			Select a character<br />
			<select name='ddlCharacter' class='textfields' id='ddlCharacter'>
			<option value='0'>-- Select a Character --</option>";
	
	while($viewAllCharacters = mysqli_fetch_array($getAllCharactersResult))
	{
		echo "<option value='" . $viewAllCharacters['ID'] . "'>" . $viewAllCharacters['characterName'] . "</option>";
	}
	
	echo "</select>
		<input type='submit' value='Show Stats'>
		</form>";
	
	$selectedCharacter = $_POST['ddlCharacter'];
	
	
	//Gets the character name from the dropdown
	$getCharacterNameQuery = "SELECT characterName FROM Characters WHERE ID LIKE '{$selectedCharacter}'";
	$getCharacterNameQueryResult = mysqli_query($conn, $getCharacterNameQuery);
	
	while($row = mysqli_fetch_assoc($getCharacterNameQueryResult))
	{
		$characterName = $row['characterName'];
	}
	
	//Gets the character level from the dropdown
	$getLevelQuery = "SELECT statLevel FROM Characters WHERE ID LIKE '{$selectedCharacter}'";
	$getLevelQueryResult = mysqli_query($conn, $getLevelQuery);
	
	while($row = mysqli_fetch_assoc($getLevelQueryResult))
	{
		$statLevel = $row['statLevel'];
	}
	
	//Gets the character experience from the dropdown
	$getExperienceQuery = "SELECT statExperience FROM Characters WHERE ID LIKE '{$selectedCharacter}'";
	$getExperienceQueryResult = mysqli_query($conn, $getExperienceQuery);
	
	while($row = mysqli_fetch_assoc($getExperienceQueryResult))
	{
		$statExperience = $row['statExperience'];
	}

	//Gets the character health from the dropdown
	$getHealthQuery = "SELECT statHealth FROM Characters WHERE ID LIKE '{$selectedCharacter}'";
	$getHealthQueryResult = mysqli_query($conn, $getHealthQuery);
	
	while($row = mysqli_fetch_assoc($getHealthQueryResult))
	{
		$statHealth = $row['statHealth'];
	}

	//Gets the character health from the dropdown
	$getHealthCurrentQuery = "SELECT statHealthCurrent FROM Characters WHERE ID LIKE '{$selectedCharacter}'";
	$getHealthCurrentQueryResult = mysqli_query($conn, $getHealthCurrentQuery);
	
	while($row = mysqli_fetch_assoc($getHealthCurrentQueryResult))
	{
		$statHealthCurrent = $row['statHealthCurrent'];
	}
	
	//Gets the character health from the dropdown
	$getManaQuery = "SELECT statMana FROM Characters WHERE ID LIKE '{$selectedCharacter}'";
	$getManaQueryResult = mysqli_query($conn, $getManaQuery);
	
	while($row = mysqli_fetch_assoc($getManaQueryResult))
	{
		$statMana = $row['statMana'];
	}
	
	//Gets the character mana from the dropdown
	$getManaCurrentQuery = "SELECT statManaCurrent FROM Characters WHERE ID LIKE '{$selectedCharacter}'";
	$getManaCurrentQueryResult = mysqli_query($conn, $getManaCurrentQuery);
	
	while($row = mysqli_fetch_assoc($getManaCurrentQueryResult))
	{
		$statManaCurrent = $row['statManaCurrent'];
	}
	
	//Gets the character physical strength from the dropdown
	$getPhysicalStrengthQuery = "SELECT statPhysicalStrength FROM Characters WHERE ID LIKE '{$selectedCharacter}'";
	$getPhysicalStrengthQueryResult = mysqli_query($conn, $getPhysicalStrengthQuery);
	
	while($row = mysqli_fetch_assoc($getPhysicalStrengthQueryResult))
	{
		$statPhysicalStrength = $row['statPhysicalStrength'];
	}
	
	//Gets the character magic strength from the dropdown
	$getMagicStrengthQuery = "SELECT statMagicStrength FROM Characters WHERE ID LIKE '{$selectedCharacter}'";
	$getMagicStrengthQueryResult = mysqli_query($conn, $getMagicStrengthQuery);
	
	while($row = mysqli_fetch_assoc($getMagicStrengthQueryResult))
	{
		$statMagicStrength = $row['statMagicStrength'];
	}
	
	//Gets the character physical defense from the dropdown
	$getPhysicalDefenseQuery = "SELECT statPhysicalDefense FROM Characters WHERE ID LIKE '{$selectedCharacter}'";
	$getPhysicalDefenseQueryResult = mysqli_query($conn, $getPhysicalDefenseQuery);
	
	while($row = mysqli_fetch_assoc($getPhysicalDefenseQueryResult))
	{
		$statPhysicalDefense = $row['statPhysicalDefense'];
	}
	
	//Gets the character magic defense from the dropdown
	$getMagicDefenseQuery = "SELECT statMagicDefense FROM Characters WHERE ID LIKE '{$selectedCharacter}'";
	$getMagicDefenseQueryResult = mysqli_query($conn, $getMagicDefenseQuery);
	
	while($row = mysqli_fetch_assoc($getMagicDefenseQueryResult))
	{
		$statMagicDefense = $row['statMagicDefense'];
	}
	
	//Gets the character speed from the dropdown
	$getSpeedQuery = "SELECT statSpeed FROM Characters WHERE ID LIKE '{$selectedCharacter}'";
	$getSpeedQueryResult = mysqli_query($conn, $getSpeedQuery);
	
	while($row = mysqli_fetch_assoc($getSpeedQueryResult))
	{
		$statSpeed = $row['statSpeed'];
	}
	
	//Gets the character dodge from the dropdown
	$getDodgeQuery = "SELECT statDodge FROM Characters WHERE ID LIKE '{$selectedCharacter}'";
	$getDodgeQueryResult = mysqli_query($conn, $getDodgeQuery);
	
	while($row = mysqli_fetch_assoc($getDodgeQueryResult))
	{
		$statDodge = $row['statDodge'];
	}
	
	//Gets the character accuracy from the dropdown
	$getAccuracyQuery = "SELECT statAccuracy FROM Characters WHERE ID LIKE '{$selectedCharacter}'";
	$getAccuracyQueryResult = mysqli_query($conn, $getAccuracyQuery);
	
	while($row = mysqli_fetch_assoc($getAccuracyQueryResult))
	{
		$statAccuracy = $row['statAccuracy'];
	}
	
	//Gets the character luck from the dropdown
	$getLuckQuery = "SELECT statLuck FROM Characters WHERE ID LIKE '{$selectedCharacter}'";
	$getLuckQueryResult = mysqli_query($conn, $getLuckQuery);
	
	while($row = mysqli_fetch_assoc($getLuckQueryResult))
	{
		$statLuck = $row['statLuck'];
	}
	
	if(empty($selectedCharacter))
	{
		
	}
	else
	{
		echo "<table width='100%' border='0' cellpadding='3' cellspacing='1' bgcolor='#FFFFFF'>
				<tr>
					<td colspan='3'><strong>" . $characterName . "</strong></td>
				</tr>
				<tr>
					<td>
						Level: " . $statLevel . "<br />
					</td>
				</tr>
				<tr>
					<td>
						Experience: " . $statExperience . "<br />
					</td>
				</td>
				<tr>
					<td>
						Health: " . $statHealthCurrent . "<br />
					</td>
				</tr>
				<tr>
					<td>
						Mana: " . $statManaCurrent . "<br />
					</td>
				</tr>
				<tr>
					<td>
						Physical Strength: " . $statPhysicalStrength . "<br />
					</td>
				</tr>
				<tr>
					<td>
						Magic Strength: " . $statMagicStrength . "<br />
					</td>
				</tr>
				<tr>
					<td>
						Physical Defense: " . $statPhysicalDefense . " <br />
					</td>
				</tr>
				<tr>
					<td>
						Magic Defense: " . $statMagicDefense . "<br />
					</td>
				</tr>
				<tr>
					<td>
						Speed: " . $statSpeed . "<br />
					</td>
				</tr>
				<tr>
					<td>
						Dodge: " . $statDodge . "<br />
					</td>
				</tr>
				<tr>
					<td>
						Accuracy: " . $statAccuracy . "<br />
					</td>
				</tr>
				<tr>
					<td>
						
					</td>
				</tr>
			</table>
			<form name='adventure' type='post' action='adventure.php'>
				<input type='submit' value='Onwards to adventure!'>";
				$_SESSION['selectedCharacter'] = $selectedCharacter;
				$_SESSION['characterName'] = $characterName;
				$_SESSION['statLevel'] = $statLevel;
				$_SESSION['statExperience'] = $statExperience;
				$_SESSION['statHealth'] = $statHealth;
				$_SESSION['statHealthCurrent'] = $statHealthCurrent;
				$_SESSION['statMana'] =$statMana;
				$_SESSION['statManaCurrent'] = $statManaCurrent;
				$_SESSION['statPhysicalStrength'] = $statPhysicalStrength;
				$_SESSION['statMagicStrength'] = $statMagicStrength;
				$_SESSION['statPhysicalDefense'] = $statPhysicalDefense;
				$_SESSION['statMagicDefense'] = $statMagicDefense;
				$_SESSION['statSpeed'] = $statSpeed;
				$_SESSION['statDodge'] = $statDodge;
				$_SESSION['statAccuracy'] = $statAccuracy;
				$_SESSION['statLuck'] = $statLuck;
			echo "</form>"
			;
	}
	echo "<a href='create_character_form.php'><input type='submit' value='Create new character!'></a>"
?>