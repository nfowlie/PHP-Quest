<?php
	session_start();
	require '_assets/config/dbc.php';
?>
<?php
	function fight($Health, $Accuracy, $Dodge, $PhysicalDamage, $PhysicalDefense, $MagicalDamage, $MagicalDefense)
	{
		if($Accuracy >= $Dodge)
		{
			if(($PhysicalDamage > $PhysicalDefense) && ($MagicalDamage > $MagicalDefense))
			{
				$PhysicalHit = $PhysicalDamage - $PhysicalDefense;
				$MagicalHit = $MagicalDamage - $MagicalDefense;
			}
			elseif($PhysicalDamage > $PhysicalDefense)
			{
				$PhysicalHit = $PhysicalDamage - $PhysicalDefense;
			}
			elseif($MagicalDamage > $MagicalDefense)
			{
				$MagicalHit = $MagicalDamage - $MagicalDefense;
			}
			else
			{
				
			}
			$Health = $Health - ($PhysicalHit + $MagicalHit);
		}
		return $Health;
	}
	
	function battleResult()
	{
		if(($_SESSION['monsterHealthCurrent'] <= 0) && ($_SESSION['statHealthCurrent'] > 0))
		{
			$battle = 'win';
		}
		elseif($_SESSION['statHealthCurrent'] <= 0)
		{
			$battle = 'lose';
		}
		else
		{
			$battle = 'continue';
		}
		return $battle;
	}
