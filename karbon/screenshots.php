<?php
  $page_title="Karbon14 Screenshots";
  $site_root='../';
  include("header.inc");
?>

<?php
$gallery = new ImageGallery("Karbon14 Screenshots");
$gallery->addImage("pics/basicgradsthumb.png", "pics/basicgrads.png", "211", "202", "[Screenshot]", 0 , "Some gradients");
$gallery->addImage("pics/insert_knotsthumb.png", "pics/insert_knots.png", "203", "200", "[Screenshot]", 0 , "Insertion of extra nodes while keeping the overall shape of the path");
$gallery->startNewRow();
$gallery->addImage("pics/epsimport.png", "pics/epsimport.png", "266", "255", "[Screenshot]", 0 , "An imported EPS files");
$gallery->show();
?>

<p>More screenshots can be found at <a href="http://www.xs4all.nl/~rwlbuis/karbon/">this</a> site.</p>

<?php include("footer.inc"); ?>

