<?php
  $page_title="Paint devices and Painters";
  $site_root='../../';
  include("koffice.inc");
  include("header.inc");
?>

<h2>Paint devices and Painters</h2>

<p><i>Boudewijn Rempt</i></p>

<p>This is a write-up of my (Boudewijn's) understanding at this
moment -- February 17, 2004 (brought up to date a bit to August 25, 2006).</p>


<p>Krita's core consists of paint devices and painters:</p>

<ul>
	<li><tt>KisPaintDevice</tt></li>
	<li><tt>KisPainter</tt></li>
</ul>

<p>These classes are (very) loosely modelled on QPaintDevice and
QPainter. KisPaintDevice also takes up some of the roles of QImage,
but isn't all that efficient at it.</p>

<p>Examples of <tt>KisPaintDevice</tt>s are: <tt>KisSelection</tt> and <tt>KisBackground</tt>.</p>

<h3>Getting pixel data in and out of a KisPaintDevice.</h3>

<p>Krita stores all image data in tiles; the tiles are managed by the
aptly named KisTiledDataManager (which is a subclass of KisDataManager,
so that it is possible to exchange the tilemanager somewhat easier at compile
time). Inside the tiles, we just have raw Q_UINT8s (these are regular,
8 bit unsigned chars), that can be interpreted only with the appropriate
colorspace.</p>

<p>Ordinarily, you will change the data inside a KisPaintDevice through
the KisPainter. Using KisPainter has the advantage that your changes
will be undoable and that the tile manager is hidden. That's
especially nice, since you generally don't want to work directly with
tiles, not before having bought shares in an aspirin producer.</p>

<p>The other way of messing with the pixels inside a KisPaintDevice is
through the colorAt(), pixel() and and setPixel() methods in KisPaintDevice.
These methods retrieve and set the specified pixel data using the
tiles, but are not undoable. They are also rather ineffcient and slow.</p>

<p>These methods return and get their data in the format of a KisColor. This
is a wrapper around a single pixel worth of uninterpreted data, and contains
a pointer to the KisColorSpace that needs to be used to interpret the raw data.
</p>

<p>KisPainter and KisPaintDevice do the job of hiding the actual image
data from the krita hacker, but sometimes it's not enough, sometimes
you need to loop over all the pixels in an image, do
something, and write the pixels back to this or another image (or
sections of images).</p>

<h3>Getting easy access to the image data with KisPaintDevice</h3>

<p>The best way to get access to individual pixels, is using one of the iterators
the KisPaintDevice has to offer. The easiest way is to iterate over the lines with
an iterator.</p>
<pre>
    // For each line y:
    KisHLineIteratorPixel it = paintdev->createHLineIterator(x, y, width, writable);
    while (!it.isDone()) {
        Q_UINT8* data = it.rawData();
        // you can use the KisColorSpace of the paint device here to change the data
        ++it;
    }
</pre>

<p>The writable property is important for speed: if you the subsequent accessing of the pixel
data will purely be read-only, writable should be set to false. That way, if the iterators
passes over a tile that has no data yet, it will not create a new tile, but return a pointer
to a default tile. If you do plan to change the pixel data, it is important to set writable
to true, since the new tiles should be created.
</p>

<p>
Each iterator also has an oldRawData() function. This function returns a const Q_UINT8 pointer
to the state the pixel was before the last KisMemento was taken. Basically, this is a 'snapshot'
of the pixel taken at the moment the most recent undo operation on this pixel was started.
It can be important that you can get access to the state a pixel was <i>before</i> it was
changed by a function.
</p>

<p>
Other iterators are KisVLineIteratorPixel and KisRectIteratorPixel.
The Vertical iterator is completely analogous to the HLine iterator. The KisRectIteratorPixel
iterates over a whole area at one, <i>in the way that is most efficient</i>. This means that
the iteration will not go one complete line at a time, but will stay in the same tile as long
as possible. This allows for faster iteration, but might be problematic if you rely on the
pixels being visited in a deterministic way.
<!-- Also talk about the Random iterator thingie? -->
</p>

<!--

<h3>Getting pixel data into your buffer</h3>

<p>Define a pointer to a memory buffer with <tt>QUANTUM</tt>S</p>
<pre>
	QUANTUM *buf;
</pre>

<p>Create the buffer. Note that you cannot assume that there is one byte
per channel; <tt>QUANTUM</tt> can be bigger.</p>

<pre>
	buf = new QUANTUM[width * height * depth * sizeof(QUANTUM)];
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
-->

<?php
   include("footer.inc");
?>
