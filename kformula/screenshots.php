<?php
  $title="KFormula Screenshots";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
$gallery = new ImageGallery("KFormula Screenshots");
$gallery->addImage("pics/kformula1_sm.png", "pics/kformula1.png", "220", "181", "[Screenshot]", 0 , "KFormula at work");
$gallery->addImage("pics/kformula2_sm.png", "pics/kformula2.png", "220", "133", "[Screenshot]", 0 , "The famous formula string dialog");
$gallery->show();
?>

<?php include("footer.inc"); ?>


