<?php
  $page_title="KFormula";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<h2>Description</h2>

      <p>
      KFormula is a free KDE formula editor, part of KOffice.
      </p>
      <p>
      KFormula is an easy to use formula editor. It provides the basic input
      facilities and the support functionality you come to expect of a KOffice
      application. But there is more. Some of its most exciting features are:
      </p>
      <ul><li>Easy Greek letter insertion</li>
      <li>Intelligent cursor movement</li>
      <li>Advanced syntax highlighting</li>
      <li>Multi-level undo support</li>
      <li>LaTeX export (copy and paste into a text editor)</li>
      <li>MathML import</li>
      </ul>

        <center>
        <?php
        $gallery = new ImageGallery("KFormula- Screenshot");
        $gallery->addImage("pics/kformula3_sm.png", "pics/kformula3.png", 330, 119,  "[Screenshot]", "", "KFormula");
        $gallery->show();
        ?>
        </center>

      <p>
      KFormula uses the KOffice formula drawing library. If you have to deal with many
      formulas you may wish to use a KFormula object embedded in <a href="/kword/">KWord</a> or
      <a href="/kspread/">KSpread</a>.
      </p>

 <br />
 <hr width="30%" align="center" />
 <p>
 Last update: <?php echo date ("Y-m-d", filemtime(__FILE__)); ?>
 </p>
<?php include("footer.inc"); ?>





