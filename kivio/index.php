<?php
  $page_title="Kivio";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
  include("kivio.inc");
  $appinfo->showIconAndCopyright();
?>

<p>
  <b>Kivio</b> is an easy to use diagramming and flowcharting application with tight integration to the other KOffice applications.
  It enables you to create network diagrams, organisation charts, flowcharts and more.
</p>

<p><center>
  <?php
    $gallery = new ImageGallery("Kivio-Screenshot");
    $gallery->addImage("pics/kivio_svn060127_330.png",
                       "pics/kivio_svn060127.png",
                       330, 248,
                       "[Screenshot]", "",
                       "Kivio");
    $gallery->show();
  ?>
</center></p>

<p>
  <b>Features:</b></p>
  <ul>
    <li>Scriptable stencils using Python.</li>
    <li>Support for Dia stencils.</li>
    <li>Plugin framework for adding more functionality.</li>
  </ul>

<br />
 <br />
 <hr width="30%" align="center" />
 <p>
 Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
 </p>
<?php include("footer.inc"); ?>
