<?php
  $page_title='Kivio Screenshots';
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
$gallery = new ImageGallery("KWord Screenshots");
$gallery->addImage("pics/kivio_basic_s.png", "pics/kivio_basic.png", "200", "141", "[Screenshot]", 0 , "Kivio with the Basic Flowcharting shapes loaded");
$gallery->addImage("pics/kivio-cvs20030706_s.png", "pics/kivio-cvs20030706.png", "200", "141", "[Screenshot]", 0 , "Kivio with the new hardware stencils");
$gallery->show();
?>

<?php include("footer.inc"); ?>
