<?php
  $page_title='KOffice 1.2.1 Release Notes';
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

      <p>The KOffice team is proud to announce the release of KOffice 1.2.1.</p>
      <p>Various resources are available.</p>
      <h2>Announcement</h2>
      <ul>
      <li><a href="/announcements/announce-1.2.1.phtml">Announcement</a></li>
      </ul>
      <h2>Changelog</h2>
      <ul>
      <li><a href="/announcements/changelog-1.2.1.phtml">Changelog</a></li>
      </ul>     
      <h2>Download</h2>
      <p>Both source code and binary packages are available.</p>
      <ul>
      <li><a href="/install-source.phtml">Source code</a></li>
      <li><a href="/install-binaries.phtml">Binary packages</a></li>
      </ul>
      <h2>MD5 sums</h2>
      <p>
       The MD5 sums for the tarballs are:
<?php
include "md5-koffice-1.2.1.inc"
?>
      </p>
      <p>
       Also provided: <a href="md5-pgp-koffice-1.2.1.txt">a PGP-signed version of the MD5 sums</a>.
      </p>

      <h2>Bugs</h2>
      <p>A fix for two <b>KWord</b> crashes is available.
        The patch, available <a href="/bugfixes/1.2.1_kword_crashes.diff">here</a> can be applied
        against the KOffice 1.2.1 sources.</p>
      <p>It fixes a crash when closing the "Insert Special Character" dialog, and a crash
      when updating the Table Of Contents</p>


<?php include("footer.inc"); ?>
