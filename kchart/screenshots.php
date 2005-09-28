<?php
  $page_title="KChart Screenshots";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
$gallery = new ImageGallery("KChart Screenshots");
$gallery->addImage("pics/bar3D_2005_09_270.png", "pics/bar3D_2005_09.png", "270", "207", "[Screenshot]", 0 , "A basic 3D bar chart");
$gallery->addImage("pics/polar_2005_09_270.png", "pics/polar_2005_09.png", "270", "201", "[Screenshot]", 0 , "A polar chart");
$gallery->show();
?>

<?php include("footer.inc"); ?>
