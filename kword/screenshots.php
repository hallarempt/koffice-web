<?php
  $page_title='KWord Screenshots';
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php

# Use similar height/widths to ensure a uniform look

$gallery = new ImageGallery("KWord Screenshots");

$gallery->addImage("pics/bidi_09_2005_sm.png", "pics/bidi_09_2005.png", "268", "200", 
 "[Screenshot KWord 1.4 with bi-directional text]", 0 ,
 "Seamless support for left-to-right and right-to-left text:<br>
  Note the text selection starting in left-to-right<br>
  text and finishing in right-to-left text here.");
$gallery->addImage("pics/mars_09_2005_sm.png", "pics/mars_09_2005.png", "268", "200", 
 "[Screenshot of KWord 1.4 document with images]", 0 ,
 "KWord document with custom text frames and images.<br>
  (Text from wikipedia.org article on Mars<br>
  under GFDL license)");

$gallery->startNewRow();

$gallery->show();
?>

<p>See also <a href="oldscreenshots.php">the older screenshots</a>.</p>

<?php include("footer.inc"); ?>



