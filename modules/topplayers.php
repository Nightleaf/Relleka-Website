<?php  
include('./config.php');

if ($RELEASE) {
	$mysqli = mysqli_connect($HOST, $SQL_USER, $SQL_PASS, $SERVER_DB);
} else {
	$mysqli = mysqli_connect($LOCALHOST, $LOCAL_USER, $LOCAL_PASS, $SERVER_DB);
}

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    //you need to exit the script, if there is an error
    exit();
}
mysqli_select_db($mysqli, $SERVER_DB);


function getLink($username) {
	//return "<a href='http://www.relleka.net/highscores.php?lookup=" . $username . "'><font color='cyan'>" . $username . "</a></font>";
	return "<a href='#'><font color='cyan'>" . $username . "</a></font>";
}

function getTopTotal($con) {
	$mains_query = "SELECT * FROM `relleka`.`relleka_highscores` ORDER BY `total_level` DESC LIMIT 1;";

	$result = mysqli_query($con, $mains_query);

	if ($result) {
		while ($row = $result->fetch_assoc()) {
			$username = htmlspecialchars($row['username']);
			$level = htmlspecialchars($row['total_level']);
			echo getLink($username) . " (" . $level . ")";	
		}
	}	
}

function getSkillerTopTotal($con) {
	$skiller_query = "SELECT * FROM `relleka`.`relleka_highscores` WHERE combat_level = 3 ORDER BY `total_level` DESC LIMIT 1;";

	$result = mysqli_query($con, $skiller_query);

	if ($result) {
		while ($row = $result->fetch_assoc()) {
			$username = htmlspecialchars($row['username']);
			$level = htmlspecialchars($row['total_level']);
			echo getLink($username) . " (" . $level . ")";
		}
	}	
}

function getTopAttack($con) {
	$mains_query = "SELECT * FROM `relleka`.`relleka_highscores` ORDER BY `attack_experience` DESC LIMIT 1;";

	$result = mysqli_query($con, $mains_query);

	if ($result) {
		while ($row = $result->fetch_assoc()) {
			$username = htmlspecialchars($row['username']);
			$level = htmlspecialchars($row['attack_level']);
			echo getLink($username) . " (" . $level . ")";
		}
	}	
}

function getTopDefence($con) {
	$mains_query = "SELECT * FROM `relleka`.`relleka_highscores` ORDER BY `defence_experience` DESC LIMIT 1;";

	$result = mysqli_query($con, $mains_query);

	if ($result) {
		while ($row = $result->fetch_assoc()) {
			$username = htmlspecialchars($row['username']);
			$level = htmlspecialchars($row['defence_level']);
			echo getLink($username) . " (" . $level . ")";
		}
	}	
}

function getTopStrength($con) {
	$mains_query = "SELECT * FROM `relleka`.`relleka_highscores` ORDER BY `strength_experience` DESC LIMIT 1;";

	$result = mysqli_query($con, $mains_query);

	if ($result) {
		while ($row = $result->fetch_assoc()) {
			$username = htmlspecialchars($row['username']);
			$level = htmlspecialchars($row['strength_level']);
			echo getLink($username) . " (" . $level . ")";
		}
	}	
}

function getTopHitpoints($con) {
	$mains_query = "SELECT * FROM `relleka`.`relleka_highscores` ORDER BY `hitpoints_experience` DESC LIMIT 1;";

	$result = mysqli_query($con, $mains_query);

	if ($result) {
		while ($row = $result->fetch_assoc()) {
			$username = htmlspecialchars($row['username']);
			$level = htmlspecialchars($row['hitpoints_level']);
			echo getLink($username) . " (" . $level . ")";
		}
	}	
}

function getTopPrayer($con) {
	$mains_query = "SELECT * FROM `relleka`.`relleka_highscores` ORDER BY `prayer_experience` DESC LIMIT 1;";

	$result = mysqli_query($con, $mains_query);

	if ($result) {
		while ($row = $result->fetch_assoc()) {
			$username = htmlspecialchars($row['username']);
			$level = htmlspecialchars($row['prayer_level']);
			echo getLink($username) . " (" . $level . ")";
		}
	}	
}

function getTopMagic($con) {
	$mains_query = "SELECT * FROM `relleka`.`relleka_highscores` ORDER BY `magic_experience` DESC LIMIT 1;";

	$result = mysqli_query($con, $mains_query);

	if ($result) {
		while ($row = $result->fetch_assoc()) {
			$username = htmlspecialchars($row['username']);
			$level = htmlspecialchars($row['magic_level']);
			echo getLink($username) . " (" . $level . ")";
		}
	}	
}

function getTopRanged($con) {
	$mains_query = "SELECT * FROM `relleka`.`relleka_highscores` ORDER BY `range_experience` DESC LIMIT 1;";

	$result = mysqli_query($con, $mains_query);

	if ($result) {
		while ($row = $result->fetch_assoc()) {
			$username = htmlspecialchars($row['username']);
			$level = htmlspecialchars($row['range_level']);
			echo getLink($username) . " (" . $level . ")";
		}
	}	
}

