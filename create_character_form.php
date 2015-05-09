<?php
	session_start();
	if ($_SESSION['username'])
	{
		echo "<table width='500' border='0' align='center' cellpadding='0' cellspacing='1' bgcolor='#CCCCCC'>
				<tr>
					<form name='form1' method='post'>
					<td>
						<table width='100%' border='0' cellpadding='3' cellspacing='1' bgcolor='#FFFFFF'>
							<tr>
								<td colspan='3'><strong>Create Character</strong></td>
							</tr>
							<tr>
								<td width='78'>Character Name: </td>
								<td width='294'><input name='characterName' type='text' id='characterName'></td>
							</tr>
							<tr>
								<td>Gender</td>
								<td>
									<input name='characterGender' type='radio' id='characterGender' value='M'>Male
									<input name='characterGender' type='radio' id='characterGender' value='F'>Female
								</td>
							</tr>
						</table>
						<table width='100%' border='0' cellpadding='3' cellspacing='1' bgcolor='#FFFFFF'>
							<tr>
								<td colspan='3'><strong>Character Stats</strong></td>
							</tr>
							<tr>
								<td>
									Health: <input name='statHealth' type='number' min='1' step='1' value='" . $_SESSION['statHealth'] . "'><br />
								</td>
							</tr>
							<tr>
								<td>
									Mana: <input name='statMana' type='number' min='1' step='1' value='" . $_SESSION['statMana'] . "']><br />
								</td>
							</tr>
							<tr>
								<td>
									Physical Strength: <input name='statPhysicalStrength' type='number' min='1' step='1' value='" . $_SESSION['statPhysicalStrength'] . "']><br />
								</td>
							</tr>
							<tr>
								<td>
									Magic Strength: <input name='statMagicStrength' type='number' min='1' step='1' value='" . $_SESSION['statMagicStrength'] . "']><br />
								</td>
							</tr>
							<tr>
								<td>
									Physical Defense: <input name='statPhysicalDefense' type='number' min='1' step='1' value='" . $_SESSION['statPhysicalDefense'] . "']><br />
								</td>
							</tr>
							<tr>
								<td>
									Magic Defense: <input name='statMagicDefense' type='number' min='1' step='1' value='" . $_SESSION['statMagicDefense'] . "']><br />
								</td>
							</tr>
							<tr>
								<td>
									Speed: <input name='statSpeed' type='number' min='1' step='1' value='" . $_SESSION['statSpeed'] . "']><br />
								</td>
							</tr>
							<tr>
								<td>
									Dodge: <input name='statDodge' type='number' min='1' step='1' value='" . $_SESSION['statDodge'] . "']><br />
								</td>
							</tr>
							<tr>
								<td>
									Accuracy: <input name='statAccuracy' type='number' min='1' step='1' value='" . $_SESSION['statAccuracy'] . "']><br />
								</td>
							</tr>
							<tr>
								<td>
									Luck: <input name='statLuck' type='number' min='1' step='1' value='" . $_SESSION['statLuck'] . "']><br />
								</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><input type='submit' name='Submit' value='Create'></td>
								</form>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			<a href='select_character.php'><input type='submit' value='Click here to select character to play'></a>";
			include '_assets/create_character.php';
	}
	else
	{
		
	}
?>