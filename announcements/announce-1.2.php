<?php
  $page_title ='KOffice 1.2 Announcement';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>
<p>
  DATELINE SEPTEMBER 10, 2002<br />
  FOR IMMEDIATE RELEASE
</p>
<h2>
  KDE Ships Free Integrated Office Suite
</h2>
<p align="justify"> 
  <strong>
  Advanced Thesaurus, Scriptability, Component Embedding,
  PDF Export, Filters, and Unicode / BiDi Support
  Highlight Stable KOffice Release for Linux and Other
  UNIXes</strong>
</p>
<p align="justify">
  September 10, 2002 (The INTERNET).
  The <a href="http://www.kde.org/">KDE Project</a> today announced the
  immediate release of <a href="http://www.koffice.org/">KOffice</a> 1.2,
  the third major release of KDE's <em>free</em>, integrated office suite.
  KOffice utilizes free and open standards for its document formats,
  component communication and component embedding, and provides a variety of
  filters to interoperate with other popular office suites.
</p>
<p align="justify">
  "This new version of KOffice features an incredible number of improvements
  over KOffice 1.1", explained
  <a href="http://people.mandrakesoft.com/~david/">David Faure</a>,
  a KOffice developer and release coordinator.  "KWord
  and KPresenter, for instance, provide WYSIWYG on-screen display,
  bi-directional text editing and spell-checking.  KWord has an advanced
  English thesaurus based on WordNet, mail merge, footnotes and more.
  KSpread improvements include powerful new database connectivity, sorting and
  printing options.  Kugar has a new report template designer.  Filters
  have improved greatly.  Overall, I think users will be very, very pleased
  with this upgrade."
</p>
<p align="justify">
  "KOffice has achieved a high level of integration with the rest of KDE and
  its technologies", added Andreas Pour, Chairman of the
  <a href="http://www.kdeleague.org/">KDE League</a>.
  "With the advanced KDE printing system,
  users can easily generate high-quality, cross-platform PDF documents.
  In addition, the file manager Konqueror can now embed a KOffice document
  viewer for quick browsing, and can also display thumbnail previews of
  KOffice documents.  With KDE's DCOP scripting technology, KOffice
  documents can be created or edited using scripts or other applications."
</p>
<p align="justify">
  This release, available in
  <a href="http://i18n.kde.org/teams/index.php?action=distributed"><strong>37</strong></a>
  languages, includes
  a frame-based, full-featured word processor
    (<a href="http://www.koffice.org/kword/">KWord</a>);
  a presentation application
    (<a href="http://www.koffice.org/kpresenter/">KPresenter</a>);
  a spreadsheet application
    (<a href="http://www.koffice.org/kspread/">KSpread</a>);
  a flowchart application
    (<a href="http://www.thekompany.com/projects/kivio/">Kivio</a>);
  and business reporting software
    (<a href="http://www.thekompany.com/projects/kugar/">Kugar</a>).
  Additionally, KOffice includes robust embeddable charts
    (<a href="http://www.koffice.org/kchart/">KChart</a>)
  and formulas
    (<a href="http://www.koffice.org/kformula/">KFormula</a>)
  as well as a new built-in English thesaurus (KThesaurus)
  and numerous import and export
    <a href="http://www.koffice.org/filters/">filters</a> for document exchange
    with other office suites.
  The vector-drawing application
  <a href="http://www.koffice.org/karbon/">Karbon14</a> is scheduled for its
  inaugural stable release with KOffice 1.3.
</p>
<p align="justify">
  KOffice 1.2 complements the release of
  <a href="http://www.kde.org/announcements/announce-3.0.3.html">KDE 3.0.3</a>
  last month.  KDE, the leading desktop for Linux and other UNIXes, is an
  international, powerful and easy-to-use Internet-enabled desktop.
</p>
<p align="justify">
  KOffice and all its components and requirements (including KDE) are available
  <em><strong>for free</strong></em> under Open Source licenses.  KOffice
  can be freely downloaded from the KDE
  <a href="http://download.kde.org/stable/koffice-1.2/src/">http</a>
  or <a href="http://www.kde.org/ftpmirrors.html">ftp</a> mirrors.
<!--
  and can also be obtained on
  <a href="http://www.kde.org/cdrom.html">CD-ROM</a>.
-->
</p>
<!--                               BEGIN CHANGES                             -->
<h4>
  <a name="principal improvements">Principal Improvements</a>
