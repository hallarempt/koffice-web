<?php
  $page_title ='KOffice 1.1 announcement';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>
<p>DATELINE AUGUST 28, 2001</p>
<p>FOR IMMEDIATE RELEASE</p>
<h3 align="center">KDE's Free, Integrated Office Suite Available for Linux/Unix</h3>
<p><strong>Leading Linux Desktop Ships Free Stable Release of KOffice</strong></p>
<p>August 28, 2001 (The INTERNET).
The <a href="http://www.kde.org/">KDE
Project</a> today announced the release of
<a href="http://www.koffice.org/">KOffice</a> 1.1.
KOffice is a free, integrated office suite for KDE which utilizes open
standards for component communication and component embedding.
KOffice 1.1 constitutes the most stable and feature-complete release
of KOffice to date.  The KOffice team encourages all users of earlier
KOffice releases to upgrade to KOffice 1.1.
</p>
<p>
"KOffice is undergoing rapid development and its future looks very
bright," stated Eugene Clement, Product Manager for
<a href="http://www.mandrakesoft.com/">Mandrakesoft</a>.
"Currently KOffice
has functionality well-suited for home and SOHO users, who generally
write letters, faxes, memos and similar documents.  As the import
filters for proprietary document formats continue to improve and the
suite's features continue to evolve, we expect that in the near future
KOffice will be ready to meet the needs of all but the most demanding
areas of the enterprise."
</p>
<p>
"With this release the KOffice team has delivered a very stable and complete 
office package," said KDE and <a href="http://www.suse.com/">SuSE</a>
developer <a href="http://www.kde.org/people/waldo.html">Waldo Bastian</a>.
"KOffice
takes full advantage of the new printing support offered by KDE 2.2.  For
example, each KOffice component allows you to email your documents in the
PDF format to your colleagues, or simply to fax them. KOffice is tightly
integrated with the rest of KDE, which makes it friendly on system
resources.  And thanks to the powerful KParts component technology,
it is very flexible and extensible."
</p>
<p>
This release includes the following components:
<a href="#kword">KWord</a>
(a frame-based, full-featured word processor);
<a href="#kpresenter">KPresenter</a>
(a presentation application);
<a href="#kspread">KSpread</a>
(a spreadsheet application);
<a href="#kontour">Kontour</a>
(a vector-drawing application);
<a href="#kivio">Kivio</a>
(a flowchart application);
<a href="#kchart">KChart</a>
(a chart drawing application);
<a href="#kformula">KFormula</a>
(a formula editor); and
<a href="#filters">filters</a>
(for importing documents created by, or exporting documents for use with,
other office suites or office programs).
</p>
<p>
KOffice and all its components are available for free under
Open Source licenses from the KDE
<a href="http://master.kde.org/stable/koffice-1.1/">server</a>
and its <a href="http://www.kde.org/mirrors.html">mirrors</a>.
As a result of the dedicated efforts of hundreds of translators,
KOffice 1.1 is available in 28 languages.
</p>
<p>
More information about KOffice, including
<a href="http://www.koffice.org/releases/1.1-release.php">Release Notes</a>,
a <a href="http://www.koffice.org/announcements/changelog-1.1.php">list of
changes</a> since the KOffice 1.0 release, and a
<a href="http://www.koffice.org/faq/">KOffice FAQ</a>, are
available at the <a href="http://www.koffice.org/">KOffice website</a>.
</p>

<h4>Index</h4>

<ul>
<li><a href="#inbinpack">Installing Binary Packages</a>
  <ul>
   <li><a href="#binlibreq">Library Requirements</a></li>
   <li><a href="#binpackloc">Binary Package Locations</a></li>
  </ul>
</li>
<li><a href="#compile">Downloading and Compiling KOffice</a>
  <ul>
   <li><a href="#Source_Code">Source Packages</a></li>
   <li><a href="#Source_Code-Library_Requirements">Library Requirements</a></li>
   <li><a href="#compilereq">Compiler Requirements</a></li>
   <li><a href="#furinstr">Further Instructions</a></li>
  </ul>
