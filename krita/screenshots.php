<?php
  $page_title="Krita Screenshots";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
$gallery = new ImageGallery("KWord Screenshots");
$gallery->addImage("pics/kis_sm.png", "pics/kis.jpg", "204", "166", "[Screenshot]", 0 , "Transparency, layers, color chooser, basic brushes");
$gallery->show();
?>

<?php
  include("footer.inc");
?>



