<?php
  $page_title="Current Version";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<p>
There are two kinds of Kexi release users can choose from: one bundled with KOffice release and standalone.
</p>

<p>
<b>Kexi Versions Released with KOffice</b><br/>
Current Kexi version released together with KOffice 1.4 is <b>0.8</b>. See <a
href="http://www.kexi-project.org/wiki/wikiview/index.php?AnnouncementForKOffice1.4">the announcement</a>.
</p>

<p>
<b>Standalone Kexi Release</b><br/>
<p>
The most current version Kexi released without KOffice is <b>0.9</b>. 
See <a
href="http://www.kexi-project.org/wiki/wikiview/index.php?0.9Announcement">the announcement</a>.
</p>
Standalone Kexi releases usually provide more features than Kexi included in the newest KOffice release. This is possible because there are shoter release cycles within Kexi project comparing to release cycles of entire KOffice project. Standalone Kexi releases are designed to work well also when entire KOffice suite (with other Kexi version) is installed on the same computer.
</p>

<br />
<hr width="30%" align="center" />
<p>
Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
</p>

<?php include("footer.inc"); ?>
