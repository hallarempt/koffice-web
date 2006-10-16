<?php
  $title="KOffice Workspace Screenshots";
  $page_title = 'KOffice Workspace - Screenshots';
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
$gallery = new ImageGallery("KOffice Workspace Screenshots");
$gallery->addImage("pics/start_2005_09_270.png", "pics/start_2005_09.png", "270", "250", "[Screenshot]", 0 , "KOffice Workspace at start");
$gallery->addImage("pics/workspace_2005_09_270.png", "pics/workspace_2005_09.png", "270", "195", "[Screenshot]", 0 , "Karbon14 in KOffice Workspace");
$gallery->show();
?>

 <br />
 <hr width="30%" align="center" />
 <p>
 Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
 </p>
<?php include("footer.inc"); ?>


