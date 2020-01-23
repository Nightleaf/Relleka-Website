<?php

include('config.php');

 $start_time = microtime(true);

$cookie_name = 'play_relleka';
$cookie_value = 'plays';

if(!isset($_COOKIE[$cookie_name])) {
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    header('Location: landing.php');
}

 // 86400 = 1 day

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
		    <div class="row">
		    	<div class ="col-lg-12">
				    <div class="col-lg-3">
				    	<?php
				    	include('modules/topplayers.php');
				    	?>
				    </div>
				    <div class="col-lg-6">

				    	<!-- WELCOME MODULE -->
				    	<?php
				    	include('modules/welcome.php');
				    	?>

						<!-- NEWS FEED -->
						<?php
						include('newsfeed.php');
						?>

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