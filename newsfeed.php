<?php

include('config.php');


// this is the url of the rss feed that you want to display
$feed = $navigation['forum'] . '/external.php?type=rss2&forumids=2'; // News and announcements category

$xml = simplexml_load_file($feed);

if ($xml!='') {
	$count = 0;
	foreach ($xml->channel->item as $item) {
		if ($count > $NEWS_ARTICLES) {
			return;
		}
		$title = $item->title;
		$description = $item->description;
		$date = $item->pubDate;
		$link = $item->link;
		$user = $item->children('dc', true)->creator;
		$content = $item->children('content', true);

		if ($OLD_NEWS_ARTICLES) {
			echo '<h3><b>' . $title . '</b></h3>';
			echo '<p class="muted">Posted by ' . $user . ' - ' . $date . '</p>';
			echo '<div class="well">' . $content . '</div>';
		} else {

			echo '<div class="panel panel-default">';
			echo '<div class="panel-heading">';
			echo '<h3 class="panel-title"><a href="' . $link . '"><b>' . $title . '</b></a></h3> <small>Posted by ' . $user . ' - ' . $date . '</small>';
			echo '</div>';
			echo '<div class="panel-body">';
			echo $content;
			echo '</div>';
			echo '</div>';
		}
		$count++;
	}
}	
?>

