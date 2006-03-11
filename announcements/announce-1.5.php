<?php
  $page_title ='KOffice 1.5 Announcement';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

<p align="justify">
  DATELINE MARCH 13, 2006<br />
  FOR IMMEDIATE RELEASE
</p>
<h2>
  KDE Ships New Release of Major Enhancements to Free Integrated Office Suite
</h2>
<p align="justify">
    <strong>OpenDocument as Default File Format, Accessibility, New Project 
    Planning Tool, Professional Color Support in Krita and Final Kexi 1.0 Version Highlight KOffice 
    Release for Linux and Other UNIXes 
    </strong></p> 

  <p align="justify">March 13, 2006 (The INTERNET).
  The <a href="http://www.kde.org/">KDE Project</a> today announced the
  final release of
  <a href="http://www.koffice.org/">KOffice</a> 1.5.</p>

  <p align="justify">
  KOffice is an integrated office suite for KDE which utilizes free and
  open standards for its document formats, component communication and
  component embedding.
  This release is principally a public testing and developer solicitation
  release. Help is welcome!
</p>
<p align="justify">
    This release includes:
</p>
<ul>
  <li>a frame-based, full-featured word processor
    (<a href="http://www.koffice.org/kword/">KWord</a>);
  </li>
  <li>a spreadsheet application
    (<a href="http://www.koffice.org/kspread/">KSpread</a>);
  </li>
  <li>a presentation application
    (<a href="http://www.koffice.org/kpresenter/">KPresenter</a>);
  </li>
  <li>a flowchart application
    (<a href="http://www.thekompany.com/projects/kivio/">Kivio</a>);
  </li>
  <li>an integrated database application
    (<a href="http://www.koffice.org/kexi/">Kexi</a>);
  </li>
  <li>a pixel based image editing and paint application
    (<a href="http://www.koffice.org/krita/">Krita</a>);
  </li>
  <li>a vector-drawing application
    (<a href="http://www.koffice.org/karbon/">Karbon14</a>).
  </li>
  <li>a technology preview of a new project management application
    (<a href="http://www.koffice.org/kplato/">KPlato</a>).
  </li>
</ul>
<p>
  Additionally, KOffice includes robust embeddable objects:
</p>
<ul>
  <li>business quality reporting software
    (<a href="http://www.thekompany.com/projects/kugar/">Kugar</a>)
  </li>
  <li>full-featured charting engine
    (<a href="http://www.koffice.org/kchart/">KChart</a>)
  </li>
  <li>mathematical formula handling
    (<a href="http://www.koffice.org/kformula/">KFormula</a>)
  </li>
</ul>
<p>
  as well as a built-in thesaurus (KThesaurus)
  and support for many different 
    <a href="http://www.koffice.org/filters/1.5/">file formats</a>.
</p>
<p align="justify">
  KOffice 1.5 is a subproject within KDE, a powerful and easy-to-use Internet-enabled
    desktop for Linux and other UNIXes.  Together, KDE and KOffice constitute the
  only Free Software project to provide a complete desktop and productivity
  environment for Linux/UNIX.
</p>
<p align="justify">
  KOffice and all its components (including KDE) are available
  <em><strong>for free</strong></em> under Open Source licenses from the KDE
  <a href="http://download.kde.org/unstable/koffice-1.5/src/">http and ftp</a> mirrors.
</p>
<h4>
  Principal Improvements
</h4>
<p align="justify">
  The principal improvements over KOffice 1.4 are:
</p>
    <strong>General</strong>:
    <ul type="disc">
      <li>
        <div align="justify">
        <strong>OASIS OpenDocument as the Default File Format</strong>:

<p>
KOffice now uses <a href="http://en.wikipedia.org/wiki/OpenDocument">OASIS OpenDocument</a> as the default file format for the productivity applications KWord, KSpread, and KPresenter.  <i>In the final 1.5 release, the charting application KChart will also use OpenDocument as the default format.</i></p>
<p>
The spreading of the OpenDocument file format is widely regarded as one of the most important developments in the whole IT industry right now. It will give users world-wide the possibility to control their own documents and also ensure that all documents will always be possible to read at any time in the future.
</p>
<p>
KOffice was the first office suite that announced support for OpenDocument and now the second to announce it as the default file format after OpenOffice.org.  This makes KOffice a member of a very select group and will lead to new deployment opportunities.  Great care has been taken to ensure interoperability with other office software that also use OpenDocument.
</p>
        </div>
      </li>
      <li>
        <div align="justify">
        <strong>Enhanced Accessibility for Users with Disabilities</strong>:
