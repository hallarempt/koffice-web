<?php
  $page_title="KOffice API Reference";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>
    <!-- NOTE: the directory apidocs and kofficeapidocs.tar.bz2 are not in the CVS;
      they are generated directly for the Web server. -->
   A programmers API Reference is available. It is generated from the KOffice source code, using Doxygen. It can either be read online here, or read offline by downloading the tarball.</p>
   <h2>Download the tarball</h2>
   <ul>
   <li><a href="kofficeapidocs.tar.bz2">Download the tarball</a>
     <?php
       niceFileSize("./kofficeapidocs.tar.bz2");
       echo date (" (Y-m-d)", filemtime("./kofficeapidocs.tar.bz2"));
     ?>
   </li>
   </ul>
   <h2>Read online</h2>
    <ul>
    <li><a href="apidocs">Index</a></li>
    </ul>

<?php
   include("footer.inc");
?>
