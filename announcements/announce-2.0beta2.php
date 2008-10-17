<?php
  $page_title ='KOffice 2.0 Beta 2 Release Announcement';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

<p align="justify">
  DATELINE OCTOBER 19, 2008<br />
  <?php ##FOR IMMEDIATE RELEASE
    ?>
    UNFINISHED
</p>
<h2>
  KDE Releases Second Beta of KOffice 2.0
</h2>
<p align="justify">October, 2008 (The INTERNET).
  The <a href="http://www.kde.org/">KDE Project</a> today announced the
  release of
  <a href="http://www.koffice.org/">KOffice</a> version 2.0 Beta 2, the second
  beta version of the upcoming version 2.0.
</p>

<p align="justify">
    The KOffice team releases a second beta version today, in line with the
    monthly releases leading up to the 2.0 final release of the innovative
    office suite KOffice2.
</p>
<p align="justify">
    Over the last few years, the KOffice team has reworked the framework
    into an agile and flexible codebase. Our intention was to increase
    integration between the components of KOffice, decreasing duplication
    of functionality and easing maintenance and development of new
    features. Furthermore, new approaches to UI design and interacting
    with the user have been implemented to support the new capabilities.
</p>
<p align="justify">
    The goal for the second beta is to show progress made since beta1,
    as well as to gather feedback from both users
    and developers on the new UI and underlying infrastructure. This
    will allow us to release a basically usable 2.0 release, demonstrating
    our vision for the future of the Digital Office to a larger audience
    and attract new contributions both in terms of code and ideas for
    improvements.
</p>
<p align="justify">
    KOffice is in beta because the development team wants to receive feedback
    and bugreports from actual users.  Since the last beta release a significant
    set of issues and speedups-fixes have been integrated for all applications
    and this release shows the shift of focus from new features to bug fixes
    until 2.0 is released.
</p>
<p align="justify">
    The release team has decided that the following applications are mature
    enough to be part of 2.0:
    <table border="0">
    <tr><td><a href="http://www.koffice.org/kword">KWord </a></td><td>Word processor</td></tr>
    <tr><td><a href="http://www.koffice.org/kspread">KSpread </a></td><td>Spreadsheet calculator</td></tr>
    <tr><td><a href="http://www.koffice.org/kpresenter">KPresenter </a></td><td>Presentation manager</td></tr>
    <tr><td><a href="http://www.koffice.org/kplato">KPlato </a></td><td>Project management software</td></tr>
    <tr><td><a href="http://www.koffice.org/karbon">Karbon </a></td><td>Vector graphics editor</td></tr>
    <tr><td><a href="http://www.koffice.org/krita">Krita </a></td><td>Raster graphics editor</td></tr>
    </table>
</p>
<p align="justify">
    The chart application KChart is available as a shape plugin, which
    means that charts are available in all the KOffice applications in an
    integrated manner.
</p>

<h2>Highlights of KOffice 2.0</h2>

<p align="justify">
    KOffice 2 will be a much more flexible application suite than KOffice 1
    ever was. The integration between the components is much stronger,
    with the revolutionary Flake Shapes as the central concept.  A Flake
    Shape can be as simple as a square or a circle or as complex as a
    chart or a music score.
</p>

<p align="justify">
    With Flake, any KOffice application can handle any shape. For instance,
    KWord can embed bitmap graphics, Krita can embed vector graphics and
    Karbon can embed charts.  This flexibility does not only give KOffice
    unprecedented integration, but also allows new applications to be 
    created very easily.  Such applications can e.g. target special
    user groups like kids or certain professions.
</p>

<h3>Unified Look and Feel</h3>
<p align="justify">
    All the applications of KOffice has a new GUI layout better suited to
    todays wider screens.  The GUI consists of a workspace and a sidebar
    where tools can dock.  Any tool can be ripped off to create its own 
    window and later be redocked fo full flexibility.  The users setup
    preferences are of course saved and reused the next time that KOffice
    is started.
