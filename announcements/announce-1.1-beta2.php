<?php
  $page_title ='KOffice 1.1 Beta2 Announcement';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>
<P>DATELINE MAY 21, 2001</P>
<P>FOR IMMEDIATE RELEASE</P>
<H3 ALIGN="center">KOffice Suite Beta Released for Linux</H3>
<P><STRONG>KDE, the Leading Linux Desktop, Ships Beta of KOffice Suite</STRONG></P>
<P>May 21, 2001 (The INTERNET).
The <A HREF="http://www.kde.org/">KDE
Project</A> today announced the release of
<A HREF="http://www.koffice.org/">KOffice</A> 1.1beta2.
KOffice is an integrated office suite for KDE which utilizes open
standards for component communication and component embedding.
The primary goals of this release, which comes 4 weeks after the release
of KOffice 1.1beta1, are to provide a preview of
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
<A HREF="http://www.koffice.org/announcements/changelog-1.1.php">list of
changes</A> and a <A HREF="http://www.koffice.org/faq/">FAQ about
KOffice</A> are available at the KOffice
<A HREF="http://www.koffice.org/">website</A>.
</P>
<P>
KOffice and all its components are available for free under
Open Source licenses from the KDE
<A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta2/">server</A>
and its <A HREF="http://www.kde.org/mirrors.html">mirrors</A>.
As a result of the dedicated efforts of hundreds of translators,
KOffice 1.1beta2 is available in
<A HREF="http://i18n.kde.org/teams/distributed.html">26<!--Well, there are
actually 26, but not exactly the ones listed there--></A>
languages</A>.
</P>
<P>
<H4>KOffice Components</H4>
</P>
<P>
KOffice is an integrated office suite consisting of numerous components
which can interact, share data and embed each other using KDE's open KParts
and DCOP technologies. 

A new overall feature in 1.1beta2 is the autosave feature, which allows users to
have an automatic backup copy regularly updated, in case of an unlikely crash.

The 1.1beta2 release includes the following components:
<OL>
<!-- KWORD -->
<LI>
<A NAME="kword"></A><A HREF="http://www.koffice.org/kword/"><EM>KWord</EM></A>
(<EM>alpha</EM>).
KWord is a frame-based word-processing and desktop publishing application.
KWord's features include:
<UL>
  <LI>paragraph settings (alignment, spacings, indentations, numbering, etc.);</LI>
  <LI>a stylist to edit, add, remove and update paragraph styles (including a number of provided ones);</LI>
  <LI>frame orientation;</LI>
  <LI>multiple columns per page;</LI>
  <LI>tables;</LI>
  <LI>image and other document embedding;</LI>
  <LI>in-place formula editing;</LI>
  <LI>headers and footers;</LI>
  <!-- Not in beta2 <LI>footnotes and endnotes;</LI> -->
  <LI>chapter numbering;</LI>
  <LI>document statistics;</LI>
  <LI>auto-generation of table of contents;</LI>
  <LI>variables;</LI>
  <!-- Not in beta2 <LI>mail merge;</LI>-->
  <LI><!-- Not in beta2 autocorrection and--> spell checking; and</LI>
  <LI>templates.</LI>
</UL>
<BR>
Since KOffice-1.0, KWord has been completely redesigned, and is
based on a new formatting engine (Qt RichText).
<BR>
Changes since the last release (beta1) include:
<UL>
  <LI>Copying frames has been implemented, fixing headers and footers.</LI>
  <LI>Implemented tabulators (left/right/center/decimal aligned).</LI>
  <LI>Implemented floating framesets, mainly for inline formulas and tables.</LI>
  <LI>KWord can now be embedded into another KOffice application.</LI>
  <LI>More precise coordinate system (especially for frames).</LI>
  <LI>Many improvements for tables (including splitting and merging cells).</LI>
  <LI>Highlight mispelled word during spell-checking, and spell-check all framesets.</LI>
  <LI>UI improvements including a complete redesign of the menus, undo/redo fixes, font-size fix, border-drawing improved, etc.</LI>
  <LI>Fixed crash when embedding into Konqueror.</LI>
  <LI>Many new variables available.</LI>
  <LI>Redesigned style editor (stylist), now all in one dialog.</LI>
  <LI>When changing a style, only the changes are applied to existing paragraphs
      (not the whole style).</LI>
  <LI>Fixed drawing and printing of embedded objects.</LI>
  <LI>Respect user's color scheme.</LI>
  <LI>Improved visual appearance (page shape, with shadow).</LI>
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
  <LI>Pages can now be renamed (independently from their title text object)</LI>
  <LI>New templates added</LI>
  <LI>Fixed AutoForm loading bug</LI>
  <LI>Speedup for loading and saving + smaller file size</LI>
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
  <LI>Copy can now export plain text.</LI>
  <LI>Builtin visual support (based on the old kformula lib) removed, the kformula part can be used instead.</LI>
  <LI>Fixed drawing of embedded kspread document.</LI>
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
  <LI>Helplines can be dragged.</LI>
  <LI>Mouse cursor flickering fixed.</LI>
  <LI>Fixes for readonly mode (e.g. embedded in konqueror).</LI>
  <LI>UI improvements.</LI>
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
<A HREF="http://www.python.org/">Python</A>, though knowledge of Python
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
Changes since the last release include:
<UL>
  <LI>UI improvements.</LI>
  <LI>Connector bug fixed.</LI>
