<?php
  $page_title="Karbon14";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
   include("karbon.inc");
   $appinfo->showIconAndCopyright();
?>

<p>Karbon14 is the scalable vector drawing application in KDE.</p>

        <center>
        <?php
        $gallery = new ImageGallery("Karbon - Screenshot");
        $gallery->addImage("pics/karbon1_sm.png", "pics/karbon1.png", 330, 232,  "[Screenshot]", "", "Karbon14 importing a svg file from Open Clip Art");
        $gallery->show();
        ?>
        </center>

 <br />
 <hr width="30%" align="center" />
 <p>
 Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
 </p>
<?php include("footer.inc"); ?>

