<?php
// Disable errors from showing.
ini_set('display_errors', '0');

require('./config.php');


// Pings the server letting us know if the server is online or offline.
function ping()
{
	$fsock = fsockopen($HOST, 43594, $errNo, $errStr, 5);
	if ( ! $fsock )
	{
		return FALSE;
	}
	else
	{
		return TRUE;
	}
}
?>

<div class="panel panel-default">
<div class="panel-heading">	
<h3 class="panel-title"><center><b>Status</b></center></h3>
</div>
<div class="panel-body">
<center>

<?php

echo $PROJECT_NAME . ' is <b><font color="green">ONLINE!</font></b>';
echo '<p><small>' . $DAYS . ' days, ' . $HOURS . ' hours, ' . $MINUTES . ' minutes.</small></p>';

?>
</center>
</div>
</div>