</p>
<p>
<center>
<a href="pics/2008-09-25-kpresenterbeta1.png"><img src="pics/2008-09-25-kpresenterbeta1-thumbnail.png" width="430" height="341" /></a>
<a href="pics/2008-09-25-kritabeta1.png"><img src="pics/2008-09-25-kritabeta1-thumbnail.png" width="430" height="318" /></a>
<a href="pics/2008-09-25-karbonbeta1.png"><img src="pics/2008-09-25-karbonbeta1-thumbnail.png" width="430" height="325" /></a>
</center>
</p>

<h3>Platform Independence </h3>
<p align="justify">
    All of KOffice is available on Linux with KDE or GNOME, Windows and
    Macintosh.  Solaris will follow shortly and we expect builds for
    other Unix versions to become available soon after the final release.
</p>
<p align="justify">
    Since KOffice builds on Qt and the KDE libraries, all applications
    integrate well with the respective platforms and will take on the
    native look and feel.
</p>
<p>
<center>
<a href="pics/2008-09-25-kword-windows-beta1.png"><img src="pics/2008-09-25-kword-windows-beta1-thumbnail.png" width="410" height="307" /></a>
</center>
</p>

<h3>Native Support for OpenDocument</h3>
<p align="justify">
    The OASIS OpenDocument Format (ODF) is the ISO standard for office
    document interchange. ODF has been selected as the national standard
    for many countries around the world, and continues to grow stronger
    every month.
</p>
<p align="justify">
    KOffice uses the OpenDocument Format as its native format. This will
    guarantee interoperation with many other Office packages such as
    OpenOffice.org and MS Office.  The KOffice
    team has representatives on the OASIS technical committee for ODF
    and has been a strong participant in the process of shaping ODF since
    its inception.
</p>

<h2>More Information</h2>
<p align="justify">
    More information about new KOffice2 technology can be found in the
    <a href="changelog-2.0-beta2.php">changelog</a>
and earlier announcements or in the <a href="http://www.koffice.org/releases/2.0beta2-release.php">release notes</a>.
</p>

<h2>Bug Reports and User Feedback</h2>
<p align="justify">
      From this release, the developers are very interested in user feedback
      and bug reports.  Please report bugs that you find on the KDE bugzilla
    <a href="http://bugs.kde.org">bugs.kde.org</a>.  In particular, the KOffice Team
    is interested in bugs in the following areas:
<ul>
  <li>OpenDocument support</li>
  <li>Crashes</li>
  <li>Errors on non-Unix platforms since most developers run Linux and may overlook these.</li>
</ul>
</p>

<h2>About KOffice</h2>
  <p align="justify">
    KOffice is an integrated office suite built on the KDE platform, and
    utilizes free and open standards like
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
<p align="justify">
  KOffice and all its components (including KDE) are available
  <em><strong>for free</strong></em> under Open Source licenses from the KDE
  <a href="http://download.kde.org/unstable/koffice-1.9.98.1/src/">http and ftp</a> mirrors.
</p>
<hr />

<p align="justify">
  <font size="2">
  <em>Announcement</em>:  Written by Thomas Zander &amp; Inge Wallin
<!--  [Translated into _____________ by ______________ .] -->
  </font>
</p>
<p align="justify">
  <font size="-2">
  <em>Trademarks Notices.</em>

  KDE, K Desktop Environment and KOffice are trademarks of KDE e.V.

  Linux is a registered trademark of Linus Torvalds.

  Qt is a trademark of Nokia

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
  AJ Venter<br />
  Unit 7B Beauvallon Village<br />
  13 Sandown Road<br />
  West Beach<br />
  Cape Town<br />
  7441<br />
  South-Africa<br />
  Phone: +27-83-455-9978<br />
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
<b>North America</b>
Wade Olson <br />
2422 Johnson St NE <br />
Minneapolis, MN 55418 <br />
U.S.A <br />
Phone: (612)805-5678 <br />
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
