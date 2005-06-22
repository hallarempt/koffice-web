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

      <h2>Bugfixes</h2>
      <p>A fix for <b>KoShell</b> is available, to make it able to save documents.
        The patch, available <a href="/bugfixes/1.4-koshell-saving.diff">here</a> must be applied
        against the KOffice 1.4 sources (in the koffice/lib/kofficecore directory).</p>

<?php include("footer.inc"); ?>
