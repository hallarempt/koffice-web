<?php
  $page_title =KOffice 1.1 Beta1 Announcement';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

<P>DATELINE APRIL 24, 2001</P>
<P>FOR IMMEDIATE RELEASE</P>
<H3 ALIGN="center">KOffice Suite Beta Released for Linux</H3>
<P><STRONG>KDE, the Leading Linux Desktop, Ships Beta of KOffice Suite</STRONG></P>
<P>April 24, 2001 (The INTERNET).
The <A HREF="http://www.kde.org/">KDE
Project</A> today announced the highly-anticipated release of
<A HREF="http://www.koffice.org/">KOffice</A> 1.1beta1.
KOffice is an integrated office suite for KDE which utilizes open
standards for component communication and component embedding.
The primary goals of the the release are to provide a preview of
KOffice&nbsp;1.1 and to involve users who wish to request missing features or
report problems.
Code development is currently focused on stabilizing KOffice 1.1,
<A HREF="http://developer.kde.org/development-versions/koffice-1.1-release-plan.html">scheduled</A>
for final release this summer.
</P>
<P>
This release includes the following components:
<A HREF="#kword">KWord</A> (a frame-based, full-featured word processor);
<A HREF="#kpresenter">KPresenter</A> (a presentation application);
<A HREF="#kspread">KSpread</A> (a spreadsheet application);
<A HREF="#killustrator">KIllustrator</A> (a vector-drawing application);
<A HREF="#krayon">Krayon</A> (a bitmap image editor);
<A HREF="#kivio">Kivio</A> (a flowchart application);
<A HREF="#kchart">KChart</A> (a chart drawing application);
<A HREF="#kformula">KFormula</A> (a formula editor);
<A HREF="#kugar">Kugar</A> (a tool for generating business quality reports); and
<A HREF="#filters">filters</A> (for importing/exporting documents).
</P>
<P>
While the entire release is designated as a beta release, individual
components are all at various stages of development, which is indicated
next to each component's description below.
Changes to individual KOffice components are also enumerated below.
In addition, a
<A HREF="http://www.koffice.org/announcements/changelog-1.1.phtml">list of
changes</A> and a <A HREF="http://www.koffice.org/faq/">FAQ about
KOffice</A> are available at the KOffice
<A HREF="http://www.koffice.org/">website</A>.
</P>
<P>
KOffice and all its components are available for free under
Open Source licenses from the KDE
<A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta1/">server</A>
and its <A HREF="http://www.kde.org/mirrors.html">mirrors</A>.
<!-- NOT SURE
and may
also be available on <A HREF="http://www.kde.org/cdrom.html">CD-ROM</A>
-->
As a result of the dedicated efforts of hundreds of translators,
KOffice 1.1beta1 is available in
<A HREF="http://i18n.kde.org/teams/distributed.html">25</A>
languages</A>.
</P>
<P>
<H4>KOffice Components</H4>
</P>
<P>
KOffice is an integrated office suite consisting of numerous components
which can interact, share data and embed each other using KDE's open KParts
and DCOP technologies.  The 1.1beta1 release includes the following components:
<OL>
<!-- KWORD -->
<LI>
<A NAME="kword"></A><A HREF="http://www.koffice.org/kword/"><EM>KWord</EM></A>
(<EM>alpha</EM>).
KWord is a frame-based word-processing and desktop publishing application.
KWord's features include:
<UL>
  <LI>paragraph style sheets (alignment, spacings, indentations, default font, etc.);</LI>
  <LI>a stylist to edit, add, remove and update paragraph styles (including a number of provides ones);</LI>
  <LI>frame orientation;</LI>
  <LI>multiple columns per page;</LI>
  <LI>tables;</LI>
  <LI>image and other document embedding;</LI>
  <LI>in-place formula editing;</LI>
  <LI>headers and footers;</LI>
  <LI>footnotes and endnotes;</LI>
  <LI>chapter numbering;</LI>
  <LI>auto-generation of table of contents;</LI>
  <LI>mail merge;</LI>
  <LI>autocorrection and spell checking; and</LI>
  <LI>templates.</LI>
