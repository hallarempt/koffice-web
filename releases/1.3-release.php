<?php
  $page_title='KOffice 1.3 Release Notes';
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

      <p>The KOffice team is proud to announce the final version of KOffice 1.3.</p>

      <p>Note: Kexi is not part of this version. 
      It is slated for a stand-alone release later this year and
      will be integrated into the next major version of KOffice.
      </p>


      <h2>Changelog</h2>
      <ul>
      <li><a href="/announcements/changelog-1.3.php">Changelog</a></li>
      </ul>

      <h2>Download</h2>
      <p>Both source code and binary packages are available.</p>
      <ul>
      <li><a href="/download/source.php">Source code</a></li>
      <li><a href="/download/">Binary packages</a></li>
      </ul>
      </p>

      <h2>MD5 sums</h2>
      <p>
       The MD5 sums for the tarballs are:
<?php
include "md5-koffice-1.3.inc"
?>
      </p>
      <p>
       Also provided: <a href="md5-pgp-koffice-1.3.txt">a PGP-signed version of the MD5 sums</a>.
      </p>

<?php include("footer.inc"); ?>
