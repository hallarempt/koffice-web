<?php
  $page_title="KDE Module Overview";
  $site_root='../../';
  include("koffice.inc");
  include("header.inc");
?>

<p>Draft $Date$</p>

<h2>Abstract</h2>

<p>This document is an overview of the different modules in KDE CVS.</p>

<h2>Overview</h2>

<!-- TODO: if I remember well, HTML has special table header tags. -->
<!-- TODO: find examples for each module (instead of the non-breaking space) -->
  <table border="5" cellspacing="0" cellpadding="5">
    <tr>
      <td><b>Module Name</b></td>
      <td><b>Description</b></td>
      <td><b>Release<br />Rythmn</b></td>
      <td><b>Example</b></td>
    </tr>
    <tr>
      <td>qt-copy</td>
      <td>Qt</td>
      <td>Qt</td>
      <td>Qt Designer</td>
    </tr>
    <tr>
      <td>arts</td>
      <td>ARTS</td>
      <td>KDE</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>kdelibs</td>
      <td>Basic libraries</td>
      <td>KDE</td>
      <td>KDE Print System</td>
    </tr>
    <tr>
      <td>kdebase</td>
      <td>Basic programs and utilities</td>
      <td>KDE</td>
      <td>Konqueror</td>
    </tr>
    <tr>
      <td>kdenetwork</td>
      <td>Network</td>
      <td>KDE</td>
      <td>Kopete</td>
    </tr>
    <tr>
      <td>kdepim</td>
      <td>Personal Information Management</td>
      <td>KDE</td>
      <td>KMail</td>
    </tr>
    <tr>
      <td>kdegraphics</td>
      <td>Image viewing and manipulation</td>
      <td>KDE</td>
      <td>KView</td>
    </tr>
    <tr>
      <td>kdeutils</td>
      <td>Utilities</td>
      <td>KDE</td>
      <td>KEdit</td>
    </tr>
    <tr>
      <td>kdeedu</td>
      <td>Education</td>
      <td>KDE</td>
      <td>KStars</td>
    </tr>
    <tr>
      <td>kdegames</td>
      <td>Games</td>
      <td>KDE</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>kdeartwork</td>
      <td>Additional artwork for KDE</td>
      <td>KDE</td>
      <td>Screensavers</td>
    </tr>
    <tr>
      <td>kdeaddons</td>
      <td>Small tools for KDE applications</td>
      <td>KDE</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>kdemultimedia</td>
      <td>Multimedia</td>
      <td>KDE</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>kdeaccessibility</td>
      <td>Tools for disabled people</td>
      <td>KDE</td>
      <td>KMouth</td>
    </tr>
    <tr>
      <td>kdekiosk</td>
      <td>KIOSK mode tools</td>
      <td>KDE</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>kdebindings</td>
      <td>Bindings to programming languages</td>
      <td>KDE</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>kdesdk</td>
      <td>Programming Tools</td>
      <td>KDE</td>
      <td>KBabel</td>
    </tr>
    <tr>
      <td>kdetoys</td>
      <td>Toys</td>
      <td>KDE</td>
      <td>kteatime</td>
    </tr>
    <tr>
      <td>kdeadmin</td>
      <td>System Administration</td>
      <td>KDE</td>
      <td>KPackage</td>
    </tr>
    <tr>
      <td>kde-i18n</td>
      <td>Translations</td>
      <td>I18N</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>kdevelop</td>
      <td>Developing Environment</td>
      <td>KDE</td>
      <td>KDevelop</td>
    </tr>
    <tr>
      <td>quanta</td>
      <td>HTML Editor</td>
      <td>KDE?</td>
      <td>Quanta</td>
    </tr>
    <tr>
      <td>kdeextragear-1</td>
      <td>Extra programs</td>
      <td>Extra</td>
      <td>Gwenview</td>
    </tr>
    <tr>
      <td>kdeextragear-2</td>
      <td>Extra programs</td>
      <td>Extra</td>
      <td>Konversation</td>
    </tr>
    <tr>
      <td>koffice</td>
      <td>KOffice</td>
      <td>KOffice</td>
      <td>KWord</td>
    </tr>
    <tr>
      <td>kofficetest</td>
      <td>Test files for KOffice</td>
      <td>Never</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>www</td>
      <td>Web Sites</td>
      <td>Web</td>
      <td><a href="http://www.kde.org">KDE Web Site</a></td>
    </tr>
    <tr>
      <td>kdenonbeta</td>
      <td>Sandbox for developers</td>
      <td>Never</td>
      <td>Kolourpaint</td>
    </tr>
    <tr>
      <td>kde-common</td>
      <td>Administrative stuff</td>
      <td>Never</td>
      <td>Accounts</td>
    </tr>
    <tr>
      <td>CVSROOT</td>
      <td>Internal CVS data and administration</td>
      <td>Never</td>
      <td>&nbsp;</td>
    </tr>
  </table>

<p>Release rythmns:</p>
<ul>
  <li>Qt: <a href="http://www.trolltech.com">Trolltech</a> has its own release cycles for Qt. Qt-copy is released with KDE.</li>
  <li>KDE: released with KDE (1 or 2 per year).</li>
  <li>KOffice: released with KOffice (1 per year or even less).</li>
  <li>Extra: released each program separately.</li> <!-- TODO: is it really true? -->
  <li>I18N: the translations are released with the corresponding programs.</li>
  <li>Web: web sites are normally synchronized every half-an-hour.</li>
  <li>Never: these modules are never released.</li>
</ul>

<h2>Most basic system</h2>

<p>TODO (In short: the most basic system is made of Qt, arts, kdelibs, kdebase.
With koffice, it makes a minimal system for working with KOffice.
???Recommended minimal: add kdegraphics and kdepim???</p>

<h2>Qt</h2>

<p>TODO (short: Qt-copy is not a fork but just a convenience to avoid to have
to patch the official Qt release. However KDE works with official Qt versions and
with Qt snapshots (except severe bugs of course.) Snapshot not recommended
for stable KDE.</p>

<h2>KIOSK</h2>

<p>TODO (in short: the KIOSK mode allows to forbid users to change certain settings
in KDE.) <!-- TODO: URL --></p>

<h2>kdesdk</h2>

<p>TODO</p>

<h2>kde-common</h2>

<p>TODO (in short: kde-common/admin is mapped in all/most modules.)</p>

<h2>kdenonbeta</h2>

<p>TODO (in short: it is the sandbox. Programs here might not work or might
be jewels. :-) Put your new projects here.)</p>

<h2>kdeextragear</h2>

<p>TODO: (in short: stable programs not released with KDE.)</p>

<h2>www</h2>

<p>TODO: (in short: write protect by default.
The module developer.kde.org might be interesting to download to have the info offline.)
<!-- TODO: overview of sites (already existing somewhere?) -->
</p>


<?php
   include("footer.inc");
?>
