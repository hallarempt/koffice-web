<?php
  $page_title ='KOffice 1.2 RC1 Announcement';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

<p>
  DATELINE AUGUST 9, 2002<br />
  FOR IMMEDIATE RELEASE
</p>
<h2>
  KDE Ships Release Candidate of Free Integrated Office Suite
</h2>
<p align="justify">
  <strong>
  Konqueror Read-Only Embedding, WordPerfect Export Filter and Improved
  Stability Highlight KOffice Release Candidate for Linux and Other
  UNIXes</strong>
</p>
<p align="justify">
  August 9, 2002 (The INTERNET).
  The <a href="http://www.kde.org/">KDE Project</a> today announced the
  immediate release of
  <a href="http://www.koffice.org/">KOffice</a> 1.2rc1, the third
  preview release for KOffice 1.2,
  <a href="http://developer.kde.org/development-versions/koffice-1.2-release-plan.html">scheduled</a>
  for final release early next month.  KOffice is an integrated office suite for
  KDE, the leading desktop for Linux.  KOffice utilizes free and open
  standards for its document formats, component communication and component
  embedding.
</p>
<p align="justify">
  This release is a public testing release to resolve any
  remaining stability issues prior to the final release next month.
  Besides a substantial number of fixes and stability and performance
  enhancements since the KOffice beta2 release last month, including
  important corrections to the KWord and KPresenter WYSIWYG display,
  KOffice 1.2rc1 features new read-only
  <a href="http://www.konqueror.org/">Konqueror</a> plugins for
  each KOffice component, a new WordPerfect export filter for KWord, and
  improvements to the KWord RTF import filter.
  A more detailed
  <a href="http://www.koffice.org/announcements/changelog-1.2rc1.phtml">list
  of changes</a> and <a href="http://www.koffice.org/releases/">notes about
  the release</a> are available at the KOffice
  <a href="http://www.koffice.org/">web site</a>.
</p>
<p align="justify">
  This release, available in
  <a href="http://i18n.kde.org/teams/distributed.html"><strong>36</strong></a>
  languages, includes
  a frame-based, full-featured word processor
    (<a href="http://www.koffice.org/kword/">KWord</a>);
  a presentation application
    (<a href="http://www.koffice.org/kpresenter/">KPresenter</a>);
  a spreadsheet application
    (<a href="http://www.koffice.org/kspread/">KSpread</a>);
  a flowchart application
    (<a href="http://www.thekompany.com/projects/kivio/">Kivio</a>);
  business quality reporting software
    (<a href="http://www.thekompany.com/projects/kugar/">Kugar</a>);
  and two <em>alpha-quality</em> vector-drawing applications
    (<a href="http://www.koffice.org/kontour/">Kontour</a> and
     <a href="http://www.koffice.org/karbon/">Karbon14</a>).
  Additionally, KOffice includes robust embeddable charts
    (<a href="http://www.koffice.org/kchart/">KChart</a>)
  and formulas
    (<a href="http://www.koffice.org/kformula/">KFormula</a>)
  as well as a built-in thesaurus (KThesaurus)
  and numerous import and export
    <a href="http://www.koffice.org/filters/">filters</a>.
</p>
<p align="justify">
  KOffice 1.2rc1 complements the release of
  <a href="http://www.kde.org/announcements/announce-3.0.2.html">KDE 3.0.2,</a>
  last month.  KDE is an international, powerful and easy-to-use
  Internet-enabled desktop for Linux and other UNIXes, and together with
  KOffice constitutes the only Open Source project to provide a complete
  desktop and productivity environment for Linux/UNIX.
</p>
<p align="justify">
  KOffice and all its components (including KDE) are available
  <em><strong>for free</strong></em> under Open Source licenses from the KDE
  <a href="http://download.kde.org/unstable/koffice-1.2-rc1/src/">http</a>
  or <a href="http://www.kde.org/ftpmirrors.html">ftp</a> mirrors.
</p>
<h4>
  Installing KOffice 1.2rc1 Binary Packages
</h4>
<p align="justify">
  <u>Binary Packages</u>.
  Some Linux/UNIX OS vendors have kindly provided binary packages of
  KDE 3.0 for some versions of their distribution, and in other cases
  community volunteers have done so.
  Some of these binary packages are available for free download from KDE's
  <a href="http://download.kde.org/unstable/koffice-1.2-rc1/">http</a> or
  <a href="http://www.kde.org/ftpmirrors.html">ftp</a> mirrors.
  Additional binary packages, as well as updates to the packages now
  available, may become available over the coming weeks.
