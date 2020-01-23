<?php

include('config.php');


?>
<?php $start_time = microtime(true); ?>
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

						<div class="panel panel-default">
							<div class="panel-body">
					
							<!-- Rules -->
							<?php
								include('modules/rules.php');
								?>
							</div>
						</div>



				    </div>
				    <div class="col-lg-3">
				    	<?php 

				    	include('modules/status.php');
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