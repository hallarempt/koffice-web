<?php
  $page_title ='KOffice 1.2 Beta 1 Announcement';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

<p>
  DATELINE APRIL 25, 2002<br />
  FOR IMMEDIATE RELEASE
</p>
<h2>
  KDE Ships Beta Test Release of Free Integrated Office Suite
</h2>
<p>
  <strong>Improved Layout, Scriptability and Filters Highlight KOffice
  Beta Release for Linux and Other UNIXes</strong></p>
  <p>April 25, 2002 (The INTERNET).
  The <a href="http://www.kde.org/">KDE Project</a> today announced the
  immediate release of
  <a href="http://www.koffice.org/">KOffice</a> 1.2beta1, the first preview
  release for KOffice 1.2,
  <a href="http://developer.kde.org/development-versions/koffice-1.2-release-plan.html">scheduled</a>
  for release this September.
  KOffice is an integrated office suite for KDE which utilizes free and
  open standards for its document formats, component communication and
  component embedding.
  This release is principally a public testing and developer solicitation
  release (more help is welcome!).
</p>
<p>
  This release
<!--  , which is available in
  <a href="http://i18n.kde.org/teams/distributed.html"><strong>__</strong></a>
  languages,
-->
  includes
  a frame-based, full-featured word processor
    (<a href="http://www.koffice.org/kword/">KWord</a>);
  a presentation application;
    (<a href="http://www.koffice.org/kpresenter/">KPresenter</a>);
  a spreadsheet application;
    (<a href="http://www.koffice.org/kspread/">KSpread</a>);
  a flowchart application; 
    (<a href="http://www.thekompany.com/projects/kivio/">Kivio</a>);
  business quality reporting software;
    (<a href="http://www.thekompany.com/projects/kugar/">Kugar</a>);
  and two vector-drawing applications (<em>alpha</em>)
    (<a href="http://www.koffice.org/kontour/">Kontour</a> and
     <a href="http://www.koffice.org/karbon/">Karbon14</a>).
  Additionally, KOffice includes robust embeddable charts
    (<a href="http://www.koffice.org/kchart/">KChart</a>)
  and formulas
    (<a href="http://www.koffice.org/kformula/">KFormula</a>)
  as well as a built-in thesaurus (KThesaurus)
  and numerous import and export
    <a href="http://www.koffice.org/filters/">filters</a>.
  KOffice 1.2beta1 is available only in English; translations are expected
  to have caught up by the next beta release.
</p>
<p>
  KOffice 1.2beta1 complements the release of
  <a href="http://www.kde.org/announcements/announce-3.0.html">KDE 3.0</a>
  late last month.  KDE is a powerful and easy-to-use Internet-enabled
  desktop for Linux and other UNIXes, and together with KOffice constitutes the
  only Open Source project to provide a complete desktop and productivity
  environment for Linux/UNIX.
</p>
<p>
  KOffice and all its components (including KDE) are available
  <em><strong>for free</strong></em> under Open Source licenses from the KDE
  <a href="http://download.kde.org/unstable/koffice-1.2-beta1/src/">http</a>
  or <a href="http://www.kde.org/ftpmirrors.html">ftp</a> mirrors.
<!--
  and can also be obtained on
  <a href="http://www.kde.org/cdrom.html">CD-ROM</a>.
-->
</p>
<h4>
  Principal Improvements
</h4>
<p>
  The principal improvements over KOffice 1.1.1 are as follows:
