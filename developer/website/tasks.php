<?php
  $page_title="KOffice Web Tasks";
  $site_root='../../';
  include("koffice.inc");
  include("header.inc");
?>

<p>$Date$</p>

<p>The following tasks for koffice.org would need some volunteers.</p>

<p>If you send patches for the koffice.org, be careful to use the source in the CVS directory:
www/areas/koffice</p>

<ul>
    <li>Some web pages are still in HTML 4 but the KDE Web is using XHTML 1.0 in the 
    meantime. Such pages should be migrated to XHTML 1.0.
    <ins>(A smaller and simplier step could be to change the tag and attribute names to lower case and to add quotes where needed.)
    (Difficulty: **; Sharability: *)</ins></li>
    
    <li>Some pages are supposed to be XHTML 1.0 but they still contain errors. Such
    sites should be fixed. (Difficulty: **; Sharability: *)</li>
    
    <li><ins>Check and fix spelling</ins> (Difficulty: *; Sharability: *)</li>
</ul>

<p>Note: some of the tasks could be done on all KDE Web sites.
Contact <a href="http://www.kde.org/mailinglists/index.php#kde-www">the kde-www mailing list</a> in that case.</p>

<?php
   include("footer.inc");
?>
