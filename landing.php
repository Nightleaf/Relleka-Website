<?php

include('config.php');

$start_time = microtime(true);


?>
<!DOCTYPE html>
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
             <div class="alert alert-info" role="alert">
             <b>Warning!</b>
             <p><?php echo $WARNING_MESSAGE; ?></p>
             </div> 
   		</center>  
   		<?php
   		}
   		?>

		<div class="container">

            <p class="bs-component">
              <a href="<?php echo $BASE_URL; ?>" class="btn btn-default btn-lg btn-block">Continue on to Relleka.net!</a>
            </p>
			<div class="panel panel-default">
			<div class="panel-heading">	
			<h3 class="panel-title"><center><b>Welcome to <?php echo $PROJECT_NAME; ?>!</b></center></h3>
			</div>
			<div class="panel-body">
			<div class="container container-custom">
				<div class="col-sm-12 col-sm-12 text-center padding-sm">
					<h2>
						Ultimate - Unique - Hardcore<br>
						<small>A legend is born.</small>
						<br><br>
					</h2>
					<div class="col-sm-3 col-sm-3 display-box">
						<div class="icon-box"><i class="glyphicon glyphicon-flash"></i></div>
						<h3>RELIABLE</h3><div class="divide" style="background-color:#333;"></div>
						<p>Constant uptime, we never are offline!  Optimized website and servers for reliable connection/load times.</p>
					</div>
					<div class="col-sm-3 col-sm-3 display-box">
						<div class="icon-box"><i class="glyphicon glyphicon-leaf"></i></div>
						<h3>PERFECT ECO</h3><div class="divide" style="background-color:#333;"></div>
						<p>Unique drop table system similiar to RuneScape, richest player has less than 15 million in OVER 3 months!</p>
					</div>
					<div class="col-sm-3 col-sm-3 display-box">
						<div class="icon-box"><i class="glyphicon glyphicon-stats"></i></div>
						<h3>QUALITY SKILLS</h3><div class="divide" style="background-color:#333;"></div>
						<p>High quality skilling content with new updates and changes frequently!</p>
					</div>
					<div class="col-sm-3 col-sm-3 display-box">
						<div class="icon-box"><i class="glyphicon glyphicon-list"></i></div>
						<h3>COMPETITIVE</h3><div class="divide" style="background-color:#333;"></div>
						<p>Compare and Compete with other players around the globe on our own unique highscores system.</p>
					</div>
				</div>

				<!-- IMAGES -->
				<center>
				<div class="row">
				  <div class="col-xs-4 col-md-3">
				    <a href="#" class="thumbnail">
				      <img src="http://i.imgur.com/Nnb6Try.png" alt="Delrith">
				    </a>
				  </div>
				  <div class="col-xs-4 col-md-3">
				    <a href="#" class="thumbnail">
				      <img src="http://i.imgur.com/37Cf5D5.png" alt="Barrows Minigame">
				    </a>
				  </div>
				  <div class="col-xs-4 col-md-2">	
				    <a href="#" class="thumbnail">
				      <img src="http://i.imgur.com/J1bw4AN.png" alt="Barrows Minigame">
				    </a>	
				  </div>
				  <div class="col-xs-4 col-md-2">	
				    <a href="#" class="thumbnail">
				      <img src="http://i.imgur.com/uq7stnK.png" alt="Nezikchened">
				    </a>	
				  </div>

				</div>		
				</center>
				<h3>Experience Rates</h3>
				<b>Combat: </b> 33 x RuneScape
				<p/>
				<b>Non-combat: </b> 17 x RuneScape
				<p/>
				<h3>Bonus Experience Events</h3>
				<p>
					Relleka supports and runs Bonus Experience events that will increase experience rates temporarily.
					<p/>
					Normally bonus experience events run during holidays or special events relative to Relleka.
					<p/>
					<b>Premium Boost: </b> <font color="green">+30%</font>
					<p/>
					<b>Normal Boost: </b> <font color="yellow">+15%</font>
				</p>

				<div class="col-sm-12 col-sm-12 text-center padding-sm">
					<a class="btn btn-custom btn-lg" href="<?php echo $navigation['forum'];?>/register.php">Register Now!</a>
					<a class="btn btn-custom btn-lg" href="<?php echo $navigation['webclient'];?>">Play Now!</a>
				</div>
			</div>
		</div>
	</div>

		</div>
		<br/>
	
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