</h4>
<p align="justify">
  KOffice 1.2 is a stable release which offers a number of important feature
  additions and improvements compared to KOffice 1.1:
</p>
<!--                                                                  -->
<p align="justify">
<!-- ++ -->
<u>Highlights</u>
</p>
  <ol type="disc">
    <li>
      <div align="justify">
        <em>KThesaurus</em>.
        KThesaurus, an English thesaurus based on
        <a href="http://www.cogsci.princeton.edu/~wn/">WordNet</a>, is a
        new KOffice component which can also be used on a stand-alone basis
        (<a href="http://www.danielnaber.de/tmp/art/thesaurus_screen3.png">screenshot</a>).
        WordNet is a lexical reference system
        inspired by current psycholinguistic theories of human lexical memory.
        Thanks to <a href="http://www.princeton.edu/">Princeton
        University</a> and the WordNet team for their productive research
        and for making this excellent tool freely available for KOffice
        and other projects.
      </div>
    </li>
    <li>
      <div align="justify">
        <em><a href="http://www.konqueror.org/">Konqueror</a> Embedding /
        Preview</em>.
        All KOffice components feature a new read-only Konqueror plugin for
        previewing KOffice documents.  In addition, KDE's file manager
        (Konqueror) can now display thumbnail previews of KOffice documents.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>DCOP (Remote control)</em>.
        All KOffice components have a greatly enhanced DCOP scriptability.
        For example, DCOP can be used to insert or reformat text in KWord
        and KPresenter.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Unicode / BiDi</em>.  KWord, KSpread and KPresenter accept
        non-latin1 Unicode fonts.  KWord and KPresenter now feature full
        support for reading and writing bi-directional text, such as
        Arabic and Hebrew
        (<a href="http://www.koffice.org/kword/pics/kword-bidi.png">screenshot</a>,
        <a href="http://www.koffice.org/kword/pics/kword-arabic.png">screenshot</a>).
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Other</em>.  WYSIWYG screen display, database connectivity,
        mail merge, footnotes, sound, template designer, sorting
        and printing highlights are listed below.
      </div>
    </li>
  </ol>
</p>

<p align="justify">
<u>Filters</u>
</p>
  <ol type="disc">
    <li>
        <em>New filters</em>.
        <ul>
          <li>
            <div align="justify">
            All KOffice components are capable of exporting to PDF using KDE's
            printing system.
            </div>
          </li>
          <li>
            <div align="justify">
              KWord has a number of new filters for enhanced compatibility with
              other office suites:  WordPerfect (limited import / export);
              RTF (substantial import);
              Unicode text (substantial import / export);
              WML (limited import / export);
              MSWrite (limited import);
              PalmDoc (substantial import / export);
              Lotus AmiPro (limited import);
              and
              XSLT (limited support for mapping to other XML-based office
              formats).
            </div>
          </li>
          <li>
            <div align="justify">
              KSpread has a new dBASE import filter.
            </div>
          </li>
      </ul>
    </li>
    <li>
      <div align="justify">
        <em>Improved filters</em>.
          KWord has a number of improved filters for enhanced compatibility with
          other office suites, including new image support for AbiWord, HTML and
          :
          AbiWord (import / export);
          RTF (export);
          LaTeX (import / export);
          HTML (import / export - the HTML import engine has been completely
          rewritten);
          and
          plain text (import / export).
    </li>
  </ol>
</p>

<!-- + -->
<p align="justify">
<u>KOffice / General</u>
  <ol type="disc">
    <li>
      <div align="justify">
        <em>WYSIWYG</em>.
        KWord, KPresenter and the formula objects have received an
        overhaul in the presentation:  on-screen text layout and painting have
        been redesigned around the popular and intuitive WYSIWYG (What
        You See Is What You Get) design concept.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Document format</em>.  KOffice has switched to zip (instead of
        tar and gzip) for archiving / compressing its native file
        format and to using "relative paths" for objects included in
        the archive (such as images or embedded components).  This provides
        greatly improved document compatability with other Open Source
        office suites, while enhancing performance.  KOffice 1.1 document
        format support is retained.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>SVG support</em>.  KOffice components can now handle many
        SVG images (animation is not yet supported).
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Word completion</em>.
        KWord and KPresenter offer a word completion feature.  By using
        a key shortcut, these office applications will try to complete
        the word using a word-list, consisting of the words in the current
        document or compiled from another document.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Spell checking</em>.
        KPresenter and KSpread now have a spell checker.
      </div>
    </li>
  </ol>
</p>

