<?php
  // Header
  $page_title="KOffice Developer News";
  $site_root="../";
  include("koffice.inc");
  include("header.inc");

  // Document
  kde_general_news("./news.rdf", 25, false);
   
  // Footer
  include("footer.inc");
 ?>

