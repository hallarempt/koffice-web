<?php
  $page_title='KOffice 1.1beta3 Release Notes';
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

      <p>The KOffice team is proud to announce the release of KOffice 1.1beta3.</p> 
      <p>Various resources are available.</p>
      <h2>Announcement</h2>
      <ul>
      <li><a href="/announcements/announce-1.1-beta3.phtml">Announcement</a></li>
      </ul>
      <h2>Changelog</h2>
      <ul>
      <li><a href="/announcements/changelog-1.1.phtml">Changelog</a></li>
      </ul>     
      <h2>Download</h2>
      <p>Both source code and binary packages are available.</p>
      <ul>
      <li><a href="/download/source.php">Source code</a></li>
      <li><a href="/download">Binary packages</a></li>
      </ul>
      </p>
      <h2>Bugs</h2>
      <p>A fix for a crash in Kontour is available. The patch can be applied against the KOffice 1.1beta3 sources.</p>
      <p>The fix is available <a href="/bugfixes/beta3-killustrator.diff">here</a>.</p>
      <p>The following bugs are fixed:</p>
      <ul>
      <li>Crash when using Kontour, and when using embedded Kontour objects in other applications.</li>
      </ul>
      <p>A fix for a KWord crash is also available <a href="/bugfixes/beta3-kword.diff">here</a>.</p>
      <p>The following bugs are fixed:</p>
      <ul>
      <li>Crash when saving a document after inserting a clipart</li>
      </ul>
      </p>

      
<?php include("footer.inc"); ?>