</li>
<li><a href="#appdes">Application Descriptions</a>
  <ul>
   <li><a href="#kword">KWord</a></li>
   <li><a href="#kpresenter">KPresenter</a></li>
   <li><a href="#kspread">KSpread</a></li>
   <li><a href="#kontour">Kontour</a></li>
   <li><a href="#kivio">Kivio</a></li>
   <li><a href="#kchart">KChart</a></li>
   <li><a href="#kformula">KFormula</a></li>
   <li><a href="#filters">filters</a></li>
  </ul>
</li>
<li><a href="#about">About KOffice</a></li>
<li><a href="#sponsers">Corporate KOffice Sponsors</a></li>
<li><a href="#press">Press Contacts</a></li>
</ul>

<h4>Installing Binary Packages</h4>

<p>
<a name="inbinpack"><em><strong>Binary Packages</strong></em>.</a>
Some distributors choose to provide binary packages of KOffice for certain
versions of their distribution.  Some of these binary packages for
KOffice 1.1 will be available for free download under
<a href="http://master.kde.org/stable/koffice-1.1/">http://master.kde.org/stable/koffice-1.1/</a>
or under the equivalent directory at one of the many KDE ftp server
<a href="http://www.kde.org/mirrors.html">mirrors</a>. Please note that the
KDE team is not responsible for these packages as they are provided by third
parties -- typically, but not always, the distributor of the relevant
distribution (if you cannot find a binary package for your distribution,
please read the <a href="http://dot.kde.org/986933826/">KDE Binary Package
Policy</a>).
</p>
<p>
<a name="binlibreq"><em><strong>Library Requirements</strong></em>.</a>
The library requirements for a particular binary package varies with the
system on which the package was compiled.  Please bear in mind that
some binary packages may require a newer version of Qt and/or KDE
than was distributed with the distribution version for which the binary
package is listed below.  For general library requirements for KOffice,
please see the text at <a href="#Source_Code-Library_Requirements">Source Code -
Library Requirements</a>.
</p>
<p>
<a name="binpackloc"><em><strong>Package Locations</strong></em>.</a>
At the time of this release, pre-compiled packages are available for:
</p>
<ul>
 <li><a href="http://www.caldera.com/">Caldera Systems</a> (<a href="http://master.kde.org/stable/koffice-1.1/Caldera/OpenLinux-3.1/README">README</a>)
  <ul>
   <li>OpenLinux-3.1
    <ul>
     <li>kdelibs 2.2:  <a href="http://master.kde.org/stable/koffice-1.1/Caldera/OpenLinux-3.1/RPMS/kde2.2/">Intel x86 (i386)</a></li>
     <li>kdelibs 2.1.2:  <a href="http://master.kde.org/stable/koffice-1.1/Caldera/OpenLinux-3.1/RPMS/kde2.1/">Intel x86 (i386)</a></li>
    </ul>
   </li>
  </ul>
 </li>
 <li><a href="http://www.conectiva.com/">Conectiva Linux</a> (<a href="http://master.kde.org/stable/koffice-1.1/Conectiva/7.0/README">README</a>)
  <ul>
   <li>7.0:  <a href="http://master.kde.org/stable/koffice-1.1/Conectiva/7.0/i386/RPMS.main/">Intel x86 (i386)</a></li>
  </ul>
 </li>
 <li><a href="http://www.debian.org/">Debian GNU/Linux</a> (package "koffice"):
  <ul>
   <li><a href="ftp://ftp.debian.org/">ftp.debian.org</a>:  sid (devel)</li>
   <li><a href="ftp://kde.debian.net/">kde.debian.net</a>:  potato (2.2)</li>
  </ul>
 </li>
 <li><a href="http://www.linux-mandrake.com/en/">Linux Mandrake</a>:
  <ul>
   <li>Cooker: <a href="http://master.kde.org/stable/koffice-1.1/Mandrake/cooker/">Intel x86 (i586)</a></li> 
   <li>8.0:  <a href="http://master.kde.org/stable/koffice-1.1/Mandrake/8.0/">Intel x86 (i586)</a>, <a href="http://master.kde.org/stable/koffice-1.1/Mandrake/ppc/">PowerPC (ppc)</a>; and <a href="http://master.kde.org/stable/koffice-1.1/Mandrake/ia64/">HP/Intel IA-64 (ia64)</a></li>
  </ul>
 </li>
 <li><a href="http://www.redhat.com/">RedHat Linux</a> (<a href="http://master.kde.org/stable/koffice-1.1/RedHat/7.x/README">README</a>):
  <ul>
   <li>7.x:  <a href="http://master.kde.org/stable/koffice-1.1/RedHat/7.x/i386/">Intel x86 (i386)</a>; <a href="http://master.kde.org/stable/koffice-1.1/RedHat/7.x/ia64/">HP/Intel IA-64 (ia64)</a>; <a href="http://master.kde.org/stable/koffice-1.1/RedHat/7.x/alpha/">Alpha (alpha)</a>; and <a href="http://master.kde.org/stable/koffice-1.1/RedHat/7.x/s390/">IBM S390 (s390)</a>; please see the <a href="http://master.kde.org/stable/koffice-1.1/RedHat/7.x/noarch/">noarch</a> directory for common files</li>
  </ul>
 </li>
 <li><a href="http://www.suse.com/">SuSE Linux</a> (<a href="http://master.kde.org/stable/koffice-1.1/SuSE/README">README</a>):
  <ul>
   <li>kdelibs 2.2
    <ul>
     <li>7.2:  <a href="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.2/i386/7.2/">Intel x86 (i386)</a>; and <a href="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.2/ia64/7.2/">HP/Intel IA-64 (ia64)</a>; please see the <a href="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.2/noarch/">noarch</a> directory for common files</li>
     <li>7.1:  <a href="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.2/i386/7.1/">Intel x86 (i386)</a>, <a href="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.2/ppc/7.1/">PowerPC (ppc)</a>; <a href="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.2/axp/7.1/">Alpha (alpha)</a>; and <a href="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.2/sparc/7.1/">Sun Sparc (sparc)</a>; please see the <a href="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.2/noarch/">noarch</a> directory for common files</li>
     <li>7.0:  <a href="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.2/i386/7.0/">Intel x86 (i386)</a>, <a href="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.2/ppc/7.0/">PowerPC (ppc)</a>; and <a href="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.2/s390/7.0/">IBM S390 (s390)</a>; please see the <a href="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.2/noarch/">noarch</a> directory for common files</li>
     <li>6.4:  <a href="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.2/i386/6.4/">Intel x86 (i386)</a>; please see the <a href="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.2/noarch/">noarch</a> directory for common files</li>
    </ul>
   </li>
   <li>kdelibs 2.1.2 and kdesupport 2.1.1
    <ul>
     <li>7.2:  <a href="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.1/i386/7.2/">Intel x86 (i386)</a>; and <a href="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.1/ia64/7.2/">HP/Intel IA-64 (ia64)</a>; please see the <a href="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.1/noarch/">noarch</a> directory for common files</li>
     <li>7.1:  <a href="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.1/i386/7.1/">Intel x86 (i386)</a>, <a href="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.1/ppc/7.1/">PowerPC (ppc)</a>, <a href="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.1/axp/7.1/">Alpha (alpha)</a>; and <a href="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.1/sparc/7.1/">Sun Sparc (sparc)</a>; please see the <a href="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.1/noarch/">noarch</a> directory for common files</li>
     <li>7.0:  <a href="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.1/i386/7.0/">Intel x86 (i386)</a>, <a href="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.1/ppc/7.0/">PowerPC (ppc)</a>; and <a href="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.1/s390/7.0/">IBM S390 (s390)</a>; please see the <a href="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.1/noarch/">noarch</a> directory for common files</li>
     <li>6.4:  <a href="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.1/i386/6.4/">Intel x86 (i386)</a>; please see the <a href="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.1/noarch/">noarch</a> directory for common files</li>
    </ul>
   </li>
  </ul>
 </li>
 <li>Tru64 Systems:  <a href="http://master.kde.org/stable/koffice-1.1/Tru64/">4.0e,f,g, or 5.x</a> (<a href="http://master.kde.org/stable/koffice-1.1/Tru64/README.Tru64">README.Tru64</a>)</li>
