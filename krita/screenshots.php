<?php
  $page_title="Krita Screenshots";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
$gallery = new ImageGallery("Krita Screenshots");
$gallery->addImage("pics/may2004_sm.png", "pics/may2004.png", "204", "200", "[Screenshot]", 0 , "Krita (May 2004)");
$gallery->addImage("pics/konqi_krita_sm.png", "pics/konqi_krita.png", "204", "200", "[Screenshot]", 0 , "Krita (December 2003)");
$gallery->addImage("pics/kis_sm.png", "pics/kis.jpg", "204", "200", "[Screenshot]", 0 , "Krita (November 2003)");
$gallery->addImage("pics/kimageschop_sm.png", "pics/kimageshop.png", "204", "200", "[Screenshot]", 0 , "Krita (circa 2000)");

$gallery->show();
?>

<?php
  include("footer.inc");
?>