</p>
<p align="justify">
  Please note that the KDE Project makes these packages available from the
  KDE web site as a convenience to KDE users.  The KDE Project is not
  responsible for these packages as they are provided by third
  parties - typically, but not always, the distributor of the relevant
  distribution - using tools, compilers, library versions and quality
  assurance procedures over which KDE exercises no control. If you
  cannot find a binary package for your OS, or you are displeased with
  the quality of binary packages available for your system, please read
  the <a href="http://www.kde.org/packagepolicy.html">KDE Binary Package
  Policy</a> and/or contact your OS vendor.
</p>
<p align="justify">
  <u>Library Requirements / Options</u>.
  The library requirements for a particular binary package vary with the
  system on which the package was compiled.  Please bear in mind that
  some binary packages may require a newer version of Qt and other libraries
  than was shipped with the system (e.g., LinuxDistro X.Y
  may have shipped with Qt-3.0.0 but the packages below may require
  Qt-3.0.3).  For general library requirements for KDE, please see the text at
  <a href="#source_code-library_requirements">Source Code - Library
  Requirements</a> below.
</p>
<p align="justify">
  <a name="package_locations"><u>Package Locations</u></a>.
  At the time of this release, pre-compiled packages are available for:
</p>
<ul>
  <li>
    <a href="http://www.conectiva.com/">Conectiva Linux</a><!-- (<a href="http://download.kde.org/unstable/koffice-1.2-rc1/Conectiva/README">README</a>)-->:
    <ul>
      <li>
        8.0:  <a href="http://download.kde.org/unstable/koffice-1.2-rc1/Conectiva/conectiva/RPMS.koffice/">Intel i386</a>
      </li>
    </ul>
  </li>
  <li>
    <a href="http://www.linux-mandrake.com/en/">Mandrake Linux</a>:
    <ul>
      <li>
        8.2:  <a href="http://download.kde.org/unstable/koffice-1.2-rc1/Mandrake/8.2/RPMS/">Intel i586</a> (<a href="http://download.kde.org/unstable/koffice-1.2-rc1/Mandrake/noarch/">language packages</a>)
      </li>
      <li>
        8.1:  <a href="http://download.kde.org/unstable/koffice-1.2-rc1/Mandrake/8.1/RPMS/">Intel i586</a> (<a href="http://download.kde.org/unstable/koffice-1.2-rc1/Mandrake/noarch/">language packages</a>)
      </li>
    </ul>
  </li>
  <li><a href="http://www.redhat.com/">RedHat Linux</a>
      (<em>unofficial</em>)
  <ul>
    <li>7.3:  <a href="http://download.kde.org/unstable/koffice-1.2-rc1/RedHat-Inofficial/7.3/RPMS/">Intel i386</a> (<a href="http://download.kde.org/unstable/koffice-1.2-rc1/RedHat-Inofficial/noarch/">language packages</a>)
  </ul></li>
  <li>
    <a href="http://www.suse.com/">SuSE Linux</a>:
    <ul>
      <li>
        8.0:  <a href="http://download.kde.org/unstable/koffice-1.2-rc1/SuSE/i386/8.0/">Intel i386</a> (<a href="http://download.kde.org/unstable/koffice-1.2-rc1/SuSE/noarch/">language packages</a>)
      </li>
      <li>
        7.3:  <a href="http://download.kde.org/unstable/koffice-1.2-rc1/SuSE/i386/7.3/">Intel i386</a> and <a href="http://download.kde.org/stable/koffice-1.2rc1/SuSE/ppc/7.3/">PowerPC</a> (<a href="http://download.kde.org/unstable/koffice-1.2-rc1/SuSE/noarch/">language packages</a>)
      </li>
      <li>
        7.2:  <a href="http://download.kde.org/unstable/koffice-1.2-rc1/SuSE/i386/7.2/">Intel i386</a> (<a href="http://download.kde.org/unstable/koffice-1.2-rc1/SuSE/noarch/">language packages</a>)
      </li>
      <li>
        7.1:  <a href="http://download.kde.org/unstable/koffice-1.2-rc1/SuSE/i386/7.1/">Intel i386</a> and <a href="http://download.kde.org/stable/koffice-1.2rc1/SuSE/ppc/7.1/">PowerPC</a> (<a href="http://download.kde.org/unstable/koffice-1.2-rc1/SuSE/noarch/">language packages</a>)
      </li>
      <li>
        7.0:  <a href="http://download.kde.org/unstable/koffice-1.2-rc1/SuSE/i386/7.0/">Intel i386</a> (<a href="http://download.kde.org/unstable/koffice-1.2-rc1/SuSE/noarch/">language packages</a>)
      </li>
    </ul>
  </li>
