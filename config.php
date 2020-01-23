<?php

//	/	/	/	/	/	/	/	/	/	/	/	/	/	/	/	//
//																//
//						   Optimization					    	//
//																//
//	/	/	/	/	/	/	/	/	/	/	/	/	/	/	/	//


// Turns off some of the features that slow down page load time.
$OPIMIZATION_MODE = false;

//	/	/	/	/	/	/	/	/	/	/	/	/	/	/	/	//
//																//
//						SQL Configuration					    //
//																//
//	/	/	/	/	/	/	/	/	/	/	/	/	/	/	/	//

$RELEASE = true;
$LOCALHOST = "127.0.0.1";
$LOCAL_USER = "root";
$LOCAL_PASS = "";

$HOST = "127.0.0.1";
$SQL_USER = "root";
$SQL_PASS = "";
$SERVER_DB = "relleka";

//	/	/	/	/	/	/	/	/	/	/	/	/	/	/	/	//
//																//
//						General Configuration					//
//																//
//	/	/	/	/	/	/	/	/	/	/	/	/	/	/	/	//

// This is used in the navigation bar.
$PROJECT_NAME = "Relleka";

// This is used in the title of the browser window.
$PROJECT_TITLE = "Nightleaf.org - The ultimate quality RuneScape private server";

// This is the number of news articles to display on the index page.
$NEWS_ARTICLES = 3;

// This will display the news using the well class in css.
$OLD_NEWS_ARTICLES = false;

// This controls the display of a warning on the index page.
$SHOW_WARNING = false;

// This is the warning message that will display on the index page.
$WARNING_MESSAGE = "This website is currently under development, certain portions of the site may be broken or incomplete.";

//	/	/	/	/	/	/	/	/	/	/	/	/	/	/	/	//
//																//
//						Navigation Configuration				//
//																//
//	/	/	/	/	/	/	/	/	/	/	/	/	/	/	/	//

$BASE_URL = "http://nightleaf.org/";

$navigation = array(
	"home" => $BASE_URL, 
	"forum" => $BASE_URL . "forum", 
	"highscores" => $BASE_URL . "highscores.php", 
	"vote" => $BASE_URL . "vote",
	"rules" => $BASE_URL . "rules.php",
	"webclient" => $BASE_URL . "play.php",
	"premium" => $BASE_URL . "benefits.php",
	"download" => $BASE_URL . "download"
);

$OLD_NAVIGATION_BAR = true;

//	/	/	/	/	/	/	/	/	/	/	/	/	/	/	/	//
//																//
//					Welcome Module Configuration				//
//																//
//	/	/	/	/	/	/	/	/	/	/	/	/	/	/	/	//

// This controls whether or not bonus experience is active.
$BONUS_EXPERIENCE = false;

// This the date that the bonus experience event will end.
$BONUS_EVENT_END = "January 3rd, 2015";

// This will control the display of the player's online module.
$SHOW_PLAYER_COUNT = false;

// This is the threshold of how many players should be online before displaying it on the site.
$PLAYER_COUNT_THRESHHOLD = 10;

// The amount of players online.
$PLAYERS_ONLINE = 0;

// Minutes of uptime.
$MINUTES = 0;

// Hours of uptime.
$HOURS = 0;

// Days of uptime.
$DAYS = 0;


//	/	/	/	/	/	/	/	/	/	/	/	/	/	/	/	//
//																//
//					Status Module Configuration					//
//																//
//	/	/	/	/	/	/	/	/	/	/	/	/	/	/	/	//

// This will control the display of the status module
$SHOW_UPTIME = true;

// This message will show if the server is offline.
$SERVER_OFFLINE_MESSAGE = $PROJECT_NAME . ' is <b><font color="red">OFFLINE</font></b>.';


//	/	/	/	/	/	/	/	/	/	/	/	/	/	/	/	//
//																//
//					Highscores Page Configuration				//
//																//
//	/	/	/	/	/	/	/	/	/	/	/	/	/	/	/	//


// This controls how many entries are shown for highscores.
$HIGHSCORE_LISTING = 100;


// Load site info -- Don't edit the below portion
if (!$OPIMIZATION_MODE) {
	if ($SHOW_UPTIME) {
		if ($RELEASE) {
			$mysqli = mysqli_connect($HOST, $SQL_USER, $SQL_PASS, $SERVER_DB);
		} else {
			$mysqli = mysqli_connect($LOCALHOST, $LOCAL_USER, $LOCAL_PASS, $SERVER_DB);
		}
		if (mysqli_connect_errno())
		{
			if (!$RELEASE) {
		    	echo "Failed to connect to MySQL: " . mysqli_connect_error();
			} else {
				echo "SQL ERROR - Contact webmaster/admin!";
			}
		    //you need to exit the script, if there is an error
		    exit();
		}
		mysqli_select_db($mysqli, $SERVER_DB);

		$query = "SELECT * FROM `relleka`.`relleka_world`;";
		$result = mysqli_query($mysqli, $query);
		if ($result) {
			while ($row = $result->fetch_assoc()) {
				$PLAYERS_ONLINE = htmlspecialchars($row['players_online']);
				$MINUTES = htmlspecialchars($row['minutes']); 
				$HOURS = htmlspecialchars($row['hours']); 
				$DAYS = htmlspecialchars($row['days']); 
				$SECONDS = htmlspecialchars($row['seconds']); 
			}
		}
	}
}
?>