<?php
  $page_title='KOffice 1.2 Release Notes';
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

      <p>The KOffice team is proud to announce the release of KOffice 1.2.</p>
      <p>Various resources are available.</p>
      <h2>Announcement</h2>
      <ul>
      <li><a href="/announcements/announce-1.2.php">Announcement</a></li>
      </ul>
      <h2>Changelog</h2>
      <ul>
      <li><a href="/announcements/changelog-1.2.php">Changelog</a></li>
      </ul>     
      <h2>Download</h2>
      <p>Both source code and binary packages are available.</p>
      <ul>
      <li><a href="/download/source.php">Source code</a></li>
      <li><a href="/download">Binary packages</a></li>
      </ul>
      <h2>MD5 sums</h2>
      <p>
       The MD5 sum for the tarballs is:
<?php
include "md5-koffice-1.2.inc"
?>
      </p>
      <p>
       Also provided: <a href="md5-pgp-koffice-1.2.txt">a PGP-signed version of the MD5 sums</a>.
      </p>


      <h2>Bugs</h2>
      <p>A fix for <b>KSpread</b>'s crashes is available.
      The patch, available <a href="/bugfixes/1.2_kspread_obscured_cells.diff">here</a> can be applied against the KOffice 1.2 sources.</p>
      <p>It should fix all the crashes which used to occur when the sheet contains merged
      cells or a cell with long text, which overlapps the next cell(s).</p>


<?php include("footer.inc"); ?>
