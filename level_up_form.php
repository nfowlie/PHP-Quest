<?php
	include '_assets/level_up.php';
?>
<html>
	<head>
		<body>
			<?php
			if($updated == 'no')
			{
				echo "<table width='100%' border='0' cellpadding='3' cellspacing='1' bgcolor='#FFFFFF'>
						<tr>
							<td colspan='3'><strong>Allot Skill Points</strong></td>
						</tr>
						<form method='post'>
						<tr>
							<td>
								Health: <input name='statHealth' type='number' min='" . $_SESSION['statHealth'] . "' step='1' value='" . $_SESSION['statHealth'] . "'><br />
							</td>
						</tr>
						<tr>
							<td>
								Mana: <input name='statMana' type='number' min='". $_SESSION['statMana'] . "' step='1' value='". $_SESSION['statMana'] . "'><br />
							</td>
						</tr>
						<tr>
							<td>
								Physical Strength: <input name='statPhysicalStrength' type='number' min='". $_SESSION['statPhysicalStrength']."' step='1' value='". $_SESSION['statPhysicalStrength']."'><br />
							</td>
						</tr>
						<tr>
							<td>
								Magic Strength: <input name='statMagicStrength' type='number' min='". $_SESSION['statMagicStrength'] ."' step='1' value='". $_SESSION['statMagicStrength'] ."'><br />
							</td>
						</tr>
						<tr>
							<td>
								Physical Defense: <input name='statPhysicalDefense' type='number' min='". $_SESSION['statPhysicalDefense']. "' step='1' value='". $_SESSION['statPhysicalDefense']. "'><br />
							</td>
						</tr>
						<tr>
							<td>
								Magic Defense: <input name='statMagicDefense' type='number' min='". $_SESSION['statMagicDefense'] ."' step='1' value='". $_SESSION['statMagicDefense'] ."'><br />
							</td>
						</tr>
						<tr>
							<td>
								Speed: <input name='statSpeed' type='number' min='". $_SESSION['statSpeed'] ."' step='1' value='". $_SESSION['statSpeed'] ."'><br />
							</td>
						</tr>
						<tr>
							<td>
								Dodge: <input name='statDodge' type='number' min='". $_SESSION['statDodge'] ."' step='1' value='". $_SESSION['statDodge'] ."'><br />
							</td>
						</tr>
						<tr>
							<td>
								Accuracy: <input name='statAccuracy' type='number' min='" . $_SESSION['statAccuracy'] ."' step='1' value='" . $_SESSION['statAccuracy'] ."'><br />
							</td>
						</tr>
						<tr>
							<td>
								Luck: <input name='statLuck' type='number' min='" . $_SESSION['statLuck'] . "' step='1' value='" . $_SESSION['statLuck'] . "'><br />
							</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td><input type='submit' name='Submit' value='Submit'></td>
							</form>
						</tr>
					</table>";
			}
		else
		{
			echo "Adventurer ". $_SESSION['characterName'] . " has been updated!<br /><a href='adventure.php'><input type='submit' value='Click here to continue adventure'></a>";
		}
				
		?>
		</body>
	</head>
</html>