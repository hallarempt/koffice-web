<?php
  $page_title="KOffice News";
  $site_root="./";
  include("koffice.inc");
  include("header.inc");
?>

<?php
        kde_general_news("./news.rdf", 25, false);
?>

<?php include("footer.inc"); ?>