function getTopCooking($con) {
	$mains_query = "SELECT * FROM `relleka`.`relleka_highscores` ORDER BY `cooking_experience` DESC LIMIT 1;";

	$result = mysqli_query($con, $mains_query);

	if ($result) {
		while ($row = $result->fetch_assoc()) {
			$username = htmlspecialchars($row['username']);
			$level = htmlspecialchars($row['cooking_level']);
			echo getLink($username) . " (" . $level . ")";
		}
	}	
}

function getTopWoodcutting($con) {
	$mains_query = "SELECT * FROM `relleka`.`relleka_highscores` ORDER BY `woodcutting_experience` DESC LIMIT 1;";

	$result = mysqli_query($con, $mains_query);

	if ($result) {
		while ($row = $result->fetch_assoc()) {
			$username = htmlspecialchars($row['username']);
			$level = htmlspecialchars($row['woodcutting_level']);
			echo getLink($username) . " (" . $level . ")";
		}
	}	
}

function getTopFletching($con) {
	$mains_query = "SELECT * FROM `relleka`.`relleka_highscores` ORDER BY `fletching_experience` DESC LIMIT 1;";

	$result = mysqli_query($con, $mains_query);

	if ($result) {
		while ($row = $result->fetch_assoc()) {
			$username = htmlspecialchars($row['username']);
			$level = htmlspecialchars($row['fletching_level']);
			echo getLink($username) . " (" . $level . ")";
		}
	}	
}

function getTopFishing($con) {
	$mains_query = "SELECT * FROM `relleka`.`relleka_highscores` ORDER BY `fishing_experience` DESC LIMIT 1;";

	$result = mysqli_query($con, $mains_query);

	if ($result) {
		while ($row = $result->fetch_assoc()) {
			$username = htmlspecialchars($row['username']);
			$level = htmlspecialchars($row['fishing_level']);
			echo getLink($username) . " (" . $level . ")";
		}
	}	
}

function getTopFiremaking($con) {
	$mains_query = "SELECT * FROM `relleka`.`relleka_highscores` ORDER BY `firemaking_experience` DESC LIMIT 1;";

	$result = mysqli_query($con, $mains_query);

	if ($result) {
		while ($row = $result->fetch_assoc()) {
			$username = htmlspecialchars($row['username']);
			$level = htmlspecialchars($row['firemaking_level']);
			echo getLink($username) . " (" . $level . ")";
		}
	}	
}

function getTopCrafting($con) {
	$mains_query = "SELECT * FROM `relleka`.`relleka_highscores` ORDER BY `crafting_experience` DESC LIMIT 1;";

	$result = mysqli_query($con, $mains_query);

	if ($result) {
		while ($row = $result->fetch_assoc()) {
			$username = htmlspecialchars($row['username']);
			$level = htmlspecialchars($row['crafting_level']);
			echo getLink($username) . " (" . $level . ")";
		}
	}	
}

function getTopMining($con) {
	$mains_query = "SELECT * FROM `relleka`.`relleka_highscores` ORDER BY `mining_experience` DESC LIMIT 1;";

	$result = mysqli_query($con, $mains_query);

	if ($result) {
		while ($row = $result->fetch_assoc()) {
			$username = htmlspecialchars($row['username']);
			$level = htmlspecialchars($row['mining_level']);
			echo getLink($username) . " (" . $level . ")";
		}
	}	
}

function getTopSmithing($con) {
	$mains_query = "SELECT * FROM `relleka`.`relleka_highscores` ORDER BY `smithing_experience` DESC LIMIT 1;";

	$result = mysqli_query($con, $mains_query);

	if ($result) {
		while ($row = $result->fetch_assoc()) {
			$username = htmlspecialchars($row['username']);
			$level = htmlspecialchars($row['smithing_level']);
			echo getLink($username) . " (" . $level . ")";
		}
	}	
}

function getTopHerblore($con) {
	$mains_query = "SELECT * FROM `relleka`.`relleka_highscores` ORDER BY `herblore_experience` DESC LIMIT 1;";

	$result = mysqli_query($con, $mains_query);

	if ($result) {
		while ($row = $result->fetch_assoc()) {
			$username = htmlspecialchars($row['username']);
			$level = htmlspecialchars($row['herblore_level']);
			echo getLink($username) . " (" . $level . ")";
		}
	}	
}

function getTopThieving($con) {
	$mains_query = "SELECT * FROM `relleka`.`relleka_highscores` ORDER BY `thieving_experience` DESC LIMIT 1;";

	$result = mysqli_query($con, $mains_query);

	if ($result) {
		while ($row = $result->fetch_assoc()) {
			$username = htmlspecialchars($row['username']);
			$level = htmlspecialchars($row['thieving_level']);
			echo getLink($username) . " (" . $level . ")";
		}
	}	
}
function getTopSlayer($con) {
	$mains_query = "SELECT * FROM `relleka`.`relleka_highscores` ORDER BY `slayer_experience` DESC LIMIT 1;";

	$result = mysqli_query($con, $mains_query);

	if ($result) {
		while ($row = $result->fetch_assoc()) {
			$username = htmlspecialchars($row['username']);
			$level = htmlspecialchars($row['slayer_level']);
			echo getLink($username) . " (" . $level . ")";
		}
	}	
}

