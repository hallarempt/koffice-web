<?php

// Copyright (C) 2004 Nicolas GOUTTE: goutte at kde dot org

// Original copyright of functions.inc
/*
 * Filename: 	functions.php
 * Description: supplies functions for the KDE Homepage.
 * Functions: 	printNews(items)
 * Author: 	Sebastian Faubel
 * Modified by: Jason Bainbridge and Chris Howells
 * Comments: Added some caching code for the rdf generation.
 * NB. Those functions should be merged together at sometime
 *     for the sake of cleaner code
 *	   + the html needs to be cleaned up
 */


// Function for news RDF file, when RDF file is a validable RSS2 file.

function kde_general_news_rss2 ($file, $items, $summaryonly)
{
  global $site_locale;
  startTranslation($site_locale);

  print "<h2><a name=\"news\">" . i18n_var("Latest News") . "</a></h2>\n";

  $news = new RDF();
  $rdf_pieces = $news->openRDF($file);

  if(!$items)
  {
     $items = 5; // default
  }
  $rdf_items = count($rdf_pieces);
  if ($rdf_items > $items)
  {
     $rdf_items = $items;
  }

  //only open the file if it has something in it
  if ($rdf_items > 0)
  {
    /* Don't display the last story twice
    * if there is less than the requested number of stories
    * in the RDF file */
    if ($rdf_items < $items)
    {
      $rdf_items = $rdf_items - 1;
    }

    $alternate = false;
    print "<table width=\"100%;\" cellpadding=\"6\">\n";

    for($x=1;$x<=$rdf_items;$x++)
    {
      $alternate = !$alternate;
      if ($alternate)
      {
        $color = "newsbox1";
      }
      else
      {
        $color = "newsbox2";
      }
      ereg("<title>(.*)</title>", $rdf_pieces[$x], $title);
      ereg("<pubDate>(.*)</pubDate>", $rdf_pieces[$x], $date);
      ereg("<description>(.*)</description>", $rdf_pieces[$x], $description);
      print "<tr>\n";

      if ($summaryonly)
      {
        print "<td class=\"$color\">$date[1]  - " . " <a href=\"news.php#" . ereg_replace("[^a-zA-Z]", "", $title[1]) . "\">$title[1]</a></td>\n";
      }
      else
      {
        print "<td class=\"$color\"><p><a name=\"" . ereg_replace("[^a-zA-Z]", "", $title[1]) . "\">" . "<b>$title[1]</b></a></p>\n";
        // We need to unescape the XML/HTML character references in the <description>
        $desc = $description[1];
        $desc = ereg_replace("&lt;","<", $desc);
        $desc = ereg_replace("&gt;",">", $desc);
        $desc = ereg_replace("&amp;","&", $desc);
        print "$date[1] - $desc</td>\n";
      }
      print "</tr>\n";
    }
    print "</table>\n";
  }
}

?>