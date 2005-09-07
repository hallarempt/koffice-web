<?php
  $page_title="Krita";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
  $appinfo = new AppInfo("Krita");
  $appinfo->setIcon( "pics/hi48-app-krita.png", "48", "48");
  $appinfo->setVersion($kritaversion);
  $appinfo->setLicense("gpl");
  $appinfo->setCopyright("2000", "the Krita Team");
  $appinfo->addAuthor("Michael Koch", "&#107;&#0111;c&#104;&#x40;&#107;d&#00101;.&#x6f;r&#x67;");
  $appinfo->addAuthor("Matthias Elter", "me&#64;&#x6b;de&#46;or&#103;");
  $appinfo->addAuthor("Andrew Richards", "ph&#121;&#00115;a&#106;r&#00064;&#112;h&#121;&#x73;.can&#116;&#101;r&#98;&#00117;r&#121;&#0046;&#00097;c&#00046;&#x6e;&#x7a;");
  $appinfo->addAuthor("Carsten Pfeiffer", "&#x70;&#x66;e&#x69;&#102;&#102;&#x65;&#x72;&#x40;&#x6b;de&#x2e;&#x6f;r&#103;", "Former maintainer");
  $appinfo->addAuthor(" Toshitaka Fujioka", "&#0102;&#117;&#106;&#x69;o&#x6b;a&#0064;&#x6b;de&#x2e;&#x6f;rg");
  $appinfo->addAuthor("John Califf", "&#0106;c&#097;&#108;&#0105;&#x66;f&#x40;&#x63;o&#109;p&#117;zone.&#x6e;&#101;t", "Former maintainer");
  $appinfo->addAuthor("Patrick Julien", "freak&#x40;&#099;&#x6f;d&#101;&#x70;im&#112;&#x73;.o&#x72;&#x67;", "Krita architecture, former maintainer");
  $appinfo->addMaintainer("Boudewijn Rempt", "&#98;ou&#100;&#064;&#118;ald&#121;a&#00115;.o&#0114;g");
  $appinfo->addAuthor("Sven Langkamp", "lo&#00110;&#x67;&#x61;&#x6d;&#0112;&#x40;r&#x65;al&#108;&#x79;g&#x6f;&#x6f;d&#0046;d&#101;");
  $appinfo->addAuthor("Cyrille Berger", "cyb&#64;le&#112;i&#0046;or&#103;");
  $appinfo->addAuthor("Adrian Page", "Adrian.&#x50;age&#0064;&#0116;es&#99;&#111;.net");
  $appinfo->addAuthor("Bart Coppens", "&#107;&#x64;&#101;&#64;b&#097;&#x72;&#116;co&#x70;&#x70;en&#115;.b&#x65;");
  $appinfo->addAuthor("Michael Thaler", "michael.thal&#x65;&#0114;&#x40;ph&#00121;&#00115;&#x69;k&#46;tu&#045;&#x6d;&#117;&#101;&#x6e;&#99;h&#0101;n&#46;&#00100;&#x65;");
  $appinfo->addAuthor("Casper Boemann", "");
  $appinfo->addContributor("Daniel Molkentin", "d&#x61;&#x6e;&#105;&#00109;&#00111;&#0064;kde.or&#x67;", "Bug fixing");
  $appinfo->addContributor("Dirk Sch&ouml;nberger", "", "Keyboard shortcuts, code cleanups");
  $appinfo->addContributor("Thomas Zander", "&#x7a;&#x61;n&#x64;&#101;r&#00064;&#107;&#x64;&#101;&#46;or&#00103;", "Usability consulting, toolbox fixing");
  $appinfo->addContributor("Clarence Dang", "dang at kde dot org", "Shape outline painting");
  $appinfo->addContributor("Alan Horkan", "", "Keyboard shortcuts");
  $appinfo->addContributor("Danny Allen", "", "Tool icons");
  $appinfo->addContributor("Lee Olson", "", "Application icon");

  $appinfo->show();
?>
</a>

<h2>Description</h2>
      <p>
      <b>Krita</b> is a painting and image editing application for KOffice.
	Krita is part of KOffice since 1.4. Krita contains both ease-of-use and fun
	features like guided painting (never before has it been so easy to
	airbrush a straight line!) and high-end features like support for
	16 bit images, CMYK and even <a href="http://www.openexr.org">OpenEXR</a>
	HDR images.
      </p>

      <p>
      Krita, like other KDE and KOffice applications, is <b>free software</b>
      which uses <a href="http://www.gnu.org/">GPL Licensing.</a> You enjoy the
      same rights to own, copy and modify this software with commercial and
      personal use, so long as you don't restrict the freedom of others to do
      the same.
      </p>

      <p>
      <b>Additional Krita documents and links:</b>
      </p>
      <ul>
	<li><a href="faq.php">FAQs</a></li>
        <li><a href="http://wiki.kde.org/krita+todo">Development TODO</a></li>
      </ul>

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

	<h3>Manual</h3>

	<p>The manual is a work in progress, but the chapter on selections is fairly complete.
	You can <a href="./krita.pdf">download the manual in pdf format</a>.</p>

    <h3>aKademy 2005 presentation</h3>

    <p><a href="./akademy2005.pdf">The slides for the Krita presentation at aKademy 2005.</a></p>

      <h3>Status</h3>

	<p>Who's working on what, and what's planned to be done can be found on the <a href="http://wiki.kde.org/krita+todo">
	Krita TODO and who's doing what</a> page.</p>

      <p>Development on Krita was started in 1999. However, due to frequent changes of maintainer and long
         pauses between bursts of development wasn't ready for use until 2005. Now Krita is a capable 
	 image editor and a great platform for future development. The first public release of Krita (version 1.4.1) has
         the following features:</p>

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


	<p>Features working in SVN include:</p>
	<ul>
		<li>CMYK</li>
		<li>OpenEXR</li>
		<li>16 bit/channel RGBA images</li>
		<li>Many more filters</li>
		<li>Painting with watercolors</li>
		<li>Adjusting brightness and contrast with curves</li>
	</ul>

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
        <li><a href="http://www.gimp.org/~otaylor/gsumi/">GSumi</a> (Simulation of brush or pen and ink drawing)</li>
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
        <li><a href="http://www.billbaxter.com/refs/Cockshott-Dissertation.pdf">Wet &amp; Sticky</a> -- dissertion by Tunde Cockshott on modelling wet paint.</a></li>
        <li><a href="http://www.billbaxter.com/refs/Fishkin-Dissertation.pdf">Applying Color Science to Computer Graphics</a> -- dissertion by Kenneth Paul Fishkin.</li>
        <li><a href="http://www.billbaxter.com/dissertation/Baxter-dissertation.pdf">Physically based interactive painting</a> -- dissertion by Bill Baxter.</p></a></li>
	<li><a href="http://www.cs.unc.edu/Research/geom/dab/">dAb Interactive Haptic Painting with 3D Virtual Brushes</a></li>
	<li><a href="http://gamma.cs.unc.edu/impasto/">IMPaSTo - A realistic, Interactive
Model for Paint</a></li>
</ul>
<?php include("footer.inc"); ?>
