<?php
  $page_title="KSpread Screenshots";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
$gallery = new ImageGallery("KSpread Screenshots");
$gallery->addImage("pics/kspread3_sm.png", "pics/kspread3.png", "180", "160", "[Screenshot]", 0, "Simple spread sheet calculations (03/01)");
$gallery->startNewRow();
$gallery->addImage("pics/kspread2_sm.png", "pics/kspread2.png", "184", "190", "[Screenshot]", 0, "A table, the border dialog</a> (12/02)");
$gallery->addImage("pics/kspread_sm.png", "pics/kspread.png", "178", "140", "[Screenshot]", 0, "A table, an embedded chart, and an embedded picture (12/00)");
$gallery->show();
?>

<?php include("footer.inc"); ?>