</p>
    <u>General</u>.
    <ol type="disc">
      <li>
        <em>WYSIWYG</em>.
        KWord, KPresenter and the formula objects have received an
        overhaul in the presentation:  text layout and painting have
        been redesigned around the popular and intuitive WYSIWYG (What
        You See Is What You Get) design concept.
      </li>
      <li>
        <em>SVG Support</em>.  KOffice components can now handle many
        SVG images (animation is not yet supported).
      </li>
      <li>
        <em>DCOP (Remote Control)</em>.  All KOffice components have a
        greatly enhanced DCOP scriptability.  For example, DCOP can be
        used to insert or reformat text in KWord and KPresenter.
      </li>
      <li>
        <em>Spell checking</em>.
        KPresenter and KSpread now have a spell checker.
      </li>
      <li>
        <em>Thesaurus</em>.
        KThesaurus is a new KOffice component.  It is a thesaurus which
        can also be used on a stand-alone basis as a frontend to a local
        installation of WordNet.
      </li>
      <li>
        <em>Word Completion</em>.
        KWord and KPresenter offer a word completion feature.  By using
        a key shortcut, these office applications will try to complete
        the word using a word-list, consisting of the words in the current
        document or compiled from another document.
      </li>
      <li>
        <em>File Format</em>.  KOffice has switched to zip (instead of
        tar and gzip) for archiving/compressing its native file
        format and to using "relative paths" for objects included in
        the archive (such as images or embedded components).  This provides
        greatly improved document compatability with other Open Source
        office suites, while enhancing performance.  For backwards
        compatability, KOffice 1.2 will support saving in the KOffice
        1.1 format, and KOffice 1.1 users can download a utility to convert
        from the KOffice 1.2 to the KOffice 1.1 format.
      </li>
      <li>
        <em>Bi-Di</em>.  KWord and KPresenter now feature full support for
        reading and writing bi-directional text, such as Arabic and Hebrew
        (<a href="http://www.koffice.org/kword/pics/kword-bidi.png">screenshot</a>).
      </li>
      <li>
        <em>Auto-hide Cursor</em>.  Both KWord and KPresenter now hide
        the cursor when the mouse has been idle for some time.
      </li>
    </ol>
  <p />
    <u>KWord (Word Processor)</u>.
    <ol type="disc">
      <li>
        <em>Image handling</em>.  You can replace the image in a frame (rather
        than having to create a new frame to replace an image).
      </li>
      <li>
        <em>Tables</em>.  Table borders have been properly implemented.
        The sizing of variable width table cells has been greatly improved.
      </li>
      <li>
        <em>Frames</em>.
        You can now choose where to inline a new frame.  Frames now have a
        "z-order", so they can be lowered and raised.  Layered frames are
        currently opaque.
      </li>
      <li>
        <em>Text</em>.
        KWord now supports double underline, text shadow, soft hyphens,
        non-breaking spaces and a text background color.  In addition,
        comments can be added to text.
      </li>
      <li>
        <em>Filters</em>.
        KWord has a number of new import/export filters for enhanced
        compatibility with other office suites.
        <ul type="circle">
          <li>
            The new export/import filters are AbiWord (substantial support),
            PalmDoc (full support), Unicode or plain text (full support),
            WML (limited support) and Lotus AmiPro (limited support).
          </li>
          <li>
            The new import filters (with limited support) are MSWrite and
            WordPerfect.
          </li>
          <li>
            The new export filter is SGML (substantial support).
          </li>
          <li>
            HTML export/import has been greatly enhanced, though for this
            release HTML tables are ignored.  Latex export has also
            greatly improved.
          </li>
          <li>
            <a href="http://www.w3.org/Style/XSL/">XSLT</a> support for
            mapping to other XML-based office formats.
          </li>
        </ul>
      </li>
      <li>
        <em>Shortcuts</em>.
        You can now assign a style to a key shortcut.  New shortcuts
        have been added for non-breakable spaces and soft hyphens.
        A triple-click now selects a paragraph.  The
        <code>PageUp</code>/<code>PageDown</code> keys now default to
        moving only the scrollbars, not the cursor.
      </li>
      <li>
        <em>Miscellaneous</em>.
        KWord now supports hyperlinks (an Internet, email or file link).
        The handling of tabs in the ruler has been improved.
      </li>
    </ol>
  <p />
    <u>KPresenter (Presentation Tool)</u>.
    <ol type="disc">
      <li>
        <em>Sound</em>.
        KPresenter has become a multimedia application with the addition
        of sound support.
      </li>
      <li>
        <em>New tools</em>.
        A set of new tools for creating professional presentations:  freehand,
        polyline, quadric bezier curve, cubic bezier curve and
        convex/concave polygon.  A new "Configure Image" dialog supports a
        number of operations on images, such as flip/mirror, color depth,
        RGB to BGR conversion and brightness control.
      <li>
      </li>
        <em>Page views</em>.  A new thumbnail view of each page in the
        presentation is now displayed in the sidebar, and a larger view of
        the current page is displayed _____.
      </li>
      <li>
        <em>Note bar</em>.
        A new notebar allows you to add comments to each page of a
        presentation.
      </li>
      <li>
        <em>Zooming</em>.
        KPresenter now has zooming support.  Besides the standard
        percentage zoom, you can zoom to a region selected with the mouse.
      </li>
      <li>
        <em>Layout</em>.
        Improved page layout, so changes in one page no longer cause other
        pages to misalign.  The position and size of an object can now be
        set to fit on the page.  A grid system has been implemented.
      </li>
      <li>
        <em>Transition effect</em>.
        New transition effects include Blinds, Box In/Out, Checkboard,
        Cover, Uncover, Dissolve, Random and more.
      </li>
      <li>
        <em>Styles</em>.
        KPresenter now supports styles for text and paragraph
        formatting.
      </li>
      <li>
        <em>Miscellaneous</em>.
        KPresenter now has a useful status bar.  The undo/redo
        functionality was extended to include page insertion,
        deletion, pasting and duplication.  The search and replace functions
        work over all pages.  KPresenter has new "guide lines" and "guide
        points" for helping to layout objects on the page.  It can also
        report the duration of a slide-show presentation.
      </li>
    </ol>
  <p />
    <u>KSpread (Spreadsheet)</u>.
    <ol type="disc">
      <li>
        <em>Columns/rows</em>.
        KSpread can now handle over 32,000 rows and
        over 32,000 columns.
      </li>
      <li>
        <em>Filters</em>.
        KSpread has a new dBASE import filter.
      </li>
      <li>
        <em>Functions</em>.
        Function names are now case-insensitive.  The
        formula editor has a new "Related Function" feature.
        Thirty-seven new built-in functions have been added:
        integer/boolean/text conversion functions, 7 new math
        functions, 5 new text functions, 4 new date/time functions, 4 new
        financial functions (including a <code>EURO</code> function for
        converting between the Euro and other currencies), and 20 new
        statistical functions.
      </li>
    </ol>
  <p />
    <u>Karbon14</u>.
        Karbon14 is a new vector drawing application, which, while still
        immature, is being released in an <em>alpha</em> state in this
        release.  Its current features include: basic path based shapes;
        basic affine transformations; anti-aliased rendering with transparency;
        Illustrator file import; Encapsulated PostScript (EPS) import
        and export; and SVG export.
