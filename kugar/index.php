<?php
  $page_title="Kugar";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
  $appinfo = new AppInfo("Kugar");
  $appinfo->setIcon( "pics/cr48-app-kugar.png", "48", "48");
  $appinfo->setVersion($kugarversion);
  $appinfo->setLicense("gpl");
  $appinfo->setCopyright("2002", "the Kugar Team");
  $appinfo->addAuthor("Alexander Dymo", "cloudtemple@mksat.net");
  $appinfo->addContributor("Joseph Wenninger", "jowenn@kde.org");
  $appinfo->addContributor("Per Winkvist", "per.winkvist@cellnetwork.com");
  $appinfo->show();
?>

<h2>Description</h2>

<?php include("footer.inc"); ?>

