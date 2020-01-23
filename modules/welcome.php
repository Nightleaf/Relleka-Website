<?php
// Disable errors from showing.
ini_set('display_errors', '0');

include('./config.php');

?>

<div class="panel panel-default">
<div class="panel-heading">	
<h3 class="panel-title"><center><b>Welcome to <?php echo $PROJECT_NAME; ?>!</b></center></h3>
</div>
<div class="panel-body">
<center>
<?php
if ($BONUS_EXPERIENCE) {
?>
Bonus Experience is active until <b><?php echo $BONUS_EVENT_END; ?></b>!
<?php
}

if ($SHOW_PLAYER_COUNT)  {
?>
There are currently 
<?php 
if ($PLAYERS_ONLINE >= $PLAYER_COUNT_THRESHHOLD) {
	echo $PLAYERS_ONLINE . ' '; 
}
?>players playing!
<?php
}
?>
<p class="text-info">
Relleka is running on build 185.
</p>
</center>
</div>
</div>