<p>
The decision of the Commonwealth of Massachussetts to base its future document format on open standards started a great debate with many different people and organization taking part.  The start of it was Microsofts assertion that programs using the OpenDocument file format could not be used by people with disabilities.
</p>
<p>
The direct outcome of this debate was that OpenOffice.org, KOffice and vendors of other office software started to work hard on rectifying this problem.  This version of KOffice has support for enhanced accessibility through the means of mouseless operation and text-to-speech functionality.
</p>
<p>
It is therefore our hope that KOffice will be possible to use even for users with disabilities, and we are very interested in feedback for this.
</p>
        </div>
      </li>
      <li>
        <div align="justify">
        <strong>Start of a Unified Scripting Approach</strong>:
<p>
This version of KOffice features a start of a unified scripting solution called Kross. Kross provides cross-language support for scripting (thus its name) and at present supports <a href="http://www.python.org/">Python</a> and
<a href="http://www.ruby-lang.org/">Ruby</a>.
</p>
<p>
Kross is easy to include into programs previously lacking scripting abilities, and is included in this version as a technology preview. <i>So far, only Krita and Kexi are enhanced with the Kross engine.</i> We would also like to point out that the API might change in the future and expect Kross to be fully integrated for KOffice version 2.0.
</p>
        </div>
      </li>
      <li>
        <div align="justify">
        <strong>First Major Release of Kexi (1.0)</strong>:
<p>
KOffice 1.5 contains the much expected final 1.0 version of Kexi - data 
management application that is the KOffice counterpart to MS Access or 
FileMaker. It is designed from the ground up as a standard KDE database 
application.
</p>
<p>
Using Kexi, a new database project can be set up in less than one minute as a 
single efficient file, without a need for administering servers. When needed, 
MySQL server can be used for storage or existing project can be imported from 
MySQL server of MS Access file. The final version focuses on the data 
exchangeability and server support.
</p>
        </div>
      </li>
      <li>
        <div align="justify">
        <strong>Technology Preview of a New Project Management and Planning Application: KPlato</strong>:
<p>
KOffice 1.5 is the first official release to include KPlato. KPlato is a project management application that lets the user control project schedules and resource use. It is included in KOffice 1.5 as a technology preview and full functionality is expected for version 2.0.
</p>
<p>
With this release, KPlato already offers various charts (gantt, pert), scheduling capabilities, calendars, resources, tasks and subtasks, detecting critical paths and resources as well as generating a work breakdown structure. KPlato can also be embedded into other KOffice applications.
</p>
<p>
The KPlato team is also involved in the <a href="http://www.opmef.org">OPMEF project</a> (Open Project Management Exchange Format) which aims at creating a standard file format for project management applications. People from other projects such as <a href="http://www.taskjuggler.org">TaskJuggler</a> and various individuals are also involved. You are welcome to <a href="http://www.opmef.org/contribute/">join</a>, too.
</p>
<p>
For a list of features supported by KPlato, see
 <a href="http://www.koffice.org/announcements/changelog-1.5.php">the changelog</a>.