?>
<html>
	<head>
		<title>
			PHP Quest
		</title>
		<link href='_assets/styles/index.css' type='text/css' rel='stylesheet'> 
	</head>
	<body>
		<?php
			$turn = $_POST['turn'];
			$run = $_POST['run'];
			if(empty($turn))
			{
				echo "<table width='100%' border='0' cellpadding='3' cellspacing='1' bgcolor='#FFFFFF'>
						<tr>
							<td colspan='3'><strong>" . $_SESSION['monsterName'] . "</strong></td>
						</tr>
						<tr>
							<td>
								Health: " . $_SESSION['monsterHealthCurrent'] . "<br />
							</td>
						</tr>
						<tr>
							<td>
								Mana: " . $_SESSION['monsterManaCurrent'] . "<br />
							</td>
						</tr>
						<tr>
							<td>
								Physical Strength: " . $_SESSION['monsterPhysicalStrength'] . "<br />
							</td>
						</tr>
						<tr>
							<td>
								Magic Strength: " . $_SESSION['monsterMagicStrength'] . "<br />
							</td>
						</tr>
						<tr>
							<td>
								Physical Defense: " . $_SESSION['monsterPhysicalDefense'] . " <br />
							</td>
						</tr>
						<tr>
							<td>
								Magic Defense: " . $_SESSION['monsterMagicDefense'] . "<br />
							</td>
						</tr>
						<tr>
							<td>
								Speed: " . $_SESSION['monsterSpeed'] . "<br />
							</td>
						</tr>
						<tr>
							<td>
								Dodge: " . $_SESSION['monsterDodge'] . "<br />
							</td>
						</tr>
						<tr>
							<td>
								Accuracy: " . $_SESSION['monsterAccuracy'] . "<br />
							</td>
						</tr>
					</table>
					<hr />
					<table width='100%' border='0' cellpadding='3' cellspacing='1' bgcolor='#FFFFFF'>
						<tr>
							<td colspan='3'><strong>" . $_SESSION['characterName'] . "</strong></td>
						</tr>
						<tr>
							<td>
								Health: " . $_SESSION['statHealthCurrent'] . "<br />
							</td>
						</tr>
						<tr>
							<td>
								Mana: " . $_SESSION['statManaCurrent'] . "<br />
							</td>
						</tr>
						<tr>
							<td>
								Physical Strength: " . $_SESSION['statPhysicalStrength'] . "<br />
							</td>
						</tr>
						<tr>
							<td>
								Magic Strength: " . $_SESSION['statMagicStrength'] . "<br />
							</td>
						</tr>
						<tr>
							<td>
								Physical Defense: " . $_SESSION['statPhysicalDefense'] . " <br />
							</td>
						</tr>
						<tr>
							<td>
								Magic Defense: " . $_SESSION['statMagicDefense'] . "<br />
							</td>
						</tr>
						<tr>
							<td>
								Speed: " . $_SESSION['statSpeed'] . "<br />
							</td>
						</tr>
						<tr>
							<td>
								Dodge: " . $_SESSION['statDodge'] . "<br />
							</td>
						</tr>
						<tr>
							<td>
								Accuracy: " . $_SESSION['statAccuracy'] . "<br />
							</td>
						</tr>
						<tr>
							<td>
								
							</td>
						</tr>
				</table>
				<form method='post'>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td><input type='submit' name='turn' value='Attack!'></td>
				</form>";
			}
			else
			{
				if($_SESSION['statSpeed'] > $_SESSION['monsterSpeed'])
				{
					$_SESSION['monsterHealthCurrent'] = fight($_SESSION['monsterHealthCurrent'], $_SESSION['statAccuracy'], $_SESSION['monsterDodge'], $_SESSION['statPhysicalStrength'], $_SESSION['monsterPhysicalDefense'], $_SESSION['statMagicStrength'], $_SESSION['monsterMagicDefense']);
					$battleResult = battleResult();
					if($battleResult == 'win')
					{
						echo "<h2>Victory!</h2>
								<a href='adventure.php'><input type='submit' value='Click here to continue'></a>
								";
								$_SESSION['statExperience'] = $_SESSION['statExperience'] + $_SESSION['monsterExperience'];
								include '_assets/level_up_check.php';
					}
					else
					{
						$_SESSION['statHealthCurrent'] = fight($_SESSION['statHealthCurrent'], $_SESSION['monsterAccuracy'], $_SESSION['statDodge'], $_SESSION['monsterPhysicalStrength'], $_SESSION['statPhysicalDefense'], $_SESSION['monsterMagicStrength'], $_SESSION['statMagicDefense']);
						$battleResult =battleResult();
						if($battleResult == 'lose')
						{
							echo "<h2>Defeat!</h2>
									<a href='select_character.php'><input type='submit' value='Click here to load from last save'></a>
									";
						}
						else
						{
							echo "<table width='100%' border='0' cellpadding='3' cellspacing='1' bgcolor='#FFFFFF'>
									<tr>
										<td colspan='3'><strong>" . $_SESSION['monsterName'] . "</strong></td>
									</tr>
									<tr>
										<td>
											Health: " . $_SESSION['monsterHealthCurrent'] . "<br />
										</td>
									</tr>
									<tr>
										<td>
											Mana: " . $_SESSION['monsterManaCurrent'] . "<br />
										</td>
									</tr>
									<tr>
										<td>
											Physical Strength: " . $_SESSION['monsterPhysicalStrength'] . "<br />
										</td>
									</tr>
									<tr>
										<td>
											Magic Strength: " . $_SESSION['monsterMagicStrength'] . "<br />
										</td>
									</tr>
									<tr>
										<td>
											Physical Defense: " . $_SESSION['monsterPhysicalDefense'] . " <br />
										</td>
									</tr>
									<tr>
										<td>
											Magic Defense: " . $_SESSION['monsterMagicDefense'] . "<br />
										</td>
									</tr>
									<tr>
										<td>
											Speed: " . $_SESSION['monsterSpeed'] . "<br />
										</td>
									</tr>
									<tr>
										<td>
											Dodge: " . $_SESSION['monsterDodge'] . "<br />
										</td>
									</tr>
									<tr>
										<td>
											Accuracy: " . $_SESSION['monsterAccuracy'] . "<br />
										</td>
									</tr>
								</table>
								<hr />
								<table width='100%' border='0' cellpadding='3' cellspacing='1' bgcolor='#FFFFFF'>
									<tr>
										<td colspan='3'><strong>" . $_SESSION['characterName'] . "</strong></td>
									</tr>
									<tr>
										<td>
											Health: " . $_SESSION['statHealthCurrent'] . "<br />
										</td>
									</tr>
									<tr>
										<td>
											Mana: " . $_SESSION['statManaCurrent'] . "<br />
										</td>
									</tr>
									<tr>
										<td>
											Physical Strength: " . $_SESSION['statPhysicalStrength'] . "<br />
										</td>
									</tr>
									<tr>
										<td>
											Magic Strength: " . $_SESSION['statMagicStrength'] . "<br />
										</td>
									</tr>
									<tr>
										<td>
											Physical Defense: " . $_SESSION['statPhysicalDefense'] . " <br />
										</td>
									</tr>
									<tr>
										<td>
											Magic Defense: " . $_SESSION['statMagicDefense'] . "<br />
										</td>
									</tr>
									<tr>
										<td>
											Speed: " . $_SESSION['statSpeed'] . "<br />
										</td>
									</tr>
									<tr>
										<td>
											Dodge: " . $_SESSION['statDodge'] . "<br />
										</td>
									</tr>
									<tr>
										<td>
											Accuracy: " . $_SESSION['statAccuracy'] . "<br />
										</td>
									</tr>
									<tr>
										<td>
											
										</td>
									</tr>
							</table>
							<form method='post'>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td><input type='submit' name='turn' value='Attack!'></td>
							</form>";
						}	
						
					}
				}
				else
				{
					$_SESSION['statHealthCurrent'] = fight($_SESSION['statHealthCurrent'], $_SESSION['monsterAccuracy'], $_SESSION['statDodge'], $_SESSION['monsterPhysicalStrength'], $_SESSION['statPhysicalDefense'], $_SESSION['monsterMagicStrength'], $_SESSION['statMagicDefense']);
					$battleResult = battleResult();
					if($battleResult == 'lose')
					{
						echo "<h2>Defeat!</h2>
								<a href='select_character.php'><input type='submit' value='Click here to load from last save'></a>
								";
					}
					else
					{
						$_SESSION['monsterHealthCurrent'] = fight($_SESSION['monsterHealthCurrent'], $_SESSION['statAccuracy'], $_SESSION['monsterDodge'], $_SESSION['statPhysicalStrength'], $_SESSION['monsterPhysicalDefense'], $_SESSION['statMagicStrength'], $_SESSION['monsterMagicDefense']);
						$battleResult =battleResult();
						if($battleResult == 'win')
						{
							echo "<h2>Victory!</h2>
									<a href='adventure.php'><input type='submit' value='Click here to continue'></a>
									";
							$_SESSION['statExperience'] = $_SESSION['statExperience'] + $_SESSION['monsterExperience'];
							include '_assets/level_up_check.php';
						}
						else
						{
							echo "<table width='100%' border='0' cellpadding='3' cellspacing='1' bgcolor='#FFFFFF'>
									<tr>
										<td colspan='3'><strong>" . $_SESSION['monsterName'] . "</strong></td>
									</tr>
									<tr>
										<td>
											Health: " . $_SESSION['monsterHealthCurrent'] . "<br />
										</td>
									</tr>
									<tr>
										<td>
											Mana: " . $_SESSION['monsterManaCurrent'] . "<br />
										</td>
									</tr>
									<tr>
										<td>
											Physical Strength: " . $_SESSION['monsterPhysicalStrength'] . "<br />
										</td>
									</tr>
									<tr>
										<td>
											Magic Strength: " . $_SESSION['monsterMagicStrength'] . "<br />
										</td>
									</tr>
									<tr>
										<td>
											Physical Defense: " . $_SESSION['monsterPhysicalDefense'] . " <br />
										</td>
									</tr>
									<tr>
										<td>
											Magic Defense: " . $_SESSION['monsterMagicDefense'] . "<br />
										</td>
									</tr>
									<tr>
										<td>
											Speed: " . $_SESSION['monsterSpeed'] . "<br />
										</td>
									</tr>
									<tr>
										<td>
											Dodge: " . $_SESSION['monsterDodge'] . "<br />
										</td>
									</tr>
									<tr>
										<td>
											Accuracy: " . $_SESSION['monsterAccuracy'] . "<br />
										</td>
									</tr>
								</table>
								<hr />
								<table width='100%' border='0' cellpadding='3' cellspacing='1' bgcolor='#FFFFFF'>
									<tr>
										<td colspan='3'><strong>" . $_SESSION['characterName'] . "</strong></td>
									</tr>
									<tr>
										<td>
											Health: " . $_SESSION['statHealthCurrent'] . "<br />
										</td>
									</tr>
									<tr>
										<td>
											Mana: " . $_SESSION['statManaCurrent'] . "<br />
										</td>
									</tr>
									<tr>
										<td>
											Physical Strength: " . $_SESSION['statPhysicalStrength'] . "<br />
										</td>
									</tr>
									<tr>
										<td>
											Magic Strength: " . $_SESSION['statMagicStrength'] . "<br />
										</td>
									</tr>
									<tr>
										<td>
											Physical Defense: " . $_SESSION['statPhysicalDefense'] . " <br />
										</td>
									</tr>
									<tr>
										<td>
											Magic Defense: " . $_SESSION['statMagicDefense'] . "<br />
										</td>
									</tr>
									<tr>
										<td>
											Speed: " . $_SESSION['statSpeed'] . "<br />
										</td>
									</tr>
									<tr>
										<td>
											Dodge: " . $_SESSION['statDodge'] . "<br />
										</td>
									</tr>
									<tr>
										<td>
											Accuracy: " . $_SESSION['statAccuracy'] . "<br />
										</td>
									</tr>
									<tr>
										<td>
											
										</td>
									</tr>
							</table>
							<form method='post'>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td><input type='submit' name='turn' value='Attack!'></td>
							</form>";
						}	
						
					}
				}
			}
		?>
	</body>
</html>