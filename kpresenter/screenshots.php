<?php
  $page_title="KPresenter Screenshots";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
$gallery = new ImageGallery("KPresenter Screenshots");
$gallery->addImage("pics/kpresenter9_sm.png", "pics/kpresenter9.png", "200", "150", "[Screenshot]", 0 , "HTML export wizard; internationalization (here the Czech language is shown)");
$gallery->startNewRow();
$gallery->addImage("pics/kpresenter8_sm.png", "pics/kpresenter8.png", "190", "157", "[Screenshot]", 0 , "New KParts framework, embedded KChart and kwin");
$gallery->addImage("pics/kpresenter7_sm.png", "pics/kpresenter7.png", "199", "166", "[Screenshot]", 0 , "Balanced and unbalanced gradients");
$gallery->startNewRow();
$gallery->addImage("pics/kpresenter6_sm.png", "pics/kpresenter6.png", "160", "178", "[Screenshot]", 0 , "Assign effects and structure dialogs");
$gallery->addImage("pics/kpresenter5_sm.png", "pics/kpresenter5.png", "203", "174", "[Screenshot]", 0 , "Headers and footers");
$gallery->startNewRow();
$gallery->addImage("pics/kpresenter4_sm.png", "pics/kpresenter4.png", "202", "167", "[Screenshot]", 0 , "New effects");
$gallery->addImage("pics/kpresenter3_sm.png", "pics/kpresenter3.png", "191", "173", "[Screenshot]", 0 , "An embedded chart and rotated text");
$gallery->startNewRow();
$gallery->addImage("pics/kpresenter2_sm.png", "pics/kpresenter2.png", "208", "175", "[Screenshot]", 0 , "Presentation structure viewer");
$gallery->addImage("pics/kpresenter1_sm.png", "pics/kpresenter1.png", "189", "169", "[Screenshot]", 0 , "Basic shot");
$gallery->show();
?>

<?php
  include("footer.inc");
?>