<p />
<p>
  A more complete
  <a href="http://www.koffice.org/announcements/changelog-1.2beta1.php">list
  of changes</a> and <a href="http://www.koffice.org/releases/">notes about
  the release</a> are available at the KOffice
  <a href="http://www.koffice.org/">web site</a>.
</p>
<h4>
  Installing KOffice 1.2beta1 Binary Packages
</h4>
<p>
  <u>Binary Packages</u>.
  Some Linux/UNIX OS vendors have kindly provided binary packages of
  KDE 3.0 for some versions of their distribution, and in other cases
  community volunteers have done so.
  Some of these binary packages are available for free download from KDE's
  <a href="http://download.kde.org/unstable/koffice-1.2-beta1/">http</a> or
  <a href="http://www.kde.org/ftpmirrors.html">ftp</a> mirrors.
  Additional binary packages, as well as updates to the packages now
  available, may become available over the coming weeks.
</p>
<p>
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
<p>
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
<p>
  <a name="package_locations"><u>Package Locations</u></a>.
  At the time of this release, pre-compiled packages are available for:
</p>
<ul>
<!--
  <li><a href="http://www.caldera.com/">Caldera Systems OpenLinux</a> (<a href="http://download.kde.org/unstable/koffice-1.2-beta1/Caldera/OpenLinux-3.1/README">README</a>):
  <ul>
    <li>OpenLinux 3.1:  <a href="http://download.kde.org/unstable/koffice-1.2-beta1/Caldera/OpenLinux-3.1/RPMS/kde2.2.1/koffice1.2beta1/">Intel i386 - kdelibs 2.2.1</a></li>
  </ul></li>
