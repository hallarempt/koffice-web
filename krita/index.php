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
  $appinfo->addAuthor("Michael Koch", "koch@kde.org");
  $appinfo->addAuthor("Matthias Elter", "me@kde.org");
  $appinfo->addAuthor("Andrew Richards", "physajr@phys.canterbury.ac.nz");
  $appinfo->addAuthor("Carsten Pfeiffer", "pfeiffer@kde.org");
  $appinfo->addAuthor("John Califf", "jcaliff@compuzone.net");
  $appinfo->addContributor("Patrick Julien", "freak@codepimps.org");
  $appinfo->addContributor("Boudewijn Rempt", "boud@valdyas.org");
  $appinfo->addContributor("Sven Langkamp", "longamp@reallygood.de");
  $appinfo->addContributor("Cyrille Berger", "cyb@lepi.org");
  $appinfo->addContributor("Adrian Page", "Adrian.Page@tesco.net");
  $appinfo->addContributor("Roger Larsson", "roger.larsson@norran.net");
  $appinfo->addContributor("Bart Coppens", "kde@bartcoppens.be");

  $appinfo->show();
?>

<h2>Description</h2>
      <p>
      <b>Krita</b> is a painting and image editing application for KOffice.
      The application is not ready for use, but the underpinnings provide
      a solid framework to build an application on, and everyone is invited
      to join the development effort. Because of the current unfinished state,
      Krita is not part of the regular KOffice releases, but the source is
      available from the KDE CVS repository.
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
      <ul><li><a href="faq.php">FAQs</a>
              <ul><li><a href="faq.php#whatis">What Is It?</a></li>
                  <li><a href="faq.php#how">How Does It Work?</a></li>
                  <li><a href="faq.php#whatdoes">What Does It Do?</a></li>
              </ul>
          </li>
      </ul>

      <p>
      To join the development, contact one of the developers or join the
      KImageShop (Krita) mailing list.  To join the list, send mail to
      <a href="mailto:kimageshop-request@kde.org">kimageshop-request@kde.org</a>
      with the subject &quot;subscribe <i>your email address</i>&quot;. Please
      don't include a signature or other information that would confuse the
      list server that processes your request.
      </p>

      <p>Read also the <a href="../developer/krita/index.php">Developing Krita</a> document
      for a high-level overview of the architecture of Krita, and <a href="../developer/krita/painters.php">Painters
      and Paint Devices</a> for information on the 2D canvas library that is at the heart of
      Krita.</p>

      <p>
      There is a mailing list archive at
      <a href="http://lists.kde.org/?l=kde-kimageshop">http://lists.kde.org/?l=kde-kimageshop</a>.
      </p>

      <h3>Status</h3>

      <p>Krita has been under development since 1999, but that doesn't mean it's
        anywhere near usable yet. Currently (that is, December 2003) working are:</p>

        <ul>
            <li>Painting with brushes and colours</li>
            <li>undo and redo</li>
            <li>Loading and saving of images in its native file format.</li>
            <li>Importing and exporting of images in all file formats supported by your installation of ImageMagick.</li>
            <li>Adding, removing, reordering and merging of layers.</li>
            <li>Layer transparency.</li>
            <li>Loading Gimp brushes, pipe brushes and patterns.</li>
            <li>Rectangular select, cut and past.</li>
            <li>Zoom.</li>
            <li>Color selection.</li>
            <li>RGB(A) and CMYK(A) color models.</li>
            <li>Support for Wacom tablets.</li>
        </ul>


      <h3>Libraries Krita currently uses</h3>

      <p>Krita depends on the following libraries, apart from
         what KOffice needs itself:</p>

      <ul><li><a href="http://www.imagemagick.org/">Image
              Magick X11 Image Processing and Display Package</a></li>
          <li><a href="http://www.littlecms.com">Little CMS &mdash; a free color
management system in 100K</a></li>
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
<ul>
	<li><a href="http://www.cs.unc.edu/Research/geom/dab/">dAb Interactive Haptic Painting with 3D Virtual Brushes</a></li>
</ul>
<?php include("footer.inc"); ?>
