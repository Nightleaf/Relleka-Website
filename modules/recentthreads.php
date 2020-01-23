<?php

include('config.php');


// this is the url of the rss feed that you want to display
$feed = $navigation['forum'] . '/external.php?type=rss2'; // News and announcements category

$xml = simplexml_load_file($feed);

?>
<div class="panel panel-default">
<div class="panel-heading">	
<h3 class="panel-title"><center><b>Recent threads</b></center></h3>
</div>
<div class="panel-body">
<?php

$count = 0;

if ($xml!='') {
	
	foreach ($xml->channel->item as $item) {
		if ($count > 5) {
			return;
		}
		$title = $item->title;
		$description = $item->description;
		$date = $item->pubDate;
		$link = $item->link;
		$user = $item->children('dc', true)->creator;
		$content = $item->children('content', true);

		echo '<span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span> <a href="' . $link . '"><b>' . $title . '</b></a>';
		echo '<p>';
		echo '<small>Posted by ' . $user . ' - ' .$date . '</small>';
		echo '</p>';
		
		$count++;
	}
}	
?>


</div>
</div>