-->
  <li><a href="http://www.conectiva.com/">Conectiva Linux</a> (<a href="http://download.kde.org/unstable/koffice-1.2-beta1/Conectiva/README">README</a>)
  <ul>
    <li>
      8.0:  <a href="http://download.kde.org/unstable/koffice-1.2-beta1/Conectiva/CL_8/RPMS/">Intel i386</a>
    </li>
    <li>
      7.0:  <a href="http://download.kde.org/unstable/koffice-1.2-beta1/Conectiva/CL_7/RPMS/">Intel i386</a>
    </li>
  </ul>
  </li>
  <li><a href="http://www.linux-mandrake.com/en/">Mandrake Linux</a>
  <ul>
    <li>8.2:  <a href="http://download.kde.org/unstable/koffice-1.2-beta1/Mandrake/8.2/">Intel i586</a></li>
    <li>8.1:  <a href="http://download.kde.org/unstable/koffice-1.2-beta1/Mandrake/8.1/">Intel i586</a></li>
    <li>8.0:  <a href="http://download.kde.org/unstable/koffice-1.2-beta1/Mandrake/8.0/">Intel i586</a></li>
  </ul>
  </li>
<!--
  <li><a href="http://www.redhat.com/">RedHat Linux</a>:
  <ul>
    <li>7.2:  <a href="http://download.kde.org/unstable/koffice-1.2-beta1/RedHat/7.2/i386/">Intel i386</a>, <a href="http://download.kde.org/stable/koffice-1.2beta1/RedHat/7.2/ia64/">HP/Intel IA-64</a> and <a href="http://download.kde.org/stable/koffice-1.2beta1/RedHat/7.2/alpha/">Compaq Alpha</a> (see also the <a href="http://download.kde.org/stable/koffice-1.2beta1/RedHat/7.2/noarch/">noarch</a> directory)</li>
  </ul></li>
-->
  <li><a href="http://www.suse.com/">SuSE Linux</a>:
  <ul>
    <li>8.0:  <a href="http://download.kde.org/unstable/koffice-1.2-beta1/SuSE/i386/8.0/">Intel i386</a></li>
    <li>7.3:  <a href="http://download.kde.org/unstable/koffice-1.2-beta1/SuSE/i386/7.3/">Intel i386</a>, <a href="http://download.kde.org/stable/koffice-1.2beta1/SuSE/ppc/7.3/">PowerPC</a> and <a href="http://download.kde.org/stable/koffice-1.2beta1/SuSE/sparc/7.3/">Sun Sparc</a></li>
    <li>7.2:  <a href="http://download.kde.org/unstable/koffice-1.2-beta1/SuSE/i386/7.2/">Intel i386</a></li>
    <li>7.1:  <a href="http://download.kde.org/unstable/koffice-1.2-beta1/SuSE/i386/7.1/">Intel i386</a></li>
    <li>7.0:  <a href="http://download.kde.org/unstable/koffice-1.2-beta1/SuSE/i386/7.0/">Intel i386</a>, <a href="http://download.kde.org/stable/koffice-1.2beta1/SuSE/ppc/7.0/">PowerPC</a> and <a href="http://download.kde.org/stable/koffice-1.2beta1/SuSE/s390/7.0/">IBM S390</a></li>
  </ul></li>
<!--
  <li><a href="http://www.tru64unix.compaq.com/">Tru64 Systems</a> (<a href="http://download.kde.org/unstable/koffice-1.2-beta1/Tru64/README.Tru64">README</a>)
  <ul>
    <li>Tru64 4.0d, e, f and g and 5.x:  <a href="http://download.kde.org/unstable/koffice-1.2-beta1/Tru64/">Compaq Alpha</a></li>
  </ul></li>
-->
</ul>
<p>
Please check the servers periodically for pre-compiled packages for other
distributions.  More binary packages will become available over the
coming days and weeks.
</p>
<h4>
  Compiling KOffice 1.2beta1
</h4>
<p>
  <a name="source_code-library_requirements"></a><u>Library
  Requirements</u>.
  KOffice 1.2beta1 requires the following libraries:
</p>
<ul>
  <li>
    kdelibs 3.0, which can be downloaded following the
    <a href="http://www.kde.org/announcements/announce-3.0.html#package_locations">instructions</a>
    at the KDE website (for more information on these kdelibs releases, please
    see the <a href="http://www.kde.org/announcements/announce-3.0.html">KDE
    3.0 press release</a>);
  </li>
  <li>
    Qt-3.0.3, which is available in source code from Trolltech as
    <a href="ftp://ftp.trolltech.com/qt/source/qt-x11-3.0.3.tar.gz">qt-x11-3.0.3.tar.gz</a>;
    and
  </li>
  <li>
    for reading help pages and other KOffice documentation,
    <a href="http://xmlsoft.org/">libxml2</a> &gt;= 2.4.9 and
    <a href="http://xmlsoft.org/XSLT/">libxslt</a> &gt;= 1.0.7.
  </li>
</ul>
<p>
  <u>Compiler Requirements</u>.
  Please note that some components of
  KOffice 1.2beta1 (such as the Quattro Pro import filter
  and <a href="http://www.koffice.org/kchart/">KChart</a>) will not
  compile with older versions of <a href="http://gcc.gnu.org/">gcc/egcs</a>,
  such as egcs-1.1.2 or gcc-2.7.2.  At a minimum gcc-2.95-* is required.
</p>
<p>
  <a name="source_code"></a><u>Source Code/SRPMs</u>.
  The complete source code for KOffice 1.2beta1 is available for free download
  via one of the KDE
  <a href="http://download.kde.org/unstable/koffice-1.2-beta1/src/">http</a>
  or <a href="http://www.kde.org/ftpmirrors.html">ftp</a> mirrors.
  Additionally, source rpms are available for the following distributions:
</p>
<ul>
  <li>
    Conectiva <a href="http://download.kde.org/unstable/koffice-1.2-beta1/Conectiva/CL_7/SRPMS/">7.0</a>, <a href="http://download.kde.org/unstable/koffice-1.2-beta1/Conectiva/CL_8/SRPMS/">8.0</a>
  </li>
  <li>
    Mandrake Linux <a href="http://download.kde.org/unstable/koffice-1.2-beta1/Mandrake/SRPMS/">8.x</a>
  </li>
<!--
  <li>
    <a href="http://download.kde.org/unstable/koffice-1.2-beta1/RedHat/7.2/SRPMS/">RedHat Linux</a>
  </li>
  <li>
    <a href="http://download.kde.org/unstable/koffice-1.2-beta1/SuSE/SRPMS/">SuSE Linux</a>
  </li>
-->
</ul>
<p>
  <u>Further Information</u>.
  For further instructions on compiling and installing KOffice, please consult
  the KOffice <a href="http://www.koffice.org/download/source.php">installation
  instructions</a>.  For
  problems with SRPMs, please contact the person listed in the applicable
  .spec file.
</p>
<h4>
  Corporate KOffice Sponsors
</h4>
<p>
  Besides the valuable and excellent efforts by the
  <a href="http://www.koffice.org/people.php">KOffice developers</a>
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
<p>
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
<p>
  Please visit the KDE family of web sites for the
  <a href="http://www.kde.org/faq.html">KDE FAQ</a>,
  <a href="http://www.kde.org/screenshots/kde3shots.html">screenshots</a>,
  <a href="http://www.koffice.org/">KOffice information</a> and
  <a href="http://developer.kde.org">developer
  information</a>.
  Much more <a href="http://www.kde.org/whatiskde/">information</a>
  about KDE is available from KDE's
  <a href="http://www.kde.org/family.html">family of web sites</a>.
</p>
<hr />
<p>
  <font size="2">
  <em>Release Coordinator</em>:  Thanks to
  <a href="http://people.mandrakesoft.com/~david/">David Faure</a> for
  his excellent services as release coordinator.
  </font>
</p>
<p>
  <font size="2">
  <em>Press Release</em>:  Written by <a href="mailto:pour at kde.org">Andreas
  Pour</a> from the <a href="http://www.kdeleague.org/">KDE League</a>, with the
  invaluable assistance of numerous gifted volunteers from the KDE Project.
  </font>
</p>
<p>
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
<hr />
<table border="0" cellpadding="8" cellspacing="0">
  <tr valign="top">
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
      pour@kdeleague.org<br />
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
</table>
</body>
</html>

<?php
  include("footer.inc");
?>