</p>
        </div>
      </li>
    </ul>
  <p />
    <strong>Common (All Applications)</strong>:
    <ul type="disc">
      <li>
        <div align="justify">
         a new common startup dialog with better usability than the old one from KOffice 1.4 and before.
        </div>
      </li>
      <li>
        <div align="justify">
	 a set of common modifiers (shift, meta, ctrl) for scaling, dragging and similar.
        </div>
      </li>
      <li>
        <div align="justify">
	 accessibility improvements include enhanced keyboard access (mouseless operation) and Text-to-Speech capabilities. See the handbooks for further details.
        </div>
      </li>
    </ul>
  <p />
    <strong>KWord (Word Processor)</strong>:
    <ul type="disc">
      <li>
        <div align="justify">
         OpenDocument is now the default file format.
        </div>
      </li>
      <li>
        <div align="justify">
         new internals that will remove most of the problems with tables from KOffice 1.4.
        </div>
      </li>
    </ul>
  <p />
    <strong>KSpread (Spreadsheet)</strong>:
    <ul type="disc">
      <li>
        <div align="justify">
         OpenDocument is now the default file format
        </div>
      </li>
      <li>
        <div align="justify">
        support for non-contiguous selections
        </div>
      </li>
      <li>
        <div align="justify">
        a new faster and better formula engine
        </div>
      </li>
      <li>
        <div align="justify">
        a much improved Microsoft Excel import filter.
        </div>
      </li>
    </ul>
  <p />
    <strong>KPresenter (Presentation Tool)</strong>:
    <ul type="disc">
      <li>
        <div align="justify">
        OpenDocument is now the default file format
        </div>
      </li>
      <li>
        <div align="justify">
        New PowerPoint import filter
        </div>
      </li>
      <li>
        <div align="justify">
        Export slides as images
        </div>
      </li>
      <li>
        <div align="justify">
        automatic guide lines
        </div>
      </li>
      <li>
        <div align="justify">
        autoscroll
        </div>
      </li>
      <li>
        <div align="justify">
        many, many bugfixes.
        </div>
      </li>
    </ul>
  <p />
    <strong>Kivio (Flow-charting application)</strong>:
    <ul type="disc">
      <li>
        <div align="justify">
         Automatic guidelines
        </div>
      </li>
      <li>
        <div align="justify">
         New dockers, shared with Krita and Karbon (now called palettes)
        </div>
      </li>
      <li>
        <div align="justify">
         New object list that can be used to mark objects on the page
        </div>
      </li>
      <li>
        <div align="justify">
         New stencils for ER diagrams
        </div>
      </li>
    </ul>
  <p />
    <strong>Kexi (Database application)</strong>:
    <ul type="disc">
      <li>
        <div align="justify">
        Data-aware forms, more widget types and embedded images
        </div>
      </li>
      <li>
        <div align="justify">
        Import data from MS Access projects
        (<a href="http://www.koffice.org/filters/1.5/kexi/mdb.php">packaged
        separately</a>)
        </div>
      </li>
      <li>
        <div align="justify">
        Much improved GUI for database connectivity (MySQL)
        </div>
      </li>
      <li>
        <div align="justify">
        Much improved Project Import Wizard
        </div>
      </li>
      <li>
        <div align="justify">
    	Scripting using Kross in Python and Ruby. (beta). Kross is a cross-language
        component that makes it easy to add extensive scripting capabilities to KDE
        applications.
        </div>
      </li>
      <li>
        <div align="justify">
         Simple printouts
        </div>
      </li>
    </ul>
  <p />
    <strong>Krita (Pixel based graphics editor)</strong>:
    <ul type="disc">
      <li>
        <div align="justify">
	8 and 16 bit grayscale, CMYK and RGB colormodels, 16 and 32 bit float 
	RGB colormodels, watercolor colormodel, 16 bit L*a*b colormodel, 
	32 bit float LMS colormodel. Many colormodels fully support 
	colormanagement using lcms.
        </div>
      </li>
      <li>
        <div align="justify">
	Group, object and adjustment layers and a new layerbox with thumbnails and tooltips
        </div>
      </li>
      <li>
        <div align="justify">
    	Scripting using Kross in Python and Ruby.
        </div>
      </li>
      <li>
        <div align="justify">
	Histograms
        </div>
      </li>
      <li>
        <div align="justify">
	Creating and saving of brushes and patterns
        </div>
      </li>
      <li>
        <div align="justify">
	Show image in center of window
        </div>
      </li>
      <li>
        <div align="justify">
	Show a grid
        </div>
      </li>
      <li>
        <div align="justify">
	OpenGL mode that speeds up certain operations a lot.
        </div>
      </li>
      <li>
        <div align="justify">
	New filters, e.g. shadow, round corners, wavelet noise reduction, 
	bumpmap, tiles and sobel filter.
        </div>
      </li>
      <li>
        <div align="justify">
	Color adjustment dialog works with most colormodels
        </div>
      </li>
    </ul>
  <p />
    <strong>Karbon (Vector based graphics editor)</strong>:
    <ul type="disc">
      <li>
        <div align="justify">
 	 OASIS file format support (incomplete)
        </div>
      </li>
      <li>
        <div align="justify">
 	 new color selectors
        </div>
      </li>
      <li>
        <div align="justify">
 	 improved selection handling
        </div>
      </li>
      <li>
        <div align="justify">
 	 improved stability and rendering
        </div>
      </li>
      <li>
        <div align="justify">
 	 improved SVG compatibility
        </div>
      </li>
      <li>
        <div align="justify">
 	 Better toolbox
        </div>
      </li>
    </ul>
  <p />
    <strong>KChart (Graph and chart drawing tool)</strong>:
    <ul type="disc">
      <li>
        <div align="justify">
        OpenDocument is now the default file format <i>(not working in the beta)</i>
        </div>
      </li>
      <li>
        <div align="justify">
        new chart type: combined bars and lines <i>(not working in the beta)</i>
        </div>
      </li>
      <li>
        <div align="justify">
        support for first row or column as labels
        </div>
      </li>
      <li>
        <div align="justify">
        support for changing area when charting data from KSpread 
        </div>
      </li>
    </ul>
