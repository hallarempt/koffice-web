<?php
  $page_title="Competitions";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<h3>Current competition</h3>
<p>The last competition, <a href="guiKOffice2.php">GUI and Functionality
    Design Competition for KOffice 2</a>, started on December 15 2005 and ended on March 5th.  It was won by Martin Pfeiffer.</p>

<a name="news" />
<?php
  kde_general_news("./news.rdf", 5, true);
 ?>

 <br />
 <hr width="30%" align="center" />
 <p>
 Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
 </p>
<?php
  include("footer.inc");
?>
