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
  $appinfo->show();
?>

<h2>Description</h2>
      <p>
      <b>Krita</b>, is a painting and image editing
      application for KOffice. It's in the early stages of development but
      is already usable for experimenting with painting techniques
      and composing images using brushes and layers.  You are encouraged
      to download, compile and test Krita to provide suggestions and
      report bugs as development moves towards a release version.
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
      <ul><li><a href="faq.phtml">FAQs</a>
              <ul><li><a href="faq.phtml#whatis">What Is It?</a></li>
                  <li><a href="faq.phtml#how">How Does It Work?</a></li>
                  <li><a href="faq.phtml#whatdoes">What Does It Do?</a></li>
              </ul>
      </ul>
      </p>
       <p>
      To join the development, contact one of the developers or join the
      KImageShop (Krita) mailing list.  To join the list, send mail to
      <a href="mailto:kimageshop-request@kde.org">kimageshop-request@kde.org</a>
      with the subject &quot;subscribe <i>your email address</i>&quot;. Please
      don't include a signature or other information that would confuse the
      list server that processes your request.
      </p>

      <p>
      There is a mailing list archive at
      <a href="http://lists.kde.org/?l=kde-kimageshop">http://lists.kde.org/?l=kde-kimageshop</a>.
      </p>

      <h3>News</h3>
      <br>

      <table border=0 cellpadding=2 cellspacing=2>
      <tr><td bgcolor="#BB8844" align=center valign=middle>
            <font color="#ffffff"><b>November 21, 2000</b></font></td>
          <td align=left valign=top>
             An <a href="http://dot.kde.org/974744841/">announcement</a> at
             kde.dot.news discusses the current plans,
             the need for volunteers, and the latest changes
             and enhancements.  These include:
             <ul>
             <li> Krita can now load and save images in its native .kis format
             with full layer and channel information and binary image data.
             </li>
             <li> Krita can import/export all common image formats supported
             by Qt such as jpg, png, bmp and xpm.  </li>
             <li>Images can be added and removed using the tabs either from
             external image files or by creating them from scratch.</li>
             <li> Krita is now fairly stable and very usable for testing
             of image creation, editing and layering using the tools which
             have been implemennted so far. </li>
             </ul>
            </td>
      </tr>
      <tr><td bgcolor="#8888BB" align=center valign=middle>
            <font color="#ffffff"><b>October, 2000</b></font></td>
          <td align=left valign=top>
             Krita now compiles and runs with other KOffice components which
             will be released with KDE 2.0, after a major upgrade to make
             use of current KOffice Library code. It must still be compiled
             and installed separately, however, and is not yet part of the
             official release</td>
      </tr>
      </table>
      <br>

      <h3>Other Information</h3>
      <ul><li><a href="http://www.imagemagick.org/">Image
              Magick X11 Image Processing and Display Package</a>
          <li><a href="http://www.gimp.org/">The GNU Image Manipulation Program
              (GIMP)</a>
      </ul>

<?php include("footer.inc"); ?>




