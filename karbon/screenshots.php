<?php
  $page_title="Karbon14 Screenshots";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
$gallery = new ImageGallery("Karbon14 Screenshots");
$gallery->addImage("pics/basicgradsthumb.png", "pics/basicgrads.png", "211", "202", "[Screenshot]", 0 , "Some gradients");
$gallery->addImage("pics/insert_knotsthumb.png", "pics/insert_knots.png", "203", "200", "[Screenshot]", 0 , "Insertion of extra nodes while keeping the overall shape of the path");
$gallery->startNewRow();
$gallery->addImage("pics/karbon_sm.png", "pics/karbon.png", "270", "190", "[Screenshot]", 0 , "An imported SVG file");
$gallery->addImage("pics/epsimport.png", "pics/epsimport.png", "266", "255", "[Screenshot]", 0 , "An imported EPS file");
$gallery->show();
?>

<p>More screenshots can be <a href="http://www.xs4all.nl/~rwlbuis/karbon/">found at this site</a>.</p>

<?php include("footer.inc"); ?>

