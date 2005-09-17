<?php
  $title="KOffice Workspace Screenshots";
  $page_title = 'KOffice Workspace - Screenshots';
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
$gallery = new ImageGallery("KOffice Workspace Screenshots");
$gallery->addImage("pics/koshell1_sm.png", "pics/koshell1.png", "350", "325", "[Screenshot]", 0 , "KOffice Workspace at start");
$gallery->addImage("pics/koshell2_sm.png", "pics/koshell2.png", "350", "253", "[Screenshot]", 0 , "Karbon14 in KOffice Workspace");
$gallery->show();
?>
<p>Screenshots for next coming release 1.5
</p>

 <br />
 <hr width="30%" align="center" />
 <p>
 Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
 </p>
<?php include("footer.inc"); ?>


