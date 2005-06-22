<?php
  $page_title='KPlato';
  $site_root='../';
  include("koffice.inc");
  include("header.inc");
?>
<?php
  $appinfo = new AppInfo("KPlato");
  //$appinfo->setIcon( "pics/hi48-app-kword.png", "48", "48");
  //$appinfo->setVersion($kplatoversion);
  $appinfo->setLicense("lgpl");
  $appinfo->setCopyright("2001", "the KPlato Team");
  $appinfo->addAuthor("Thomas Zander", "zander@kde.org");
  $appinfo->addAuthor("Jim Sabatke", "jsabatke@execpc.com");
  $appinfo->addAuthor("Bo Thorsen", "bo@thorsen-consulting.dk");
  $appinfo->show();
?>

<h2>Description</h2>

      <p><b>Description:</b><br />
         KPlato is a project management application, allowing for the
         planning and scheduling of projects.  It is in the very early
         stages of development.
      </p>

      <p><b>Mailing List:</b><br />
         The KPlato mailing list is at <a href="mailto:kplato@kde.org">kplato@kde.org</a><br />
         Subscription information can be found <a href="http://mail.kde.org/mailman/listinfo/kplato">here</a>.<br />
         Online archives at: <a href="http://lists.kde.org/?l=kplato&amp;r=1&amp;w=2">lists.kde.org</a>
      </p>

<?php include("footer.inc"); ?>
