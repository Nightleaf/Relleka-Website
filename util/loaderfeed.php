<?php

// this is the url of the rss feed that you want to display
$feed = $navigation['forum'] . 'external.php?type=rss2&forumids=2'; // News and announcements category

$xml = simplexml_load_file($feed);

if ($xml!='') {
	$count = 0;
	foreach ($xml->channel->item as $item) {
		if ($count > 3) {
			return;
		}
		$title = $item->title;
		$description = $item->description;
		$date = $item->pubDate;
		$link = $item->link;
		$user = $item->children('dc', true)->creator;
		$content = $item->children('content', true);

			echo '<h3><a href="' . $link . '"><b>' . $title . '</b></a></h3> <small>Posted by ' . $user . ' - ' . $date . '</small>';
			echo $content;
		
		$count++;
	}
}	
?>

