<?php
  $page_title="KOffice Developer Resources";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>
   <p>This section provides useful links, information and resources for developers that are intending to work on KOffice.</p>

   <h2>General Resources</h2>
      
   <ul>
     <li><a href="generalinfo">General developer information</a></li>
     <li><a href="apidocmain.php"><strong>KOffice API reference</strong></a></li>
     <li><a href="constructive">Constructive Critics</a></li>
   </ul>

   <h2>Specific Resources</h2>
   
   <ul>
     <li><a href="fileformat">Information about KOffice's file formats</a> (also useful for filters)</li>
     <li><a href="filters">Developing filters</a></li>
   </ul>
   
   <h2>Applications</h2>

   <ul>
     <li><a href="krita">Krita</a></li>
   </ul>
   
   <h2>KOffice.org For KOffice.org</h2>
   
   <ul>
     <li><a href="website">How to develop for KOffice's web site</a></li>
   </ul>

   <h2>External Sites About KOffice</h2>
   
   <ul>
     <li><a href="http://www.kexi-project.org/">Kexi Project</a></li>
   </ul>

<?php
 include("./rss2.inc");
 kde_general_news_rss2("./news.rdf", 5, true);
?>

<?php
   include("footer.inc");
?>