<p align="justify">
<u>KWord (Word Processing)</u>
  <ol type="disc">
    <li>
      <div align="justify">
        <em>Mail merge</em>.
         KWord can create multiple documents from a single template, where only
         some fields change. The data can come from an SQL database, or can be
         stored in the document itself.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Footnotes</em>.
        KWord now has footnotes.  Configurable footnote (line) separators
        are included.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Tables and frames</em>.  KWord has improved tables,
        including proper table borders, variable-width table sizing,
        customized table styles and templates, and frames, including
        inline frame positioning, frame layering, frame styles,
        adjustable margins and configurable text flow.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Text handling</em>.
        KWord now supports double underline, text shadow, soft hyphens,
        non-breaking spaces and a text background color, as well as
        commented text and hyperlinks.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Headers / footers</em>.
        KWord allows different formats for both the first and other pages
        as well as for the even and odd pages.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Image handling</em>.
        KWord now permits replacing images in a frame and can load
        KWord 1.0 images.
      </div>
    </li>
  </ol>
</p>

<p align="justify">
<u>KPresenter (Presentations)</u>.
</p>
  <ol type="disc">
    <li>
      <div align="justify">
        <em>Transition effects</em>.
        New KPresenter transition effects include Blinds, Box In / Out,
        Checkboard, Cover, Uncover, Dissolve, Random and others.
        Moreover, sounds can now be included in transitions.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Objects</em>.
        KPresenter supports several new objects for creating professional
        presentations have been added:  freehand, polyline, quadric bezier
        curve, cubic bezier curve and convex / concave polygon.
        New "guide lines" and "guide points" as well as vertical alignment
        help with object layout.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Thumbnail views</em>.
        KPresenter displays thumbnail views of each page in the sidebar.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Styles</em>.
        Styles have been added to KPresenter for text and paragraph formatting.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Comments</em>.
        A new note bar in KPresenter allows you to add comments to each page
        of a presentation.
      </div>
    </li>
  </ol>
</p>

<p align="justify">
<u>KSpread (Spreadsheet)</u>.
</p>
  <ol type="disc">
    <li>
      <div align="justify">
        <em>Data import / database connectivity</em>.
          KSpread can load data directly from an SQL database or read data
          from a text file.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Printing</em>.
        KSpread printing has been greatly enhanced with the capability to
        define ranges for printing; and to repeat specified rows and columns on
        each page (for headings and descriptions).
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Sorting</em>.
        KSpread can now sort up to three rows or columns together; can store
        the sorted results somewhere else, to keep the original data
        intact; and can apply the layout / formatting of the original data
        to the new location, including adding a row header outside the sort
        range at the new location.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Templates</em>.
        KSpread now supports templates.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Functions</em>.
        KSpread has 37 new built-in functions, including Euro conversion
        functions, and now supports "Goal Seek".  KSpread function names
        are now case-insensitive and provide greater compatability with
        Excel functions.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Views</em>.
        KSpread spreadsheets can now have Multiple views, with each view able to
        select or modify different portions of the same sheet independently.
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Sheet layouts</em>.
        KSpread now allows different header and footer formats, as well
        as separate layouts, for each separate sheet in a workbook.
      </div>
    </li>
  </ol>
</p>

<p align="justify">
<u>Kugar (Business Reporting Tool)</u>.
</p>
  <ol type="disc">
    <li>
      <div align="justify">
        <em>GUI report template designer</em>.
        Kugar has a new flexible, WYSIWYG report template designer, which
        among other things can create, load and save report templates for the
        report engine and automatically create report bands (such as headers,
        footers and details).
      </div>
    </li>
    <li>
      <div align="justify">
        <em>Report engine</em>.
        Kugar features a new report engine, with support for
        reports with complicated structures (<em>e.g.</em>, master-detail
        reports) and detail header and footer bands.
      </div>
    </li>
  </ol>
</p>
<!--                             END CHANGES                                 -->

<p align="justify">
  A more detailed
  <a href="http://www.koffice.org/announcements/changelog-1.2.phtml">list
  of changes</a> and <a href="http://www.koffice.org/releases/">notes about
  the release</a> are available at the KOffice
  <a href="http://www.koffice.org/">web site</a>.
</p>
<h4>
  Installing KOffice 1.2 Binary Packages
