<?php

include('config.php');

$start_time = microtime(true);
$cookie_name = 'hu_register_notified';
$cookie_value = 'true';


if(!isset($_COOKIE[$cookie_name])) {
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
}

 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Relleka.net - The ultimate quality RuneScape private server</title>
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
				    	<center>
				    		<?php

							if(!isset($_COOKIE[$cookie_name])) {
							    
							?>
				    		<div class="alert alert-info" role="alert">
				    			<b>Heads up!</b>  In order to play Relleka, you need to be registered to our forum!  To do so please visit <a href="<?php echo $navigation['forum'];?>register.php">Register page</a>.
				    		</div>
				    		<?php							
							}
				    		?>
					    	<applet code='Client' archive="./applet/relleka_client_signed.jar" width="765" height="503">
					    	</applet>

					    	<p>
					    		Alternatively you can download the client <a href="<?php echo $BASE_URL; ?>/download">HERE</a>.
					    	</p>
				    	</center>
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