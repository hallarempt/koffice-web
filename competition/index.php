<?php
  $page_title="Competitions";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>
<h2>Competition title and deadline</h2>
<p>
</p>
<h3>Objectives</h3>
<h3>Prize</h3>
<h3>Jury</h3>

 <br />
 <hr width="30%" align="center" />
 <p>
 Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
 </p>
<?php
  include("footer.inc");
?>
