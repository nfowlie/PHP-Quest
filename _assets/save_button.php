<?php
	if($_SESSION['characterName'])
	{
		echo "<form method='post' name='save' action='_assets/save.php'>
			<input type='submit' value='save' align='right'>";
		echo "</form>";
	}
?>