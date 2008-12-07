<?php
  $page_title="Junior Jobs";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<div id="quicklinks">[
	<a href="doc-writers.php">Doc Junior Jobs</a> |
    <a href="jj-solved.php">Junior Jobs Done</a>
	]
</div>

 <p>The list of Junior Jobs is now available on KOffice <a href="http://wiki.koffice.org/index.php?title=Junior_Jobs">wiki</a>.</p>

 <hr width="30%" align="center" />
 <p>
 Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
 </p>
<?php
  include("footer.inc");
?>
