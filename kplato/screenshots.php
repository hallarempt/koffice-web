<?php
  $title="KPlatoScreenshots";
  $page_title = 'KPlato - Screenshots';
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
$gallery = new ImageGallery("KPlato Screenshots");
$gallery->addImage("pics/accounts_2006_01_220.png", "pics/accounts_2006_01.png", "220", "81", "[Screenshot]", 0 , "KPato: accounts view");
$gallery->addImage("pics/taskappointments_2006_01_220.png", "pics/taskappointments_2006_01.png", "220", "128", "[Screenshot]", 0 , "Task appointments view");
$gallery->startNewRow();
$gallery->addImage("pics/gantt_full_2006_01_220.png", "pics/gantt_full_2006_01.png", "220", "128", "[Screenshot]", 0 , "Gantt full view");
$gallery->addImage("pics/resource_2006_01_220.png", "pics/resource_2006_01.png", "220", "121", "[Screenshot]", 0 , "Resources view");
$gallery->show();
?>

 <br />
 <hr width="30%" align="center" />
 <p>
 Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
 </p>
<?php include("footer.inc"); ?>