function getTopRunecrafting($con) {
	$mains_query = "SELECT * FROM `relleka`.`relleka_highscores` ORDER BY `runecrafting_experience` DESC LIMIT 1;";

	$result = mysqli_query($con, $mains_query);

	if ($result) {
		while ($row = $result->fetch_assoc()) {
			$username = htmlspecialchars($row['username']);
			$level = htmlspecialchars($row['runecrafting_level']);
			echo getLink($username) . " (" . $level . ")";
		}
	}	
}
?>
<div class="panel panel-default">
<div class="panel-heading">	
<h3 class="panel-title"><center><b>Top players</b></center></h3>
</div>
<div class="panel-body">
<img src="./img/hs/skill_icon_total.gif"> [Mains] <a href="highscores.php?skill=overall">Total</a>: <?php getTopTotal($mysqli); ?>
<br/>
<img src="./img/hs/skill_icon_total.gif"> [Skillers] <a href="highscores.php?skill=skillers">Total</a>: <?php getSkillerTopTotal($mysqli); ?>
<br/>
<img src="./img/hs/skill_icon_attack.gif"> <a href="highscores.php?skill=attack">[Attack]</a>: <?php getTopAttack($mysqli); ?>
<br/>
<img src="./img/hs/skill_icon_defence.gif"> <a href="highscores.php?skill=defence">[Defence]</a>: <?php getTopDefence($mysqli); ?> 
<br/>
<img src="./img/hs/skill_icon_strength.gif"> <a href="highscores.php?skill=strength">[Strength]</a>: <?php getTopStrength($mysqli); ?> 
<br/>
<img src="./img/hs/skill_icon_hitpoints.gif"> <a href="highscores.php?skill=hitpoints">[Hitpoints]</a>: <?php getTopHitpoints($mysqli); ?>
<br/>
<img src="./img/hs/skill_icon_prayer.gif"> <a href="highscores.php?skill=prayer">[Prayer]</a>: <?php getTopPrayer($mysqli); ?>
<br/>
<img src="./img/hs/skill_icon_magic.gif"> <a href="highscores.php?skill=magic">[Magic]</a>: <?php getTopMagic($mysqli); ?>
<br/>
<img src="./img/hs/skill_icon_ranged.gif"> <a href="highscores.php?skill=ranged">[Ranged]</a>: <?php getTopRanged($mysqli); ?>
<br/>
<img src="./img/hs/skill_icon_cooking.gif"> <a href="highscores.php?skill=cooking">[Cooking]</a>: <?php getTopCooking($mysqli); ?>
<br/>
<img src="./img/hs/skill_icon_woodcutting.gif"> <a href="highscores.php?skill=woodcutting">[Woodcutting]</a>: <?php getTopWoodcutting($mysqli); ?>
<br/>
<img src="./img/hs/skill_icon_fletching.gif"> <a href="highscores.php?skill=fletching">[Fletching]</a>: <?php getTopFletching($mysqli); ?>
<br/>
<img src="./img/hs/skill_icon_fishing.gif"> <a href="highscores.php?skill=fishing">[Fishing]</a>: <?php getTopFishing($mysqli); ?>
<br/>
<img src="./img/hs/skill_icon_firemaking.gif"> <a href="highscores.php?skill=firemaking">[Firemaking]</a>: <?php getTopFiremaking($mysqli); ?>
<br/>
<img src="./img/hs/skill_icon_crafting.gif"> <a href="highscores.php?skill=crafting">[Crafting]</a>: <?php getTopCrafting($mysqli); ?>
<br/>
<img src="./img/hs/skill_icon_mining.gif"> <a href="highscores.php?skill=mining">[Mining]</a>: <?php getTopMining($mysqli); ?>
<br/>
<img src="./img/hs/skill_icon_smithing.gif"> <a href="highscores.php?skill=smithing">[Smithing]</a>: <?php getTopSmithing($mysqli); ?>
<br/>
<img src="./img/hs/skill_icon_herblore.gif"> <a href="highscores.php?skill=herblore">[Herblore]</a>: <?php getTopHerblore($mysqli); ?>
<br/>
<img src="./img/hs/skill_icon_thieving.gif"> <a href="highscores.php?skill=thieving">[Thieving]</a>: <?php getTopThieving($mysqli); ?>
<br/>
<img src="./img/hs/skill_icon_slayer.gif"> <a href="highscores.php?skill=slayer">[Slayer]</a>: <?php getTopSlayer($mysqli); ?>
<br/>
<img src="./img/hs/skill_icon_runecrafting.gif"> <a href="highscores.php?skill=runecrafting">[Runecrafting]</a>: <?php getTopRunecrafting($mysqli); ?>
<br/>
</center>
</div>
</div>
<?php
mysqli_close($mysqli);
?>