<p align="justify">
  A more complete
  <a href="http://www.koffice.org/announcements/changelog-1.5.php">list
  of changes</a> is available at the KOffice <a href="http://www.koffice.org/">web site</a>.
</p>
<a name="binary_packages"></a><h4>
  Installing KOffice 1.5 Binary Packages
</h4>
<p align="justify">
  <strong>Binary Packages</strong>:
  Some Linux/UNIX OS vendors have kindly provided binary packages of
  KOffice 1.5 for some versions of their distribution, and in other cases
  community volunteers have done so.
  Some of these binary packages are available for free download from KDE's
  <a href="http://download.kde.org/unstable/koffice-1.5/">http and ftp</a> mirrors.
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
  the <a href="http://www.kde.org/download/packagepolicy.php">KDE Binary Package
  Policy</a> and/or contact your OS vendor.
</p>

<p align="justify">
  <strong>Innovative Testing Facilities with klik</strong>:
  KOffice developers want to make testing as easy as possible for our users.
  Therefore, we offer to you an additional
  method to testdrive KOffice 1.5.0 which doesn't require the replacement
  of the last stable release on your system by current beta packages.</p> 
<p align="justify">
  We teamed up 
  with the <a href="http://klik.atekon.de/">klik</a> 
  developer team, who will provide up to date klik packages for all of KOffice. 
  klik packages may be used without
  installation (they run, similar to Mac OS X "AppDir" bundles, from a self-contained
  directory tree -- but klik compresses the tree into one single file for easier
  handling). klik-bundles work on multiple Linux platforms without disturbing the system's
  native package manager (see also <a href="http://klik.atekon.de/wiki/index.php/User's_FAQ">klik User's FAQ</a>).
  A Wiki holds details about <a href="http://klik.atekon.de/wiki/index.php/KOffice-1.5.0_DistroTable">KOffice
  klik bundles and supported distros</a>.
</p>

<p align="justify">
  <strong>Library Requirements / Options</strong>:
  The library requirements for a particular binary package vary with the
  system on which the package was compiled.  Please bear in mind that
  some binary packages may require a newer version of Qt and other libraries
  than was shipped with the system (e.g., LinuxDistro X.Y
  may have shipped with Qt-3.3.0 but the packages below may require
  Qt-3.3.2).  For general library requirements for KDE, please see the text at
  <a href="#source_code-library_requirements">Source Code - Library
  Requirements</a> below.
</p>
<p align="justify">
  <a name="package_locations"><strong>Package Locations</strong></a>:
  At the time of this release, pre-compiled packages are available for:
</p>

<ul>
  <li><a href="http://download.kde.org/unstable/koffice-1.5/SuSE/">SuSE Linux 9.3 and 10.0</a></li>
  <li><a href="http://kubuntu.org/announcements/koffice-1.5.php">Kubuntu</a></li>
  <li><a href="http://pkg-kde.alioth.debian.org/koffice-1.5-sarge/">Debian Sarge </a></li>
  <li><a href="http://pkg-kde.alioth.debian.org/koffice-1.5/">Debian Sid </a></li>
</ul>

<p align="justify">
  <a name="windows_version"><strong>MS Windows Version</strong></a>: Kexi installation package from OpenOffice Polska is available for <a href="http://www.kexi.pl/wiki/index.php/Kexi_for_MS_Windows">MS Windows</a>.
</p>

<p align="justify">
Please check the servers periodically for pre-compiled packages for other
distributions. More binary packages might become available over the
coming days and weeks.
</p>
<a name="compiling"></a><h4>
  Compiling KOffice 1.5
</h4>
<p align="justify">
  <a name="source_code-library_requirements"></a><strong>Library
  Requirements</strong>:
  KOffice 1.5 requires the following libraries:
</p>
<ul>
  <li>
    <div align="justify">
    kdelibs 3.3, 3.4 or 3.5, which can be downloaded following the
    <a href="http://www.kde.org/info/3.5.php">instructions</a>
    at the KDE website (for more information on these kdelibs releases, please
    see the <a href="http://www.kde.org/announcements/announce-3.5.php">KDE
    3.5 press release</a>);
    </div>
  </li>
  <li>
    <div align="justify">
    Qt-3.3, which is available in source code from Trolltech as
    <a href="ftp://ftp.trolltech.com/qt/source/qt-x11-free-3.3.0.tar.gz">qt-x11-free-3.3.0.tar.gz</a>
    (<a href="ftp://ftp.trolltech.com/qt/source/qt-x11-free-3.3.5.tar.gz">qt-x11-free-3.3.5.tar.gz</a>
    is recommended);
    and
    </div>
  </li>
  <li>
    <div align="justify">
    for reading help pages and other KOffice documentation,
    <a href="http://xmlsoft.org/">libxml2</a> &gt;= 2.4.9 and
    <a href="http://xmlsoft.org/XSLT/">libxslt</a> &gt;= 1.0.7.
    </div>
  </li>
</ul>
<p align="justify">
  <strong>Compiler Requirements</strong>:
  Please note that KOffice 1.5 will not
  compile with older versions of <a href="http://gcc.gnu.org/">gcc/egcs</a>,
  such as egcs-1.1.2 or gcc-2.7.2.  At a minimum gcc-2.95-* is required.
</p>
<p align="justify">
  <a name="source_code"></a><strong>Source Code</strong>:
  The complete source code for KOffice 1.5 is available for free download
  via one of the KDE
  <a href="http://download.kde.org/unstable/koffice-1.5/src/">http</a>
  or <a href="http://www.kde.org/ftpmirrors.html">ftp</a> mirrors.
  <!--Additionally, source rpms are available for the following distributions:-->
</p>
<!-- INCLUDE PHP FILE HERE -->
<p align="justify">
  <strong>Further Information</strong>:
  For further instructions on compiling and installing KOffice, please consult
  the KOffice <a href="http://www.koffice.org/download/source.php">installation
  instructions</a>.  For
  problems with SRPMs, please contact the person listed in the applicable
  .spec file.
</p>
<h4>
  Corporate KOffice Sponsors
</h4>
<p align="justify">
  Besides the valuable and excellent efforts by the
  <a href="http://www.koffice.org/people.php">KOffice developers</a>
  themselves, significant support for KOffice development has been provided by
  <a href="http://www.mandrakesoft.com/">MandrakeSoft</a> (which sponsors
  KOffice developer Laurent Montel),
  <a href="http://www.trolltech.com/">Trolltech</a> (which sponsors
  KOffice developer David Faure),
  <a href="http://www.thekompany.com/">theKompany.com</a> (which has
  contributed Kivio and Kugar to KOffice),
  <a href="http://www.klaralvdalens-datakonsult.se/">Klar&auml;lvdalens
  Datakonsult AB</a> (which has contributed KChart to KOffice),
  <a href="http://www.openoffice.com.pl/en/">OpenOffice Polska</a> which employs Kexi
    developer Jaros&#322;aw Staniek and sponsored
    <a href="http://wiki.kde.org/tiki-index.php?page=KDElibs+for+win32">KDElibs for win32</a>
    project which enabled porting KOffice applications to MS Windows.
  In addition, <a href="http://www.kde.org/donations.html">individual
  sponsors</a> (<a href="http://www.kde.org/support/">donate</a>),
  provide significant support for KDE and KOffice. Thanks!
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
  <a href="http://www.kde.org/info/faq.php">KDE FAQ</a>,
  <a href="http://www.kde.org/announcements/visualguide-3.5.php">screenshots</a>,
  <a href="http://www.koffice.org/">KOffice information</a> and
  <a href="http://developer.kde.org/documentation/">developer
  information</a>.
  Much more <a href="http://www.kde.org/whatiskde/">information</a>
  about KDE is available from KDE's
  <a href="http://www.kde.org/family/">family of web sites</a>.
</p>
<hr />
<p align="justify">
  <font size="2">
  <em>Press Release</em>:  Written by <a href="mailto:inge AT lysator DOT liu DOT se">Inge Wallin</a>.
<!--  [Translated into _____________ by ______________ .] -->
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
<hr />
<h2>Press Contacts</h2>
<table cellpadding="10"><tr valign="top">
<td>

<b>Africa</b><br />
Uwe Thiem<br />
P.P.Box 30955<br />
Windhoek<br />
Namibia<br />
Phone: +264 - 61 - 24 92 49<br />
<a href="&#109;a&#105;l&#116;o:&#105;&#110;fo-&#0097;&#0102;r&#105;&#99;a&#x40;k&#100;e.&#111;&#x72;g">info-africa kde.org</a><br />
</td>

<td>
<b>Asia</b><br />
Sirtaj S. Kang <br />
C-324 Defence Colony <br />
New Delhi <br />
India 110024 <br />
Phone: +91-981807-8372 <br />
<a href="ma&#0105;&#108;to&#00058;inf&#00111;-&#97;&#115;&#x69;a&#x40;kde.or&#x67;">info-asia kde.org</a>
</td>

</tr>
<tr valign="top">

<td>
<b>Europe</b><br />
Inge Wallin<br />
Adamstorpsvägen 3<br />
SE-590 71 Ljungsbro<br />
Sweden<br />
Phone: +46-13-290853<br />
Fax: +46-13-214700<br />
<a href="m&#x61;il&#0116;o&#x3a;i&#x6e;fo-&#00101;&#00117;rope&#64;k&#x64;&#x65;&#00046;o&#x72;&#00103;">info-europe kde.org</a>
</td>

<td>
<b>North America</b><br />
George Staikos <br />
889 Bay St. #205 <br />
Toronto, ON, M5S 3K5 <br />
Canada<br />
Phone: (416)-925-4030 <br />
<a href="&#109;ai&#x6c;&#x74;&#x6f;&#0058;i&#x6e;&#0102;o&#0045;no&#0114;t&#104;&#0097;m&#x65;&#x72;i&#x63;&#x61;&#x40;k&#x64;e&#46;&#0111;&#x72;&#x67;">info-northamerica kde.org</a><br />
</td>

</tr>

<tr>
<td>
<b>Oceania</b><br />
Hamish Rodda<br />
11 Eucalyptus Road<br />
Eltham VIC 3095<br />
Australia<br />
Phone: (+61)402 346684<br />
<a href="&#109;&#x61;&#x69;&#x6c;&#x74;o:&#105;&#x6e;fo&#45;&#x6f;c&#101;&#x61;&#110;ia&#064;kde&#00046;org">info-oceania kde.org</a><br />
</td>

<td>
<b>South America</b><br />
Helio Chissini de Castro<br />
R. Jos&eacute; de Alencar 120, apto 1906<br />
Curitiba, PR 80050-240<br />
Brazil<br />
Phone: +55(41)262-0782 / +55(41)360-2670<br />
<a href="ma&#105;&#x6c;&#116;&#x6f;&#x3a;&#0105;&#110;&#102;&#x6f;-&#00115;&#111;ut&#104;&#97;&#x6d;e&#0114;&#x69;ca&#0064;&#107;d&#x65;.&#111;r&#x67;">info-southamerica kde.org</a><br />
</td>

</tr></table>

<?php
  include("footer.inc");
?>