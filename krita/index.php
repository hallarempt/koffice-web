<?php
  $page_title="Krita";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
  include("krita.inc");
  $appinfo->showIconAndCopyright();
?>

<p><b>Krita</b> is a painting and image editing application for KOffice. Krita
is part of KOffice since version 1.4. Krita contains both ease-of-use and fun features
like guided painting (never before has it been so easy to airbrush a straight
line!) and high-end features like support for 16 bit images, CMYK and even
<a href="http://www.openexr.org">OpenEXR</a> HDR images.</p>

<center>
  <?php
    $gallery = new ImageGallery("Krita- Screenshot");
    $gallery->addImage("pics/stroman_2005_09_330.png",
                       "pics/stroman_2005_09.png",
                       330, 248,
                       "[Screenshot]", "",
                       "Krita");
    $gallery->show();
  ?>
</center>
    <h3>Features</h3>

      <p>Development on Krita was started in 1999. However, due to frequent changes of maintainer and long
         pauses between bursts of development wasn't ready for use until 2005. Now Krita is a capable 
	 image editor and a great platform for future development. The current release of Krita (version 1.5.0) has
         too many features to list them all:</p>

        <ul>
            <li>Painting with brushes and colors</li>
            <li>Creating brushes from circles and squares</li>
            <li>Filling with colour, patterns and gradients</li>
            <li>Erasing</li>
            <li>Airbrush</li>
            <li>Simple geometric forms, optionally filled with colours, patterns or gradient.</li>
            <li>Many filters</li>
            <li>undo and redo</li>
            <li>Loading and saving of images in its native file format.</li>
            <li>Importing and exporting of images in all file formats supported by your installation of ImageMagick.</li>
            <li>Adding, removing, reordering and merging of layers.</li>
            <li>Layer transparency.</li>
            <li>Loading Gimp brushes, pipe brushes, gradients and patterns.</li>
            <li>Zoom.</li>
            <li>Color selection.</li>
            <li>Gray(A), RGB(A) color models.</li>
            <li>Support for Wacom tablets.</li>
            <li>High-quality scaling, rotating and shearing.</li>
	    <li>Selections, with a full set of selection tools.</li>
    	    <li>A complete color management system based on lcms</li>
    	    <li>A cimg-based image restoration tool</li>
    	    <li>Histograms</li>
		<li>And much more...</li>
        </ul>

	<h3>Documentation</h3>

      <ul>
        <li><a href="http://docs.kde.org/development/en/koffice/krita/"  target="_blank">Manual</a> - a work in
            progress, but rapid progress. By Sander Koning, Boudewijn Rempt, Casper Boemann and Cyrille Berger.</li>
	<li><a href="faq.php">FAQs</a></li>

      </ul>

    <h3>Presentations</h3>

    <p><a href="./talk_krita_25.03.2006.pdf">Michael Thaler's 2006 presentation on Krita at Linux
Info Tag in Augsburg. (German)</a></p>
    <p><a href="./krita-fosdem2006.pdf">The slides for Bart Coppens' Krita presentation at Fosdem
2006.</a></p>
    <p><a href="./akademy2005.pdf">The slides for the Krita presentation at aKademy 2005.</a></p>


    <h3>Videos</h3>

    <p>Bart Coppens has made several instructional videos showing how to do things with Krita at
     important milestones like the developer preview release or the first public release candidate.
     While cool, these videos do not necessarily show the current, latest and greatest state of Krita.</p>

    <ul>
     <li><a href="./videos/krita_preview1.mpeg">First video for the first developer preview release</a></li>
     <li><a href="./videos/krita_preview2.mpeg">Second video for the first developer preview release</a></li>
     <li><a href="./videos/krita_rc1.avi">Video for the first public release candidate</a></li>
    </ul>
     
<h3>Blogs</h3>

<ul>
<li><a href="http://www.valdyas.org/fading/index.cgi/hacking/krita">Fading Memories blog on Krita, by Boudewijn Rempt</a></li>
<li><a href="http://cyrilleberger.blogspot.com">One Day One Feature: A Guided Tour of Krita Features in Daily Installments, by Cyrille Berger</a></li>
</ul>

