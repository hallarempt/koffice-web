<?php
  $page_title='KOffice 1.3beta1 Release Notes';
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

      <p>The KOffice team is proud to announce the release of KOffice 1.3beta1.</p> 
      <p>Various resources are available.</p>
      <h2>Announcement</h2>
      <ul>
      <li><a href="/announcements/announce-1.3-beta1.php">Announcement</a></li>
      </ul>
      <h2>Changelog</h2>
      <ul>
      <li><a href="/announcements/changelog-1.3beta1.php">Changelog</a></li>
      </ul>     
      <h2>Download</h2>
      <p>Both source code and binary packages are available.</p>
      <ul>
      <li><a href="/download/source.php">Source code</a></li>
      <li><a href="/download">Binary packages</a></li>
      </ul>

      <h2>Bugs</h2>
      <p>A fix for a <b>KWord/KPresenter</b> crash is available.
        The patch, available <a href="/bugfixes/1.3-beta1_kword_crash.diff">here</a> can be applied
        against the KOffice 1.3-beta1 sources (in the koffice/lib/kotext directory).</p>
      <p>It fixes a crash related to paragraphs with numbers or bullets.</p>

      </p>

<?php include("footer.inc"); ?>







