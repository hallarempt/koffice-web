<?php
  $page_title="klik://koffice -- Screenshots";
  $site_root='../../';
  include("koffice.inc"); 
  include("header.inc");
?> 

<?php
$gallery = new ImageGallery("klik://koffice -- Screenshots");
$gallery->addImage("pics/koffice-klik-koshell_2005_10_270.png", "pics/koffice-klik-koshell_2005_10.png", "49", "202", "[Screenshot]", 0 , "The KOShell sidebar lets you choose what KOffice application you want to start");
$gallery->addImage("pics/koffice-klik-koshell-kword_2005_10_270.png", "pics/koffice-klik-koshell-kword_2005_10.png", "270", "202", "[Screenshot]", 0 , "KOShell: the KOffice Workspace with a KWord document");
$gallery->startNewRow();
$gallery->show();
?>

<br />
 <br />
 <hr width="30%" align="center" />
 <p>
 Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
 </p>
<?php include("footer.inc"); ?>