<?php
  $page_title='KWord Screenshots';
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
$gallery = new ImageGallery("KWord Screenshots");
$gallery->addImage("pics/kword_pt_cnc_sm.png", "pics/kword_pt_cnc.png", "180", "137", "[Screenshot KWord 1.3 Brazilian]", 0 , "KWord 1.3 in Brazilian Portuguese");
$gallery->addImage("pics/kword_classic_picture_sm.png", "pics/kword_classic_picture.png", "150", "106", "[Screenshot KWord 1.3 Classic Look, with Picture]", 0 , "KWord 1.3 in classic look with picture");
$gallery->addImage("pics/kword-arabic_sm.png", "pics/kword-arabic.png", "191", "145", "[Screenshot KWord 1.2 Arabic]", 0 , "KWord 1.2 can be used for bi-directional texts like Arabic (05/02)");
$gallery->startNewRow();
$gallery->show();
?>

<p>See also <a href="oldscreenshots.php">the old screenshots</a>.</p>

<?php include("footer.inc"); ?>