</ul>
<p align="justify">
Please check the servers periodically for pre-compiled packages for other
distributions.  More binary packages may become available over the
coming days and weeks.
</p>
<h4>
  Compiling KOffice 1.2rc1
</h4>
<p align="justify">
  <a name="source_code-library_requirements"></a><u>Library
  Requirements</u>.
  KOffice 1.2rc1 requires the following libraries:
</p>
<ul>
  <li>
    kdelibs 3.0, though kdelibs 3.0.2 is recommend.  Both release can be
    downloaded following the instructions in the respective press releases
    (<a href="http://www.kde.org/announcements/announce-3.0.html#package_locations">3.0</a>,
    <a href="http://www.kde.org/announcements/announce-3.0.2.html">3.0.2</a>)
    at the KDE website.  For more information on these kdelibs releases, please
    see the <a href="http://www.kde.org/announcements/announce-3.0.html">KDE
    3.0 press release</a>.
  </li>
  <li>
    Qt 3.0.3, which is available in source code from Trolltech as
    <a href="ftp://ftp.trolltech.com/qt/source/qt-x11-3.0.3.tar.gz">qt-x11-3.0.3.tar.gz</a>, or later.
    and
  </li>
  <li>
    For reading help pages and other KOffice documentation,
    <a href="http://xmlsoft.org/">libxml2</a> &gt;= 2.4.9 and
    <a href="http://xmlsoft.org/XSLT/">libxslt</a> &gt;= 1.0.7.
  </li>
</ul>
<p align="justify">
  <u>Compiler Requirements</u>.
  Please note that some components of
  KOffice 1.2rc1 (such as the Quattro Pro import filter
  and <a href="http://www.koffice.org/kchart/">KChart</a>) will not
  compile with older versions of <a href="http://gcc.gnu.org/">gcc/egcs</a>,
  such as egcs-1.1.2 or gcc-2.7.2.  At a minimum gcc-2.95-* is required.
</p>
<p align="justify">
  <a name="source_code"></a><u>Source Code/SRPMs</u>.
  The complete source code for KOffice 1.2rc1 is available for free download
  via one of the KDE
  <a href="http://download.kde.org/unstable/koffice-1.2-rc1/src/">http</a>
  or <a href="http://www.kde.org/ftpmirrors.html">ftp</a> mirrors.
  Additionally, source rpms are available for the following distributions:
</p>
<ul>
  <li>
    Conectiva <a href="http://download.kde.org/unstable/koffice-1.2-rc1/Conectiva/SRPMS.koffice/">8.0</a>
  </li>
  <li>
    Mandrake Linux <a href="http://download.kde.org/unstable/koffice-1.2-rc1/Mandrake/SRPMS/">8.x</a>
  </li>
  <li>
    RedHat Linux <a href="http://download.kde.org/unstable/koffice-1.2-rc1/RedHat-Inofficial/SRPMS/">7.3</a>
      (<em>unofficial</em>)
  </li>
  <li>
    SuSE Linux <a href="http://download.kde.org/unstable/koffice-1.2-rc1/SuSE/SRPMS/">8.0</a>, <a href="http://download.kde.org/unstable/koffice-1.2-rc1/SuSE/SRPMS/">7.x</a>
  </li>
</ul>
<p align="justify">
  <u>Further Information</u>.
  For further instructions on compiling and installing KOffice, please consult
  the KOffice <a href="http://www.koffice.org/install-source.phtml">installation
  instructions</a>.  For
  problems with SRPMs, please contact the person listed in the applicable
  .spec file.
</p>
<h4>
  Corporate KOffice Sponsors
</h4>
<p align="justify">
  Besides the valuable and excellent efforts by the
  <a href="http://www.koffice.org/developers.phtml">KOffice developers</a>
  themselves, significant support for KOffice development has been provided by
  <a href="http://www.mandrakesoft.com/">MandrakeSoft</a> (which sponsors
  KOffice developers <a href="http://people.mandrakesoft.com/~david/">David
  Faure</a> and Laurent Montel),
  <a href="http://www.thekompany.com/">theKompany.com</a> (which has
  contributed Kivio and Kugar to KOffice), and
  <a href="http://www.klaralvdalens-datakonsult.se/">Klar&auml;lvdalens
  Datakonsult AB</a> (which has contributed KChart to KOffice).  In addition,
  the members of the <a href="http://www.kdeleague.org/">KDE League</a>,
  as well as <a href="http://www.kde.org/donations.html">individual
  sponsors</a> (<a href="http://www.kde.org/support.html">donate</a>),
  provide significant support for KDE and KOffice.  Thanks!