</ul>

<p>
Please check the servers periodically for pre-compiled packages for other
distributions.  More binary packages may become available over the
coming days and weeks; in particular,
<a href="http://www.redhat.com/">RedHat</a> packages are expected tomorrow and
<a href="http://www.debian.org/">Debian</a> packages are expected late
this or early next week.
</p>

<h4><a name="compile">Downloading and Compiling KOffice</a></h4>

<p>
<a name="Source_Code"></a><em><strong>Source Packages</strong></em>.
The source packages for KOffice 1.1 are available for free download at
<a href="http://master.kde.org/stable/koffice-1.1/src/">http://master.kde.org/stable/koffice-1.1/src/</a> or in the
equivalent directory at one of the many KDE ftp server
<a href="http://www.kde.org/mirrors.html">mirrors</a>.
</p>
<p>
<a name="Source_Code-Library_Requirements"></a><em><strong>Library
Requirements</strong></em>.
KOffice requires recent versions of Qt and kdelibs, and even more recent
versions are recommended.
</p>
<ul>
<li><em>Required</em>:  KOffice 1.1 requires
<a href="ftp://ftp.trolltech.com/qt/source/qt-x11-2.2.4.tar.gz">qt-x11-2.2.4</a>
or greater, kdesupport-2.1.x (not needed if using KDE 2.2), and
kdelibs-2.1.2 or greater.  The KDE packages are available from the KDE
ftp servers at
<a href="http://master.kde.org/stable/2.1.1/distribution/">http://master.kde.org/stable/2.1.1/distribution/</a>
and <a href="http://master.kde.org/stable/2.1.2/distribution/">http://master.kde.org/stable/2.1.2/distribution/</a>.
Please note, however, that kdelibs-2.1.1 will cause some crashes and
anti-aliased font problems.  Moreover, both kdelibs-2.1.1 and kdelibs-2.1.2
will not properly accept .doc documents in the file selection dialog (see the
<a href="http://www.koffice.org/releases/1.1-release.php">release
notes</a> for a workaround).
<br />&nbsp;<br />For more information on these kdelibs
releases, please see the
<a href="http://www.kde.org/announcements/announce-2.1.1.html">KDE 2.1.1
press release</a> and the
<a href="http://www.kde.org/announcements/announce-2.1.2.html">KDE 2.1.2
press release</a>.
</li>

