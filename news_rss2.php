<?php
/*
 * Converts a typical KDE RDF into a RSS 2 that can be validated
 *
 * Note: the dates need to be RFC 2822 conform, this is done by the "r" format of the gmdate function
 */
function kde_rdf_to_valid_rss2 ( $rdf_file )
{
    global $site_locale;
    startTranslation( $site_locale );

    $file = @fopen( $rdf_file, "r" );

    if ($file) {
        // read 32K, it should be enough to get the header
        $rf = fread( $file, 32000 ); // ### TODO: support more than 32MB ( rss 2.0 has not any limit )
        fclose( $file );

        // Process header
        eregi( "<channel>(.*)<item>", $rf, $header );
        eregi( "<title>(.*)</title>", $header[1], $title );
        eregi( "<link>(.*)</link>", $header[1], $link );
        eregi( "<description>(.*)</description>", $header[1], $description );
        eregi( "<language>(.*)</language>", $header[1], $language );
        eregi( "<webMaster>(.*)</webMaster>", $header[1], $webmaster );
        eregi( "<copyright>(.*)</copyright>", $header[1], $copyright );

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
        print( "  <lastBuildDate>" . gmdate( "r", filemtime("./news.rdf") ) ."</lastBuildDate>\n" ); // ### TODO

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

            // Process date (e.g.: "29th April, 2005")
            // The function strtotime cannot handle the "th" and the comma, so have find day, month and year
            ereg( "([0-9]+)[a-zA-Z]+ +([a-zA-Z]+).+ +([0-9]+)", $date[1], $datepieces );
            // Nevertheless we use strtotime to avoid to have a month name table
            $pubdate = strtotime( $datepiece[1] . " " . $datepiece[2] . " " . $datepiece[3] . " UTC");

            // Write one item
            print( "   <item>\n" );
            print( "    <title>" . $title[1] . "</title>\n" );
            print( "    <pubDate>" . gmdate( "r", $pubdate ) . "</pubDate>\n" ); // ### TODO
            print( "    <description>" . $description[1] . "</description>\n" );
            print( "   </item>\n" );
        }


        
        // Write RSS 2 footer
        print( " </channel>\n" );
        print( "</rss>\n" );
    }
}

header( "Content-Type: application/rss+xml" );
kde_rdf_to_valid_rss2( "news.rdf" );

?>