</UL>
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
<!-- VERIFY: change list ?-->
Since KOffice-1.0, KFormula has been completely redesigned and much improved.<BR>
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
<A HREF="http://www.koffice.org/filters/">KOffice filters status
page</A>. 
<BR>
<BR>
Changes since the last release include:
<UL>
  <LI>New filter: Quattro Pro import filter for KSpread</LI>
  <LI>Improvements to the MS WinWord and MS Excel import filters (less crashes, more features)</LI>
  <LI>Improvements to the HTML and Abiword export filters</LI>
</UL>
</OL>
</P>
<P>
<H4>Downloading and Compiling KOffice</H4>
</P>
<P>
The source packages for KOffice 1.1beta2 are available for free download at
<A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta2/src/">http://ftp.kde.org/unstable/koffice-1.1-beta2/src/</A> or in the
equivalent directory at one of the many KDE ftp server
<A HREF="http://www.kde.org/mirrors.html">mirrors</A>.
KOffice 1.1beta2 requires qt-x11-2.2.4 or greater, which is available from
<A HREF="http://www.trolltech.com/">Trolltech</A> at
<A HREF="ftp://ftp.trolltech.com/qt/source/">ftp://ftp.trolltech.com/qt/source/</A>
under the name <A HREF="ftp://ftp.trolltech.com/qt/source/qt-x11-2.2.4.tar.gz">qt-x11-2.2.4.tar.gz</A>, although
<A HREF="ftp://ftp.trolltech.com/pub/qt/source/qt-x11-2.3.0.tar.gz">qt-x11-2.3.0</A>
is recommended, as well as kdesupport-2.1.x, kdelibs 2.1.2 (kdelibs 2.1.x will
work but will cause some crashes and anti-aliased font problems),
which are available from the KDE ftp servers at
<A HREF="http://ftp.kde.org/stable/2.1.1/distribution/">http://ftp.kde.org/stable/2.1.1/distribution/</A>
and <A HREF="http://ftp.kde.org/stable/2.1.2/distribution/">http://ftp.kde.org/stable/2.1.2/distribution/</A>
(<EM>see also</EM> the
<A HREF="http://www.kde.org/announcements/announce-2.1.1.html">KDE 2.1.1
press release</A> and the
<A HREF="http://www.kde.org/announcements/announce-2.1.2.html">KDE 2.1.2
press release</A> for more information).
KOffice 1.1beta2 will not work with versions of Qt older than 2.2.4 or
versions of kdelibs older than 2.1.x.
</P>
<P>
For further instructions on compiling and installing KOffice, please consult
the <A HREF="http://www.koffice.org/download/source.php">installation
instructions</A>.
</P>
<P>
<H4>Installing Binary Packages</H4>
</P>
<P>
Some distributors choose to provide binary packages of KOffice for certain
versions of their distribution.  Some of these binary packages for
KOffice 1.1beta2 will be available for free download under
<A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta2/">http://ftp.kde.org/unstable/koffice-1.1-beta2/</A>
or under the equivalent directory at one of the many KDE ftp server
<A HREF="http://www.kde.org/mirrors.html">mirrors</A>. Please note that the
KDE team is not responsible for these packages as they are provided by third
parties -- typically, but not always, the distributor of the relevant
distribution (if you cannot find a binary package for your distribution,
please read the <A HREF="http://dot.kde.org/986933826/">KDE Binary Package
Policy</A>).
<P>
KOffice 1.1beta2 requires qt-2.2.4 or greater, which is available from
<A HREF="http://www.trolltech.com/">Trolltech</A> at
<A HREF="ftp://ftp.trolltech.com/qt/source/">ftp://ftp.trolltech.com/qt/source/</A>
under the name <A HREF="ftp://ftp.trolltech.com/qt/source/qt-x11-2.2.4.tar.gz">qt-x11-2.2.4.tar.gz</A>, although
<A HREF="ftp://ftp.trolltech.com/pub/qt/source/qt-x11-2.3.0.tar.gz">qt-2.3.0</A>
is recommended, as well as kdesupport-2.1.x, kdelibs 2.1.2 (kdelibs 2.1.x will
work but will cause some crashes and anti-aliased font problems) and
kdebase-2.1.x, which are available from the KDE ftp servers at
<A HREF="http://ftp.kde.org/stable/2.1.1/distribution/">http://ftp.kde.org/stable/2.1.1/distribution/</A>
and <A HREF="http://ftp.kde.org/stable/2.1.2/distribution/">http://ftp.kde.org/stable/2.1.2/distribution/</A>
(<EM>see also</EM> the
<A HREF="http://www.kde.org/announcements/announce-2.1.1.html">KDE 2.1.1
press release</A> and the
<A HREF="http://www.kde.org/announcements/announce-2.1.2.html">KDE 2.1.2
press release</A> for more information).
KOffice 1.1beta2 will not work with versions of Qt older than 2.2.4 or
versions of kdelibs older than 2.1.x.
</P>
<P>
At the time of this release, pre-compiled packages are available for:
</P>
<P>
<UL>
<LI><A HREF="http://www.debian.org/">Debian GNU/Linux</A>:
<UL>
<LI><A HREF="ftp://ftp.debian.org/">ftp.debian.org</A>:  sid (devel)</LI>
<LI><A HREF="ftp://kde.debian.net/">kde.debian.net</A>:  potato (2.2)</LI>
</UL>
<LI><A HREF="http://www.linux-mandrake.com/">Linux Mandrake</A>:
<UL>
<LI>8.0:  <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta2/Mandrake/8.0/kdelibs-2.1.1/">i386</A></LI>
</UL>
<LI><A HREF="http://www.redhat.com/">RedHat</A>:
<UL>
<LI>7.1:  <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta2/RedHat/7.1/i386/">i386</A>, <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta2/RedHat/7.1/alpha/">alpha</A> and <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta2/RedHat/7.1/ia64/">ia64</A> ;
please see the <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta2/RedHat/7.1/noarch/">noarch</A> directory for translations</LI>
</UL>
<LI><A HREF="http://www.suse.com/">SuSE Linux</A> (<A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta2/SuSE/README.SuSE">README</A>):
<UL>
<LI>7.1:  <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta2/SuSE/i386/7.1/">i386</A>, <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta2/SuSE/ppc/7.1/">PPC</A> and <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta2/SuSE/sparc/7.1/">Sparc</A>; please see the <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta2/SuSE/i18n/">i18n</A> directory for translations</LI>
<LI>7.0:  <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta2/SuSE/i386/7.0/">i386</A>, <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta2/SuSE/ppc/7.0/">PPC</A> and <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta2/SuSE/s390/7.0/">S390</A>; please see the <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta2/SuSE/i18n/">i18n</A> directory for translations</LI>
<LI>6.4:  <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta2/SuSE/i386/6.4/">i386</A>; please see the <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta2/SuSE/i18n/">i18n</A> directory for translations</LI>
<!--<LI>6.3:  <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta2/SuSE/i386/6.3/">i386</A>; please see the <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta2/SuSE/i18n/">i18n</A> directory for common files</LI>-->
</UL>
<LI>Tru64 Systems:  <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta2/Tru64/">4.0e,f,g, or 5.x</A> (<A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta2/Tru64/README.Tru64">README</A>)</LI>
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
<A HREF="http://www.koffice.org/people.php">KOffice developers</A>
themselves, significant support for KOffice development has been provided by
<A HREF="http://www.thekompany.com/">theKompany.com</A>, which has
contributed <A HREF="#Kivio">Kivo</A> and <A HREF="#Kugar">Kugar</A>
to KOffice, and <A HREF="http://www.mandrakesoft.com/">MandrakeSoft</A>, which
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
(1) 480 732 1752<BR>
<!-- On holidays&nbsp;<BR>
Andreas Pour<BR>
pour@kde.org<BR>
(1) 917 312 3122-->
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


