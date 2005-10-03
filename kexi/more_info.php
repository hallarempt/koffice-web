<?php
  $page_title="About Kexi";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
  include("kexi.inc");
  $appinfo->show();
?>

<p>
<b>About the Project</b><br/>
Kexi Project, started in 2002, is developed by <a href="http://www.kexi-project.org/people.html">Kexi Team</a> - an international group of independent developers, since February 2003 with assistance and support from the <a href="http://www.openoffice.com.pl">OpenOffice Polska</a> company.
</p>

<br />
<hr width="30%" align="center" />
<p>
Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
</p>

<?php include("footer.inc"); ?>
