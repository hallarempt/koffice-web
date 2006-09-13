<?php
  $page_title="Krita Videos";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
$gallery = new ImageGallery("Krita Videos");
// $gallery->startNewRow(); should not be used before first image as it prevents validation
$gallery->addImage("videos/krita_perspectivecloning_sm.png",
                   "videos/krita_perspectivecloning.mpeg","272", "205",
                   "[Screenshot]", 0 , "Perspective Cloning (1.6 Beta, September 2006)");

$gallery->addImage("videos/krita_perspectivetransformtool_sm.png",
                   "videos/krita_perspectivetransformtool.mpeg","272", "204",
                   "[Screenshot]", 0 , "Perspective Transform tool (1.6 Beta, September 2006)");

$gallery->startNewRow();
$gallery->addImage("videos/krita_rc1_sm.png",
                   "videos/krita_rc1.avi","273", "183",
                   "[Screenshot]", 0 , "General Preview (Pre-1.5, June 2005)");
$gallery->addImage("videos/krita_preview2_sm.png",
                   "videos/krita_preview2.mpeg","271", "215",
                   "[Screenshot]", 0 , "General Preview (Pre-1.4, September 2004)");
$gallery->startNewRow();

$gallery->addImage("videos/krita_preview1_sm.png",
                   "videos/krita_preview1.mpeg","272", "233",
                   "[Screenshot]", 0 , "General Preview (Pre-1.4, August 2004)");

$gallery->show();
?>

<?php
  include("footer.inc");
?>


