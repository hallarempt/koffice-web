<?php
  $page_title='KOffice 1.1rc1 Release Notes';
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

      <p>The KOffice team is proud to announce the release of KOffice 1.1rc1.</p> 
      <p>Various resources are available.</p>
      <h2>Announcement</h2>
      <ul>
      <li><a href="/announcements/announce-1.1-rc1.php">Announcement</a></li>
      </ul>
      <h2>Changelog</h2>
      <ul>
      <li><a href="/announcements/changelog-1.1.php">Changelog</a></li>
      </ul>     
      <h2>Download</h2>
      <p>Both source code and binary packages are available.</p>
      <ul>
      <li><a href="/download/source.php">Source code</a></li>
      <li><a href="/download">Binary packages</a></li>
      </ul>
      </p>
      <h2>Bugs</h2>
      <p>If you are using kdelibs-2.1.x, you won't see "*.doc" in the KWord
      file selector when opening a document.  To load a "*.doc" file, you
      must either type *.doc in the filter combobox, or add *.doc to the
      extensions for the application/msword mimetype (this change can be
      made in the Control Center under "Configure File Types Association").
      This problem has been fixed in kdelibs-2.2.x.</P>
      <P>Please do not report this issue as a KWord bug! It is a problem in
      kdelibs which has already been fixed.</P>
<!-- 
      <p>A fix for xxx is available. The patch can be applied against the KOffice 1.1rc1 sources.</p>
      <p>The fix is available <a href="/bugfixes/rc1-blah.diff">here</a>.</p>
      <p>The following bugs are fixed:</p>
      <ul>
      <li>blah.</li>
      </ul>
      </p> -->
      
<?php include("footer.inc"); ?>










