<?php
  // Header
  $page_title="KOffice Developer News";
  $site_root="../";
  include("koffice.inc");
  include("header.inc");

  // Document
  include("./rss2.inc");
  kde_general_news_rss2("./news.rdf", 25, false);
   
  // Footer
  include("footer.inc");
 ?>