</p>
<h4>
  About KOffice/KDE
</h4>
<p align="justify">
  KOffice is part of the KDE Project.
  KDE is an independent project of hundreds of developers, translators,
  artists and professionals worldwide collaborating over the Internet
  to create and freely distribute a sophisticated, customizable and stable
  desktop and office environment employing a flexible, component-based,
  network-transparent architecture and offering an outstanding development
  platform.  KDE provides a stable, mature desktop, a full, component-based
  office suite (<a href="http://www.koffice.org/">KOffice</a>), a large
  set of networking and administration tools and utilities, and an
  efficient, intuitive development environment featuring the excellent IDE
  <a href="http://www.kdevelop.org/">KDevelop</a>.  KDE is working proof
  that the Open Source "Bazaar-style" software development model can yield
  first-rate technologies on par with and superior to even the most complex
  commercial software.
</p>
<p align="justify">
  Please visit the KDE family of web sites for the
  <a href="http://www.kde.org/faq.html">KDE FAQ</a>,
  <a href="http://www.kde.org/screenshots/kde3shots.html">screenshots</a>,
  <a href="http://www.koffice.org/">KOffice information</a> and
  <a href="http://developer.kde.org/documentation/kde3arch/">developer
  information</a>.
  Much more <a href="http://www.kde.org/whatiskde/">information</a>
  about KDE is available from KDE's
  <a href="http://www.kde.org/family.html">family of web sites</a>.
</p>
<hr>
<p align="justify">
  <font size="2">
  <em>Release Coordinator</em>:  Thanks to
  <a href="http://people.mandrakesoft.com/~david/">David Faure</a> for
  his excellent services as release coordinator.
  </font>
</p>
<p align="justify">
  <font size="2">
  <em>Press Release</em>:
  Written by <a href="mailto:pour AT kdeleague DOT org">Andreas
  Pour</a> from the <a href="http://www.kdeleague.org/">KDE League</a>, with the
  invaluable assistance of numerous gifted volunteers from the KDE Project.
  <!--[Translated into _____________ by ______________ .]-->
  </font>
</p>
<p align="justify">
  <font size="2">
  <em>Trademarks Notices.</em>

  KDE, K Desktop Environment and KOffice are trademarks of KDE e.V.
  Incorporated.

  Adobe Illustrator and PostScript are registered trademarks of Adobe Systems

  dBASE is a registered trademark of dBASE Inc.

  Corel, Quattro Pro and WordPerfect are registered trademarks of Corel
  Corporation or Corel Corporation Limited.

  Linux is a registered trademark of Linus Torvalds.

  Trolltech and Qt are trademarks of Trolltech AS.

  UNIX is a registered trademark of The Open Group.

  All other trademarks and copyrights referred to in this announcement are
  the property of their respective owners.
  </font>
</p>
<hr>
<table border="0" cellpadding="8" cellspacing="0">
  <tr>
    <th colspan="2" align="left">
      Press Contacts:
    </th>
  </tr>
  <tr valign="top">
    <td align="right" nowrap>
      United&nbsp;States:
    </td>
    <td nowrap>
      Andreas Pour<br />
      KDE League, Inc.<br />
      pour AT kdeleague DOT org<br />
      (1) 917 312 3122
    </td>
  </tr>
  <tr valign="top">
    <td align="right" nowrap>
      Europe (French and English):
    </td>
    <td nowrap>
      David Faure<br />
      faure@kde.org<br />
      (33) 4 3250 1445
    </td>
  </tr>
  <tr valign="top">
    <td align="right" nowrap>
      Europe (German and English):
    </td>
    <td nowrap>
      Ralf Nolden<br />
      nolden@kde.org<br />
      (49) 2421 502758
    </td>
  </tr>
  <tr valign="top">
    <td align="right" nowrap>
      Europe (English):
    </td>
    <td nowrap>
      Jono Bacon<br />
      jono@kde.org
    </td>
  </tr>
  <tr valign="top">
    <td align="right" nowrap>
      Southeast Asia (English and Indonesian):
    </td>
    <td nowrap>
      Ariya Hidayat<br />
      ariya@kde.org<br />
      (62) 815 8703177
    </td>
  </tr>
</table>

<?php
  include("footer.inc");
?>