<h3>Development</h3>
	<p>Who's working on what, and what's planned to be done can be found on the <a href="http://wiki.kde.org/krita+todo">
	Krita TODO and who's doing what</a> page.</p>

      <p>
      To join the development, contact one of the developers or join the
      KImageShop (Krita) mailing list.  To join the list, send mail to
      <a href="m&#x61;&#0105;l&#116;&#111;&#58;&#x6b;&#105;&#x6d;a&#x67;e&#x73;&#104;&#0111;p-req&#x75;e&#115;&#116;&#64;k&#100;e&#0046;&#111;&#x72;g">kimageshop-re&#113;&#117;e&#115;&#x74;&#x40;&#x6b;&#x64;e.&#0111;&#114;&#x67;</a>
      with the subject &quot;subscribe <i>your email address</i>&quot;. Please
      don't include a signature or other information that would confuse the
      list server that processes your request.
      There is a mailing list archive at
      <a href="http://lists.kde.org/?l=kde-kimageshop">http://lists.kde.org/?l=kde-kimageshop</a>.
      </p>

      <p>Read also the <a href="../developer/krita/index.php">Developing Krita</a> document
      for a high-level overview of the architecture of Krita, and <a href="../developer/krita/painters.php">Painters
      and Paint Devices</a> for information on the 2D canvas library that is at the heart of
      Krita.</p>

      <p>Krita also needs a dedicated artist who wants to work with us on creating
	a coherent, consistent and satisfying visual appearance for Krita. This includes
	tool icons, dialog box design and the implementation of visual cues for painterly
	features like a mixing palette or a set of images for artist's tools like brushes,
	erasers and pencils.</p>

      <h3>Libraries Krita currently uses</h3>

      <p>Krita depends on the following libraries, apart from
         what KOffice needs itself:</p>

      <ul><li><a href="http://www.imagemagick.org/">Image
              Magick X11 Image Processing and Display Package</a></li>
          <li><a href="http://www.littlecms.com">Little CMS &mdash; a free color
management system in 100K</a></li>
		<li><a href="http://www.openexr.com">OpenEXR</a></li>
      </ul>

      <h3>Inspiration</h3>
        <p>The following applications, not all of them free, provided some inspiration
            for Krita:</p>

      <p>Free:</p>
      <ul>
        <li><a href="http://www.gimp.org">The Gimp</a> (The GNU Image Manipulation Program)</li>
        <li><a href="http://www.gtk.org/~otaylor/gsumi/">GSumi</a> (Simulation of brush or pen and ink drawing)</li>
        <li><a href="http://www.levien.com/gimp/wetdream.html">Wet Dream</a> (Watercolor paint simulation), see
            also <a href="http://www.levien.com/gimp/brush-arch.html">An Architecture for "natural" brush types</a>.</li>
	<li><a href="http://members.ozemail.com.au/~hodsond/gimpbrush.html">A Gimp Brush Proposal</a> -- never
	implemented, I guess, but interesting nonetheless.</li>
      </ul>

      <p>(Non free:)</p>
      <ul>
        <li><a href="http://www.corel.com/servlet/Satellite?pagename=Corel/Products/productInfo&amp;id=1047021764853&amp;did=1047021793915">Corel Painter (the descendant of Fractal Painter)</a></li>
        <li><a href="http://www.squirreldome.com/cyberop.htm">DogWaffle</a></li>
        <li><a href="http://www.mindworkshop.com/alchemy/paint.html">e-Paint</a></li>
        <li><a href="http://jijigaga.com/product/index.htm">Smoothdraw</a></li>
        <li><a href="http://www.pixarra.com/">Pixarra Sketchbook</a></li>
      </ul>

	<p>Academic:</p>
 
<p>(These dissertations are made available for non-commercial purposes by Bill Baxter on his <a href="http://www.cs.unc.edu/~baxter/projects/index.html">projects webpage</a>)</p>
<ul>
        <li><a href="http://www.billbaxter.com/refs/Cockshott-Dissertation.pdf">Wet &amp; Sticky</a> -- dissertation by Tunde Cockshott on modelling wet paint.</li>
        <li><a href="http://www.billbaxter.com/refs/Fishkin-Dissertation.pdf">Applying Color Science to Computer Graphics</a> -- dissertation by Kenneth Paul Fishkin.</li>
        <li><a href="http://www.billbaxter.com/dissertation/Baxter-dissertation.pdf">Physically based interactive painting</a> -- dissertation by Bill Baxter.</li>
	<li><a href="http://www.cs.unc.edu/Research/geom/dab/">dAb Interactive Haptic Painting with 3D Virtual Brushes</a></li>
	<li><a href="http://gamma.cs.unc.edu/impasto/">IMPaSTo - A realistic, Interactive
Model for Paint</a></li>
</ul>
<?php include("footer.inc"); ?>
