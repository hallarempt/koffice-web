<?php
  $page_title="KOffice API Reference";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
    /* NOTE: the directory apidocs and kofficeapidocs.tar.bz2 are not in the CVS;
      they are generated directly for the Web server koffice.org. */

    $flag = file_exists( "./kofficeapidocs.tar.bz2" );
?>
   <p>A programmers API Reference is available. It is generated from the KOffice source code, using Doxygen. It can either be read online here, or read offline by downloading the tarball.</p>
   <h2>Download the tarball</h2>
   <ul>
     <li>
<?php
    if ( $flag )
    { 
        echo "<a href=\"kofficeapidocs.tar.bz2\">Download the tarball</a>";
        niceFileSize("./kofficeapidocs.tar.bz2");
        echo gmdate (" (Y-m-d H:i)", filemtime("./kofficeapidocs.tar.bz2"));
    }
    else
    {
        echo "<a href=\"http://www.koffice.org/developer/kofficeapidocs.tar.bz2\">Download the tarball</a>";
    }
?>
     </li>
   </ul>
   <h2>Read online</h2>
    <ul>
      <li>
<?php
    if ( %flag )
    { 
        echo "<a href=\"apidocs\">Index</a>";
    }
    else
    {
        echo "<a href=\"http://www.koffice.org/developer/apidocs\">Index</a>";
    }
?>
      </li>
    </ul>

<?php
   include("footer.inc");
?>
