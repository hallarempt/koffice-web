<?php
  $page_title="Paint devices and Painters";
  $site_root='../../';
  include("koffice.inc");
  include("header.inc");
?>

<h2>Paint devices and Painters</h2>

<p><i>Boudewijn Rempt</i></p>

<p>This is a write-up of my (Boudewijn's) understanding at this
moment -- February 17, 2004.</p>


<p>Krita's core consists of paint devices and painters:</p>

<ul>
	<li><tt>KisPaintDevice</tt></li>
	<li><tt>KisPainter</tt></li>
</ul>

<p>These classes are (very) loosely modelled on QPaintDevice and
QPainter. KisPaintDevice also takes up some of the roles of QImage,
but isn't all that efficient at it.</p>

<p>Examples of <tt>KisPaintDevice</tt>s are: <tt>KisLayer</tt>,
<tt>KisSelection</tt> and <tt>KisBackground</tt>.

<h3>Getting pixel data in and out of a KisPaintDevice.</h3>

<p>Krita stores all image data in tiles; the tiles are managed by the
aptly named KisTileMgr. Inside the tiles, we have a KisPixelData
structure, which is basically a wrapper that packs together a pointer
to a memory area that contains the pixel data (QUANTUM's) and some
more information.</p>

<p>Ordinarily, you will change the data inside a KisPaintDevice through
the KisPainter. Using KisPainter has the advantage that your changes
will be undoable and that the tile manager is hidden. That's
especially nice, since you generally don't want to work directly with
tiles, not before having bought shares in an aspirin producer.</p>

<p>The other way of messing with the pixels inside a KisPaintDevice is
through the pixel() and and setPixel() methods in KisPaintDevice.
These methods retrieve and set the specified pixel data using the
tiles, but are not undoable. They are also rather ineffcient and slow.</p>

<p>KisPainter and KisPaintDevice do the job of hiding the actual image
data from the krita hacker, but sometimes it's not enough, sometimes
you need to loop over all the pixels in an image, do
something, and write the pixels back to this or another image (or
sections of images).</p>

<p>In the near future, we will offer an iterator over the pixels, for now
you will have to ask the tile manager to copy all the bytes of the
image data in a buffer for you to read. Likewise, in the future we
will hopefully have something clever to feed pixel data to the tile
manager. For now, you will have to fill a memory buffer with the
desired data and feed that to the tile manager.</p>

<h3>Getting pixel data into your buffer</h3>

<p>Define a pointer to a memory buffer with <tt>QUANTUM</tt>S</p>
<pre>
	QUANTUM *buf;
</pre>

<p>Create the buffer. Note that you cannot assume that there is one byte
per channel; <tt>QUANTUM</tt> can be bigger.</p>

<pre>
	buf = new QUANTUM[width * heigth * depth * sizeof(QUANTUM)];
</pre>

<p>Fill the buf with the data. x1, y1, x2, y2 are the top left and bottom
right corner of the section you want. stride is the width of the
section in bytes, i.e. (x2 - x1 + 1) * depth. Note that stride does
not need to be pre-multiplied with <tt>sizeof(QUANTUM)</tt>, apparently.</p>

<pre>
	tilemgr -> readPixelData(x1, y1, x2, y2, buf, stride);
</pre>

<p>Now all the pixels in the tile manager are copied into <tt>buf</tt> -- the
operative word is <b><i>copy</i></b>, which means slow, and takes a lot of memory
is the section is big.</p>

<p>If you can stand computing with tiles, you can copy each tile into the
buffer, which takes a lot less memory, but you have to take care when
the image isn't exactly a multiple of the tilesize. See
<a href="http://webcvs.kde.org/cgi-bin/cvsweb.cgi/koffice/krita/core/builder/kis_image_magick_converter.cc">kis_image_magick_converter.cpp</a> for an example.</p>

<h3>Getting your data into a KisPaintDevice without using KisPainter</h3>

<p>Although in the future we might offer a bitBlt that takes a simple
memory buffer and blits that onto the paint device, for now, you will
have to access the tile manager directly, using writePixelData.</p>

<p>First create a buffer, just as above:</p>

<pre>
	QUANTUM * newData = new QUANTUM[width * height * depth * sizeof(QUANTUM)];
</pre>

<p>But unless you are sure you are going to fill absolutely every pixel,
you might want to initialize the buffer with memset. Krita, in
contrast with ImageMagick, uses 0 as the value for transparent
opacity, so that's nice:</p>

<pre>
	memset(newData, width * height * depth * sizeof(QUANTUM), 0);
</pre>

<p>Then create a new tilemanager, or reuse the old one if the size is
still correct. Stride is again <tt>width * depth</tt>, not <tt>width * depth *
sizeof(QUANTUM)</tt></p>

<pre>
        KisTileMgrSP tm = new KisTileMgr(depth, width, height);
	tm -> writePixelData(x1, y1, x2, y2, newData, stride);
</pre>

<h3>Envoi</h3>

<p>We are working on providing a smart iterator that lets you iterate over
pixels in a paint device (i.e., in the tiles),
and even provide random access in a smart way; and we are working on a smart way
of getting pixels into a paint device, but those aren't done yet.</p>

<?php
   include("footer.inc");
?>
