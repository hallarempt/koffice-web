<?php
  $page_title='KWord Screenshots';
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php

# Use similar height/widths to ensure a uniform look

$gallery = new ImageGallery("KWord Screenshots");

$gallery->addImage("pics/bidi_2005_09_270.png",
 "pics/bidi_2005_09.png",
 "270", "200",
 "[Screenshot KWord 1.4 with bi-directional text]", 0 ,
 "Seamless support for left-to-right and right-to-left text:<br>
  Note the text selection starting in left-to-right<br>
  text and ending in right-to-left text here.");
$gallery->addImage("pics/mars_2005_09_270.png",
 "pics/mars_2005_09.png",
 "270", "200",
 "[Screenshot of KWord 1.4 document with images]", 0 ,
 "KWord document with custom text frames and images.<br>
  (Text from wikipedia.org article on Mars<br>
  under GFDL license)");

$gallery->startNewRow();

$gallery->addImage("pics/preview_2005_09_270.png",
 "pics/preview_2005_09.png",
 "270", "200",
 "[Screenshot of KWord 1.4 in 'preview' mode]", 0,
 "KWord document in 'preview' mode");


$gallery->show();
?>

<p>See also <a href="oldscreenshots.php">the older screenshots</a>.</p>

<?php include("footer.inc"); ?>



