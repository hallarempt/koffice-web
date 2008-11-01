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

<p>And on YouTube:</p>



<p><object width="425" height="344"><param name="movie" value="http://www.youtube.com/v/lyLPZDVdQiQ&hl=en&fs=1"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/lyLPZDVdQiQ&hl=en&fs=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="425" height="344"></embed></object></p>

<p><a href="http://fr.youtube.com/watch?v=lyLPZDVdQiQ">Color Mixing</a></p>

<p><object width="425" height="344"><param name="movie" value="http://www.youtube.com/v/UTILb8rBG1Q&hl=en&fs=1"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/UTILb8rBG1Q&hl=en&fs=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="425" height="344"></embed></object></p>

<p><a href="http://fr.youtube.com/watch?v=UTILb8rBG1Q">Painting with watercolors</a></p>


<p><object width="425" height="344"><param name="movie" value="http://www.youtube.com/v/lyLPZDVdQiQ&hl=en&fs=1"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/lyLPZDVdQiQ&hl=en&fs=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="425" height="344"></embed></object></p>

<p><a href="http://fr.youtube.com/watch?v=XfJTucE6pDw">Drawing with a tablet</a>.</p>


<p><object width="425" height="344"><param name="movie" value="http://www.youtube.com/v/GdihvnBxliE&hl=en&fs=1"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/GdihvnBxliE&hl=en&fs=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="425" height="344"></embed></object></p>

<p><a href="http://www.youtube.com/watch?v=GdihvnBxliE">Drawing a soldier's uniform in Krita (Morevna project)</a></p>

<p><object width="425" height="344"><param name="movie" value="http://www.youtube.com/v/QCbHDvg55Yc&hl=en&fs=1"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/QCbHDvg55Yc&hl=en&fs=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="425" height="344"></embed></object></p>

<p><a href="http://www.youtube.com/watch?v=QCbHDvg55Yc">Color Naruto in Krita (Morevna project)</p>


<?php
  include("footer.inc");
?>

