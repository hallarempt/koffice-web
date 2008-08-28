<?php
  $page_title="Krita Screenshots";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
$gallery = new ImageGallery("Krita Screenshots");
// $gallery->startNewRow(); should not be used before first image as it prevents validation

$gallery->addImage("pics/girl_by_enkhitan_sm.png", "pics/girl_by_enkhitan.png", "276", "200", "[Screenshot]", 0 , "Development version, August 2008. Painting by Enkhitan using the brush engine by Lukas Tvrdy");
$gallery->startNewRow();
$gallery->addImage("pics/krita_2_sm.png", "pics/krita_2.png", "276", "200", "[Screenshot]", 0 , "Development version, March 2008");
$gallery->addImage("pics/krita_1.6rc1_sm.png", "pics/krita_1.6rc1.png","264", "176",
                   "[Screenshot]", 0 , "New icon set for 1.6 (September 2006)");
$gallery->startNewRow();
$gallery->addImage("pics/july06_sm.png", "pics/july06.png","300", "211",
                   "[Screenshot]", 0 , "First alpha of 1.6 (July 2006)");
$gallery->addImage("pics/stroman_2005_09_330.png",
                       "pics/stroman_2005_09.png",
                       "330", "248",
                       "[Screenshot]", "",
                       "Krita (September 2005)");
$gallery->startNewRow();
$gallery->addImage("pics/hackathon_2005_08_262.png",
  "pics/hackathon_2005_08.png",
  "262", "200",
  "[Screenshot]", 0 ,
  "After the hackathon (August 2005)");
$gallery->addImage("pics/krita1.5rc1_sm.png", "pics/krita1.5rc1.png", "303", "200", "[Screenshot]", 0 , "Release candidate (March 2006)");
$gallery->startNewRow();
$gallery->addImage("pics/rc_sm.png", "pics/rc.png", "264", "200", "[Screenshot]", 0 , "Release candidate (April 2005)");
$gallery->addImage("pics/toolbox_sm.jpg", "pics/toolbox.jpg", "269", "200", "[Screenshot]", 0 , "Toolbox (March 2005)");
$gallery->startNewRow();
$gallery->addImage("pics/templates_sm.png", "pics/templates.png", "204", "176", "[Screenshot]", 0 , "Templates (September 2004)");
$gallery->addImage("pics/gradients_sm.png", "pics/gradients.png", "204", "176", "[Screenshot]", 0 , "Gradients (August 2004)");
$gallery->startNewRow();
$gallery->addImage("pics/krita_selection_sm.png", "pics/krita_selection.png", "252", "200", "[Screenshot]", 0 , "Selections (August 2004)");
$gallery->addImage("pics/krita-june_sm.png", "pics/krita-june.png", "257", "200", "[Screenshot]", 0 , "Krita (June 2004)");
$gallery->startNewRow();
$gallery->addImage("pics/may2004_sm.png", "pics/may2004.png", "204", "200", "[Screenshot]", 0 , "Krita (May 2004)");
$gallery->addImage("pics/konqi_krita_sm.png", "pics/konqi_krita.png", "204", "200", "[Screenshot]", 0 , "Krita (December 2003)");
$gallery->startNewRow();
$gallery->addImage("pics/kis_sm.png", "pics/kis.jpg", "204", "200", "[Screenshot]", 0 , "Krita (November 2003)");
$gallery->addImage("pics/kimageshopjc_sm.png", "pics/kimageshopjc.png", "204", "200", "[Screenshot]", 0 , "Krita (circa 2000)");
$gallery->startNewRow();
$gallery->addImage("pics/kimageshopbrush_sm_grab.jpg", "pics/kimageshopbrush_grab.jpg", "201", "215", "[Screenshot]", 0 , "Krita (circa 1999)");
$gallery->addImage("pics/kimageshop_sm.png", "pics/kimageshop.png", "246", "200", "[Screenshot]", 0 , "Krita (about 1999)");

$gallery->show();
?>

<?php
  include("footer.inc");
?>