</h4>
<p align="justify">
  <u>Binary Packages</u>.
  Some Linux / UNIX OS vendors have kindly provided binary packages of
  KOffice 1.2 for some versions of their distribution, and in other cases
  community volunteers have done so.
  Some of these binary packages are available for free download from KDE's
  <a href="http://download.kde.org/stable/koffice-1.2/">http</a> or
  <a href="http://www.kde.org/ftpmirrors.html">ftp</a> mirrors.
  Additional binary packages, as well as updates to the packages now
  available, may become available over the coming weeks.
</p>
<p align="justify">
  <u>Package Responsibility</u>.
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
  than the applicable vendor shipped with the system (e.g., LinuxDistro X.Y
  may have shipped with Qt 3.0.0 but the packages below may require
  Qt 3.0.3).  For general library requirements for KDE, please see the text at
  <a href="#source_code-library_requirements">Source Code - Library
  Requirements</a> below.
</p>
<p align="justify">
  <a name="package_locations"><u>Package Locations</u></a>.
  At the time of this release, pre-compiled packages are available for:
</p>
<ul>
  <li>
    <a href="http://www.conectiva.com/">Conectiva Linux</a>
    (<a href="http://download.kde.org/stable/koffice-1.2/Conectiva/README">README</a>
    /
    <a href="http://download.kde.org/stable/koffice-1.2/Conectiva/LEIAM">LEIAM</a>):
    <ul>
      <li>
        8.0:  <a href="http://download.kde.org/stable/koffice-1.2/Conectiva/conectiva/RPMS.koffice/">Intel i386</a>
      </li>
    </ul>
  </li>
  <p />
  <li>
    <a href="http://www.linux-mandrake.com/en/">Mandrake Linux</a>:
    <ul>
      <li>
        8.2:  <a href="http://download.kde.org/stable/koffice-1.2/Mandrake/8.2/">Intel i586</a> (<a href="http://download.kde.org/stable/koffice-1.2/Mandrake/noarch/">language packs</a>)
      </li>
      <li>
        8.1:  <a href="http://download.kde.org/stable/koffice-1.2/Mandrake/8.1/">Intel i586</a> (<a href="http://download.kde.org/stable/koffice-1.2/Mandrake/noarch/">language packs</a>)
      </li>
    </ul>
  </li>
<!--
  <p />
  <li><a href="http://www.redhat.com/">Red Hat Linux</a>
      (<em>unofficial</em>)
    <ul>
      <li>
        7.3:  <a href="http://download.kde.org/stable/koffice-1.2/RedHat-Inofficial/7.3/RPMS/">Intel i386</a> (<a href="http://download.kde.org/stable/koffice-1.2/RedHat-Inofficial/noarch/">language packs</a>)
      </li>
    </ul>
  </li>
-->

  <p />
  <li>
    <a href="http://www.slackware.com/">Slackware Linux</a>
    (<a href="http://download.kde.org/stable/koffice-1.2/contrib/Slackware/README">README</a>)
    (unofficial contribution):
    <ul>
      <li>
        8.1:  <a href="http://download.kde.org/stable/koffice-1.2/contrib/Slackware/">Intel i386</a> (<a href="http://download.kde.org/stable/koffice-1.2/contrib/Slackware/8.1/kde-i18n/">language packs</a>)
      </li>
    </ul>
  </li>

  <p />
  <li>
    <a href="http://www.suse.com/">SuSE Linux</a>:
    <ul>
      <li>
        8.0:  <a href="http://download.kde.org/stable/koffice-1.2/SuSE/i386/8.0/">Intel i386</a> (<a href="http://download.kde.org/stable/koffice-1.2/SuSE/noarch/">language packs</a>)
      </li>
      <li>
        7.3:  <a href="http://download.kde.org/stable/koffice-1.2/SuSE/i386/7.3/">Intel i386</a> and <a href="http://download.kde.org/stable/koffice-1.2/SuSE/ppc/7.3/">PowerPC</a> (<a href="http://download.kde.org/stable/koffice-1.2/SuSE/noarch/">language packs</a>)
      </li>
      <li>
        7.2:  <a href="http://download.kde.org/stable/koffice-1.2/SuSE/i386/7.2/">Intel i386</a> (<a href="http://download.kde.org/stable/koffice-1.2/SuSE/noarch/">language packs</a>)
      </li>
      <li>
        7.1:  <a href="http://download.kde.org/stable/koffice-1.2/SuSE/i386/7.1/">Intel i386</a> and <a href="http://download.kde.org/stable/koffice-1.2/SuSE/ppc/7.1/">PowerPC</a> (<a href="http://download.kde.org/stable/koffice-1.2/SuSE/noarch/">language packs</a>)
      </li>
      <li>
        7.0:  <a href="http://download.kde.org/stable/koffice-1.2/SuSE/i386/7.0/">Intel i386</a> (<a href="http://download.kde.org/stable/koffice-1.2/SuSE/noarch/">language packs</a>)
      </li>
    </ul>
  </li>

  <p />
  <li>
    <a href="http://www.turbolinux.com/">Turbolinux</a>:
    <ul>
      <li>
        8:  <a href="http://download.kde.org/stable/koffice-1.2/Turbo/8/i586/">Intel i586 (Pentium)</a>
      </li>
      <li>
        7:  <a href="http://download.kde.org/stable/koffice-1.2/Turbo/7/i586/">Intel i586 (Pentium)</a>
      </li>
    </ul>
  </li>
