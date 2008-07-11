<?php
  $page_title="Install KOffice unstable from svn";
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>
    <p>Go to <a href="http://wiki.koffice.org/index.php?title=Build_KOffice">KOffice's wiki</a> for instruction on how to build KOffice from subversion.</a></p>

<br />
<hr width="30%" align="center" />
<p>
Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
</p>
<?php include("footer.inc"); ?>
