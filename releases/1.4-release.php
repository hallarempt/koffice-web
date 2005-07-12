<?php
  $page_title='KOffice 1.4 Release Notes';
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

      <p>The KOffice team is proud to announce the final version of KOffice 1.4.</p>

      <p>Note: This release contains two new applications:<br>
      <ul>
      <li><a href="/krita/">Krita</a> - a pixel based image manipulation application</li>
      <li><a href="/kexi/">Kexi</a> - an integrated data management application.</li>
      </ul>
      </p>


      <h2>Announcement and Changelog</h2>
      <ul>
      <li><a href="/announcements/announce-1.4.php">Announcement</a></li>
      <li><a href="/announcements/changelog-1.4.php">Changelog</a></li>
      </ul>
      
      
      <h2>1.4.0b Patchset</h2>
      <p>A <a href="/bugfixes/koffice_1.4.0_patchset_1b.diff.bz2">patch</a> has been
      released that includes all bugfixes for KOffice 1.4 up to 10th July 2005.<br>
      It also fixes a crash in KWord and KSpread among other improvements. The patch
      can only be used with the sourcecode release. To use the patch, follow these steps:
      </p>
      <ul>
      <li><a href="/bugfixes/koffice_1.4.0_patchset_1b.diff.bz2">Download the patch</a></li>
      <li>bunzip2 koffice_1.4.0_patchset_1b.diff.bz2</li>
      <li>apply the patch in the top directory of the unpacked KOffice 1.4.0a sourcecode:
      patch -p0 &lt; koffice_1.4.0_patchset_1b.diff</li>
      <li>Then compile and install KOffice as described <a href="/download/source.php">here</a>.</li>
      </ul>


      <h2>Download</h2>
      <p>Both source code and binary packages are available.</p>
      <ul>
      <li><a href="/download/source.php">Source code</a></li>
      <li><a href="/download/">Binary packages</a></li>
      </ul>

      <h2>MD5 sums</h2>
      <p>
       The MD5 sums for the tarballs are:
      </p>
<?php
include "md5-koffice-1.4.inc"
?>
      <p>
       Also provided: <a href="md5-pgp-koffice-1.4.txt">a PGP-signed version of the MD5 sums</a>.
      </p>

<?php include("footer.inc"); ?>
