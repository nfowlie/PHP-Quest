<?php
	if($_SESSION['statExperience'] >= 100 && $_SESSION['statLevel'] == 1)
	{
		$_SESSION['statLevel'] += 1; echo "Level Up!<br /><a href='level_up_form.php'><input type='submit' value='Click here to allot skill points!'></a>";
	}
	elseif($_SESSION['statExperience'] >= 200 && $_SESSION['statLevel'] == 2)
	{
		$_SESSION['statLevel'] += 1; echo "Level Up!<br /><a href='level_up_form.php'><input type='submit' value='Click here to allot skill points!'></a>";
	}
	elseif($_SESSION['statExperience'] >= 400 && $_SESSION['statLevel'] == 3)
	{
		$_SESSION['statLevel'] += 1; echo "Level Up!<br /><a href='level_up_form.php'><input type='submit' value='Click here to allot skill points!'></a>";
	}
	elseif($_SESSION['statExperience'] >= 700 && $_SESSION['statLevel'] == 4)
	{
		$_SESSION['statLevel'] += 1; echo "Level Up!<br /><a href='level_up_form.php'><input type='submit' value='Click here to allot skill points!'></a>";
	}
	elseif($_SESSION['statExperience'] >= 1100 && $_SESSION['statLevel'] == 5)
	{
		$_SESSION['statLevel'] += 1; echo "Level Up!<br /><a href='level_up_form.php'><input type='submit' value='Click here to allot skill points!'></a>";
	}
	elseif($_SESSION['statExperience'] >= 1500 && $_SESSION['statLevel'] == 6)
	{
		$_SESSION['statLevel'] += 1; echo "Level Up!<br /><a href='level_up_form.php'><input type='submit' value='Click here to allot skill points!'></a>";
	}
	elseif($_SESSION['statExperience'] >= 2000 && $_SESSION['statLevel'] == 7)
	{
		$_SESSION['statLevel'] += 1; echo "Level Up!<br /><a href='level_up_form.php'><input type='submit' value='Click here to allot skill points!'></a>";
	}
	elseif($_SESSION['statExperience'] >= 2700 && $_SESSION['statLevel'] == 8)
	{
		$_SESSION['statLevel'] += 1; echo "Level Up!<br /><a href='level_up_form.php'><input type='submit' value='Click here to allot skill points!'></a>";
	}
	elseif($_SESSION['statExperience'] >= 3500 && $_SESSION['statLevel'] == 9)
	{
		$_SESSION['statLevel'] += 1; echo "Level Up!<br /><a href='level_up_form.php'><input type='submit' value='Click here to allot skill points!'></a>";
	}
	elseif($_SESSION['statExperience'] >= 5000 && $_SESSION['statLevel'] == 10)
	{
		$_SESSION['statLevel'] += 1; echo "Level Up!<br /><a href='level_up_form.php'><input type='submit' value='Click here to allot skill points!'></a>";
	}
	else
	{
		echo "";
	}
?>