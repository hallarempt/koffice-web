<?php
  $page_title="KChart Screenshots";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
$gallery = new ImageGallery("KChart Screenshots");
$gallery->addImage("pics/kdiagramm_sm.png", "pics/kdiagramm.png", "190", "139", "[Screenshot]", 0 , "Some pie charts");
$gallery->addImage("pics/kchart_sm.png", "pics/kchart.png", "194", "159", "[Screenshot]", 0 , "A basic bar chart");
$gallery->show();
?>

<?php include("footer.inc"); ?>
