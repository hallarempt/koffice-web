<?php
  $page_title="Karbon14";
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>

<?php
  $appinfo = new AppInfo("Karbon14");
  $appinfo->setIcon( "pics/hi48-app-karbon.png", "48", "48");
  $appinfo->setVersion($karbonversion);
  $appinfo->setLicense("gpl");
  $appinfo->setCopyright("1998", "the Karbon Team");
  $appinfo->addAuthor("Rob Buis", "buis@kde.org");
  $appinfo->addAuthor("Lenny Kudling", "kudling@kde.org");
  $appinfo->addContributor("Rob Buis", "buis@kde.org");
  $appinfo->addContributor("Lenny Kudling", "kudling@kde.org");
  $appinfo->addContributor("Benoit Vautrin", "benoit.vautrin@free.fr");
  $appinfo->addContributor("Tomislav Lukman", "tomislav.lukman@ck.hinet.hr");
  $appinfo->show();
?>

<h2>Description</h2>

<p>Karbon14 is the vector drawing application in KDE. It is anticipated that it will be included with KOffice 1.3, when it is released.</p>

<?php include("footer.inc"); ?>

