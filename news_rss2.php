<?php
/*
 * Converts a typical KDE RDF into a RSS 2 that can be validated
 *
 * Part of the code comes from other KDE PHP functions proecessing RDF/RSS feeds:
 * media/include/functions.inc
 * media/include/rss2.inc
 * media/include/classes/class_rdf.inc
 *
 * Note: in the current state, the code is more tailored for the KOffice News.
 * It might not work out of the box for other KDE news feeds
 *
 * Note 2: the dates need to be RFC 2822 conform, this is done by the "r" format of the gmdate function
 *
 * Parameters:
 * $rdf_file: name of the RDF file that is to be transformed to RSS 2
 * $refered_news_file: full URL of a HTML page where the news are displayed
 * $base_site: base site URL for relative links
 *
 */
function kde_rdf_to_valid_rss2 ( $rdf_file, $refered_news_file, $base_site )
{
    $file = @fopen( $rdf_file, "r" );

    if ($file) {
        // ### TODO: support more than 32MB ( rss 2.0 has not any limit )
        $rf = fread( $file, 32000 );
        fclose( $file );

        // Process header
        $pos = strpos( $rf, "<item>" ); // The header is before the first item
        // ### TODO: test if $pos === FALSE
        $header = substr( $rf, 0, $pos );
        
        ereg( "<title>(.*)</title>", $header, $title );
        ereg( "<link>(.*)</link>", $header, $link );
        ereg( "<description>(.*)</description>", $header, $description );
        ereg( "<language>(.*)</language>", $header, $language );
        ereg( "<webMaster>(.*)</webMaster>", $header, $webmaster );
        ereg( "<copyright>(.*)</copyright>", $header, $copyright );

        // Write RSS 2 header
        print( "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n" );
        print( "<rss version=\"2.0\">\n" );
        print( " <channel>\n" );
        print( "  <title>" . $title[1] . "</title>\n" );
        print( "  <link>" . $link[1] . "</link>\n" );
        print( "  <description>" . $description[1] . "</description>\n" );
        print( "  <language>" . $language[1] . "</language>\n" );
        print( "  <webMaster>" . $webmaster[1] . "</webMaster>\n" );
        print( "  <copyright>" . $copyright[1] . "</copyright>\n" );
        print( "  <docs>http://blogs.law.harvard.edu/tech/rss</docs>\n" );
        print( "  <ttl>120</ttl>\n" );
        print( "  <lastBuildDate>" . gmdate( "r", filemtime("./news.rdf") ) ."</lastBuildDate>\n" );

        // Process and write items
        eregi( "<item>(.*)</item>", $rf, $printing );
        $rdf_pieces = explode( "<item>", $printing[0] );
        $rdf_items = count( $rdf_pieces );

        for ( $x=1; $x<=$rdf_items; $x++ )
        {
            // Process one item
            ereg( "<title>(.*)</title>", $rdf_pieces[$x], $title );
            ereg( "<date>(.*)</date>", $rdf_pieces[$x], $date );
            ereg( "<fullstory>(.*)</fullstory>", $rdf_pieces[$x], $fullstory );

            // We need to escape the XML/HTML characters referenced in the <fullstory>
            $description = $fullstory[1];
            $description = ereg_replace( "&", "&amp;", $description );
            $description = ereg_replace( "<", "&lt;", $description );
            $description = ereg_replace( ">", "&gt;", $description );
            $description = ereg_replace( "href=\"/", "href=&quot;". $base_site . "/", $description );
            $description = ereg_replace( "\"", "&quot;", $description );

            // Process date (e.g.: "29th April, 2005")
            // The function strtotime cannot handle the "th" and the comma, so have find day, month and year
            $result = ereg( "([0-9]+)[a-zA-Z]* +([a-zA-Z]+).+ +([0-9]+)", $date[1], $datepiece );
            if ($result == FALSE)
            {
                // try a different regexp MonthName NumberDay, Year
                $result = ereg( "([a-zA-Z]+) +([0-9]+)[a-zA-Z]*.+ +([0-9]+)", $date[1], $datepiece );
            }
            $newdate = $datepiece[1] . " " . $datepiece[2] . " " . $datepiece[3] . " UTC";
            // Nevertheless we use strtotime to avoid to have a month name table
            $pubdate = strtotime( $newdate );

            // Create link (the reference to a HTML file where the news can be read)
            $link = $refered_news_file . "#item" . ereg_replace("[^a-zA-Z0-9]", "", $title[1]);

            // Write one item
            print( "\n" );
            print( "   <item>\n" );
            print( "    <title>" . $title[1] . "</title>\n" );
            print( "    <link>" . $link . "</link>\n" );
            print( "    <pubDate>" . gmdate( "r", $pubdate ) . "</pubDate>\n" );
            print( "    <description>" . $description . "</description>\n" );
            print( "   </item>\n" );
        }


        
        // Write RSS 2 footer
        print( "\n" );
        print( " </channel>\n" );
        print( "</rss>\n" );
    }
}

header( "Content-Type: application/rss+xml" );
kde_rdf_to_valid_rss2( "news.rdf", "http://www.koffice.org/news.php", "http://www.koffice.org" );

?>
