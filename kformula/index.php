<?php
  $site_root = '../';
  $page_title="KFormula";
  include("koffice.inc");
  include("header.inc");
?>

<?php
   include("kformula.inc");
   $appinfo->showIconAndCopyright();
?>

<p>KFormula is a formula editor for KOffice.</p>

<p>KFormula can be used to create and edit mathematical formulas that
can be included in other KOffice documents.  It provides simple input
facilities and supports the functionality you expect from a KOffice
application. But there is more. Some of its most exciting features
are:</p>

<ul>
  <li>Easy Greek letter insertion</li>
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





