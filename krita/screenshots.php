<?php
  $page_title="Krita Screenshots";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
$gallery = new ImageGallery("Krita Screenshots");
$gallery->addImage("pics/krita_selection_sm.png", "pics/kritas_selection.png", "252", "200", "[Screenshot]", 0 , "Krita (August 2004)");
$gallery->addImage("pics/krita-june_sm.png", "pics/krita-june.png", "257", "200", "[Screenshot]", 0 , "Krita (June 2004)");
$gallery->startNewRow(); 
$gallery->addImage("pics/may2004_sm.png", "pics/may2004.png", "204", "200", "[Screenshot]", 0 , "Krita (May 2004)");
$gallery->addImage("pics/konqi_krita_sm.png", "pics/konqi_krita.png", "204", "200", "[Screenshot]", 0 , "Krita (December 2003)");
$gallery->startNewRow(); 
$gallery->addImage("pics/kis_sm.png", "pics/kis.jpg", "204", "200", "[Screenshot]", 0 , "Krita (November 2003)");
$gallery->addImage("pics/kimageshopjc_sm.png", "pics/kimageshopjc.png", "204", "200", "[Screenshot]", 0 , "Krita (circa 2000)");

$gallery->show();
?>

<?php
  include("footer.inc");
?>