<!--
  <p />
  <li>
    <a href="http://www.tru64unix.compaq.com/">Tru64 Systems</a> (<a href="http://download.kde.org/stable/koffice-1.2/Tru64/README.Tru64">README</a>)
    <ul>
      <li>
        Tru64 4.0d, e, f and g and 5.x:  <a href="http://download.kde.org/stable/koffice-1.2/Tru64/">Compaq Alpha</a>
      </li>
    </ul>
  </li>
-->
</ul>
<p align="justify">
  Binary packages contributed by users rather than the relevant OS vendor
  are located in the
  <a href="http://download.kde.org/stable/koffice-1.2/contrib/">contrib</a>
  directory.  If packages have not been provided for your system and you would
  like to volunteer to build tested packages for others, please notify the
  <a href="http://mail.kde.org/mailman/listinfo/kde-packager">KDE Packager
  mailing list</a>.
</p>
<p align="justify">
  <u>Updates</u>.
  Additional or updated binary packages will likely become available over
  the coming days and weeks; please check the
  <a href="http://download.kde.org/stable/koffice-1.2/">servers</a>
  periodically for updates and pre-compiled packages for other distributions.
</p>
<h4>
  Compiling KOffice 1.2
</h4>
<p align="justify">
  <a name="source_code-library_requirements"></a><u>Library
  Requirements</u>.
  KOffice 1.2 requires the following libraries:
</p>
<ul>
  <li>
    kdelibs 3.0, though kdelibs 3.0.3 is recommended.  Both KDE releases can be
    downloaded following the instructions in the respective press releases
    (<a href="http://www.kde.org/announcements/announce-3.0.html#package_locations">3.0</a>,
    <a href="http://www.kde.org/announcements/announce-3.0.3.html">3.0.3</a>)
    at the KDE website.  For more information on these kdelibs releases, please
    see the <a href="http://www.kde.org/announcements/announce-3.0.html">KDE
    3.0 press release</a>.
  </li>
  <li>
    Qt 3.0.3, which is available in source code from Trolltech as
    <a href="ftp://ftp.trolltech.com/qt/source/qt-x11-3.0.3.tar.gz">qt-x11-3.0.3.tar.gz</a>
    and in binary packages from most OS vendors, or later (Qt 3.0.5 is
    recommended).
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
  KOffice 1.2 (such as the Quattro Pro import filter
  and <a href="http://www.koffice.org/kchart/">KChart</a>) will not
  compile with older versions of <a href="http://gcc.gnu.org/">gcc/egcs</a>,
  such as egcs-1.1.2 or gcc-2.7.2.  At a minimum gcc-2.95-* is required.
</p>
<p align="justify">
  <a name="source_code"></a><u>Source Code / SRPMs</u>.
  The complete source code for KOffice 1.2 is available for free download
  via one of the KDE
  <a href="http://download.kde.org/stable/koffice-1.2/src/">http</a>
  or <a href="http://www.kde.org/ftpmirrors.html">ftp</a> mirrors.
  These source packages have been digitally signed with
  <a href="http://www.gnupg.org/">GnuPG</a> using the David Faure
  PGP Key
  (available from the
  <a href="http://www.koffice.org/signature.phtml">KOffice Signature page</a>
  or public key servers), and their respective MD5 sums are listed on the
  <a href="http://www.koffice.org/releases/1.2-release.phtml">KOffice
  1.2 Info Page</a>.
</p>
<p align="justify">
  Additionally, source rpms are available for the following distributions:
</p>
<ul>
  <li>
    Conectiva <a href="http://download.kde.org/stable/koffice-1.2/Conectiva/SRPMS.koffice/">8.0</a>
  </li>
  <li>
    Mandrake Linux
    <a href="http://download.kde.org/stable/koffice-1.2/Mandrake/SRPMS/">8.2
    / 8.1</a>
  </li>
