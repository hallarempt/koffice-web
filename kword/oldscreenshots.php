<?php
  $page_title='KWord Screenshots';
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<p>These are screenshots from versions before KWord 1.3.</p>

<?php
$gallery = new ImageGallery("KWord Screenshots");
$gallery->addImage("pics/kword-arabic_sm.png", "pics/kword-arabic.png", "191", "145", "[Screenshot]", 0 , "KWord 1.2 can be used for bi-directional texts like Arabic (05/02)");
$gallery->startNewRow();
$gallery->addImage("pics/kword14_sm.png", "pics/kword14.png", "180", "258", "[Screenshot]", 0 , "KWord 1.1 showing many features including sophisticated text editing and clipart images (11/01)");
$gallery->addImage("pics/kword15_sm.png", "pics/kword15.png", "180", "159", "[Screenshot]", 0 , "KWord showing off the new anti-aliased fonts (11/01)");
$gallery->startNewRow();
$gallery->addImage("pics/kword16_sm.png", "pics/kword16.png", "190", "165", "[Screenshot]", 0 , "KWord 1.1 taking full advantage of KDE 2's innovations such as themes and crisp font rendering (11/01)");
$gallery->addImage("pics/kword13_sm.png", "pics/kword13.png", "180", "160", "[Screenshot]", 0 , "Many templates are provided to help you get started (11/01)");
$gallery->startNewRow();
$gallery->addImage("pics/kword11_sm.png", "pics/kword11.png", "190", "165", "[Screenshot]", 0 , "No new features are shown here though there are new ones like automatica table of contents generation, serial letters, custom variables, and a few more (11/99)");
$gallery->addImage("pics/kword12_sm.png", "pics/kword12.png", "180", "160", "[Screenshot]", 0 , "KWord 1.0 running under KDE 2.1(03/01)");
$gallery->startNewRow();
$gallery->addImage("pics/kword10_sm.png", "pics/kword10.png", "183", "186", "[Screenshot]", 0 , "Improved frames and simple DTP (08/99)");
$gallery->addImage("pics/kword9_sm.png", "pics/kword9.png", "141", "205", "[Screenshot]", 0 , "KDE themeability, template dialog, end notes and auto-correction (05/99)");
$gallery->startNewRow();
$gallery->addImage("pics/kword8_sm.png", "pics/kword8.png", "212", "190", "[Screenshot]", 0 , "Qt 2.0, improved tables, frame backgrounds, variable insertion, and visible document structure (03/99)");
$gallery->addImage("pics/kword7_sm.png", "pics/kword7.png", "135", "190", "[Screenshot]", 0 , "Headers, footers, and tables (01/99)");
$gallery->startNewRow();
$gallery->addImage("pics/kword6_sm.png", "pics/kword6.png", "136", "198", "[Screenshot]", 0 , "Tabulators, visible formatting characters, and embedding other KOffice parts (12/98)");
$gallery->addImage("pics/kword5_sm.png", "pics/kword5.png", "135", "197", "[Screenshot]", 0 , "Style templates, lists, and headers (11/98");
$gallery->startNewRow();
$gallery->addImage("pics/kword4_sm.png", "pics/kword4.png", "137", "200", "[Screenshot]", 0 , "Improved frames (11/98)");
$gallery->addImage("pics/kword3_sm.png", "pics/kword3.png", "130", "196", "[Screenshot]", 0 , "Frame orientation");
$gallery->startNewRow();
$gallery->addImage("pics/kword2_sm.png", "pics/kword2.png", "136", "173", "[Screenshot]", 0 , "Superscript, subscripts, and paragraph borders (10/98)");
$gallery->addImage("pics/kword1_sm.png", "pics/kword1.png", "132", "171", "[Screenshot]", 0 , "Basic paragraph flow and picture insertion (10/98)");
$gallery->startNewRow();
$gallery->show();
?>

<?php include("footer.inc"); ?>



