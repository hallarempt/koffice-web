<?php
  $page_title="Kivio";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
  $appinfo = new AppInfo("Kivio");
  $appinfo->setIcon( "pics/hi48-app-kivio.png", "48", "48");
  $appinfo->setVersion($kivioversion);
  $appinfo->setLicense("gpl");
  $appinfo->setCopyright("1998", "the Kivio Team");
  $appinfo->addAuthor("Dave Marotti", "lndshark@verticaladdiction.net");
  $appinfo->addContributor("Peter Simonsson", "psn@linux.se");
  $appinfo->addContributor("Ian Reinhart Geiser", "geiseri@kde.org");
  $appinfo->addContributor("Laurent Montel", "montel@kde.org");
  $appinfo->addContributor("Frauke Oster", "oster@kde.org");
  $appinfo->show();
?>

<h2>Description</h2>

<p>
Kivio is a flowcharting and diagramming application for the KOffice application
suite, and has an userinterface that is simliar to Visio&reg;.
It is fully integrated into KOffice and can for example be embeded into KWord.
</p>

<p>
  <b>Features:</b><br/>
  <ul>
    <li>Scriptable stencils using Python.</li>
    <li>Support for Dia stencils.</li>
    <li>Plugin framework for adding more functionality.</li>
  </ul>
</p>

<p>
If you want to keep up with the development check out
<a href="http://www.kdedevelopers.org/blog/4">Peter Simonsson's weblog</a>
</p>

<?php include("footer.inc"); ?>
