<?php
  $page_title="KOffice Developer Resources";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>
   <p>This section provides links and useful information and resources for developers that are intending to work on KOffice.</p>
   
   <h2>KOffice API Reference</h2>
   A programmers API Reference is available. It is generated three times a week from the KOffice source code, using KDoc. It can either be read online here, or read offline by downloading the tarball.</p>
   <h3>Download the tarball</h3>
   <ul>
   <li><a href="kofficeapidocs.tar.bz2">Download the tarball</a> <?php niceFileSize("./kofficeapidocs.tar.bz2"); ?></li>
   </ul>
   <h3>Read online</h3>
    <ul>
    <li><a href="apidocs">Index</a></li>
    </ul>
   <h2>Miscellaneous Links</h2>
   <ul>
   <li><a href="http://webcvs.kde.org/cgi-bin/cvsweb.cgi/~checkout~/koffice/filters/kword/libexport/DESIGN.html?content-type=text/html#import">KWord libexport mini-HOWTO</a></li>
   </ul>

<?php
   include("footer.inc");
?>
