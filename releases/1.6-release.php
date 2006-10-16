<?php
  $page_title='KOffice 1.6 Release Notes';
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>
<p align="justify">
  DATELINE OCTOBER 16, 2006<br />
  FOR IMMEDIATE RELEASE
</p>

      <p>The KOffice team is proud to announce KOffice 1.6.</p>

      <h2>Announcement</h2>
      <ul>
      <li><a href="/announcements/announce-1.6.php">Announcement</a></li>
      </ul>

      <h2>Changelog</h2>
      <ul>
      <li><a href="/announcements/changelog-1.6.php">Changelog</a></li>
      </ul>

      <h2>Download</h2>
      <ul>
      <li>Source code of KOffice 1.6:
	<table border="0" cellpadding="4" cellspacing="0">
	  <tr>
	    <th align="left">Description</th>
	    <th align="left">Location</th>
	  <tr>
	    <td>KOffice 1.6 (source code)</td>
	    <td><a href="http://download.kde.org/stable/koffice-1.6.0/src/koffice-1.6.0.tar.bz2">koffice-1.6.0.tar.bz2</a></td>
	  </tr>
	  <tr>
	    <td>KexiMDB 1.1.0 (MS Access import plugin)</td>
	    <td><a href="http://download.kde.org/stable/koffice-1.6.0/src/keximdb-1.1.0.tar.gz">keximdb-1.1.0.tar.gz</a></td>
	  </tr>
	</table>
      </li>
      <li>
	<a href="http://download.kde.org/stable/koffice-1.6.0/">Binary packages</a>, currently available for <a href="http://kubuntu.org/announcements/koffice-16.php">Kubuntu</a> or <a href="http://download.kde.org/stable/koffice-1.6.0/SuSE/">SuSE</a>.
      </li>
      <li>
        <a href="http://www.koffice.org/download/kofficelivecd.php">Live CD</a>
      </li>
      </ul>

      <h2>MD5 sums</h2>
      <p>
       The MD5 sums for the tarballs are:
      </p>
<?php
include "md5-koffice-1.6.inc"
?>
      <p>
       Also provided: <a href="md5-pgp-koffice-1.6.txt">a PGP-signed version of the MD5 sums</a>.
      </p>

<a name="compiling"></a><h2>
  Compiling KOffice 1.6
</h2>
<p align="justify">
  <a name="source_code-library_requirements"></a><strong>Library
  Requirements</strong>:
  KOffice 1.6 requires the following libraries:
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
    <a href="http://xmlsoft.org/">libxml2</a> &gt;= 2.4.9 and
    <a href="http://xmlsoft.org/XSLT/">libxslt</a> &gt;= 1.0.7.
    for reading help pages and other KOffice documentation,
    </div>
  </li>
  <li>
    <div align="justify">
    <a href="http:///">lcms</a> &gt;= 1.15 for handling color
    spaces.  1.14 should not be used due to severe bugs.
    </div>
  </li>
</ul>
<p align="justify">
  <strong>Compiler Requirements</strong>:
  Please note that KOffice 1.6 will not
  compile with older versions of <a href="http://gcc.gnu.org/">gcc/egcs</a>,
  such as egcs-1.1.2 or gcc-2.7.2.  At a minimum gcc-2.95-* is required.
</p>
<p align="justify">
  <a name="source_code"></a><strong>Source Code</strong>:
  The complete source code for KOffice 1.6 is available for free download
  via one of the KDE
  <a href="http://download.kde.org/stable/koffice-1.6.0/">http</a>
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
<?php include("footer.inc"); ?>