<li><em>Recommended</em>:  The KOffice team recommends the use of
<a href="ftp://ftp.trolltech.com/pub/qt/source/qt-x11-2.3.1.tar.gz">qt-x11-2.3.1</a>
and kdelibs-2.2.  Kdelibs-2.2 provide a few additional features, such
as improved printing support (kdeprint), a scanner plugin, and proper
recognition of .doc files in the file selector dialog.
KDE 2.2 is available from
<a href="http://www.kde.org/stable/2.2/">http://www.kde.org/stable/2.2/</a>.
Please note that the kdesupport package has been discontinued for KDE 2.2.x
due to the fact that most distributions already provide the libraries
and programs, which were included in that package.  If you still require
this package, you may use one of the
<a href="http://ftp.sourceforge.net/pub/mirrors/kde/snapshots/current/">snapshots</a>.
<br />&nbsp;<br />
For more information on the kdelibs-2.2 release, please see the
<a href="http://www.kde.org/announcements/announce-2.2.html">release
announcement</a>.
</li>
</ul>

<p>
KOffice 1.1 will not work with versions of Qt older than 2.2.4 or
versions of kdelibs older than 2.1.1.
</p>
<p>
<a name="compilereq"><em><strong>Compiler Requirements</strong></em>.</a>
Please note that some components of
KOffice 1.1 (such as the Quattro Pro<sup>&reg;</sup> import filter
and the new <a href="http://www.koffice.org/kchart/">KChart</a>) will not
compile with older versions of <a href="http://gcc.gnu.org/">gcc/egcs</a>,
such as egcs-1.1.2 or gcc-2.7.2.  At a minimum gcc-2.95-* is required.
</p>
<p>
<a name="furinstr"><em><strong>Further Instructions</strong></em>.</a>
For further instructions on compiling and installing KOffice, please consult
the <a href="http://www.koffice.org/download/source.php">installation
instructions</a>.
</p>
<h4><a name="appdes">Application Descriptions</a></h4>
<p>
In addition to the features described below for each application, each
KOffice applications provides embedding of other KOffice documents/components
(e.g., a spreadsheet can be embedded in a word processing document and
accessed/edited from inside KWord), a modern print dialog (including
numerous predefined page sizes, configurable margins, etc.) and print preview,
import of images and clip-art (.wmf format), scanning support and
scripting via KDE's
<a href="http://developer.kde.org/documentation/library/dcop.html">DCOP</a>
mechanism.
</p>
<h5><a name="kword">KWord</a></h5>
<p>
KWord is a FrameMaker-like word-processing and desktop publishing application. KWord's features include:</p>
<ul>
<li>paragraph style sheets (borders, alignment, spacing, indentation,
bullet points, tab stops, page breaks, and font type, style, color and
size), together with a stylist to edit, add, remove and update
styles (a number of predefined styles are provided);</li>
<li>a frame orientation, suitable for simple desktop publishing (DTP);</li>
<li>numerous preset as well as custom page sizes;</li>
<li>multiple columns per page;</li>
<li>headers and footers (including different first page headers/footers);</li>
<li>variables, such as page number, company name, user name, document summary,
date and time or a custom variable;</li>
<li>tables;</li>
<li>embedding of text frames, images and clip-art (.wmf files);</li>
<li>chapter numbering;</li>
<li>auto-generation of table of contents;</li>
<li>auto-correction and spell checking; and</li>
<li>templates.</li>
</ul>
<p>
More information about KWord
<a href="http://www.koffice.org/kword/features.php">features</a>, as well as
many <a href="http://www.koffice.org/kword/screenshots.php">screenshots</a>,
are available at the <a href="http://www.koffice.org/kword/">KWord website</a>.
</p>
<h5><a name="kpresenter">KPresenter</a></h5>
<p>
KPresenter is a presentation application.  Its features include:</p>
<ul>
<li>inserting and editing rich text (with bullet points, indentation, spacing,
colors, fonts, etc.);</li>
<li>embedding images and clip-art (.wmf files);</li>
<li>inserting auto-forms;</li>
<li>setting many object properties (background, many types of gradients,
pen, shadow, rotation, object specific settings, etc.);</li>
<li>working with objects (resizing, moving, lowering, raising, etc.);</li>
<li>grouping/ungrouping objects;</li>
<li>headers/footers;</li>
<li>advanced undo/redo;</li>
<li>setting background (color, gradients, pictures, clip-arts, etc.);</li>
<li>assigning effects for animating objects and defining effects for
changing slides;</li>
<li>playing screen presentations with effects;</li>
<li>print as PostScript;</li>
<li>creating HTML slideshows with a few mouse clicks;</li>
<li>templates (pre- and user-defined);</li>
<li>using XML as the document format; and</li>
<li>a Presentations Structure Viewer.</li>
</ul>
<p>
More information about KPresenter, including some
<a href="http://www.koffice.org/kpresenter/screenshots.php">screenshots</a>,
is available at the <a href="http://www.koffice.org/kpresenter/">KPresenter
website</a>.
</p>
<h5><a name="kspread">KSpread</a></h5>
<p>
KSpread is a scriptable spreadsheet program which provides both
table-oriented sheets and support for complex mathematical formulas
and statistics.  KSpread features include:</p>
<ul>
<li>multiple tables/sheets per document;</li>
<li>templates;</li>
<li>multiple chart formats for displaying data graphically;</li>
<li>headers and footers;</li>
<li>over 100 formulas, including standard deviation, variance, present value
of annuities and much more;</li>
<li>sorting;</li>
<li>scripting;</li>
<li>lists;</li>
<li>cell data validity checking with configurable warnings/actions;</li>
<li>comments;</li>
<li>series (days of week, months of year, numbers, etc.);</li>
<li>conditional coloring of cells;</li>
<li>hyperlinks;</li>
<li>row and column customization (size, show/hide, font type, style and size,
etc.); and</li>
<li>cell customization (data/number format, precision, border, alignment,
rotation, background color and pattern, font type, style and size, etc.).</li>
</ul>
<p>
More information about KSpread, including some
<a href="http://www.koffice.org/kspread/screenshots.php">screenshots</a>,
is available at the <a href="http://www.koffice.org/kspread/">KSpread
website</a>.
</p>
<h5><a name="kontour">Kontour</a></h5>
<p>
Kontour is a vector drawing program which aims to provide similar
functionality to
<a href="http://www3.corel.com/cgi-bin/gx.cgi/AppLogic+FTContentServer?pagename=Corel/Product/Details&amp;id=CC1IOY1YKCC">Corel Draw</a><sup>TM</sup>
or <a href="http://www.adobe.com/products/illustrator/main.html">Adobe
Illustrator</a><sup>TM</sup>.  Kontour's features currently include:</p>
<ul>
<li>many tools (points, line, freehand, bezier, rectangle, polygon,
ellipse/circle);</li>
<li>layers and grids;</li>
<li>to front/back;</li>
<li>visible grids/align to grid;</li>
<li>group/ungroup;</li>
<li>export as image or EPS;</li>
<li>split views and multiple views of the same document;</li>
<li>object properties (such as fill, color, line patter, line width
and rounded corners for a rectangle);</li>
<li>mirror and rotate;</li>
<li>text along object; and</li>
<li>align/distribute.</li>
</ul>
<p>
More information about Kontour, including some
<a href="http://www.koffice.org/kontour/screenshots.php">screenshots</a>,
is available at the <a href="http://www.koffice.org/kontour/">Kontour
website</a>.
</p>
<h5><a name="kivio">Kivio</a></h5>
<p>
Kivio is a flowcharting program which offers advanced flowcharting
abilities. Objects are scriptable, and a backend plugin system will
provide objects with unlimited abilities.  For example, an object
could convert a directory of C++ header files and into a graphical
class map, or an object could explore and map out a specified network.
The selected scripting language chosen is
<a href="http://www.python.org/">Python</a>, though knowledge of Python
or programming is not required to use Kivio.  Kivio's features include:</p>
<ul>
<li>dynamically loadable stencils with support for various attributes,
 such as border width, foreground color and fill style (gradient, solid
 pattern, pixmap, arrow heads and text);</li>
