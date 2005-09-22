<?php
  $site_root = '../';
  $page_title="KOffice Workspace";
  include("koffice.inc");
  include("header.inc");
?>

<?php
   include("koshell.inc");
   $appinfo->showIconAndCopyright();
?>

<p>KOffice Workspace, also named KOShell, consists in a friendly workspace to allow you to work on several KOffice applications at the same time. KOShell main window consists of a side pane on the left showing the icons of the available KOffice components and of the main view on the right which contains the main window of the opened programs in tabs. Each KOffice application keeps the same functionalities than the stand-alone program and integrates easily in the workspace by embedding its menus and toolbars.</p>

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
        $gallery->addImage("pics/koshell_sm.png", "pics/koshell.png", 330, 274,  "[Screenshot]", "", "KOffice Workspace with KChart, KPresenter and KSpread documents");
        $gallery->show();
        ?>
        </center>


 <br />
 <hr width="30%" align="center" />
 <p>
 Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
 </p>
<?php include("footer.inc"); ?>





