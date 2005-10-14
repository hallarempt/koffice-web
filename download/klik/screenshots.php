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
$gallery->addImage("pics/koffice-klik-koshell-karbon_2005_10_270.png", "pics/koffice-klik-koshell-karbon_2005_10.png", "270", "202", "[Screenshot]", 0 , "Karbon within the KOShell");
$gallery->addImage("pics/koffice-klik-fileopen-preview-for-karbon_2005_10_270.png", "pics/koffice-klik-fileopen-preview-for-karbon_2005_10.png", "270", "202", "[Screenshot]", 0 , "Open a Karbon Document");
$gallery->startNewRow();
$gallery->addImage("pics/koffice-klik-requirements_2005_10_270.png", "pics/koffice-klik-requirements_2005_10.png", "270", "224", "[Screenshot]", 0 , "The klik://koffice requirements dialog");
$gallery->addImage("pics/koffice-klik-kdialog-app-selection_2005_10_270.png", "pics/koffice-klik-kdialog-app-selection_2005_10.png", "270", "153", "[Screenshot]", 0 , "The available applications dialog");
$gallery->startNewRow();
$gallery->addImage("pics/koffice-klik-package-help_2005_10_270.png", "pics/koffice-klik-package-help_2005_10.png", "270", "340", "[Screenshot]", 0 , "The klik://koffice help dialog");
$gallery->addImage("pics/koffice-klik-language-help_2005_10_270.png", "pics/koffice-klik-language-help_2005_10.png", "270", "294", "[Screenshot]", 0 , "The klik://koffice languages dialog");
$gallery->show();
?>

<br />
 <br />
 <hr width="30%" align="center" />
 <p>
 Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
 </p>
<?php include("footer.inc"); ?>