<?php
  $page_title ='KOffice 2.0 Alpha 3 Release Announcement';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

<p align="justify">
  DATELINE Sept 6, 2007<br />
  FOR IMMEDIATE RELEASE
</p>
<h2>
  KDE Releases Technology Preview of KOffice
</h2>
<p align="justify">Sept 6, 2007 (The INTERNET).
  The <a href="http://www.kde.org/">KDE Project</a> today announced the
  release of
  <a href="http://www.koffice.org/">KOffice</a> version 2.0 Alpha 3, a technology
  preview of the upcoming version 2.0.
</p>

<h2>Highlights</h2>
<p align="justify">
  This is mainly a technology preview for those that are interested in the new ideas
  and technologies of the KOffice 2 series.
  This release has improved OpenDocument support for KPresenter, the
  presentation application and Kivio, the flowchart modeler. Integration
  of Flake shapes has improved. Flake shapes make integrating various types
  of office documents much easier by providing containers for document types,
  new exciting features in KWord.
  We have the ongoing commitment to allow
  users and innovators to keep up to date with progress as we move towards the
  final 2.0 version that will have various new technologies and concepts which are
  groundbreaking in the open source world.<br>
  KOffice 2 is currently under heavy
  development. It is not meant as something to be used for any real work and can crash
  at any point.  However, here are some of the highlights of the upcoming KOffice 2 series.
  Note that not all of the new technologies will be fully implemented in the first release,
  2.0.
</p>
<p>
Also note that although KOffice is included in KDE 4.0 Beta 2, it has its own
release cycle, and the first version of the KOffice version 2 series
is expected <a
href="http://wiki.koffice.org/index.php?title=KOffice2/Schedule">around
New Year 2007-2008</a>.
</p>


<h3>Better Integration Through Flake Shapes</h3>
<p align="justify">
The core of the new improvements is the revolutionary Flake library,
which will allow KOffice to use any shape in any application.  This allows the same
level of functionality in text editing in both the word processor as in any other
KOffice application, for instance.
</p>
<p>KSpread continues to work on testing and ensuring all its functions follow the ODF standard.
The developers have created a suite of tests to make sure the standard will now and in future versions
be adhered to.  We expect better compatibility with other spreadsheets that also follow
the OpenDocument standard.</p>

<p>More generic KOffice2 info can be found in the <a href="announce-2.0alpha2.php">Alpha2-announcement</a>.</p>


<h3>Changes Since the Alpha 2 release a month ago</h3>
<p>Almost all KOffice application have received work on stabilizing and bug
fixing them, and also a little work on new features.  A small list;
<ul>
    <li>KPresenter and Kivio can now load and save shapes in the ODF document
        format. </li>
    <li>Porting of WMF vector loading/saving code to reinstate that functionality
        for all KOffice applications</li>
    <li>Configuration widgets for all vector shapes have been created or improved</li>
    <li><a href="http://www.kdedevelopers.org/node/2955">Tabbed toolbar and context aware workspace</a> in Kexi</li>
    <li>KWord adds a usability feature;  "when using buttons for increase text size, it
        becomes all the same size, even if I selected multiple sizes."
        (<a href="http://bugs.kde.org/show_bug.cgi?id=84725">Wishlist report</a>)</li>
    <li>KWord implemented a new feature for paragraph numbering that allows us to do a
        "..., x, y, z, aa, bb, cc, ..." kind of counting. 
        This closes a 6 years old feature request, which was one of the longest open ones for KOffice.
        (<a href="http://bugs.kde.org/show_bug.cgi?id=34829">Wishlist report</a>)</li>
    <li>Allow each frame to have a custom run-around that you can edit with the
        vector tools independent of the actual content.
        (<a href="http://www.koffice.org/kword/pics/200707kword-custom-runaround.png" target="_parent">image</a>)</li>
    <li>Remove the dialog that KWord showed when creating a new shape. We now only
        show this for text frames.</li>
    <li>Cleanup the user interface of the PathTool options.</li>
    <li>Make path editing a lot more CPU friendly by limiting the parts that are repainted
        to only what is needed.</li>
    <li>Fix the scale/move/rotate interactions to properly cancel when pressing Escape.</li>
    <li>Work continued on ODF loading/saving in KWord and text in general.</li>
    <li>KWord now properly updates the text when altering either the paragraph or the character styles.</li>
    <li>KSpread sheets can now be duplicated. (<a href="http://bugs.kde.org/show_bug.cgi?id=66003">Wishlist report</a>)</li>
    <li>Ability to parse and display durations in KSpread. (<a href="http://bugs.kde.org/show_bug.cgi?id=121623">Wishlist report</a>)</li>
    <li>KSpread can parse error values, like "#REF!"</li>
    <li>New functions in KSpread: GAMMA, SERIESSUM</li>
</ul>

<h2>About KOffice</h2>
  <p align="justify">
    KOffice is an integrated office suite built on the KDE platform, and utilizes
    free and open standards like
    <a href="http://en.wikipedia.org/wiki/OpenDocument">OpenDocument</a>
    for its document formats, component communication and component embedding.
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
    (<a href="http://www.koffice.org/kivio/">Kivio</a>);
  </li>
  <li>an integrated database application
    (<a href="http://www.koffice.org/kexi/">Kexi</a>);
  </li>
  <li>a new project management application
    (<a href="http://www.koffice.org/kplato/">KPlato</a>).
  </li>
  <li>a pixel based image editing and paint application
    (<a href="http://www.koffice.org/krita/">Krita</a>);
  </li>
  <li>a vector-drawing application
    (<a href="http://www.koffice.org/karbon/">Karbon14</a>).
  </li>
</ul>
<p>
  Additionally, KOffice includes the following helper applications:
</p>
<ul>
  <li>business quality reporting software
    (<a href="http://www.koffice.org/kugar/">Kugar</a>)
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
    <a href="http://www.koffice.org/filters/1.6/">file formats</a>.
</p>
<p align="justify">
  KOffice and all its components (including KDE) are available
  <em><strong>for free</strong></em> under Open Source licenses from the KDE
  <a href="http://download.kde.org/unstable/koffice-1.9.93/src/">http and ftp</a> mirrors.
</p>
<hr />

<p align="justify">
  <font size="2">
  <em>Press Release</em>:  Written by Thomas Zander
<!--  [Translated into _____________ by ______________ .] -->
  </font>
</p>
<p align="justify">
  <font size="-2">
  <em>Trademarks Notices.</em>

  KDE, K Desktop Environment and KOffice are trademarks of KDE e.V.

  Linux is a registered trademark of Linus Torvalds.

  Trolltech and Qt are trademarks of Trolltech ASA.

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
<b>Asia and India</b><br />
     Pradeepto Bhattacharya<br/>
     A-4 Sonal Coop. Hsg. Society<br/>
     Plot-4, Sector-3,<br/>
     New Panvel,<br/>
     Maharashtra.<br/>
     India 410206<br/>
     Phone : +91-9821033168<br/>
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
