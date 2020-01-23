<?php

include('config.php');

if ($RELEASE) {
	$connect = mysqli_connect($HOST, $SQL_USER, $SQL_PASS, $SERVER_DB);
} else {
	$connect = mysqli_connect($LOCALHOST, $LOCAL_USER, $LOCAL_PASS, $SERVER_DB);
}		

if (mysqli_connect_errno())
{
	if (!$RELEASE) {
    	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	} else {
		echo 'SQL Error - Contact web administrator!';
	}
    //you need to exit the script, if there is an error
    exit();
}

mysqli_select_db($connect, $SERVER_DB);

$start_time = microtime(true); 

function nice_number($num) {
	return number_format($num);
}

function getHSLink($username) {
	return "<a href='http://www.nightleaf.org/highscores.php?lookup=" . $username . "'>" . $username . "</a>";
}

// Skill methods

function getTotal($con) {
	$query = "SELECT * FROM `relleka`.`relleka_highscores` ORDER BY `total_level` DESC LIMIT 50;";
	$result = mysqli_query($con, $query);
	$count = 0;
	echo '<center><h3>Overall Highscores</h3></center>';
	//echo '<div class="panel-heading"><h3 class="panel-title"><center><b>Overall Highscores</b></center></h3></div>';
	if ($result) {
		echo '<div class="bs-component">
			<table class="table table-striped table-hover ">
				<thead>
					<tr>
					<th>#</th>
					<th>Username</th>
					<th>Combat</th>
					<th>Total Level</th>
					<th>Experience</th>
			       	</tr>
			    </thead>';
		echo '<tbody>';
		while ($row = $result->fetch_assoc()) {
			$rank = $count + 1;
			$username = htmlspecialchars($row['username']);
			$level = htmlspecialchars($row['total_level']);
			$combat = htmlspecialchars($row['combat_level']);
			$experience = number_format($row['total_experience']);		
			echo '
				<tr>
					<td>' . $rank . '</td>
					<td>' . getHSLink($username) . '</td>
					<td>' . $combat . '</td>
					<td>' . $level . '</td>
					<td>' . $experience . '</td>
					</tr>';
			$count++;		       
		}
		echo '</tbody></table></div>';	
	}
}

function getSkillerTotal($con) {
	$query = "SELECT * FROM `relleka`.`relleka_highscores` WHERE combat_level = 3 ORDER BY `total_level` DESC LIMIT 50;";
	$result = mysqli_query($con, $query);
	$count = 0;
	echo '<center><h3>Skiller Highscores</h3></center>';
	//echo '<div class="panel-heading"><h3 class="panel-title"><center><b>Overall Highscores</b></center></h3></div>';
	if ($result) {
		echo '<div class="bs-component">
			<table class="table table-striped table-hover ">
				<thead>
					<tr>
					<th>#</th>
					<th>Username</th>
					<th>Combat</th>
					<th>Total Level</th>
					<th>Experience</th>
			       	</tr>
			    </thead>';
		echo '<tbody>';
		while ($row = $result->fetch_assoc()) {
			$rank = $count + 1;
			$username = htmlspecialchars($row['username']);
			$level = htmlspecialchars($row['total_level']);
			$combat = htmlspecialchars($row['combat_level']);
			$experience = number_format($row['total_experience']);		
			echo '
				<tr>
					<td>' . $rank . '</td>
					<td>' . getHSLink($username) . '</td>
					<td>' . $combat . '</td>
					<td>' . $level . '</td>
					<td>' . $experience . '</td>
					</tr>';
			$count++;		       
		}
		echo '</tbody></table></div>';	
	}
}

function getHS($con, $var) {
	$query = "SELECT * FROM `relleka`.`relleka_highscores` ORDER BY `" . $var . "_experience` DESC LIMIT 50;";
	$result = mysqli_query($con, $query);
	$count = 0;
	echo '<center><h3>' . ucfirst($var) . ' Highscores</h3></center>';
	//echo '<div class="panel-heading"><h3 class="panel-title"><center><b>Overall Highscores</b></center></h3></div>';
	if ($result) {
		echo '<div class="bs-component">
			<table class="table table-striped table-hover ">
				<thead>
					<tr>
					<th>#</th>
					<th>Username</th>
					<th>Combat</th>
					<th>Level</th>
					<th>Experience</th>
			       	</tr>
			    </thead>';
		echo '<tbody>';
		while ($row = $result->fetch_assoc()) {
			$rank = $count + 1;
			$username = htmlspecialchars($row['username']);
			$level = htmlspecialchars($row[$var . '_level']);
			$combat = htmlspecialchars($row['combat_level']);
			$experience = number_format($row[$var . '_experience']);		
			echo '
				<tr>
					<td>' . $rank . '</td>
					<td>' . getHSLink($username) . '</td>
					<td>' . $combat . '</td>
					<td>' . $level . '</td>
					<td>' . $experience . '</td>
					</tr>';
			$count++;		       
		}
		echo '</tbody></table></div>';	
	}
}


