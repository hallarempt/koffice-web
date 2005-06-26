<?php
  $page_title="KFormula";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
  $appinfo = new AppInfo("KFormula");
  $appinfo->setIcon( "pics/hi48-app-kformula.png", "48", "48");
  $appinfo->setVersion($kformulaversion);
  $appinfo->setLicense("gpl");
  $appinfo->setCopyright("2001", "the KFormula Team");
  $appinfo->addAuthor("Andrea Rizzi", "&#x72;i&#0122;&#122;i&#x40;&#x6b;de&#x2e;org");
  $appinfo->addAuthor("Stephan Kulow", "c&#00111;&#0111;&#x6c;&#00111;&#x40;&#107;d&#101;.org");
  $appinfo->addContributor("Andrea Rizzi", "riz&#x7a;&#0105;&#64;k&#x64;&#x65;.or&#x67;");
  $appinfo->addContributor("Ulrich Kuettler", "ulrich.k&#x75;&#x65;t&#x74;&#00108;e&#0114;&#0064;ma&#x69;&#0108;bo&#00120;.tu-d&#114;esden&#46;&#100;e");
  $appinfo->show();
?>

<h2>Description</h2>

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
      </ul>
      
      <p>
      KFormula uses the KOffice formula drawing library. If you have to deal with many
      formulas you may wish to use a KFormula object embedded in <a href="/kword/">KWord</a> or
      <a href="/kspread/">KSpread</a>.
      </p>

      <h2>Coming soon to KFormula</h2>
      <ul>
      <li>LaTeX import</li>
      <li>MathML import</li>
      </ul>

<?php include("footer.inc"); ?>





