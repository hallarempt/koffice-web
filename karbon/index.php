<?php
  $page_title="Karbon14";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
   include("karbon.inc");
   $appinfo->showIconAndCopyright();
?>

<p>Karbon14 is the scalable vector drawing application in KDE. </p>

<center>
  <?php
    $gallery = new ImageGallery("Karbon - Screenshot");
    $gallery->addImage("pics/svg_2005_09_330.png",
                       "pics/svg_2005_09.png",
                       330, 232,
                       "[Screenshot]", "",
                       "Karbon14 importing an SVG file from www.openclipart.org");
    $gallery->show();
  ?>
</center>
<p>Karbon is a <em>vector-based</em> drawing application for KOffice. It allows
artists to create complex drawings without losing image quality when zooming in
on, or resizing  the drawing. You can use Karbon to add finishing
touches to diagrams created using <a href="../kivio/">Kivio</a> or charts created using <a href="../kchart/">KChart</a>.
Graphic design ideas can be quickly and easily transformed into high
quality illustrations with Karbon.</p>

<p>What makes a <em>vector-based</em> drawing application like Karbon different
from a <em>pixel-based</em> drawing application like
<a href="../krita/">Krita</a>?

<p>In a vector drawing - such as the drawing shown above - your drawing is
stored as geometric shapes such as lines and curves.  When the drawing is
resized, the image scales smoothly.</p>

<p>However, in a pixel-based drawing, your drawing is stored as many dots
(pixels) in rows and columns.  When you resize a pixel-based image, the dots
will be enlarged. This can result in jagged edges known as pixelation and aliasing and
thus the quality of the image will go down.
Pixel-based drawings often have larger file sizes compared to simple vector
drawings.</p>

<p>For example: Karbon is useful for creating cartoons drawings or editing
clip art which often needs to be resized to fit in a document or on a
poster. <a href="../krita">Krita</a> is more suited to painting pictures or editing
photographs.</p>

<p>To get started with Karbon quickly, you might want to try opening
and modifying some of the images from the
<a href="http://www.openclipart.org/">Open Clip Art Library</a>.</p>

 <br />
 <hr width="30%" align="center" />
 <p>
 Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
 </p>
<?php include("footer.inc"); ?>

