<?php
  $page_title="KOffice Developer Resources";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>
   <p>This section provides useful links, information and resources for developers that are intending to work on KOffice.</p>

   <h2>Resources</h2>
   
   <ul>
     <li><a href="generalinfo">General developer information</a></li>
     <li><a href="fileformat">Information about KOffice's file formats</a></li>
     <li><a href="filters">Developing filters</a></li>
     <li><a href="apidocmain.php">KOffice API reference</a></li>
     <li><a href="website.php">How to develop for KOffice's web site</a></li>
   </ul>

   <h2>Applications</h2>

   <ul>
     <li><a href="krita">Krita</a></li>
   </ul>

   <h2>External Sites About KOffice</h2>
   
   <ul>
     <li><a href="http://www.kexi-project.org/">Kexi Project</a></li>
   </ul>

<?php
 kde_general_news("./news.rdf", 5, true);
?>

<?php
   include("footer.inc");
?>
