<?php
  $page_title="KChart Screenshots";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
$gallery = new ImageGallery("KChart Screenshots");
$gallery->addImage("pics/kdiagramm_sm.png", "pics/kdiagramm.png", "190", "139", "[Screenshot]", 0 , "Some pie charts");
$gallery->addImage("pics/bar3D_2005_09_270.png", "pics/bar3D_2005_09.png", "270", "207", "[Screenshot]", 0 , "A basic 3D bar chart");
$gallery->show();
?>

<?php include("footer.inc"); ?>