// END of skill methods



$self = $_SERVER['PHP_SELF'];
?>
<!DOCTYPE html>
	<form method="get" action="self">
		<input type="hidden" name="skill">
		<input type="hidden" name="action">
		<input type="hidden" name="lookup">
	</form>

<?php

// Set the defaults for the input.
if (!isset($_GET['skill'])) {
	$_GET['skill'] = 'overall';
}
if (!isset($_GET['action'])) {
	$_GET['action'] = '';
}
if (!isset($_GET['lookup'])) {
	$_GET['lookup'] = '';
}

$skill = htmlspecialchars($_GET['skill']);
$action = htmlspecialchars($_GET['action']);
$lookup = htmlspecialchars($_GET['lookup']);
?>

<html lang="en">
	<head>
		<title>Relleka.net - The ultimate quality RuneScape private server</title>
		<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">-->
	    <link rel="stylesheet" href="css/bootstrap.css" media="screen">
	    <link rel="stylesheet" href="css/bootswatch.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<!-- LOGO -->
		<a href="<?php echo $navigation['home']; ?>"><center><img src="img/logo/banner_transparent2.png"></center></a>

		<!-- NAVBAR -->
		<?php
		include('navbar.php');
		?>

		<!-- WARNING -->
		<?php
		if ($SHOW_WARNING) {
		?>
		<center>
              <div class="alert alert-dismissable alert-warning">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <h4>Warning!</h4>
                <p><?php echo $WARNING_MESSAGE; ?></p>
              </div>	
   		</center>  
   		<?php
   		}
   		?>

		<div class="container">
		    <div class="row">
		    	<div class ="col-lg-12">
				    <div class="col-lg-3">
				    	<?php
				    	include('modules/topplayers.php');
				    	?>
				    </div>
				    <div class="col-lg-6">

						<div class="panel panel-default">
							<div class="panel-body">
								<!-- PAGE CONTENT -->
								<?php
								if (!$lookup) {
									if ($skill == 'overall') {
										getTotal($connect);
						            } else if ($skill == 'skiller' || $skill == 'skillers') {
										getSkillerTotal($connect);
						            } else if ($skill == 'attack') {
						            	getHS($connect, "attack");
						            } else if ($skill == 'defence') {
										getHS($connect, "defence");
									} else if ($skill == 'strength') {
										getHS($connect, "strength");
									} else if ($skill == 'hitpoints') {
										getHS($connect, "hitpoints");
									} else if ($skill == 'prayer') {
										getHS($connect, "prayer");
									} else if ($skill == 'magic') {
										getHS($connect, "magic");
									} else if ($skill == 'ranged') {
										getHS($connect, "range");
									} else if ($skill == 'cooking') {
										getHS($connect, "cooking");
									} else if ($skill == 'woodcutting') {
										getHS($connect, "woodcutting");
									} else if ($skill == 'fletching') {
										getHS($connect, "fletching");
									} else if ($skill == 'fishing') {
										getHS($connect, "fishing");
									} else if ($skill == 'firemaking') {
										getHS($connect, "firemaking");
									} else if ($skill == 'crafting') {
										getHS($connect, 'crafting');
									} else if ($skill == 'mining') {
										getHS($connect, "mining");
									} else if ($skill == 'smithing') {
										getHS($connect, "smithing");
									} else if ($skill == 'herblore') {
										getHS($connect, "herblore");
									} else if ($skill == 'thieving') {
										getHS($connect, "thieving");
									} else if ($skill == 'slayer') {
										getHS($connect, "slayer");
									} else if ($skill == 'runecrafting') {
										getHS($connect, "runecrafting");
									}
					        	} else {
					        		$username = $lookup;
					        	}
					            ?>
							</div>
						</div>


				    </div>
				    <div class="col-lg-3">
				    	<?php 

				    	include('modules/status.php');
				    	include('modules/recentthreads.php');
				    	?>
				    </div>
				</div>
		    </div>
		</div>
	
		<!-- FOOTER -->
		<?php
		include('footer.php');
		
		?>
		
		<!-- JAVASCRIPT -->
	 	<script src="http://code.jquery.com/jquery.js"></script>
		<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>

<center>
<?php echo( 'Page was generated in ' . number_format(microtime(true) - $start_time, 2)); ?> seconds.
</center>

</html>