<!--
  <li>
    RedHat Linux
    <a href="http://download.kde.org/stable/koffice-1.2/RedHat/SRPMS/">7.3</a>
      (<em>unofficial</em>)
  </li>
-->
  <li>
    SuSE Linux
    <a href="http://download.kde.org/stable/koffice-1.2/SuSE/SRPMS/">8.0 /
    7.x</a>
  </li>
  <li>
    Turbolinux
    <a href="http://download.kde.org/stable/koffice-1.2/Turbo/SRPMS/">8 / 7</a>
  </li>
</ul>
<p align="justify">
  <u>Further Information</u>.
  For further instructions on compiling and installing KOffice,
  please consult the KOffice
  <a href="http://www.koffice.org/install-source.phtml">installation
  instructions</a>.  For problems with SRPMs, please contact the person
  listed in the applicable .spec file.
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
  contributed Kivio and Kugar to KOffice), 
  <a href="http://www.klaralvdalens-datakonsult.se/">Klar&auml;lvdalens
  Datakonsult AB</a> (which has contributed KChart to KOffice); and
  <a href="http://www.princeton.edu/">Princeton University</a> (which has
  contributed WordNet to the Open Source communities).  In addition,
  the members of the <a href="http://www.kdeleague.org/">KDE League</a>,
  as well as <a href="http://www.kde.org/donations.html">individual
  sponsors</a> (<a href="http://www.kde.org/support.html">donate</a>),
  provide significant support for KDE and KOffice.  Thanks!
</p>
<h4>
  About KOffice and KDE
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
  <a href="http://developer.kde.org/">developer
  information</a>.
  Much more <a href="http://www.kde.org/whatiskde/">information</a>
  about KDE is available from KDE's
  <a href="http://www.kde.org/family.html">family of web sites</a>.
</p>
<hr noshade="noshade" size="1" width="98%" align="center" />
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
  </font>
</p>
<p align="justify">
  <font size="2">
  <em>Trademarks Notices.</em>

  KDE, K Desktop Environment and KOffice are trademarks of KDE, Inc. (KDE e.V.).

  Adobe Illustrator and PostScript are registered trademarks of Adobe Systems.

  dBASE is a registered trademark of dBASE Inc.

  Corel, Quattro Pro and WordPerfect are registered trademarks of Corel
  Corporation or Corel Corporation Limited.

  Linux is a registered trademark of Linus Torvalds.

  Trolltech and Qt are trademarks of Trolltech AS.

  UNIX is a registered trademark of The Open Group.

  WordNet is a registered trademark of Princeton University.

  All other trademarks and copyrights referred to in this announcement are
  the property of their respective owners.
  </font>
</p>
<hr noshade="noshade" size="1" width="98%" align="center" />
<table border="0" cellpadding="8" cellspacing="0">
  <tr>
    <th colspan="2" align="left">
      Press Contacts:
    </th>
  </tr>
  <tr valign="top">
    <td align="right" nowrap="nowrap">
      United&nbsp;States:
    </td>
    <td nowrap="nowrap">
      Andreas Pour<br />
      KDE League, Inc.<br />
      pour AT kdeleague DOT org<br />
      (1) 917 312 3122
    </td>
  </tr>
  <tr valign="top">
    <td align="right" nowrap="nowrap">
      Europe (French and English):
    </td>
    <td nowrap="nowrap">
      David Faure<br />
      faure AT kde DOT org<br />
      (33) 4 3250 1445
    </td>
  </tr>
  <tr valign="top">
    <td align="right" nowrap="nowrap">
      Europe (German and English):
    </td>
    <td nowrap="nowrap">
      Ralf Nolden<br />
      nolden@kde.org<br />
      (49) 2421 502758
    </td>
  </tr>
  <tr valign="top">
    <td align="right" nowrap="nowrap">
      Europe (English):
    </td>
    <td nowrap="nowrap">
      Jono Bacon<br />
      jono@kde.org
    </td>
  </tr>
  <tr valign="top">
    <td align="right" nowrap="nowrap">
      Southeast Asia (English and Indonesian):
    </td>
    <td nowrap="nowrap">
      Ariya Hidayat<br />
      ariya@kde.org<br />
      (62) 815 8703177
    </td>
  </tr>
</table>

<?php
  include("footer.inc");
?>