<li>a built-in stencil builder, which permits you to create your own
stencils without doing any programming;</li>
<li>layers for stencil layout (for example, if you are laying out a
floor plan, one layer can contain furniture, while walls and structural
shapes go on another, and wiring on yet another);</li>
<li>multiple pages per document;</li>
<li>grouping/ungrouping;</li>
<li>clipboard history for pasting previously copied stencils;</li>
<li>customizable helper lines for easy alignment;</li>
<li>sub-selections (for stencils which are made up of numerous small
shapes); and</li>
<li>a dynamically resizing grid (the grid scale becomes finer as you
zoom in).</li>
</ul>
<p>
More information about Kivio, including a
<a href="http://www.thekompany.com/projects/kivio/kivio_tut/">tutorial</a>,
<a href="http://www.thekompany.com/projects/kivio/screenshots.php3">screenshots</a>, and
information on obtaining additional
<a href="https://www.thekompany.com/products/order/stencils.php3">stencils</a>,
is available at the <a href="http://www.thekompany.com/projects/kivio/">Kivio
website</a>.
</p>
<h5><a name="kchart">KChart</a></h5>
<p>
KChart is a chart drawing application which can be used to embed charts
into your KOffice documents, such as a report written with KWord.  Besides
providing the usual charting capabilities, KChart is both easy to use
and highly configurable.  It provides:</p>
<ul>
<li>default values for all parameter settings, all of which may be changed
at any time after initializing/drawing the chart;</li>
<li>automatic computation or easy configuration of axis values; and</li>
<li>specification of size values (axis/grid line width, font sizes,
bar width, dataset gap, pie chart radius, etc.) in either absolute pixels or
relative to the window size (this makes your chart independent of the
window size).</li>
</ul>
<p>
More information about KChart, including some
<a href="http://www.koffice.org/kchart/screenshots.php">screenshots</a>,
is available at the <a href="http://www.koffice.org/kchart/">KChart
website</a>.
</p>
<h5><a name="kformula">KFormula</a></h5>
<p>
KFormula is an easy-to-use formula editor which provides basic input
facilities and support functionality.  Features include:</p>
<ul>
<li>numerous predefined symbols, including delimiters, matrices, indices,
roots, fractions, integrals and brackets;</li>
<li>easy Greek symbol insertion;</li>
<li>intelligent cursor movement;</li>
<li>advanced syntax highlighting; and</li>
<li>multi-level undo support.</li>
</ul>
<p>
More information about KFormula, including some
<a href="http://www.koffice.org/kformula/screenshots.php">screenshots</a>,
is available at the <a href="http://www.koffice.org/kformula/">KFormula
website</a>.
</p>
<h5><a name="filters">KOffice filters</a></h5>
<p>
KOffice includes a number of filters for importing MS Office and Corel
Office documents as well as documents in other formats.  The current
status of these filters is available at
the <a href="http://www.koffice.org/filters/">KOffice filters website</a>.
</p>
<h4><a name="about">About KOffice/KDE</a></h4>
<p>
KOffice is part of the KDE project.
KDE is an independent, collaborative project by hundreds of developers
worldwide to create a sophisticated, customizable and stable desktop environment
employing a component-based, network-transparent architecture.
KDE is working proof of the power of the Open Source "Bazaar-style" software
development model to create first-rate technologies on par with
and superior to even the most complex commercial software.
</p>
<p>
For more information about KDE, please visit KDE's
<a href="http://www.kde.org/whatiskde/">web site</a>.
For more information about KOffice, please visit KOffice's
<a href="http://www.koffice.org/info/">web site</a> where you can find,
among other things, information on
<a href="http://www.koffice.org/getinvolved/">contributing to KOffice</a>.
</p>
<h4><a name="sponsers">Corporate KOffice Sponsors</a></h4>
<p>
Besides the valuable and excellent efforts by the
<a href="http://www.koffice.org/people.php">KOffice developers</a>
themselves, significant support for KOffice development has been provided by
<a href="http://www.mandrakesoft.com/">MandrakeSoft</a> (which sponsors
KOffice developers <a href="http://perso.mandrakesoft.com/~david/">David
Faure</a> and Laurent Montel),
<a href="http://www.thekompany.com/">theKompany.com</a> (which
contributed Kivio to KOffice),
and
<a href="http://www.klaralvdalens-datakonsult.se/">Klar&auml;lvdalens
Datakonsult AB</a> (which contributed the new KChart to KOffice).  Thanks!
</p>
<hr noshade="noshade" size="1" width="90%" align="center" />
<p>
<small>
<em>Trademarks Notices.</em>
KDE, K Desktop Environment, KChart, KFormula, Kontour, KOffice,
KPresenter, Krayon, KSpread and KWord are trademarks of KDE e.V.
Kivio is a trademark of theKompany.com.
PostScript is a registered trademark of Adobe Systems
Incorporated.
Quattro Pro is a registered trademark of Corel Corporation or Corel Corporation Limited.
<!--MS WinWord 97 and MS Excel are registered trademarks of Microsoft
Corporation.-->
Linux is a registered trademark of Linus Torvalds.
Unix is a registered trademark of The Open Group.
Trolltech and Qt are trademarks of Trolltech AS.
All other trademarks and copyrights referred to in this announcement are
the property of their respective owners.
</small>
</p>
<hr noshade="noshade" size="1" width="90%" align="center" />
<table border="0" cellpadding="8" cellspacing="0">
<tr><th colspan="2" align="left">
<a name="press">Press Contacts:</a>
</th></tr>
<tr valign="top"><td align="right" nowrap="nowrap">
United&nbsp;States:
</td><td nowrap="nowrap">
Eunice Kim<br />
The Terpin Group<br />
ekim@terpin.com<br />
(1) 650 344 4944 ext. 105<br />&nbsp;<br />
Kurt Granroth<br />
granroth@kde.org<br />
(1) 480 732 1752<br />&nbsp;<br />
Andreas Pour<br />
Chairman<br />
KDE League, Inc.<br />
pour@kde.org<br />
(1) 917 312 3122
</td></tr>
<tr valign="top"><td align="right" nowrap="nowrap">
Europe (French and English):
</td><td nowrap="nowrap">
David Faure<br />
faure@kde.org<br />
(44) 1225 837409
</td></tr>
<tr valign="top"><td align="right" nowrap="nowrap">
Europe (English and German):
</td><td nowrap="nowrap">
Ralf Nolden<br />
nolden@kde.org<br />
(49) 2421 502758
</td></tr>
</table>
<?php
  include("footer.inc");
?>