</UL>
<BR>
Changes since the last release include:
<UL>
  <LI>New overall design and new formatting engine (using the Qt RichText
widget).</LI>
  <LI>Improved display adapts to the DPI settings (of the screen and of the
printer), so the page on screen has the same size as the real paper page.</LI>
  <LI>Much better performance with huge documents (the text is formatted
as a background job, the screen redrawing is done much better, etc.).</LI>
  <LI>Smaller file size.</LI>
  <LI>Real document/view separation. Working with different views on the same
document is fully functional.</LI>
  <LI>Brand new formula widget (with doc/view design, zoom support etc.)</LI>
  <LI>Redesigned table support.</LI>
  <LI>Much improved find/replace functionality.</LI>
  <LI>Real bullets instead of using characters as bullets.</LI>
  <LI>Implemented breaking paragraphs at the end of a frame or page ("Keep lines
together" can now be disabled).</LI>
  <LI>Right margin for a paragraph.</LI>
  <LI>Undo/redo fully working (all text operations, frame operations,
etc.)</LI>
  <LI>Embedding a KPresenter part into KWord now works.</LI>
  <LI>Copy/Paste and drag'n'drop work as expected (instead of for full paragraphs only).</LI>
</UL>
</LI>
<!-- KPRESENTER -->
<BR>
<LI>
<A NAME="kpresenter"></A><A HREF="http://www.koffice.org/kpresenter/"><EM>KPresenter</EM></A>
(<EM>beta</EM>).
KPresenter is a presentation application which features:
<UL>
  <LI>inserting all kinds of graphic objects;</LI>
  <LI>inserting and editing rich text (with lists, indentations, spacings, colors, fonts, ...);</LI>
  <LI>inserting autoforms;</LI>
  <LI>inserting pictures and clipart;</LI>
  <LI>embedding other KOffice parts;</LI>
  <LI>setting many object properties (background, many types of gradients, pen, shadow, rotation, object specific settings, ....;</LI>
  <LI>working with objects (resizing, moving, lowering, raising, ...);</LI>
  <LI>grouping/ungrouping objects;</LI>
  <LI>headers/footers;</LI>
  <LI>advanced undo/redo;</LI>
  <LI>setting background (color, gradients, pictures, cliparts, etc.);</LI>
  <LI>assigning effects for animating objects and defining effects for changing slides;</LI>
  <LI>playing screen presentations with effects;</LI>
  <LI>print as PostScript;</LI>
  <LI>creating HTML slideshows with a few mouse clicks;</LI>
  <LI>using and creating templates;</LI>
  <LI>using XML as document format; and</LI>
  <LI>a Presentations Structure Viewer.</LI>
</UL>
<BR>
Changes since the last release include:
<UL>
  <LI>Added "Copy Page" feature.</LI>
  <LI>Much faster and flicker-free switching to fullscreen mode.</LI>
  <LI>Sidebar, painting and ellipses drawing fixes.</LI>
</UL>
</LI>
<!-- KSPREAD -->
<BR>
<LI>
<A NAME="kspread"></A><A HREF="http://www.koffice.org/kspread/"><EM>KSpread</EM></A>
(<EM>beta</EM>).
KSpread is a full featured spreadsheet program.  It can work as a traditional table-oriented sheet but also supports complex mathematical formulas and statistics.  In addition, KSpread supports displaying data graphically, scripting using a restricted (for security purposes) language and templates.<BR>

<BR>
Changes since the last release include:
<UL>
  <LI>Support for applying attribute changes to complete rows/columns.</LI>
  <LI>Rows and columns can be hidden.</LI>
  <LI>Improved undo/redo, grouping operations when applicable.</LI>
  <LI>Added configuration dialog box.</LI>
  <LI>New dialog box to define the series used by the auto-fill feature.</LI>
  <LI>Copy and paste with insertion.</LI>
  <LI>Data validation.</LI>
</UL>
</LI>
<!-- KILLUSTRATOR -->
<BR>&nbsp;
<LI>
<A NAME="killustrator"></A><A HREF="http://www.koffice.org/kontour"><EM>KIllustrator</EM></A>
(<EM>alpha</EM>).
KIllustrator is the vector drawing program for KOffice. The aim
of the KIllustrator project is the development of a freely available
vector-based drawing application similiar to
<A HREF="http://www3.corel.com/cgi-bin/gx.cgi/AppLogic+FTContentServer?pagename=Corel/Product/Details&id=CC1IOY1YKCC">Corel
Draw</A> or
<A HREF="http://www.adobe.com/products/illustrator/main.html">Adobe Illustrator</A>.
<BR>

<BR>
Changes since the last release include improved speed and usability.
<UL>
  <LI>New canvas support.</LI>
  <LI>Added multipages support</LI>
  <LI>Redesigned layers dialog to dock in main window or tear off.</LI>
  <LI>Embedding KOffice parts now works.</LI>
  <LI>Improved rulers.</LI>
</UL>
</LI>
<!-- KRAYON -->
<BR>&nbsp;
<LI>
<A NAME="krayon"></A><A HREF="http://www.koffice.org/krayon/"><EM>Krayon</EM></A>
(<EM>beta</EM>).
Krayon (f/k/a KImageShop) is an effort to make a professional level bitmap
image painting and editing component of the KOffice project.
<BR>

<BR>
Krayon is being released with KOffice for the first time.<BR>
</LI>
<!-- KIVIO -->
<BR>&nbsp;
<LI>
<A NAME="kivio"></A><A HREF="http://www.thekompany.com/projects/kivio/"><EM>Kivio</EM></A>
(<EM>stable</EM>).
Kivio is a flowcharting program which offers more than basic flowcharting
abilities. Objects are scriptable, and a backend plugin system will offer
the ability to make objects do just about anything. Feed it a directory of
C++ header files, or even Java files, and let it generate a graphical class
map for you. Give it a network and let it explore and map out the network
for you. All this is possible through the scripting/plugin architecture
Kivio will possess.  The scripting language chosen is
<A HREF="http://www.python.or g/">Python</A>, though knowledge of Python
or programming is not required to use Kivio.  Kivio's features include:
<UL>
  <LI>Multiple paper size support. All standard paper sizes are supported
(letter, A4, etc...), and you have the ability to create your own.</LI>
  <LI>Dynamically loadable stencils. Stencils support various attributes such
as border width, foreground color and fill style (gradient, solid, pattern,
pixmap, arrow heads and text).</LI>
  <LI>Multiple pages per document to allow you to organize your document
according to your own needs.</LI>
  <LI>Grouping. Select any stencils you want, and group them into a single
element for easier manipulation.</LI>
  <LI>Full clipboard support (cut/copy/paste/duplicate).</LI>
  <LI>Clipboard history. Paste previously copied stencils!</LI>
  <LI>Layer support. Stencils can be layed out on different layers for easier
organization. Stencils also default to specific layers. For example, if
you are laying out a floorplan, furniture goes on one layer, while walls
and structural shapes go on another, and wiring on yet another.</LI>
  <LI>KParts support, which allows placing a Kivio document in a
<A HREF="#kword">KWord</A> document or inserting a
<A HREF="#kspread">KSpread</A> spreadsheet into Kivio for diagramming.</LI>
  <LI>Customizable helper lines for easy alignment.</LI>
  <LI>Subselections. Some stencils are made up of numerous small shapes;
with subselections you can change it.</LI>
  <LI>Python scripting. Scripting allows not only the programming of the
stencils, but also Kivio.  Scripting can be used to add new interface
elements or visualization tools.</LI>
  <LI>C++ Plugin interface.</LI>
  <LI>Customizable user interface. If you do not like the layout of the
screen by default, drag the various elements around until you are satisfied.
Some elements even allow you to change their colors for a more
pleasing look.</LI>
  <LI>Dynamically resizing grid. As you zoom in further and further on a
document, the grid will constantly refine itself to allow you to place
your stencils with more precision.</LI>
  <LI>Stencil builder. The stencil builder permits you to create your own
stencils without doing any programming.</LI>
</UL>
<BR>
Kivio is being released with KOffice for the first time.<BR>
</LI>
<!-- KCHART -->
<BR>
<LI>
<A NAME="kchart"></A><A HREF="http://www.koffice.org/kchart/"><EM>KChart</EM></A>
(<EM>alpha</EM>).
KChart is an embeddable chart drawing application.  Features include:
<UL>
<LI>Simple wizard-based chart creation.</LI>
<LI>Support for bar charts, line charts, pie charts, hi-lo charts and area
charts</LI>
<LI>Seamless integration into <A HREF="#kspread">KSpread</A>.</LI>
</UL>
</LI>
<!-- KFORMULA -->
<BR>&nbsp;
<LI>
<A NAME="kformula"></A><A HREF="http://www.koffice.org/kformula/"><EM>KFormula</EM></A>
(<EM>beta</EM>).
KFormula is a formula editor which provides easy-to-use input facilities.
Some of its most exciting features are: 
<UL>
  <LI>Easy Greek letter insertion.</LI>
  <LI>Intelligent cursor movement.</LI>
  <LI>Advanced syntax highlighting.</LI>
  <LI>Multi-level undo support.</LI>
  <LI>LaTeX export (copy and paste into a text editor).</LI>
</UL>
<BR>
Since the last release, KFormula has been completely redesigned
and much improved.<BR>
</LI>
<!-- KUGAR -->
<BR>
<LI>
<A NAME="kugar"></A><A HREF="http://www.thekompany.com/projects/kugar/"><EM>Kugar</EM></A>
(<EM>stable</EM>).
Kugar is a tool for generating business quality reports. Besides the standalone
report viewer, Kugar is available as a KPart report viewer. This means that any
KDE application can embed the report viewing functionality and that reports can
be viewed using the Konqueror browser.
Kugar works by merging application generated data with a template to produce
the final report. Both the data and the template are specified using XML.
This approach means that applications only need worry about generating the
data itself. A template can be referenced via a URL which allows businesses
to create a centrally managed template library.  Kugar templates include
the following features:
<UL>
  <LI>Report headers and footers.</LI>
  <LI>Page headers and footers including page numbers and current date and
time.</LI>
  <LI>Calculations of counts, sums, averages, variance and standard
deviation.</LI>
  <LI>Number formatting based on value.</LI>
  <LI>Currency and date formatting.</LI>
  <LI>Full control of fonts, colors, text alignment and wrapping.</LI>
  <LI>Line drawing in multiple styles.</LI>
</UL>
<BR>
Kugar is being released with KOffice for the first time.<BR>
</LI>
<!-- FILTERS -->
<BR>
<LI>
<A NAME="filters"></A><A HREF="http://www.koffice.org/filters/"><EM>Filters</EM></A>.
Various import/export filters are available in most of the KOffice
applications to support document exchange with users of other office suits.
For more information on KOffice filter status, including import filters for
MS WinWord 97 and MS Excel 97, please visit the
<A HREF="http://www.koffice.org/filters/status.phtml">KOffice filters status
page</A>. 
<BR>

<BR>
Changes since the last release include:
<UL>
  <LI>Many new filters: Applixware import, Abiword import/export, Docbook
export, LaTeX export, etc.</LI>
  <LI>Improvements to the existing filters, especially the MS WinWord and
MS Excel import filters</LI>
</UL>
</LI>
</OL>
</P>
<P>
<H4>Downloading and Compiling KOffice</H4>
</P>
<P>
The source packages for KOffice 1.1beta1 are available for free download at
<A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta1/src/">http://ftp.kde.org/unstable/koffice-1.1-beta1/src/</A> or in the
equivalent directory at one of the many KDE ftp server
<A HREF="http://www.kde.org/mirrors.html">mirrors</A>.
KOffice 1.1beta1 requires qt-x11-2.2.3 or greater, which is available from
<A HREF="http://www.trolltech.com/">Trolltech</A> at
<A HREF="ftp://ftp.trolltech.com/qt/source/">ftp://ftp.trolltech.com/qt/source/</A>
under the name <A HREF="ftp://ftp.trolltech.com/qt/source/qt-x11-2.2.3.tar.gz">qt-x11-2.2.3.tar.gz</A>, although
<A HREF="ftp://ftp.trolltech.com/pub/qt/source/qt-x11-2.3.0.tar.gz">qt-x11-2.3.0</A>
is recommended, as well as kdesupport-2.1.x, kdelibs 2.1.x and kdebase-2.1.x,
which are available from the KDE ftp servers at
<A HREF="http://ftp.kde.org/stable/2.1.1/distribution/">http://ftp.kde.org/stable/2.1.1/distribution/</A>
(<EM>see also</EM> the
<A HREF="http://www.kde.org/announcements/announce-2.1.1.html">KDE 2.1.1
press release</A> for more information).
KOffice 1.1beta1 will not work with versions of Qt older than 2.2.3 or
versions of kdelibs older than 2.1.x.  Note that kdelibs-2.1.2
is scheduled for release the week of April 30 to fix some bugs encountered
with KOffice; users downloading KOffice 1.1beta1 are strongly encouraged to
upgrade to kdelibs-2.1.2 when it becomes available.
</P>
<P>
For further instructions on compiling and installing KOffice, please consult
the <A HREF="http://www.koffice.org/install-source.phtml">installation
instructions</A>.
</P>
<P>
<H4>Installing Binary Packages</H4>
</P>
<P>
Some distributors choose to provide binary packages of KOffice for certain
versions of their distribution.  Some of these binary packages for
KOffice 1.1beta1 will be available for free download under
<A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta1/">http://ftp.kde.org/unstable/koffice-1.1-beta1/</A>
or under the equivalent directory at one of the many KDE ftp server
<A HREF="http://www.kde.org/mirrors.html">mirrors</A>. Please note that the
KDE team is not responsible for these packages as they are provided by third
parties -- typically, but not always, the distributor of the relevant
distribution (if you cannot find a binary package for your distribution,
please read the <A HREF="http://dot.kde.org/986933826/">KDE Binary Package
Policy</A>).
<P>
KOffice 1.1beta1 requires qt-2.2.3 or greater, which is available from
<A HREF="http://www.trolltech.com/">Trolltech</A> at
<A HREF="ftp://ftp.trolltech.com/qt/source/">ftp://ftp.trolltech.com/qt/source/</A>
under the name <A HREF="ftp://ftp.trolltech.com/qt/source/qt-x11-2.2.3.tar.gz">qt-x11-2.2.3.tar.gz</A>, although
<A HREF="ftp://ftp.trolltech.com/pub/qt/source/qt-x11-2.3.0.tar.gz">qt-2.3.0</A>
is recommended, as well as kdesupport-2.1.x, kdelibs-2.1.x and kdebase-2.1.x,
which are available from the KDE ftp servers at
<A HREF="http://ftp.kde.org/stable/2.1.1/distribution/">http://ftp.kde.org/stable/2.1.1/distribution/</A>
(<EM>see also</EM> the
<A HREF="http://www.kde.org/announcements/announce-2.1.1.html">KDE 2.1.1
press release</A> for more information).
KOffice 1.1beta1 will not work with versions of Qt older than 2.2.3 or
versions of kdelibs older than 2.1.x.  Note that kdelibs-2.1.2
is scheduled for release the week of April 30 to fix some bugs encountered
with KOffice; users downloading KOffice 1.1beta1 are strongly encouraged to
upgrade to kdelibs-2.1.2 when it becomes available.
</P>
<P>
At the time of this release, pre-compiled packages are available for:
</P>
<P>
<UL>
<LI><A HREF="http://www.suse.com/">SuSE Linux</A> (<A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta1/SuSE/README">README</A>):
<UL>
<LI>7.1:  <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta1/SuSE/i386/7.1/">i386</A>, <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta1/SuSE/ppc/7.1/">PPC</A> and <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta1/SuSE/sparc/7.1/">Sparc</A>; please see the <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta1/SuSE/NOARCH/">noarch</A> directory for common files</LI>
<LI>7.0:  <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta1/SuSE/i386/7.0/>i386</A>, <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta1/SuSE/ppc/7.0/">PPC</A> and <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta1/SuSE/s390/7.0/">S390</A>; please see the <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta1/SuSE/NOARCH/">noarch</A> directory for common files</LI>
<LI>6.4:  <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta1/SuSE/i386/6.4/">i386</A>; please see the <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta1/SuSE/NOARCH/">noarch</A> directory for common files</LI>
<LI>6.3:  <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta1/SuSE/i386/6.3/">i386</A>; please see the <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta1/SuSE/NOARCH/">noarch</A> directory for common files</LI>
</UL>
<LI>Tru64 Systems:  <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta1/Tru64/">4.0e,f,g, or 5.x</A> (<A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta1/Tru64/README.Tru64">README</A>)</LI>
</UL>
</P>
Please check the servers periodically for pre-compiled packages for other
distributions.  More binary packages will become available over the
coming days and weeks.
</P>
<P>
<H4>About KOffice/KDE</H4>
</P>
<P>
KOffice is part of the KDE project.
KDE is an independent, collaborative project by hundreds of developers
worldwide to create a sophisticated, customizable and stable desktop environment
employing a component-based, network-transparent architecture.
KDE is working proof of the power of the Open Source "Bazaar-style" software
development model to create first-rate technologies on par with
and superior to even the most complex commercial software.
</P>
<P>
For more information about KDE, please visit KDE's
<A HREF="http://www.kde.org/whatiskde/">web site</A>.
For more information about KOffice, please visit KOffice's
<A HREF="http://www.koffice.org/info/">web site</A> where you can find,
among other things, information on
<A HREF="http://www.koffice.org/getinvolved/">contributing to KOffice</A>.
</P>
<P>
<H4>Corporate KOffice Sponsors</H4>
</P>
<P>
Besides the valuable and excellent efforts by the
<A HREF="http://www.koffice.org/developers.phtml">KOffice developers</A>
themselves, significant support for KOffice development has been provided by
<A HREF="http://www.thekompany.com/">theKompany.com</A>, which has
contributed <A HREF="#Kivio">Kivo</A>, <A HREF="#Kugar">Kugar</A> and the
soon-to-be-released
<A HREF="http://www.thekompany.com/projects/rekall/">Rekall</A> to
KOffice, and <A HREF="http://www.mandrakesoft.com/">MandrakeSoft</A>, which
sponsors KOffice developers
<A HREF="http://perso.mandrakesoft.com/~david/">David
Faure</A> and Laurent Montel.  Thanks!
</P>
<HR NOSHADE SIZE=1 WIDTH="90%" ALIGN="center">
<FONT SIZE=2>
<EM>Trademarks Notices.</EM>
KDE, K Desktop Environment, KChart, KFormula, KIllustrator, KOffice,
KPresenter, Krayon, KSpread and KWord are trademarks of KDE e.V.
Kivio, Kugar and Rekall are trademarks of thekompany.com.
Adobe Illustrator is a registered trademark of Adobe Systems Incorporated.
Corel Draw is a registered trademark of Corel Corporation or Corel Corporation Limited.
MS WinWord 97 and MS Excel are registered trademarks of Microsoft Corporation.
Linux is a registered trademark of Linus Torvalds.
Unix is a registered trademark of The Open Group.
Trolltech and Qt are trademarks of Trolltech AS.
All other trademarks and copyrights referred to in this announcement are the property of their respective owners.
<BR>
<HR NOSHADE SIZE=1 WIDTH="90%" ALIGN="center">
<TABLE BORDER=0 CELLPADDING=8 CELLSPACING=0>
<TR><TH COLSPAN=2 ALIGN="left">
Press Contacts:
</TH></TR>
<TR VALIGN="top"><TD ALIGN="right" NOWRAP>
United&nbsp;States:
</TD><TD NOWRAP>
Kurt Granroth<BR>
granroth@kde.org<BR>
(1) 480 732 1752<BR>&nbsp;<BR>
Andreas Pour<BR>
pour@kde.org<BR>
(1) 917 312 3122
</TD></TR>
<TR VALIGN="top"><TD ALIGN="right" NOWRAP>
Europe (French and English):
</TD><TD NOWRAP>
David Faure<BR>
faure@kde.org<BR>
(44) 1225 837409
</TD></TR>
<TR VALIGN="top"><TD ALIGN="right" NOWRAP>
Europe (English and German):
</TD><TD NOWRAP>
Martin Konold<BR>
konold@kde.org<BR>
(49) 179 2252249
</TD></TR>
</TABLE>
<?php
  include("footer.inc");
?>


