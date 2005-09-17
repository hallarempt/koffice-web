<?php
  $page_title="KOffice Workspace";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
   include("koshell.inc");
   $appinfo->showIconAndCopyright();
?>

<p>KOffice Workspace is the Office suite shell. This workspace allows you to work on different KOffice documents at the same time, each one in a different tab.</p>

<!--<p>KOffice Worspace </p>

<ul>
  <li>Easy Greek letter insertion</li>
  <li>Intelligent cursor movement</li>
  <li>Advanced syntax highlighting</li>
  <li>Multi-level undo support</li>
  <li>LaTeX export (copy and paste into a text editor)</li>
  <li>MathML import</li>
</ul> -->

        <center>
        <?php
        $gallery = new ImageGallery("KOShell- Screenshot");
        $gallery->addImage("pics/koshell_sm.png", "pics/koshell.png", 350, 247,  "[Screenshot]", "", "KOffice Workspace with KPresenter and KWord documents");
        $gallery->show();
        ?>
        </center>


 <br />
 <hr width="30%" align="center" />
 <p>
 Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
 </p>
<?php include("footer.inc"); ?>





