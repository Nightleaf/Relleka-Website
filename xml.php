<?php
// ######################################################
// ## configuration
 // ##
 // ## $rss2_file= 'http://www.vbulletin.com/forum/external.php?type=rss2';
 // ## Adjust this variable to point to your RSS2 feed
  
 $rss2_file = 'http://www.relleka.net/external.php?type=rss2';
     
 // ## configuration end
 // ######################################################
 // ## Do not touch code below!
     
     
 $is_item = false;
 $tag = '';
 $title = '';
 $description = '';
 $link = '';
 $date = '';
 $author = '';
     
 function character_data($parser, $data)
 {
     global $is_item, $tag, $title, $description, $link, $date, $author;
     if ($is_item)
     {
         switch ($tag)
         {
             case "TITLE":
             $title .= $data;
             break;
     
             case "DESCRIPTION":
             $description .= $data;
             break;
     
             case "LINK":
             $link .= $data;
             break;
     
             case "PUBDATE":
             $date .= $data;
             break;
     
             case "AUTHOR":
             $author .= $data;
             break;
         }
     }
 }
     
 function begin_element($parser, $name)
 {
     global $is_item, $tag;
     if ($is_item)
     {
         $tag = $name;
     }
     else if ($name == "ITEM")
     {
         $is_item = true;
     }
 }

  function end_element($parser, $name)
 {
     global $is_item, $title, $description, $link, $date, $author, $rss2_output;
     if ($name == "ITEM")
     {
         $rss2_output .= "<dt><strong><a href='" . trim($link) . "'>" . htmlspecialchars(trim($title)) . "</a></strong> - " . htmlspecialchars(trim($date)) . " by <em>" . htmlspecialchars(trim($author)) . "</em></dt><dd>" . trim($description) . "</dd>";
         $title = "";
         $description = "";
         $link = "";
         $date = "";
         $author = "";
         $is_item = false;
     }
 }
     
 function end_element2($parser, $name)
 {
     global $is_item, $title, $description, $link, $date, $author, $rss2_output;
     if ($name == "ITEM")
     {
         $rss2_output .= "<dt><strong><a href='" . trim($link) . "'>" . htmlspecialchars(trim($title)) . "</a></strong> - " . htmlspecialchars(trim($date)) . " by <em>" . htmlspecialchars(trim($author)) . "</em></dt><dd>" . htmlspecialchars(trim($description)) . "</dd>";
         $title = "";
         $description = "";
         $link = "";
         $date = "";
         $author = "";
         $is_item = false;
     }
 }
     
     
 $parser = xml_parser_create();
     
 xml_set_element_handler($parser, "begin_element", "end_element");
 xml_set_character_data_handler($parser, "character_data");
 $fp = fopen($rss2_file,"r");
     
 while ($data = fread($fp, 4096))
 {
     xml_parse($parser, $data, feof($fp));        
 }
     
 fclose($fp);
 xml_parser_free($parser);

 echo $rss2_output;

?>