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
   <li><a href="kofficeapidoc.tar.bz2">Download the tarball</a> (<?php
       $file_size = filesize("/home/groups/k/ko/koffice/htdocs/developer/kofficeapidoc.tar.bz2");
       $file_size = round($file_size / 1024)  . "K";
       echo "$file_size"; ?>)</li>
   </ul>
   <h3>Read online</h3>
   <ul>
    <li><a href="lib/store/">lib/store</a></li>
    <li><a href="lib/kofficeui/">lib/kofficeui</a></li>
    <li><a href="lib/kwmf/">lib/kwmf</a></li>
    <li><a href="lib/kofficecore/">lib/kofficecore</a></li>
    <li><a href="lib/kscript/">lib/kscript</a></li>
    <li><a href="lib/koscript/">lib/koscript</a></li>
    <li><a href="lib/kformula/">lib/kformula</a></li>
    <li><a href="lib/kotext/">lib/kotext</a></li>
    <li><a href="kword/">kword</a></li>
    <li><a href="kpresenter/">kpresenter</a></li>
    <li><a href="kpresenter/autoformEdit/">kpresenter/autoformEdit</a></li>
    <li><a href="kspread/">kspread</a></li>
    <li><a href="krita/ui/">krita/ui</a></li>
    <li><a href="krita/core/">krita/core</a></li>
    <li><a href="krita/tools/">krita/tools</a></li>
    <li><a href="kivio/kiviopart/">kivio/kiviopart</a></li>
    <li><a href="kchart/">kchart</a></li>
    <li><a href="kchart/kdchart/">kchart/kdchart</a></li>
    <li><a href="kugar/shell/">kugar/shell</a></li>
    <li><a href="kugar/lib/">kugar/lib</a></li>
    <li><a href="kugar/part/">kugar/part</a></li>
    <li><a href="kformula/">kformula</a></li>
    <li><a href="kplato/">kplato</a></li>
    <li><a href="plugins/scan/">plugins/scan</a></li>
   </ul>

   <h2>Miscellaneous Links</h2>
   <ul>
   <li><a href="http://webcvs.kde.org/cgi-bin/cvsweb.cgi/~checkout~/koffice/filters/kword/libexport/DESIGN.html?content-type=text/html#import">KWord libexport mini-HOWTO</a></li>
   </ul>

<?php
   include("footer.inc");
?>
